<?php

print("HEADER");
/**
 * A class file to connect to database
 */
class DB_CONNECT {
 	  
	 function DB_CONNECT() {
        // connecting to database
        print("CONSTRUCTOR");
        $this->connect();
        $this->close();
    }    

    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables
        //require_once __DIR__ . '/db_config.php';
        require_once('http://www.users.csbsju.edu/~pghardy/android_connect/db_config.php');

        // Connecting to mysql database
        $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

        // Selecing database
        $db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

        // returing connection cursor
        return $con;
    }

    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
        mysql_close();
    }

}

?>