<?php
include('../session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	 
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	 
	<head>
	 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/gray/easyui.css">
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/icon.css">
	 
	<meta name="description" content="" />
	 
<meta name="keywords" content="" />
	 
	<meta name="author" content="" />
	 
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="screen" />
	<link rel="stylesheet" href="../css/footer.css" type="text/css" />
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="../css/styleNav.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
	 
	<title>Secretaria IPI Fernando Aguado Y Rico</title>
	 
	</head>
	 
	    <body>
	 
	        <div id="wrapper">
	 
	<?php include('../includes/BannerTwo.php'); ?>
	
	<div align="center">
		<?php include('../includes/nav.php'); ?>
	</div>
	 
	<div id="contenthp">
	
	<pre class="encabezado">Listado de estudiantes - Gestion Documental 2do Curso</pre>	
	 <div style="width:916px;" align="center">
	<table class="easyui-datagrid" id="dg" title="My Users" style="width:715px;height:364px"
			toolbar="#toolbar" pagination="true" idField="id"
			data-options="rownumbers:true,singleSelect:true,method:'get',pagination:true,
				pageSize:10">
		<thead data-options="frozen:true">
			<tr>
				<th data-options="field:'username',width:190">Nombre(s)</th>
				<th data-options="field:'apellidos',width:170">Apellidos</th>
			</tr>
		</thead>
		<thead>
			<tr>
				<th data-options="field:'sexo',width:90,align:'center'">Sexo</th>
				<th data-options="field:'ci',width:140,align:'center'" >Carnet de Identidad</th>
				<th data-options="field:'nacimiento',width:150,align:'center'" >Fecha de Nacimiento</th>
				<th data-options="field:'provincia',width:130,align:'center'"  >Provincia</th>
				<th data-options="field:'municipio',width:130,align:'center'"  >Municipio</th>
				<th data-options="field:'escolaridad',width:120,align:'center'"  >Escolaridad</th>
				<th data-options="field:'procedencia',width:300,align:'center'"  >Centro de Procedencia</th>
				<th data-options="field:'comprobante',width:180,align:'center'"  >Numero de Comprobante</th>
				<th data-options="field:'ec',width:180,align:'center'"  >Estado Civil</th>
			</tr>
		</thead>
	</table>
	</div>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-verPlanilla" plain="true" onclick="javascript:$('#dg').edatagrid('ViewDataGD2')">Ver planilla del estudiante/trabajador</a>
		<a>|<a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-darBaja" plain="true" onclick="javascript:$('#dg').edatagrid('UnregisterStudent')">Dar baja</a>
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
				url: '../php/get_GD2.php',
				saveUrl: '../php/save_user.php',
				updateUrl: '../php/update_user.php',
				destroyUrl: '../php/destroy_user.php'
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