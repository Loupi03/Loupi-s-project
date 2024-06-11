<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>LOUPI</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="icon" href="../Project/assets/images/Loupi.png">
    <style><?php include 'contact.css';
                  include 'fbi.css';
    ?>
    </style>
</head>

<body>

  <?php include 'menu.php'; ?>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="index.php">Home</a> > Contact Us</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Say Hello!</h2>
            </div>
            <p>Welcome to Loupi Gaming, your ultimate destination for all things gaming! We're dedicated to providing
              you with the latest news, reviews, and insights from the world of gaming. <br>Get in touch with Loupi
              Gaming! Whether you have questions, feedback, or just want to say hello, we're here for you. </p>
            <ul>
              <li><span>Address</span> 159 NR EL WAHDA, MOHAMMEDIA, MOROCCO</li>
              <li><span>Phone</span> +212 604 414 715</li>
              <li><span>Email</span> othmane.ibaghnane@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10788.411630176233!2d-7.3894991152840825!3d33.67807851971302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1706631160672!5m2!1sfr!2sma"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-12">
                  <form    action="https://formspree.io/f/xnqekggr" id="contact-form" method="post">
                    <div class="row">
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="name" placeholder="Your Name..." required>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="surname" placeholder="Your Surname..." required>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="email" name="email" placeholder="Your E-mail..." required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="subject" placeholder="Subject...">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea placeholder="Your Message" name="message"></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="col-lg-12">
          <p>Copyright ©LOUPI Gaming Company. <br>All rights reserved. &nbsp;&nbsp; </p>
        </div>
      </div>
    </footer>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>