<!-- booking-list.php -->
<?php include 'template/header.php'; 
if (!isset($_SESSION['isLoggedIn'])) {
	echo '<script>window.location="login.php"</script>';
}

?>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php include 'template/top-bar.php'; ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<?php include 'template/left-bar.php'; ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Table</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Notes</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						
						
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">All Notes</h2>
							</header>
							<?php if((isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 1)){ ?>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
									<thead>
										<tr>
											<th>No</th>
											<th>University</th>
											<th>Department</th>
											<th>College</th>
											<th>Semester</th>
											<th>Subject</th>
											<th>Notemaker</th>
											<th>note</th>
											<th class="hidden-phone">View</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$count = 1;
										include 'dbCon.php';
										$con = connect();
										//$res_id = $_SESSION['id'];
										$sql = "SELECT * FROM `note_list` JOIN `subject_names` ON note_list.subject_id=subject_names.subject_id 
										JOIN `notemaker_tables` ON note_list.notemaker_id=notemaker_tables.notemaker_id
										JOIN `depart_tables` ON note_list.depart_id=depart_tables.depart_id
										JOIN `semester` ON note_list.semester=semester.semester
										JOIN `uni_tables` ON note_list.uni_id=uni_tables.uni_id
										JOIN `college_names` ON note_list.college_id=college_names.college_id 
										ORDER BY note_id ASC;";
										$result = $con->query($sql);
										foreach ($result as $r) {
										?>
										<tr class="gradeX">
											<td class="center hidden-phone"><?php echo $count; ?></td>
											<td class="center hidden-phone"><?php echo $r['uni_name']; ?></td>
											<td><?php echo $r['depart_id']; ?></td>
											<td><?php echo $r['college_name']; ?></td>
											<td><?php echo $r['semester']; ?></td>
											<td><?php echo $r['subject_name']; ?></td>
											<td><?php echo $r['notemaker_name']; ?></td>
											<td><?php echo $r['note']; ?></td>

											<td class="center hidden-phone">
												<a href="view-note.php?note_id=<?php echo $r['note_id']; ?>" class="btn btn-primary">View</a>
											</td>
										</tr>
										<?php $count++; } ?>
									</tbody>
								</table>
							</div>
							<?php }
else{	echo '<script>window.location="login.php"</script>';}						?>
						</section>
						
						
					<!-- end: page -->
				</section>
			</div>

			<?php include 'template/right-bar.php'; ?>
		</section>
		<script type="text/javascript">
	       function Done(){
	         return confirm("Are you sure?");
	       }
   		</script>

		<?php include 'template/script-res.php'; ?>
	</body>
</html>