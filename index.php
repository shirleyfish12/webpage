<!-- create at 28-Apr-2022/06-May-2022-->

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
?>

<meta charset="UTF-8">
   
   
    <title>Shirley Fung Webpage</title>
</head>
<body>


<section id='intro'>
    <div class='jumbotron bg-secondary text-dark' >
        <div class='container'>
            <div class='col-md-12'>  <!--https://getbootstrap.com/docs/5.1/layout/grid/ git layout-->
                <h2 class="blue"> <?php 
                date_default_timezone_set("Asia/Hong_Kong"); //set timezone and date
                echo date("M-Y H:i");?> 
                </h2> <br/>
     



                <h1 class="blue"> About Myself</h1>
                <h3><p class="blue"> I'm Shirley and I am trying to make
                30 websites.<br/>
                 You can follow me and check my GitHub. </p> </h3> 
                <a href="https://github.com/shirleyfish12/shirleyfish12"><button class="bn632-hover bn23">My Source Code</button></a>
                <a href="https://github.com/shirleyfish12/shirleyfish12"><button class="bn632-hover bn23">Contact me</button></a>       
            </div>
        </div>
    </div>
</section>

 
<section id="main">  
    <div class='jumbotron bg-warning text-dark' >
        <div class="container">
            <div class="row">
                <div class='offset-md-4 col-md-4 offset-md-4 text-center' >
                    <h3 class="red">Know more about me.</h3>  
                </div> 
                    <div class="row"> 
                        <div class='col-md-4 text-center'>
                            <div class='my-card'>
                                <h5 class="red"> Fast Learner </h5>
                                <div class="card">
                                    <div class="container">
                                        <br></br>
                                    <img class="icon" src="../img/heart.png">
                                    <br></br>
                                       <p class="font"> Learning new thing by using various resources, 
                                           I was able to get the language down within 3 month. 
                                           </p>
                                    </div>
                                </div>
                            </div>
                        </div>   
                                <div class='col-md-4 text-center'>
                                     <h5 class="red"> Passionate </h5>
                                        <div class="card">
                                                <div class="container">
                                                <br></br>
                                    <img class="icon" src="../img/work.jpg">
                                    <br></br>
                                                <p class="font"> I am passionate about my work. In my last job, when I faced a challenge, 
                                                    I love to put effort into solve them.</p>
                                                </div>
                                        </div>
                                </div>   
                                
                                <div class='col-md-4 text-center'>
                                <h5 class="red"> Open-minded </h5>
                                        <div class="card">
                                                <div class="container">
                                                <br></br>
                                    <img class="icon" src="../img/idea.png">
                                    <br></br>
                                                <p class="font"> I am curious to hear what others think and able to have ideas challenged.
                                                    I also patient and forgiving. 
                                                   </p>
                                                </div>
                                        </div>
                                </div>  
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
 include('footer.php'); 
?>