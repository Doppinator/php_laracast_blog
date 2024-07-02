<?php

class Database
{
    //$connection 
    public $connection;

    //Predefined function __construct is a 'constructor' that helps build a database connection
    //A constructor allows you to initialize an object's properties upon creation of the object.
    //If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        //Create new instance of PDO as publically accessible $connection (NOT THE SAME AS NEW DATABASE INSTANCE)
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    //query function used whenever fetching from database
    //query function takes the query string AND an extra parameter, which is ALWAYS AN ARRAY
    //However the ARRAY is NULLABLE ie if there is NO second parameter, no error is thrown (eg if the SQL query is just one line)
    //$params contains whatever array of strings is added after the "?" to prevent SQL injection (eg id, user_id)
    function query($query, $params=[]) { //here
  
        //PHP mysqli prepare();
        $statement = $this -> connection->prepare($query); //here
     
        $statement -> execute($params); //here
        return $statement;
    }

}