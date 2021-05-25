<?php 
session_start();

    
	include('conectaBD.php');
	$sql = "SELECT * FROM utilizadores";

	$utilizadores = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<article>
			<div class="card">
				<div class="card-header">
					
  				</div>
  				<div class="card-body">
			   		<table class="table">
							<thead>
								<tr>
								  <th scope="col">ID</th>    
								  <th scope="col">Username</th>
								  <th scope="col">Email</th>
								  <th scope="col">acções</th>
								</tr>
							</thead>
							<tbody>

								<?php 
								
								while ($utilizador = mysqli_fetch_array($utilizadores)){ ?>
								<tr>
								  
								  <td><?php echo $utilizador['id'] ?></td>
								  <td><?php echo $utilizador['username'] ?></td>
								  <td><?php echo $utilizador['email'] ?></td>
								  <td>
								  	<a href="EditarUtilizadores.php?idUtilizador=<?=$utilizador['id']?>" title="Editar">Editar	 </a> 
								  	<a href="EliminarUtilizadores.php?idUtilizador=<?=$utilizador['id']?>" onClick="javascript: return confirm('Confimar a eliminação');" data-toggle="tooltip" title="Eliminar"></i> Eliminar</a>
								  </td>
								</tr>
								<?php 
									
								}
								 ?>
							</tbody>
						</table>
					</div>
				</div>
		</article>
    </div>
    <script src="https://kit.fontawesome.com/f701b4f582.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                         
