<?php
include("konek.php");
if(isset($_POST['masuk'])){
    $username =filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $sql = "INSERT INTO daftar (username, password, email) 
            VALUES (:username, :password,:email)";
    $stmt = $db->prepare($sql);
    $params = array(
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );
    $saved = $stmt->execute($params);
    if($saved) header("Location: login.php");
}
?>

<html>

    <head>
        <title>REGISTRY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        .lol {
            border-style: solid;
            text-align: center;
            margin-top: 10%;
        }
    </style>

    <body>
        <div class="page-wrapper">
            <div class="container">
                <div class="row jstify-content-center">
                    <div class="col-4">

                    </div>
                    <div class="col-4 lol">
                        <form action="" method="POST">
                            <table>
                                <tr>

                                    <img style="width:40%;border-style: double;border-radius: 50%;margin-left: 0%;margin-top: 5%;border-width: 5px;;"
                                        src="daftar.png">

                                    <td>
                                        <h3 style="margin-top: 10%;">~Daftar Otomotif Klassik~</h3><br>
                                        <label for="username">Username</label><br>
                                        <input type="text" id="username" name="username"><br>
                                        <br>
                                        <label for="password">Password</label><br>
                                        <input type="password" id="password" name="password"><br>
                                        <br>
                                        <label for="saya">email</label><br>
                                        <input type="text" id="saya" name="email"><br>
                                        <br>
                                        <input type="submit" name="masuk" value="Daftar">
                                        <br>
                                        <a href="login.php"style=float:right>Kembali</a>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>