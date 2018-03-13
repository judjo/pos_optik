
    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
	<!-- Daterange Picker -->
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/select2/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		$('#Tanggal_Lahir').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>
	
	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// Optik
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "optik_modal_edit.php",
					type: "GET",
					data : {id_data_optik: m,},
					success: function (ajaxData){
					$("#ModalEditOptik").html(ajaxData);
					$("#ModalEditOptik").modal('show',{backdrop: 'true'});
					}
				});
			});
		
		// Kategori
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "kategori_modal_edit.php",
					type: "GET",
					data : {id_kategori: m,},
					success: function (ajaxData){
					$("#ModalEditKategori").html(ajaxData);
					$("#ModalEditKategori").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Supplier
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "supplier_modal_edit.php",
					type: "GET",
					data : {id_supplier: m,},
					success: function (ajaxData){
					$("#ModalEditSupplier").html(ajaxData);
					$("#ModalEditSupplier").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Barang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "barang_modal_edit.php",
					type: "GET",
					data : {id_produk: m,},
					success: function (ajaxData){
					$("#ModalEditBarang").html(ajaxData);
					$("#ModalEditBarang").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Konsumen
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "konsumen_modal_edit.php",
					type: "GET",
					data : {id_konsumen: m,},
					success: function (ajaxData){
					$("#ModalEditKonsumen").html(ajaxData);
					$("#ModalEditKonsumen").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jenjang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jenjang_modal_edit.php",
					type: "GET",
					data : {Kode_Jenjang: m,},
					success: function (ajaxData){
					$("#ModalEditJenjang").html(ajaxData);
					$("#ModalEditJenjang").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jadwal
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jadwal_modal_edit.php",
					type: "GET",
					data : {Id_Jadwal: m,},
					success: function (ajaxData){
					$("#ModalEditJadwal").html(ajaxData);
					$("#ModalEditJadwal").modal('show',{backdrop: 'true'});
					}
				});
			});
		});
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>