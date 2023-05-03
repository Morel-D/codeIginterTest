<body>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col">
                <a href="<?php echo base_url('employee') ?>" class="btn btn-dark">Back</a>
            </div>
            <div class="col-10">
                <h3 class="text-end">Edit Employees</h3>
            </div>
        </div>
        <br /><br />
        <!-- form  -->
        <div class="row">
            <div class="col col-6">
                <div class="p-5 col-11">
                    <form action="">
                        <div class="form-group">
                            <label class="lead">Enter First Name</label>
                            <input type="text" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Last Name</label>
                            <input type="text" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Phone Number</label>
                            <input type="text" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="lead">Enter Email</label>
                            <input type="text" class="form-control" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col text-center">
                <img src="assets/employee.png" alt="" /><br />
                <label class="lead">Experience efficient employee management system with us !
                </label>
            </div>
        </div>
    </div>
</body>
