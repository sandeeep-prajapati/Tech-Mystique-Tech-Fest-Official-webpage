<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your secrate token</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h1, h3 {
          color: green;
        }
        body, header {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          height: 100%;
        }
    </style>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
    </script>
  </head>
  <body>
    <h1 class="text-center">Scan this Qr code and register in any 6 events, these process only applicable for external participents</h1>
  <main>
    <div id="qrcode"></div>
    <p class = "text-danger text-center">print this qr code or take a screen shot of it <br> do not share this qr code to any one</p>
    </main>
     
    <script>
        var qrcode = new QRCode("qrcode",
        "https://www.parampara2024.com/event_registration.php?token=<?php echo $_SESSION['token'];  ?>");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>