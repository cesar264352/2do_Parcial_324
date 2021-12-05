<p class="text-secondary mt-3">Proceso 3</p>
<h1>Revision de documentos</h1>

<div>
	<?php 

	if ($delegado1 != NULL && $matdelegado1 != NULL && $suplente1 != NULL && $matsuplente1 != NULL && $frente1 != NULL && $sigla1 != NULL && $colores1 != NULL && $carta1 != NULL){
		echo '<div class="alert-success p-2">
				<p>Después de verificar, todos los datos son CORRECTOS.</p>
			</div>';
			$sw = 'Si';	
	}else{
		echo '<div class="alert-danger p-2">
				<p>Después de verificar, debe completar o verificar los siguientes datos INCORRECTOS.</p>
			</div>';
		echo '<ul>';
			if ($delegado1 == NULL) {
				echo "<li>El nombre del Delegado Titular es incorrecto.</li>";
			}
			if ($matdelegado1 == NULL) {
				echo "<li>La matricula del Delegado Titular es incorrecto.</li>";
			}
			if ($suplente1 == NULL) {
				echo "<li>El nombre del Suplente es incorrecto.</li>";
			}
			if ($matsuplente1 == NULL) {
				echo "<li>El numero de matricula del Suplente es incorrecto.</li>";
			}
			if ($frente1 == NULL) {
				echo "<li>Nombre del FRENTE.</li>";
			}
			if ($sigla1 == NULL) {
				echo "<li>Sigla del FRENTE.</li>";
			}
			if ($colores1 == NULL) {
				echo "<li>El o los colores del FRENTE.</li>";
			}
			if ($carta1 == NULL) {
				echo "<li>Carta dirigida al Comite Electoral.</li>";
			}
				
			
		echo '</ul>';
		$sw = 'No';
	}



?>
</div>
<input type="hidden" name="sw" value="<?php echo $sw;?>">';
