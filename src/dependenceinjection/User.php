<?php
class User
{
    protected $pdo;
    public $createdAt;
    public function setPDO(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function getNome()
    {
        echo "João Paulo";
    }
}
