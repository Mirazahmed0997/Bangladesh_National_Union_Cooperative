<div class="form-wrapper">
    <?php if ($this->session->flashdata('member_error')): ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('member_error'); ?>
        </div>
    <?php endif; ?>
    <div class="form-header">
        <i class="fas fa-user-plus" style="font-size: 40px; color: var(--secondary);"></i>
        <h2>সদস্য পদের আবেদন ফরম</h2>
        <p>সঠিক তথ্য দিয়ে নিচের ফরমটি পূরণ করুন</p>
    </div>
    <form action="<?php echo base_url('member_register'); ?>" method="POST" enctype="multipart/form-data"
        onsubmit="return validatePassword()">


        <div class="grid">

            <div class="form-group full">
                <label>সমিতি নাম :</label>
                <input required type="text" name="association_name">
            </div>

            <div class="form-group">
                <label>সমিতির শ্রেনি :</label>
                <select name="a_type" required>
                    <option value="">নির্বাচন করুন</option>
                    <option value="প্রাথমিক">প্রাথমিক</option>
                    <option value="কেন্দ্রীয়">কেন্দ্রীয়</option>
                    <option value="জাতীয়">জাতীয়</option>
                </select>
            </div>


            <div class="form-group ">
                <label>সমিতির ইমেইল :</label>
                <input required type="email" name="a_email">
            </div>
            <div class="form-group full">
                <label>কার্যালয়ের ঠিকানা :</label>
                <textarea name="a_address"></textarea>
            </div>

            <div class="form-group">
                <label>নিবন্ধন নং :</label>
                <input required type="text" name="registration_no">
            </div>

            <div class="form-group">
                <label>নিবন্ধন তারিখ :</label>
                <input required type="date" name="r_date">
            </div>


            <div class="form-group full">
                <label>নিবন্ধন ঠিকানা :</label>
                <textarea name="r_address"></textarea>
            </div>

        </div>


        <div class="grid">

            <div class="form-group">
                <label>মোবাইল নম্বর :</label>
                <input required type="number" name="a_contact" min="1300000000" max="1999999999"
                    placeholder="01XXXXXXXXX" oninput="if(this.value.length > 11) this.value = this.value.slice(0,11)">
            </div>

            <div class="form-group">
                <label>ইমেইল :</label>
                <input required type="email" name="a_email">
            </div>

        </div>


        <div class="grid">

            <div class="form-group">
                <label>সমিতির পক্ষে প্রতিনিধির নাম :</label>
                <input required type="text" name="issuer">
            </div>

            <div class="form-group">
                <label>পদবি :</label>
                <input required type="text" name="i_designation">
            </div>

            <div class="form-group">
                <label>মোবাইল নম্বর :</label>
                <input required type="number" name="i_contact" min="1300000000" max="1999999999"
                    placeholder="01XXXXXXXXX" oninput="if(this.value.length > 11) this.value = this.value.slice(0,11)">
            </div>

            <div class="form-group">
                <label>ইমেইল :</label>
                <input required type="email" name="i_email">
            </div>

        </div>
        <div class="grid">

            <div class="form-group">
                <label>অনুমোদিত শেয়ার :</label>
                <input required type="number" name="authorized_shares">
            </div>

            <div class="form-group">
                <label>পরিশোধিত মূলধন :</label>
                <input required type="number" name="capital">
            </div>


        </div>


        <div class="grid">

            <div class="form-group">
                <label>কার্যকরী মূলধন :</label>
                <input required type="number" step="0.01" name="valid_cap">
            </div>

            <div class="form-group">
                <label>সর্বশেষ অর্থ বছরের নীট লাভ :</label>
                <input required type="number" step="0.01" name="last_finYear_profit">
            </div>

        </div>


        <div class="grid">



            <div class="form-group">
                <label>সর্বশেষ বার্ষিক সাধারণ সভার তারিখ :</label>
                <input required type="date" name="last_gen_meeting_date">
            </div>

            <div class="form-group">
                <label>অডিট সম্পাদনের তারিখ :</label>
                <input required type="date" name="audit_execution_date">
            </div>

            <div class="form-group">
                <label>নির্বাচন অনুষ্ঠানের তারিখ :</label>
                <input required type="date" name="election_date">
            </div>

            <div class="form-group">
                <label>নির্বাচিত ব্যবস্থাপনা কিমিটির প্রথম সভার তারিখ :</label>
                <input required type="date" name="first_man_meeting_date">
            </div>
            <div class="form-group">
                <label>সর্বশেষ লভ্যাংশ প্রদানের সমবায় বর্ষ :</label>
                <input required type="date" name="last_dividend_payment_year">
            </div>
            <div class="form-group">
                <label>সর্বশেষ লভ্যাংশ হার :</label>
                <input required type="number" name="dividend_percentage">
            </div>

        </div>


        <div class="grid">

            <div class="form-group">
                <label>সদস্য সমিতির সভাপতির নাম :</label>
                <input required type="text" name="elected_president">
            </div>

            <div class="form-group">
                <label>সদস্য সমিতির সভাপতির মোবাইল নম্বর :</label>
                <input required type="number" name="president_contact" min="1300000000" max="1999999999"
                    placeholder="01XXXXXXXXX" oninput="if(this.value.length > 11) this.value = this.value.slice(0,11)">
            </div>
            <div class="form-group">
                <label>সদস্য সমিতির সভাপতির ইমেইল :</label>
                <input required type="email" name="president_email">
            </div>

            <div class="form-group">
                <label>সদস্য সমিতির সম্পাদকের নাম :</label>
                <input required type="text" name="elected_editor">
            </div>

            <div class="form-group">
                <label>সদস্য সমিতির সম্পাদকের মোবাইল নম্বর :</label>
                <input required type="number" name="editor_contact" min="1300000000" max="1999999999"
                    placeholder="01XXXXXXXXX" oninput="if(this.value.length > 11) this.value = this.value.slice(0,11)">
            </div>
            <div class="form-group">
                <label>সদস্য সমিতির সম্পাদকের ইমেইল :</label>
                <input required type="email" name="e_email">
            </div>

        </div>


        <div class="grid">


            <div class="form-group">
                <label>লভ্যাংশ প্রদান ধরন :</label>
                <select name="Dividend_payment_type" required>
                    <option value="">নির্বাচন করুন</option>
                    <option value="নগদ">নগদ</option>
                    <option value="স্টক">স্টক</option>
                    <option value="বোনাস">বোনাস</option>
                </select>
            </div>

        </div>

        <div class="section-title">প্রয়োজনীয় কাগজপত্র :</div>

        <div class="grid">
            <div class="form-group">
                <label>নিবন্ধন সনদ :</label>
                <div class="file-upload">
                    <input required name="att_reg_cer" type="file" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label>ক্ষমতাপত্র :</label>
                <div class="file-upload">
                    <input required name="att_auth_cer" type="file" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label>রেজুলেশন :</label>
                <div class="file-upload">
                    <input required name="att_resulation" type="file" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label>সমিতির উপ-আইন :</label>
                <div class="file-upload">
                    <input name="att_laws" type="file" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label>সমিতির পক্ষে প্রতিনিধির স্বাক্ষর :</label>
                <div class="file-upload">
                    <input name="i_sign" type="file" accept="image/*">
                </div>
            </div>
        </div>


        <div class="section-title">লগইন পাসওয়ার্ড সেট করুন :</div>

        <div class="grid">
            <div class="form-group">
                <label>পাসওয়ার্ড</label>
                <div style="position:relative;">
                    <input type="password" name="password" id="password" class="form-control">

                    <i class="fa fa-eye" onclick="togglePassword('password', this)"
                        style="position:absolute; right:10px; top:10px; cursor:pointer;">
                    </i>
                </div>
            </div>

            <div class="form-group">
                <label>কন্ফার্ম পাসওয়ার্ড</label>
                <div style="position:relative;">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control">

                    <i class="fa fa-eye" onclick="togglePassword('confirm_password', this)"
                        style="position:absolute; right:10px; top:10px; cursor:pointer;">
                    </i>
                </div>
            </div>
        </div>


        <!-- <div class="form-group">
            <label>Member No (Auto)</label>
            <input type="text" name="member_no" placeholder="Auto Generated" readonly>
        </div> -->

        <button type="submit" class="btn">Submit</button>

    </form>
</div>





<style>
    body {
        font-family: Arial;
        background: #f4f6f9;
    }

    .form-wrapper {
        max-width: 1000px;
        margin: 30px auto;
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
    }

    .section-title {
        background: #1976d2;
        color: #fff;
        padding: 10px;
        margin-top: 25px;
        border-radius: 6px;
        font-weight: bold;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin-top: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 5px;
    }

    input,
    textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
    }

    textarea {
        min-height: 80px;
    }

    .full {
        grid-column: span 2;
    }

    .btn {
        width: 100%;
        margin-top: 20px;
        padding: 12px;
        background: #1976d2;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn:hover {
        background: #125aa0;
    }

    /* Responsive */
    @media(max-width:768px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }
</style>




<script>
    function validatePassword() {

        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;

        if (password.length < 8) {
            alert("পাসওয়ার্ড কমপক্ষে ৮ ডিজিট হতে হবে");
            return false;
        }
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