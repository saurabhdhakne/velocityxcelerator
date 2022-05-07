<?php include 'header.php'; ?>

    <div class="container getintouch pt-5 pb-5">
      <div class="row">

        <h1 class="text-center mt-5 mb-5">
            <strong>
                <span class="text-E94D65">    
                    Manage Staff Easily
                </span>
                <span class="text-19435A">     
                    from your Desktop
                </span>
            </strong>
        </h1>
        <div class="col-md-6 p-2">
          <form action="pagarbook-login" onsubmit="return formValidation(event)" method="POST" enctype="multipart/form-data">
            <div class="form-group p-2">
              <input
                type="text"
                name="fname"
                class="form-control p-3"
                id="nameInput"
                aria-describedby="nameHelp"
                placeholder="Enter Your Name*"
              />
            </div>
            <div class="form-group p-2">
              <input
                type="email"
                name="email"
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
                placeholder="Enter your contact number"
              />
            </div>
            <div class="form-group p-2">
              <input
                type="text"
                name="city"
                class="form-control p-3"
                id="mobileInput"
                placeholder="Enter city"
              />
            </div>
            <button type="submit" class="btn btn-E94D65 mt-4">Submit</button>
          </form>
        </div>

        <div class="col-md-6">
            <img src="./assets/main.png" width="100%" alt="pagarbook image">
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
    
  <?php include 'footer.php'; ?>