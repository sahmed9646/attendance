<?php
	include "inc/header.php";
 ?>
 <?php
	$student = new Student();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$studentInsert = $student->addStudent($_POST);
	}
  ?>

<?php
	if (isset($studentInsert)) {
		echo $studentInsert;
	}
 ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>
						<a class="btn btn-success" href="add.php">Add Student</a>
						<a class="btn btn-info pull-right" href="index.php">back</a>
					</h2>
				</div>
			</div>

			<div class="panel-body">
				<form action="add.php" method="post">
					<div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Student's Full Name">
          </div>
          <div class="form-group">
            <label for="roll">Roll Number</label>
            <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter Student's Roll Number">
          </div>
          <div class="form-group">
            <label for="registration">Registration Number</label>
            <input type="text" class="form-control" name="registration" id="registration" placeholder="Enter Student's Registration Number">
          </div>
          <div class="form-group">
            <label for="department">Department</label>
            <input type="text" class="form-control" name="department" id="department" placeholder="Enter Student's Department">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add Student">
          </div>
				</form>
			</div>
<?php
	include "inc/footer.php";
 ?>
