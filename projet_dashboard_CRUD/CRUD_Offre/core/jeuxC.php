<?PHP
include "C:/xampp/htdocs/projet_dashboard_CRUD-Copie/CRUD_Offre/config.php";

class jeuxC {
function afficherJeux ($jeux){
        echo "Id: ".$jeux->getId()."<br>";
        echo "Titre: ".$jeux->getTitre()."<br>";
        echo "nbe de pts de fedilite: ".$jeux->pt_fedilite()."<br>";
        echo "Description: ".$jeux->getDescription()."<br>";
        echo "Cadeau: ".$jeux->getCadeau()."<br>";
        echo "Date Debut: ".$jeux->getDate_d()."<br>";
        echo "Date Fin: ".$jeux->getDate_f()."<br>";
        echo "Les Participants : ".$jeux->getParticipants()."<br>";
        
    }

function ajouterJeux($jeux){
    $sql="insert into jeu_concours (titre,pt_fedilite,cadeau,description,date_d,date_f,participants) values (:titre, :pt_fedilite,:cadeau,:description,:date_d,:date_f,:participants)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $titre=$jeux->getTitre();
        $pt_fedilite=$jeux->getPt_fedilite();  
        $cadeau=$jeux->getCadeau();
        $description=$jeux->getDescription();
        $date_d=$jeux->getDate_d();
        $date_f=$jeux->getDate_f();
        $participants=$jeux->getParticipants();
  

        $req->bindValue(':titre',$titre);
        $req->bindValue(':pt_fedilite',$pt_fedilite);
        $req->bindValue(':cadeau',$cadeau);
        $req->bindValue(':description',$description);
        $req->bindValue(':date_d',$date_d);
        $req->bindValue(':date_f',$date_f);
        $req->bindValue(':participants',$participants);
        
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

    function afficherJeuxBD($id){

        $sql="SElECT * From jeu_concours where id='$id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
        function afficherJeuxBD2(){

        $sql="SElECT * From jeu_concours";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function supprimerJeux($id){
        $sql="DELETE FROM jeu_concours where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function modifierJeux($jeux, $id){


    $sql = "UPDATE jeu_concours SET titre=:titre,pt_fedilite=:pt_fedilite,cadeau=:cadeau,description=:description,date_d=:date_d,date_f=:date_f,participants=:participants where id=:id";

    $db = config::getConnexion();

    try{
    $req = $db->prepare($sql);

    $id=$jeux->getId();
    $titre=$jeux->getTitre();
    $pt_fedilite=$jeux->getPt_fedilite();
    $cadeau=$jeux->getCadeau();
    $description=$jeux->getDescription();
    $date_d=$jeux->getDate_d();
    $date_f=$jeux->getDate_f();
    $participants=$jeux->getParticipants();

    $req->bindValue(':id',$id);
    $req->bindValue(':titre',$titre);

    $req->bindValue(':pt_fedilite',$pt_fedilite);
    $req->bindValue(':cadeau',$cadeau);
    $req->bindValue(':date_d',$date_d);
    $req->bindValue(':date_f',$date_f);
    $req->bindValue(':description',$description);
    $req->bindValue(':participants',$participants);

        $req->execute();
         
    }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

    function recupererJeux($id){
        $sql="SELECT * from jeu_concours where id LIKE '$id%'";
        
        $db = config::getConnexion();

        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
        function trierParTitre(){
        $sql="SElECT * From jeu_concours ORDER BY titre ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

        function trierParDate(){
        $sql="SElECT * From jeu_concours ORDER BY date_d ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function AjouterNotif($jeux,$id){

        $sql="insert into notif (idN,titreN,pt_fediliteN,cadeauN,descriptionN,date_dN,date_fN,participantsN) values(:idN,:titreN,:pt_fediliteN,:cadeauN,:descriptionN,:date_dN,:date_fN,:participantsN)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $idN=$jeux->getId();
            $titreN=$jeux->getTitre();
            $pt_fediliteN=$jeux->getPt_fedilite();
            $cadeauN=$jeux->getCadeau();
            $descriptionN=$jeux->getDescription();
            $date_dN=$jeux->getDate_d();
            $date_fN=$jeux->getDate_f();
            $participantsN=$jeux->getParticipants();


            $req->bindValue(':idN',$idN);
            $req->bindValue(':titreN',$titreN);
            $req->bindValue(':pt_fediliteN',$pt_fediliteN);
            $req->bindValue(':cadeauN',$cadeauN);
            $req->bindValue(':descriptionN',$descriptionN);
            $req->bindValue(':date_dN',$date_dN);
            $req->bindValue(':date_fN',$date_fN);
            $req->bindValue(':participantsN',$participantsN);


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

function afficherNotifBD2(){
    $sql="SElECT * From notif";
    $db = config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

    function supprimerNotif($idN){
        $sql="DELETE FROM notif where idN= :idN";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idN',$idN);
        try{
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function concatin($str,$id)
    {
        $db = config::getConnexion();

        $part = $this->afficherJeuxBD2();

        foreach ($part as $row) {
            $p=$row['participants'];
        }
        $resultat = $p." ".$str;
        $sql = "UPDATE jeu_concours SET participants='$resultat' where id='$id'";
        $req=$db->prepare($sql);
        $req->execute();


    }

   function concatin_NbeParticipants($id)
    {
        
        $db = config::getConnexion();

        $part = $this->afficherJeuxBD2();

        foreach ($part as $row) {
            $p=$row['nbe_participants'];
        }
        $resultat = $p+1;
        $sql = "UPDATE jeu_concours SET nbe_participants='$resultat' where id='$id'";
        $req=$db->prepare($sql);
        $req->execute();


    }
    

    function suppprimerJeuxAuto(){
        $sql="DELETE FROM jeu_concours where date_f< CURRENT_DATE()";

        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}
?>