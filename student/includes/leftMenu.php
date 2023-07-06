<?php
$staffId = $_SESSION['staffId'];
$query = mysqli_query($con, "select * from tblstudent where matricNo='$matricNo'");
$row = mysqli_fetch_array($query);
$staffFullName = $row['firstName'] . ' ' . $row['lastName'];
?>
<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="menu-title">Student: &nbsp;&nbsp;&nbsp;<?php echo $staffFullName; ?></li>
				<li class="<?php if ($page == 'dashboard') {
											echo 'active';
										} ?>">
					<a href="index.php"> Dashboard </a>
				</li>
				<!-- <li class="<?php if ($page == 'session') {
													echo 'active';
												} ?>">
					<a href="academic_year.php"> Academic Year </a>
				</li>
				<li class="<?php if ($page == 'department') {
											echo 'active';
										} ?>">
					<a href="departments.php"> Departments </a>
				</li>
				<li class="<?php if ($page == 'faculty') {
											echo 'active';
										} ?>">
					<a href="faculties.php"> Faculties </a>
				</li>
				<li class="<?php if ($page == 'course') {
											echo 'active';
										} ?>">
					<a href="faculties.php"> Courses </a>
				</li>
				<li class="<?php if ($page == 'subject') {
											echo 'active';
										} ?>">
					<a href="faculties.php"> Subjects </a>
				</li>
				<li class="<?php if ($page == 'section') {
											echo 'active';
										} ?>">
					<a href="faculties.php"> Sections </a>
				</li> -->
				<li class="">
					<a href="logout.php"> Logout </a>
				</li>


			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside>