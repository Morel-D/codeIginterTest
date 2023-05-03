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
					<tr>
						<td>1</td>
						<td>1236543</td>
						<td>Tchaptche</td>
						<td>Denzel</td>
						<td>+237231476</td>
						<td>denzel@gmail.com</td>
						<td>
							<button class="btn btn-warning">Edit</button>
							<button class="btn btn-primary">view</button>
							<button class="btn btn-danger">delete</button>
						</td>
					</tr>
				</tbody>
				</tbody>
			</table>
		</div>
	</body>
