    <!-- Get In Youch -->
    <div class="container getintouch pt-5 pb-5">
      <div class="row">
        <div class="col-md-6 p-2 data text-center">
          <h5
            class="d-flex align-items-center justify-content-center text-E94D65"
          >
            <hr class="col-1 mr-3 rounded" />
            &nbsp; CONTACT US WITH EASE &nbsp;
            <hr class="col-1 mr-3 rounded" />
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
            <br />
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
                  206, Pinnacle Prestige, Tilak Road, Sadashiv Peth,
                  <br />
                  Pune-411030, Maharashtra, India
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
          <form action="get-in-touch-add" onsubmit="return formValidation(event)" method="POST" enctype="multipart/form-data">
            <div class="form-group p-2">
              <input
                type="text"
                name="fname"
                class="form-control p-3"
                id="nameInput"
                maxlength="50"
                aria-describedby="nameHelp"
                placeholder="Enter Name*"
              />
            </div>
            <div class="form-group p-2">
              <input
                type="email"
                name="email"
                maxlength="30"
                class="form-control p-3"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Email Address"
              />
            </div>
            <div class="form-group p-2">
              <input
                type="text"
                name="mobile"
                class="form-control p-3"
                id="mobileInput"
                placeholder="Enter your mobile number"
              />
            </div>
            <div class="form-group p-2 form-check">
              <textarea
                name="msg"
                class="form-control"
                id="msg"
                maxlength="300"
                cols="30"
                rows="5"
              >Enter Your Message</textarea
              >
            </div>
            <button type="submit" class="btn btn-E94D65 mt-4">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <script>
      function formValidation() {
        var phone=document.getElementById("mobileInput").value;
        if(isNaN(phone))
        {
            alert("Please enter digits only in mobile number");
            return false;
        }

        else if(phone.length>=10 OR phone.length<=12)
        {
            alert("Please Enter Valid Mobile Number");
            return false;
        }
        else
        {
            return true;
        }  
      }
    </script>