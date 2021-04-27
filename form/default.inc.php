<style type="text/css">


header {
    background: #f5f3f1;
    width: 100%;
    margin: 0 auto;
    position: fixed;
    z-index: 99;
    top: 0;
    border-bottom: 3px solid #f47f6f;
}

.logo-container,
header nav,
nav {
    display: inline-block;
    vertical-align: middle;
    text-align: right;
}

nav {
    width: 75%;
    padding-right: 35px;
    box-sizing: border-box;
}

nav > ul > li {
    display: inline-block;
    width: 15%;
    margin-bottom: 2px;
    position: relative;
}

header nav ul li {
    background: #d9ccc4;
    padding: 12px;
    margin: 5px;
    transition: 0.3s;
    text-align: center;
}

header nav ul li:hover {
  background: #f47f6f;
}

header nav ul li:active {
  background: #404041;
  transition: 0.3s;
}

nav ul li a {
  text-decoration: none;
  font: 18px "montserrat", sans-serif;
  color: #404041;
  transition: 0.3s;
  padding: 12px;
  text-align: center;
}

nav ul li a:hover {
  color: white;
}

.sub-menu {
    display: none;
    list-style-type: none;

}

.menu-item:hover .sub-menu {
    display: block;
    position: absolute;
    top: 45px;
    background: #d9ccc4;
    width: 100%;
    text-align: center;
    right: 0px;
}

.logo-container {
    width: 10%;
    margin-left: 120px;
    box-sizing: border-box;
    animation: 1s spin;
}

.logo-hover:hover {
  animation: 1s spin;
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
        <img src="images/logo.png" alt="Logo" title="Logo" width="120" />
      </a>
    </div>
  </div>

  <nav>
    <ul>
      <li class="menu-item"><a href="index.html">Home</a></li>
      <li class="menu-item"><a href="index.html">About</a></li>
      <li class="menu-item"><a href="index.html">Portfolio</a>
        <ul class="sub-menu">
          <li class="menu-item"><a href="index.html">Web Design</a></li>
          <li class="menu-item"><a href="index.html">Video</a></li>
        </ul></li>
      <li class="menu-item"><a href="index.html">Contact</a></li>
    </ul>
  </nav>

</header>


<main>

  <div class="processor">
    <h1>Sorry something went wrong with your submission</h1>
    <p>Please try again</p>
  </div>

</main>

<footer>
  <p>Website by Maira Manley</p>
  <a class="linkedin" href="https://www.linkedin.com/in/mairamanley/"   target="_blank">
    <img src="images/linkedin.png" alt="Linkedin Logo" title="Linkedin Logo" width="30" />
  </a>
</footer>
