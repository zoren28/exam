<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form action="<?= base_url('employee/create') ?>" method="POST">
                <div class="card-body">
                    <h5 class="card-title">
                        Add Details
                    </h5>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" required>
                                <span class="firstname-error error-message text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" required>
                                <span class="lastname-error error-message text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                                <span class="birth_date-error error-message text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="civil_status">Civil Status</label>
                                <input type="text" name="civil_status" id="civil_status" class="form-control" required>
                                <span class="civil_status-error error-message text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="middlename">Middlename</label>
                                <input type="text" name="middlename" id="middlename" class="form-control" required>
                                <span class="middlename-error error-message text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="extension-name">Extension Name</label>
                                <input type="text" name="extension_name" id="extension-name" class="form-control">
                                <span class="extension_name-error error-message text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control" required rows="2"></textarea>
                                <span class="address-error error-message text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="contact_details">Contact Details</label>
                                <input type="text" name="contact_details" id="contact_details" class="form-control" required>
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