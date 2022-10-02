<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'F5RVQ5U14S26IXZ16D9IP1V99GZ49WYU@localhost/prestashop/api/customers',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'<prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
  <customer>
    <passwd><![CDATA['.$passwd.']]></passwd>
    <lastname><![CDATA['.$lastname.']]></lastname>
    <firstname><![CDATA['.$firstname.']]></firstname>
    <email><![CDATA['.$email.']]></email>
  </customer>
</prestashop>',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/xml',
    'Cookie: PrestaShop-b495097bf03a2b246a17e22e09a4dd34=def50200597a9629fd5d63f742819b8bda4d9ffe59388d9039c2245876383d97122e2f3f94e7a9906556637a650dff83eff777269856c4227e478c71382083a1954e594be55a8c2261f7e778b872791a7d528ab925d172c7e80db7b5d39597e480a5007cc72f6a76946bdd1bd91615e14e30ba67f740af465ab36873d4cda0714d8f99a045d36442981a95db9be0e2d789c2e03966a39d493741001a5b412eefab128541f22d418471241d04592e44fe9b74d468fbfaaa0e8eaedacaa3ee27f6787902db862f8ca329f27249f14c76a94de73ada780abbff41'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
?>

<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'F5RVQ5U14S26IXZ16D9IP1V99GZ49WYU@localhost/prestashop/api/customers/?output_format=JSON&display=%5Bid,id_lang,firstname,lastname,email,id_profile%5D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: PrestaShop-b495097bf03a2b246a17e22e09a4dd34=def50200597a9629fd5d63f742819b8bda4d9ffe59388d9039c2245876383d97122e2f3f94e7a9906556637a650dff83eff777269856c4227e478c71382083a1954e594be55a8c2261f7e778b872791a7d528ab925d172c7e80db7b5d39597e480a5007cc72f6a76946bdd1bd91615e14e30ba67f740af465ab36873d4cda0714d8f99a045d36442981a95db9be0e2d789c2e03966a39d493741001a5b412eefab128541f22d418471241d04592e44fe9b74d468fbfaaa0e8eaedacaa3ee27f6787902db862f8ca329f27249f14c76a94de73ada780abbff41'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$result = json_decode($response);
