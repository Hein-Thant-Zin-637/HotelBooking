<?php
    class Database{
        public $connection;
        public $statement;
        public function __construct($config){
            $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};";
            $this -> connection = new PDO($dsn,$config['user'],$config['password'],[
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }
        public function query($query,$params = []){
            $this->statement = $this -> connection -> prepare($query);
            $this->statement ->execute($params);
            return $this;
            
        }
        public function find(){
            return $this->statement->fetch();
        }
        public function getall(){
            return $this->statement->fetchAll();
        }
        public function FindOrFail(){
            $result = $this->find();
            if(!$result){
                abort();
            }else{
                return $result;
            }
            
        }
    }


?>