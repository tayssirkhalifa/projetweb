<?php  
include "C:\wamp\www\snowboarding\projet_dashboard_CRUD\CRUD_Offre\core\clienC.php"; 
       
$client=new clienC();
$q = intval($_GET['nom']);
if($q!=""){

        $liste=$client->recupererclient1($q);}
        else
             {
                $liste=$client->affic1();
             }


?>
<table class="table table-hover table-bordered" style="
    margin-left: 10px;
    margin-right: 10px;
">

<thead>


<th>nom</th>
<th>prenom</th>
<th>mail</th>
<th>password</th>
<th></th>



</thead>
<tbody> 

  <?php foreach ($liste as $row ) { ?>
<tr>

<?php
    $mysqli = new mysqli("localhost", "root", "", "tayssir");
 
//Exemple de select avec mySQLi
$reqSeuil = $mysqli->query("SELECT* FROM client");
?>
        <td><?php echo $row['nom']; ?></td>
        <td><?php echo $row['prenom']; ?></td>
        <td><?php echo $row['mail']; ?></td>
          <td><?php echo $row['password']; ?></td>
<p>

<p>
<td ><form method="POST" action="supprimerclient.php" style="
    padding-bottom: 0px;
    padding-left: 0px;
    padding-top: 0px;
    padding-right: 0px;
">
        <button type="submit" class="btn btn-danger btn-sm" value="<?PHP echo $row['nom'];?>" name="supprimer" >Supprimer</button>
    </form></td>  
  </tr>  
</tbody>
<?PHP
            }

            ?>
</table>

