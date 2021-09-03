@extends('plantillas.base')
@section('titulo', 'Laboratorio 3')
@section('menu')
 @parent
 <p>Esta seccion pertenece al menu</p>
@endsection
@section('contenido')
<form method="post" id="frm_productos" name="frm_productos" action="">
			<label>C&oacute;digo:</label>
			<input type="text" class="campo_texto" maxlength="8" value="" tabindex="1" id="txt_cod" name="txt_cod">
			<br><br>
			<label>Nombre:</label>
			<input type="text" class="campo_texto" maxlength="64" value="" tabindex="2" id="txt_nom" name="txt_nom">
			<br><br>
			<label>Precio:</label>
			<input type="text" class="campo_texto" maxlength="11" value="" tabindex="3" id="txt_prec" name="txt_prec">
			<br><br>
			<label>Cantidad:</label>
			<input type="text" class="campo_texto" maxlength="11" value="" tabindex="4" id="txt_cant" name="txt_cant">
			<br><br><br>
			<input type="submit" value="Guardar" name="btn_guardar" tabindex="5">
			<input type="submit" value="Eliminar" name="btn_eliminar" tabindex="6">
		</form>
		<div id="panel">
			<form method="post" id="frm_busqueda" name="frm_busqueda">
				<input type="text" value="" placeholder="Nombre o Código del Producto" size="50" name="txt_busq" id="txt_busq" tabindex="7">
			</form>
			<div id="resultados">
				<table id="grid">
					
				</table>
			</div>
		</div>
		<span id="msjbox" style="color: #F00;"></span>
@endsection