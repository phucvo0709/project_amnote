<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center m-auto">
                            <a href="../.">
                                <span><img src="./../public/images/logo.png" alt="" height="22"></span>
                            </a>
                            <div class="mt-2 mb-2">
                                {if isset($errors)}
                                    {foreach $errors as $error}
                                        <p class="text-danger mt-2">{$error}</p>
                                    {/foreach}
                                {else}
                                    {if {$alert} == null}
                                        <p class="text-muted mt-2">Enter your email and password to access admin panel.</p>
                                    {else}
                                        {$alert}
                                    {/if}
                                {/if}
                            </div>
                        </div>

                        <form method="post">

                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input class="form-control" type="email" id="email" name="email" required
                                       value="{if isset($smarty.post.btn_login)}{$smarty.post.email}{/if}" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password"
                                       placeholder="Enter your password" required>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit" name="btn_login"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        {*<p class="text-muted"> <a href="pages-register.html" class="text-muted ml-1">Forgot your password?</a></p>*}
                        <p class="text-muted">Don't have an account? <a href="register" class="text-dark ml-1"><b>Sign Up</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->