<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/views/Dbconfig.php');
class Mysql extends Dbconfig {

    public $connectionString;
    public $dataSet;
    private $sqlQuery;
    
    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;

    function Mysql() {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;

        $dbPara = new Dbconfig();
        $this->databaseName = $dbPara->dbName;
        $this->hostName = $dbPara->serverName;
        $this->userName = $dbPara->userName;
        $this->passCode = $dbPara->passCode;
        $dbPara = NULL;
    }

    function myCon (){
        $mysqli = new mysqli( $this->hostName, $this->userName,"", $this->databaseName);
        if ($mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            return null;
          }
          
          return $mysqli;
    }
  
    function dbConnect()    {
        $this->connectionString = mysqli_connect($this->serverName,$this->userName, $this->passCode);
        mysqli_select_db($this->databaseName,$this->connectionString);
        return $this -> connectionString;
    }

    function dbDisconnect() {
        $this -> connectionString = NULL;
        $this -> sqlQuery = NULL;
        $this -> dataSet = NULL;
        $this -> databaseName = NULL;
        $this -> hostName = NULL;
        $this -> userName = NULL;
        $this -> passCode = NULL;
    }

    function selectAll($tableName)  {
        $this->connectionString = $this -> myCon();
        
        if($this->connectionString != null){
            $this -> sqlQuery = 'SELECT * FROM '.$this -> databaseName.'.'.$tableName;
            $this -> dataSet = $this -> connectionString -> query ($this -> sqlQuery);
            return $this -> dataSet;
        }
        return false;
       
        //$this -> dataSet = mysqli_query($this->sqlQuery,$this -> connectionString);
        
    }

    function selectWhere($tableName,$rowName,$operator,$value,$valueType)   {
        $this -> sqlQuery = 'SELECT * FROM '.$tableName.' WHERE '.$rowName.' '.$operator.' ';
        if($valueType == 'int') {
            $this -> sqlQuery .= $value;
        }
        else if($valueType == 'char')   {
            $this -> sqlQuery .= "'".$value."'";
        }
        $this -> dataSet = mysqli_query($this -> sqlQuery,$this -> connectionString);
        $this -> sqlQuery = NULL;
        return $this -> dataSet;
        #return $this -> sqlQuery;
    }

    function insertInto ($sql){
        $this->connectionString = $this -> myCon();
        return $this -> connectionString -> query($sql);  
    }
    function insertIntoOld($tableName,$values) {
        $this->connectionString = $this -> myCon();
        $i = NULL;

        $this -> sqlQuery = 'INSERT INTO '.$tableName.' VALUES (';
        $i = 0;
        while($values[$i]["val"] != NULL && $values[$i]["type"] != NULL) {
            if($values[$i]["type"] == "char") {
                $this -> sqlQuery .= "'";
                $this -> sqlQuery .= $values[$i]["val"];
                $this -> sqlQuery .= "'";
            }
            else if($values[$i]["type"] == 'int') {
                $this -> sqlQuery .= $values[$i]["val"];
            }
            $i++;
            if($values[$i]["val"] != NULL)  {
                $this -> sqlQuery .= ',';
            }
        }
        $this -> sqlQuery .= ')';
        #echo $this -> sqlQuery;
        return $this -> connectionString -> query($this -> sqlQuery); 
        
        //mysqli_query($this -> sqlQuery,$this ->connectionString);
        //return $this -> sqlQuery;
        #$this -> sqlQuery = NULL;
    }

    function selectFreeRun($query) {
        $this -> dataSet = mysqli_query($query,$this -> connectionString);
        return $this -> dataSet;
    }

    function freeRun($query) {
        return mysqli_query($query,$this -> connectionString);
    }
}
?>