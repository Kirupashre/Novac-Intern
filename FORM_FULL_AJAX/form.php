
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Novac</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <script src="assets/js/intlTelInput.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src=
"https://code.jquery.com/jquery-3.5.0.js">
    </script>
</head>

<?php
require_once('cong/db.php');
$fname = $lname= $phone = $cname= $jobtitle = $email = $password  = $cityname= $txtmsg =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ((!empty($_POST["fname"])) && (!empty($_POST["phone"])) && (!empty($_POST["email"])) && (!empty($_POST["password"]) )){
    if(isset($_POST['submit'])) //POST wont show anything in the url bar
    {  $fname= $_POST['fname'];
      $lname= $_POST['lname'];
        $phone= $_POST['phone'];
        $cname= $_POST['cname'];
        $jobtitle= $_POST['jobtitle'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $cityname= $_POST['cityname'];
        $txtmsg= $_POST['txtmsg'];
    
        $sql_query= "INSERT INTO novac_ajax(fname, lname, phone, cname, jobtitle, email, password, cityname, txtmsg) 
        VALUES ('$fname', '$lname', '$phone', '$cname', '$jobtitle', '$email', '$password', '$cityname', '$txtmsg')";
    
        if(mysqli_query($con, $sql_query)){
            
          //  echo "THANK YOU ! <br> New details entry inserted successfully !";
            //include "submit.php";
            // header("Location: submit.php");
            
        }
        else {
            echo "Error" . $sql . "" .mysqli_error($con);
        }
        mysqli_close($con);
    }
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>



<body>

    <section class="header">
        <div class="container">
          <div class="header-logo">
            <img src="	https://experience.novactech.in/selling_skills/assets/img/novac_ots/Novac_Learning.png">
          </div>
          </div>
      </section>
  


  <section class="form-section">
    <div class="container">
      <div class="form-sec">
        <div class="form-left">
          <h3>
            Ready to make a quantum leap for your corporates eLearning needs?
          </h3>
        </div>
        <div>
          <div class="form-right">
            <p>Tell us a little about yourself and we’ll be in touch right away</p>


            <div class="f-form">
              <form method="post" action="" id="form" name="form">

                <div class="fe-sec">
                  <div class="form-group">
                    <input id="fname" class="form-control" type="text" name="fname" onkeyup="validateName()" placeholder="First Name" value="">
                    <span id="fnameErr" style="color: red;"> </span>
                  </div>

                  <div class="form-group">
                    <input id="lname" class="form-control" type="text" name="lname" placeholder="Last Name" value="">
                  </div>
                </div>
                <div class="fe-sec cn">
                  <div class="form-group">
                    <input class="form-control" name="phone" type="tel" id="phone" onkeyup="validatePhone()" minlength="1" maxlength="15"
                      placeholder="Contact No" value="">
                      <span id="phoneErr" style="color: red;"> </span>
                    </div>


                </div>
                <div class="fe-sec">
                  <div class="form-group">
                    <input id="cname" class="form-control" type="text" name="cname"
                      placeholder="Company Name" value="<?php echo $cname;?>">
                  </div>

                  <div class="form-group">
                    <input id="jobtitle" class="form-control" type="text" name="jobtitle" placeholder="Job Title" value="">
                  </div>
                </div>
                <div class="fe-sec">
                  <div class="form-group">
                    <input id="email" class="form-control" type="email" name="email" onkeyup="validateEmail()" placeholder="Email" value="">
                    <span id="emailErr" style="color: red;"> </span>
                  </div>

                  <div class="form-group">
                    <input id="password" class="form-control" type="password" name="password" onkeyup="validatePassword()"
                      placeholder="Password" value="">
                      <span id="passwordErr" style="color: red;"> </span>
                    </div>
                </div>
                <div class="fe-sec cn">
                  <div class="form-group">
                    <select class="form-control form-input" id="cityname" name="cityname" value="<?php echo $cityname;?>">
                      <option value="" selected="" class="">Preferred Solutions</option>
                      <option value="Lending Solutions" class="">Lending Solutions</option>
                      <option value="Insurance Solutions" class="">Insurance Solutions</option>
                      <option value="Retail Solutions" class="">Retail Solutions</option>
                      <option value="LMS Platform" class="">LMS Platform</option>
                      <option value="eLearning Content Development" class="">eLearning Content Development</option>
                      <option value="AR/VR" class="">AR/VR</option>

                    </select>
                  </div>

                </div>

                <div class="fe-sec cn">
                  <div class="form-group">
                    <input id="txtmsg" class="form-control text-area" type="text" name="txtmsg" placeholder="Message" value="<?php echo $txtmsg;?>">

                    </select>
                  </div>

                </div>


                </div>

                <div class="fe-sec cn">
                  <button type="submit" name="submit" id="submit"  class="btn btn-default">Submit </button>
                </div>

            </div>

            </form>
          </div>

        </div>
      </div>
    </div>
  </section>



  <section class="copy-right-sec">
    <div class="container">

      <div class="copy-right">
        <p></p>
      </div>
    </div>

  </section>



  <script src="valid.js"></script>
</body>
</html>