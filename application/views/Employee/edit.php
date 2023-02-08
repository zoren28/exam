<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee- Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="<?= base_url('employee/update') ?>" method="POST">
                        <div class="card-body">
                            <h5 class="card-title">
                                Update Details
                            </h5>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="hidden" name="id" value="<?= $employee['id'] ?>">
                                        <input type="text" name="firstname" id="firstname" class="form-control" value="<?= $employee['firstname'] ?>" required>
                                        <span class="firstname-error error-message text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control" value="<?= $employee['lastname'] ?>" required>
                                        <span class="lastname-error error-message text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="birth_date">Birth Date</label>
                                        <input type="date" name="birth_date" id="birth_date" class="form-control" value="<?= $employee['birth_date'] ?>" required>
                                        <span class="birth_date-error error-message text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="civil_status">Civil Status</label>
                                        <input type="text" name="civil_status" id="civil_status" class="form-control" value="<?= $employee['civil_status'] ?>" required>
                                        <span class="civil_status-error error-message text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="middlename">Middlename</label>
                                        <input type="text" name="middlename" id="middlename" class="form-control" value="<?= $employee['middlename'] ?>" required>
                                        <span class="middlename-error error-message text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="extension-name">Extension Name</label>
                                        <input type="text" name="extension_name" id="extension-name" class="form-control" value="<?= $employee['extension_name'] ?>">
                                        <span class="extension_name-error error-message text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="address" class="form-control" required rows="2"><?= $employee['address'] ?></textarea>
                                        <span class="address-error error-message text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_details">Contact Details</label>
                                        <input type="text" name="contact_details" id="contact_details" class="form-control" value="<?= $employee['contact_details'] ?>" required>
                                        <span class="contact_details-error error-message text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="submit-btn" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Jquery -->
<script src="<?= base_url('assets/plugins/jquery/jquery-3.6.3.min.js') ?>"></script>

</html>