<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your secret token</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
  <style>
    #qrcode{
      display: flex;
      justify-content: center;
      padding: 10px;
    }
    #downloadBtn{
      margin-bottom: 10px;
    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body class="bg-light">
  <?php
    require 'usercomponents\mainnav.php';

    ?>
  <h2 class="text-center text-info pt-4">Scan this QR code and register for any 6 events. This process is only applicable for external participants.</h2>
  <main>
    <div id="qrcode"></div>
    <p class="text-danger text-center">Print this QR code or take a screenshot of it. <br> Do not share this QR code with anyone.</p>
  </main>
  <div class="text-center">
  <button id="downloadBtn" class="text-center btn btn-success">Download QR Code</button>
  </div>

  <script>
    // Generate QR code
    var qrcode = new QRCode("qrcode", {
      text: "https://www.parampara2024.com/event_registration.php?token=<?php echo $_SESSION['token']; ?>",
      width: 256,
      height: 256,
      colorDark: "#000000",
      colorLight: "#ffffff",
      correctLevel: QRCode.CorrectLevel.H
    });

    // Function to download QR code as image
    document.getElementById("downloadBtn").addEventListener("click", function() {
      var canvas = document.getElementById("qrcode").getElementsByTagName("canvas")[0];
      var url = canvas.toDataURL("image/jpeg");
      var a = document.createElement("a");
      a.href = url;
      a.download = "qrcode.jpg";
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <?php
    require 'usercomponents\mainFooter.php';

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="home/js/jquery-3.3.1.min.js"></script>
  <script src="home/js/bootstrap.min.js"></script>
  <script src="home/js/jquery.magnific-popup.min.js"></script>
  <script src="home/js/jquery.countdown.min.js"></script>
  <script src="home/js/jquery.slicknav.js"></script>
  <script src="home/js/owl.carousel.min.js"></script>
  <script src="home/js/main.js"></script>
</body>
</html>
