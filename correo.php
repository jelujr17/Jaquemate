<!--?php
    if ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener el JSON del cuerpo de la solicitud
        $json = file_get_contents('php://input');
    
        // Decodificar el JSON y manejar errores
        $data = json_decode($json);
        if ($data === null) {
            echo 'Error: JSON inválido';
            http_response_code(400); // Bad Request
            exit;
        }
    
        // Preparar datos para enviar por correo
        $datosJson = array(
            'nombre' => $data->nombre,
            'email' => $data->email,
            'asunto' => $data->asunto,
            'mensaje' => $data->mensaje
        );
        $jsonData = json_encode($datosJson);
    
        // Enviar datos a la API externa
        $ch = curl_init('http://jmvidareal.synology.me:8081/sendmail');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ));
        $response = curl_exec($ch);
    
        // Verificar errores de cURL
        if (curl_errno($ch)) {
            echo 'Error cURL: ' . curl_error($ch);
            http_response_code(500); // Internal Server Error
        } else {
            // Manejar la respuesta de la API
            echo $response;
        }
    
        // Cerrar la sesión cURL
        curl_close($ch);
    }
?>-->

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
if ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el JSON del cuerpo de la solicitud
    $json = file_get_contents('php://input');

    // Decodificar el JSON y manejar errores
    $data = json_decode($json);

        $nombre = $data->nombre;
        $email = $data->email;
        $asunto = $data->asunto;
        $mensaje = $data->mensaje;
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'lin155.loading.es';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noreply@jaquemate.es';                     //SMTP username
    $mail->Password   = 'No_Reply_7';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@jaquemate.es', 'JaqueMate');
    $mail->addAddress('noreply@jaquemate.es');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = `<html>
        <head>
            <style>
                body {
                    font-family: 'Arial', sans-serif;
                    background-color: #f7f7f7;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    max-width: 800px;
                    margin: 20px auto;
                    background-color: #fff;
                    border-radius: 8px;
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                }
                .header {
                    background-color: #4caf50;
                    color: #fff;
                    padding: 20px;
                    border-top-left-radius: 8px;
                    border-top-right-radius: 8px;
                }
                .content {
                    padding: 20px;
                }
                .footer {
                    font-size : 14px;
                    background-color: #f0f0f0;
                    padding: 20px;
                    border-bottom-left-radius: 8px;
                    border-bottom-right-radius: 8px;
                }
                .mensaje{	
                    text-align : center;
                    font-size : 20px;
                }
                .texto{	
                    margin-left: 15px;
                    text-align : left;
                    font-size : 18px;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2><b>-- Asunto:  </b>$asunto</h2>
                </div>
                <div class="content">
                    <p style="font-size: 18px;"><b>De:</b> $email</p>
                    <p style="font-size: 18px;"><b>Nombre:</b> $nombre</p>
                    <hr style="border-top: 1px solid #f0f0f0;">
                    <p class="mensaje"><b>Mensaje</b></p>
                    <p class="texto">$mensaje</p>
                </div>
                <div class="footer">
                    <p>Inazuma campeón</p>
                </div>
            </div>
        </body>
    </html>`;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>