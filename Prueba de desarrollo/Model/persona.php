<?php
class Persona
{
	private $pdo;
    
    public $idcliente;
    public $nombres;
    public $apellidos;
    public $edad;
    public $telefono;
    public $email;
    public $atrabajo;
    public $nacionalidad;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM persona");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM persona WHERE idcliente = ?");
			          

			$stm->execute(array($idcliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM persona WHERE idcliente = ?");			          

			$stm->execute(array($idcliente));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE persona SET 
						edad 			= ?,
                        telefono        = ?,
                        email 			= ?,
						atrabajo        = ?, 
						nacionalidad    = ?
				    WHERE idcliente = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->edad,
                        $data->telefono,
                        $data->email,
                        $data->atrabajo,
                        $data->nacionalidad,
                        $data->idcliente
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `persona` (nombres,apellidos,edad,telefono,email,atrabajo,nacionalidad) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombres,
                    $data->apellidos, 
                    $data->edad,
                    $data->telefono,
                    $data->email,
                    $data->atrabajo,
                    $data->nacionalidad                    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
