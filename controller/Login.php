<?php

namespace Controller;

require_once("Model/Database.php");

use Model\Database as Conexao;
use \PDO;

class Login
{
    private $user;
    private $data;

    public function __construct($user, $userPass)
    {
        $this->user = new Conexao('users');
        $this->data['email'] = [];
    }
}
