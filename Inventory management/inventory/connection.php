<?php


//Testing XAMPP
$host="localhost";
$user="root";
$password="";
//$password="**IoT2023**";
$database="inventory";



/*
//Plesk
$host="localhost:3306";
$user="studyhelp";
$password="***Studyhelp@2023***";
$database="studyhelp987";
*/

$connection=new mysqli("$host", "$user", "$password", "$database");
if(!$connection){
	die ("Connection Failed: ".$connection->connect_error);
}

//Testing
//$studyhelp = 'http://localhost/studyhelp/index.php';

//Live Domain
$studyhelp = 'https://www.studyhelp987.com';

//Social Media Links
$youtube = 'https://www.youtube.com/channel/UC3h1fITJx_Gs9MAyVcaYwuQ';
$instagram = 'https://www.instagram.com/studyhelp987/';
$twitter = 'https://twitter.com/studyhelp987';


?>