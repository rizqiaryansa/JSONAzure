<?php 
 $dbhost = "";
 $dbname = "";
 $dbusername = "";
 $dbpassword = "";
                           
 foreach ($_SERVER as $key => $value) {
        if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
            continue;
           }
          
          //Mengambil nilai dari variabel value yang merupakan data dari $_SERVER          
           $dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
           $dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
           $dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
           $dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
  }

//membuat koneksi
$conn =  mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
 
//mengecek jika mysql tidak bisa connect                     
 if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
 }

                      
?>