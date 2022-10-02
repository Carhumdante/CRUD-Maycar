<?php

$id = $_POST['id'];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'F5RVQ5U14S26IXZ16D9IP1V99GZ49WYU@localhost/prestashop/api/customers/'.$id.'?output_format=JSON',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Cookie: PrestaShop-b495097bf03a2b246a17e22e09a4dd34=def502009cb1a69d9f205ac414b38df41df1deaf3da3f044d3d29d8bc0c0c939bed3ca64ec2daf627390a6be74b883d8f5bebeb2b47725c7fd7a7bededd86c6e10fbeba933741566c3e3a0ef23e3980599ba3af065acd4d77059cf1d918d727dbed7e167dee41cad2c0f224a6f1aef2f53311bf89fd7149d041f902a2e290cf2a2c0a9981aeb0c67f0da54817b2f4086428a1f0218bf2c588105fba6bc99b0d42d70485251671d8f0e0ef0049a20acc0f1cfc5762e271447c59131bd341d12a4ace19a3e9bb259c1459d102b926c790e83489bad5e7f74e097'
    ),
));

$response = curl_exec($curl);

curl_close($curl);


$result = json_decode($response);

foreach ($result as $list) {
    $id  = $list-> id;
    $lastname = $list-> lastname;
    $firstname = $list-> firstname;
    $email = $list-> email;
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Maycar/Client</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2> <b>Clientes PUT</b></h2>
                        </div>
                    </div>
                </div>
                <form action="./clientesputcurlget.php" method="POST">
                    <div class="form-group" >
                        <label for="id">#</label>
                        <input type="text" class="form-control" name="id" readonly value = <?php echo $id; ?>>
                    </div>
                    <div class="form-group" >
                        <label for="firstname">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el Nombre" value = <?php echo $firstname; ?>>
                    </div>
                    <div class="form-group" >
                        <label for="lastname">Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingrese el Apellido" value = <?php echo $lastname; ?>>
                    </div>
                    <div class="form-group" >
                        <label for="firstname">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingrese el Email" value = <?php echo $email; ?>>
                    </div> 
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-4">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1190033123418031" crossorigin="anonymous"></script>
                <!-- live_demo_page -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1190033123418031" data-ad-slot="5335471635" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</html>

