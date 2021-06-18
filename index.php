<?php  
include_once 'includes/usuario.php';
include_once 'includes/Usuario_Sesion.php';
//include_once 'includes/usuarioComparation.php';

$userSession = new UserSession();
$user = new User();
 //$name = new userComparation();

 if(isset($_SESSION['user'])){
    echo "YA HAY UNA SESION INICIADA";

     $user->setUser($userSession->getCurrentUser()); 

}else if(isset($_POST['username'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];   

    $user = new User();
    $userSession = new UserSession();

    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $user->setUser($userForm);
        $userSession->setCurrentUser($userForm); 
        //$name->userComparation($userSession->setCurrentUser());
        }

        
    else{
       $errorLogin = "Nombre de usuario y/o contraseña incorrecta";

        include_once 'Login.php';
    }
}else{
    //echo "login";
    include_once 'Login.php';
}
?>