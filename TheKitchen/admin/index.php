<?php
session_start();
$msg_error='';
if(isset($_SESSION['msg']))
{
    $msg_error=$_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/form-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <title>Document</title>
</head>
<body>


    <div class="login-page section">
        <div class="center-align">
            <div class="row">

            <div class="col s12">

                <div class="container">
                    <div class="container">
                        <div class="container">
                            <div class="card horizontal hoverable">

                                <div class="card-stacked">
                                    <form class="card-content" action="login-admin.php" method="post">
                                        <h4 class="header">Admin Login</h4>

                                        <?php

                                            if(!empty($msg_error)){
                                                echo '<div class="row error-msg">
                                                            <div class="col">
                                                                <b>'.$msg_error.'</b>
                                                            </div>
                                                        </div>';

                                            }
                                        ?>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span for="email"><b>Email</b></span>
                                                <input name="email" id="email" type="email" class="validate">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                            <span for="email"><b>Password</b></span>
                                                <input id="password" name="password" type="password" class="validate">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s12">
                                                <button type="submit"  class="waves-effect waves-light btn"><b>Log In</b></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>





            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
</body>
</html>