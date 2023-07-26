
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dr Thiru's Eye Clinic Sight Far Life</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--FavIcon-->
    <link  rel="shortcut icon" href="assets/images/resources/logo.png" type="image/png"  sizes="32x32">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/imp.css">
    <link rel="stylesheet" href="assets/css/custom-animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/scrollbar.css">
    <link rel="stylesheet" href="assets/css/hiddenbar.css">

    <link rel="stylesheet" href="assets/css/color.css">
    <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Materalize fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>
         <!-- Main header-->
 <header class="main-header header-style-one">

<!--Start Header Top-->
<div class="header-top">
    <div class="container">
        <div class="outer-box clearfix">
            <div class="header-top-left pull-left" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <p>dr.thirupathy@orientalmedical.com.my</p>
            </div>
            <div class="apointment-btn header-top-right pull-right">
                <div class="header-social-link">
                    <ul>
                        <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                        <a href="#">+ 60 12-9759154, + 606-315 8855,</a></li>
                    </ul>
              </div>
                    <input type="button" class="btn text-white bg-dark button-box mt-1" data-toggle="modal" value="Book Appointment" data-target="#exampleModal">
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="d-flex justify-content-center">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Patient Details</h5>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <h2>Contact Us</h2>
                                <label for="thename">Name</label>
                                <input type="text" class="form-control" id="thename" placeholder="Enter Name">
                                <label for="themail">Email:</label>
                                <input type="email" class="form-control" id="themail" placeholder="Enter Email">
                                <label for="themail">Mobile:</label>
                                <input type="email" class="form-control" id="themobile" placeholder="Enter Mobile" min>
                                <label for="themsg">Message</label>
                                <textarea class="form-control" id="themsg" placeholder="Enter Message"></textarea>
                                <button class="btn btn-danger btn-sm" style="margin-top:10px;" onCLick="sendemail();">Send</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .apointment-btn {
        position: relative;
        right: 194px;
        bottom: 79px;
    }
</style>
<!--Start header Top-->

<!--End header -->

<!--Sticky Header-->

<!--End Sticky Header-->

<!-- Mobile Menu  -->

<!-- End Mobile Menu -->
</header>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script>
      AOS.init();
    </script>
  <script>
    function sendemail() {
      var userid = "kmMcRRaBLMzxrMscg"
      emailjs.init(userid);
      var thename = document.getElementById('thename').value;
      var themail = document.getElementById('themail').value;
      var themobile= document.getElementById('themobile').value;
      var themsg = document.getElementById('themsg').value;
      var validmail = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
      if (thename == "") {
        alert("Please Enter Name");
      }
      else if (themail == "" || themail.match(!validmail)) {
        alert("Please Enter Valid Email");
      }

      else if (themsg == "") {
        alert("Please Enter Message");
      }
      else {
        var contactdetail = {
          name: thename,
          email: themail,
          mobile:themobile,
          message: themsg
        };

        emailjs.send('service_l6ekean', 'template_slfc48s', contactdetail).then(function (res) {
          alert("Email Sent Successfully");
        },
          reason => {
            alert("Error Occur");
          })
      }
    }
  </script>
       
