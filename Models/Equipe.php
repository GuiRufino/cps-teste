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
            exit;
        }

        return true;
    }

    public function vigilante_equipe($matriculas)
    {
        $sql = "SELECT id FROM equipe WHERE nome_equipe = '$this->name';";
        $equipe = $this->db->query($sql);

        if (!$equipe) {
            error_log($this->db->error . PHP_EOL);
            return false;
            exit;
        }
        $equipe = mysqli_fetch_assoc($equipe);
        $equipe_id = $equipe['id'];

        for($i = 0; $i < count($matriculas); ++$i){
           $sql = "SELECT equipe FROM funcionario WHERE id = ('$equipe_id')";
           $query = $this->db->query($sql);

           if (mysqli_num_rows($query) > 0) {
               return false;
               exit;
           }

            $sql_equipe_funcionario = "UPDATE funcionario SET equipe = '$equipe_id' WHERE matricula = '$matriculas[$i]';";
            $query_funcionario = $this->db->query($sql_equipe_funcionario);

            if (!$query_funcionario) {
                error_log($this->db->error . PHP_EOL);
                return false;
                exit;
            } 
        }

        return true;
    }
}