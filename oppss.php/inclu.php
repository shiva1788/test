<?php
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate form inputs
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = sanitizeInput($_POST['name'] ?? '');
    $password = sanitizeInput($_POST['password']?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    // $age = sanitizeInput($_POST['age'] ?? '');

    // Name validation
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errors['name'] = "Invalid Format";
    }

    
  
    // if (empty($pwd)) {
    //     $errors['password'] = "password is required.";
    // } elseif (!preg_match('@[0-9]@', $pwd)) {
    //     $errors['password'] = "Invalid Format";
    // }

   
//     if (filter_var($phone, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $pattern)))) {
//         return true;
//     } else {
//         return false;
//     }
// }

    // Regex for validating password
   

    // Validate password strength
    // $uppercase = preg_match('@[A-Z]@', $password);
    // $lowercase = preg_match('@[a-z]@', $password);
    // $number    = preg_match('@[0-9]@', $password);
    // $specialChars = preg_match('@[^\w]@', $password);
    
    // if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    //     echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    // }else{
    //     echo 'Strong password.';
    // }
    
  
    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }





    if (empty($phone)) {
        $errors['phone'] = "phone is required.";
    } elseif (!filter_var($phone, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0, "max_range" => 10]])) {
        $errors['phone'] = "Invalid format.";
    }
  

  
    if (empty($errors)) {     
        echo "Form submitted successfully!";
    }
}
?>