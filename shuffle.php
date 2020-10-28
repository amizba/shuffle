

<?php
$img= array("bomb.png","certificate.png","certificate_add.png","certificate_broken.png","certificate_delete.png",
                 "certificate_error.png","certificate_information.png","certificate_new.png","certificate_ok.png","certificate_preferences.png",
                 "certificate_refresh.png","certificate_view.png","certificate_warning.png","client_network.png","clients.png",
                 "cookies.png","cookies_delete.png","cookies_preferences.png","cookies_view.png","download.png",
                 "earth.png");
shuffle($img);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Refresco de imagenes de forma aleatoria</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>
<center>
<div class="alert alert-primary" role="alert">
Cambio de imagenes aleatorias cada vez que refrescamos la pagina
</div>

<table width=100%>
<tr>
<?php
for($i=0;$i<3;$i++)
{
        echo"<td align=center><img src=\"";
        echo $img[$i];
        echo "\" widht=100 height=100></td>";
        }
        ?>
        </tr>
        </table>
        </center>

</body>

</html>