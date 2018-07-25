<?php include 'header.php'; 
include 'nedmin/netting/baglan.php';


$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id =:id" );
$ayarsor->execute(array(
	id => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);





$p=$_GET['p'];

if(file_exists($p.".php")) { $syf=$p.".php";} else { $syf="404.php";}
if($p=="") { include("start.php");} else {include($syf);}

?>   





<?php include 'footer.php'; ?>