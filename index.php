<?php

  include './admin/check_con.php';

  $sql = 'SELECT id, title, dop ,img  FROM blog ORDER BY id DESC ';

  $result = mysqli_query($conn, $sql);

  $length = 0;
?>

<?php include 'header.php'; ?>

    <!-- Carousel -->
    <div class="container-fluid carousel-div">
      <div class="row">
        <div
          id="carouselExampleIndicators"
          class="carousel slide p-0"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="col-md-5 offset-md-1 data">
                <h5 class="d-flex align-items-center ">
                  <hr
                    class="col-2 mr-3 rounded"
                  />
                  &nbsp; What's Missing in your Business?
                </h5>
                <h1 class="display-2">
                  <span class="text-1B4962">
                    Auto Pilot,
                  </span>
                  <br />
                  <span class="text-E94D65">
                    Your Business..!
                  </span>
                </h1>
                <p class="">
                  If you are a business owner or an aspiring entrepreneur, You
                  may have a great business, or may not? You may be a start-up
                  or a mature business owner with ten plus years of experience.
                  whatever stage you are into, there comes a time when you feel
                  something is missing….
                  <br />
                  Most business owners are not sure what is wrong in their
                  business and why things aren't going as per their plan.
                </p>
                <button class="btn btn-E94D65" onclick="window.location='program'">
                  OUR PROGRAM
                </button>
                <button class="btn btn-1B4962" onclick="window.location='services'">
                  OUR SERVICES
                </button>
              </div>
              <img
                class="d-block w-100"
                src="./assets/slide-1.jpg"
                alt="First slide"
                id="carousel-slide-1"
              />
            </div>
            <div class="carousel-item">
              <div class="col-md-5 offset-md-6 data">
                <h5 class="d-flex align-items-center">
                  <hr
                    class="col-2 mr-3 rounded"
                    
                  />
                  &nbsp; COMMITTED TO YOUR SUCCESS
                </h5>
                <h1 class="display-2">
                  <span class="text-1B4962">
                    Delivering
                  </span>
                  <br />
                  <span class="text-E94D65">
                    <b>The Promise</b>
                  </span>
                </h1>
                <p>
                  It's crucial to have big goals and dreams in business,
                  sometimes we find it difficult to achieve and stay focused on
                  it. SO how can you remain focused and committed to your goals?
                  We are here to help you figure out sustainable ways to stay
                  focused on your goals and achieve excellence in your business.
                </p>
                <button class="btn btn-E94D65" onclick="window.location='program'">
                  OUR PROGRAM
                </button>
                <button class="btn btn-1B4962" onclick="window.location='training'">
                  OUR TRAINING
                </button>
              </div>
              <img
                class="d-block w-100"
                src="./assets/slide-2.jpg"
                alt="Second slide"
                id="carousel-slide-2"
              />
            </div>
            <div class="carousel-item">
              <div class="col-md-5 offset-md-1 data">
                <h5 class="d-flex align-items-center">
                  <hr
                    class="col-2 mr-3 rounded"
                    
                  />
                  &nbsp; WE WANT TO SEE YOU SUCCEED
                </h5>
                <h1 class="display-2">
                  <span class="text-1B4962">
                    Your success
                  </span>
                  <br />
                  <span class="text-E94D65">
                    <b>Our business</b>
                  </span>
                </h1>
                <p>
                  It's crucial to have big goals and dreams in business,
                  sometimes we find it difficult to achieve and stay focused on
                  it. SO how can you remain focused and committed to your goals?
                  We are here to help you figure out sustainable ways to stay
                  focused on your goals and achieve excellence in your business.
                </p>
                <button class="btn btn-E94D65" onclick="window.location='services'">
                  OUR SERVICES
                </button>
                <button class="btn btn-1B4962" onclick="window.location='program'">
                  OUR PROGRAM
                </button>
              </div>
              <img
                class="d-block w-100"
                src="./assets/slide-3.jpg"
                alt="Second slide"
                id="carousel-slide-3"
              />
            </div>
          </div>
          <!-- <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>
    </div>

    <!-- Our Services -->
    <div class="container our-services">
      <div class="row">
        <div class="col-md-4 p-3 card-s-parent">
          <div class="col-12 card-s">
            <img src="./assets/our-program.jpg" alt="" />
            <div class="col-12 data">
              <h5 class="d-flex align-items-center">
                <hr
                  class="col-2 mr-3 rounded"
                  
                />
                &nbsp; PLAN, THEN DO
              </h5>
              <h4 class="display-2">
                <span class="text-1B4962">
                  Our Program
                </span>
              </h4>
              <p>
                Velocity Xcelerator is all about Business Coaching, Goal
                Setting, and strategy, We provide simple tools and proven
                frameworks that will help you to Auto Pilot Your business and
                take it to Next Level by our EDP-Entrepreneur Development
                Program, Step Up, and Sales Excellence Program.
                <br />
                <br />
              </p>
              <button class="btn btn-E94D65" onclick="window.location='program'">
                Read more
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3 card-s-parent">
          <div class="col-12 card-s">
            <img src="./assets/our-consulting.jpg" alt="" />
            <div class="col-12 data">
              <h5 class="d-flex align-items-center">
                <hr
                  class="col-2 mr-3 rounded"
                  
                />
                &nbsp; SMALL TACTICS
              </h5>
              <h4 class="display-2">
                <span class="text-1B4962">
                  Our Consulting
                </span>
              </h4>
              <p>
                Velocity Xcelerator is a result-oriented professional
                organization with a team of senior business coaches with
                Industry Experience and a proven track record of 20 plus years.
                Our coaching & Consulting has helped more than 100 business
                owners and transformed more than 1000 individuals.
                <br />
                <br />
              </p>
              <button class="btn btn-E94D65" onclick="window.location='service'">
                Read more
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3 card-s-parent">
          <div class="col-12 card-s">
            <img src="./assets/our-training.jpg" alt="" />
            <div class="col-12 data">
              <h5 class="d-flex align-items-center">
                <hr
                  class="col-2 mr-3 rounded"
                  
                />
                &nbsp; PROOF, NOT PROMISES
              </h5>
              <h4 class="display-2">
                <span class="text-1B4962">
                  Our Training
                </span>
              </h4>
              <p>
                Best Corporate Training Programs develop Talents for your
                Company. At a time, companies are challenged by increasing
                business complexities; Velocity Xcelerator is one of the leading
                Corporate Training Companies in India that offers a range of
                organizational advantages from leadership Skill development
                training.
              </p>
              <button class="btn btn-E94D65" onclick="window.location='training'">
                Read more
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Consultancy services -->
    <div class="container-fluid consultancy-services">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="col-md-5 offset-md-1 data">
              <h5 class="d-flex align-items-center">
                <hr
                  class="col-2 mr-3 rounded"
                />
                &nbsp; WHERE CAN WE HELP YOU
              </h5>
              <h1 class="display-2">
                <span class="text-1B4962">
                  CONSULTANCY
                </span>
                <br />
                <span class="text-E94D65">
                  <b>SERVICES</b>
                </span>
              </h1>
              <p>
                As a Management consultant and Business coach, we focus on
                various organizational concerns, from Sales to Marketing,
                business strategy to employee productivity, and developing
                next-level leaders to autopilot your business. We take all
                services that fall under Strategy Consulting, Operations
                Consulting, and HR consulting.
              </p>
            </div>
          </div>
          <div class="offset-md-1 col-md-10 cs-items">
            <div class="row">
              <div class="col-md-4 mt-5 p-2">
                <div class="col-12">
                  <div class="col-12 d-flex">
                    <div class="col-3 text-E94D65 display-4 text-center">
                      <i class="fa fa-balance-scale icon text-E94D65"></i>
                    </div>
                    <div class="col-9">
                      <h5 class="text-1B4962"><b>Business Consulting</b></h5>
                      <p>
                        Our best Business Consultancy facilitates brainstorming
                        on your most pressing business challenges, work on
                        strategy designing, defining specific organizational
                        goals, enabling focused initiatives.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 p-2">
                <div class="col-12">
                  <div class="col-12 d-flex">
                    <div class="col-3 text-E94D65 display-4 text-center">
                      <i class="fa fa-pie-chart icon text-E94D65"></i>
                    </div>
                    <div class="col-9">
                      <h5 class="text-1B4962"><b>Sales Consulting</b></h5>
                      <p>
                        Become a Pro in Direct Sales (DSA), B2B, B2C,
                        Distribution, Franchise, and Retail. With our Sales
                        Consultancy, we build a process of improving attitude to
                        drive professional sales behavior and maximize sales
                        revenue.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 p-2">
                <div class="col-12">
                  <div class="col-12 d-flex">
                    <div class="col-3 text-E94D65 display-4 text-center">
                      <i class="fa fa-comments icon text-E94D65"></i>
                    </div>
                    <div class="col-9">
                      <h5 class="text-1B4962"><b>Human Resources</b></h5>
                      <p>
                        We consult companies in HR Strategy, Competency Mapping,
                        Design of Variable pay, Employee Survey, Hiring
                        Strategies, Organization Restructuring, HR Process
                        Outsourcing, PMS, Talent Management & IR Issues.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 p-2">
                <div class="col-12">
                  <div class="col-12 d-flex">
                    <div class="col-3 text-E94D65 display-4 text-center">
                      <i class="fa fa-bullhorn icon text-E94D65"></i>
                    </div>
                    <div class="col-9">
                      <h5 class="text-1B4962"><b>Marketing Consulting</b></h5>
                      <p>
                        Being the best Marketing Consultants in Pune, We closely
                        work with companies in new product launches, develop
                        brand awareness or promote products & services. We also
                        support designing a detailed Go-to-Market (GTM) plan,
                        designing an Irresistible Offer, and identify the
                        appropriate marketing mix to reach out to their target
                        audience.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 p-2">
                <div class="col-12">
                  <div class="col-12 d-flex">
                    <div class="col-3 text-E94D65 display-4 text-center">
                      <i class="fa fa-grav icon text-E94D65"></i>
                    </div>
                    <div class="col-9">
                      <h5 class="text-1B4962"><b>Franchise Consulting</b></h5>
                      <p>
                        If you are looking for exponential growth in your
                        business then Franchising can be a great Idea. We build
                        a strong franchisee foundation. & help Companies with
                        clarity on evaluating the product & service franchise
                        ability, designing Franchisee Model, P&L forecast & help
                        to understand the critical factors of success?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 p-2">
                <div class="col-12">
                  <div class="col-12 d-flex">
                    <div class="col-3 text-E94D65 display-4 text-center">
                      <i class="fa fa-users icon text-E94D65"></i>
                    </div>
                    <div class="col-9">
                      <h5 class="text-1B4962">
                        <b>Distribution Consulting</b>
                      </h5>
                      <p>
                        We help our clients in designing a GTM-Go-to-market
                        strategy for sale & Distribution channels. Our approach
                        is to improve distribution performance by increasing
                        distribution productivity, efficiency & reducing costs &
                        implementing best distribution practices. We Help
                        Companies in setting up distribution networks in India.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div class="col-12 text-center">
                <button class="btn btn-E94D65" onclick="window.location='services'">
                  View All Services
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Meet Your Coach -->
    <div class="container-fluid meet-uc" onmouseenter="progressStart()">
      <div class="row">
        <div class="col-md-6 p-0">
          <img src="./assets/business-coach.png" width="100%" alt="" />
        </div>
        <div class="col-md-6 data">
          <h5 class="d-flex align-items-center">
            <hr class="col-2 mr-3 rounded"  />
            &nbsp; Meet Your Coach
          </h5>
          <h1 class="display-2">
            <span class="text-1B4962">
              Meet Virendra Ingle
            </span>
            <br />
            <span class="text-E94D65">
              <b>India's #1 Business Coach</b>
            </span>
          </h1>
          <div class="row">
            <p class="col-md-6">
              Virendra Ingle, India's Best Business Coach, a Franchise Coach,
              Leadership Coach, Sales & Distribution Consultant & keynote
              Motivational Speaker. He is on a mission to help Solopreneurs /
              SME / MSMEs to create next-level leaders and autopilot their
              business by 1-2-1 Business Coaching & Business Consulting.
            </p>
            <p class="col-md-6">
              He is coaching aspiring entrepreneurs, SMEs, and Mid-sized
              Corporates sowing the seeds of designing their ideal business
              plan, Setting goals, People management, and building next-level
              leaders. He helps business owners to choose the right business
              model to run their business in an autopilot mode and become
              successful Entrepreneur.
            </p>

            <div class="col-md-4 mt-5 text-center" id="progress-div">
              <div class="progress blue">
                <span class="progress-left">
                  <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar"></span>
                </span>
                <div
                  class="progress-value display-3 d-flex align-items-center justify-content-center"
                >
                  <i class="fa fa-hourglass icon text-E94D65"></i>
                </div>
              </div>
              <h3 class="text-danger pt-3">
                <b>Consistency</b>
              </h3>
              <p>
                Consistency is the gap between failure and achievement.
              </p>
            </div>
            <div class="col-md-4 mt-5 text-center" id="progress-div2">
              <div class="progress blue">
                <span class="progress-left">
                  <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar"></span>
                </span>
                <div
                  class="progress-value display-3 d-flex align-items-center justify-content-center"
                >
                  <i class="fa fa-bar-chart icon text-E94D65"></i>
                </div>
              </div>
              <h3 class="text-danger pt-3">
                <b>Improvement</b>
              </h3>
              <p>
                Improve a business strategy to optimize its underlying processes
                and procedures.
              </p>
            </div>
            <div class="col-md-4 mt-5 text-center" id="progress-div3">
              <div class="progress blue">
                <span class="progress-left">
                  <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                  <span class="progress-bar"></span>
                </span>
                <div
                  class="progress-value display-1 d-flex align-items-center justify-content-center"
                >
                  <i class="fa fa-globe icon text-E94D65"></i>
                </div>
              </div>
              <h3 class="text-danger pt-3">
                <b>Branching</b>
              </h3>
              <p>
                We help the business to multifold their revenue and create
                success stories.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Testemonials -->
    <div class="container-fluid testmonials mt-5">
      <div class="row">
        <div class="col-md-5 offset-md-1 data mb-5">
          <h5 class="d-flex align-items-center text-light">
            <hr class="col-2 mr-3 rounded"  />
            &nbsp; GREAT REVIEWS FOR OUR SERVICES
          </h5>
          <h1 class="display-2">
            <span class="text-E94D65">
              Trusted by some
            </span>
            <br />
            <span class="text-light">
              <b>Customer Names</b>
            </span>
          </h1>
        </div>
      </div>

      <div class="container offset-md-1">
        <div class="row">
          <div class="col-md-4 mb-5 p-3 text-center">
            <h2 class="text-E94D65">
              <strong>Best Decision Ever</strong>
            </h2>
            <p class="text-light">
              Velocity has designed a brilliant skill training program - Stepup.
              I was part of this skill training, it changed both my work and
              personal life in such a positive way. The training sessions were
              very informative, really made me think about possible scenarios,
              particularly in the workplace.
              <br />
              <span class="h1">
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
              </span>
            </p>
            <p class="text-light">
              <small>
                Jitendra Jain
              </small>
            </p>
            <p class="text-light h5">
              <strong>
                DIRECTOR
              </strong>
            </p>
            <p class="text-light">
              Excel Info soft Solutions Pvt. Ltd
            </p>
          </div>
          <div class="col-md-4 mb-5 p-3 text-center">
            <h2 class="text-E94D65">
              <strong>Absolutely Spot-On!</strong>
            </h2>
            <p class="text-light">
              First of all, I would like to thank Velocity for identifying our
              challenges & designing a skill training program that is helpful
              for the growth of my company. On this platform, we got the
              opportunity to discuss issues openly and honestly without any
              prejudice. It helped me to resolve my concerns & implement
              solutions to get results immediately.
              <br />
              <span class="h1">
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
              </span>
            </p>
            <p class="text-light">
              <small>
                Rajendra Mandare
              </small>
            </p>
            <p class="text-light h5">
              <strong>
                DIRECTOR
              </strong>
            </p>
            <p class="text-light">
              Sarvadnya Technologies
            </p>
          </div>
          <div class="col-md-4 mb-5 p-3 text-center">
            <h2 class="text-E94D65">
              <strong>Change My Life</strong>
            </h2>
            <p class="text-light">
              Step-up is an excellent skill training program where we learned
              things with lots of role plays & exercises. I learned how to
              manage time, build a team, delegate work & handle the objections
              of customers. Frameworks designed by Mr. Virendra are really
              helpful & easy to implement to see myself grown.
              <br />
              <span class="h1">
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
                <i class="fa fa-star icon text-E94D65"></i>
              </span>
            </p>
            <p class="text-light">
              <small>
                Shubham Sathpute
              </small>
            </p>
            <p class="text-light h5">
              <strong>
                MANAGER
              </strong>
            </p>
            <p class="text-light">
              Ascent Software Solutions
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Request Callback -->
    <div class="container-fluid request-cb">
      <div class="row m-0 p-0">
        <div class="col-md-5 offset-md-1 data">
          <h5 class="d-flex align-items-center">
            <hr class="col-2 mr-3 rounded"  />
            &nbsp; REQUEST A CALL BACK
          </h5>
          <h1 class="display-3">
            <span class="text-1B4962">
              Get your Business
            </span>
            <br />
            <span class="text-E94D65">
              <b>Right up There</b>
            </span>
          </h1>
          <p class="">
            Book a One to One Business Clarity video Call that will give you
            clarity about your business with specific, actionable, and
            personalized advice on your most pressing business challenges
          </p>
          <button class="btn btn-E94D65 mb-5"  onclick="window.location='tel:8899880880'">
            REQUEST A CALLBACK
          </button>
          <hr />
          <div class="container p-0 m-0">
            <div class="row p-0 m-0">
              <div class="col-md-4 col-4 rcb-item p-2 text-center">
                <span class="display-3">
                  <i class="fa fa-money icon text-E94D65"></i>
                </span>
                <h1>1000+</h1>
                <p>
                  Individuals Transformed
                </p>
              </div>
              <div class="col-md-4 col-4 rcb-item p-2 text-center">
                <span class="display-3">
                  <i class="fa fa-compass icon text-E94D65"></i>
                </span>
                <h1>100+</h1>
                <p>
                  business Owners coached and moved to next level.
                </p>
              </div>
              <div class="col-md-4 col-4 rcb-item p-2 text-center">
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
        <div class="col-md-6 p-0">
          <img src="./assets/img-callback.png" width="100%" alt="" />
        </div>
      </div>
    </div>

    <!-- Searching for consultant ? -->
    <div class="container-fluid bgn-searching">
      <div class="row data align-items-center">
        <div class="col-md-9">
          <h5 class="d-flex align-items-center text-light">
            <hr class="col-2 mr-3 rounded"  />
            &nbsp; GREAT REVIEWS FOR OUR SERVICES
          </h5>
          <h3 class="text-light">
            Searching for a Best Business Consultant?
          </h3>
        </div>
        <div class="col-md-3">
          <button class="btn btn-E94D65" onclick="window.location='contact'">
            Consult Now
          </button>
        </div>
      </div>
    </div>

    <!-- Blogs -->
    <div class="container-fluid news">
      <div class="row data">
        <h5 class="d-flex align-items-center text-1B4962">
          <hr class="col-md-1 col-2 mr-3 rounded"  />
          &nbsp; OUR ANNOUNCEMENTS
        </h5>
        <h1 class="display-3">
          <span class="text-E94D65">
            Latest
          </span>
          <span class="text-1B4962">
            Blogs
          </span>
        </h1>
      </div>
      <div class="row">

            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $id = $row['id'];
                    $img = $row['img'];
                    $title = $row['title'];
                    $dop = $row['dop'];
                    $length++;
                    if($length > 3){
                      break;
                    }
                    ?>


                    <div class="col-md-4 p-3">
                        <div class="blog pt-2"  style="background: url(./admin/<?php echo $img; ?>) center; background:cover;">
                            <div class="dtime offset-7 col-5 d-flex align-items-center justify-content-center bg-white p-2 rounded">
                                <p class="d-flex justify-content-end m-0"> <?php echo $dop; ?> </p>
                            </div>
                            <div class="blogdata">
                            <h5 class="d-flex align-items-center text-light">
                                <hr class="col-1 mr-3 rounded"  />
                                &nbsp; BLOG
                            </h5>
                            <h2 class="text-light">
                                <?php echo $title; ?>
                            </h1>
                            <span onclick="window.location='blog?id=<?php echo $id; ?>' " role="button" class="text-E94D65">
                                Read more >
                            </span>
                            </div>
                        </div>
                    </div>
                          
            <?php
                }
            } ?>

      </div>
    </div>

    <!-- Map -->
    <div class="container map">
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.408378777545!2d73.84422911469095!3d18.510438774315638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0741442ab6b%3A0xfc0752e2eb1e2854!2sVelocity%20Xcelerator%20Pvt%20Ltd%20-%20Corporate%20Training%20%7C%20Sales%20Training%20Company%20-%20Pune!5e0!3m2!1sen!2sin!4v1651031442032!5m2!1sen!2sin" 
          width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
        <div class="col-10 offset-1">
          <div class="row data bg-white align-items-center">
            <div class="col-md-4">
              <h5 class="d-flex align-items-center text-1B4962">
                <hr class="col-2 mr-3 rounded"  />
                &nbsp; OUR OFFICES
              </h5>
              <h2 class="text-1B4962">
                Get in Touch
              </h2>
              <p>
                Come and visit our Office or simply send us an email anytime you want. We are open to all suggestions from our clients.
              </p>
            </div>
            <div class="col-md-4 d-flex">
              <span class="text-E94D65 h1 col-2"> 
                <i class="fa fa-address-card icon text-E94D65"></i>
              </span>
              <span class="col-9">
                <h4>
                  Address
                </h4>
                <p>
                  206, Pinnacle Prestige, Tilak Road, Sadashiv Peth, Pune-411030, Maharashtra, India.
                </p>
              </span>
            </div>  
            <div class="col-md-3 row">
              <span class="text-E94D65 h2 col-2 offset-md-1" role="button" onclick="window.location='tel:8899880880'"> 
                <i class="fa fa-phone icon text-E94D65"></i>
              </span>
              <span class="col-9" role="button"  onclick="window.location='tel:8899880880'">
                <h4>
                  Call us
                </h4>
                <p>
                  +91 8899880880
                </p>
              </span>
              <span class="text-E94D65 h2 col-2 offset-md-1"> 
                <i class="fa fa-envelope icon text-E94D65"></i>
              </span>
              <span class="col-9">
                <h4>
                  Email us
                </h4>
                <p>
                  contact@velocityxcelerator.com
                </p>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>


  <?php include 'chat-bot.php'; ?>
  
  <?php include 'footer.php'; ?>
