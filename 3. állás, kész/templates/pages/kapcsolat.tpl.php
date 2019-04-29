<h2>Kapcsolat felvétel</h2>
  <form class="form-horizontal" action="?oldal=kapcsolat_feldolgoz"  method="post" onsubmit="return check();" name="contact">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nev">Név:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nev" placeholder="Név:" name="nev" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Email:" name="email" required>
      </div>
    </div>
	<div class="form-group">
		<label class="control-label col-sm-2"  for="uzenet">Üzenet:</label>
		<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="uzenet" name="uzenet" required></textarea>
		</div>
	</div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <button type="button" onclick="ellenoriz();" class="btn btn-default">Ellenőriz</button>
		<input id="kuld" type="submit" value="Küld">
      </div>
    </div>
  </form>

