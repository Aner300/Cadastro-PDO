<?php
namespace Asw\Database;
use Acme\Interfaces\Imodel;
use Asw\Database\Connection;
use PDOException;


/**
 *
 */
class AsModel implements Imodel
{
  private $database;
  private $attributes;
  private $table;

public function __construct(){
  $database = new Connection;
  $this->$database = $database->Connection();
}

  public function create($attributes){

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
  public function delete($name,$value){

  }
  public function findBy($name,$value){

  }
}

 ?>
