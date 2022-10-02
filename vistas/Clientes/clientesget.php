<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'F5RVQ5U14S26IXZ16D9IP1V99GZ49WYU@localhost/prestashop/api/customers/?output_format=JSON&display=%5Bid,id_lang,firstname,lastname,email%5D',
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


?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Lista de personas
                </div>
                <div class="p-4">
                    <table class="table align-middle">
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
                         }
                         ?>
                        </tbody>
                    </table>                
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="container">
        <div class="row">
            <div class="col-md-12 pt-4">
                <script async
                    src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1190033123418031"
                    crossorigin="anonymous"></script>
                <!-- live_demo_page -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1190033123418031"
                    data-ad-slot="5335471635" data-ad-format="auto" data-full-width-responsive="true"></ins>
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