<?php
ob_start();
if(session_status() == PHP_SESSION_NONE){
	session_start();
}
require __DIR__."/../modules/Database/Config.php";
try {
	$pdo = new PDO("mysql:host=$DataBase['hostname'];dbname=$DataBase['name']", $DataBase['username'], $DataBase['password'],); //Connect MySQL Using PDO
        catch (PDOException $e) {
  echo "Connection not established".$e->getMessage(); //Detect Faild Connect
}
if(!isset($connect)){
	$connect = mysqli_connect(
		$DataBase['hostname'],
		$DataBase['username'],
		$DataBase['password'],
		$DataBase['name']
	); //This Should Be Remove Later :) If Remove It Now,It Will Not Work!


}

?>
