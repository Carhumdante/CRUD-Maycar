<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Maycar/Productos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 5px 5px;
	border-radius: 2px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Productos</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>ID</th>
						<th>Nombre</th>
						<th>Imagén</th>
						<th>Descripción Corta</th>
						<th>Descripción</th>
						<th>Precio</th>
						<th>Stock</th>
						<th>Color</th>
						<th>Tamaño</th>
						<th>Caracteristicas</th>
						<th>Opciones</th>
						<?php //<th>Comentario</th>?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>1</td>
						<td>Labial Vogue</td>
						<td><img src="vistas\assets\imagenes\1vogue.jpg" width="70" height="70"></td>
						<td>Labial de labios color claro</td>
						<td>Labial marca vogue de muy buena calidad para definir los labios de cada una</td>
						<td>$59.00</td>
						<td>13 U.</td>
						<td>Amapola</td>
						<td>10.7 x 1.7 x 10.7 centimetros</td>
						<td>Labial liquido acabado metalico<br>Larga Duración</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						<td>2</td>
						<td>Labial Kiko</td>
						<td><img src="vistas\assets\imagenes\1kiko.jpg" width="70" height="70"></td>
						<td>Velvet Touch</td>
						<td>Labial en stick con acabado luminoso. La fórmula ha sido enriquecida con aceite de nuez de kola y extracto de pistacho, con propiedades emolientes. </td>
						<td>$49.00</td>
						<td>20 U.</td>
						<td>Golden Sand</td>
						<td>22 x 22 x 102 milímetros</td>
						<td>Barra de rubor de maquillaje con acabado radiante. La fórmula está enriquecida con aceite de nuez africana y extracto calmante de pistacho.</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						<td>3</td>
						<td>Polvos Neon</td>
						<td><img src="vistas\assets\imagenes\1neon.jpg" width="70" height="70"></td>
						<td>Paleta de Sombras Neon Obsessions Palette</td>
						<td>¡Una gama de paletas de pigmentos prensados ​​NEON, inspiradas en las obsessions de Huda por los colores neón, que ofrecen un aspecto versátil desde sutil hasta vívido y colorido!</td>
						<td>$59.00</td>
						<td>8 U.</td>
						<td>Neon Pink</td>
						<td>20.5 x 2.3 x 20.5 centimetros</td>
						<td>¡Esta vibrante paleta de color rosa neón ofrece 5 tonos mate mantecosos en tonos rosados ​​y morados llamativos, 3 tonos metálicos cremosos y un llamativo tono brillante para un efecto máximo!</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						<td>4</td>
						<td>Mascarilla NYX</td>
						<td><img src="vistas\assets\imagenes\1nix.jpg" width="70" height="70"></td>
						<td>NYX Spray Establecedor de Maquillaje</td>
						<td>NYX Permite que el maquillaje permanezca puesto literalmente de día a noche.Da un hermoso acabado brillante que es súper cómodo y transpirable</td>
						<td>$59.00</td>
						<td>13 U.</td>
						<td>Matte Finish</td>
						<td>60ml/2.03oz</td>
						<td>Un spray fijador de base vegano, ligero pero de larga duración<br>Mantiene el maquillaje húmedo, fresco y brillante</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>					
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Mostrando <b>5</b> de <b>25</b> entradas</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Atrerior/a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Añadir Producto</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>ID</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Imagén</label>
						<input type="file" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Descripción corta</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Precio</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Stock</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Color</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tamaño</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Caracteristicas</label>
						<textarea class="form-control" required></textarea>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Editar Producto</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
				<div class="form-group">
						<label>ID</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Imagén</label>
						<input type="file" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Descripción corta</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Precio</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Stock</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Color</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tamaño</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Caracteristicas</label>
						<textarea class="form-control" required></textarea>
					</div>						
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar Producto</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Estas seguro de eliminar este producto?</p>
					<p class="text-warning"><small>Esta acción no se puede deshacer</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>