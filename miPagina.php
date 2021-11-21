<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="miPagina.css">
    <title>Datos de mi PC</title>
</head>
<body>
    <section class="container">
    <h1>BIENVENID@ A MI PAGINA</h1>
    <div class="contentChild">
    
    <p class="subtitulos">Sr(a) usuario aqui los datos extraidos de tu Computadora:</p>

        <?php 
        $usuario=$_SERVER['HTTP_USER_AGENT'];
        $direc_IP=$_SERVER['REMOTE_ADDR'];
        /*$host=$_SERVER['REMOTE_HOST'];*/
        /*$direc_SERV=$_SERVER['SERVER_ADDR'];*/
        $name_host=$_SERVER['SERVER_NAME'];/*nombre del host*/
        $langue=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $servSoftware=$_SERVER['SERVER_SOFTWARE'];
        $puerto_remoto=$_SERVER['REMOTE_PORT'];
        /*averiguar el sistema operativo */
        switch($usuario){
            case strpos($usuario, "Windows NT 10")>0: echo "<p>Sistema Operativo: Window 10</p>";break;
            case strpos($usuario, "Android")>0: echo "<p>Sistema Operativo Android.</p>";break;
        }
        /**ver la arquitectura del sistema si es de 64 bits o de 32 bits */
        if(strpos($usuario, "x64")){ echo "<p>Arquitectura del Sistema: 64 bits</p>";}elseif(strpos($usuario, "x32")){
            echo "<p>Arquitectura del Sistema: 32 bits</p>";}
        /**con switch buscamos que navegador esta usando el usuario */
        switch($usuario){
            case strpos($usuario,"Chrome")==81: echo "<p>Navegador web: Google Chrome</p>";
            break;
            case strpos($usuario,"Firefox")==66: echo "<p>Navegador web: Mozilla Firefox</p>";
            break;
            case strpos($usuario,"OPR")==115: echo "<p>Navegador web: Opera</p>";
            break;
            case strpos($usuario,"Edg")>0 : echo "<p>Navegador web:Microsorft Edge</p>";
            break;
            default: "<p>Navegador web diferente de Chrome, Firefox, Opera y Edge</p>";
        }
        /**en caso de que el navegador tenga microsorft Edg */
        $edg="<p>Microsorft Edge</p>";
        if(strpos($usuario,"Edg")>0){echo $edg;}
      ?>
      <p class='subtitulos'>otros datos de software</p>
      <?php 
      /**otros datos*/
      echo "<p>Direccion IP de la pagina: $direc_IP</p>";
      echo "<p>Nombre del host: $name_host</p>";
      echo "<p>Puerto remoto: $puerto_remoto</p>";
      ?>  
    </div>
    <?php /*
    var_dump($usuario);echo "<br>";
    echo strpos($usuario," Edg");echo "<br>";
    */?>
    </section>
</body>
</html>
