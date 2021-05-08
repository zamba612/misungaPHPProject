<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DB_MISUNGA;

/**
 * Description of Module
 *
 * @author netas
 */
class Module {

    public $id;
    private $con;

    function __construct() {
//  require_once dirname(__FILE__) . '../app-mysql/sql_database.php';
        $db = new DB_Connecti();
        $this->con = $db->connectDB();
    }

    private $connection = array();

    public function Members() {
        $query = "SELECT * FROM members";
        $getconnection = new DB_Connecti();
        $this->connection = $getconnection->executeSelectQuery($query);
        return $this->connection;
    }

   

}
