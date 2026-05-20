<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h4">Association Details</h2>
            </div>

            <div class="row">

                <!-- Basic Association Info -->
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">Association Information</div>
                        <div class="card-body">

                            <p><strong>Association Name:</strong> <?= $member->association_name ?></p>
                            <p><strong>Address:</strong> <?= $member->a_address ?></p>
                            <p><strong>Email:</strong> <?= $member->a_email ?></p>
                            <p><strong>Contact:</strong> <?= $member->a_contact ?></p>
                            <p><strong>Member No:</strong> <?= $member->member_no ?></p>
                            <p><strong>Registration No:</strong> <?= $member->registration_no ?></p>
                            <p><strong>Registration Date:</strong> <?= $member->r_date ?></p>
                            <p><strong>Registered Address:</strong> <?= $member->r_address ?></p>

                        </div>
                    </div>
                </div>

                <!-- Issuer / Management Info -->
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white">Issuer & Management</div>
                        <div class="card-body">

                            <p><strong>Issuer:</strong> <?= $member->issuer ?></p>
                            <p><strong>Designation:</strong> <?= $member->i_designation ?></p>
                            <p><strong>Contact:</strong> <?= $member->i_contact ?></p>
                            <p><strong>Email:</strong> <?= $member->i_email ?></p>

                            <p><strong>Elected President:</strong> <?= $member->elected_president ?></p>
                            <p><strong>President Contact:</strong> <?= $member->president_contact ?></p>

                            <p><strong>Elected Editor:</strong> <?= $member->elected_editor ?></p>
                            <p><strong>Editor Contact:</strong> <?= $member->editor_contact ?></p>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <!-- Financial Info -->
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white">Financial Information</div>
                        <div class="card-body">

                            <p><strong>Valid Capital:</strong> <?= $member->valid_cap ?></p>
                            <p><strong>Last Financial Year Profit:</strong> <?= $member->last_finYear_profit ?></p>
                            <p><strong>Dividend Payment Date:</strong> <?= $member->divident_payment_date ?></p>

                        </div>
                    </div>
                </div>

                <!-- Meetings & Events -->
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-header bg-warning text-dark">Meetings & Events</div>
                        <div class="card-body">

                            <p><strong>Audit Execution Date:</strong> <?= $member->audit_execution_date ?></p>
                            <p><strong>Last General Meeting:</strong> <?= $member->last_gen_meeting_date ?></p>
                            <p><strong>Election Date:</strong> <?= $member->election_date ?></p>
                            <p><strong>First Management Meeting:</strong> <?= $member->first_man_meeting_date ?></p>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12 mb-3">
                    <div class="card shadow-sm d-flex">
                        <div class="card-header bg-secondary text-white">Attachments</div>
                        <div class="card-body">

                       
                            <p><strong>Registration Certificate:</strong><br>
                                <?php if ($member->att_reg_cer): ?>
                                    <img width='100px' class="btn btn-sm btn-primary" target="_blank"
                                       src="<?= base_url('./assets/uploads/project/members/att_reg_cer/' . $member->att_reg_cer) ?>">
                                    </img>
                                <?php else: ?> No File <?php endif; ?>
                            </p>

                            <p><strong>Authorization Certificate:</strong><br>
                                <?php if ($member->att_auth_cer): ?>
                                    <img width='100px' class="btn btn-sm btn-primary" target="_blank"
                                       src="<?= base_url('./assets/uploads/project/members/att_auth_cer/' . $member->att_auth_cer) ?>">
                                    </img>
                                <?php else: ?> No File <?php endif; ?>
                            </p>

                            <p><strong>Resolution:</strong><br>
                                <?php if ($member->att_resulation): ?>
                                    <img width='100px' class="btn btn-sm btn-primary" target="_blank"
                                       src="<?= base_url('./assets/uploads/project/members/att_resulation/' . $member->att_resulation) ?>">
                                    </img>
                                <?php else: ?> No File <?php endif; ?>
                            </p>

                            <p><strong>Laws Document:</strong><br>
                                <?php if ($member->att_laws): ?>
                                    <img width='100px' class="btn btn-sm btn-primary" target="_blank"
                                       src="<?= base_url('./assets/uploads/project/members/att_laws/' . $member->att_laws) ?>">
                                    </img>
                                <?php else: ?> No File <?php endif; ?>
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>