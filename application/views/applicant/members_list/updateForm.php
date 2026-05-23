<div class="content-wrapper">

    <section class="content pt-3">
        <div class="container-fluid">

            <div class="card shadow-sm">

                <div class="card-header bg-primary">
                    <h3 class="card-title text-white">
                        <i class="fas fa-user-edit"></i> সদস্য তথ্য আপডেট
                    </h3>
                </div>

                <div class="card-body">

                    <form action="<?= base_url('Site/update_member/' . $member->id); ?>" method="POST"
                        enctype="multipart/form-data" onsubmit="return validatePassword()">



                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>সমিতির নাম</label>
                                <input required type="text" class="form-control" name="association_name"
                                    value="<?= $member->association_name ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>কার্যালয়ের ঠিকানা</label>
                                <input required type="text" class="form-control" name="a_address"
                                    value="<?= $member->a_address ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>ইমেইল</label>
                                <input required type="email" class="form-control" name="a_email"
                                    value="<?= $member->a_email ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>মোবাইল নম্বর</label>
                                <input required type="number" class="form-control" name="a_contact"
                                    value="<?= $member->a_contact ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>মেম্বার নম্বর</label>
                                <input required type="text" readonly class="form-control" name="member_no"
                                    value="<?= $member->member_no ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>রেজিস্ট্রেশন নম্বর</label>
                                <input required type="text" class="form-control" name="registration_no"
                                    value="<?= $member->registration_no ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>রেজিস্ট্রেশন তারিখ</label>
                                <input required type="date" class="form-control" name="r_date"
                                    value="<?= $member->r_date ?>">
                            </div>

                            <div class="form-group col-md-4">
                                <label>সমিতির শ্রেনি :</label>

                                <select name="a_type" class="form-control" required>
                                    <option value="<?= $member->a_type ?>"><?= $member->a_type ?></option>

                                    <option value="প্রাথমিক">
                                        প্রাথমিক
                                    </option>

                                    <option value="কেন্দ্রীয়">
                                        কেন্দ্রীয়
                                    </option>

                                    <option value="জাতীয়">
                                        জাতীয়
                                    </option>
                                </select>
                            </div>


                            <div class="col-md-4 form-group">
                                <label>রেজিস্ট্রেশন ঠিকানা</label>
                                <input required type="text" class="form-control" name="r_address"
                                    value="<?= $member->r_address ?>">
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>প্রতিনিধির নাম</label>
                                <input required type="text" class="form-control" name="issuer"
                                    value="<?= $member->issuer ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>পদবী</label>
                                <input required type="text" class="form-control" name="i_designation"
                                    value="<?= $member->i_designation ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>মোবাইল</label>
                                <input required type="number" class="form-control" name="i_contact"
                                    value="<?= $member->i_contact ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>ইমেইল</label>
                                <input required type="email" class="form-control" name="i_email"
                                    value="<?= $member->i_email ?>">
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>কার্যকরী মূলধন</label>
                                <input required type="number" step="0.01" class="form-control" name="valid_cap"
                                    value="<?= $member->valid_cap ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>সর্বশেষ অর্থ বছরের নীট লাভ</label>
                                <input required type="number" step="0.01" class="form-control"
                                    name="last_finYear_profit" value="<?= $member->last_finYear_profit ?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>অনুমোদিত শেয়ার :</label>
                                <input required type="number" step="0.01" class="form-control" name="authorized_shares"
                                    value="<?= $member->authorized_shares ?>">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>পরিশোধিত মূলধন :</label>
                                <input required type="number" step="0.01" class="form-control" name="capital"
                                    value="<?= $member->capital ?>">
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>অডিট তারিখ</label>
                                <input required type="date" class="form-control" name="audit_execution_date"
                                    value="<?= $member->audit_execution_date ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>সাধারণ সভার তারিখ</label>
                                <input required type="date" class="form-control" name="last_gen_meeting_date"
                                    value="<?= $member->last_gen_meeting_date ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>নির্বাচন তারিখ</label>
                                <input required type="date" class="form-control" name="election_date"
                                    value="<?= $member->election_date ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>প্রথম ম্যানেজমেন্ট সভা</label>
                                <input required type="date" class="form-control" name="first_man_meeting_date"
                                    value="<?= $member->first_man_meeting_date ?>">
                            </div>


                        </div>

                        <div class="row">

                            <div class="form-group col-md-4">
                                <label>লভ্যাংশ প্রদান ধরন :</label>
                                <select name="Dividend_payment_type" class="form-control" required>
                                    <option value="<?= $member->Dividend_payment_type ?>"><?= $member->Dividend_payment_type ?></option>

                                    <option value="নগদ">
                                        নগদ
                                    </option>

                                    <option value="স্টক">
                                        স্টক
                                    </option>

                                    <option value="বোনাস">
                                        বোনাস
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-4 form-group">
                                <label>সর্বশেষ লভ্যাংশ হার :</label>
                                <input required type="number" class="form-control" name="dividend_percentage"
                                    value="<?= $member->dividend_percentage ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>লভ্যাংশ প্রদানের তারিখ</label>
                                <input required type="date" class="form-control" name="divident_payment_date"
                                    value="<?= $member->divident_payment_date ?>">
                            </div>


                        </div>



                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>সভাপতির নাম</label>
                                <input required type="text" class="form-control" name="elected_president"
                                    value="<?= $member->elected_president ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>সভাপতির মোবাইল</label>
                                <input required type="number" class="form-control" name="president_contact"
                                    value="<?= $member->president_contact ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>সম্পাদকের নাম</label>
                                <input required type="text" class="form-control" name="elected_editor"
                                    value="<?= $member->elected_editor ?>">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>সম্পাদকের মোবাইল</label>
                                <input required type="number" class="form-control" name="editor_contact"
                                    value="<?= $member->editor_contact ?>">
                            </div>

                        </div>



                        <div class="row">



                        </div>



                        <div class="row">

                            <div class="col-md-3 form-group">
                                <label>নিবন্ধন সনদ</label>
                                <input type="file" class="form-control" name="att_reg_cer">

                                <?php if ($member->att_reg_cer) { ?>
                                    <img target="_blank"
                                        src="<?= base_url('./assets/uploads/project/members/att_reg_cer/' . $member->att_reg_cer) ?>"
                                        width="60px">

                                    </img>
                                <?php } ?>
                            </div>

                            <div class="col-md-3 form-group">
                                <label>ক্ষমতাপত্র</label>
                                <input type="file" class="form-control" name="att_auth_cer">

                                <?php if ($member->att_auth_cer) { ?>
                                    <img target="_blank"
                                        src="<?= base_url('./assets/uploads/project/members/att_auth_cer/' . $member->att_auth_cer) ?>"
                                        width="60px">

                                    </img>
                                <?php } ?>
                            </div>

                            <div class="col-md-3 form-group">
                                <label>রেজুলেশন</label>
                                <input type="file" class="form-control" name="att_resulation">

                                <?php if ($member->att_resulation) { ?>
                                    <img target="_blank"
                                        src="<?= base_url('./assets/uploads/project/members/att_resulation/' . $member->att_resulation) ?>"
                                        width="60px">

                                    </img>
                                <?php } ?>
                            </div>

                            <div class="col-md-3 form-group">
                                <label>উপ-আইন</label>
                                <input type="file" class="form-control" name="att_laws">

                                <?php if ($member->att_laws) { ?>
                                    <img target="_blank"
                                        src="<?= base_url('./assets/uploads/project/members/att_laws/' . $member->att_laws) ?>"
                                        width="60px">

                                    </img>
                                <?php } ?>
                            </div>
                            <div class="col-md-3 form-group">
                                <label>সমিতির পক্ষে প্রতিনিধির স্বাক্ষর</label>
                                <input type="file" class="form-control" name="i_sign">

                                <?php if ($member->i_sign) { ?>
                                    <img target="_blank"
                                        src="<?= base_url('./assets/uploads/project/members/i_sign/' . $member->i_sign) ?>"
                                        width="60px">

                                    </img>
                                <?php } ?>
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label>পাসওয়ার্ড পরিবর্তন করুন :</label>

                                <div style="position:relative;">

                                    <input required value="<?= $member->password ?>" type="password" name="password"
                                        id="password" class="form-control">

                                    <i class="fa fa-eye" onclick="togglePassword('password', this)"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;">
                                    </i>

                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>কন্ফার্ম পাসওয়ার্ড</label>

                                <div style="position:relative;">

                                    <input required value="<?= $member->password ?>" type="password"
                                        name="confirm_password" id="confirm_password" class="form-control">

                                    <i class="fa fa-eye" onclick="togglePassword('confirm_password', this)"
                                        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;">
                                    </i>

                                </div>
                            </div>

                        </div>


                        <div class="text-right mt-4">
                            <button class="btn btn-success btn-lg">
                                <i class="fas fa-save"></i> Update
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </section>

</div>

<script>
    function validatePassword() {

        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;

        // if (password.length < 8) {
        //     alert("পাসওয়ার্ড কমপক্ষে ৮ ডিজিট হতে হবে");
        //     return false;
        // }
        if (password !== confirmPassword) {
            alert("পাসওয়ার্ড মিলছে না!");
            return false;
        }


        return true;
    }


    function togglePassword(fieldId, icon) {

        var input = document.getElementById(fieldId);

        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }

    }

</script>