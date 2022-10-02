<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'F5RVQ5U14S26IXZ16D9IP1V99GZ49WYU@localhost/prestashop/api/customers/4',
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
