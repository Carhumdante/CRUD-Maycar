<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'PPY3PFCXSNK6LNJZ7GRQIRXEWYYMJCPC@10.0.0.199/workgroup2/presta/api/customers?output_format=JSON&display=[id,firstname,lastname,email]',
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

$response = json_decode($response);
$x = $response;

?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
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
                                <th scope="col">Edad</th>
                                <th scope="col">Signo</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php for($i=0;$i<2;$i++) {?>
                        <?php foreach ($response as $list) {

                            ?>  
                            <tr>
                            <td><?php echo $list[$i]->id; ?></td>
                            <td><?php echo $list[$i]->firstname; ?></td>
                            <td><?php echo $list[$i]->lastname; ?></td>
                            <td><?php echo $list[$i]->email; ?></td><
                            <a href="edit.php?id=<?php echo $list['id'] ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete.php?id=<?php echo $list['id'] ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                            </tr>                
                            <?php
                            } ?>
                            <?php }?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Signo: </label>
                        <input type="text" class="form-control" name="txtSigno" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>