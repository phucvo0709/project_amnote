
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center m-auto">
                            <a href="index.html">
                                <span><img src="public/assets/images/logo.png" alt="" height="22"></span>
                            </a>
                            <div class="mt-2 mb-2">
                            {if isset($errors)}
                                {foreach $errors as $error}
                                    <p class="text-danger mt-2">{$error}</p>
                                {/foreach}
                            {else}
                                {if {$alert} == null}
                                    <p class="text-muted mt-2">Don't have an account? Create free account</p>
                                {else}
                                    {$alert}
                                {/if}
                            {/if}
                            </div>
                        </div>

                        <form method="post">
                            <div class="form-group mb-3">
                                <label for="full_name">Full Name</label>
                                <input class="form-control" type="text" id="full_name" name="full_name"
                                       value="{if isset($smarty.post.btn_register)}{$smarty.post.full_name}{/if}" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input class="form-control" type="email" id="email" name="email" required
                                       value="{if isset($smarty.post.btn_register)}{$smarty.post.email}{/if}" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password"
                                       placeholder="Enter your password" required>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit" name="btn_register"> Sign Up </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Already have account? <a href="login" class="text-dark ml-1"><b>Log In</b></a></p>
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