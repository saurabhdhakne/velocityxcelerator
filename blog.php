<?php

include './admin/check_con.php';

$sql = 'SELECT * FROM blog WHERE id =' . $_GET['id'];

$result = mysqli_query($conn, $sql);

$lengths = 0;
?>
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

    <title id="title2">
    </title>
    <style>
        #share-alt{
            /* display:none; */
        }
        @media only screen and (max-width: 990px){
            img{
                width:100% !important;
                height: auto !important;
            }

            .mainlogo{
                width: 150px !important;
            }

        }
    </style>
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
                <img src="./assets/icon.png" class="mainlogo" alt="velocityxcelerator icon" />
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
                <span
                    onclick="window.location='pagarbook' "
                    role="button"
                    class="dk-only m-4 mr-0 mt-0 mb-0 item"
                >
                    Pagarbook
                </span>
                <span
                    onclick="window.location='blogs' "
                    role="button"
                    class="dk-only m-4 mr-0 mt-0 mb-0 item"
                >
                    Blog
                </span>
                <span
                    onclick="window.location='contact' "
                    role="button"
                    class="dk-only m-4 mr-0 mt-0 mb-0 item"
                >
                    Contact
                </span>

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

    <div class="container mt-5 mb-5 pt-0 ">
        <div class="row main2 pt-0">
          <?php if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {

                  $id = $row['id'];
                  $img = $row['img'];
                  $title = $row['title'];
                  $content = $row['content'];
                  $date = $row['dop'];
                  $lengths++;
                  ?>

              <div class="col-md-12" data-aos="fade-up">
                  <div class="card col-md-10 offset-md-1">
                      <!-- <div class="col-12 text-center">
                         <img src="./admin/<?php echo $img; ?>" class="card-img-top" alt="...">
                      </div> -->
                      <div class="card-body pb-5">
                        <h5 class="card-title text-center"> </h5>
                        <p class="card-text">
                           <?php echo $content; ?>
                          </p>
                          <p class="text-secondary col-md-3 offset-md-9 mt-2">
                             <?php echo $date; ?>
                         </p>
                          <hr>
                        <div class="col-md-12 text-center h3 mt-5">
                          FOUND THIS USEFUL ? SHARE WITH
                        </div>
                        <div class="col-md-12 d-flex justify-content-center mb-2 text-dark">
                                    <a class="socialbtn text-E94D65 h2" href="whatsapp://send?text=<?php echo $title; ?>%20https://velocityxcelerator.com/blog?id=<?php echo $id; ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> 
                                    &nbsp;&nbsp; <a class="socialbtn text-E94D65 h2" href="https://www.facebook.com/sharer/sharer.php?u=https://velocityxcelerator.com/blog.php?id=<?php echo $id; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
                                    &nbsp;&nbsp; <a class="socialbtn text-E94D65 h2" onclick='myFunction("<?php echo $id; ?>");'> <i class="fa fa-copy" aria-hidden="true"></i></a>
                                    <!-- &nbsp;&nbsp; <a class="socialbtn text-E94D65 h2" id="share-alt"  onclick='shareLink("<?php echo $id; ?>", "<?php echo $title; ?>");'> <i class="fa fa-share-alt" aria-hidden="true"></i></a> -->

                            </div>
                      </div>
                  </div>
              </div>

            <?php
              }
          } ?>
           
        </div>
    </div>


    <!-- Footer -->
    <div class="container-fluid footer">
      <div class="container">
        <div class="row data">
          <div class="col-md-3">
            <h5 class="d-flex align-items-center text-light">
              <hr
                class="col-2 mr-3 rounded"
                style="border: 5px solid #e94d65;"
              />
              &nbsp; Velocity Xcelerator
            </h5>
            <h3 class="text-E94D65">
              Headquarters
            </h3>
            <p class="text-light mb-3">
              Join Hands, Grow Together
            </p>
            <p class="text-light" onclick="window.location='tel:8899880880'">
              <i class="fa fa-phone icon text-E94D65"></i>
              &nbsp; &nbsp;
              <span>+91 8899880880</span>
            </p>
            <p class="text-light">
              <i class="fa fa-envelope icon text-E94D65"></i>
              &nbsp; &nbsp;
              <span>contact@velocityxcelerator.com</span>
            </p>
            <p class="text-light">
              <i class="fa fa-globe icon text-E94D65"></i>
              &nbsp; &nbsp;
              <span>India, Maharashtra</span>
            </p>
          </div>
          <div class="col-md-3">
            <div class="col-md-10 offset-md-2">
              <h5 class="d-flex align-items-center text-light">
                <hr
                  class="col-2 mr-3 rounded"
                  style="border: 5px solid #e94d65;"
                />
                &nbsp; OUR
              </h5>
              <h3 class="text-E94D65">
                Consulting
              </h3>
              <p class="text-light">
                Business Consulting
                <br />
                Sales Consulting
                <br />
                HR Consulting
                <br />
                Marketing Consulting
                <br />
                Franchise Consulting
                <br />
                Distribution Consulting
                <br />
                Business Planning
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="col-md-10 offset-md-2">
              <h5 class="d-flex align-items-center text-light">
                <hr
                  class="col-2 mr-3 rounded"
                  style="border: 5px solid #e94d65;"
                />
                &nbsp; OUR
              </h5>
              <h3 class="text-E94D65">
                Training
              </h3>
              <p class="text-light">
                Corporate Training
                <br />
                Sales Training
                <br />
                Leadership Training
                <br />
                Communication Skill
                <br />
                Personality Development
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <h5 class="d-flex align-items-center text-light">
              <hr
                class="col-2 mr-3 rounded"
                style="border: 5px solid #e94d65;"
              />
              &nbsp; GET IN TOUCH
            </h5>
            <h3 class="text-E94D65">
              Social Links
            </h3>
            <p class="text-light">
              Follow Us To get Free Business Excellence Tips For Seamless
              Performance.
            </p>
            <p>
              <span
                class="p-3 icon h1"
                onclick="window.location='https://www.facebook.com/velocityxcelerator/'"
              >
                <i class="fa fa-facebook icon text-E94D65"></i>
              </span>
              <span
                class="p-3 icon h1"
                onclick="window.location='https://www.instagram.com/velocityxceleratorbusiness/'"
              >
                <i class="fa fa-instagram icon text-E94D65"></i>
              </span>
              <span
                class="p-3 icon h1"
                onclick="window.location='https://in.pinterest.com/xceleratorvelocity'"
              >
                <i class="fa fa-pinterest icon text-E94D65"></i>
              </span>
              <span
                class="p-3 icon h1"
                onclick="window.location='https://www.linkedin.com/company/velocity-xcelerator/'"
              >
                <i class="fa fa-linkedin icon text-E94D65"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid footer-2 bg-E94D65">
      <div class="row">
        <p class="col-md-10 offset-md-1 text-center">
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Mumbai
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Pune
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Nagpur
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Aurangabad
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Nashik
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Bangalore
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Chennai
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Kolkata
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Hyderabad
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Noida
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Patna
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Chennai
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Indore
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Ranchi
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Gurgaon
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Lucknow
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in Guwahati
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Canada
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Thailand
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Business Coaching in
          </a>
          |
          <a href="http://velocityxcelerator.com/business-consulting/">
            Bangladesh
          </a>
        </p>
        <p class="col-md-10 offset-md-1 text-center mt-5">
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales training Company In India
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Mumbai
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Pune
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Nagpur
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Corporate Training in Mumbai
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Corporate Training in Pune
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Corporate Training in Nagpur
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Delhi
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Bangalore
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Corporate Training in Banglore
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Chennai
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Corporate Training in Chennai
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Hyderabad
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Kolkata
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Noida
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in ranchi
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Patna
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Indore
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Jaipur
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Gurgaon
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Sales Training in Lucknow
          </a>
          |
          <a href="http://velocityxcelerator.com/sales-training-2/">
            Corporate Training in Lucknow
          </a>
        </p>
        <div class="col-md-10 offset-md-1 text-center">
          <img src="./assets/velocityinfovision.png" alt="" />
          <p class="text-light">Website designed By - Velocity Infovision</p>
        </div>
      </div>
      <div class="row mt-5 text-light">
        <div class="col-md-4 offset-md-1 text-left">
          <p>
            Copyright by
            <strong>Velocity Xcelerator Pvt. Ltd</strong>
            . All rights reserved.
          </p>
        </div>
        <div class="col-md-6 offset-md-1">
          <span onclick="window.location='/'" role="button" class="p-2 mt-5">
            Home
          </span>
          <span
            onclick="window.location='about-us'"
            role="button"
            class="p-2 mt-5"
          >
            About Us
          </span>
          <span
            onclick="window.location='program'"
            role="button"
            class="p-2 mt-5"
          >
            Program
          </span>
          <span
            onclick="window.location='training'"
            role="button"
            class="p-2 mt-5"
          >
            Training
          </span>
          <span
            onclick="window.location='services'"
            role="button"
            class="p-2 mt-5"
          >
            Services
          </span>
          <span
            onclick="window.location='blogs'"
            role="button"
            class="p-2 mt-5"
          >
            Blog
          </span>
          <span
            onclick="window.location='#head-band'"
            role="button"
            class="p-2 mt-5"
          >
            BACK TO TOP
          </span>
        </div>
      </div>
    </div>
    <script src="./js/script.js"></script>
    <script>
      document.getElementById('title2').innerHTML = '<?php echo $title; ?>';

    const isMobile = true;

    if(isMobile){
        alert('in mobile')
        document.getElementById('share-alt').style.display = "inline-block";
    }
    function shareLink(id,title) {
        console.log(id);
        console.log(title);
        url = 'https://velocityxcelerator.com/blog?'+id;
        if(isMobile){
                navigator.share({
                    title:title,
                    url:url
                }).then( ()=> {
                    console.log("Thanks for sharing!");
                }).catch(console.log(console.error))
            }else{      
                console.log('Not Supported')
            }
            
        }
    </script>
  </body>
</html>
