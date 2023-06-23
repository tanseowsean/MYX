<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if (isset($_POST['register_btn'])) {
    // retrieve input
    $accEmail = $_POST['accEmail'];
    $accUsername = $_POST['accUsername'];
    $accPassword = md5($_POST['accPassword']);

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if user exists
        if ($db->collection('accounts')->document($accEmail)->snapshot()->exists())
        {
            // user already exist, fail to register
            // redirect back to index page
            echo '<script>
            alert("Fail to sign up! Account already exists.");
            window.location.href = "index.php";
            </script>';
            exit();
        }
        // else (user does not exist)
        else
        {
            // create user account
            $data = [
                'userName' => $accUsername,
                'userPassword' => $accPassword,
                'userType' => 'traveller'
            ];

            $db->collection('accounts')->document($accEmail)->set($data);

            // redirect back to index page
            echo '<script>
            alert("Account successfully created! Please sign in.");
            window.location.href = "index.php";
            </script>';
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
