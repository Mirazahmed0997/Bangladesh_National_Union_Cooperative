<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f4f6f9;
}

.form-container{
    width:500px;
    margin:60px auto;
    background:#ffffff;
    padding:30px;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.form-title{
    text-align:center;
    margin-bottom:25px;
    font-size:22px;
    font-weight:bold;
    color:#333;
}

.form-group{
    margin-bottom:15px;
}

.form-group label{
    display:block;
    margin-bottom:5px;
    font-weight:600;
}

.form-group input,
.form-group select{
    width:100%;
    padding:10px;
    border:1px solid #ccc;
    border-radius:4px;
    font-size:14px;
}

.form-group input:focus,
.form-group select:focus{
    border-color:#007bff;
    outline:none;
}

.button-group{
    text-align:center;
    margin-top:20px;
}

.btn{
    padding:10px 20px;
    border:none;
    border-radius:4px;
    font-size:14px;
    cursor:pointer;
}

.btn-register{
    background:#28a745;
    color:white;
}

.btn-register:hover{
    background:#218838;
}

.btn-reset{
    background:#dc3545;
    color:white;
}

.btn-reset:hover{
    background:#c82333;
}
</style>


<div class="form-container">

    <div class="form-title">Admin Registration</div>

    <form action="<?php echo base_url('admin/user_save'); ?>" method="post">

        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" required>
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" required>
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" name="mobile_number" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label>Designation</label>
            <select name="designation" required>
                <option value="">Select Designation</option>
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
            </select>
        </div>

        <div class="button-group">
            <button type="submit" class="btn btn-register">Register</button>
            <button type="reset" class="btn btn-reset">Reset</button>
        </div>

    </form>

</div>