<!DOCTYPE html>
<html>
  <head>
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />`
    <title>Naga for IT solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/ionicons.css" rel="stylesheet">
    <link href="js/source/jquery.fancybox.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fancy-buttons.css" rel="stylesheet">
    <link href="css/style-contact.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".navbar-fixed-top">
    <?php      
      require 'PHPMailerAutoload.php';
      $mail = new PHPMailer;
      if(@$_POST["submit"]) {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
        if(!$_POST["name"]) {
            @$error.="<br>Please enter your name";
        }
         if(!$_POST["email"]) {
            @$error.="<br>Please enter your email";
        }
        if ($_POST["email"]!="" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
            @$error.="<br>Please enter a valid email adddress";
        }
         if(!$_POST["subject"]) {
            @$error.="<br>Please enter your subject";
        }
         if(!$_POST["message"]) {
            @$error.="<br>Please enter your message";
        }
        if (@$error) {
        @$result=
        '<div class="alert alert-danger alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>There were errors in your form:'.$error.'</div>';
        $saveName = $_POST['name'];
        $saveEmail = $_POST['email'];
        $saveSubject = $_POST['subject'];
        $saveMessage = $_POST['message'];
        }
        else {
          $mail = new PHPMailer;                            // Enable verbose debug output
          $mail->CharSet = 'UTF-8';
          $mail->Encoding = 'base64';
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'naga.ly';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'noreply@naga.ly';                 // SMTP username
          $mail->Password = 'NgD3m^K2d&eM';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 25;                                    // TCP port to connect to
          $mail->setFrom($email, $name);
          $mail->addAddress("info@naga.ly", "info");     // Add a recipient              // Name is optional
          $mail->addReplyTo($email, $name);
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = $subject;
          $mail->Body    = '<b>'.$message.'</b>';
          if($mail->send()) {
            $result=
              '<div class="alert alert-success alert-dismissable" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Form submitted!</div>';
          }
          else {
            $result=
              '<div class="alert alert-danger alert-dismissable" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry, there was an error sending your message.  Please try again later.</div>';
          }
        }
      }
    ?>
    <div class="navbar navbar-default navbar-fixed-top scroll-me">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand"><img src="img/nagaLogo.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#header">HOME</a></li>
            <li><a href="#works">WORK</a></li>
            <li><a href="#aboutUs">ABOUT US</a></li>
            
            <li><a href="#team">TEAM</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="index.php">العربية</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="header">
      <div class="overlay">
        <div class="container">
          <div class="row scroll-me">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 text-center">
              <h1 data-scroll-reveal="enter from the bottom after 0.2s">NAGA FOR IT SOLUTIONS 
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="works">
      <div class="container">
        <div class="row text-center">
          <div data-scroll-reveal="enter from the bottom after 0.2s" class="col-md-6 col-md-offset-3 pad-bottom">
            <h2><strong>Vision experience and affiliation</strong></h2>                    Providing technical solutions to our customers by supplying highly effective tools & strategies to help manage their businesses at the most affordable prices.
          </div>
        </div>
        <div class="row text-center">
          <div data-scroll-reveal="enter from the bottom after 0.4s" class="col-md-12 pad-bottom">
            <div class="caegories">
            <a href="#" data-filter="*" class="active btn btn-info btn-sm">All</a>
            <a href="#" data-filter=".bootstrap" class="btn btn-info btn-sm">Bootstrap</a>
            <a href="#" data-filter=".nodejs" class="btn btn-info btn-sm">Node.js</a>
            <a href="#" data-filter=".wordpress" class="btn btn-info btn-sm">Wordpress</a>
            </div>
          </div>
        </div>
        <div id="portfolio-div" class="row text-center">
          <div class="col-md-4 col-sm-4 bootstrap nodejs">
            <div class="work-wrapper"><a title="A bootstrap view of one of our Applicatons." href="img/portfolio/1.jpg" class="fancybox-media"><img src="img/portfolio/1.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 nodejs bootstrap">
            <div class="work-wrapper"><a title="A modal view to a nodejs application that we are building." href="img/portfolio/2.jpg" class="fancybox-media"><img src="img/portfolio/2.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 wordpress">
            <div class="work-wrapper"><a title="A website built using Wordpress." href="img/portfolio/3.jpg" class="fancybox-media"><img src="img/portfolio/3.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 bootstrap nodejs">
            <div class="work-wrapper"><a title="A bootstrap design for a login screen to one of our applications." href="img/portfolio/4.jpg" class="fancybox-media"><img src="img/portfolio/4.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 nodejs ">
            <div class="work-wrapper"><a title="We are proud that we use Nodejs in our applications." href="img/portfolio/5.jpg" class="fancybox-media"><img src="img/portfolio/5.jpg" alt="" class="img-responsive"></a></div>
          </div>
          <div class="col-md-4 col-sm-4 wordpress">
            <div class="work-wrapper"><a title="We use wordpress to design your static webisites." href="img/portfolio/6.jpg" class="fancybox-media"><img src="img/portfolio/6.jpg" alt="" class="img-responsive"></a></div>
          </div>
        </div>
      </div>
    </section>
     <section id="aboutUs">
      <div class="container">
        <div class="row text-center">
          <div data-scroll-reveal="enter from the bottom after 0.2s" class="col-md-6 col-md-offset-3 pad-bottom">
            <h2><strong>About us</strong></h2> We launched Naga in 2014 to provide the highest standard of professional solutions in the area. We help Libyan and international companies to fully grasp their complications and design and create solutions that satisfy their demands. With every one of our projects our dedication to excellence is consistent, regardless of the project or the circumstances.

          </div>
        


       </section>
    <div id="testimonial" data-scroll-reveal="enter from the bottom after 0.2s">
      <div class="overlay">
      	
        <div class="container">
          <div class="row text-center">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4"><br>
              <p>
              <h3>  Software programming & Web development </h3>
               </br>
We develop dependable computer software and technological solutions which are fully scalable to satisfy any market demand. We utilize Agile development methodologies to guarantee customer and end user input, which is fundamental to the project from the start. This helps to make sure that the final product is exactly what is required.
          </br>
          <h3>  Static Websites design </h3>
               </br>
Given that a lot of organizations depend on static websites to display their activities and contact details as well as to interact with their clientele through email, therefore Naga provides expert website layouts to display great static sites and contemporary look with the activities of the organization and satisfy their requirements in interacting with their clients, and consider the high quality website design at reasonable prices.
          </br>
         <h3> Dynamic Websites </h3>
          </br>
Naga provides its clients with a selection of unique website designs with performance and high quality where we analyze the character of the company's operations. After that, we pursue together with the client, the creation of initial designs, followed by complete design phase where its employees depending on more powerful dependable resources and computer software in the design process, to provide the customer with a totally dependable product. 
            </br>
          <h3>  Mobile apps </h3>
    </br>
Programming as well as the creation of interactive computer software together with high quality apps for the many smartphones, such as Android apps. The most impressive technical criteria and superior quality accomplished every goal of private organizations, institutions and government using preparation, design, software encoding and creation, assessment and research followed by publishing together with marketing.
            

              </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <section id="team">
      <div class="container">
        <div data-scroll-reveal="enter from the bottom after 0.2s" class="row text-center">
          <div class="col-md-6 col-md-offset-3 pad-bottom">
            <h2><strong>AWESOME TEAM</strong></h2>                    
          </div>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.4s" class="row pad-bottom">
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="https://www.linkedin.com/pub/abdullah-elamir/b6/68a/997" target="_blank" class="media-left"><img src="img/11.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading"> Abdullah Elamir </h3>  Abdullah is the co-founder & a back-end developer,he has experience in many languages such as Java ,python . He has been awarded a Bachelor's degree in computer science from the University of Tripoli
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="https://www.linkedin.com/pub/ahmed-fituri/1b/603/43a
" class="media-left" target="_blank"><img src="img/12.jpg" alt="Ahmed Fituri" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Ahmed Fituri</h3>Ahmed is the founder, CEO, & head of development of Naga. As of December 2012, He has been awarded a master's degree in computer science from the University of San Francisco. In the recent years Ahmed has been employed by the  High National Election Commission in Libya as a tech consultant.
              </div>
            </div>
          </div>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.6s" class="row pad-bottom">
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="https://www.linkedin.com/pub/faisal-abdulhafidh/b7/77/5b1" target="_blank" class="media-left"><img src="img/13.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Faisal Rahil</h3>       Faisal is the co-founder & a front-end developer. He has been awarded a Bachelor's degree in computer science from the University of Tripoli                 
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="https://www.linkedin.com/pub/doss-aburass/b7/649/961" target="_blank" class="media-left"><img src="img/14.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">AbdulQudos aboras</h3>      AbdulQudos is the co-founder & a front-end developer . He has been awarded a Bachelor's degree in computer science from the University of Tripoli                        
              </div>
            </div>
          </div>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.6s" class="row pad-bottom">
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="https://www.linkedin.com/pub/farouk-shouba/b6/690/230" target="_blank" class="media-left"><img src="img/17.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Farouck Shouba</h3>                           
                      Farouk Shouba is the co-founder , front-end developer and systems analyst . He has been awarded a Bachelor's degree in computer science from the University of Tripoli
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="https://www.linkedin.com/pub/aladdin-suni/a1/772/86a" target="_blank" class="media-left"><img src="img/18.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Aladdin Sonni</h3>   Aladdin is the co-founder & a front-end developer . He has been awarded a Bachelor's degree in computer science from the University of Tripoli                          
              </div>
            </div>
          </div>
        </div>
        <div data-scroll-reveal="enter from the bottom after 0.6s" class="row pad-bottom">
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="https://www.linkedin.com/pub/mohamed-ali/a7/845/472" target="_blank" class="media-left"><img src="img/44.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">Mohammed Al Gemati</h3>   Mohammed is the co-founder & a back-end developer . He has been awarded a Bachelor's degree in computer science from the University of Tripoli                           
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="media"><a href="https://www.linkedin.com/pub/عبد-العظيم-عقيل/bb/590/a7/en" target="_blank" class="media-left"><img src="img/20.jpg" alt="" class="img-circle"></a>
              <div class="media-body">
                <h3 class="media-heading">abdulladem frag</h3>    Abdo is the co-founder & a back-end developer . He has been awarded a Bachelor's degree in computer science from the University of Tripoli                                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="overlay">
        <div data-scroll-reveal="enter from the bottom after 0.4s" class="container contact center">
          <div class="col-md-3 center section-title">
            <h2>Address 
              <h4 id="h4">Triq Asour, Tripoli,Libya</h4>
              <h4 id="h4"><strong>Phone Number : </strong>
                <p></p>021-3631170
                <p></p>091-1255848
              </h4>
              <h4 id="h4"><strong>Email : </strong>info@naga.ly</h4>
               <h4 id="h4"><strong>Mailbox : </strong>5107  General Mailbox Tripoli</h4>
            </h2>
            <div class="col-xs-12"><br><br></div>
          </div>
          <div class="col-md-7 col-md-offset-2">
            <div class="col-md-10 col-md-offset-1 center section-title">
              <h2>Leave a message</h2>
              <?php 
              @header("location: index.php#contact");
              echo @$result; ?>
            </div>
            <div class="confirmation">
              <p><span class="fa fa-check"></span></p>
            </div>
            <form method="POST" class="contact-form support-form">
              <div class="col-lg-12">
                <div id="error"></div>
                <input id="contactName" type="text" name="name" placeholder="Name" class="input-field form-item field-name">
                <input id="contactEmail" type="email" name="email" placeholder="Email" class="input-field form-item field-email">
                <input id="contactSubject" type="text" name="subject" placeholder="Subject" class="input-field form-item field-subject">
                <textarea id="contactMessage" rows="7" name="message" placeholder="Message" class="textarea-field form-item field-message"></textarea>
              </div>
                <input type="submit" name="submit" value="Send message" class="fancy-button button-line button-white large zoom subform">
            </form>
          </div>
        </div>
           <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d418.8739932289026!2d13.187157639967353!3d32.87193251924807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x13a892d86d3e2a65%3A0xbb41ea56b97f723!2zTmFnYSBmb3IgSVQgU29sdXRpb25z2IwgU2hhcmlhIGFsLUphbGEnYSwg2LfYsdin2KjZhNiz!3m2!1d32.871838!2d13.187102099999999!5e0!3m2!1sar!2sly!4v1436799880143" height="500" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
      </div>
    </section>
 



 
    <footer>Copyright reserved 2015 Naga.ly</footer>
  </body>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-notify.min.js"></script>
  <script src=""></script>
  <script src="js/nprogress.js"></script>
  <script>
    NProgress.start();
    $(window).load(function() {
      NProgress.done(); 
    });
  </script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/source/jquery.fancybox.js"></script>
  <script src="js/jquery.isotope.js"></script>
  <script src="js/scrollReveal.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/jquery.vegas.min.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/custom-contact.js"></script>
  <!--<script src="js/jquery.validate.min.js"></script>
  <script src="js/contactValidation.js"></script>
  <script src="js/contactValidationArabic.js"></script>-->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-65721204-1', 'auto');
   ga('send', 'pageview');

  </script>
</html>