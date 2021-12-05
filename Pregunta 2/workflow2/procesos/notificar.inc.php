
<p class="text-secondary mt-3">Proceso 5</p>
<h1 class="text-primary">Notificación</h1>
<p>Es necesario agregar los siguientes requisitos flatantes:</p>
<div class="alert-danger p-3">
<?php 

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
?>
</div>