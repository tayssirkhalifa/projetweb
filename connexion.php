
<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 


include 'core/clientC.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/

$user=new clientC();
$u=$user->Logedin($_POST['mail'],$_POST['password']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['mail']) && !empty($_POST['password'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['mail']==$_POST['mail'] && $t['password']==$_POST['password']){
		
		session_start();
		$_SESSION['mail']=$_POST['mail'];
		$_SESSION['password']=$_POST['password'];
		
		header("location: indexmd.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=register.php">'; 
      } 
}	  
 
else { 
      echo "wrong login/password "; 
     ?> <a href="register.php">Retour au formulaire</a>	 <?php 
}  



 ?>
 </body>
</html>