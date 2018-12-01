<?php
/*
 * Template Name: Contact Page
 */
?>

<?php get_header();?>

<div class="intro jIntro">
  <div class="image-cover" id="contact-intro-slider01">
    <div class="vcenter text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="voffset50"></div>
              <p class="pretitle invert superbig">work with us</p>
              <div class="voffset80"></div>
              <h1 class="primary-title invert"><strong>or just say hello!</strong></h1>
              <div class="voffset80"></div>
              <p class="post-primary-title invert">we are located in</p>
              <div class="voffset10"></div>
              <p class="subtitle address invert">59 Railway Parade, Mt Lawley <br> Portland, OR 97201-5847</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container container-full">
    <div class="row row-no-gutter">
      <div class="col-md-6">
        <div id="map"></div>
      </div>
      <div class="col-md-6">
        <div class="contact-basic">
          <div class="voffset400"></div>
          <div class="vcenter text-center">
            <p class="pretitle">phone</p>
            <div class="voffset20"></div>
            <p>1.800.321.9876</p>
            <div class="voffset50"></div>
            <p class="pretitle">email</p>
            <div class="voffset20"></div>
            <p><a href="mailto:hello@rebirthdigital.com" class="mailto">hello@rebirthdigital.com</a></p>
          </div>
        </div>
        <div class="contact-form bg-cream">
          <div class="voffset400"></div>
          <div class="vcenter text-center">
            <p class="pretitle">contact</p>
            <div class="voffset40"></div>
            <form>
              <div class="form-group inline">
                <input type="text" class="form-control" id="inputName" placeholder="name">
              </div>
              <div class="form-group inline">
                <input type="email" class="form-control" id="inputEmail" placeholder="email address">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" id="inputMessage" placeholder="message"></textarea>
              </div>
              <div class="voffset20"></div>
              <button type="submit" class="btn btn-arrow">Send message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- contenct with us -->
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="voffset70"></div>
            <p class="pretitle">Connect with us</p>
            <ul class="social-links">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container-fluid">
        <div class="voffset30"></div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="voffset30"></div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/demo/logo.png" alt="logo">
            <div class="voffset20"></div>
            <p>Rebirth is a digital agencystriving to bring your ideas to life by givin it that extra feel.</p>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="voffset30"></div>
            <h5 class="title-small">Browse</h5>
            <div class="voffset20"></div>
            <ul class="list-menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Service</a></li>
              <li><a href="work.html">Work</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="work-detail.html">Work Single</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="post.html">Blog Detail</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="voffset30"></div>
            <h5 class="title-small">Contact us</h5>
            <div class="voffset20"></div>
            <p class="contact-link fa fa-envelope-o">info@rebirth.com</p>
            <p class="contact-link fa fa-mobile">1.800.321.4789</p>
            <p class="contact-link fa fa-map-marker">San Francisco Office <br> 425 2nd St, Suite 100, <br> CA 94107</p>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="voffset30"></div>
            <h5 class="title-small">Stay intouch</h5>
            <div class="voffset20"></div>
            <p class="info-newsletter">Sing up for Rebirth newsletter to stay up to date</p>
            <div class="voffset20"></div>
            <form action="mail.php" method="post" id="contactform" class="contact-form">
              <input type="email" id="email" name="email" placeholder="email" class="required email">
              <input type="submit" class="btn btn--alt" value=">">
            </form>
          </div>
        </div>
        <div class="voffset30"></div>
      </div>
    </footer>

<?php get_footer();?>