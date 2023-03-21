
<?php 

// Google reCAPTCHA API key configuration 
$siteKey     = '6LdEjkwkAAAAAKq7RfncyxI0FF5wAGgSWlY_dV8i'; 
$secretKey     = '6LdEjkwkAAAAACOZxnB8WFImPdrtFz-QsDsnYWke';   

// Email configuration 
$toEmail = 'alicerichardeau@outlook.com'; 
$fromName = 'Hijamashifa'; 
$formEmail = 'alicerichardeau@outlook.com'; 

$postData = $statusMsg = $valErr = ''; 
$status = 'error'; 
 
// If the form is submitted 
if(isset($_POST['submit'])){ 
    // Get the submitted form data 
    $postData = $_POST; 
    $name = trim($_POST['name']);
    $firstname = trim($_POST['firstname']); 
    $email = trim($_POST['email']); 
    $first_date = trim($_POST['first_date']);
    $second_date = trim($_POST['second_date']);
    $third_date = trim($_POST['third_date']);
    $fourth_date = trim($_POST['fourth_date']);
    $fifth_date = trim($_POST['fifth_date']); 
     
    // Validate form fields 
    if(empty($name)) { 
         $valErr .= 'Veuillez entrer votre nom.<br/>'; 
    } 
    if(empty($firstname)) { 
        $valErr .= 'Veuillez entrer votre prénom.<br/>'; 
   } 
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Votre email est invalide.<br/>'; 
    } 
    if(empty($first_date || empty($second_date) || empty($fourth_date) || empty($third_date) || empty($fifth_date))) { 
        $valErr .= 'Veuillez sélectionner un atelier.<br/>'; 
    } 
     
    if(empty($valErr)){ 
         // Validate reCAPTCHA box 
         if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) { 
 
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success) { 
 
                // Send email notification to the site admin 
                $subject = 'Nouvelle inscription atelier Hijama'; 
                $htmlContent = " 
                    <h2>Détail du message :</h2> 
                    <p><b>Nom: </b>".$name."</p> 
                    <p><b>Email : </b>".$email."</p> 
                    <p><b>Atelier : </b>".$first_date." - ".$second_date." - ".$third_date." - ".$fourth_date." - ".$fifth_date."</p>"; 
                 
                // Always set content-type when sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                // More headers 
                $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
                 
                // Send email 
                @mail($toEmail, $subject, $htmlContent, $headers); 
                 
                $status = 'success'; 
                $statusMsg = '<p class="msg">Merci pour votre message, à très vite&nbsp;!</p>'; 
                $postData = ''; 
            }else{ 
                $statusMsg = '<p class="msg">Echec de la vérification, veuillez réessayer !</p>'; 
            } 
        }else{ 
            $statusMsg = '<p class="msg">Veuillez valider le reCAPTCHA</p>'; 
        } 
    }
    else{ 
        $statusMsg = '<p class="msg">Veuillez remplir tous les champs demandés :</p>'.trim($valErr, '<br/>'); 
    } 
}

?>
