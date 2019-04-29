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
    <h1>Feltöltés a galériába:</h1>
<?php
    if (!empty($uzenet1))
    {
        echo '<ul>';
        foreach($uzenet1 as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="?oldal=feltolt" method="post"
                enctype="multipart/form-data">
        <label>Első:
            <input type="file" name="elso" required>
        </label>
		<br>
		<br>
        <label>Második:
            <input type="file" name="masodik">
        </label>
		<br>
		<br>
        <label>Harmadik:
            <input type="file" name="harmadik">
        </label>  
		<br>
		<br>		
        <input type="submit" name="kuld">
      </form>   
