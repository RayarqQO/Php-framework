<?php

namespace application\lib;

use PDO;
use PDOStatement;

class Db
{
    protected $db; 

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], 
        $config['password']);
    }
