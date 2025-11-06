<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST["name"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postalCode = $_POST["postalCode"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $roomType = $_POST["roomType"];
    $nGuess = $_POST["nGuess"];
    $arrival = $_POST["Arrival"];
    $aTime = $_POST["aTime"];
    $choice = $_POST["choice"];
    $requests = $_POST["requests"];

    // Stocker les données dans la session
    $_SESSION['form_data'] = array(
        'name' => $name,
        'sex' => $sex,
        'email' => $email,
        'address' => $address,
        'city' => $city,
        'postalCode' => $postalCode,
        'phone' => $phone,
        'password' => $password,
        'roomType' => $roomType,
        'nGuess' => $nGuess,
        'arrival' => $arrival,
        'aTime' => $aTime,
        'choice' => $choice,
        'requests' => $requests
    );

    // Redirection vers une page de confirmation
    header("Location: index.php");
    exit();
}
?>
