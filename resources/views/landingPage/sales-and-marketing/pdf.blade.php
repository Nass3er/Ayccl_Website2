<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Preview</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        .pdf-container {
            width: 100%;
            height: 100vh;
            border: none;
        }
    </style>
</head>
<body>
    <iframe 
        class="pdf-container"
        src="{{ asset('files/products/'.$filepath) }}"
        type="application/pdf"
        width="100%"
        height="100%">
        <p>Your browser does not support PDF preview. 
           <a href="{{ asset('files/products/'.$filepath) }}" target="_blank">Click here to download the PDF</a>.
        </p>
    </iframe>
</body>
</html>