<!DOCTYPE html>
<html>
<head>
 <meta></meta>
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Carattere&family=Carter+One&family=Finger+Paint&family=Lato:ital,wght@1,700&family=Mansalva&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"> 
 <link rel="stylesheet" href="css/hidden.css">
</head>
<body>

<header>
    <div class="text-center">
    <br/>
      <div class="copy">  
      <ul>   
            <li><a class="link" href="../index.php">Home</a></li>
            <li><a class="link" href="../about.php">About</a></li>
            <li><a class="link" href="../resume/portfolio.php">Portfolio</a></li>
            <li><a class="link" href="../contact.php">Contact Me</a></li>
                           
        </ul>
        </div>
   
    </div>
  </header>



<section class="top">
<br></br>
<h1>Can you find the hidden button?</h1>
<br></br>
<p>Please try to find it.</p>
<br></br>
<div class="neon-btn" >
<button type="submit" id="light" class="btn one">I'm not there.</button>
<br></br>
<button type="submit" id="light" class="btn two">Don't click here.</button>
<br></br>
<button type="submit" id="light" class="btn three" onclick="openPopUp()">Go Away Now!</button>
<br></br>
</div>
</section>

<form method="post">
<button type="submit" class="btn" name="return" value="submit">Home page.</button>
</form>



<?php
if (isset($_POST['return'])) {
      
    header("Location: ../about.php");
     
  } 
?>





<div class="popup" id="success">
<img src="../img/tick.png" >
 <h2>Congratulation!<h2>
<p>Your found the button. Thanks.</p>
<button type="button" onclick="closePopUp()">OK</button>




<script>
let popup = document.getElementById("success");

function openPopUp(){

    popup.classList.add("open-popup");
}

function closePopUp(){

popup.classList.remove("open-popup");
}

</script>
</body>
</html>

