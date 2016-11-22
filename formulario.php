<form method="POST" action="<?php echo $SCRIPT_NAME ?>">
 <center><p>Informe o Ticket:<br><input type="text" name="ticket" placeholder="Entre com o seu ticket" /></p>
 <p><input type="submit" onclick="alert('Enviado!')"/></p> 
<h1>Confirmação:</h1> 
 <p>Número do ticket digitado é:</p><?php echo htmlspecialchars($_POST['ticket']); ?>
 </center>
</form>
