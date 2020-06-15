<?php
	include "inc/header.php";
 ?>
<?php
	$student = new Student();
	$date = $_GET['dt'];
 ?>

 <?php
  error_reporting(0);
 	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		$attend = $_POST['attend'];
 		$attendUpdate = $student->updateAttendance($date, $attend);
 	}
?>

<?php
 	if (isset($attendUpdate)) {
 		echo $attendUpdate;
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
<div class='alert alert-danger' style="display:none;"><strong>Oops !!</strong>Student Roll Missing.</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<a class="btn btn-success" href="add.php">Add Student</a>
						<a class="btn btn-info pull-right" href="viewAll.php">Back</a>
					</h2>
				</div>
			</div>
      <div class="well text-center" style="font-size:20px;">
        <strong>Date : </strong><?php echo $date; ?>
      </div>
			<div class="panel-body">
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="20%">Serial</th>
              <th width="20%">Name</th>
              <th width="20%">Roll</th>
              <th width="20%">Registration</th>
							<th width="20%">Present || Absent</th>
						</tr>
				<?php
					 $getStudents = $student->getAllStudent($date);
					 if ($getStudents) {
						 $i=0;
						 while ($value = $getStudents->fetch_assoc()) {
						 	$i++;
					?>
						<tr>
							<td><?php echo $i; ?></td>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['roll']; ?></td>
              <td><?php echo $value['registration']; ?></td>
              <td>
                <label>
									<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present" <?php if ($value['attend'] == "present") {
                    echo "checked";
                  } ?>>
                   P
								</label>
									&nbsp;&nbsp;
								<label>
									<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent" <?php if ($value['attend'] == "absent") {
                    echo "checked";
                  } ?>>
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
              <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </td>
          </tr>
					</table>
				</form>
			</div>
<?php
	include "inc/footer.php";
 ?>
