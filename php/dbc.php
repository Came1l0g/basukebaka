<?php

function dbc()
{
    $host = "localhost";
    $user = "came1";
    $pass = "Came1Log_MyS9L";
    $dbname = "basukebaka";

    $dns = "mysql:host=${host};dbname=${dbname};cherset=UTF-8";
    try {
        $pdo = new PDO(
            $dns,
            $user,
            $pass,
            [
                PDO::ATTR_AUTOCOMMIT => pdo::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
        return $pdo;
    } catch (PDOException $e) {
        exit($e->getMessage());
    };
}

function save($prefectures_id, $municipalities_id, $image_path, $coat_name, $coat_explanation)
{
    $sql = "INSERT INTO coatList (prefectures_id, municipalities_id, image_path, coat_name, coat_explanation) VALUES(:prefectures_id, :municipalities_id, :image_path, :coat_name, :coat_explanation)";
    // var_dump(dbc());
    try {
        $stmt = dbc()->prepare($sql);
        $stmt->bindValue(':prefectures_id', $prefectures_id);
        $stmt->bindValue(':municipalities_id', $municipalities_id);
        $stmt->bindValue(':image_path', $image_path);
        $stmt->bindValue(':coat_name', $coat_name);
        $stmt->bindValue(':coat_explanation', $coat_explanation);
        $res = $stmt->execute();
        return $res;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function getparam () {
    try{
        $stmt = dbc()->prepare("SELECT * FROM coatList LIMIT 5");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

