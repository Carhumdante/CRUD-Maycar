<?php
$id = $_POST['id'];
$firstname = $_POST['nombre'];
$lastname = $_POST['apellido'];
$email = $_POST['email'];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'PPY3PFCXSNK6LNJZ7GRQIRXEWYYMJCPC@10.0.0.199/workgroup2/presta/api/customers/'.$id.'?output_format=JSON',
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


$list = json_decode($response);

foreach ($list as $list) {
    $id_lang  = $list-> id_lang;
    $last_passwd_gen = $list-> last_passwd_gen;
    $stats_date_from = $list-> stats_date_from;
    $stats_date_to = $list-> stats_date_to;
    $active = $list-> active;
    $id_profile = $list-> id_profile;
    $bo_color = $list-> bo_color;
    $default_tab = $list-> default_tab;
    $bo_theme = $list-> bo_theme;
    $bo_css = $list-> bo_css;
    $bo_width = $list-> bo_width;
    $bo_menu = $list-> bo_menu;
    $stats_compare_option = $list-> stats_compare_option;
    $preselect_date_range = $list-> preselect_date_range;
    $id_last_order = $list-> id_last_order;
    $id_last_customer_message = $list-> id_last_customer_message;
    $id_last_customer = $list-> id_last_customer;
    $reset_password_token = $list-> reset_password_token;
    $reset_password_validity = $list-> reset_password_validity;
    $has_enabled_gravatar = $list-> has_enabled_gravatar;
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'W611NQ2IFH8BQUY9UN9DL8WW5MVBEV5L@localhost/prestashop/api/customers/4',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>'<?xml version="1.0" encoding="UTF-8"?>
<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
<customer>
	<id><![CDATA[4]]></id>
	<id_default_group><![CDATA[0]]></id_default_group>
	<id_lang xlink:href="http://localhost/prestashop/api/languages/1"><![CDATA[1]]></id_lang>
	<newsletter_date_add><![CDATA[0000-00-00 00:00:00]]></newsletter_date_add>
	<ip_registration_newsletter><![CDATA[]]></ip_registration_newsletter>
	<last_passwd_gen><![CDATA[2022-07-23 06:33:22]]></last_passwd_gen>
	<secure_key><![CDATA[94e376fbf6ab35dc03fc814d1be25d05]]></secure_key>
	<deleted><![CDATA[0]]></deleted>
	<passwd><![CDATA[$2y$10$hgD3BFDlHSxPBvRmFyyvFOHCzs/B9CZ9/aQd4jMf3kpOeLKgKIcSW]]></passwd>
	<lastname><![CDATA[Real]]></lastname>
	<firstname><![CDATA[Customer]]></firstname>
	<email><![CDATA[elanonimatonto@gmail.com]]></email>
	<id_gender><![CDATA[0]]></id_gender>
	<birthday><![CDATA[0000-00-00]]></birthday>
	<newsletter><![CDATA[0]]></newsletter>
	<optin><![CDATA[0]]></optin>
	<website><![CDATA[]]></website>
	<company><![CDATA[]]></company>
	<siret><![CDATA[]]></siret>
	<ape><![CDATA[]]></ape>
	<outstanding_allow_amount><![CDATA[0.000000]]></outstanding_allow_amount>
	<show_public_prices><![CDATA[0]]></show_public_prices>
	<id_risk><![CDATA[0]]></id_risk>
	<max_payment_days><![CDATA[0]]></max_payment_days>
	<active><![CDATA[0]]></active>
	<note><![CDATA[]]></note>
	<is_guest><![CDATA[0]]></is_guest>
	<id_shop><![CDATA[1]]></id_shop>
	<id_shop_group><![CDATA[1]]></id_shop_group>
	<date_add><![CDATA[2022-07-23 12:33:22]]></date_add>
	<date_upd><![CDATA[2022-07-23 12:33:22]]></date_upd>
	<reset_password_token><![CDATA[]]></reset_password_token>
	<reset_password_validity><![CDATA[0000-00-00 00:00:00]]></reset_password_validity>
<associations>
<groups nodeType="group" api="groups"/>
</associations>
</customer>
</prestashop>
',
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
    CURLOPT_URL => 'PPY3PFCXSNK6LNJZ7GRQIRXEWYYMJCPC@10.0.0.199/workgroup2/presta/api/customers/?output_format=JSON&display=%5Bid,id_lang,firstname,lastname,email,id_profile%5D',
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


$list = json_decode($response);


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
                            <h2> <b>Clientes GET</b></h2>
                        </div>
                    </div>
                </div>
                <form action="/crud-maycar" method="POST" id="myform">

                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>   
                        <?php for ($i = 0; $i < count((array)$result,1)-1; $i++) {
                            foreach ($result as $list) {
                            ?>  
                            <tr>
                            <td><?php echo $list[$i]->id; ?></td>
                            <td><?php echo $list[$i]->firstname; ?></td>
                            <td><?php echo $list[$i]->lastname; ?></td>
                            <td><?php echo $list[$i]->email; ?></td>                
                            </tr>                
                            <?php
                            } 
                         }?>
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