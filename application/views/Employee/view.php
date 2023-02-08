<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    View Details
                    <a href="<?= base_url('page/menu/employee/add'); ?>">
                        <button class="btn btn-primary btn-sm">Add Details</button>
                    </a>
                </h5>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-hover" width="100%">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
                                        <th>Extension Name</th>
                                        <th>Birth Date</th>
                                        <th>Civil Status</th>
                                        <th>Address</th>
                                        <th>Contact Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($employees as $employee) {

                                    ?>
                                        <tr>
                                            <td><?= $employee['firstname'] ?></td>
                                            <td><?= $employee['lastname'] ?></td>
                                            <td><?= $employee['middlename'] ?></td>
                                            <td><?= $employee['extension_name'] ?></td>
                                            <td><?= date('F d, Y', strtotime($employee['birth_date'])) ?></td>
                                            <td><?= $employee['civil_status'] ?></td>
                                            <td><?= $employee['address'] ?></td>
                                            <td><?= $employee['contact_details'] ?></td>
                                            <td>
                                                <a href="<?= base_url('employee/edit/') . $employee['id'] ?>">
                                                    <button class="btn btn-warning">Update</button>
                                                </a>
                                                <a href="<?= base_url('employee/delete/') . $employee['id'] ?>">
                                                    <button class="btn btn-danger">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>