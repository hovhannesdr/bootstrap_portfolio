<?php 

$sname="localhost";
$uname="root";
$psw="";
$db="futural";

global $connectionSQL;
$connectionSQL= new mysqli($sname,$uname,$psw,$db);

			if ($connectionSQL->connect_error) {
    			printf("Не удалось подключиться: %s\n", $connectionSQL->connect_error());
    			exit("<h1>Не подключен к серверу</h1><br>
				<img src='https://www.elegantthemes.com/blog/wp-content/uploads/2016/03/500-internal-server-error-featured-image-1.png'
			 alt='error'>");
}



