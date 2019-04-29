
<?php
include('./includes/database.inc.php');	
	try {
		$dbh=new PDO('mysql:dbname='.$adatbazisnev.'; host='.$host.'',$felhasznalonev,$jelszo,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
		$data = $dbh->query("SELECT * FROM uzenetek")->fetchAll();

	foreach ($data as $row) {
?>
		<div class="container message">
			<h3 class="text-center">Név: <?php echo $row["nev"]; ?></h3>
			<h4 class="text-center">Email: <?php echo $row["email"]; ?></h4>
			<p class="text-justify"><?php echo $row["uzenet"]; ?></p>
		</div>
	<?php 
			}
	}
			
		catch (PDOException $e) {
			$errormessage = "Hiba: ".$e->getMessage();
		}      

	?>