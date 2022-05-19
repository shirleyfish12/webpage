<!DOCTYPE html>
<html lang="en">
<head>
<!-- include bootstrap -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!-- import bootcamp for header-->
<!-- include google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carattere&family=Carter+One&family=Finger+Paint&family=Lato:ital,wght@1,700&family=Mansalva&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"> 


<!--Add css -->
<link rel="stylesheet" href="css/style.css">

<?php 
 include('header.php'); 
 include ('dbConnect.php');
?>
</head>
<body>

<section>
    <div class="row">
        <div id="contact" class='offset-md-2 col-md-8 offset-md-2 text-center'>
            <div class="card">
            <div class="container">
            <div class="card-block">
                <h2>Contact Me</h2>
                <form action="contact.php?userdetail" method="post">
                <div class="form-group">                 
                    <input type="email" class="form-control" name="email" placeholder="Email" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" value="">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="10" placeholder="Enter your message" value=""></textarea>
                </div>
                <br></br>
                <div id="send" class="form-group">
                    <button type="submit" class="btn" name="contactSubmit">Send message</button>
                <br></br>    
                </div> 
                </form>

            </div>
            </div>
            </div>
        </div>
    </div>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--Add javascript -->

</body>
</html>

<?php


 //if  Something posted
 
   
    if (isset($_POST['contactSubmit'])) {
      // btn contact me, when click the submit form,store the data 
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      //prepare the SQL qerry
       $stat = "INSERT INTO `mywork`.`contact_detail` (`email`, `subject`, `message`) VALUES ('$email', '$subject', '$message');";
       $result = mysqli_query($conn, $stat); //use $conn to connect the database, refer to dbConnect file and use $stat to execute the SQL qerry  
       
       
       // echo "insert sucessfully";
 
      //var_dump($_POST);  //chk when data store
    } 
    
   /*
    $SQL = "SELECT * FROM `contact_detail`;";
    $check = mysqli_query($conn, $SQL);
    $order = mysqli_fetch_assoc($check);
    pre_r($order);
*/
    
  


/*
    echo '<br/>';
    echo $email.'<br/>';
    echo $subject.'<br/>';
    echo $message.'<br/>';
   */



// format for array
function pre_r($array) 
{
echo '<pre>';
print_r($array);
echo '</pre>';
}

/* $conn = new mysqli('localhost','root', '','');
if ($conn-> connect_error) {
    die('Connection Failed : ' .$conn->connect_error);
}else {
    $stat = $conn->prepare("insert into registration(id,email,subject,message)
    values(?,?,?,?) ");
    $stmt->bind_param("issi", $email, $subject, $message);
    $stmt->execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
} */


//close database    
//$conn->close();
 include('footer.php'); 
?>

