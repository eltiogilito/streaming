<?php
/* Smarty version 3.1.33, created on 2019-02-05 20:38:43
  from 'C:\Users\moises\Desktop\UwAmp\www\netflix\pantallas\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c59e64357db47_67512340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35eaaee33a5aa76a7578979c4d0519c629939ae5' => 
    array (
      0 => 'C:\\Users\\moises\\Desktop\\UwAmp\\www\\netflix\\pantallas\\templates\\index.tpl',
      1 => 1549395519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c59e64357db47_67512340 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">

<head>
    <meta charset="utf8" />
    <title>Neflis :) </title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <?php echo '<script'; ?>
 type="text/javascript">
        function muestraMensaje(mensaje) {
            if (mensaje != '')
                alert(mensaje);
        }

    <?php echo '</script'; ?>
>
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

<body onload="muestraMensaje('<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
');">
    <header>
       <h1>Neflis</h1>
       <div id="id">Usuario: <?php echo '<?=';?>$usuario<?php echo '?>';?> <a href='categorias.php' class='enlaceboton'>Categorias</a>    <a href='cerrar.php' class='enlaceboton'>Cerrar Sesión</a> </div>
    </header>
    <section>
      <!--  <article id="navegacion">
            <div id="carrito">
                <img src="imagenes/basket.png" alt="carrito" class="alinea" />
                <a href="cesta.php"><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
 productos</a>
            </div>
        </article>-->
        <article id="articulo">
           <table>
           <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['avideos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
            <td>
            <div class="flota">
               <h2><?php echo $_smarty_tpl->tpl_vars['video']->value->titulo;?>
</h2>
                <a href="muestra.php?codigo=<?php echo $_smarty_tpl->tpl_vars['video']->value->codigo;?>
">
                    <img src="carteles/<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" />
                </a>
                <br>
                
            </div>
            </td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
            </table>
        </article>
    </section>
    <footer class="pie">
        <a href="aviso.php" class="boton">Aviso Legal</a>
    </footer>
</body>

</html>
<?php }
}
