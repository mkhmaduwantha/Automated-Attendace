<?php
	session_start();
?>

<?php if (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1) : ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">
							<a href="index.php?page=#">Attendance System</a>
					</li>
					
					
					
					
					<?php if (isset($_SESSION['adminid'])) : ?>
					<li>
							<a href="index.php?page=admin_dashboard">Dashboard</a>
					</li>
					<li>
							<a href="index.php?page=adminReports">Reports</a>
					</li>
					<li>
							<a href="index.php?page=adminAddstudent">Add Student</a>
					</li>
					<?php endif; ?>
					<?php if (!isset($_SESSION['adminid'])) : ?>
					<li>
							<a href="index.php?page=dashboard">Dashboard</a>
					</li>
					<li>
							<a href="index.php">Take Attendance</a>
					</li>
					<li>
							<a href="index.php?page=studentinfo">Assigned to You</a>
					</li>
					<li>
							<a href="index.php?page=Reports">Reports</a>
					</li>
					<li>
							<a href="index.php?page=addStudent">Add Student</a>
					</li>
					<?php endif; ?>
					
					
					<?php if (isset($_SESSION['adminid'])) : ?>
					<li>
							<a href="index.php?page=addClass">Add Class</a>
					</li>
					<?php endif; ?>
					
					<li>
							<a href="index.php?page=help">Help</a>
					</li>
					<li>
							<a href="index.php?page=logout">Logout</a>
					</li>
			</ul>
	</nav>
<?php else: ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">
						<a href="index.php?page=home">Attendance System</a>
					</li>
					<li>
							<a href="index.php">Class Login</a>
					</li>
					<li>
							<a href="index.php?page=adminLogin">Admin Login</a>
					</li>
					
			</ul>
	</nav>
<?php endif; ?>