<?php
namespace Asw\Database;
use Acme\Interfaces\Imodel;
use Asw\Database\Connection;
use Asw\Database\Attributes;
use PDOException;


/**
 *
 */
class AswModel implements Imodel
{
  private $database;
  private $attributes;


public function __construct(){
  $database = new Connection;
  $this->database = $database->Connection();
  $this->attributes = new Attributes;
}

  public function create($attributes){



    $fields = $this->attributes->createFields($attributes);
    $values = $this->attributes->createValues($attributes);

    $query = "insert into $this->table($fields) values($values)";
    $pdo = $this->database->prepare($query);
    $bindParameters = $this->attributes->bindCreateParameters($attributes);

    try {
      $pdo->execute($bindParameters);
      return $this->database->lastInsertId();
    } catch (PDOException $e) {
      dump($e->getMessage());
    }
  }
  public function read(){
    $query = "select * from $this->table";
    $pdo = $this->database->prepare($query);
        try {
        $pdo->execute();
        return  $pdo->fetchAll();
        } catch (PDOException $e) {
          dump($e->getMessage());
        }

  }
  public function update($id,$attributes){

  }

  public function delete($nome,$value){
    $query = "delete from $this->table where $nome = :$nome";
    $pdo = $this->database->prepare($query);
    try {
      $pdo->bindParam(":$nome",$value);
      $pdo->execute();
      return $pdo->rowCount();
    } catch (PDOException $e) {
      dump($e->getMessage());
    }

  }
  public function findBy($name,$value){

  }
}

 ?>
