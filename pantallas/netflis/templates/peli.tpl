<!doctype html>
<html lang="es">

<head>
    <meta charset="utf8" />
    <title>Neflis :) </title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <script type="text/javascript">
        function muestraMensaje(mensaje) {
            if (mensaje != '')
                alert(mensaje);
        }

    </script>

</head>

<body>
    <header>
        <h1>Neflis</h1>
        <div id="id">Usuario:
            <?=$usuario?> <a href='index.php' class='enlaceboton'>Index</a> <a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a> </div>
    </header>
    <section>

        <article id="articulo">
            <table>
                <tr>
                    <td>
                        <div class="flota">
                            <h2>{$video->titulo}</h2>
                                <img id="imagen" src="carteles/{$video->cartel}" alt="{$video->cartel}" />
                            <br>
                        </div>
                    </td>
                    <td>
                     <a href="streaming.php?codigo={$video->codigo}">Ver Online</a>
                    <a href="descargar.php">Descargar Pelicula</a>
                    </td>
                </tr>
            </table>
        </article>
    </section>
    <section>
        <div>
            <p>sinopsis: {$video->snopsis}</p>
        </div>
    </section>
    <footer class="pie">
        <a href="aviso.php" class="boton">Aviso Legal</a>
    </footer>
</body>

</html>
