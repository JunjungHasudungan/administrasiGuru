
    <div class=" relative col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-login">
        <div class="logo-login">
            <em class="fas fa-users"></em>
        </div>
            <form action="#" class="inner-login" method="POST">
                @csrf
            <h3 class="text-center title-login">Welcome To our Website</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <input type="submit" class="btn  btn-primary btn-block btn-custom-green" value="LOGIN" />

                <div class="text-center forget">
                    <p>Forgot Password ?</p>
                </div>
            </form>
        </div>
    </div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
