<?php views('/layouts/auth/header.php') ?>

<div class="wrapper-page account-page-full">

    <div class="card">
        <div class="card-block">

            <div class="account-box">

                <div class="card-box p-5">
                    <h2 class="text-uppercase text-center pb-4">
                        <a href="index.html" class="text-success">
                            <span><img src="<?php echo assets('backend'); ?>/images/logo.png" alt="" height="26"></span>
                        </a>
                    </h2>

                    <form class="" action="#">

                        <div class="form-group m-b-20 row">
                            <div class="col-12">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                            </div>
                        </div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="form-group row m-b-20">
                            <div class="col-12">

                                <div class="checkbox checkbox-custom">
                                    <input id="remember" type="checkbox" checked="">
                                    <label for="remember">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                            </div>
                        </div>

                    </form>

                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
    </div>
</div>

<?php views('/layouts/auth/footer.php') ?>