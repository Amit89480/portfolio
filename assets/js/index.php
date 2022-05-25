<?php
$insert =false; 
if(isset($_POST['name'])){


$server ="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);

if(!$con){
    die ("connection to this database failed".mysqli_connect_error());

}
// echo "We are connected to database";
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = "INSERT INTO `trip`.`trip` (`Name`, `Gender`, `Email`, `Phone`, `Address`, `dt`) VALUES ('$name', '$gender', '$email', '$phone', '$address', current_timestamp());";
//  echo $sql;

if($con->query($sql)==true){
    $insert =true;
    //  echo "Successfully Inserted";
}
else{
    // echo "error:$sql<br>$con->error";
}
$con->close();
}

?>
 <?php
                    if($insert==true){
                   echo  "<p>Thanks for submitting the form.We will contact you soon</p>";
                    }

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>
