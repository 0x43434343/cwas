<?php
class DB {

    private $link;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database){
        $this->host        = $host;
        $this->username    = $username;
        $this->password    = $password;
        $this->database    = $database;

        $this->link = mysql_connect($this->host, $this->username, $this->password)
            OR die("Not connection username or password.");

        mysql_select_db($this->database, $this->link)
            OR die("Not connection DB.");

        return true;
    }

    public function query($query) {
        $result = mysql_query($query);
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }

    public function __destruct() {
        mysql_close($this->link)
            OR die("There was a problem disconnecting from the database.");
    }
    public function insert($insert) 
    {
		$insert = mysql_query($insert);
		if (!insert) die ('Not Insert database'.mysql_error());
		return $insert;
		}

}

?>
