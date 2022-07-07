// Typwriter effect

window.addEventListener('load', function () {
  function createTypewriter(text, id) {
    var i = 0;
    var j = 0;
    var speed = 90;

    function typeWriter(text, id) {
      if (i < text.length) {
        document.getElementById(id).textContent += text.charAt(i);
        i++;
        setTimeout(function () {
          typeWriter(text, id);
        }, speed);
      }
    }

    typeWriter(text, id);
  }

  createTypewriter("Hi, I am  ", "greetings");
  setTimeout(function () {
    createTypewriter("Daniel Reynolds ", "greetingsname");
  }, 1000);
  setTimeout(function () {
    createTypewriter("I'm a Web Developer!", "banner-tagline");
  }, 3000);

  
}); 
// End Typwriter Effect

// Hambuger Effect

$(".hamburger").click(function () {
  $(".hamburger").toggleClass("is-active");
  $(".links-container").slideToggle();
}); 

// End Hambuger Effect


// Email Validation
const form = document.getElementById("contact-form");
const fName = document.getElementById("firstnameinput");
const lName = document.getElementById("lastnameinput");
const email = document.getElementById("email");
const subject = document.getElementById("subject")
const textInput = document.getElementById("message");
const error = document.getElementById("error");

// messages accepts string
form.addEventListener('submit', (e) => {
  let messages = []

  // If users have not entered a value for name.
  if (firstnameinput.value === '' || firstnameinput.value == null) {
    messages.push('Please enter your First Name\n')
  }

  if (lastnameinput.value === '' || lastnameinput.value == null) {
    messages.push('Please enter your Last Name\n')
  }

  if (!isSubject(subject.value)) {
    messages.push('That subject does not look correct\n')
  }

  if (!isSubject(subject.value)) {
    messages.push('That subject does not look correct')
  }

  // If user has entered email/ else if, then compares value to regex format
  if (email.value === '' || email.value == null) {
    messages.push('Please enter your email address\n')
  } else if (!isEmail(email.value)) {
    messages.push('That email address does not look correct\n')
  }

  // If user has not filled in the textarea
  if (textInput.value === '' || textInput == null) {
    messages.push('Please write me a message\n')
  }

  // If  message length  >  0, prevent submit & display messages in error div
  if (messages.length > 0) {
    e.preventDefault()
    error.innerText = messages.join('\n')
  }
})

// Function tests variable against regex format
function isEmail(i) {
  return /^([a-z\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/.test(i);
}

function isSubject(j) {
  return /^[a-zA-Z\s0-9\.\,\;\-\!\?\@\'\:\—]+$/.test(j);
}