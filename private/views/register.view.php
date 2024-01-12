<?php $this->view('includes/header') ?>
<?php $this->view('includes/navbar') ?>

    <div class="container-fluid">

        <div class="register p-4 mt-5 mx-auto shadow rounded">
            <h2 class="schoolLabel text-center">Sosha University</h2>
            <img src="assets/images/logo2.jpg" class="logoImage border border-dark d-block mx-auto rounded-circle">
            <h3 class="loginLabel mt-2 text-center">Register User</h3>

            <input class="form-control mt-2" type="text" name="name" placeholder="Name" />
            <input class="form-control mt-2" type="text" name="surname" placeholder="Surname" />
            <input class="form-control mt-2" type="email" name="email" placeholder="Email" />
            <select name="" id="" class="form-control mt-2">
                <option>--Select a Gender--</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="other">Other</option>
            </select>
            <select name="" id="" class="form-control mt-2">
                <option>--Select User Type--</option>
                <option value="superAdmin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="lecturer">Lecturer</option>
                <option value="receptionist">Receptionist</option>
                <option value="student">Student</option>
            </select>
            <input class="form-control mt-2" type="password" name="password" placeholder="Password" />
            <input class="form-control mt-2" type="password" name="confirmPassword" placeholder="Confirm Password" />

            <button class="loginButton mt-2 btn btn-primary">Register</button>
            <button class="cancelButton mt-2 btn btn-warning float-right text-white">Cancel</button>
        </div>
    </div>

<?php $this->view('includes/footer') ?>