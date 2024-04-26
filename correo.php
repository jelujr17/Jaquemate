<?php
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
        
        // Verificar si se proporcionaron todos los campos necesarios
        if (!isset($data->nombre, $data->email, $data->asunto, $data->mensaje)) {
            echo 'Error: Faltan campos obligatorios';
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
        $ch = curl_init('http://192.168.0.59:8081/sendmail');
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
?>