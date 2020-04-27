
<?php 
error_reporting(0);
include 'config.php';
if(isset($_POST['submitEnq']))
  {

 
      $name  = $_POST['name'];
      $email  = $_POST['email'];
      $phone  = $_POST['phone'];
      $service  = $_POST['service'];
      $enquiry_details  = $_POST['enquiry_details'];

    $query = "INSERT INTO `enquiries` ( `name`,`email`,`phone`,`service`, `enquiry_details`)
      VALUES
      ('$name','$email','$phone','$service','$enquiry_details')";

      if(mysqli_query($con,$query)){

$to      = $email; // Send email to our user
$subject = "Email Verification mail"; // Give the email a subject 
$emessage = "welcome";

// if emessage is more than 70 chars
$emessage = wordwrap($emessage, 70, "\r\n");

// Our emessage above including the link
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: no-reply <noreply@yourdomain.com>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion(); // Set from headers

mail($to, $subject, $emessage, implode("\r\n", $headers));

              
  }

}
?>

<form method="post" id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make a Quick Service Enquiry</h3>
              
                    <div class="row">
                          <div class="col-xl-6">
                            <input required="" name="name" type="text"  placeholder="Name">
                        </div>
                        <div class="col-xl-6">
                             <input required="" name="email" type="email"  placeholder="Email">
                        </div>
                        <div class="col-xl-6">
                            <input required="" name="phone" type="text"  placeholder="Phone no.">
                        </div>
                     
                        
                        <div class="col-xl-6">
                            <select required="" name="service" class="form-select wide" id="default-select" class="">
                                <option data-display="Select Service">Services</option>
                                <option value="Emergency Medical">Emergency Medical</option>
                                <option value="Emergency Road">Emergency Road</option>
                                <option value="Emergency Fire">Emergency Fire</option>
                              
                            </select>
                        </div>
                    
                      
                        <div class="col-xl-12">
                           
                            <textarea required="" name="enquiry_details" style="margin-bottom: 30px;" class="form-control w-100"  placeholder="Enquiry Details"></textarea>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" name="submitEnq" class="boxed-btn3">Confirm Enquiry</button>
                        </div>
                    </div>
            
            </div>
        </div>
    </form>