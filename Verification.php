//Usage
//Open the file where you want to perform email verification, and include the necessary Firebase PHP SDK classes:

<?php
use Kreait\Firebase\Auth;
//Initialize the Firebase Auth instance:

// Assuming you have already initialized the Firebase Auth instance
$auth = new Auth();
Generate an email verification link:

// Provide the user's email
$link = $auth->getEmailVerificationLink($email);

//Send the email verification link to the user
// Send the email verification link
$auth->sendEmailVerificationLink($email);
?>
