<p class="text-secondary mt-3">Proceso 6</p>
<h1 class="text-primary">Sorteo para la papeleta</h1>
<p>Sorteo para la papeleta</p>

<?php 
if ($sorteo == NULL) {
	$inicio=1;
	$fin=10;
	$random_number = mt_rand($inicio,$fin);
}else{
	$random_number = $sorteo;
}

 ?>
<div class="row justify-content-center">
	<div class="col-3">
		<div class="card text-center">
			<p style="font-size: 100px;"><?php echo $random_number;?></p>
		</div>
		<p>El numero es asignado de manera aleatoria.</p>
	</div>
</div>

<input type="hidden" name="random" value="<?php echo $random_number;?>">