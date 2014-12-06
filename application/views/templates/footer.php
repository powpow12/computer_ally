 </div> <!-- container -->
 <footer class="footer">
      <div class="container">
        <p class="text-muted"> Test Place sticky footer content here.</p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript Test
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo base_url("assets/js/jquery-1.11.1.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url("assets/js/ie10-viewport-bug-workaround.js");?>"></script>
    <script>
	$(document).ready(function(){
        $("#search").keyup(function () {
		var value = this.value.toLowerCase().trim();
	
			$("table tbody tr").each(function (index) {
				if (!index) return;
				$(this).find("td").each(function () {
					var id = $(this).text().toLowerCase().trim();
					var not_found = (id.indexOf(value) == -1);
					$(this).closest('tr').toggle(!not_found);
					return not_found;
				});
			});
		});
    });
	</script>
   </body>
</html>
