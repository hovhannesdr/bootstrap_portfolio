<?php  
	require "sql_connect.php";
	$username =$_POST['username'];
	$datatime = CURRENT_TIMESTAMP;
	$commentText = $_POST['comment'];

	if (!empty($_POST['username'] && $_POST['comment'])) {
		if (isset($_POST["submit"])) {
		 $query="INSERT INTO `futural`.`users` (`id`, `name`, `comment`, `date`) VALUES (NULL, '$username','$commentText',$datatime);";
		 		
		 $connectionSQL->query($query) or die($connectionSQL->error);
		}}



		$sql = "SELECT * FROM `users` WHERE `id`>0";
		$result = $connectionSQL->query($sql);
		$row = $result->fetch_assoc();


		
		

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Future Comment</title>

</head>
<body>
<style>
	body{margin: 0%}
	a{color: black}
	a:hover{color:black; text-decoration: none;}
   	.header {background:no-repeat ;
       background-size: cover;
       background-image: url("images/headerBG.png")}
    .cont{
    	background: rgb(238,238,238,238);
    }

</style>

	<div class="container-fuid">
		<div class="row m-0">
            <div class="col">


				<header class="row  d-flex header pt-4">
                    <div class="col-4">
                        <address class="mt-2">
  							<a href="tel:+74993409471">Телефон: (499) 340-94-71</a><br>
  							<a href="mailto:info@future-group.ru">Email: info@future-group.ru</a>
                        </address>
                        <p><h2 class="display-3 pt-5 pb-5">Комментарии</h2></p>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-2">
                    	<img src="images/logo.png" alt="logo" class="img-fluid">
                    </div>
				</header>


				<div class="row cont">
					<?php 
					echo'<div class="col-12 row  pt-5">

							<h4 class="col-6">'.$row["name"].'</h4>  <span class="col-6">'.$row["date"].' </span>
							<p class="col-6">'.$row["comment"].'</p>
						 </div>';
					while ($row = $result->fetch_assoc()) {
    				echo '<div class="col-12 row  pt-5">

							<h4 class="col-6">'.$row["name"].'</h4>  <span class="col-6">'.$row["date"].' </span>
							<p class="col-6">'.$row["comment"].'</p>
						 </div>';
					} ?>
					
					<div class="col-12 w-50">
						<hr>
					</div>
				</div>


				<div class="row cont">
					<form action="" method="post" class="col-6">
						<div>
						<h3 class="text-bold">Отправить комментарий</h3>
						</div>
						<label for="username">Ваше имя:</label>
						<input type="text" name="username" class="form-control ">
						<label for="userText">Ваша Комментарий:</label>
						<textarea name="comment" id="userText" cols="50" rows="7" style="resize: none;" class="form-control border-dark cont"></textarea>
						<button type="submit" class="btn col-2 border-dark float-right mt-2" name="submit">Отправить</button>
					</form>
				</div>

				

				<footer  class="row d-flex">
					<div class="col-2">
						<img src="images/logo.png" alt="logo-footer" class="w-50 mt-2 ">
						</div>

						<div class="col-10">
						<address class=" mt-2 float-left">
  							<a href="tel:+74993409471">Телефон: (499) 340-94-71</a><br>
  							<a href="mailto:info@future-group.ru">Email: info@future-group.ru</a>
  							<p>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</p>
							<p>© 2010 - 2014 Future. Все права защищены</p>
                        </address>
                       </div>
						
				</footer>
            </div>
		</div>		
	</div>
</body>
</html>
