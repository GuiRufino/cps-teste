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
        $sql = "INSERT INTO funcionario (nome_funcionario, matricula) VALUES ('$this->name', '$this->matricula');";

        if (!$this->db->query($sql)) {
            return false;
            exit;
        }
        return true;
    }

    public function pegar_funcionario($ref){
        $sql = "SELECT nome_funcionario, matricula FROM funcionario WHERE matricula = '{$ref}';";
        $query = $this->db->query($sql);

        if (!$query) {
            error_log($this->db->error . PHP_EOL);
            return false;
            exit;
        }
    }
}