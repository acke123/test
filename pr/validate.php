<?php 
if(isset($_POST['btn'])){
    $lik=$_POST['lik'];
    $gl=$_POST['gl'];

    echo "<h2>Vas omiljen lik je:".$lik."</br>";
if($gl='da'){
    echo "<h2>Hvala Vam sto pratite najbolji anime!!</h2>";
}else{
    echo "<h2>Preporucujemo da odgledate sve epizode</h2>";
}

}else{
    header("Location:index.php");
}

?>