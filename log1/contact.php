<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/newbgimg.css">
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/header-3.css" />
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

  </head>
     <!-- Header Start -->
     <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <div class="site-header__start">
          <a href="index.html" class="brand">Audio Bucket</a>
        </div>
        <div class="site-header__end">
          <nav class="nav">
            <button class="nav__toggle" aria-expanded="false" type="button">
              menu
            </button>
            <ul class="nav__wrapper">
              <li class="nav__item"><a href="index.php">Home</a></li>
              <li class="nav__item"><a href="service.php">Service</a></li>
              <li class="nav__item"><a href="protfolio.php">Protfolio</a></li>
              <li class="nav__item"><a href="contactdetails.php">Contact</a></li>
              <li class="nav__item"><a href="sign in.php">Sign in</a></li>
            </ul>
          </nav>
          <div class="search">
            <button class="search__toggle" aria-label="Open search">
              Search
            </button>
            <form class="search__form" action="">
              <label class="sr-only" for="search">Search</label>
              <input
                type="search"
                name=""
                id="search"
                placeholder="Search"
              />
            </form>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->



    <script src="js/header-3.js"></script>

  <body class="contactbody">
    <div class="content">
    
        <div class="container">
          <div class="row align-items-stretch justify-content-center no-gutters">
            <div class="col-md-7">
              <div class="form h-100 contact-wrap p-5">
                <h3 class="text-center">Contact us</h3>
                <form class="mb-5" method="post" id="contactForm" name="contactForm">
                  <div class="row">
                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Name *</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                    </div>
                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Email *</label>
                      <input type="email" class="form-control" name="email" id="email"  placeholder="Your email">
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-12 form-group mb-3">
                      <label for="budget" class="col-form-label">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Your subject">
                    </div>
                  </div>
    
                  <div class="row mb-5">
                    <div class="col-md-12 form-group mb-3">
                      <label for="message" class="col-form-label">Message *</label>
                      <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                    </div>
                  </div>

                  <div class="upload">
                      <button type="button" class="btn-w">
                      <i class="fa fa-upload"></i> Upload File
                      <input type="file">
                    </button>
                  </div>
  <br><br> 
                  <div class="row justify-content-center">
                    <div class="col-md-5 form-group text-center">
                      <input type="submit" value="Send Message" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>
    
                <div id="form-message-warning mt-4"></div> 
                <div id="form-message-success">
                  Your message was sent, thank you!
                </div>
    
              </div>
            </div>
          </div>
        </div>
    
      </div>
        
        
    
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>

        <script></script>

  </body>

  

</html>
