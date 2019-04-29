<?php
$ablakcim = array(
    'cim' => 'Mentsvár az Állatokért és Környezetünkért Közhasznú Alapítvány',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'kep1',
	'cim' => 'Mentsvár az Állatokért és Környezetünkért Közhasznú Alapítvány',
	'kepforras2' => 'logo.png',
    'kepalt2' => 'kep2',
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'videotar' => array('fajl' => 'videotar', 'szoveg' => 'Videótár', 'menun' => array(1,1)),
	'keptar' => array('fajl' => 'keptar', 'szoveg' => 'Képtár', 'menun' => array(1,1)),
	'elerhetoseg' => array('fajl' => 'elerhetoseg', 'szoveg' => 'Elérhetőseg', 'menun' => array(1,1)),
    'allatvedelmiorszolgalat' => array('fajl' => 'allatvedelmiorszolgalat', 'szoveg' => 'Állatvedelmi őrszolgalat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
	'feltolt' => array('fajl' => 'feltolt', 'szoveg' => 'Üzenet küldése', 'menun' => array(0,0)),
	'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek megtekintése', 'menun' => array(1,1)),
	
	'kapcsolat_feldolgoz' => array('fajl' => 'kapcsolat_feldolgoz', 'szoveg' => '', 'menun' => array(0,0)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => '', 'menun' => array(0,0)),
	'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
	
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
	
);

date_default_timezone_set('Europe/Brussels');
	$MAPPA = './gallery/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>