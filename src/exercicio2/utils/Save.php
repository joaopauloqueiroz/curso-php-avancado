<?php
class Save
{
    protected $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function isLogin($dados)
    {
        $sql = "SELECT * FROM users WHERE email=?";
        
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$dados[0]]);

        $user = $stmt->fetch(\PDO::FETCH_OBJ);

        if ($stmt->rowCount() && $user->senha == md5($dados[1])) {
            exit('Logado com sucesso');
        } else {
            return header('location: ./');
        }
    }

    // public function prepare($sql)
    // {
    //     return $this->pdo->prepare($sql);
    // }
}
