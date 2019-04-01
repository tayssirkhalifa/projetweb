<?php
include "core/clientC.php";

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['mail']) && isset($_SESSION['password'])) 
{ 

  
  

}


//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>

<!DOCTYPE html>
<html>
<head>
<title>client </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/cnxx.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/malek.js"></script>
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- countdown -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //countdown -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- //end-smooth-scrolling -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <style type="text/css">
    .register input[type="button"]{
  outline:none;
  border:none;
  background:#212121;
  padding:10px 0;
  color:#fff;
  width:40%;
  font-size:1em;
  text-transform:uppercase;
  margin:2em 0 0;
}
.register input[type="button"]:hover{
  background:#004B8D;
}
  </style>

</head>
  
<body>
<div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="header-left">
           <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""/></a>
           </div>
           <div class="menu">
              <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                <ul class="nav" id="nav">
                  <li><a href="shop.html">Shop</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="experiance.html">Events</a></li>
                  <li><a href="experiance.html">Experiance</a></li>
                  <li><a href="shop.html">Company</a></li>
                <li><a href="contact.html">Contact</a></li>               
                <div class="clear"></div>
              </ul>
              <script type="text/javascript" src="js/responsive-nav.js"></script>
            </div>              
              <div class="clear"></div>
            </div>
              
            <!----search-scripts---->
            <script src="js/classie.js"></script>
            <script src="js/uisearch.js"></script>
            <script>
              new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <!----//search-scripts---->
            <dropdown>
        
          <input id="toggle2" type="checkbox">
          <center><label for="toggle2" class="animate">profil<i class="fa fa-bars float-right"></i></label></center>
             <ul class="animate">
              <form action="indexmd1.php">
           <li class="animate"><button type="submit" style="width: 100%;background-color: #ECF0F1; border: none; height: 100%">modifier</button><i class="fa fa-bars float-right"></i></li></button></form>
           <form action="logout.php">
            <li class="animate"><button type="submit"  style="width: 100%;background-color: #ECF0F1; border: none; height: 100%"> log out</button>
            <i class="fa fa-bars float-right"></i></li>
</form>
        </ul>
      </form>
      </dropdown>

      </div>
               <div class="clear"></div>
         </div>
        </div>
     </div>
      </div>
  </div>
<!-- //header -->
<!-- banner -->
<div class="titlewline__title">
                           <center><h3> Mes informations personnelles</h3></center>
                        </div>
                      <div class="Global">
                      <div class="left" style="
    width: 1500px;
">
                       <div style="width: 30%;margin: auto;">
  <div class="register">

                     <?php 
                      $mail = 'mail';
                      $nom = 'nom';
                      $prenom='prenom';
                      $password='password';
                      if(isset($_SESSION['mail'])){
                        
                        $db = config::getConnexion();
                        $sql="SELECT * FROM client where mail = '".$_SESSION['mail']."'";
                        $list2 = $db->query($sql);
                        foreach ($list2 as $key ) {
                          $nom = $key['nom'];
                            $prenom = $key['prenom'];
                          $password=$key['password'];
                          $mail = $key['mail'];
                       
                        }
                      }
                      ?>
            
                        <form action="modifier.php" method="post">   
                            Nom:
                          <input style="height: 35px" placeholder="nom" name="nom" type="text" value="<?php echo $nom; ?>" required="">
                        <br>
                            Prenom:
                          <input style="height: 35px" placeholder="prenom" name="prenom"  type="text" value="<?php echo $prenom; ?>">
                           <br>
                          Mail:
                          <input style="height: 35px" placeholder="Email Address" name="mail" value="<?php echo $mail; ?>"  type="email" >
                          <br>
s                            Password:
                          <input style="height: 35px" placeholder="Password" name="password" value="<?php echo $password; ?>" type="text" >

                         
                          <div class="sign-up">

                           <center><input type="submit" name="butt" value="modifier"/></center> 

                          </div>
                            </form>
                          </div>
                        </div>

                        </div>
      
      

    
                          <div class=droite>
                        <div style="width: 30%;margin: auto;">
  
                        </div>



