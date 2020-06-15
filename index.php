<?php
	include "inc/header.php";
 ?>
<?php
	$student = new Student();
	$cur_date = date('Y-m-d');
 ?>
<?php
error_reporting(0);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$attend = $_POST['attend'];
		$attendInsert = $student->insertAttendance($cur_date, $attend);
	}
 ?>

 <?php
	if (isset($attendInsert)) {
		echo $attendInsert;
	}
  ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(){
			var roll = true;
			$(':radio').each(function(){
				name = $(this).attr('name');
				if (roll && !$(':radio[name = "' +name+ '"]:checked').length) {
					//alert(name + "Roll missing");
					$('.alert').show();
					roll = false;
				}
			});
			return roll;
		});
	});
</script>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<a class="btn btn-success" href="add.php">Add Student</a>
						<a class="btn btn-info pull-right" href="viewAll.php">View All</a>
					</h2>
				</div>
			</div>
<div class='alert alert-danger' style="display:none;"><strong>Oops !!</strong>Student Roll Missing.</div>
			<div class="panel-body">
				<div class="well text-center" style="font-size:20px;">
					<strong>Date : </strong><?php echo $cur_date; ?>
				</div>
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="15%">Serial</th>
							<th width="25%">Student Name</th>
							<th width="20%">Roll</th>
							<th width="20%">Registration</th>
							<th width="20%">Attendence</th>
						</tr>
				<?php
					 $getStudent = $student->getAllStudents();
					 if ($getStudent) {
						 $i=0;
						 while ($value = $getStudent->fetch_assoc()) {
						 	$i++;
					?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['roll']; ?></td>
							<td><?php echo $value['registration']; ?></td>
							<td>
								<label>
									<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present"> P
								</label>
									&nbsp;&nbsp;
								<label>
									<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent">
									A
								</label>
							</td>
						</tr>
					<?php } } ?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="submit" class="btn btn-primary" name="submit" value="Submit">
							</td>
						</tr>
					</table>
				</form>
			</div>
<?php
	include "inc/footer.php";
 ?>
