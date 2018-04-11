<aside class="main-sidebar">
	<section class="sidebar">
		
		<ul class="sidebar-menu" data-widgets="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li>
				<a href="<?php base_url();?>">
					<i class="fa fa-home"></i> <span>Inicio</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-cogs"></i> <span>Mantenimiento</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li> <a href="<?php base_url();?>mantenimiento/categorias"> <i class="fa fa-circle-o"></i>Categorias</a></li>
					<li> <a href="<?php echo base_url(); ?>mantenimiento/productos"> <i class="fa fa-circle-o"></i>Productos</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-share-alt"></i> <span>Movimientos</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url();?>movimientos/ventas"><i class="fa fa-circle-o"></i>Ventas</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-print"></i> <span>Reportes</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li><a href="../../index.html"><i class="fa fa-circle-o"></i>Categorias</a></li>
					<li><a href="../../index.html"><i class="fa fa-circle-o"></i>Clientes</a></li>
					<li><a href="../../index.html"><i class="fa fa-circle-o"></i>Productos</a></li>
					<li><a href="../../index.html"><i class="fa fa-circle-o"></i>Ventas</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-user-circle-o"></i> <span>Administrador</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="../../index.html"><i class="fa fa-circle-o"></i>Tipo Documentos</a></li>
					<li><a href="<?php echo base_url();?>administrador/usuarios"><i class="fa fa-circle-o"></i>Usuarios</a></li>
				</ul>
			</li>
		</ul>
	</section>
	
</aside>