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
    <style>
        img{
            display: block;
            width: 200px;
            height: 200px;
        }
        .flota{
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body onload="muestraMensaje('{$mensaje}');">
    <header>
       <h1>Neflis</h1>
       <div id="id">Usuario: <?=$usuario?> <a href='categorias.php' class='enlaceboton'>Categorias</a>    <a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a> </div>
    </header>
    <section>
      <!--  <article id="navegacion">
            <div id="carrito">
                <img src="imagenes/basket.png" alt="carrito" class="alinea" />
                <a href="cesta.php">{$numero} productos</a>
            </div>
        </article>-->
        <article id="articulo">
           <table>
           <tr>
            {foreach from=$avideos item=video}
            <td>
            <div class="flota">
               <h2>{$video->titulo}</h2>
                <a href="peli.php?codigo={$video->codigo}">
                    <img src="carteles/{$video->cartel}" alt="{$video->cartel}" />
                </a>
                <br>
                
            </div>
            </td>
            {/foreach}
            </tr>
            </table>
        </article>
    </section>
    <footer class="pie">
        <a href="aviso.php" class="boton">Aviso Legal</a>
    </footer>
</body>

</html>
