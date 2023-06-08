<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Account Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="CSS\style.css">
        <link rel="icon" href="Images\Logo.png" type="image/x-icon">
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <img class="img-fluid" src="Images\logo.png" alt="Logo" width="55" height="55">
                <a class="navbar-brand">
                    Receipt Recorder
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="homepage"><i class="fa-solid fa-house"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Help"><i class="fa-solid fa-circle-question"></i>
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About"><i class="fa-solid fa-users"></i>
                                About Us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-bars"></i>
                                Transactions
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="NewTransaction">Add New Transaction</a></li>
                                <li><a class="dropdown-item" href="PreviousTransaction">View Previous Transactions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i>
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ViewAccount">View Account</a></li>
                                <li><a class="dropdown-item" href="EditAccount">Edit Account</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <a class="dropdown-item" style="cursor: pointer;">
                                        <button type="submit" style="background: none; border: none;">Sign out</button>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation Bar -->

        <!-- Main content -->
    <main class="form-signin w-100 m-auto">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row align-items-md-stretch">
            <div class="col-md-12">
                <div class="h-100 p-5 bg-body-tertiary border rounded-5">
                <!-- Changed form to use Laravel's POST method for submission -->
        <?php echo e(Form::open(['url' => '/EditAccount', 'id' => 'profileForm'])); ?>

        <center>
            <h2>My Profile</h2>
            <hr><br>
            <div class="form-floating">
                <?php echo e(Form::text('firstName', $user->first_name, ['class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'firstName'])); ?>

                <label for="firstName">First Name</label>
            </div>
            <div class="form-floating">
                <?php echo e(Form::text('lastName', $user->last_name, ['class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'lastName'])); ?>

                <label for="lastName">Last Name</label>
            </div>
            <div class="form-floating">
                <?php echo e(Form::date('dob', $user->DoB, ['class' => 'form-control', 'placeholder' => 'Date Of Birth', 'id' => 'dob'])); ?>

                <label for="dob">Date of Birth</label>
            </div>
            <div class="form-floating">
                <?php echo e(Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email'])); ?>

                <label for="email">Email</label>
            </div>
            <?php echo e(Form::submit('Save Changes', ['class' => 'button', 'onclick' => 'return confirm("Are you sure you want to save your changes?")'])); ?>

        </center>
        <?php echo e(Form::close()); ?>

        </div>
        </div>
    </div>
</main>

        <!-- Footer -->
        <footer class="bg-dark text-center text-lg-start" style="background-color:#0c0716; color: white;">
            <div class="container p-1">
                <div class="row">
                    <div class="col-lg-6 me-auto mb-2 mb-lg-0">
                        <img class="img-fluid" src="Images\logo.png" alt="Logo" width="55" height="55">
                        &copy; 2023 Receipt Recorder Company, Inc
                    </div>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-3">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-light" style="text-decoration: none;">Terms & Condition</a>
                            </li>
                            <li>
                                <a href="#" class="text-light" style="text-decoration: none;">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

        <!-- Java Script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html><?php /**PATH C:\laragon\www\project2\resources\views/EditAccount.blade.php ENDPATH**/ ?>