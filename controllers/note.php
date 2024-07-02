<?php

//Put contents of config.php as array into $config, used to create DB connection in Database class (Database.php)
$config = require('config.php');
//Create new DB instance/object, give it a $config/configuration, specify config contents of 'database' associative array (config.php)
$db = new Database($config['database']);

$heading = 'Note';

//Set new variable in this context $id, assign $_GET['id] (built-in feature _GET looks at URI, give it pattern 'id' from URI)
//Eg if ?id=1, in query string in URI, then $id will be '1'
$id = $_GET['id'];

/* set $note for use in views/note.view. 
//Execute DB query according to function parameters spelt out in Database.php
//Query is 'select etc WHERE id = 
// {id} interpolated string, set earlier from URI _GET. fetch() fetches single result.

//CUSTOM INLINE
*/
//$note = $db->query("select * from notes where id = {$id}")->fetch();



//set $note for use in views/note.view. 
//$db->query accesses 'query()' function in THIS instance of the Database class (created at top of page)
//Query is 'select etc WHERE id = 

$note = $db->query('select * from notes where user_id=:user and id=:id', [
 
    'user' => 1,
    'id' => $_GET['id']
    
    ])->fetch();

require "views/note.view.php";

