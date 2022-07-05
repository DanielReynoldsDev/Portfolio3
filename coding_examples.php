<!DOCTYPE html>
    <html lang="en-gb">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Web and Software develper portfolio">
            <meta name="keywords" content="HTML, CSS, JavaScript, SCSS, Bootstrap, jQuery, React, PHP, MySQL, SQL, Web developer, Software Developer">
            <meta name="author" content="Daniel Reynolds">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Daniel Reynolds Portfolio || Coding Examples</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- /jQeury -->
            
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--/Bootstrap-->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- /CSS -->

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@300&display=swap" rel="stylesheet">
    <!--/Google Font-->

    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/21f3d37c91.js" crossorigin="anonymous"></script>
    <!-- /Font Awesome -->
            <!-- Javascript -->
            <script src="js/script.js">               
        </script>
        <!-- /Javascript -->
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/img/favicon/site.webmanifest">
<link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    
        </head>
        <body>
            <div id="about-me-page" class="wrapper">
                <main>
                    <!-- Coding Examples Placeholder -->
                    <header class="ncontainer">
                        <h1 class="neonText">Coding Examples</h1>
                    </header>
                    <div class="content" id="content">
                        
                        <div class="article cespacer" >
                            <h3>JavaScript</h3>
                            <i class="fab fa-js-square fa-10x"></i>
                            <p class="ce">

                                My first taste of this kind of programming language was with javascript, some of
                                which you can see within my portfolio.
                            
                            </p>
                            <pre>
                            <code class="code">
window.addEventListener('load', function () {
    function createTypewriter(text, id) {
    var i = 0;
    var speed = 90;
                                                                      
    function typeWriter(text, id) {
        if (i &lt;text.length) {
            document.getElementById(id).textContent += text.charAt(i);
            i++;
            setTimeout(function () {
                typeWriter(text, id);
            }, speed);
        }
    }
                                                                      
    typeWriter(text, id);
}
                                                                      
    createTypewriter("Hi, I am Daniel Reynolds ", "greetings");
    setTimeout(function () {
        createTypewriter("I'm a Web Developer!", "banner-tagline");
    }, 3000);                                                                   
});
                            </code>
                        </pre>
                            <p class="ce">   
                                This code above is how i added the animation effect to my headline on my main page. Its created by
                                waiting for the page to load before executing a loop which checks to see how many letters it has 
                                already typed, adding the next letter in the list until the message becomes the correct length. 
                            </p>
                            <p class="ce">
                                It was an easy choice to use javascript for this task as it works well with HTML and CSS as well as 
                                being highly documented and the use of the browser console helps a great deal with debugging.
                            </p>
                        </div>
                                                    <!---->
                        <div class="article cespacer" >
                            <h3>SQL</h3>
                            <i class="fas fa-database fa-10x"></i>
                            <p class="ce">

                                SQL has been really interesting for me, being so widely used its often the first choice for most 
                                data storage and retrieval needs.
                            
                            </p>
<p class="ce">
                            <img src="/img/database.png" alt="">
                        </p>
                            <p class="ce">   
                                The image above represents a 'Database', full of information around a singular topic, in this case Movies.
                                The way the individual tables are structured allows information to be stored into catagories which makes it 
                                able to retrieve any section, sections or subsections for display depending on the query asked. 
                            </p>
                            <pre>
                            <code class="code">
SELECT
  mov_title AS "Movie Title",
  mov_time AS "Runtime",
  rev_stars AS "Rating"
FROM
  movie
WHERE
  act_id = (
    SELECT
      act_id
    FROM
      actor
    WHERE
      act_fname = 'Robin'
      AND act_lname = 'Williams'
  );
                            </code>
                        </pre>
                            <p class="ce">   
                                This query is used to search the database and form a table, listing movies, how long they are and 
                                what the average rating reviewers gave them. It also narrows down the list to only include movies
                                with Robin Williams, a personal favourite of mine.
                            </p>
                        </div>

                        <div class="article cespacer" >
                            <h3>PHP</h3>
                            
                            <p class="ce">

                                Here i used PHP to handle serverside form validation, this will check if the contact page is filled 
                                in correctly before attempting to post the data to the SQL table 
                            
                            </p>
                            <pre>
                            <code class="code">
		if(empty($_POST['fname'])){
			$errors['fname'] = 'A name is required';
		} else{
			$fname = $_POST['fname'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $fname)){
				$errors['fname'] = 'Names must be letters and spaces only';
			}
		}
                            </code>
                        </pre>
                            <p class="ce">   
                                The first line is a simple 'if' statement that i first use to ask if the first name section has anything
                                in. If not it will inform the user that a name is required before continuing. 
                            </p>
                            <p class="ce">
                                The 'else' statement runs a function that checks the value of the first name box against regular expression
                                characters used for names, of REGEX for short. If there are any charaters that shouldnt be there the PHP
                                will inform the user.
                            </p>
                        </div>
                        <div class="article cespacer" >
                            <h3>C#</h3>
                            
                            <p class="ce">

                                My first project using C# was to create a class from which 'Objects' could be made. This particular class needed to have
                                some basic information about a car. 
                            
                            </p>
                            <pre>
                            <code class="code">
        namespace Reflection
           {
              public class Car
              {
                                
                private string Make { get; set; }
                private string Model { get; set; }
                private string Registration { get; set; }
                private string YearOfRegistration { get; set; }
                private decimal CurrentValue { get; set; }
                                

                            </code>
                        </pre>
                            <p class="ce">   
                                This part is to create what parts of the class are available for use as well as define what type of data can be stored. 
                            </p>
                            <p class="ce">
                            The 'string'
                                part means whatever data is put in should be treated as characters rather than if they was numbers. The 'decimal' means the data will be 
                                a number and will return an error if it isnt.
                            </p>
                        </div>

                    </div>
                    <!-- <div id="cespacer">                       
                    </div> -->
                    <!-- /Coding Examples Placeholder -->
                    <?php include "inc/contact.php" ?>
        </main>

                
                
                
        <?php include "inc/desknav.php" ?>

<?php include "inc/mobilenav.php" ?>
            </div>
        </body>

    </html>