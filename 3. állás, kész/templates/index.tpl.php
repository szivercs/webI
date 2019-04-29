<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<?php
    include('./includes/config.inc.php');
    $uzenet1 = array();   
    if (isset($_POST['kuld'])) {
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet1[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1
                        or $fajl['error'] == 2
                        or $fajl['size'] > $MAXMERET) 
                $uzenet1[] = " Túl nagy állomány: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet1[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet1[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }
?>
<?php
    include('./includes/config.inc.php');    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./stilus.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
	<header id="cím1">
	<table>
		<tr>
		<td><img src="./kepek/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>"></td>
		<td><h1><?= $fejlec['cim'] ?></h1></td>
		<td><img src="./kepek/<?=$fejlec['kepforras2']?>" alt="<?=$fejlec['kepalt2']?>"></td>
		</tr>
	</table>
		<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>
    <div>
            <nav>
                <ul id="menu1">
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
                </ul>
            </nav>
		<div id='oldalmenu'>
		<?php include("./templates/pages/oldalmenu.tpl.php."); ?>
		</div>
        <div id="tartalom">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </div>
</body>
</html>
