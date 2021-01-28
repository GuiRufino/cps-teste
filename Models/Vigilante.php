<?php 

class Vigilante {

    private $db;

    public $name;
    public $matricula;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function cadastrar(){
        $sql = "INSERT INTO funcionario (nome, matricula) VALUES ('$this->name', '$this->matricula');";

        if (!$this->db->query($sql)) {
            return false;
        }
        return true;
    }

    // public function excluir($matricula){
        
    // }

    // public function editar($matricula){

    // } 
}