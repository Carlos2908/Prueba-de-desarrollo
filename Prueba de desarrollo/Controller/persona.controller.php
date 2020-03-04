<?php
require_once 'Model/persona.php';

class PersonaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Persona();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/persona.php';
        require_once 'View/footer.php';
    }
    
    public function Crudc(){
        $alm = new Persona();
        
        if(isset($_REQUEST['idcliente'])){
            $alm = $this->model->getting($_REQUEST['idcliente']);
        }
        
        require_once 'View/header.php';
        require_once 'View/persona-crear.php';
        require_once 'View/footer.php';
    }

    public function Crude(){
        $alm = new Persona();
        
        if(isset($_REQUEST['idcliente'])){
            $alm = $this->model->getting($_REQUEST['idcliente']);
        }
        
        require_once 'View/header.php';
        require_once 'View/persona-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Persona();
        
        $alm->idcliente = $_REQUEST['idcliente'];
        $alm->nombres = $_REQUEST['Nombres'];
        $alm->apellidos = $_REQUEST['Apellidos'];
        $alm->edad = $_REQUEST['edad'];
        $alm->telefono = $_REQUEST['telefono'];
         $alm->email = $_REQUEST['correo'];
        $alm->atrabajo = $_REQUEST['atrabajo'];
        $alm->nacionalidad = $_REQUEST['nacionalidad'];
       

        $alm->idcliente > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);
           
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcliente']);
        header('Location: index.php');
    }
}
