<?php 
session_start();

require("../complementos/connect_db.php");
require("../complementos/listas_maestras.php");

 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario Registro Empleado</title>

		<!--Funciones de JavaScript-->
		<?php
			if(isset($_GET["mensaje_error"])){
				echo '<script type="text/javascript">
							alert("'.$_GET["mensaje_error"].'");
						</script>';
			}

		?>
	</head>
	<body style="background-color:#FAFAD2;">
		<font color="black" face="Tahoma">
		<form name="registro_empleado" method="post" action="../backend/insert/empleado.php" enctype="multipart/form-data">
			<table border="0" align="center">
				<tr>					
					<th colspan="4">
					<h1> Registro de Empleados </h1>
					<h2> Datos Personales </h1>
					</th>
					</tr>

					<tr> 


						<td align=center" colspan="4"> 

					________________________________________________________________________________________________________________________________________
						</td>
				</tr>
				<tr>
					<td>Documento de identidad: * </td>
					<td>
					<select name="tipo_documento" id="tipo_documento">
							<option value="0"> Seleccione un tipo de documento </option>

							<?php
							$query = "SELECT ab_tipo_documento,id_tipo_documento from tipo_documento WHERE activo=1";
							$result = mysqli_query($connect_db,$query);

							while($var = mysqli_fetch_array($result)){
								$select="";

								if($var['id_tipo_documento']==$_SESSION['tipo_documento']){
									$select="selected";
								}								
								echo "<option value=".$var['id_tipo_documento']." $select>".$var['ab_tipo_documento']."</option>";								
								
							}
							?>							
					</select>
					<td><!--Campo de texto-->
					<input type="text"  name="num_documento" id="num_documento"
			placeholder= "Ej: 1234567890" value="<?php echo $_SESSION["num_documento"]?>"  required></td>
					<td>Fotografía:					
					<input type="file" name="foto_empleado" id="foto_empleado">
					</td>
				</tr>
				<tr>
					<td>Nombres: </td>
					<td><!--Campo de texto-->
						<input type="text" name="nombres" id="nombres" 
			placeholder= "Introduzca sus nombres" value="<?php echo $_SESSION["nombres"]?>" ></td>
					<td>Apellidos: </td>
					<td><!--Campo de texto-->
						<input type="text" name="apellidos" id="aspellidos" 
			placeholder= "Introduzca sus apellidos" value="<?php echo $_SESSION["apellidos"]?>" ></td>
				<tr>
				<td>Fecha de nacimiento: </td>
					<td><!--Campo de texto-->
						<input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
				<td>Correo: </td>
					<td><!--Campo de texto-->
						<input type="email" name="correo" id="correo" value="<?php echo $_SESSION["correo"]?>" >
				</tr>
				<tr>
				
			<td>Dirección: </td>
					<td><!--Campo de texto-->
						<textarea rows="4" cols="30" name="direccion" id="direccion"></textarea>
			<td>Hoja de vida:</td>				
					<td>
					<input type="file" name="hoja_vida" accept=".doc, .pdf" id="hoja_vida">
				</td>
			</tr>

				<td align="center" colspan="4"> 
					________________________________________________________________________________________________________________________________________
						
						</td>
						<tr>
					<th colspan="4">
					<h2> Datos Laborales </h2>
					</th>
					</tr>

			<tr>

			<td>Fecha de ingreso: </td>
					<td><!--Campo de texto-->
						<input type="date" name="fecha_ingreso" id="fecha_ingreso">


									

				<tr>
					
				</tr>


				
				<td> 



					Departamento:
				
					<select name="departamento" id="departamento">
							<option value="0"> Seleccione un departamento </option>
							<option value="1"> Compras </option>
							<option value="2"> Ventas </option>
							<option value="3"> Finanzas </option>
							<option value="4"> RRHH </option>
							<option value="5"> Logística  </option>
							<option value="6"> Producción  </option>
				</td>			

				<td> Área:
					<select name="area" id="area">
							<option value="0"> Seleccione un área </option>
							<option value="1"> Distribución </option>
							<option value="2"> Administración </option>
							<option value="3"> Sales </option>
							<option value="4"> Planta </option>
							

				<td> Cargo:
				<select name="cargo" id="cargo">
							<option value="0"> Seleccione un cargo </option>
							<option value="1"> Jefe de compras </option>
							<option value="2"> Gerente </option>
							<option value="3"> Analista de RRHH </option>
							<option value="4"> Jefe de Planta </option>
				</td>

				<td>Centro de Costo 
					<br>
					(seleccione uno o varios, si corresponde):
					<br>
					<br>
					 <!--Campo de texto-->
		
						<?php
							$query = "SELECT id_centro_costo,centro_costo FROM centro_costo WHERE activo=1";
							$result = mysqli_query($connect_db,$query);

							while($var = mysqli_fetch_array($result)){
								$checked="";
								foreach($_SESSION['CentroCosto'] as $ccosto_checked){
									if($var['id_centro_costo']==$ccosto_checked){
									$checked="checked";
									}	
									}											
								echo "<input type='checkbox' name='CentroCosto[]' value=".$var['id_centro_costo']." $checked> ".$var['centro_costo']." <br>";			
								
							}
							?>	
				</tr>

				<tr>
					<th colspan="4" align="left">
					<h3> </h3>
					</th>
					</tr>
				</tr>

			<td>Lugar de trabajo: </td>
					<td><!--Campo de texto-->						
							<?php
							foreach (select_lugar_trabajo($connect_db,$_SESSION['lugar_trabajo'],'lugar_trabajo') as $key => $value) {
								echo $value;
							}							
							?>
						</td>

			<td>Turno: 
						<select name="turno" id="turno">
							<option value="0"> Seleccione turno correspondiente </option>
							<option value="1"> Diurno </option>
							<option value="2"> Nocturno </option>
							<option value="3"> Rotativo </option>
							<option value="4"> No aplica </option>


					<tr>	

					<td>Tipo de asignación salarial: </td>
					<td>
					<select name="tipo_salario" id="tipo_salario">
							<option value="0"> Seleccione un tipo de salario </option>
							<option value="1"> Básico </option>
							<option value="2"> Integral </option>
							<option value="3"> Apoyo Económico </option>
							
					<td><!--Campo de texto-->
						Monto asignación salarial *
					<input type="number" max="1000000000" name="salario" id="salario"
			placeholder= "Ej: 5000000" value="<?php echo $_SESSION["salario"]?>"  required></td>

						
				</tr>
<tr>
					<th colspan="4">
					<h2>  </h2>
					</th>
					</tr>

				<tr>


			<!--Botón de envío-->
					<td colspan="2" align="center">
					<input type="reset" name="Limpiar" value="Limpiar Formulario">
					
					<td colspan="2" align="center">
					<input type="submit" name="Enviar Formulario">
					</td>
				</tr>
				</tr>

			</table>
			
				
					</form>
	</body>
</html>
