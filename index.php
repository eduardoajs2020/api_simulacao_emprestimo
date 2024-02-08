<?php

// Caminho para o arquivo JSON da definição Swagger
$swaggerFile = 'swagger.json';

// Carrega o arquivo JSON
$swaggerJson = file_get_contents($swaggerFile);

// Exibe a documentação do Swagger UI
?>
<!DOCTYPE html>
<html>
<head>
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/3.50.0/swagger-ui.css">
</head>
<body>
    <div id="swagger-ui"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/3.50.0/swagger-ui-bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/3.50.0/swagger-ui-standalone-preset.js"></script>
    <script>
        window.onload = function() {
            // Configuração do Swagger UI
            const ui = SwaggerUIBundle({
                spec: <?php echo $swaggerJson; ?>,
                dom_id: '#swagger-ui',
                presets: [
                    SwaggerUIBundle.presets.apis,
                    SwaggerUIStandalonePreset
                ],
                layout: "BaseLayout"
            });

            // Exibe a documentação
            ui.initOAuth();
        };
    </script>
</body>
</html>
