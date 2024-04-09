<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>SIGCE</strong>HELPDESK </a>

    <nav class="navbar">
        <a href="#home">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#services">SERVICES</a>
        <a href="#doctors">DOCTORS</a>
        <a href="#appointment">APPOINTMENT</a>
        <a href="#review">REVIEW</a>
        <a href="#blogs">BLOGS</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>


<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.
            It conveys a message of trust,care and partnership between the healthcare provider and the patients,
            emphasizing a collaborative effort towards achieving and maintaining good health.
            Welcome To Healthcare Hospitals, Where Compassionate Care Meets Cutting-Edge Medicine.
             Our Commitment To Excellence Has Made Us A Leading Healthcare Provider In Mangaluru And Beyond. 
        </p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3> 150+ </h3>
        <p>Doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>Satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>Bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>Available Hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>It provided unparalled healthcare services that adhere to the highest standards of excellence,
                inovation and patient-centered care.</p>
            <p> It implies a dedication to harsessing cutting-edge medical technologies, evidence based practices
                and multidisciplinary expertise to deliver superior outcomes and experiences for patients.
                For 4  Years, We Have Been Dedicated To Serving Our Community With Integrity, Innovation, And
                 A Patient-Centered Approach.
            </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Free Checkups</h3>
            <p>It offer individuals access to comprehensive healthcare evaluations and assessment at no cost.
               These services are designed to promote preventive care and early detection of health issues,
               empowering individuals to prioritize their well being proactively.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 Ambulance</h3>
            <p>It services ensure timely and efficient response to medical emergencies and contribute to
               saving lives and Ambulances are equipped with trained medical professionals capable of providing
               necessary medical assistance during transit.
            </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Expert Doctors</h3>
            <p>At our hospital, we pride ourselves on offering expert medical care delivered by a treatment
               of highly skilled and experienced doctors.Our doctors are leaders in their respective fields, 
               dedicated to providing personalized and compassionate care to every patient.
            </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Medicines</h3>
            <p>At our hospital, we understand the importance of access to high-quality medicines in
               promoting health and healing. Our comprehensive medicines services are designed to 
               ensure that our patients receive the best possible pharamaceutical care throughout their
               treatment journey.
            </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Bed Facility</h3>
            <p>At our hospital, we understand the importance of providing a comfortable and healing enviornment
               for our patients.With a commitment to excellence and patient satisfication, we aim to provide the
               highest standard of comfort and care to every individual entrusted to our facility.
            </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Total Care</h3>
            <p>At our hospital, Total Care is more than just a phrase- it's our guiding principle and 
                commitment to providing comprehensive and personalized healthcare solutions to our patients.
                we strives to exceed expections and each patient receives the highest quality of care and 
                attention they deserve.
            </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Dr.Anandibai Joshi</h3>
            <span>oncologist surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Dr Sandeep Vaishya</h3>
            <span>Urology</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Dr.Indira Hinduja</h3>
            <span>nephrology</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Dr.Manjula Anagani</h3>
            <span>Neurologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Dr Naresh Trehan</h3>
            <span>Gyanecologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Dr Pradeep Sharma</h3>
            <span>Dermatology</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>Dr.Gagandeep Kang</h3>
            <span>intern doctor</span>
            <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>Dr Rita Bakshi</h3>
            <span>Neurologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>Dr Ajay Kaul</h3>
            <span>oncologist surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->


<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>Sharadhwanth U Acharya</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">My experience at hospital was nothing short of exceptional.I have the utmost 
                confidence in their ability to deliver top-notch healthcare services, and i would not 
                hesistate to recommend them to anyone in need of medical care. Thank you to the entire 
                team for your dedication, professionalism and genuine compassion.
            </p>
        </div>

        <div class="box">
            <img src="image/img21.jpg" alt="">
            <h3>Prakhyath N Kulal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I cannot express enough gratitude for the exceptional care I received at 
                hospital. From the moment I walked through the doors, I was met with warmth, compassion and
                professionalism. The staff went above and beyond to ensure my comfort and well being throughout
                my entire stay.
            </p>
        </div>

        <div class="box">
            <img src="image/img22.jpg" alt="">
            <h3>Sebastian Rathod</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">The medical team at hospita is truly outstanding. Not only are they highly skilled
                and knowledgeable, but they also take the time to listen, edducate and involve patients in their care 
                plans. I felt empowered and supported every step of the way, which made a significant difference in my
                recovery journey.
            </p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2023 </a>
                </div>
                <h3>Patient Stories: Inspiring Tales of Recovery and Resilience</h3>
                <p>Through patient testimonials and success stories, the blog highlights the journeys of
                   individuals who have overcome health challenges with support of the hospital's medical 
                   team.These stories often highlight the journey of patients dealing with illnesses,
                    injuries, or other medical conditions.
                   </p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/work1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 11 september, 2022 </a>
                </div>
                <h3>Patient Safety and Quality Care: Our Commitment to Excellence</h3>
                <p>This series focuses on the hospital's commitment to patient safety, quality care, and
                     continuous improvement initiatives. It discusses measures taken to ensure patient safety, 
                     maintain high standards of care, and enhance the overall patient experience.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 17 january, 2022 </a>
                </div>
                <h3>Navigating Your Healthcare Journey: A Guide to Hospital Services</h3>
                <p>This blog provides an overview of the hospital's services, including inpatient and outpatient care, 
                    specialty services, diagnostic facilities, and support programs. It helps patients and 
                    visitors understand what to expect during their healthcare experience at the hospital.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 28 february, 2024 </a>
                </div>
                <h3>The Importance of Preventive Care: Tips for Maintaining Your Health</h3>
                <p>This blog focuses on preventive healthcare measures, such as regular check-ups, vaccinations, 
                    screenings, and lifestyle modifications, to help readers stay healthy and prevent the onset of 
                    chronic diseases.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/work1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 01 november, 2022 </a>
                </div>
                <h3>Healthy Living Tips: Nutrition, Exercise, and Stress Management</h3>
                <p>In these blogs, readers will find practical tips and advice on maintaining a healthy 
                    lifestyle, includingtips for nutritious eating, exercise routines, stress-reduction
                   techniques, and other wellness practices.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/work1.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 23 decemberr, 2022 </a>
                </div>
                <h3>Behind the Scenes: Meet Our Dedicated Medical Team</h3>
                <p>This series introduces readers to the hospital's healthcare professionals, including
                     physicians, nurses, therapists, and support staff. It provides insights into their 
                     expertise, dedication, and compassionate care approach.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Dental Care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Message Therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Free Checkups</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Surgical Services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Ambulance Service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +9101688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +9101782546978 </a>
            <a href="#"> <i class="fas fa-phone"></i> +9109876543210 </a>
            <a href="#"> <i class="fas fa-envelope"></i> anusha6759@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> navyadv6543@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> kavya8626@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Karnataka, India </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

</section>


<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>