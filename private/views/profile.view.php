<?php $this->view('includes/header') ?>
<?php $this->view('includes/navbar') ?>

    <div class="profile container-fluid p-4 shadow mx-auto">
        <?php $this->view('includes/crumbs') ?>
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <img src="assets/images/womanLogo.png" class="womanLogo border border-dark d-block mx-auto rounded-circle">
                <h3 class="text-center">Tololo Mgidi</h3>
            </div>

            <div class="col-sm-8 col-md9 p-2">
                <table class="table table-hover">
                    <tr><th>Name:</th><td>Tololo</td></tr>
                    <tr><th>Surname:</th><td>Mgidi</td></tr>
                    <tr><th>Gender:</th><td>Female</td></tr>
                    <tr><th>Date Created:</th><td>2024-01-13</td></tr>
                </table>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Basic Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tests</a>
                </li>

            </ul>
        </div>

        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" id="search" placeholder="Search">
                </div>
            </form>
        </nav>

    </div>

<?php $this->view('includes/footer') ?>