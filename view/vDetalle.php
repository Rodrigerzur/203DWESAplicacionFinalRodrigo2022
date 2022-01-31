<article class="titulopagina">
    <h2>Detalle</h2>
</article>
<form class="form">
    <input type="submit" value="Volver" name="volver" class="volver"/>
</form>
<!–– Muestra del contenido de la variable $_SESSION con foreach()––>
<?php if (!empty($_SESSION)) { ?>
    <h2 class="titulovariable">$_SESSION</h2>
    <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
        <?php foreach ($_SESSION as $clave => $valor) { ?>
            <tr>
                <td><strong><?php echo $clave ?></strong></td>
                <td><?php print_r($valor) ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <?php
}
?>

<!–– Muestra del contenido de la variable $_COOKIE con foreach()––>
<?php if (!empty($_COOKIE)) { ?>
    <h2 class="titulovariable">$_COOKIE</h2>
    <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
        <?php foreach ($_COOKIE as $clave => $valor) { ?>
            <tr>
                <td><strong><?php echo $clave ?></strong></td>
                <td><?php echo $valor ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <?php
}
?>

<!–– Muestra del contenido de la variable $_SERVER con foreach()––>
<?php if (!empty($_SERVER)) { ?>
    <h2 class="titulovariable">$_SERVER</h2>
    <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
        <?php foreach ($_SERVER as $clave => $valor) { ?>
            <tr>
                <td><strong><?php echo $clave ?></strong></td>
                <td><?php echo $valor ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <?php
}
?>
<h2 class="titulovariable">PHPINFO</h2>
<?php
phpinfo();
?>