	<?php

	$num = 1;

	?>

	<body>
		<div class="container-fluid p-5">
			<div class="row">
				<div class="col-10">
					<h3 class="text-secondary">Employee managment system</h3>
				</div>
				<div class="col text-center">
					<a href="<?php echo base_url('employee/add') ?>" class="btn btn-dark">Add Employee</a>
				</div>
			</div>
			<br />

			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Employee ID</th>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
				<tbody>
					<?php foreach ($employees as $employee) {  ?>
						<tr>
							<td><?php echo $num++ ?></td>
							<td><?php echo $employee->uid ?></td>
							<td><?php echo $employee->f_name ?></td>
							<td><?php echo $employee->l_name ?></td>
							<td><?php echo $employee->phone ?></td>
							<td><?php echo $employee->email ?></td>
							<td>
								<a href="<?php echo base_url('employee/edit/' . $employee->id) ?>" class="btn btn-warning">Edit</a>
								<button class="btn btn-primary">view</button>
								<button class="btn btn-danger">delete</button>
							</td>
						</tr>
					<?php }  ?>
				</tbody>
				</tbody>
			</table>
		</div>
	</body>
