<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fercadev+</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
img {
    margin-top: 50px;
}



h1{
 font-weight: bold;
 text-align: center;
  border: 3px solid  #810000;

}

</style>
<body>
    <div class="container">
    
		
            <div class="table-title">
			<div class="row">
				
				<div class="col-sm-12"><h1> Libreria Fercadev</h1></div>
			 
			</div>
                <div class="row">
                    <div class="col-sm-8"><h2> <b>Registrar administrador</b></h2></div>
                 
                </div>
            </div>
            <?php
				include ("database.php");
				$administrador= new Database();
				if(isset($_POST) && !empty($_POST)){
          $nombre = $administrador->sanitize($_POST['nombre']);
					$email = $administrador->sanitize($_POST['email']);
					$password = $administrador->sanitize($_POST['password']);
					$res = $administrador->createAdministrador( $nombre,$email, $password);
                     
					if($res){
						$message= "Registrado administrador con éxito";
						$class="alert alert-success";
					}else{
						$message="El email ya existe, por favor inicie sección";
						$class="alert alert-danger";
					}
				
					?>
				<div class="<?php echo $class?>"><
				  <?php echo $message;?>
				 
				</div>	
					<?php
						
				}
			?>
			<form method="post">
			<div class="row">
				
				<div class="form-group col-md-6">
					<label>Nombre:</label>
					<input type="text" name="nombre"  class='form-control' maxlength="10" placeholder="Ingresar nombre" required >
				</div>
				<div class="form-group col-md-6">
					<label>Email:</label>
					<input type="email" name="email" class='form-control' maxlength="100"  placeholder="Ingresar email" required>
				</div>
				<div class="form-group col-md-6">
					<label>Password:</label>
					<input type="password" name="password"  class='form-control' maxlength="100" required  placeholder="Ingresar contraseña">
				</div>
				<div class="col-md-6"></div>
				<div class="col-sm-6"></div>
			<div class="col-sm-3 pull-right">
				<hr>
					<button href="index.php" type="submit" class="btn btn-secondary active">Registrarse</button>
				</div>
			</div>
				</form>
				<div class="col-sm-3 pull-right">
				<hr>
			<a  href="index.php"  type="button" class="btn btn-secondary active">Iniciar Seccion</a>
            </div>
			<div class="row" >
               <div class="col-sm-6" >
                <img alt="clientes" src="./img/l2.jpg" width="400" height="250">
               
                </div>
        </div>


			
        </div>
		
    </div>     
</body>
</html>                            