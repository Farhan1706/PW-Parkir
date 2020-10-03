<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir</title>
    <link rel="stylesheet" href="Css/basic.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
          integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
          crossorigin="anonymous">
  </script>
    <script type="text/javascript">
        setInterval(function(){
            $('#update_lahan').load('./body.php');
        }, 2000);
    </script>
</head>
<body>
    <div id="update_lahan">
    </div>
</body>
</html>