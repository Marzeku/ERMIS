<?php
    
    include "../Controlador/db.php"; 
    
    echo "GENERADOR DE CLAVE SECUNDARIAS \n"; 
    echo "\n-> La nueva clave generada es: "; 
    
    if(isset($_POST['Descargar']))
    {
        $Clave1 = $_POST['clave1']; 
        
        $file = fopen("Clave_Generada.txt", "w");
        fwrite($file, $Clave1 . PHP_EOL);
        fclose($file);
        
        header("Content-disposition: attachment; filename = Clave_Generada.txt");
        header("Content-type: MIME");
        readfile("Clave_Generada.txt");
    }
    
    echo "\nCuide esta clave, ya que sin ella no podra modificar su contraseña actual. "; 
    echo "\n\nAnte cualquier duda o inquietud, puede ir a la opcion de Ayuda o enviar un correo electronico a: marzeku@gmail.com ";
?>