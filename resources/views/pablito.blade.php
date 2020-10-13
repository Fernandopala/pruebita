@extends('plantilla')

@section('seccion')
<h1>Pruebas de parrados y codigos de saltos</h1>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac mauris ipsum. Mauris quis egestas quam, eu tristique neque. Vivamus venenatis mattis neque id vehicula. Suspendisse justo tortor, egestas sed posuere vel, placerat ac urna. Nulla pretium elit non dolor consectetur malesuada. Phasellus sit amet facilisis ante, sit amet accumsan felis. <!-- El siguiente codigo es un salto de linea, es como hacer un enter entremedio, se puede ver la diferencia entre un parrafo con salto incrustado, y u un parrafo que tenga salto de linea con otro parrafo. El br tiene menos separacion que el salto entre parrafos, ya que con el codigo br, se aprecia que el texto esta dentro del mismo parrafo, y el otro queda separado como parrafos diferentes--> <br/>Suspendisse sed sollicitudin nunc. Fusce ac massa efficitur, elementum augue non, sagittis justo. Sed a blandit diam. In ligula nulla, congue blandit iaculis vel, varius vitae ipsum. Curabitur tincidunt metus at erat cursus, auctor pharetra leo cursus.
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac mauris ipsum. Mauris quis egestas quam, eu tristique neque. Vivamus venenatis mattis neque id vehicula. Suspendisse justo tortor, egestas sed posuere vel, placerat ac urna. Nulla pretium elit non dolor consectetur malesuada. Phasellus sit amet facilisis ante, sit amet accumsan felis. 
        <hr/>   <!--Comentario: salto de linea pero con una linea que corta parte del cuerpo -->
        Suspendisse sed sollicitudin nunc. Fusce ac massa efficitur, elementum augue non, sagittis justo. Sed a blandit diam. In ligula nulla, congue blandit iaculis vel, varius vitae ipsum. Curabitur tincidunt metus at erat cursus, auctor pharetra leo cursus.
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac mauris ipsum. Mauris quis egestas quam, eu tristique neque. Vivamus venenatis mattis neque id vehicula. Suspendisse justo tortor, egestas sed posuere vel, placerat ac urna. Nulla pretium elit non dolor consectetur malesuada. Phasellus sit amet facilisis ante, sit amet accumsan felis. Suspendisse sed sollicitudin nunc. Fusce ac massa efficitur, elementum augue non, sagittis justo. Sed a blandit diam. In ligula nulla, congue blandit iaculis vel, varius vitae ipsum. Curabitur tincidunt metus at erat cursus, auctor pharetra leo cursus.
    </p>

    <h2>Aqui unas diferencias de escribir con otros tipos de codigos</h2>

    <p>
        <strong>En negrita con strong.</strong>
        <br/>
        <em>Aqui texto en cursiva con em.</em>
        </br>
        <i>Otra manera de poner cursiva las palabras es con la etiqueta i</i>
        <br/>
        <strong><em>aqui una combinacion de strong y em.</em></strong>
        <br/>
        <span> Aqui no se ve diferencia con span, ya que es usado mas cuando se quiere resaltar que este tendra alguna caracteristica diferente, por eso se usa span, se le podria poner un identificador y trabajarlo a futuro o usar como una clase para trabajarlo con css.
        </span>
        <br/>
        <br/>
        <blockquote>
            "Esta forma es cuando se quiere realizar una cita de algun texto con blockquote"
        </blockquote>
    </p>

    <hr/>
    <h2>Listas</h2>
    <h3>Lista ordenada</h3>
        <ol>
            <li>Perro</li>
            <li>Gato</li>
            <li>Loro</li>
        </ol>
    <h3>Lista desordenada</h3>
        <ul>
            <li>rojo
                <ul>
                    <li>naranjo</li>
                </ul>
            </li>
            <li>amarillo
                <ul>
                    <li>verde</li>
                </ul>
            </li>
            <li>azul</li>
        </ul>

    <h3>Incrustar imagen</h3>
        <img alt="No se encuentra la imagen" title="Miku-Chan" src="resources/imagenes/miku.jpg" height="400px"/> <!-- si solo se selecciona una de las opciones de edicion de altura, esta se cuadrara automaticamente, manteniendo las proporciones de la imagen original -->
    
    <h3>Tablas</h3>
        <table border="1">
            <tr> <!-- Comienza escribiendo las filas y despues las columnas que tendran la tabla-->
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Ciudad</td>
            </tr>
            <tr>
                <td>Pablo</td>
                <td>Arteaga</td>
                <td>San Carlos</td>
            </tr>
            <tr>
                <td>Alejandro</td>
                <td colspan="2">Luna</td> <!-- con colspan es para expandir la columna-->
            </tr>
        </table>

        <hr/>

        <h2>FORMULARIO</h2>

        <form action="" method=""> <!-- action es donde se ira el formulario (enviar los datos hacia donde) y method es el metodo de como se enviara, normalmente es en post para pasar los valores en privado-->
            <p>
                <label for="nombre">Nombre</label> <!-- for es a que campo corresponde este label -->
                <input type="text"  name="nombre" placeholder="Ingrese nombre"/> <!-- entrada de texto, name es para ponerle un nombre o id al campo del formulario, lo otro es placeholder que muestra un texto, que luego al escribir desaparece-->
            </p>
            <p> 
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion"></textarea> <!-- area de texto -->            
            </p>

            <p>
                <input type="radio" name="genero" value="hombre">hombre<br/>
                <input type="radio" name="genero" value="mujer">mujer<br/>
                <input type="radio" name="genero" value="nada">nada<br/>
            </p>

            <p>
                <select name="genero2">
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                    <option value="nada">Nada</option>
                </select>
            </p>
            <input type="submit" value="Enviar formulario"/>          

        </form>
@endsection