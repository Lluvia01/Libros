<?php

include 'conexion.php';

class User extends DB{

    
    public function userExists($user, $pass){
    
        $pass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE control = :user AND Password_Usua = :pass');
    
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
        $row=$query->fetch(PDO::FETCH_NUM);
        if($row == true){
                  $nivel = $row[0];
                  $matri = $row[1];
                  
        $_SESSION['Nivel'] = $nivel; 
        $_SESSION['matricula']=$matri;

          switch($_SESSION['Nivel']){
              case 1:
                  header('location: vistas/pricipal.php');
                  break;

                  default:
                  break;
          }       

            return true;
        }
    }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE control = :user');
        $query->execute(['user' => $user]);


        if($query->rowCount()){
        $row=$query->fetch(PDO::FETCH_NUM);
        if($row == true){
                  $nivel = $row[0];
                  
        $_SESSION['Nivel'] = $nivel; 

          switch($_SESSION['Nivel']){
              case 1:
                  header('location: vistas/principal.php');
                  break;
                  default:
          }       

            return true;
        }
    }
     
     }
}
?>
