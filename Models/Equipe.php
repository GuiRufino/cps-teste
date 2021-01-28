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
        $sql = "INSERT INTO equipe (nome_equipe) VALUES ('$this->name')";
        $query = $this->db->query($sql);

        if (!$query) {
            error_log($this->db->error . PHP_EOL);
            return false;
        }

        return true;
    }

    public function vigilante_equipe($matriculas)
    {
        $sql = "SELECT id FROM equipe WHERE nome_equipe = '$this->name';";
        $equipe_id = $this->db->query($sql);

        if (!$equipe_id) {
            error_log($this->db->error . PHP_EOL);
            return false;
        }
        $equipe_id = mysqli_fetch_assoc($equipe_id);
        $equipe_id = $equipe_id['id'];

        for($i = 0; $i < count($matriculas); ++$i){
            $sql = "UPDATE funcionario SET equipe = '$equipe_id' WHERE matricula = '$matriculas[$i]';";
            $query = $this->db->query($sql);

            if (!$query) {
                error_log($this->db->error . PHP_EOL);
                return false;
            } 
        }

        return true;
    }
}