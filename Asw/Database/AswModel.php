<?php
namespace Asw\Database;
use Acme\Interfaces\Imodel;
use Asw\Database\Connection;
use Asw\Database\AttributesCreate;
use Asw\Database\AttributesUpdate;
use PDOException;


/**
 *
 */
class AswModel implements Imodel
{
  private $database;



public function __construct(){
  $database = new Connection;
  $this->database = $database->Connection();

}

  public function create($attributes){

    $attributes = new AttributesCreate;

    $fields = $attributes->createFields($attributes);
    $values = $attributes->createValues($attributes);

    $query = "insert into $this->table($fields) values($values)";
    $pdo = $this->database->prepare($query);
    $bindParameters = $attributes->bindCreateParameters($attributes);

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
    $attributes = new AttributesUpdate;
    $fields = $attributes->updateFields($attributes);

    $query = "update $this->table set $fields where id = :id";
    $pdo = $this->database->prepare($query);
    $bindUpdateParameters = $attributes->bindUpdateParameters($attributes);
    $bindUpdateParameters['id'] = $id;
    try {
      $pdo->execute($bindUpdateParameters);

    } catch (PDOException $e) {
      dump($e->getMessage());
    }
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
  public function findBy($nome,$value){
    $query = "select * from $this->table where $nome = $value";
    $pdo = $this->database->prepare($query);
    try {
      $pdo->bindParam(":$nome",$value);
      $pdo->execute();
      return $pdo->rowCount();
    } catch (PDOException $e) {
      dump($e->getMessage());
    }

  }
}

 ?>
