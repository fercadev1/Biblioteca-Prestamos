<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fercadev</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Informe 2</b></h2></div>
                    <div class="col-sm-4">
                    <a href="informes.php" class="btn btn-secondary btn-lg active"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
                <h4>Se muestra el titulo, el autor, el nombre con el apellido y el ID cliente de los prestamos donde el nombre, el apellido del cliente o el titulo del libro contenga las letras 'lo'.</h4>
       <h4> SELECT l.titulo, l.autor, c.nombres, c.apellidos, c.id FROM libros as l inner join prestamo as p on l.id=p.idli inner join clientes as c on p.idcl=c.id where (c.nombres like '%lo%' or c.apellidos like '%lo%') or l.titulo like '%lo%' GROUP BY c.nombres;</h4>
<hr style="border-color:red;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                   
                        <th>Titulo</th>
                        <th>Autor Libro</th>
                        <th>Nombre Cliente</th>
                        <th>ID Cliente</th>
                    </tr>
                </thead>
				<?php 
				include ('database.php');
				$informe2 = new Database();
				$listado=$informe2->readInforme2();
				?>
                <tbody>
				<?php 
					while ($row=mysqli_fetch_object($listado)){
                        $titulo =$row->titulo;
                        $autor=$row->autor;
                        $nombres=$row->nombres." ".$row->apellidos;
                        $id=$row->id;
                        
				?>
					<tr>
                    <td><?php echo $titulo;?></td>
                        <td><?php echo $autor;?></td>
                        <td><?php echo $nombres;?></td>
                        <td><?php echo $id;?></td>
                      
                    </tr>	
				<?php
					}
				?>


                
                    
                    
                          
    
    </div>   
  
</body>
</html>               