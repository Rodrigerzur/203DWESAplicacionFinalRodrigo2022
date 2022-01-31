<article class="titulopagina">
    <h2>Inicio Privado</h2>
</article>
<div class="form">
    <h1 class="usuario"><?php echo "Bienvenid@ " . $sDescUsuario ?></h1>
    <h3 class="conexiones"><?php echo "Esta es tu conexion numero " . $iNumConexiones  ?></h3>
    <h3 class="conexiones"><?php 
        if (!empty($sFechaHoraUltimaConexionAnterior)) { 
            echo "La ultima vez que te conectaste fue el " . date('d/m/Y H:i:s', $sFechaHoraUltimaConexionAnterior);     
        }?>
    </h3>
</div>
<form class="form" method="post">
    <input type="submit" value="CERRAR SESION" name="cerrarsesion" class="aceptar"/>
    <input type="submit" value="EDITAR PERFIL" name="editarperfil" class="aceptar"/>
    <input type="submit" value="MTO DEPARTAMENTOS" name="mtodepartamentos" class="aceptar"/>
    <input type="submit" value="DETALLES" name="detalle" class="aceptar"/>
</form>