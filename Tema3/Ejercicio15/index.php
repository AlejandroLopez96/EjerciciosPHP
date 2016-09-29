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
    </head>
    <body>
        <h3>Vamos a realizar un test para ver la probabilidad de que tu pareja te esté siendo infiel. La respuesta será Verdadero (V) o Falso (F).</h3>
        <form action="testinfidelidad.php" method="get">
            <p>Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.<br> 
                <input type="radio" name="r1" value="true"> Verdadero
                <br>
                <input type="radio" name="r1" value="false"> Falso
            </p>
            <p>Ha aumentado sus gastos de vestuario.<br>
                <input type="radio" name="r2" value="true"> Verdadero
                <br>
                <input type="radio" name="r2" value="false"> Falso
            </p>
            <p>Ha perdido el interés que mostraba anteriormente por ti.<br>
                <input type="radio" name="r3" value="true"> Verdadero
                <br>
                <input type="radio" name="r3" value="false"> Falso
            </p>
            <p>Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer).<br>
                <input type="radio" name="r4" value="true"> Verdadero
                <br>
                <input type="radio" name="r4" value="false"> Falso
            </p>
            <p>No te deja que mires la agenda de su teléfono móvil.<br>
                <input type="radio" name="r5" value="true"> Verdadero
                <br>
                <input type="radio" name="r5" value="false"> Falso
            </p>
            <p>A veces tiene llamadas que dice no querer contestar cuando estás tú delante.<br>
                <input type="radio" name="r6" value="true"> Verdadero
                <br>
                <input type="radio" name="r6" value="false"> Falso
            </p>
            <p>Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a.<br>
                <input type="radio" name="r7" value="true"> Verdadero
                <br>
                <input type="radio" name="r7" value="false"> Falso
            </p>
            <p>Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo.<br>
                <input type="radio" name="r8" value="true"> Verdadero
                <br>
                <input type="radio" name="r8" value="false"> Falso
            </p>
            <p>Has notado que últimamente se perfuma más.<br>
                <input type="radio" name="r9" value="true"> Verdadero
                <br>
                <input type="radio" name="r9" value="false"> Falso
            </p>
            <p>Se confunde y te dice que ha estado en sitios donde no ha ido contigo.<br>
                <input type="radio" name="r10" value="true"> Verdadero
                <br>
                <input type="radio" name="r10" value="false"> Falso
            </p>
            <input type="submit" value="Resultado">
        </form>
    </body>
</html>
