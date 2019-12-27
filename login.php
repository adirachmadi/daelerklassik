<?php
include("konek.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM daftar WHERE username=:username";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
       
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        header("Location: index.php");

    }
}
?>
<html>

<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    .bisa {
        text-align: center;
        border-style: solid;
        margin-top: 10%;
    }
</style>

<body>
    <div class="page-wrapper">
        <div class="container">
            <div class="row jstify-content-center">
                <div class="col-4">

                </div>
                <div class="col-4 bisa">
                    <form action="" method="POST">
                        <table>
                            <tr>

                                <img style="width:40%;border-style: double;border-radius: 50%;margin-left: 0%;margin-top: 5%;border-width: 5px;;"
                                    src="1.png">

                                <td>
                                    <h3 style="margin-top: 10%;">~Login Admin OK~</h3><br>
                                    <label for="username">Username</label><br>
                                    <input type="text" id="username" name="username"><br>
                                    <br>
                                    <label for="password">Password</label><br>
                                    <input type="password" id="password" name="password"><br>
                                    <br>
                                    <input name="login" type="submit" value="masuk">
                                    <br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="registry.php">Daftar</a>
                                </td>
                                <td>
                                    <a href="beranda.php">Kembali</a>
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
