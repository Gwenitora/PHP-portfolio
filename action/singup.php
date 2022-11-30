<?php 

require_once "config.php";

$dataBinded=array(
    ':name'   => $_POST['name'],
    ':password'=> "€df:gù*:dcv65zefr53é#24.'".$_POST['password'],
	':email'   => $_POST['email']
);

$dataBindedName=array(
    ':name'   => $_POST['name']
);

$dataBindedEmail = array(
	':email'   => $_POST['email']
);

$sqlName = "SELECT name FROM users WHERE name = :name";

$preName = $pdo->prepare($sqlName);
$preName->execute($dataBindedName);
$dataName = $preName->fetchAll(PDO::FETCH_ASSOC);

$sqlEmail = "SELECT email FROM users WHERE email = :email";

$preEmail = $pdo->prepare($sqlEmail);
$preEmail->execute($dataBindedEmail);
$dataEmail = $preEmail->fetchAll(PDO::FETCH_ASSOC);

/* Correction erreur dans modal sign up */
function checkPassword($pwd,$email, $name, $dataName, $dataEmail) {

    if (strlen($pwd) < 8) {
		$_SESSION['toast'][] =[
			"text" => "Mot de passe trop court",
			"classes" => $_SESSION["toastConfig"]["redToast"],
		];
		return false;
    }

	if (strlen($email) == 0) {
		$_SESSION['toast'][] =[
			"text" => "Email trop",
			"classes" => $_SESSION["toastConfig"]["redToast"],
		];
		return false;
    }

	if (strlen($name) == 0) {
		$_SESSION['toast'][] =[
			"text" => "Nom d'utilisateur trop court",
			"classes" => $_SESSION["toastConfig"]["redToast"],
		];
		return false;
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
		$_SESSION['toast'][] =[
			"text" => "Le mot de passe doit contenir au moins un chiffre",
			"classes" => $_SESSION["toastConfig"]["redToast"],
		];
		return false;
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
		$_SESSION['toast'][] =[
			"text" => "Le mot de passe doit contenir au moins une lettre",
			"classes" => $_SESSION["toastConfig"]["redToast"],
		];
		return false;
    } 

	if (!count($dataName) == 0 ) {
		$_SESSION['toast'][] =[
			"text" => "Ce nom d'utilisateur est déjà utilisé",
			"classes" => $_SESSION["toastConfig"]["redToast"],
		];
		return false;
    } 
	
	if (!count($dataEmail) == 0) {
		$_SESSION['toast'][] =[
			"text" => "Cet email est déjà utilisé",
			"classes" => $_SESSION["toastConfig"]["redToast"],
		];
		return false;
	}

	return true;
}


if (!checkPassword($_POST['password'], $_POST['email'], $_POST['name'], $dataName, $dataEmail)) {
	$_SESSION['modal'] = "signUp";
}else{
	$sql = "INSERT INTO users(name, password, email) VALUES(:name, SHA1(:password), :email)";
	$pre = $pdo->prepare($sql);
	$pre->execute($dataBinded);
	$_SESSION['user'] = $pre->fetch(PDO::FETCH_ASSOC);
	$_SESSION['toast'][] = [
        'text' => 'Compte de  '.$_SESSION['user']['name']. " créé" ,
        'classes' => $_SESSION["toastConfig"]["greenToast"]
    ];
}



require_once "go-back.php";
?>
