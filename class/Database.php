<?php


class Database
{
    private $pdo;
    private $allBooks;
    private $searchResult;
    private $matchedKeys;

    public function __construct()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;charset=UTF8; dbname=autocompletion', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        /*Récupère toutes les datas*/
        $statement = $this->pdo->prepare("select * from livre");
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $this->allBooks[$row['Titre']] = $row;
        }
    }

    public function getAllBooks()
    {
        return $this->allBooks;
    }

    /*Récupère le titre d'un livre grace à son id*/
    public function selectTitle($id)
    {
        foreach ($this->allBooks as $title => $array) {
            if ($array['id'] == $id) {
                return $array;
            }
        }
    }

    public function selectTitles($search)
    {
        /*Cherche une correspondance dans le titre*/
        foreach ($this->allBooks as $title => $array) {
            if (preg_match("/{$search}/i", $array['Titre'])) {
                $matchedTitle = $array['Titre'];
                $this->searchResult[$matchedTitle] = $array;
            }
        }
        /*Si aucun titre ne matche, cherche une correspondance dans l'éditeur, l'auteur*/
        if (empty($this->searchResult)) {
            foreach ($this->allBooks as $title => $array) {
                foreach ($array as $key => $value) {
                    if (preg_match("/{$search}/i", $value)) {
                       $this->searchResult[$array['Titre']] = $array;
                       $this->matchedKeys = [$key, $value];
                    }
                }
            }
        }
    }

    public function getSearchResult()
    {
        return $this->searchResult;
    }


    public function getMatchedKeys()
    {
        return $this->matchedKeys;
    }
}