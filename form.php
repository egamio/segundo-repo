<?php
	if (isset($_POST["submit"]))
    {
    	$name=$_POST["name"];
    	$email=$_POST["email"];
    	$message=$_POST["message"];
        
        $to="egamio@netgate.com.uy";
        $subject="Message From Orange Contact Form";
   		 $headers = "From: egamio@netgate.com.uy\r\n";
		 $headers .= "Reply-To: egamio@netgate.com.uy\r\n";
		 $headers .= "MIME-Version: 1.0\r\n";
		 $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		 
		 $mensaje = "<html><body>Ud. ha recibido un mensaje de Orange Contact Form: <br><br>";
		 $mensaje .= '<table rules="all" style="border-color: #666;" cellpadding="10">'	;
		 $mensaje .= "<tr style='background: #eee;'><td><strong>Name</strong></td><td>".strip_tags($name)."</td></tr>";
		 $mensaje .= "<tr style='background: #eee;'><td><strong>Email</strong></td><td>".strip_tags($email)."</td></tr>";
 		 $mensaje .= "<tr style='background: #eee;'><td><strong>Message</strong></td><td>".strip_tags($message)."</td></tr>";
		 $mensaje .= '</table>';
		 $mensaje .= '</body></html>';
			
		 if(mail($to, $subject, $mensaje, $headers))
		 {
			 $result = "thank you by your message";
		 }
		 else
		 {
			 $result = "Hubo un error al enviar su mensaje. Reintente.";
		 }

		 echo $result;
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Orange Contact Form</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="wrapper">
        <form action="" method="post">
          <div class="contact-form">
                <div class="header-form">
                    <span class="contact-literal">Contact&nbsp;us</span>
                    <span id="header-line"><img src="images/line.png"></span>
                </div>
                <div class="content-form">
                    <p>
                        <input type="text" name="name" id="name">
                    </p>
                    <p>
                        <input type="email" name="email" id="email">
                    </p>
                    <p>
                        <textarea name="message" id="message"></textarea>
                    </p>
                    <p>
                        <button type="submit" name="submit" id="submit"></button>
                    </p>
                </div>
            
            
            </div>
        </form>    
    </div>
</body>
</html>
