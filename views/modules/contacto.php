
<div class="page">
      <!-- Page Header-->
      <?php include ("header.php"); ?>
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(views/images/jumbotron-1-1919x953.jpg);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Contacto</h2>
          <div class="breadcrumbs-custom-subtitle">Consulta nuestros contactos o escríbenos un mensaje</div>
        </div>
      </section>
      <!-- Blurb minimal-->
      <section class="section section-md bg-default">
        <div class="container">
          <div class="row row-40">
            <div class="col-sm-6 col-md-4">
              <div class="box-lined">
                <div class="box-lined-body">
                  <h6 class="box-lined-title">Correo & Teléfono</h6>
                  <ul class="box-lined-list">
                    <li><a class="big link-default" href="mailto:info@syswa.net">info@syswa.net</a></li>
                    <li><a class="big link-default" style="cursor:pointer;" href="https://api.whatsapp.com/send/?phone=56974684680&text&app_absent=0" target="_blank">+56 9 7468 4680</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-lined">
                <div class="box-lined-body">
                  <h6 class="box-lined-title">Ubicaciones principales</h6>
                  <ul class="box-lined-list">
                    <li class="big">Chile, Santiago</li>
                    <li class="big">Aragua, Venezuela</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="box-lined">
                <div class="box-lined-body">
                  <h6 class="box-lined-title">Redes sociales</h6>
                  <ul class="list-inline list-inline-sm">
                    <li><a class="icon icon-sm icon-bordered link-default mdi mdi-facebook" href="https://www.facebook.com/SYSWA-109541307469686" target="_blank"></a></li>
                    <li><a class="icon icon-sm icon-bordered link-default mdi mdi-instagram" href="https://www.instagram.com/syswanet/" target="_blank"></a></li>
                    <li><a class="icon icon-sm icon-bordered link-default mdi mdi-linkedin" href="https://www.linkedin.com/company/syswa/"  target="_blank"></a></li>
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
          <h4>PÓNGASE EN CONTACTO CON NOSOTROS</h4>
          <p class="big">Llenando este formulario, se pondria en contacto directo con nuestro equipo.</p>
          <!-- RD Mailform-->
          <form class="rd-form rd-mailform form-boxed" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-50">
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Nombre</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">Correo</label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-phone"></div>
                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone">Teléfono</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-message-outline"></div>
                  <label class="form-label" for="contact-message">Mensaje</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button class="button button-default" type="submit">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- Page Footer-->
      <script>
        $(document).ready(function(){
          $(".rd-nav-item").removeClass("active")
          $("#contact").addClass("active")
        });
      </script>
	  <?php include ("footer.php") ?>
    </div>

	
	