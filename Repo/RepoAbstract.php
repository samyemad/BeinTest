<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("connection/config.php");

/**
 * Description of SearchAbstract
 *
 * @author samy
 */
abstract class RepoAbstract {

    /**
     * Set the Connection.
     *
     * @param  $name
     *
     * @return string
     */
    public $customConnection;

    public function __construct() {
        
        $this->customConnection = new PDO('mysql:host=' . DB_Server . ';dbname=' . DB_Name . ';charset=utf8', DB_User, DB_Pass);
        
    }
 

    abstract public function RetrieveData();

    abstract public function SaveData();
}
