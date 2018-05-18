<?php class Email {
    
    public function  __construct() {
    }
	
	static public function contacto($datos = array()){
		// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
		$headers = "From: Nombre <tu@dominio.com>\r\n";
		$headers .= "X-Mailer: PHP5\n";
		$headers .= 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// Definir el correo de destino:
		if($datos["email"])
			$dest .=" ,".strip_tags($datos["email"]);
		// Aqui definimos el asunto y armamos el cuerpo del mensaje
		
		$asunto = "Formulario de contacto: ";
		$contenido = "	<br /><br /><table>
							<tr>
								<td>Nombre</td><td>".strip_tags(html_entity_decode($datos['nombre']))."</td>
							</tr>
							<tr>
								<td>Email</td><td>".strip_tags(html_entity_decode($datos['email']))."</td>
							</tr>
							<tr>
								<td>Empresa</td><td>".strip_tags(html_entity_decode($datos['empresa']))."</td>
							</tr>
							<tr>
								<td>Teléfono}</td><td>".strip_tags(html_entity_decode($datos['telefono']))."</td>
							</tr>
							<tr>
								<td>Comentarios</td><td>".strip_tags(html_entity_decode($datos['comentarios']))."</td>
							</tr>
						</table>";
		
		
		$html = "<div style='margin-left:auto; margin-right:auto; width:630px;'>";
		// $html .= "<img style='display:block;' src='".Path."/images/email/email_header.jpg' />";
		$html .= "<div style='width:591px; padding-left:15px; padding-right:15px; font-size:12px; line-height:17px; color:#555;'>".$contenido."</div>";
		// $html .= "<img style='display:block;' src='".Path."/images/email/email_footer.jpg' />";
		$html .= "</div>";
		
		if(mail($dest,$asunto,$html,$headers)){
			$_SESSION["msj"]="Correo enviado satisfactoriamente, a la brevedad nos pondremos en contacto.";
		}else{
			$_SESSION["msj"]="No pudimos enviar tu correo inténtalo de nuevo mas tarde.";
		}
		
    }    
    
    //Email::contacto($this->data);
}?>