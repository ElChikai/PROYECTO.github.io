<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Donadores.css">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    /* Google font 1*/
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

    font-family: 'Koulen', cursive;
    
    /* Google font 1*/
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">

    font-family: 'Teko', sans-serif;


    <title>Donadores</title>
</head>
<body>
    
        <section id="barra">
        <ul>
            <li><a href="Donar.html">Donar</a> </li> 
            <li class="PagAct"><a href="Donadores.php">Donadores</a> </li> 
            <li><a href="index.html">Inicio</a></li> 
            <li><a href="Tienda.html">Tienda</a></li> 
            <li><a href="Nosotros.html">Nosotros</a></li> 
            <li><a href="Contacto.html">Contacto</a></li> 
         
        </ul>
    </section>
      
    

    <section id="content">
        <table border="1" bgcolor="#ebe5f3">
            
            <tbody>
                <tr>
                   
                    <td style="font-family: 'Koulen', cursive; font-size:30px; text-align: center; ">Nombre</td>
                    <td style="font-family: 'Koulen', cursive; font-size:30px; text-align: center; ">Correo</td>
                    <td style="font-family: 'Koulen', cursive; font-size:30px; text-align: center; ">Telefono</td>
                    <td style="font-family: 'Koulen', cursive; font-size:30px; text-align: center; ">Monto Donado</td>
                    <td style="font-family: 'Koulen', cursive; font-size:30px; text-align: center; ">Metodo De Pago</td>
                </tr>
                <?php
                include ("conexion.php");
                $query="SELECT * FROM donaciones";
                $resultado=$conexion->query($query);
                while($row=$resultado->fetch_assoc())
                {
                    ?>
                    
                    <tr>
                      
                        <td style="font-family: 'Koulen', cursive; font-size:20px; text-align: center; "><?php echo $row['Nombre']; ?></td>
                        <td style="font-family: 'Koulen', cursive; font-size:20px; text-align: center; "><?php echo $row['Correo']; ?></td>
                        <td style="font-family: 'Koulen', cursive; font-size:20px; text-align: center; "><?php echo $row['Telefono']; ?></td>
                        <td style="font-family: 'Koulen', cursive; font-size:20px; text-align: center; "><?php echo $row['Monto']; ?></td>
                        <td style="font-family: 'Koulen', cursive; font-size:20px; text-align: center; "><?php echo $row['Pago']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    
    
        <footer>
            Terminos y Condiciones  -  Politica y Privacidad  -   2022
    </footer>
    
            
   

    <script src="js/rellax.min.js">         </script>
    <script src="js/index.js">         </script>
    
</body>
</html>