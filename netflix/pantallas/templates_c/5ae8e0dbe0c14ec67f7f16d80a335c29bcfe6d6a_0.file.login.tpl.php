<?php
/* Smarty version 3.1.33, created on 2019-02-05 23:03:20
  from 'C:\Users\moises\Desktop\UwAmp\www\netflix\pantallas\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5a0828f15936_54180234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae8e0dbe0c14ec67f7f16d80a335c29bcfe6d6a' => 
    array (
      0 => 'C:\\Users\\moises\\Desktop\\UwAmp\\www\\netflix\\pantallas\\templates\\login.tpl',
      1 => 1549404191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5a0828f15936_54180234 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <style type="text/css">
        body {
            font-family: verdana;
        }

        header {
            padding: 25px;
            font-size: 2em;
            font-weight: bold;
            background-color: deeppink;
            color: white;
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        header div {
            font-size: 15px;
            
        }

        article {
            width: 80%;
            margin: 0 auto;
            text-align: justify;
        }

        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        tr:nth-child(even) {
            background-color: #cacaca;
        }

        th {
            background-color: green;
            color: white;
        }

        th,
        td {
            padding: 10px;
        }

        .arriba {
            border-top: 1px solid black;
        }

        .enlaceboton {
            text-decoration: none;
            color: white;
            border: 1px solid black;
            padding: 5px;
            background-color: black;
            border-radius: 17px;
        }

        .enlace {
            border: 3px solid black;
            margin-right: 5px;


        }
        #logo{
             width: 200px;
            height: 200px;
            display: block;
        }

        #footer {
            position: fixed;
            left: 0px;
            bottom: 0px;
            height: 30px;
            width: 100%;
            background: #999;
            font-size: .8em;
            font-weight: bold;
            color: white;
        }

        .nada {
            font-size: .5em;
        }

        caption {
            background-color: darkslateblue;
            color: white;
            font-weight: bold;
            padding-bottom: 5px;
            padding-top: 5px;
        }

        .input:focus {
            border: solid 1px deeppink;
        }

    </style>
</head>

<body>
    <header>
        <img id="logo" src="logo/neflis_logo.png" alt="logo"/>
    </header>
    <section>
        <article>
            <span style="color: red;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

            </span>

            <form action="validar.php" method="post">
               
                <table>
                    <caption>Identificación</caption>
                    <tr>
                        <td>Usuario:</td>
                        <td><input type="text" class="input" name="usuario" size="20" maxlength="20" required="required" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña: </td>
                        <td><input type="password" class="input" name="clave" size="20" maxlength="20" required="required" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Validar" />
                    </tr>
                </table>
            </form>


        </article>
    </section>
</body>

</html>
<?php }
}
