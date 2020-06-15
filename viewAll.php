<?php
	include "inc/header.php";
 ?>
<?php
	$student = new Student();
	$cur_date = date('Y-m-d');
 ?>


			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<a class="btn btn-success" href="add.php">Add Student</a>
						<a class="btn btn-info pull-right" href="index.php">Take Attendance</a>
					</h2>
				</div>
			</div>

			<div class="panel-body">
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="30%">Serial</th>
							<th width="50%">Attendance Date</th>
							<th width="20%">Action</th>
						</tr>
				<?php
					 $getDate = $student->getAllAttendDate();
					 if ($getDate) {
						 $i=0;
						 while ($value = $getDate->fetch_assoc()) {
						 	$i++;
					?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['attend_date']; ?></td>
							<td><a class="btn btn-info" href="attendanceOfThisDate.php?dt=<?php echo $value['attend_date']; ?>">view</a></td>
						</tr>
					<?php } } ?>
					</table>
				</form>
			</div>
<?php
	include "inc/footer.php";
 ?>
