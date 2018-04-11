<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyring &copy; 2017-2018 <a href="">Almsaeed Studios</a> </strong> All rights 
	reserved.
</footer>

<script src="<?php echo base_url();?>assets/template/jquery/dist/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/template/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url();?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>

<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>

<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>

<script>
	$(document).ready(function () {
		var base_url= "<?php echo base_url();?>";
		$(".btn-remove").on("click", function(e){
			e.preventDefault();
			var ruta = $(this).attr("href");
			$.ajax({
				url: ruta,
				type: "POST",
				success:function(resp){
					window.location.href = base_url + resp;
				}
			});
		});

		$(".btn-view-producto").on("click", function(){
			var producto = $(this).val();
			var infoproducto = producto.split("*");
			html = "<p><strong>Codigo:</strong>"+infoproducto[1]+"</p>"
			html += "<p><strong>Marca:</strong>"+infoproducto[2]+"</p>"
			html += "<p><strong>Descripcion:</strong>"+infoproducto[3]+"</p>"
			html += "<p><strong>Color:</strong>"+infoproducto[4]+"</p>"
			html += "<p><strong>Precio:</strong>"+infoproducto[5]+"</p>"
			html += "<p><strong>Stock:</strong>"+infoproducto[6]+"</p>"
			html += "<p><strong>Categoria:</strong>"+infoproducto[7]+"</p>";
			$("#modal-default .modal-body").html(html);
		});

		$(".btn-view").on("click", function(){
			var id = $(this).val();
			$.ajax({
				url:base_url + "mantenimiento/categorias/view/" + id,
				type: "POST",
				success:function(resp){
					$("#modal-default .modal-body").html(resp);
					//alert(resp);
				}
			});
		});

		 $('#example1').DataTable({
		 	"language": {
		 		"lengthMenu": "Mostrar _MENU_ registros por pagina",
		 		"zeroRecords": "No se encontraron resultados en su busqueda",
		 		"searchPlaceholder": "Buscar registros",
		 		"info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
		 		"infoEmpty": "No existen registros",
		 		"infoFiltered": "(filtrando de un total de _MAX_ registros)",
		 		"search": "Buscar:",
		 		"paginate": {
		 			"first": "Primero",
		 			"last": "Ultimo",
		 			"next": "Siguiente",
		 			"previous": "Anterior"
		 		},
		 	}
		 });
		$('.sidebar-menu').tree();
	})
</script>
</body>
</html>