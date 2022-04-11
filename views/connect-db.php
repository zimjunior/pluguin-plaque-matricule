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
       
        
    }
   

    function selectWhere($tableName,$rowName,$operator,$value,$valueType)   {
        $this->connectionString = $this -> myCon();
        $this -> sqlQuery = 'SELECT * FROM '.$tableName.' WHERE '.$rowName.' '.$operator.' ';
        if($valueType == 'int') {
            $this -> sqlQuery .= $value;
        }
        else if($valueType == 'char')   {
            $this -> sqlQuery .= "'".$value."'";
        }
        $this -> dataSet = $this -> connectionString -> query($this -> sqlQuery);
        $this -> sqlQuery = NULL;
        return $this -> dataSet;
        #return $this -> sqlQuery;
    }

    function insertInto ($sql){
        $this->connectionString = $this -> myCon();
        $res =  $this -> connectionString -> query($sql);
         $to_return = [
             "res" => $res,
             "last_id" => $this -> connectionString -> insert_id
         ];  
        return   $to_return ;
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