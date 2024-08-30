<?php
namespace Gustavo\Students\Models;

use Gustavo\Students\Helpers\Database\Database;

abstract class AbstractModel{

    public $table;
    
    protected Database $database;

    protected $connect;

    public function __construct(){
        
        $this->database = new Database();
        $this->connect = $this->database->execute();
    }

    public function create($data){
        //"INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";

        echo"metodo para criação de um dado show!!";
    }

    public function findOne(){

    }

    public function findAll(){

    }

    public function update(){

    }

    public function delete(){

    }
}