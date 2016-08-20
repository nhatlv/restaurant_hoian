<section id="subscribe" class="module module-dark">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="module-header wow fadeInUp">
                    <h2 class="module-title">Subscribe</h2>
                    <h3 class="module-subtitle">Subscribe to our newsletter</h3>
                </div>
            </div>
        </div><!-- .row -->

        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">
                <form id="subscription-form" role="form" novalidate>
                    <div class="row">

                        <div class="col-sm-6 form-group">
                            <label class="sr-only" for="sname">Name</label>
                            <input type="text" id="sname" class="form-control" name="sname" placeholder="Name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label class="sr-only" for="ssurname">Surname</label>
                            <input type="text" id="ssurname" class="form-control" name="ssurname" placeholder="Surname" required data-validation-required-message="Please enter your surname.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-sm-12 form-group">
                            <label class="sr-only" for="semail">Your Email</label>
                            <input type="email" id="semail" name="semail" class="form-control" placeholder="Your Email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-default btn-custom-2">Subscribe</button>
                        </div>

                    </div><!-- .row -->
                </form>
                <!-- Ajax response -->
                <div id="subscription-response" class="ajax-response"></div>
            </div>

        </div><!-- .row -->

        <div class="row">
            <div class="col-md-12 text-center long-up">
                <ul class="social-links">
                    <li><a href="#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="wow fadeInUp" data-wow-delay=".3s"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </div><!-- .row -->

    </div><!-- .container -->
</section>