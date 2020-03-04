
<h1 class="page-header">Nuevo Registro</h1>

<ol class="breadcrumb">
  <li><a href="?c=Persona">Clientes</a></li>
  <li class="active"><?php echo $alm->idcliente != null ? $alm->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcliente" value="<?php echo $alm->idcliente; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombres" value="<?php echo $alm->nombres; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellidos" value="<?php echo $alm->apellidos; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>edad</label>
        <input type="text" name="edad" value="<?php echo $alm->edad; ?>" class="form-control" placeholder="Ingrese su edad" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>telefono</label>
        <input type="text" name="telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido|min:7" />
    </div>
    

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <div class="form-group">
        <label>area de trabajo</label>
        <input type="text" name="atrabajo" value="<?php echo $alm->atrabajo; ?>" class="form-control" placeholder="Ingrese su area de trabajo" data-validacion-tipo="requerido|min:8" />
    </div>

    <div class="form-group">
        <label>nacionalidad</label>
        <input type="text" name="nacionalidad" value="<?php echo $alm->nacionalidad; ?>" class="form-control" placeholder="Ingrese su pais de nacimiento" data-validacion-tipo="requerido|min:8" />
    </div>

    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>