<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>
    </head>
    <body>
        <?php
        /*Datos del desarrollador:
         * Nombre: Brian Cardona Lujan
         * Nombre del curso: Desarrollo web con PHP
         * Evidencia: AA2         
        */
        
        // Array multidimensional con el directorio
        $directorio = array
            (
            array("Juan Manuel","Calle 1 Cra 2",3213214,"01/01/2000","Verde"),
            array("Miguel Angel","Calle 2 Cra 3",3415214,"02/03/2011","Amarillo"),
            array("Pedro Jose","Calle 8 Cra 12",3553214,"09/12/2009","Rojo")
            );
        
        // Array sencillo con los colores favoritos
        $colorFavorito = array
            ("Blanco" => "Paz y calma",
             "Amarillo" => "Riqueza y alegria",
             "Azul" => "Agua y vida");
        
        ?>
        
        <table>
            <tr>
              <th>Nombre</th>
              <th>Dirección</th> 
              <th>Teléfono</th>
              <th>Fecha de cumpleaños</th>
              <th>Color favorito</th>
              <th>Significado</th>
            </tr>
            
            <?php
                // Ciclo foreach para recorrer el array
                foreach ($directorio as $datosPersona) {
                    echo "<tr>"
                        ."<td>".$datosPersona[0]."</td>"
                        ."<td>".$datosPersona[1]."</td>"
                        ."<td>".$datosPersona[2]."</td>"
                        ."<td>".$datosPersona[3]."</td>"
                        ."<td>".$datosPersona[4]."</td>";
                      
                        /*Condicional if para validar el color favorito 
                        dentro del ciclo for each*/
                        if($datosPersona[4] == "Blanco"){
                            echo "<td>".$colorFavorito["Blanco"]."</td>";

                        }
                        elseif($datosPersona[4] == "Amarillo"){
                            echo 
                                 "<td>".$colorFavorito["Amarillo"]."</td>";

                        }
                        elseif($datosPersona[4] == "Azul"){
                            echo "<td>".$colorFavorito["Azul"]."</td>";
                        }
                        else{
                        echo "<td>"."No se encuentra el significado"."</td>";
                        }                    
                    "</tr>";
                }  
            ?>
        </table>
        
    </body>
</html>
