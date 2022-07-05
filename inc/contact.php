           
 <?php include "inc/mailer.php" ?>      

         
<!-- Contact Info -->
<section id="contact">

<div id="contact-content">
    <div class="get-in-touch">
        <h2>Get In Touch</h2>
        <p>If you like what you see<br> or are interested to know more, don't hesitate<br>to send me a message.</p>
        <!-- <p class="contact-info">00000 000000</p> -->
        <!-- <p class="contact-info"><a href="#">danielreynoldsdev@outlook.com</a></p> -->
        <p><br>Let's do something awesome together<br><br><br>I look forward to hearing from you.</p>
    </div>
<!-- /Contact Info -->
<!-- Contact Form -->
    <form id="contact-form" method="post" action="/#contact" >
        <div id="error"></div>
        <div class="first-line-form-input">
            <div class="input-container fname-input">
                <input type="text" name="fname" placeholder="First Name*" id="firstnameinput" class="style-input">
                
                <div class="icon-container">

                </div>
            </div>
            <div class="input-container lname-input">
                <input type="text" name="lname" placeholder="Last Name*" id="lastnameinput" class="style-input">
                <div class="icon-container">

                </div>
            </div>
        </div>
        <div class="input-container email-input">
            <input type="email" name="email" placeholder="Email Address*" id="email" class="style-input">
            <div class="icon-container">

            </div>
        </div>
        <div class="input-container subject-input">
            <input type="text" name="subject" placeholder="Subject*" id="subject" class="style-input">
            <div class="icon-container">

            </div>
        </div>
        <textarea placeholder="Message*" name="message" id="message" class="style-input" rows="6" style="resize: none;"></textarea>

        <button id="submit" type="submit" name="submit">Submit</button>
    </form>
<!-- /Contact Form -->
</div>
</section>



