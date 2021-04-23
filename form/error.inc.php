<style type="text/css">

header {
    background: #f5f3f1;
    width: 100%;
    margin: 0 auto;
    position: fixed;
    z-index: 99;
    top: 0;
    border-bottom: 1px solid #f47f6f;
}

nav {
    width: 75%;
    padding-right: 35px;
    box-sizing: border-box;
}

nav ul li a {
  text-decoration: none;
  font: 18px "montserrat", sans-serif;
  color: #404041;
  padding: 20px;
}

nav ul li a:hover {
  color: #f47f6f;
}

.logo-container,
header nav,
nav li  {
    display: inline-block;
    vertical-align: middle;
    text-align:right;
}

.logo-container {
    width: 10%;
    margin-left: 120px;
    box-sizing: border-box;
}

main {
    margin: 120px 0 10px;
}

.processor {
    max-width: 80%;
    margin: 10px auto;
    background: #f5f3f1;
    text-align: center;
    padding: 65px;
    height: 300;
}

.processor p {
    font-family: 'montserrat';
}

footer {
  text-align: center;
  padding: 25px 0;
  background: #f47f6f;
}

footer p,
.linkedin {
  display: inline-block;
  vertical-align: middle;
  margin: 0 3px;
  font: 12px 'montserrat', sans serif;
  color: #404041;
}

</style>


<header>

  <div class="logo-container">
    <div class="logo-hover">
      <a href="index.html">
        <img src="image/logo.png" alt="Logo" title="Logo" width="120" />
      </a>
    </div>
  </div>

  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

</header>

<main>

  <div class="processor">

  	<h1>Missing fields</h1>
  	<p>Sorry, you have not completed all of the required fields.</p>
  	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

  	<ul>
  	<?php
  		for($i=0; $i<count($this->missing_required_fields); $i++){
  			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
  		}
  	?>
  	</ul>

  	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
  </div>

</main>

<footer>
	<p>Website by Maira Manley</p>
	<a class="linkedin" href="https://www.linkedin.com/in/mairamanley/"   target="_blank">
		<img src="image/linkedin-gray.png" alt="Linkedin Logo" title="Linkedin Logo" width="30" />
	</a>
</footer>
