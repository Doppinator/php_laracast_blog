<?php

//Put contents of config.php as array into $config, used to create DB connection in Database class (Database.php)
$config = require('config.php');
//Create new DB instance/object, give it a $config/configuration, specify config contents of 'database' associative array (config.php)
$db = new Database($config['database']);

$heading = 'My Notes';

//Fetch all notes in this instance of db (created at top of page) according to the query string given to the query() method, which is written in the Database.php class
$notes = $db->query('select * from notes')->fetchAll();

require "views/notes.view.php";