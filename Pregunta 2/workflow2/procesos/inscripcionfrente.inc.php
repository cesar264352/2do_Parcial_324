<p class="text-secondary mt-3">Proceso 2</p>
<h1 class="text-primary">Inscripcion del Frente</h1>
<p>La documentacion de inscripcion debera contar con los siguientes requisitos:</p>
<div class="card border-3 p-4">
  		
  	  <?php echo $delegado1; ?>
	<div class="row row pt-3">
		<div class="col-md-6 form-group">
	    	<label for="textbox1">Nombre completo del Delegado Titular:</label>
	    	<input class="form-control" name="delegado" type="text" value="<?php echo $delegado1;?>"/>
		</div>
		<div class="col-md-6 form-group">
	    	<label for="textbox2">Nro. de Matrícula del Delegado:</label>
	    	<input class="form-control" name="matdelegado" type="text" value="<?php echo $matdelegado1;?>"/>
		</div>
	</div> 
	<div class="row row pt-3">
		<div class="col-md-6 form-group">    
	    	<label for="textbox1">Nombre completo del Suplente:</label>
	    	<input class="form-control" name="suplente" type="text" value="<?php echo $suplente1;?>"/>
		</div>
		<div class="col-md-6 form-group">
	    	<label for="textbox2">Nro. de Matrícula del Suplente:</label>
	    	<input class="form-control" name="matsuplente" type="text" value="<?php echo $matsuplente1;?>"/>
		</div>
	</div> 
	<div class="row pt-3">
		<div class="col-md-6 form-group">
	    	<label for="textbox1">Nombre del Frente:</label>
	    	<input class="form-control" name="frente" type="text" value="<?php echo $frente1;?>"/>
		</div>
		<div class="col-md-3 form-group">
	    	<label for="textbox2">Sigla:</label>
	    	<input class="form-control" name="sigla" type="text" value="<?php echo $sigla1;?>"/>
		</div>
		<div class="col-md-3 form-group">
	    	<label for="textbox2">Colores:</label>
	    	<input class="form-control" name="colores" type="text" value="<?php echo $colores1;?>"/>
		</div>
	</div>
	<div class="row pt-3">
		<div class="col-md-12 form-group">
			<label for="exampleFormControlTextarea1" class="form-label">Carta al Comite Electoral</label>
  			<textarea class="form-control" name="carta" rows="4"><?php echo $carta1;?></textarea>
  		</div>
	</div>
	<br>
	<div class="alert-warning p-3">En caso de modificar algun dato, el registro sera actualizado.</div>
</div>

<!-- <input type="text" name="nombre" value="<?php echo $nombre;?>"> -->