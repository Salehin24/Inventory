<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
			<div id="content" class="span10">
			
			<div class="row-fluid">
				
				<a class="quick-button metro green span4" href="products.php">
					<i class="icon-list-alt"></i>
					<p>Products</p>
				</a>

				<a class="quick-button metro blue span4" href="customers.php">
					<i class="icon-group"></i>
					<p>Customers</p>
				</a>

				<a class="quick-button metro yellow span4" href="sales.php">
					<i class="icon-shopping-cart"></i>
					<p>Sales</p>
				</a>

			</div><br />

			<div class="row-fluid">

				<a class="quick-button metro orange span4" href="sales_report.php">
					<i class="icon-bar-chart"></i>
					<p>Sales Report</p>
				</a>

				<a class="quick-button metro pink span4">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>

				<a class="quick-button metro red span4" href="logout.php">
					<i class="icon-off"></i>
					<p>Logout</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div><!--/row-->
</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
</body>
</html>
