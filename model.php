<?php
Class Conectar{
    private $server ="localhost";
    private $username="root";
    private $password="";
    private $db="pruebatecnica";
    private $conn;
    /*haciendo conexión a la base de datos.*/
    public function __construct()
    {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);   
    }
    public function insert()
    {
        if (isset($_POST['guardar_sesion'])) {

            if (isset($_POST['nombre']) && isset($_POST['lastname']) && isset($_POST['email'])) {
                if (!empty($_POST['email'])) {
                    $nombre = $_POST['nombre'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    // $cuit = $_POST['cuit'];
                    // $razon_social = $_POST['razon_social'];
                    // $alias = $_POST['alias'];
                    // $cbu = $_POST['cbu'];
                    
                    $sql = "INSERT INTO users (nombre, lastname,email) VALUES ('$nombre','$lastname','$email')";
                    if($sql = $this->conn->query($sql)){
                        // mysqli_insert_id($this->conn);
                        // $sql = "INSERT INTO comercios (cuit, razon_social, alias, cbu ,user_id) VALUES ('$cuit','$lastname','$email','$razon_social','$alias','$cbu','$sql')";
                        echo "<script>alert('datos agregados correctamente');</script>";
                        echo "<script>window.location.href='admin_comercios.php';</script>";
                    }else{
                        echo "<script>alert('Conexión fallida.')</script>";
                        echo "<script>window.location.href='admin_comercios.php';</script>";
                    }
                }else{
                    echo "<script>alert('Por favor, completar los campos vacíos/o necesarios.');</script>";
                }
            }
            echo "se conectó";
        }
        // if(isset($_POST['cuit']) && isset($_POST['razon_social']) && isset($_POST['alias']) &&isset($_POST['cbu'])){
        //     if(!empty($_POST['cbu'])){
        //         $cuit = $_POST['cuit'];
        //         $razon_social = $_POST['razon_social'];
        //         $alias = $_POST['alias'];
        //         $cbu = $_POST['cbu'];

        //         $query ="INSERT INTO users(cuit, razon social, alias, cbu) VALUES ('$cuit','$razon_social','$alias','$cbu')";
        //         if($sql =$this->conn->query($query)){
        //             echo "<script>alert('datos agregados correctamente');</script>";
        //             echo "<script>window.location.href='admin_comercios.php';</script>";
        //         }
        //     }
        // }
    }
}
