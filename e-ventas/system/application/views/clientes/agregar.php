
<h2>Agregar Clientes</h2>

<ul>
	<?php echo validation_errors(); ?>
	
</ul>
<?php echo form_open_multipart('clientes/crear')?>
	<table>
		<tbody>
			<tr>
				<td><b>Nombres:</b></td>
				<td><?php echo form_input('nombre',set_value('nombre'));?></td>
			</tr>
			<tr>
			  	<td><b>Apellidos:</b></td>
				<td><?php echo form_input('apellido',set_value('apellido'));?></td>
			</tr>
			<tr>
				<td><b>Ced. de Identidad:</b></td>
				<td><?php echo form_input('ci',set_value('ci'));?></td>
			</tr>
			<tr>
				<td><b>R.U.C:</b></td>
				<td><?php echo form_input('ruc',set_value('ruc'));?></td>
			</tr>
			<tr>
				<td><b>Direccion:</b></td>
				<td><?php echo form_input('direccion',set_value('direccion'));?></td>
			</tr>
			<tr>
				<td><b>Ciudad:</b></td>
				<td>
					<select name="ciudad" id="ciudad" onchange="cargarBarrios()">
						<option value="ape">[Seleccione una Ciudad]</option>
        				<?php foreach($ciudades as $key => $value):?> 
        					<option value="<?=$key ?>"><?=$value ?></option>
        				<?php endforeach;?> 
        			</select>
				</td>
			</tr>
			<tr>
				<td><b>Barrio:</b></td>
				<td>
					<select name="barrio_id" id="barrio_id">
						<option value="ape">[Seleccione un Barrio]</option> 	 
        			</select>		
				</td>
			</tr>
			<tr>
				<td><b>Telefono:</b></td>
				<td><?php echo form_input('telefono',set_value('telefono'));?></td>
			</tr>
			<tr>
				<td><b>Celular:</b></td>
				<td><?php echo form_input('celular',set_value('celular'));?></td>
			</tr>
			<tr>
				<td><b>E_mail:</b></td>
				<td><?php echo form_input('email',set_value('email'));?></td>
			</tr>
			
			<?php if($rol_id==3)://El rol 3 es el vendedor?>
					<?php echo form_hidden('vendedor_id',$creador_id);?>
			<?php else:?>
					<tr>
						<td><b>Vendedor:</b></td>
						<td>
							<select name="vendedor_id" id="vendedor_id" >
								<option value="ape">[Seleccione un Vendedor]</option>
				   				<?php foreach($vendedores as $key => $value):?> 
				     					<option value="<?=$key ?>"><?=$value ?></option>
				   				<?php endforeach;?> 
				   			</select>
						</td>
					</tr>
			<?php endif;?>
				
		</tbody>
	</table>
	<br>
	<br>
	<?php echo form_submit('agregar', 'Agregar'); ?>

<?php echo form_close()?>

<?php if($rol_id==3)://El link de volver, depende del rol.?>
		<?php echo anchor("clientes/mis_clientes",'Volver');?><br>		
<?php else:?>
		<?php echo anchor("clientes/listar",'Volver');?><br>		
<?php endif;?>		