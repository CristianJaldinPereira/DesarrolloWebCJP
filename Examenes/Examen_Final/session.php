<?php
include 'conexion.php';

session_start();

class Usuario
{
    public $id;
    public $usuario;
    public $password;
    public $nombrecompleto;
    public $cu;
    public $idcarrera;
    public $nivel;


    public function __construct(
        $id,
        $usuario,
        $password,
        $nombrecompleto,
        $cu,
        $idcarrera,
        $nivel
    ) {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->nombrecompleto = $nombrecompleto;
        $this->cu = $cu;
        $this->idcarrera = $idcarrera;
        $this->nivel = $nivel;
    }

    public function obtenerDatos()
    {
        return "Nombre: {$this->usuario}, Email: {$this->nombrecompleto}";
    }
}
$name = $_POST["username"];
$password = sha1($_POST["password"]);

$sql = "SELECT id,usuario,nombrecompleto,password,cu,idcarrera,nivel from usuarios where usuario ='$name' AND password = '$password'";

$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {

    $fila = $resultado->fetch_assoc();
    $usuario = new Usuario($fila['id'], $fila['usuario'], $fila['password'], $fila['nombrecompleto'], $fila['cu'], $fila['idcarrera'], $fila['nivel']);
    $_SESSION["usuario"] =  $usuario;
?>
    <h1>Usuario autenticado correctamente <?php echo $usuario->nombrecompleto ?></h1>
    <?php
    ?>
    <meta http-equiv="refresh" content="3; url=maqueta.html" />
<?php
} else { ?>
    <div>
        Usuario o contraseña incorrectos
        <meta http-equiv="refresh" content="3; url=maqueta.html" />s
    </div>
<?php }
?>
