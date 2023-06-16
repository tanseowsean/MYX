<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if(isset($_POST['signin_btn']))
{
    // retrieve email and password
    $email = $_POST['yourEmail'];
    $password = $_POST['yourPassword'];
    $hashed = md5($password);

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if user exists
        if ($db->collection('accounts')->document($email)->snapshot()->exists())
        {
            $accArr = $db->collection('accounts')->document($email)->snapshot()->data();

            // check if password matches
            if ($accArr['userPassword'] == $hashed)
            {
                // check user type and 
                if ($accArr['userType'] == "traveller")
                {
                    //set session variable
                    $_SESSION['travellerUser'] = $email;
                    $_SESSION['username'] = $accArr['userName'];
                    header('Location: traveller-mainmenu.php');
                    exit();
                }
                else
                {
                    // set session variable
                    $_SESSION['personnelUser'] = $email;
                    $_SESSION['username'] = $accArr['userName'];
                    header('Location: personnel-mainmenu.php');
                    exit();
                }
            }
            // password does not match
            else
            {
                // redirect back to index
                header('Location: index.php');
                echo '<script>alert("Incorrect password!")</script>';
                exit();
            }
        }
        // else (user does not exist)
        else
        {
            // redirect back to index
            header('Location: index.php');
            echo '<script>alert("Account does not exist!")</script>';
            exit();
        }
    }
    catch (Exception $exception)
    {
        return $exception->getMessage();
    }
}
else
{
    header('Location: index.php');
    exit();
}
