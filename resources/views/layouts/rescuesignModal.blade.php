
<?php 
error_reporting(0);
include 'config.php';
if(isset($_POST['submitRes']))
  {
      $first_name  = $_POST['first_name'];
      $last_name  = $_POST['last_name'];
      $company_name  = $_POST['company_name'];

      $email  = $_POST['email'];
      $phone  = $_POST['phone'];
      $address  = $_POST['address'];
     
      $city  = $_POST['city'];
      $county  = $_POST['county'];
      $operating_town  = $_POST['operating_town'];
      $offer_service  = $_POST['offer_service'];
      $vehicle_make  = $_POST['vehicle_make'];
      $vehicle_reg  = $_POST['vehicle_reg'];
      $vehicle_photo  = $_POST['vehicle_photo'];
      $passport_photo  = $_POST['passport_photo'];
      $postal_code  = $_POST['postal_code'];


    


    $query = "INSERT INTO `rescuers` ( `first_name`,`last_name`,`company_name`,`email`, `phone`, `address`, `city`, `county`,`operating_town`,`offer_service`,`vehicle_make`,`vehicle_reg`,`vehicle_photo`,`passport_photo`, `postal_code`)
      VALUES
      ('$first_name','$last_name','$company_name','$email','$phone','$address','$city','$county','$operating_town','$offer_service','$vehicle_make','$vehicle_reg','$vehicle_photo','$passport_photo','$postal_code')";


            $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["vehicle_photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submitRes"])) {
    $check = getimagesize($_FILES["vehicle_photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["vehicle_photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["vehicle_photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["vehicle_photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



            $target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES["passport_photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submitRes"])) {
    $check = getimagesize($_FILES["passport_photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["passport_photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["passport_photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["passport_photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

      if(mysqli_query($con,$query)){

        

    $success= '<div align="center" class="alert alert-success alert-dismissible fade show"><strong>Success!</strong> Sign Up Made Successfully. We will get back to you shortly! <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
     
        }else{

            $failed= '<div align="center" class="alert alert-danger alert-dismissible fade show"><strong>Failed!</strong> Sign Up Not Successfull. Retry or contact us! <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        }
      
  }
?>

<form method="post" id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Sign Up As A Rescuer</h3>
              
                    <div class="row">
                          <div class="col-xl-6">
                            <input type="text" name="first_name"  placeholder="First Name">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" name="last_name"  placeholder="Last Name">
                        </div>

                          <div class="col-xl-6">
                            <input type="text" name="company_name"  placeholder="Company Name(If Any)">
                        </div>
                        
                        <div class="col-xl-6">
                             <input type="email" name="email"  placeholder="Email">
                        </div>
                         <div class="col-xl-6">
                            <input type="text" name="phone" placeholder="Enter Phone">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" name="address" placeholder="Enter Adress">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" name="postal_code" placeholder="Enter Postal Code">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" name="city" placeholder="Enter Your City">
                        </div>
                        <div class="col-xl-6">
                            <select name="county">
                               <option >Select Operation County</option>
                              <option value="Mombasa">Mombasa</option>
                                <option value="Kwale">Kwale</option>
                                <option value="Kilifi">Kilifi</option>
                                <option value="Tana River">Tana River</option>
                                <option value="Lamu">Lamu</option>
                                <option value="Taita-Taveta">Taita-Taveta</option>
                                <option value="Garissa">Garissa</option>
                                <option value="Wajir">Wajir</option>
                                <option value="Mandera">Mandera</option>
                                <option value="Marsabit">Marsabit</option>
                                <option value="Isiolo">Isiolo</option>
                                <option value="Meru">Meru</option>
                                <option value="Tharaka-Nithi">Tharaka-Nithi</option>
                                <option value="Embu">Embu</option>
                                <option value="Kitui">Kitui</option>
                                <option value="Machakos">Machakos</option>
                                <option value="Makueni">Makueni</option>
                                <option value="Nyandarua">Nyandarua</option>
                                <option value="Nyeri">Nyeri</option>
                                <option value="Kirinyaga">Kirinyaga</option>
                                <option value="Murang'a">Murang'a</option>
                                <option value="Kiambu">Kiambu</option>
                                <option value="Turkana">Turkana</option>
                                <option value="West Pokot">West Pokot</option>
                                <option value="Samburu">Samburu</option>
                                <option value="Trans Nzoia">Trans Nzoia</option>
                                <option value="Uasin Gishu">Uasin Gishu</option>
                                <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
                                <option value="Nandi">Nandi</option>
                                <option value="Baringo">Baringo</option>
                                <option value="Laikipia">Laikipia</option>
                                <option value="Nakuru">Nakuru</option>
                                <option value="Narok">Narok</option>
                                <option value="Kajiado">Kajiado</option>
                                <option value="Kericho">Kericho</option>
                                <option value="Bomet">Bomet</option>
                                <option value="Kakamega">Kakamega</option>
                                <option value="Vihiga">Vihiga</option>
                                <option value="Bungoma">Bungoma</option>
                                <option value="Busia">Busia</option>
                                <option value="Siaya">Siaya</option>
                                <option value="Kisumu">Kisumu</option>
                                <option value="Homa Bay">Homa Bay</option>

                                <option value="Migori">Migori</option>
                                <option value="Kisii">Kisii</option>
                                <option value="Nyamira">Nyamira</option>
                                <option value="Nairobi City">Nairobi City</option>
                                

                            </select>
                        </div> 

                         <div class="col-xl-6">
                           
                            <select name="operating_town">
                               <option >Select Operation Town</option>
                                <option value="Nairobi Metro">Nairobi Metro</option>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Kisumu">Kisumu</option>
                                <option value="Nakuru">Nakuru</option>
                                <option value="Eldoret">Eldoret</option>
                                <option value="Kehancha">Kehancha</option>
                                <option value="Ruiru">Ruiru</option>
                                <option value="Kikuyu">Kikuyu</option>
                                <option value="Kangundo-Tala">Kangundo-Tala</option>
                                <option value="Malindi">Malindi</option>
                                <option value="Naivasha">Naivasha</option>
                                <option value="Kitui">Kitui</option>
                                <option value="Machakos">Machakos</option>
                                <option value="Thika">Thika</option>
                                <option value="Athi River (Mavoko)">Athi River (Mavoko)</option>
                                <option value="Karuri">Karuri</option>
                                <option value="Nyeri">Nyeri</option>
                                <option value="Kilifi">Kilifi</option>
                                <option value="Garissa">Garissa</option>
                                <option value="Vihiga">Vihiga</option>
                                <option value="Mumias">Mumias</option>
                                <option value="Bomet">Bomet</option>
                                <option value="Molo">Molo</option>
                                <option value="Ngong">Ngong</option>
                                <option value="Kitale">Kitale</option>
                                <option value="Litein">Litein</option>
                                <option value="Limuru">Limuru</option>
                                <option value="Kericho">Kericho</option>
                                <option value="Kimilili">Kimilili</option>
                                <option value="Awasi">Awasi</option>
                                <option value="Kakamega">Kakamega</option>
                                <option value="Kapsabet">Kapsabet</option>
                                <option value="Mariakani">Mariakani</option>
                                <option value="Kiambu">Kiambu</option>
                                <option value="Mandera">Mandera</option>
                                <option value="Nyamira">Nyamira</option>
                                <option value="Mwingi">Mwingi</option>
                                <option value="Kisii">Kisii</option>
                                <option value="Wajir">Wajir</option>
                                <option value="Rongo">Rongo</option>
                                <option value="Bungoma">Bungoma</option>
                                <option value="Ahero">Ahero</option>
                                <option value="Nandi Hills">Nandi Hills</option>
                                <option value="Makuyu">Makuyu</option>
                                <option value="Kapenguria">Kapenguria</option>
                                <option value="Taveta">Taveta</option>
                                <option value="Narok">Narok</option>
                                <option value="Ol Kalou">Ol Kalou</option>
                                <option value="Kakuma">Kakuma</option>
                                <option value="Webuye">Webuye</option>

                                <option value="Malaba">Malaba</option>
                                <option value="Mbita Point">Mbita Point</option>

                                <option value="Ukunda">Ukunda</option>
                                <option value="Wundanyi">Wundanyi</option>

                                <option value="Busia">Busia</option>
                                <option value="Runyenjes">Runyenjes</option>
                                <option value="Migori">Migori</option>
                                <option value="Malava">Malava</option>
                                <option value="Suneka">Suneka</option>
                                <option value="Embu">Embu</option>
                                <option value="Ogembo">Ogembo</option>
                                <option value="Homa Bay">Homa Bay</option>
                                <option value="Lodwar">Lodwar</option>
                                <option value="Kitengela">Kitengela</option>
                                <option value="Ukwala">Ukwala</option>
                                <option value="Keroka">Keroka</option>
                                <option value="Meru">Meru</option>
                                <option value="Matuu">Matuu</option>
                                <option value="Oyugis">Oyugis</option>
                                <option value="Nyahururu">Nyahururu</option>
                                <option value="Kipkelion">Kipkelion</option>
                                <option value="Luanda">Luanda</option>
                                <option value="Nanyuki">Nanyuki</option>
                                <option value="Maua">Maua</option>
                                <option value="Mtwapa">Mtwapa</option>
                                <option value="Isiolo">Isiolo</option>
                                <option value="Eldama Ravine">Eldama Ravine</option>
                                <option value="Voi">Voi</option>
                                <option value="Siaya">Siaya</option>
                                <option value="Nyansiongo">Nyansiongo</option>
                                <option value="Londiani">Londiani</option>
                                <option value="Iten/Tambach">Iten/Tambach</option>
                                <option value="Chuka">Chuka</option>
                                <option value="Malakisi">Malakisi</option>
                                <option value="Juja">Juja</option>
                                <option value="Ongata Rongai">Ongata Rongai</option>
                                <option value="Bondo">Bondo</option>
                                <option value="Moyale">Moyale</option>
                                <option value="Maralal">Maralal</option>
                                <option value="Gilgil">Gilgil</option>
                                <option value="Nambale">Nambale</option>
                                <option value="Tabaka">Tabaka</option>
                                <option value="Muhoroni">Muhoroni</option>
                                <option value="Kerugoya/Kutu">Kerugoya/Kutu</option>
                                <option value="Ugunja">Ugunja</option>
                                <option value="Yala">Yala</option>
                                <option value="Rumuruti">Rumuruti</option>
                                <option value="Burnt Forest">Burnt Forest</option>
                                <option value="Maragua">Maragua</option>
                                <option value="Kendu Bay">Kendu Bay</option>

                            </select>
                        </div>  


                            <div class="col-xl-6">
                           
                            <select name="offer_service">
                               <option >Select Service to Offer</option>
                              <option value="Tow Truck Service">Tow Truck Service</option>
                              <option value="Ambulance">Ambulance</option>
                              <option value="Basic Road Assistance Services">Basic Road Assistance Services</option>
                            

                            </select>
                        </div>  


                          <div class="col-xl-6">
                            <select required="" name="vehicle_make" class="form-select wide" id="default-select">
                                <option data-display="Select Vehicle Make/Model">Select Vehicle Make/Model</option>
                       <option value="Slingback">Slingback</option>
                                <option value="Rollback">Rollback</option>
                                <option value="Heavy">Heavy</option>
                                <option value="Duty">Duty</option>
                                <option value="Chassis">Chassis</option>
                                <option value="Cab/Trailer">Cab/Trailer</option>
                                <option value="Saloon">Saloon</option>
                                <option value="SUV">SUV</option>
                                <option value="Motorbike">Motorbike</option>
                                <option value="Others">Others</option>
                                
                            </select>
                        </div>  

                         <div class="col-xl-6">
                            <input type="text" name="vehicle_reg" placeholder="Enter Vehicle Reg No.(if any)">
                        </div> 


                         <div class="col-xl-6">
                            <input type="file" name="vehicle_photo" placeholder="Upload Vehicle Photo(if any)">
                        </div>  

                         <div class="col-xl-6">
                            <input type="file" name="passport_photo" placeholder="Upload Passport Photo">
                        </div>                 
                       
                      
                        <div class="col-xl-12">
                            <button type="submit" name="submitRes" class="boxed-btn3">Finish Sign Up</button>
                        </div>
                    </div>
               
            </div>
        </div>
    </form>