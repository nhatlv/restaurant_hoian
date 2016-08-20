<section id="reservations" class="module">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="module-header wow fadeInUp">
                    <h2 class="module-title">Make a reservation</h2>
                    <h3 class="module-subtitle">Book a table</h3>
                </div>
            </div>
        </div><!-- .row -->

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">

                <form id="booking-form" role="form" data-mobiletimepiker="On" novalidate>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="sr-only" for="bname">Name</label>
                            <input type="text" id="bname" class="form-control" name="bname" placeholder="Name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label class="sr-only" for="bphone">Phone</label>
                            <input type="number" id="bphone" class="form-control" name="bphone" placeholder="Phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div><!-- .row -->

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="sr-only" for="bemail">Email</label>
                            <input type="email" id="bemail" class="form-control" name="bemail" placeholder="Email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block"></p>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label class="sr-only" for="bpeople">How many people?</label>
                            <input type="text" id="bpeople" class="form-control" name="bpeople" placeholder="How many people?" required data-validation-required-message="Please enter number of guests.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div><!-- .row -->

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="sr-only" for="bdate">Date</label>
                            <input type="text" id="bdate" class="form-control" name="bdate" placeholder="Date" required data-validation-required-message="Please enter reservation date.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label class="sr-only" for="btime">Time</label>
                            <input type="text" id="btime" class="form-control" name="btime" placeholder="Time" autocomplete="off" required data-validation-required-message="Please enter your arrival time.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div><!-- .row -->

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <textarea class="form-control" id="bmessage" name="bmessage" rows="4" placeholder="Special Requests" required data-validation-required-message="Please enter your special requests."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div><!-- .row -->

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-custom-1">Submit</button>
                        </div>
                    </div><!-- .row -->

                </form>
                <!-- Ajax response -->
                <div id="booking-response" class="ajax-response"></div>

            </div>
        </div><!-- .row -->

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="devider">
                    <img src="{{ asset('/images/divider-down.svg')}}" alt="">
                </div>
            </div>
        </div><!-- .row -->

    </div><!-- .container -->
</section>
