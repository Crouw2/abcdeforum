<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Html start</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<header>
    <div class="container">
        <div id="logo">
            <img src="img/logo.png">
        </div>
        <nav>
            <ul>
			<li><a href="?pag=">Home</a></li>
			<li><a href="?pag=topics">Topics</a></li>
			<?php
			if(isset($_SESSION['username'])) {?>
			
			<li><a href="?pag=profile">Profile</a></li>
			<li><a href="logout.php">Logout</a></li>
			<?php }
			else{ ?>
				<li><a href="?pag=login">Login</a></li>
				<li><a href="?pag=registreren">Registren</a></li>
				<?php
			}

			?>
		</ul>
        </nav>
    </div>
</header>
</div><div id="basis">

	<?php
//Als user bestaat geef die weer
		
// Als message bestaat geef die weer
		if(isset($_SESSION['message'])){
			echo $_SESSION['message'];
				unset($_SESSION['message']);
		}




	?>
