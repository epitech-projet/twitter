<?php 
require_once '../model/includes/db_start.php';
require_once '../model/classes/Users.php';
require_once 'registerVerify.php';

$insert = new Users($db);
$usersDate = new registerVerify(); 
$errors = array();

foreach ($_POST as $key => $value) {

    if (empty($value)){
        $errors[$key] = " : doit être rempli"; 
    }
    if ($key == 'email') {
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = ": n'est pas valide";
        }
    }
    if($key == 'display_name'){
        if (!ctype_alpha($value)){
            $errors[$key] = " : doit être en alphabétique";
        }
    }
    if ($key == 'date_birth'){
        if($usersDate->verify_age($value) == false){
            $errors["Inscription refusé"] = ": il est interdit pour les - 13 ans";
        }
    }
    if($_POST['pass'] != $_POST['confirm_pass']){
        $errors['Mot de passe'] = ": est mal retapé ";
    }
}

if(count($errors) == 0) {
    $insert->register();
    $errors['Inscription'] = ": Réussie"; 
    
}
echo json_encode($errors);

//si c vide ou plein despaces || trim($value) == ""