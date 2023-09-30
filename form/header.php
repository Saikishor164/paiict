
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  /* Nav Image  */
    img{
    max-width: 100%; /* Make the images responsive */
    height: auto; /* Maintain aspect ratio */
        }

        header {
  text-align: center;
  background-color: black;
}
/* Nav Image End */

/* styles.css */
.navbar {
  background-color: black;
  padding: 10px 0; /* Increase height for text and registration button */
  text-align: center;
  border-top: 2px solid white;
  border-bottom: 5px solid white;
}

.nav-list {
  list-style-type: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center; /* Vertically center items */
  width: 100%; /* Ensure the navbar spans the full width */
}

.nav-list li {
  margin: 0 10px; /* Adjust horizontal spacing as needed */
  position: relative;
}

.nav-list a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  font-size: 18px; /* Increase text size for better spacing */
}

.nav-list a.active {
  color: #045cb4;
  text-decoration: none;
}

.nav-list a:hover {
  color: yellow;
  opacity: 100%;
  transition: color 0.8s ease-in-out;
  text-decoration: none;
}




/* Show submenu on hover */
.nav-list .hoverable:hover ul {
  display: block;
}

.nav-list ul {
  display: none;
  position: absolute;
  background-color: black;
  border-top: 2px solid yellow;
  padding: 10px 0; /* Increase padding for better spacing */
}

.nav-list ul li {
  margin: 0;
}

.nav-list ul a {
  color: white;
}

/* Style the registration button */
.registration-button a {
  background-color: red;
  border-radius: 5px;
  padding: 10px 20px;
  color: white;
  text-decoration: none;
  font-size: 18px; /* Increase text size for better spacing */
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

/* Media query for mobile devices */
@media screen and (max-width: 768px) {
  .nav-list {
    flex-direction: column; /* Stack items vertically */
  }

  .nav-list li {
    margin: 10px 0; /* Adjust vertical spacing for mobile */
  }

  .nav-list ul {
    position: static; /* Reset submenu position */
    display: none; /* Hide submenu by default for mobile */
  }

  .nav-list .hoverable:hover ul {
    display: none; /* Hide submenu on mobile */
  }
  
}


</style>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<img src="assets/header.png" alt="header_image">



<!-- new code for nav -->

<div class="navbar">
        <ul class="nav-list">
            <li><a class="active" href="#">Form</a></li>
            <li><a href="https://www.ictacademypune.com/pairobochamps">Home</a></li>
            <li><a href="https://www.ictacademypune.com/pairobochamps/our-patrons">Our Patrons</a></li>
            <li><a href="https://www.ictacademypune.com/pairobochamps/competition-brief/">Competition Brief</a></li>
            <li class="hoverable">
                <a href="https://www.ictacademypune.com/pairobochamps/competition-rules/">Competition Rules</a>
                <ul>
                    <li><a href="https://www.ictacademypune.com/pairobochamps/rules-regulations/">Rules & Regulations</a></li>
                   <br>
                    <li><a href="https://www.ictacademypune.com/pairobochamps/terms-and-conditions/">Terms and Conditions</a></li>
                </ul>
            </li>
            <li><a href="https://www.ictacademypune.com/pairobochamps/prizes/">Prizes</a></li>
            <li><a href="https://www.ictacademypune.com/pairobochamps/gallery/">Gallery</a></li>
            <li class="registration-button"><a href="http://www.ictacademypune.com/pairobochamps/form/">Registration</a></li>
        </ul>
    </div>



<!-- Below is the old code  -->

<!-- <header>   
<div class="navbar">
  <ul>
  <li><a class ="active" href="#">Form</a></li>
    <li><a href="https://www.ictacademypune.com/pairobochamps">Home</a></li>
    <li><a href="https://www.ictacademypune.com/pairobochamps/our-patrons">Our Patrons</a></li>
    <li><a href="https://www.ictacademypune.com/pairobochamps/competition-brief/">Competition Brief</a></li>
    <li class="hoverable">
      <a href="https://www.ictacademypune.com/pairobochamps/competition-rules/">Competition Rules</a>
      <ul>
        <li><a href="https://www.ictacademypune.com/pairobochamps/rules-regulations/">Rules & Regulations</a></li>
        <li><a href="https://www.ictacademypune.com/pairobochamps/terms-and-conditions/">Terms and Conditions</a></li>
      </ul>
    </li>
    <li><a href="https://www.ictacademypune.com/pairobochamps/prizes/">Prizes</a></li>
    <li><a href="https://www.ictacademypune.com/pairobochamps/gallery/">Gallery</a></li>
    <li class="registration-button"><a href="http://www.ictacademypune.com/pairobochamps/form/">Registration</a></li>
  </ul>
</div>
  </header> -->
   <!-- Include Bootstrap JS and jQuery if needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>