</div>
</div>




<div class="top-brands">
    <div class="#">

 <h3>Devenir Un Client Fidéle </h3>
</div>
</div>

<!---------------------------------------------------------------------------------------------->

<div>
    <table>
      <form action="notif.php" method="post">
      <td>
        <img src="images/gold.png" style="width: 480px;margin-left: 25px;">
      </td>
            <td>
        <img src="images/silver.jpg" style="width: 480px;margin-left: 25px;">
      </td>
       <td>
        <img src="images/ghay543.jpg" style="width: 480px;margin-left: 25px;">
      </td>
      <tr>
        <td>
          <span class="register">
            
        <input type="button" value="Gold" style="margin-left: 150px;margin-top: 30px;" data-toggle="modal" data-target="#myModal"> 


          <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content golde-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">votre demande sera traitée dans les meilleurs délais</h4>
        </div>
        <div class="modal-body">
          
          <input type="submit" name="gold" value="Gold" style="
        margin-left: 250px;
        margin-top: 30px; >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      
         </span>
      </td>
              <td>
       <span class="register">
        
        <input type="button" value="Silver" style="margin-left: 150px;margin-top: 30px;" data-toggle="modal" data-target="#myModal2"> 


          <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content silver-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">votre demande sera traitée dans les meilleurs délais</h4>
        </div>
        <div class="modal-body">
          <input type="submit" name="gold" value="Silver" style="
        margin-left: 250px;
        margin-top: 30px;>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

          </span>
      </td>
              <td>
                 <span class="register">
        <input type="button" value="Bronze" style="margin-left: 150px;margin-top: 30px;" data-toggle="modal" data-target="#myModal3"> 



          <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content bronze-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">votre demande sera traitée dans les meilleurs délais</h4>
        </div>
        <div class="modal-body">
          <input type="submit" name="gold" value="Bronze" style="
        margin-left: 250px;
        margin-top: 30px;>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



      </span>
      </td>

      </tr>
</form>
    </table>
  </div>
<!---------------------------------------------------------------------------------------------->
<!-- top-brands -->

<!-- //newsletter -->
<!-- footer -->
 <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <ul class="footer_box">
              <h4>Products</h4>
              <li><a href="#">Mens</a></li>
              <li><a href="#">Womens</a></li>
              <li><a href="#">Youth</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="footer_box">
              <h4>About</h4>
              <li><a href="#">Careers and internships</a></li>
              <li><a href="#">Sponserships</a></li>
              <li><a href="#">team</a></li>
              <li><a href="#">Catalog Request/Download</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="footer_box">
              <h4>Customer Support</h4>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Shipping and Order Tracking</a></li>
              <li><a href="#">Easy Returns</a></li>
              <li><a href="#">Warranty</a></li>
              <li><a href="#">Replacement Binding Parts</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="footer_box">
              <h4>Newsletter</h4>
              <div class="footer_search">
                   <form>
                  <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
                  <input type="submit" value="Go">
                   </form>
                  </div>
              <ul class="social"> 
                <li class="facebook"><a href="#"><span> </span></a></li>
                <li class="twitter"><a href="#"><span> </span></a></li>
                <li class="instagram"><a href="#"><span> </span></a></li> 
                <li class="pinterest"><a href="#"><span> </span></a></li> 
                <li class="youtube"><a href="#"><span> </span></a></li>                             
                </ul>
              </ul>
          </div>
        </div>
        <div class="row footer_bottom">
            <div class="copy">
                 <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
                </div>
            <dl id="sample" class="dropdown">
                <dt><a href="#"><span>Change Region</span></a></dt>
                <dd>
                    <ul>
                        <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
                        <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
                        <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
                        <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
                        <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
                        <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
                    </ul>
                 </dd>
              </dl>
          </div>
      </div>
    </div>
</body> 
</html>