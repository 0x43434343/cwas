<?php
require_once 'config.class.php';
class login extends DB
{
<?php
 
public function login($username, $password)
		$sql = mysql_query("SELECT id, username FROM users WHERE password = '" . $password . "' AND username = '" . $username . "' LIMIT 1");
		if($sql === false) 
		{
			return false;
		}
		else
		{
			while($u = mysql_fetch_array($sql))
			{ 
                session_regenerate_id(true);
                $session_id = $u[id];
                $session_username = $username;
                $session_level = $u[user_level];
 
                $_SESSION['user_id'] = $session_id;
                $_SESSION['user_level'] = $session_level;
                $_SESSION['user_name'] = $session_username;
                $_SESSION['user_lastactive'] = time();
				return true;
			}
		}
 
?>	
	}
?>
