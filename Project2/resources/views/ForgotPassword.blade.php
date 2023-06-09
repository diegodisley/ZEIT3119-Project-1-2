<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="CSS\style.css">
        <link rel="icon" href="Images\Logo.png" type="image/x-icon">
    </head>
    <body>
        <!-- Start Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <img class="img-fluid" src="Images\logo.png" alt="Logo" width="55" height="55">
                <a class="navbar-brand" href="index">Receipt Recorder</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Empty Div required to align the nav bar to the left -->
                </div>
            </div>
        </nav>
        <!-- End Navigation Bar -->

        <!-- Main content -->
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center
                min-vh-100">
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="mb-4">
                                <h2>Forgot Password?</h2>
                                <p class="mb-2">Enter your registered email ID to reset the password
                                </p>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email"
                                        required="">
                                </div>
                                <div class="mb-3 d-grid">
                                    <a href="index" class="w-100 btn btn-lg btn-primary" type="submit" style="background-color:rgb(65, 125, 238);">Send Password</a>

                                </div>
                                <p>A password reset will be sent to your registered email.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
</html>