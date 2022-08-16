<?php

namespace Wepesi\Core\Orm;
use PDOException;
use PDO;
use FFI\Exception;
use Wepesi\Core\Config;

class DB    {
    private static ?DB $_instance;
    private $queryResult;
    private ?DBSelect $select_db_query;
    private ?string $_error;
    private array $_results;
    private int  $lastID;
    private PDO $pdoObject;
    private array $option;
    private int $_count;
    use BuildQuery;
    private function __construct()
    {
        try {
            //
            if(Config::get('mysql/usable')){
                $this->initialisation();
                $this->pdoObject = new PDO("mysql:host=" . Config::get('mysql/host') . ";dbname=" . Config::get('mysql/db').";charset=utf8mb4", Config::get('mysql/username'), Config::get('mysql/password'),$this->option);
            }
        } catch (PDOException $ex) {
            $error_message = Config::get('mysql/usable')?"you should authorized user database on config file.":$ex->getMessage();
            die($error_message);
        }
    }

    /**
     * Initialise all
     */
    private function initialisation(){
        $this->_results=[];
        $this->option = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $this->_count=0;
        $this->lastID=0;
        self::$_instance=null;
    }
    static function getInstance(): ?DB
    {
        if(!isset(self::$_instance)){
            self::$_instance=new DB();
        }
        return self::$_instance;
    }

    /**
     * @string :$table =>this is the name of the table where to get information
     * this method allow to do a select field from  a $table with all the conditions defined ;
     * @throws \Exception
     */
    function get(string $table_name): ?DBSelect
    {
        return $this->select_option($table_name);
    }

    /**
     * @string :$table =>this is the name of the table where to get information
     * this method allow to do a count the number of field on a $table with all the possible condition
     * @throws \Exception
     */
    function count(string $table_name): DBSelect
    {
        return $this->select_option($table_name, "count");
    }

    /**
     * @string : $table=> this is the name of the table where to get information
     * @string : @action=> this is the type of action tu do while want to do a request
     * @throws \Exception
     */
    private function select_option(string $table_name, string $action = null): DBSelect
    {
        if (strlen($table_name) < 1) {
            throw new \Exception("table name should be a string");
        }
        $this->queryResult = new DBSelect($this->pdoObject, $table_name, $action);
        return $this->queryResult;
    }

    /**
     * @param string $table_name
     * @return DBInsert
     */
    function insert(string $table_name): DBInsert
    {
        $this->queryResult = new DBInsert($this->pdoObject,$table_name);
        return $this->queryResult;
    }

    /**
     * @param string $table :  this is the name of the table where to get information
     * @return DBDelete
     * @throws \Exception
     * this method will help delete row data information
     */
    function delete(string $table): DBDelete
    {
        $this->queryResult = new DBDelete($this->pdoObject,$table);
        return $this->queryResult;
    }
    //

    /**
     * @param string $table : this is the name of the table where to get information
     * @return DBUpdate
     * @throws \Exception
     * this methode will help update row informations of a selected tables
     */
    function update(string $table): DBUpdate
    {
        $this->queryResult = new DBUpdate($this->pdoObject,$table);
        return $this->queryResult;
    }

    /**
     * @param string $sql
     * @param array $params
     * @return $this
     */
    function query(string $sql, array $params = []): DB
    {
        $q = $this->executeQuery($this->pdoObject, $sql, $params);
        $this->_results = $q['result'];
        $this->_count = $q['count'];
        $this->_error = $q['error'];
        $this->lastID = $q['lastID'];
        return $this;
    }

    /**
     * @return int
     */
    function lastId(): int
    {
        if($this->queryResult && method_exists($this->queryResult,"lastId")) $this->lastID = $this->queryResult->lastId();
        return $this->lastID;
    }

    /**
     * @return string|null
     */
    function error(): ?string
    {
        if(isset($this->queryResult)) $this->_error= $this->queryResult->error();
        return $this->_error;
    }

    /**
     * @return array|null
     */
    function result(): array
    {
        return $this->_results;
    }

    /**
     * @return int
     */
    function rowCount(): int
    {
        if ($this->queryResult && method_exists($this->queryResult, 'count')) $this->_count = $this->queryResult->count();
        return $this->_count;
    }
}
