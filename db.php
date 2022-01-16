<?php

class db{
    public function connect()
    {
        return $pdo = new PDO("mysql:host=localhost;port=3306;dbname=search","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    public function __construct()
    {
        $this->con= $this->connect();
    }
    public function show($table)
    {
        $statement = $this->con->prepare("SELECT * FROM `resualt`");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function search($search){
        $statement = $this->con->prepare("SELECT * FROM `resualt` WHERE title LIKE :title");
        $statement->bindValue(":title","%$search%");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function num(){
        $statement = $this->con->prepare("SELECT * FROM `resualt`");
        $statement->execute();
        return $statement->rowCount();

    }
}
