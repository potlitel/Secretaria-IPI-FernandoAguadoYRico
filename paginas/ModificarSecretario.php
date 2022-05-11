<?php
include('../session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	 
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	 
	<head>
	 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/gray/easyui.css">
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/icon.css">
	<script type="text/javascript" src="../SmartWizard-master/js/jquery-1.4.2.min.js"></script>
	 
	<meta name="description" content="" />
	 
<meta name="keywords" content="" />
	 
	<meta name="author" content="" />
	 
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="screen" />
	<link rel="stylesheet" href="../css/footer.css" type="text/css" />
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="../css/styleNav.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
	 
	<script>

		$(document).ready(function()
		{
				$("#exito").hide();
				$("#error").hide();
		});
		
	</script>
	
	<?php
		if(isset($_GET['exito']))
		{	
			?>
			   <script type="text/javascript">
			   $(document).ready(function()
				{
					$("#exito").show();
				});
			   </script>
			<?php 
		}
		
		if(isset($_GET['error']))
		{	
			?>
			   <script type="text/javascript">
			   $(document).ready(function()
				{
					$("#error").show();
				});
			   </script>
			<?php 
		}
	?>
	
	<title>Secretaria IPI Fernando Aguado Y Rico</title>
	 
	</head>
	 
	    <body>
	 
	        <div id="wrapper">
	 
	<?php include('../includes/BannerTwo.php'); ?>
	
	<div align="center">
		<?php include('../includes/nav.php'); ?>
	</div>
	 
	<div id="contenthp">
	
	<pre class="encabezado">Listado de secretarios docentes</pre>	
	 <div style="width:916px;" align="center">
	<table class="easyui-datagrid" id="dg" title=" " style="width:715px;height:364px"
			toolbar="#toolbar" pagination="true" idField="id"
			data-options="rownumbers:true,singleSelect:true,method:'get',pagination:true,
				pageSize:10">
		<thead data-options="frozen:true">
			<tr>
				<th data-options="field:'nombre',width:170">Nombre</th>
				<th data-options="field:'primerapellido',width:160,align:'center'">Primer apellido</th>
				<th data-options="field:'segundoapellido',width:160,align:'center'" >Segundo apellido</th>
			</tr>
		</thead>
		<thead>
			<tr>
				<th data-options="field:'username',width:190">Usuario</th>
				<th data-options="field:'ci',width:150,align:'center'" >Carnet de Identidad</th>
				<th data-options="field:'sexo',width:130,align:'center'"  >Sexo</th>
				<th data-options="field:'direccionparticular',width:350,align:'center'"  >Direccion particular</th>
			</tr>
		</thead>
	</table>
	</div>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-darBaja" plain="true" onclick="javascript:$('#dg').edatagrid('editSD')">Modificar secretario</a>
	</div>
	<script type="text/javascript">
		function pagerFilter(data){
			if (typeof data.length == 'number' && typeof data.splice == 'function'){	// is array
				data = {
					total: data.length,
					rows: data
				}
			}
			var dg = $(this);
			var opts = dg.datagrid('options');
			var pager = dg.datagrid('getPager');
			pager.pagination({
				onSelectPage:function(pageNum, pageSize){
					opts.pageNumber = pageNum;
					opts.pageSize = pageSize;
					pager.pagination('refresh',{
						pageNumber:pageNum,
						pageSize:pageSize
					});
					dg.datagrid('loadData',data);
				}
			});
			if (!data.originalRows){
				data.originalRows = (data.rows);
			}
			var start = (opts.pageNumber-1)*parseInt(opts.pageSize);
			var end = start + parseInt(opts.pageSize);
			data.rows = (data.originalRows.slice(start, end));
			return data;
		}
		$(function(){
			$('#dg').edatagrid({
				url: '../php/get_SecretariosDocentes.php'
			});
		});
		$(function(){
			$('#dg').datagrid({loadFilter:pagerFilter}).datagrid('loadData');
		});
	</script>	
	 
	</div> <!-- end #content -->
	 
	<?php //include('../includes/FooterDiv.php'); ?>	
	<?php include('../includes/footerFinal.php'); ?> 
	 
	        </div> <!-- End #wrapper -->
	 
	    </body>
	 
	</html>