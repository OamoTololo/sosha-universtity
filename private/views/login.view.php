<?php $this->view('includes/header') ?>

    <div class="container-fluid">

       <div class="login p-4 mt-5 mx-auto shadow rounded">
           <h2 class="schoolLabel text-center">Sosha University</h2>
           <img src="assets/images/logo2.jpg" class="logoImage border border-dark d-block mx-auto rounded-circle">
           <h3 class="loginLabel mt-2 text-center">Login</h3>
           <input class="form-control" type="email" name="email" placeholder="Email" autofocus />
           <input class="form-control mt-3" type="password" name="password" placeholder="Password" />
           <button class="loginButton mt-3 btn btn-primary">Login</button>
       </div>

    </div>

<?php $this->view('includes/footer') ?>