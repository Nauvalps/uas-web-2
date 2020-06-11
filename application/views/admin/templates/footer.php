<script src="vendor/twbs/bootstrap/dist/js/jquery-3.5.1.slim.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/popper.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/jquery.dataTables.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$('.dropdown-toggle').dropdown();
		(function () {
			"use strict";

			$('[data-toggle="sidebar"]').click(function (event) {
				event.preventDefault();
				$('.app').toggleClass('sidebar-toggled');

			});
		})();

		$(document).ready(function() {
			$('#mutasi_masuk').DataTable();
		} );
	</script>
</body>

</html>