<?php


class Equipe{
    private $db;

    public $name; 
    public $id;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function criar_equipe()
    {
        $sql = "SELECT nome FROM equipe WHERE id = '{$this->id}';";
        $query = $this->db->query($sql);

        if (!$query) {
            error_log($this->db->error . PHP_EOL);
            return false;
        }

        $sql = "INSERT INTO equipe (nome) VALUES ('$this->name')";
        $query = $this->db->query($sql);

        if (!$query) {
            error_log($this->db->error . PHP_EOL);
            return false;
        }

        return true;
    }
}