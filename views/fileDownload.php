<?php  
    $host = DB_HOST;
    $user = DB_USER;
    $pass = DB_PASS;
    $db = DB_NAME;
    $table = 'PBI';
    $file = 'export_all';
     
    $link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());
    mysql_select_db($db) or die("Can not connect.");
     
    $result = mysql_query("SELECT * FROM ".$table."");
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
        $csv_output .= $row['Field'].", ";
        $i++;
        }
    }
    $csv_output .= "\n";
     
    $values = mysql_query("SELECT * FROM ".$table."");
    while ($rowr = mysql_fetch_row($values)) {
        for ($j=0;$j<$i;$j++) {
            $csv_output .= $rowr[$j].", ";
        }
        $csv_output .= "\n";
    }
     
    $filename = $file."_".date("Y-m-d_H-i",time());
    header("Content-type: text/csv");
    header("Content-disposition: csv" . date("Y-m-d") . ".csv");
    header("Content-disposition: filename=".$filename.".csv");
    print $csv_output;
    exit;
 ?>