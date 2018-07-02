  <?php 
    session_start();
?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">   
 <title>Prolefile page</title>
<link rel="stylesheet" href="assets/css/profile.css">
</head>
    
<body >
    <div id="container0">
                <a href="#default" class="logo">ESL NETWORK</a>
				<ul>
					<li><a href='Homepage.html'>Log out</a></li>
                    <li><a href='Parameter'>Setting</a></li>
					<li><a href='mentorblog'>mentor blog</a></li>
                    <li><a href='searchpage.html'>Search page</a></li>
					<li><a href='chatpage.php'>Chat</a></li>
                    <li><a href='tutoroom.html'>Tutor room</a></li>
                    <li><a href='forum'>Forum</a></li>
                    <li><a href="profile.php">Profile</a></li>
				</ul>   
    </div>
    <div id="container1">
        <img src="<?php echo"<"  . $_SESSION['picture'] . "";?> " alt="profile" style="float:right;width:100px;height:100px;">
        <h1><i>profile</i></h1>
                <?php 
                 echo"<p>Name: "  . $_SESSION['f_name'] .  "</p><br>";
                 echo"<p>Curent ESLclass/University year: "  . $_SESSION['class_y'] . "</p><br>";
                 echo"<p>Hobbies: "  . $_SESSION['hobbies'] ."</p><br>";
                 echo "<p>Target degree: " . $_SESSION['t_degree'] . "</p><br>";
                 echo"<p>Role : " . $_SESSION['role'] ."</p><br>";?> 
        <h2><i></i></h2>
               <p> </p>   
    </div>
    <div id="window">
        <br>
        <br><br><br><br><br>
    <iframe src="chatpage.php" height="300" width="200"></iframe>
    </div>
</body>
</html>
                    
                    
                    
                    
                    