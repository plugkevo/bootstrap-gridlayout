<?php include('process.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Gridlayout</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<body>
    <!-- navigation bar here -->
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Kevann Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

                
        
            <div class="collapse navbar-collapse" id="navbardisplaynavigations">
                <div class="navbar-nav">
                     <a href="index.php" class="nav-link active">Home</a>
                     <a href="aboutus.html" class="nav-link"> About us</a>
                     <a href="contactus.html" class="nav-link">Contact us</a>
                     
                     
                </div>

            </div>
    
        </div>
        

    </nav> 

    <!-- end navigation bar here -->
    <main class="p-5 mb-4 bg-light ">
    <h1>
        Welcome, 
    </h1>
    <p>To kevann group of schools where we offer quality education in all levels from CBC to 8-4-4 and  the british education system.
    </p>
    <button class="btn btn-primary">learn more</button>
    </main> 

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h5>8-4-4</h5>
                <p>The 8-4-4 system of education was the primary education system in Kenya between 1985 and 2019. It was named for its structure of 8 years in primary school, 4 years in secondary school, and 4 years in university or other tertiary education. The system aimed to produce a skilled and knowledgeable workforce that would drive Kenya's economic development. </p>
                <button class="btn btn-primary">view details</button>
            </div>
            <div class="col-lg-4">
                <h5> Competency-Based Curriculum (CBC)</h5>
                <p>Under this system, each learner's progress is monitored over a period of 2-6-3-3 years, evenly divided into three major levels of education: Early years education. Middle school education. Senior school, tertiary, and university education.</p>
                 <button class="btn btn-primary">view details</button>
            </div>
            <div class="col-lg-4">
                <h5>British education system</h5>
                <p>The education system in the UK is divided into four main parts, primary education, secondary education, further education and higher education
                    The education system in the UK is also split into "key stages" which breaks down as follows:
                    Key Stage 1: 5 to 7 years old
                    Key Stage 2: 7 to 11 years old
                    Key Stage 3: 11 to 14 years old
                    Key Stage 4: 14 to 16 years old</p>
                <button class="btn btn-primary">view details</button>
         </div>

            <!-- contact us page here -->
            <div class="row pt-5">
         <h3>Contact us</h3>
         <p>For more information click here <a href="contactus.html">contact us</a></p>
                <form action="index.php" method="POST">
                    
                    <?php
                    if($response)
                    {
                        include('response.php');
                    }
                    ?>
                


                   <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="please enter your first name">

                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="please enter your last name">
                    </div>
                   </div>
                   <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">email</label>
                        <input type="text"name="email"  class="form-control" placeholder="please enter your email">

                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="please enter your last name">
                    </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-12">
                           <label for="message" class="form-label">Your message</label>
                           <textarea cols="30" name="message" rows="10" class="form-control" placeholder="enter your message"></textarea>
                       </div>

                   </div>
                   <br>

                   <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                </form>
                </div>
                	
            </div>
             <!-- end contact us page -->
        




            
            <hr>
            
            <footer>
                &copy; Company 2022
            </footer>

    
     </div>
     




        
            
    


    

    
    








    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>