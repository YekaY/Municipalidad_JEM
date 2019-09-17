<?php
class Acceso
{
    public function Login()
    {
        try {


            if (!empty($_POST['user']) and !empty($_POST['pass'])) {
                $db = new Conexion();
                $this->user = $db->real_escape_string($_POST['user']);
                $this->pass = $db->real_escape_string($_POST['pass']);


                //$sql = $db->query("SELECT * FROM user WHERE USER ='$this->user' and pass='$this->pass'");
                $sql = $db->query("SELECT * FROM usuario WHERE nick ='$this->user'and password='$this->pass'");

                if ($db->rows($sql) > 0) {

                    $datos = $db->rrecorrer($sql);

                    $_SESSION['nombre'] = $datos['nombre'];
                    $_SESSION['correo'] = $datos['correo'];
                    $_SESSION['nick'] = $datos['nick'];



                    echo 1;
                } else {
                    echo 25;
                }

                $db->liberar($sql);
                $db->close();
            } else {
                throw new Exception('Error: Datos vacios..');
            }
        } catch (Exceptionm $login) {
            echo $login->getMessage();
        }
    }
    public function Recuperar()
    { }
    public function U_juego()
    {
        try {
            if (!empty($_POST['jugador']) and !empty($_POST['nivel']) and !empty($_POST['sNivel'])) {

                $db = new Conexion();
                $fecha_actual = date('Y-m-d');
                $this->jugador = $db->real_escape_string($_POST['jugador']);
                $this->nivel = $db->real_escape_string($_POST['nivel']);
                $this->sNivel = $db->real_escape_string($_POST['sNivel']);
                $this->fecha = $db->real_escape_string($fecha_actual);



                $sql = $db->query("UPDATE game SET nivel=$this->nivel ,sNivel=$this->sNivel ,fin='$this->fecha' WHERE jugador=$this->jugador");
                echo 1;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function Registrar()
    {

        try {
            //require('core/models/class.Conexion.php');
            //INSERT INTO `usuario` (`id`, `nombre`, `correo`, `nick`, `password`) VALUES (NULL, 'mario', 'mario@mario.com', 'mario', 'mario123');
            //SELECT * FROM usuario WHERE nick='mario' or correo='mario@mario.com'
            if (!empty($_POST['nombre']) and !empty($_POST['correo']) and !empty($_POST['nick']) and !empty($_POST['password'])) {
                $db = new Conexion();

                $this->nombre = $db->real_escape_string($_POST['nombre']);
                $this->correo = $db->real_escape_string($_POST['correo']);
                $this->nick = $db->real_escape_string($_POST['nick']);
                $this->password = $db->real_escape_string($_POST['password']);
                $this->fecha = $db->real_escape_string(date('Y-m-d'));
                //$sql = $db->query("SELECT * FROM user WHERE USER ='$this->user' and pass='$this->pass'");
                $sql  = $db->query("SELECT * FROM usuario  WHERE nick ='$this->nick'or correo='$this->correo'");

                if ($db->rows($sql) == 0) {
                    $sql2 = $db->query("INSERT INTO usuario(nombre, correo, nick, password,fecha) VALUES ('$this->nombre','$this->correo','$this->nick','$this->password','$this->fecha')");
                    // $sql3 = $db->query("SELECT MAX(id) AS id FROM usuario");
                    // $id = $db->rrecorrer($sql3);
                    // $sql4 = $db->query("INSERT INTO game (jugador, inicio, fin, nivel, sNivel) VALUES ($id[0],'$this->fecha','$this->fecha',0,0)");


                    echo 1;
                    // $db->liberar($sql2);
                } else {
                    $datos = $db->rrecorrer($sql);
                    if (strtolower($this->nick) == strtolower($datos['nick']) && strtolower($this->correo) == strtolower($datos['correo'])) {
                        echo  2;
                    }
                    if (strtolower($this->nick) == strtolower($datos['nick'])) {
                        echo 3;
                    }
                }


                //$db->liberar($sql);
                $db->close();
            } else {
                throw new Exception('Error: Datos vacios..');
            }
        } catch (Exceptionm $login) {
            echo $login->getMessage();
        }
    }
    public function DeleteUser()
    {

        try {

            if (!empty($_POST['id'])) {
                $db = new Conexion();

                $this->id = $db->real_escape_string($_POST['id']);

                $sql  = $db->query("SELECT * FROM usuario  WHERE id =$this->id");

                if ($db->rows($sql) == 1) {
                    $sql2 = $db->query("DELETE FROM usuario WHERE id =$this->id");

                    echo 1;
                } else {

                    echo 2;
                }
                $db->close();
            } else {
                throw new Exception('Error: Datos vacios..');
            }
        } catch (Exceptionm $login) {
            echo $login->getMessage();
        }
    }
    public function Edit_User()
    {

        try {


            if (!empty($_POST['id']) and !empty($_POST['nombre']) and !empty($_POST['correo']) and !empty($_POST['usuario'])) {
                $db = new Conexion();

                $this->id = $db->real_escape_string($_POST['id']);
                $this->nombre = $db->real_escape_string($_POST['nombre']);
                $this->correo = $db->real_escape_string($_POST['correo']);
                $this->usuario = $db->real_escape_string($_POST['usuario']);
                $this->password = $db->real_escape_string($_POST['password']);

                $sql  = $db->query("SELECT * FROM usuario  WHERE id =$this->id");

                if ($_POST['password'] != "" and $db->rows($sql) == 1) {
                    //UPDATE usuario SET nombre='',correo='',nick='',password='' WHERE id=1
                    $sql2 = $db->query("UPDATE usuario SET nombre='$this->nombre',correo='$this->correo',nick='$this->usuario',password='$this->password' WHERE id=$this->id");
                    echo 1;
                }
                if ($_POST['password'] == "" and $db->rows($sql) == 1) {
                    $sql2 = $db->query("UPDATE usuario SET nombre='$this->nombre',correo='$this->correo',nick='$this->usuario' WHERE id=$this->id");
                    echo 1;
                }

                $db->close();
            } else {
                throw new Exception('Error: Datos vacios..');
            }
        } catch (Exceptionm $login) {
            echo $login->getMessage();
        }
    }
    public function Edit_Directorio()
    {

        try {


            if (!empty($_POST['id']) and !empty($_POST['nombre']) and !empty($_POST['tipo']) and !empty($_POST['telefono'])) {
                $db = new Conexion();

                $this->id = $db->real_escape_string($_POST['id']);
                $this->nombre = $db->real_escape_string($_POST['nombre']);
                $this->tipo = $db->real_escape_string($_POST['tipo']);
                $this->descripcion = $db->real_escape_string($_POST['descripcion']);
                $this->direccion = $db->real_escape_string($_POST['direccion']);
                $this->telefono = $db->real_escape_string($_POST['telefono']);
                $this->pagina = $db->real_escape_string($_POST['pagina']);
                $this->logo = $db->real_escape_string($_POST['logo']);


                $sql  = $db->query("SELECT * FROM directorio  WHERE id =$this->id");

                if ($db->rows($sql) == 1) {
                    //UPDATE directorio SET tipo='',nombre='',descripcion='',direccion='',telefono='',pagina='',imagen='' WHERE 1
                    $sql2 = $db->query("UPDATE directorio SET tipo='$this->tipo',nombre='$this->nombre',descripcion='$this->descripcion',direccion='$this->direccion',telefono='$this->telefono',pagina='$this->pagina',imagen='$this->logo' WHERE id=$this->id");
                    echo 1;
                } else {

                    echo 2;
                }

                $db->close();
            } else {
                echo 'Error: Datos vacios..';
            }
        } catch (Exceptionm $login) {
            echo $login->getMessage();
        }
    }
    public function Registrar_Directorio()
    {

        try {
            //require('core/models/class.Conexion.php');
            //INSERT INTO `usuario` (`id`, `nombre`, `correo`, `nick`, `password`) VALUES (NULL, 'mario', 'mario@mario.com', 'mario', 'mario123');
            //SELECT * FROM usuario WHERE nick='mario' or correo='mario@mario.com'
            if (!empty($_POST['nombre']) and !empty($_POST['tipo']) and !empty($_POST['descripcion']) and !empty($_POST['direccion']) and !empty($_POST['telefono']) and !empty($_POST['pagina']) and !empty($_POST['logo'])) {
                $db = new Conexion();


                $this->nombre = $db->real_escape_string($_POST['nombre']);
                $this->tipo = $db->real_escape_string($_POST['tipo']);
                $this->descripcion = $db->real_escape_string($_POST['descripcion']);
                $this->direccion = $db->real_escape_string($_POST['direccion']);
                $this->telefono = $db->real_escape_string($_POST['telefono']);
                $this->pagina = $db->real_escape_string($_POST['pagina']);
                $this->logo = $db->real_escape_string($_POST['logo']);
                //$sql = $db->query("SELECT * FROM user WHERE USER ='$this->user' and pass='$this->pass'");
                $sql  = $db->query("SELECT * FROM directorio  WHERE nombre ='$this->nombre'or telefono='$this->telefono'");

                if ($db->rows($sql) == 0) {
                    $sql2 = $db->query("INSERT INTO directorio(tipo, nombre, descripcion, direccion, telefono, pagina, imagen)  VALUES ('$this->tipo','$this->nombre','$this->descripcion','$this->direccion','$this->telefono','$this->pagina','$this->logo')");
                    echo 1;
                } else {
                    $datos = $db->rrecorrer($sql);
                    if (strtolower($this->nombre) == strtolower($datos['nombre'])) {
                        echo  "La empresa '$this->nombre' ya existe en el registro.";
                    }
                }



                $db->close();
            } else {
                echo 'Error: Datos vacios..';
            }
        } catch (Exceptionm $login) {
            echo $login->getMessage();
        }
    }

    public function Registrar_Actividad()
    {

        try {
            
            if (!empty($_POST['titulo']) and !empty($_POST['fecha']) and !empty($_POST['tema1']) and !empty($_POST['tema2']) and !empty($_POST['tema3']) and !empty($_POST['logo'])) {
                $db = new Conexion();


                $this->titulo = $db->real_escape_string($_POST['titulo']);
                $this->fecha = $db->real_escape_string($_POST['fecha']);
                $this->tema1 = $db->real_escape_string($_POST['tema1']);
                $this->tema2 = $db->real_escape_string($_POST['tema2']);
                $this->tema3 = $db->real_escape_string($_POST['tema3']);
                $this->tema4 = $db->real_escape_string($_POST['tema4']);
                $this->tema5 = $db->real_escape_string($_POST['tema5']);
                $this->tema6 = $db->real_escape_string($_POST['tema6']);
                $this->logo = $db->real_escape_string($_POST['logo']);
                
                $sql  = $db->query("SELECT * FROM actividad WHERE titulo ='$this->titulo'");

                if ($db->rows($sql) == 0) {
                    $sql2 = $db->query("INSERT INTO actividad(titulo, fecha, tema1, tema2, tema3, tema4, tema5, tema6, foto) VALUES ('$this->titulo','$this->fecha','$this->tema1','$this->tema2','$this->tema3','$this->tema4','$this->tema5','$this->tema6','$this->logo')");
                    echo 1;
                } else {
                    $datos = $db->rrecorrer($sql);
                    if (strtolower($this->titulo) == strtolower($datos['titulo'])) {
                        echo  "El evento '$this->titulo' ya existe en el registro.";
                    }
                }



                $db->close();
            } else {
                echo 'Error: Datos vacios..';
            }
        } catch (Exceptionm $login) {
            echo $login->getMessage();
        }
    }
}
