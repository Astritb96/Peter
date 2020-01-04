<?php

	if(isset($_POST['submit'])){
		try{
			$konektimiDataBase=new PDO("mysql:host=localhost;dbname:peterr","root","");			
			if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password'])){
				$message="Nuk e keni mbushur asnje opsion!";
			}else if(empty($_POST['name'])){
				$message="Nuk e keni mbushur emrin!";
			}else if(empty($_POST['email'])){
				$message="Nuk e keni mbushur emailn!";
			}else if(empty($_POST['password'])){
				$message="Nuk e keni mbushur passwordin!";
			}else{
				$query=$konektimiDataBase->prepare("INSERT INTO users(name,email,passwordi) values(:name,:email,:password)");
				$query->execute(array(
					"name"=>$_POST['name'],
					"email"=>$_POST['email'],
					"password"=>password_hash($_POST['password'],PASSWORD_BCRYPT)
				));
				$message="u regjistrua";
			}
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}



?>





<!DOCTYPE html>
<html>
<head>
	<title>Shto Userat</title>
</head>
<body>
<header>
	<ul>
		<li><a href="adminArea.php">Home</a></li>
		<li><a href="userat.php">Userat</a></li>
		<li><a href="email.php">Emailat</a></li>
		
		</header>
			<div class="wrapper">
			<?php 
				if(isset($message)){
					echo $message;
				}
			?>
			<form action="ShtoUserin.php" method="POST">
				Emri:<input type="text" name="name"><br>
				Email:<input type="text" name="email"><br>
				Password:<input type="password" name="password"><br>
				<input type="submit" name="submit" value="Ruaj">
				
				</form>
			
			
	</div>

<footer>
		<li><a href="adminArea.php">Home</a></li>
		<li><a href="userat.php">Userat</a></li>
		<li><a href="email.php">Emailat</a></li>
</footer>	
</body>
</html>