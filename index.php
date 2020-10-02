<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Кинопоиск</title>
    <style type="text/css">
    	body {
    		background-color: #e6e6e6
    	}
    	.main {
    		background-color: white;
    		
    		margin-top: 50px;
    	}
    	.main h3 {
    		color: #f60;;
    	}
    </style>	
  </head>
  <body>
    <div class="" style="height: 100px; background-color: #444444">
    	<div class="container">
    		<div class="row">
	    		<div class="col-2">
	    			<img src="img\logo.png" class="w-100">
	    		</div>
	    		<div class="col-6 pt-4">
	    			<input type="" name="" placeholder="поиск на сайте" class="w-100">
	    		</div>
	    		<div class="col-4 pt-4 text-right" style="color: #c7c7c7">
	    			<h3>Войти</h3>
	    		</div>
    		</div>
    	</div>
    	<div class="col-6 mx-auto shadow-lg main px-0">
    		<h3 class="text-center bg-success p-2">5 лучших фильмов</h3>
    		
    		<div class="text-center"> <!-- Див для списка фильмов -->
				<?php
					$kino = [
						["id"=>"1", "name"=>" Достать ножи","img"=>"img/ko.jpg"],
						["id"=>"2", "name"=>" Судьба: Ночь схватки","img"=>"img/2.webp"],
						["id"=>"3", "name"=>" Судьба: Прикосновение небес 2","img"=>"img/ko2.jpg"]
					];
					echo "<h1>".$kino[0]["id"]. $kino[0]["name"] ."</h1>";
					echo "<img src='" . $kino[0]["img"] ."' >";
					echo "<h1>".$kino[1]["id"]. $kino[1]["name"] ."</h1>";
					echo "<img src='" . $kino[1]["img"] ."' >";
					echo "<h1>".$kino[2]["id"]. $kino[2]["name"] ."</h1>";
					echo "<img src='" . $kino[2]["img"] ."' >";				
				?>
    			 
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



<!--    			<?php
    				$id = ["1", "2", "3"];
    				$name = [" Зеленая миля", " Побег из Шоушенка", " Форест Гамп"];
    				$img = ["img/1.jpg", "img/2.jpg", "img/3.jpg"];
    				echo "<h1>".$id[0]. $name[0] ."</h1>"
    			?>
    			<?php
    				echo "<img src = '" . $img[0] . "'>";
    			?>
    			<?php
    				echo "<h1>".$id[1]. $name[1] ."</h1>";
    				echo "<img src = '" . $img[1] . "'>";
    			?>
      			<?php
    				echo "<h1>".$id[2]. $name[2] ."</h1>";
    				echo "<img src = '" . $img[2] . "'>";
    			?>  	-->	