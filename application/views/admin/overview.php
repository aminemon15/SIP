<!DOCTYPE html>
<html>
<head>
  <!-- Header Calling Section -->
    <?php $this->load->view("admin/_partials/head.php") ?>
  <!-- /Header Calling Section -->
</head>
<body class=" skin-green sidebar-mini">
<div class="wrapper">

<!-- Navbar Calling Section -->
  <?php $this->load->view("admin/_partials/navbar.php") ?>
<!-- Navbar Calling Section -->
  
  <!-- Sidebar Calling Section -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
  <!-- Sidebar Calling Section -->
		<?php $this->load->view("admin/_partials/breadcump.php") ?>

      </div>
      <!-- /.row (main row) -->

    <div>
		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

  
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
</div>
</body>
</html>
