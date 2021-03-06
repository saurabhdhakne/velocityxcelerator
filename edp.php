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
        class="container-fluid bg-19435A p-1 pb-3 mt-4 text-light mob-only head-band" id="head-band"
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
      <div class="container">
        <div class="row data">
          <div class="col-md-6">
            <h5 class="d-flex align-items-center">
              <hr
                class="col-2 mr-3 rounded"
                style="border: 5px solid #e94d65;"
              />
              &nbsp; SUCCESSFUL PROGRAM
            </h5>
            <h1 class="display-2">
              <span class="text-1B4962">
                Entrepreneur
              </span>
              <br />
              <span class="text-E94D65">
                Development
                <br />
                Program
              </span>
            </h1>
            <h5 class="d-flex align-items-center mb-5 pb-3 mt-4">
              Give Your Business, The Growth It Deserves!
            </h5>
            <p class="pb-5">
              Velocity has designed the EDP(Entrepreneur Development Program)
              program to develop entrepreneurial abilities among the people. It
              is a process of handholding an aspiring business owner right from
              ideation, conceptualization, designing a Proof of concept, and
              producing the final product or services. It's a process of
              developing and polishing one's entrepreneurial skills to establish
              and successfully run a company.
              <br />
              <br />
              With EDP, we equip an aspiring entrepreneur with the skills and
              knowledge required to start and run the enterprise. We help
              individuals in compliance & procedures of company formation. Our
              Entrepreneurs development program helps you in design the vision
              and mission of the company and, align the required resources to
              achieve the organizational goals and objectives is the key
              initiative of the EDP program.
              <br />
              <br />
              For an entrepreneur, it's crucial to understand motives and their
              impact on entrepreneurial values and behavior for this purpose.
              Every entrepreneur possesses a few competencies or habits, these
              habits are the underlying characteristics of the entrepreneurs
              which result in superior performance and which differentiate
              successful entrepreneurs from unsuccessful ones.
              <br />
              <br />
              Don't worry, Velocity is there to help you from the start-
              <ul>
              <li> Creating mission and values statement of Company. </li>
              <br />
              <li> Designing goals and objectives of the organization.. </li>
              <br />
              <li> Growth strategy. </li>
              <br />
              <li> Resources management. </li>
              <br />
              <li> Design organizational capabilities & Structure. </li>
              <br />
              <li> Finance strategy and Investment Planning. </li>
              <br />
              <li> Sustainability and Success. </li>
              </ul>
            </p>
          </div>
          <div class="col-md-6 container pb-5">
            <div class="row">
              <div class="col-md-6 p-3 mt-4 text-center">
                <div class="col-12 item">
                  <h1>
                    <i class="fa fa-list-ul icon text-E94D65"></i>
                  </h1>
                  <h2>Entreprenership</h2>
                  Identifying the difference between Employer & Employee.
                  Getting clarity about our wish and vision
                </div>
              </div>

              <div class="col-md-6 p-3 mt-4 text-center">
                <div class="col-12 item">
                  <h1>
                    <i class="fa fa-puzzle-piece icon text-E94D65"></i>
                  </h1>
                  <h2>Idea Evalution</h2>
                  Whether the business idea that we are thinking is valid or
                  not? It is very important to evaluate the feasibility of our
                  business idea.
                </div>
              </div>

              <div class="col-md-6 p-3 mt-4 text-center">
                <div class="col-12 item">
                  <h1>
                    <i class="fa fa-money icon text-E94D65"></i>
                  </h1>
                  <h2>Fund Raising</h2>
                  If we wish to start any business first entity that comes is an
                  investment. What are all available resources?
                </div>
              </div>

              <div class="col-md-6 p-3 mt-4 text-center">
                <div class="col-12 item">
                  <h1>
                    <i class="fa fa-trophy icon text-E94D65"></i>
                  </h1>
                  <h2>Goal Setting</h2>
                  Once you are clear with the idea of what you want in your
                  life, it is very important to set a Goal. Goal Setting for
                  keeping right expectation from ourself is key to success.
                </div>
              </div>

              <div class="col-md-6 p-3 mt-4 text-center">
                <div class="col-12 item">
                  <h1>
                    <i class="fa fa-users icon text-E94D65"></i>
                  </h1>
                  <h2>Management</h2>
                  Being an entrepreneur it is very important to manage
                  resources, design strategy to help our business to grow.
                </div>
              </div>

              <div class="col-md-6 p-3 mt-4 text-center">
                <div class="col-12 item">
                  <h1>
                    <i class="fa fa-sitemap icon text-E94D65"></i>
                  </h1>
                  <h2>Growth Strategy</h2>
                  More investment in terms of money never give more Business.
                  For the growth of our business we need to design proper
                  strategy.
                </div>
              </div>

              <div class="col-md-6 p-3 mt-4 text-center">
                <div class="col-12 item">
                  <h1>
                    <i class="fa fa-shield icon text-E94D65"></i>
                  </h1>
                  <h2>Complience</h2>
                  To run a Business successfully it is very important to
                  understand the procedure involved in launching an enterprise
                  and the issues involved in the same.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Meet Your Coach -->
    <div class="container-fluid meet-uc pt-5">
      <div class="row">
        <div class="col-md-6 p-0">
          <img src="./assets/business-coach.png" width="100%" alt="" />
        </div>
        <div class="col-md-6 data">
          <h5 class="d-flex align-items-center">
            <hr class="col-2 mr-3 rounded"  />
            &nbsp; REQUEST A CALLBACK
          </h5>
          <h1 class="display-2">
            <span class="text-1B4962">
              Get your Business
            </span>
            <br />
            <span class="text-E94D65">
              Right up There
            </span>
          </h1>
          <div class="row">
            <p class="h4">
              Book a One to One Business Clarity video Call that will give you clarity about your business with specific, actionable, and personalized advice on your most pressing business challenges.
            </p>
            <div>
              <button class="btn btn-E94D65 mb-5 mt-3"  onclick="window.location='tel:8899880880'">
                REQUEST A CALLBACK
              </button>
            </div>
            <div class="container p-0 m-0">
              <div class="row p-0 m-0">
                <div class="col-md-3 rcb-item p-2 text-center">
                  <span class="display-3">
                    <i class="fa fa-money icon text-E94D65"></i>
                  </span>
                  <h1>1000+</h1>
                  <p>
                    Individuals Transformed
                  </p>
                </div>
                <div class="col-md-3 rcb-item p-2 text-center">
                  <span class="display-3">
                    <i class="fa fa-compass icon text-E94D65"></i>
                  </span>
                  <h1>100+</h1>
                  <p>
                    business Owners coached and moved to next level.
                  </p>
                </div>
                <div class="col-md-3 rcb-item p-2 text-center">
                  <span class="display-3">
                    <i class="fa fa-trophy icon text-E94D65"></i>
                  </span>
                  <h1>2000+</h1>
                  <p>
                    Individuals Trained in Corporate trainings.
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Get In Youch -->
    <div class="container getintouch pt-5 pb-5">
      <div class="row ">
        <div class="col-md-6 p-2 data text-center">
          <h5 class="d-flex align-items-center justify-content-center text-E94D65">
            <hr
              class="col-1 mr-3 rounded"
            />
              &nbsp; CONTACT US WITH EASE &nbsp; 
            <hr
            class="col-1 mr-3 rounded"
          />
          </h5>
          <h1 class="mt-2 display-2">
            <span class="text-E94D65">
              Get in 
            </span>
            <span class="text-1B4962">
              touch
            </span>
          </h1>
          <p class="mt-4">
            Visit our agency or simply send us an email anytime you want.
            <br>
            If you have any questions, please feel free to contact us.
          </p>
          <div class="container p-0 m-0">
            <div class="row p-0 m-0">
              <div class="col-md-12 rcb-item p-2 text-center">
                <span class="display-3">
                  <i class="fa fa-address-card icon text-E94D65"></i>
                </span>
                <h3>Address</h3>
                <p>
                  206, Pinnacle Prestige, Tilak Road, Sadashiv Peth, <br> Pune-411030, Maharashtra, India
                </p>
              </div>
              <div class="col-md-6 rcb-item p-2 text-center">
                <span class="display-3">
                  <i class="fa fa-phone icon text-E94D65"></i>
                </span>
                <h3>Call Us</h3>
                <p>
                  +91 9920848485
                </p>
              </div>
              <div class="col-md-6 rcb-item p-2 text-center">
                <span class="display-3">
                  <i class="fa fa-envelope icon text-E94D65"></i>
                </span>
                <h3>Email Us</h3>
                <p>
                  contact@velocityxcelerator.com
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-2">
          <form>
            <div class="form-group p-2">
              <input type="text" class="form-control p-3" id="nameInput" aria-describedby="nameHelp" placeholder="Enter Name*">
            </div>
            <div class="form-group p-2">
              <input type="email" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address">
            </div>
            <div class="form-group p-2">
              <input type="text" class="form-control p-3" id="contactInput" placeholder="Enter your Contact">
            </div>
            <div class="form-group p-2 form-check">
              <textarea name="msg" class="form-control" id="msg" cols="30" rows="5">Enter Your Message</textarea>
            </div>
            <button type="submit" class="btn btn-E94D65 mt-4">Submit</button>
          </form>
        </div>
      </div>
    </div>

  <?php include 'looking-for-consultancy.php' ?>
    
  <?php include 'footer.php'; ?>
