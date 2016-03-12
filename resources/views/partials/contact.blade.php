<!-- CONTACT SECTION -->
<section id="contact" class="section-wrap">
    <div class="container">
        <div class="row">

            <!-- Contact Detail and Social Media -->
            <div class="col-md-4 col-sm-4 contact-inner">
                <address class="contact-wrap">
                    21053 Castellanza VA<br>
                </address>

                <div class="contact-wrap">
                    <span>Email: <a href="mailto:#">dvdcrenna@gmail.com</a></span>
                    <span>Telefono: +39 346 0331 400</span>
                </div>

                <ul class="list-unstyled list-inline social">
                    <li><a class="social-icon twitter-icon" href="https://twitter.com/davidecrenna" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="social-icon facebook-icon" href="https://it-it.facebook.com/DavideCrenna" target="_blank"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>

            <!-- Contact Form -->
            <form id="contact-form" class="col-md-8 col-sm-8 contact-form" action="includes/mail.php" method="post" data-parsley-errors-messages-disabled>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="sr-only"></label>
                            <input id="name" name="name" class="form-control input-lg required" placeholder="Name" type="text">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="sr-only"></label>
                            <input id="email" name="email" class="form-control input-lg required" placeholder="Email" type="email">
                        </div>
                    </div>
                </div><!-- .row -->

                <div class="form-group">
                    <textarea name="message" class="form-control required" rows="6" placeholder="Message"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default pull-right">Send</button>
                </div>
            </form>

            <!-- Message sending -->
            <div id="contact-sending-success" class="contact-notif success">Message has been successfully sent.</div>
            <div id="contact-sending-error" class="contact-notif error">Error in sending message. Please try again.</div>
            <div id="contact-sending" class="contact-notif">Sending message. Please wait...</div>

        </div><!-- .row -->
    </div><!-- container -->

    <!-- Google Map -->
    <div class="map-wrap">
        <div id="map" data-map-lat="45.611126" data-map-lng="8.8806121" data-map-mark="21053 Castellanza VA"></div>
    </div>

</section>
<!-- CONTACT SECTION END -->