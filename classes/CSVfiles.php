<?php

class CSVfiles
{
    private $db_connection            = null;
    
    private $file                     = "";
    
    private $type                     = "";
    
    private $file_uploaded            = false;

    public  $errors                   = array();

    public  $messages                 = array();


    public function __construct()
    {
        session_start();
           
        if(isset($_POST['upload'])) {
            $this->uploadFile($_FILES['file'], $_FILES['type']);
        }

    }
    
    
    private function databaseConnection()
    {
        // connection already opened
        if ($this->db_connection != null) {
            return true;
        } else {
            // create a database connection, using the constants from config/config.php
            try {
                // Generate a database connection, using the PDO connector
                // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
                // Also important: We include the charset, as leaving it out seems to be a security issue:
                // @see http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers#Connecting_to_MySQL says:
                // "Adding the charset to the DSN is very important for security reasons,
                // most examples you'll see around leave it out. MAKE SURE TO INCLUDE THE CHARSET!"
                $this->db_connection = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
                return true;
            // If an error is catched, database connection failed
            } catch (PDOException $e) {
                $this->errors[] = MESSAGE_DATABASE_ERROR;
                return false;
            }
        }
    }
    
    private function uploadFile($file, $type)
    {
       if( 'text/csv' == $_FILES['type'] ||  'application/vnd.ms-excel' == $_FILES['type'] ) {
	die("This is not a CSV file.");
                
        }
        elseif(is_uploaded_file($_FILES['file']['tmp_name'])){
                //Connect to the database
                $dbhost = DB_HOST;
                $dbuser = DB_USER;
                $dbpass = DB_PASS;
                $dbname = DB_NAME;
                $link = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql server');
                mysql_select_db($dbname);

                $handle = fopen($_FILES['file']['tmp_name'], "r");
                
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $att0 = mysql_real_escape_string($data[0]);
                        $att1 = mysql_real_escape_string($data[1]);
                        $att2 = mysql_real_escape_string($data[2]);
                        $att3 = mysql_real_escape_string($data[3]);
                        $att4 = mysql_real_escape_string($data[4]);
                        $att5 = mysql_real_escape_string($data[5]);
                        $att6 = mysql_real_escape_string($data[6]);
                        // end of csv data
                        $att7 = $_SESSION['user_id'];
			//conver IP to decimal
			$ips = split ("\.", "$att0");
			$att8 = ($ips[3] + $ips[2] * 256 + $ips[1] * 256 * 256 + $ips[0] * 256 * 256 * 256);
			//compare IP decimal to ip2location_db1 range to find location
                        $result =mysql_query("SELECT `country_name` FROM `ip2location_db1` WHERE `ip_from` <= '$att8' AND `ip_to` >= '$att8'");
			$row = mysql_fetch_array($result);
			$att9= $row[0];	

                        $sql = "INSERT INTO `PBI` (`source_ip`, `domain_name`, `number_of_hits`, `avg_time_between`, `duration`, `standard_deviation`, `number_of_hosts`, `user_id`, `ip_decimal`, `ip_region`)
                                                VALUES ('" . $att0 . "', '" . $att1 . "', '" . $att2 . "', '" . $att3 . "', '" . $att4 . "', '" . $att5 . "', '" . $att6 . "', '" . $att7 . "', '" . $att8 . "', '" . $att9 . "')";
                        mysql_query($sql);
                }
                 
                mysql_close($link);
                $this->file_uploaded = true;
        }
        else{
                die("You shouldn't be here");
        }
    }

        public function wasFileUploaded()
    {
        return $this->file_uploaded;
    }

}
?>