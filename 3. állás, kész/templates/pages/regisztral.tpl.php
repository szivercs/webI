<?php if(isset($uzenet)) { ?>
		
		<?php if($ujra) { ?>
			<h1 class="alert-danger text-center">A regisztráció nem sikerült!</h1>
			<h2 class="text-center"><?php echo $uzenet; ?></h2>
			<p class="text-center"><a href="?oldal=belepes" >Próbálja újra!</a></p>
	<?php }else{ ?><h1 class="alert-success text-center"><?php echo $uzenet; ?></h2> 
	<?php }} ?>