
<div class="page">
      <!-- Page Header-->
      <?php include ("header.php"); ?>
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(views/images/breadcrumbs-bg-7.jpg);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Contacts</h2>
          <div class="breadcrumbs-custom-subtitle">View our contacts or write us a message</div>
        </div>
      </section>
      <!-- Blurb minimal-->
      <section class="section section-md bg-default">
        <div class="container">
          <div class="row row-40">
            <div class="col-sm-6 col-md-4">
              <div class="box-lined">
                <div class="box-lined-body">
                  <h6 class="box-lined-title">Email & telephone</h6>
                  <ul class="box-lined-list">
                    <li><a class="big link-default" href="mailto:#">info@demolink.org</a></li>
                    <li><a class="big link-default" href="tel:#">1-300-123-1234</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-lined">
                <div class="box-lined-body">
                  <h6 class="box-lined-title">Office</h6>
                  <ul class="box-lined-list">
                    <li class="big">1418 Riverwood Drive, Suite 3845 Cottonwood, CA 96022 United States</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="box-lined">
                <div class="box-lined-body">
                  <h6 class="box-lined-title">Socials</h6>
                  <ul class="list-inline list-inline-sm">
                    <li><a class="icon icon-sm icon-bordered link-default mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-sm icon-bordered link-default mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon icon-sm icon-bordered link-default mdi mdi-behance" href="#"></a></li>
                    <li><a class="icon icon-sm icon-bordered link-default mdi mdi-twitter" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Get in touch with us-->
      <section class="section section-md bg-default">
        <div class="container">
          <h4>Get in touch with us</h4>
          <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
          <!-- RD Mailform-->
          <form class="rd-form rd-mailform form-boxed" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-50">
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Name</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">E-mail</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-phone"></div>
                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-message-outline"></div>
                  <label class="form-label" for="contact-message">Message</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button class="button button-default" type="submit">Send</button>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- Page Footer-->
	  <?php include ("footer.php") ?>
    </div>

	
	