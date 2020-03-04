<h1 class="page-header">Clientes</h1>


<div class="well well-sm text-left">
    <a class="btn btn-primary" href="?c=Persona&a=Crudc">Agregar Persona</a>
   
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Nombres</th>
            <th >Apellidos</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th >Correo</th>
            <th >Area de trabajo</th>
            <th >Nacionalidad</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombres; ?></td>
            <td><?php echo $r->apellidos; ?></td>
            <td><?php echo $r->edad; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->email; ?></td>
            <td><?php echo $r->atrabajo; ?></td>
            <td><?php echo $r->nacionalidad; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Persona&a=Crude&idcliente=<?php echo $r->idcliente; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Persona&a=Eliminar&idcliente=<?php echo $r->idcliente; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
