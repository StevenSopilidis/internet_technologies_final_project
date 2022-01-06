<?php

//class will be used as a singleton so only 1 db connection
//will be used during program execution
class DbConnection
{
    //wether object of the class is already created
    static bool $is_instantiated = false; 
    
    private mysqli $connection;

    function __construct()
    {
        if(DbConnection::$is_instantiated == true)
        {
            throw new Exception("Db connection is alread created");
        }
        $this->connection = new mysqli("localhost", "root", "","word_of_music_db");
        if($this->connection->error)
        {
            die("Could not connect to mysql db: ". $this->connection->connect_error);
        }else {
            DbConnection::$is_instantiated = true;
        }
    } 

    function get_connection(): mysqli
    {
        if($this->connection == null || $this->connection->error)
        {
            throw new Exception("No connection is exists");
        }
        return $this->connection;
    }

    function __destruct()
    {
        if($this->connection != null)
        {
            mysqli_close($this->connection);
        }
    }
}


?>