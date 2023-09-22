
<!DOCTYPE html>
<html>
<head>

<style>
    img{
    max-width: 100%; /* Make the images responsive */
    height: auto; /* Maintain aspect ratio */
        }

        header {
  text-align: center;
  background-color: black;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
}

li {
  margin: 0 20px;
  position: relative;
}

a {
  text-decoration: none;
  color: white;
  font-weight: bold;
}

a.active {
  color: yellow;
}

a:hover {
  color: blue;
}

.hoverable:hover ul {
  display: block;
}

ul ul {
  display: none;
  position: absolute;
  background-color: black;
  border-top: 2px solid yellow;
  padding: 5px 0;
}

ul ul li {
  margin: 0;
}

ul ul a {
  color: white;
}

.registration-button a {
  background-color: red;
  border-radius: 5px;
  padding: 10px 20px;
  color: white;
  text-decoration: none;
}

        /* Style the main menu container */

</style>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

<img src="header.png" alt="header_image">
<header>
    <!-- <ul>
      <li>
        <a class="active" href="https://www.ictacademypune.com/pairobochamps">Home</a></li>
      </li>
      <li>
        <a href="https://www.ictacademypune.com/pairobochamps/our-patrons">Our Patrons</a>
      </li>
      <li>
        <a href="https://www.ictacademypune.com/pairobochamps/competition-brief/"> Competition brief </a>
      </li>
      <li>
        <a href="https://www.ictacademypune.com/pairobochamps/competition-rules/">Competition Rules</a>
      </li>
      <li>
        <a href="https://www.ictacademypune.com/pairobochamps/rules-regulations/">Rules &amp; Regulations</a>
      </li>
      <li>
        <a href="https://www.ictacademypune.com/pairobochamps/terms-and-conditions/">Terms and Conditions</a>
      </li>
      <li>
        <a href="https://www.ictacademypune.com/pairobochamps/prizes/">Prizes</a>
      </li>
      <li>
        <a href="https://www.ictacademypune.com/pairobochamps/gallery/">Gallery</a>
      </li>
      <li>
        <a href="http://www.ictacademypune.com/pairobochamps/form/">Registration</a>
      </li>
    </ul> -->

    <ul>
      <li><a class="active" href="https://www.ictacademypune.com/pairobochamps">Home</a></li>
      <li><a href="https://www.ictacademypune.com/pairobochamps/our-patrons">Our Patrons</a></li>
      <li><a href="https://www.ictacademypune.com/pairobochamps/competition-brief/">Competition brief</a></li>
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

  </header>
   <!-- Include Bootstrap JS and jQuery if needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>