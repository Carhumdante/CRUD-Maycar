<?php
$id = $_POST['id'];
$firstname = $_POST['nombre'];
$lastname = $_POST['apellido'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'PPY3PFCXSNK6LNJZ7GRQIRXEWYYMJCPC@10.0.0.199/workgroup2/presta/api/employees/'.$id.'?output_format=JSON',
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


$GET = json_decode($response);

foreach ($GET as $employee) {
    $id_lang  = $employee-> id_lang;
    $last_passwd_gen = $employee-> last_passwd_gen;
    $stats_date_from = $employee-> stats_date_from;
    $stats_date_to = $employee-> stats_date_to;
    $active = $employee-> active;
    $id_profile = $employee-> id_profile;
    $bo_color = $employee-> bo_color;
    $default_tab = $employee-> default_tab;
    $bo_theme = $employee-> bo_theme;
    $bo_css = $employee-> bo_css;
    $bo_width = $employee-> bo_width;
    $bo_menu = $employee-> bo_menu;
    $stats_compare_option = $employee-> stats_compare_option;
    $preselect_date_range = $employee-> preselect_date_range;
    $id_last_order = $employee-> id_last_order;
    $id_last_customer_message = $employee-> id_last_customer_message;
    $id_last_customer = $employee-> id_last_customer;
    $reset_password_token = $employee-> reset_password_token;
    $reset_password_validity = $employee-> reset_password_validity;
    $has_enabled_gravatar = $employee-> has_enabled_gravatar;
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'PPY3PFCXSNK6LNJZ7GRQIRXEWYYMJCPC@10.0.0.199/workgroup2/presta/api/employees/'.$id.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
<employee>
	<id><![CDATA['.$id.']]></id>
	<id_lang><![CDATA['.$id_lang.']]></id_lang>
	<last_passwd_gen><![CDATA['.$last_passwd_gen.']]></last_passwd_gen>
	<stats_date_from><![CDATA['.$stats_date_from.']]></stats_date_from>
	<stats_date_to><![CDATA['.$stats_date_to.']]></stats_date_to>
	<passwd><![CDATA['.$passwd.']]></passwd>
	<lastname><![CDATA['.$lastname.']]></lastname>
	<firstname><![CDATA['.$firstname.']]></firstname>
	<email><![CDATA['.$email.']]></email>
	<active><![CDATA['.$active.']]></active>
	<id_profile><![CDATA['.$id_profile.']]></id_profile>
	<bo_color><![CDATA['.$bo_color.']]></bo_color>
	<default_tab><![CDATA['.$default_tab.']]></default_tab>
	<bo_theme><![CDATA['.$bo_theme.']]></bo_theme>
	<bo_css><![CDATA['.$bo_css.']]></bo_css>
	<bo_width><![CDATA['.$bo_width.']]></bo_width>
	<bo_menu><![CDATA['.$bo_menu.']]></bo_menu>
	<stats_compare_option><![CDATA['.$stats_compare_option.']]></stats_compare_option>
	<preselect_date_range><![CDATA['.$preselect_date_range.']]></preselect_date_range>
	<id_last_order><![CDATA['.$id_last_order.']]></id_last_order>
	<id_last_customer_message><![CDATA['.$id_last_customer_message.']]></id_last_customer_message>
	<id_last_customer><![CDATA['.$id_last_customer.']]></id_last_customer>
	<reset_password_token><![CDATA['.$reset_password_token.']]></reset_password_token>
	<reset_password_validity><![CDATA['.$reset_password_validity.']]></reset_password_validity>
	<has_enabled_gravatar><![CDATA['.$has_enabled_gravatar.']]></has_enabled_gravatar>
</employee>
</prestashop>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/xml',
    'Cookie: PrestaShop-b495097bf03a2b246a17e22e09a4dd34=def502009cb1a69d9f205ac414b38df41df1deaf3da3f044d3d29d8bc0c0c939bed3ca64ec2daf627390a6be74b883d8f5bebeb2b47725c7fd7a7bededd86c6e10fbeba933741566c3e3a0ef23e3980599ba3af065acd4d77059cf1d918d727dbed7e167dee41cad2c0f224a6f1aef2f53311bf89fd7149d041f902a2e290cf2a2c0a9981aeb0c67f0da54817b2f4086428a1f0218bf2c588105fba6bc99b0d42d70485251671d8f0e0ef0049a20acc0f1cfc5762e271447c59131bd341d12a4ace19a3e9bb259c1459d102b926c790e83489bad5e7f74e097'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'PPY3PFCXSNK6LNJZ7GRQIRXEWYYMJCPC@10.0.0.199/workgroup2/presta/api/employees/?output_format=JSON&display=%5Bid,id_lang,firstname,lastname,email,id_profile%5D',
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


$GET = json_decode($response);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Maycar/Employees</title>
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
                            <h2> <b>Employees GET</b></h2>
                        </div>
                    </div>
                </div>
                <form action="/crud-maycar" method="POST" id="myform">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Id Lang</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Id Profile</th>
                            </tr>
                        </thead>
                        <?php 
                            for ($i = 0; $i < count((array)$GET,1)-1; $i++) {
                                foreach ($GET as $employee) {
                                    echo "<tr>";
                                    echo "<td>" . $employee[$i]->id . "</td>";
                                    echo "<td>" . $employee[$i]->id_lang . "</td>";
                                    echo "<td>" . $employee[$i]->firstname . "</td>";
                                    echo "<td>" . $employee[$i]->lastname . "</td>";
                                    echo "<td>" . $employee[$i]->email . "</td>";
                                    echo "<td>" . $employee[$i]->id_profile . "</td>";
                                    echo "</tr>";
                                }
                            } 
                        ?>
                    </table>
                    <button type="submit" class="btn btn-primary">Inicio</button>
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