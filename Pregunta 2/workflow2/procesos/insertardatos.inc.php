<p class="text-secondary mt-3">Proceso 4</p>
<h1 class="text-primary">Insertar a la base de datos</h1>
<!-- proceso4 -->
<p>Los siguientes datos fueron agregados a la base de datos del Comite Electoral.</p>
<div class="card border-3 p-4">
 
	<div class="row row pt-3">
		<div class="col-md-6 form-group">
	    	<label for="textbox1">Nombre completo del Delegado Titular:</label>
	    	<input class="form-control" name="delegado" type="text" value="<?php echo $delegado1;?>" disabled/>
		</div>
		<div class="col-md-6 form-group">
	    	<label for="textbox2">Nro. de Matrícula del Delegado:</label>
	    	<input class="form-control" name="matdelegado" type="text" value="<?php echo $matdelegado1;?>" disabled/>
		</div>
	</div> 
	<div class="row row pt-3">
		<div class="col-md-6 form-group">    
	    	<label for="textbox1">Nombre completo del Suplente:</label>
	    	<input class="form-control" name="suplente" type="text" value="<?php echo $suplente1;?>" disabled/>
		</div>
		<div class="col-md-6 form-group">
	    	<label for="textbox2">Nro. de Matrícula del Suplente:</label>
	    	<input class="form-control" name="matsuplente" type="text" value="<?php echo $matsuplente1;?>" disabled/>
		</div>
	</div> 
	<div class="row pt-3">
		<div class="col-md-6 form-group">
	    	<label for="textbox1">Nombre del Frente:</label>
	    	<input class="form-control" name="frente" type="text" value="<?php echo $frente1;?>"disabled/>
		</div>
		<div class="col-md-3 form-group">
	    	<label for="textbox2">Sigla:</label>
	    	<input class="form-control" name="sigla" type="text" value="<?php echo $sigla1;?>"disabled/>
		</div>
		<div class="col-md-3 form-group">
	    	<label for="textbox2">Colores:</label>
	    	<input class="form-control" name="colores" type="text" value="<?php echo $colores1;?>" disabled/>
		</div>
	</div>
	<div class="row pt-3">
		<div class="col-md-12 form-group">
			<label for="exampleFormControlTextarea1" class="form-label">Carta al Comite Electoral</label>
  			<textarea class="form-control" name="carta" rows="4" disabled><?php echo $carta1;?></textarea>
  		</div>
	</div>
	<div class="alert-success mt-3 p-3"><strong>Los datos fueron agregados por el universitario <?php echo $fila_c["nombre"];?>. </strong></div>
	
</div>
