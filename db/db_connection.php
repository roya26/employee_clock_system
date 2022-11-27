<!-- **This file should be in .env when we in real production enviorments** -->
<!--
config password : https://kinsta.com/knowledgebase/xampp-mysql-password/#:~:text=Open%20phpMyAdmin%20in%20XAMPP.&text=a%20browser%20window%3A-,The%20phpMyAdmin%20interface.,you%20can%20leave%20it%20blank 
config also in - xampp/phpMyAdmin/config.inc.php
-->
<?php
//enter your host name,database,username,password,and database name.
//if you have not set database password on localhost then set empty.
$con=mysql_connect("localhost","root","123456","clock_project");
//check Connection
if(mysql_connection_error()){
    echo  "Failed to connect to MySQL: " . mysqli_connect_error();

}else {
    echo "success";
}
?>