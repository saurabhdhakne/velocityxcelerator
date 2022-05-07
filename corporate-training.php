<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://use.fontawesome.com/db006bf474.js"></script>

    <title>
      Velocity Xcelerator Pvt Ltd - Business Consultant | Leadership Training
      Company In Pune.
    </title>
  </head>
  <body>
    <!-- Loader -->

    <!-- <div
      class="loader d-flex align-items-center justify-content-center"
      id="loader"
    >
      <img src="./assets/loader.gif" width="200px" alt="loader icon" />
    </div> -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="ServiceModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="ServiceModal"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Services</h5>
            <button
              type="button"
              class="btn btn-danger close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body container">
            <div class="row p-2">
              <div class="col-12">
                <span class="text-E94D65">Program</span>
                <a href="edp" class="dropdown-item item mt-3">EDP</a>
                <a href="step-up" class="dropdown-item item mt-3">Step up</a>
              </div>
              <div class="col-12 mt-3">
                <span class="text-E94D65">Training</span>
                <a href="corporate-training" class="dropdown-item item mt-3">
                  Corporate Training
                </a>
                <a href="sales-training" class="dropdown-item item mt-3">
                  Sales Training
                </a>
                <a href="leadership-training" class="dropdown-item item mt-3">
                  Leadership Training
                </a>
                <a
                  href="communication-skill-training"
                  class="dropdown-item item mt-3"
                >
                  Communication skill Training
                </a>
                <a
                  href="personality-development-training"
                  class="dropdown-item item mt-3"
                >
                  Personality Development Training
                </a>
              </div>
              <div class="col-md-4 mt-3">
                <span class="text-E94D65">Consulting</span>
                <a href="business-consulting" class="dropdown-item item mt-3">
                  Business Consulting
                </a>
                <a href="sales-consulting" class="dropdown-item item mt-3">
                  Sales Consulting
                </a>
                <a href="hr-consulting" class="dropdown-item item mt-3">
                  HR Consulting
                </a>
                <a href="marketing-consulting" class="dropdown-item item mt-3">
                  Marketing skill Consulting
                </a>
                <a href="franchise-marketing" class="dropdown-item item mt-3">
                  Franchise Consulting
                </a>
                <a
                  href="distribution-consulting"
                  class="dropdown-item item mt-3"
                >
                  Distribution Consulting
                </a>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Sidenav -->
    <div id="mySidenav" class="sidenav">
      <i
        class="fa fa-close icon closebtn"
        role="button"
        onclick="closeNav()"
      ></i>
      <div class="text-center">
        <img src="./assets/icon.png" width="50%" alt="" />
        <div class="col-10 offset-1">
          <a href="/" class="pt-2 pb-2 active"><span>Home</span></a>
          <span href="#" class="pb-2">
            <div class="dropdown">
              <a
                href="#"
                class="dropdown-toggle pt-2 pb-2"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                About Us
              </a>
              <div
                class="dropdown-menu pt-0"
                aria-labelledby="dropdownMenuButton"
              >
                <a class="dropdown-item" href="about-us">
                  About Velocity Xcelerator
                </a>
                <a class="dropdown-item" href="about-me">About me</a>
              </div>
            </div>
          </span>
          <a
            href="#"
            class="pt-2 pb-2"
            role="button"
            class="btn btn-primary"
            data-toggle="modal"
            data-target="#ServiceModal"
          >
            <span>Services</span>
          </a>
          <a href="pagarbook" class="pt-2 pb-2"><span>Pagarbook</span></a>
          <a href="blogs" class="pt-2 pb-2"><span>Blog</span></a>
          <a href="contact" class="pt-2 pb-2"><span>Contact</span></a>
          <button
            class="btn btn-E94D65 mt-3"
            onclick="window.location='tel:8899880880'"
          >
            +91 8899880880
          </button>
        </div>
      </div>

      <!-- Header bar -->
      <div
        class="container-fluid bg-19435A p-1 pb-3 mt-4 text-light mob-only head-band"
        id="head-band"
      >
        <div class="container">
          <div class="d-flex align-items-center flex-column">
            <div class="col-12 mt-3">
              <span class="icon">
                <i class="fa fa-clock-o icon text-E94D65"></i>
              </span>
              &nbsp; &nbsp;
              <span class="mb-1">
                Monday - Saturday
                <span class="text-secondary">
                  9.30AM- 7PM
                </span>
              </span>
            </div>
            <div class="col-12 mt-3">
              <span class="icon">
                <i class="fa fa-map-marker icon text-E94D65"></i>
              </span>
              &nbsp; &nbsp;
              <span class="mb-1">
                Office
                <span class="text-secondary">
                  206, Pinnacle Prestige, Tilak Road, Pune.
                </span>
              </span>
            </div>
            <div class="col-12 mt-3 text-center">
              <span class="ms-auto pt-0 pb-0 pl-0 mb-1">
                <h5>Visit our social pages</h5>
              </span>
            </div>
            <div
              class="col-12 text-center mt-3 d-flex justify-content-center col-12"
            >
              <span
                class="icon p-2 pt-0 pr-0 pb-0"
                onclick="window.location='https://www.facebook.com/velocityxcelerator/'"
              >
                <h1><i class="fa fa-facebook icon text-E94D65"></i></h1>
              </span>
              <span
                class="icon p-2 pt-0 pr-0 pb-0"
                onclick="window.location='https://www.linkedin.com/company/velocity-xcelerator/'"
              >
                <h1><i class="fa fa-linkedin icon text-E94D65"></i></h1>
              </span>
              <span
                class="icon p-2 pt-0 pr-0 pb-0"
                onclick="window.location='https://in.pinterest.com/xceleratorvelocity'"
              >
                <h1><i class="fa fa-pinterest icon text-E94D65"></i></h1>
              </span>
              <span
                class="icon p-2 pt-0 pr-0 pb-0"
                onclick="window.location='https://www.instagram.com/velocityxceleratorbusiness/'"
              >
                <h1><i class="fa fa-instagram icon text-E94D65"></i></h1>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header bar -->
    <div class="container-fluid bg-19435A p-2 text-light dk-only head-band">
      <div class="container">
        <div class="d-flex align-items-center">
          <span class="icon">
            <i class="fa fa-clock-o icon text-E94D65"></i>
          </span>
          &nbsp; &nbsp;
          <span class="mb-1">
            Monday - Saturday
            <span class="text-secondary">
              9.30AM- 7PM
            </span>
          </span>
          &nbsp; &nbsp; &nbsp;
          <span class="icon">
            <i class="fa fa-map-marker icon text-E94D65"></i>
          </span>
          &nbsp; &nbsp;
          <span class="mb-1">
            Office
            <span class="text-secondary">
              206, Pinnacle Prestige, Tilak Road, Pune.
            </span>
          </span>

          <span class="ms-auto p-5 pt-0 pb-0 pl-0 mb-1">
            Visit our social pages
          </span>
          <span
            class="icon p-2 pt-0 pr-0 pb-0"
            role="button"
            onclick="window.location='https://www.facebook.com/velocityxcelerator/'"
          >
            <i class="fa fa-facebook icon text-E94D65"></i>
          </span>
          <span
            class="icon p-2 pt-0 pr-0 pb-0"
            role="button"
            onclick="window.location='https://www.linkedin.com/company/velocity-xcelerator/'"
          >
            <i class="fa fa-linkedin icon text-E94D65"></i>
          </span>
          <span
            class="icon p-2 pt-0 pr-0 pb-0"
            role="button"
            onclick="window.location='https://in.pinterest.com/xceleratorvelocity'"
          >
            <i class="fa fa-pinterest icon text-E94D65"></i>
          </span>
          <span
            class="icon p-2 pt-0 pr-0 pb-0"
            role="button"
            onclick="window.location='https://www.instagram.com/velocityxceleratorbusiness/'"
          >
            <i class="fa fa-instagram icon text-E94D65"></i>
          </span>
        </div>
      </div>
    </div>

    <!-- Navigation bar -->
    <div class="container-fluid navbar p-1" id="navbar">
      <div class="container">
        <div class="d-flex col-12 align-items-center">
          <span class="icon mob-only p-0" role="button" onclick="openNav()">
            <i
              class="fa fa-bars icon text-E94D65"
              role="button"
              onclick="closeNav()"
            ></i>
          </span>
          <img src="./assets/icon.png" alt="velocityxcelerator icon" />
          <span
            role="button"
            onclick="window.location='/'"
            class="dk-only m-4 mr-0 mt-0 mb-0 ms-auto active item"
          >
            HOME
          </span>
          <span class="dropdown dk-only m-4 mr-0 mt-0 mb-0 item">
            <span
              class="dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              About Us
            </span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item item mb-2 mt-1" href="about-us">
                About velocity Xcelerator
              </a>
              <a class="dropdown-item item mb-2 mt-2" href="about-me">
                About me
              </a>
            </div>
          </span>
          <span class="dropdown dk-only m-4 mr-0 mt-0 mb-0 item">
            <span
              class="dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Services
            </span>
            <div
              class="dropdown-menu dropdown-menu-big mt-3"
              aria-labelledby="dropdownMenuButton"
            >
              <div class="container">
                <div class="row p-4">
                  <div class="col-md-3">
                    <span>Program</span>
                    <a href="edp" class="dropdown-item item mt-3">EDP</a>
                    <a href="step-up" class="dropdown-item item mt-3">
                      Step up
                    </a>
                  </div>
                  <div class="col-md-5">
                    <span>Training</span>
                    <a
                      href="corporate-training"
                      class="dropdown-item item mt-3"
                    >
                      Corporate Training
                    </a>
                    <a href="sales-training" class="dropdown-item item mt-3">
                      Sales Training
                    </a>
                    <a
                      href="leadership-training"
                      class="dropdown-item item mt-3"
                    >
                      Leadership Training
                    </a>
                    <a
                      href="communication-skill-training"
                      class="dropdown-item item mt-3"
                    >
                      Communication skill Training
                    </a>
                    <a
                      href="personality-development-training"
                      class="dropdown-item item mt-3"
                    >
                      Personality Development Training
                    </a>
                  </div>
                  <div class="col-md-4">
                    <span>Consulting</span>
                    <a
                      href="business-consulting"
                      class="dropdown-item item mt-3"
                    >
                      Business Consulting
                    </a>
                    <a href="sales-consulting" class="dropdown-item item mt-3">
                      Sales Consulting
                    </a>
                    <a href="hr-consulting" class="dropdown-item item mt-3">
                      HR Consulting
                    </a>
                    <a
                      href="marketing-consulting"
                      class="dropdown-item item mt-3"
                    >
                      Marketing skill Consulting
                    </a>
                    <a
                      href="franchise-marketing"
                      class="dropdown-item item mt-3"
                    >
                      Franchise Consulting
                    </a>
                    <a
                      href="distribution-consulting"
                      class="dropdown-item item mt-3"
                    >
                      Distribution Consulting
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </span>
          <span onclick="window.location='pagarbook' " role="button" class="dk-only m-4 mr-0 mt-0 mb-0 item">Pagarbook</span>
          <span onclick="window.location='blogs' " role="button" class="dk-only m-4 mr-0 mt-0 mb-0 item">Blog</span>
          <span onclick="window.location='contact' " role="button" class="dk-only m-4 mr-0 mt-0 mb-0 item">Contact</span>
          <span class="dk-only m-4 mr-0 mt-0 mb-0 item">
            <button
              class="btn btn-E94D65"
              role="button"
              onclick="window.location='tel:8899880880'"
            >
              +91 8899880880
            </button>
          </span>
          <span class="icon mob-only" style="text-align: right;">
            <i class="fa fa-phone icon text-E94D65"></i>
          </span>
        </div>
      </div>
    </div>

    <!-- EDP -->
    <div class="container-fluid edp pt-5">
        <div class="row data p-0">
          <div class="col-md-5 offset-md-1">
            <h5 class="d-flex align-items-center">
              <hr class="col-1 mr-3 rounded" />
              &nbsp; PROPER BUSINESS WORKING
            </h5>
            <h1 class="display-3">
              <span class="text-1B4962">
                Explore your
              </span>
              <br />
              <span class="text-E94D65">
                Corporate Training
              </span>
            </h1>
            <h5 class="d-flex align-items-center mb-5 pb-3 mt-4">
              JOIN HANDS, GROW TOGETHER
            </h5>
            <div class="pb-5 row">
              <p class="col-md-6">
                Best Corporate Training Programs develop Talents for your
                Company. At a time when companies are challenged by increasing
                business complexities, our best corporate training programs
                offer a range of organizational advantages from leadership Skill
                development to management skills training.
                <br />
                <br />
                Velocity Xcelerator is one of the leading Corporate Training
                Companies in India. Our Corporate training helps to train new
                talent, to transform them into future leaders. Virendra Ingle
                and his team have more than 22 years of top-notch Corporate
                experience, In the last few years, We have trained and
                transformed 1000+ corporate executives, managers, and senior
                officers with our best corporate training. Our training programs
                educate, improve language and communication skills, motivate
                candidates to do their best, enhance productivity & creativity
                at work.
              </p>
              <p class="col-md-6">
                Every person is different and requires a different kind of
                support to enhance his/her skills, the same applies to corporate
                skills. All our corporate training programs are structured in a
                way that gives you the flexibility to customize according to
                your need.
                <br />
                <br />
                With our Corporate Training classes, we are developing efficient
                professionals and building corporate cultures in organizations.
                Our method of guidance and professional education includes
                Employee effectiveness training, Sales Excellence Training,
                executive training, professional education, workshops. As a
                result, companies see a substantial increase in employee
                performance, client satisfaction, and increase in revenues.
                <br />
                <br />
                Nowadays day-long workshops and group coaching inside company
                premises work out to be a more focused initiative to train and
                improve employees and create an opportunity for lots of taking
                away from these sessions.
              </p>
              <p class="row">
                  <div class="col-md-4 mt-4 d-flex align-items-center">
                    <span class="col-3 h2">
                        <i class="fa fa-balance-scale icon text-E94D65"></i>
                    </span>
                    <span class="col-9">
                        Conflict <br> Management
                    </span>
                  </div>
                  <div class="col-md-4 mt-4 d-flex align-items-center">
                    <span class="col-3 h2">
                        <i class="fa fa-pie-chart icon text-E94D65"></i>
                    </span>
                    <span class="col-9">
                        Decision <br> Making
                    </span>
                  </div>
                  <div class="col-md-4 mt-4 d-flex align-items-center">
                    <span class="col-3 h2">
                        <i class="fa fa-clock-o text-E94D65"></i>
                    </span>
                    <span class="col-9">
                        Time <br> Management
                    </span>
                  </div>
                  <div class="col-md-4 mt-4 d-flex align-items-center">
                    <span class="col-3 h2">
                        <i class="fa fa-bullseye icon text-E94D65"></i>
                    </span>
                    <span class="col-9">
                        Goal <br> Setting
                    </span>
                  </div>
                  <div class="col-md-4 mt-4 d-flex align-items-center">
                    <span class="col-3 h2">
                        <i class="fa fa-flag icon text-E94D65"></i>
                    </span>
                    <span class="col-9">
                        Team <br> Building
                    </span>
                  </div>
                  <div class="col-md-4 mt-4 d-flex align-items-center">
                    <span class="col-3 h2">
                        <i class="fa fa-random ock-oicon text-E94D65"></i>
                    </span>
                    <span class="col-9">
                        Change <br> Management
                    </span>
                  </div>
              </p>
            </div>
          </div>
          <div class="col-md-6 container p-0 pb-5 pt-5">
            <img src="./assets/img-faq-2.png" width="100%" alt="images">
          </div>
        </div>
    </div>


    <?php include 'meet-your-coach.php' ?>

    <?php include 'get-in-touch.php' ?>

    <?php include 'looking-for-consultancy.php' ?>

    <?php include 'footer.php';

?>
