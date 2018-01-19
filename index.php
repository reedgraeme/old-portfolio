<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Graeme Reed Portfolio | Web Design | Graphic Design</title>
<link rel="stylesheet"  href="styles.css">
<link rel="stylesheet" href="animate.css">
<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="responsive, Graphic design, web design, graeme reed, html5, css, creative, portfolio, design, graphic, development, branding">
<meta name="Description" content="Graeme Reed is a Graphic and Web Designer - Branding - Graphic Design - Web Design - Animation - HTML - CSS">
</head>
<body>
<div id="overlay">
<div class="loader"></div>
	</div>
<main>
<section id="titlepage">
<nav id="navbar">
	<a href="#titlepage">Home</a>
	<a href="#aboutpage">About</a>
	<a href="#filler">Work</a>
	<a href="#contactpage">Contact</a>
    <div>
    <a href="https://www.vanilladad.bigcartel.com"><img src="assets/store.svg" alt="A social media icon which leads to the vanilla dad Store." id="socialmedia"></a>
    <a href="https://www.instagram.com/graeme_reed/?hl=en"><img src="assets/insta.svg" alt="A social media icon which leads to Graeme Reed's Instagram page." id="socialmedia"></a>
    <a href="https://www.linkedin.com/in/graeme-reed-9297b5117?trk=hp-identity-name"><img src="assets/indeed.svg" alt="A social media icon which leads to Graeme Reed's Indeed page." id="socialmedia"></a>
    <a href="https://www.behance.net/graemethecff8d"><img src="assets/behance.svg" alt="A social media icon which leads to Graeme Reed's Behance page." id="socialmedia"></a>
    </div>
</nav>
<div class="wow fadeInUp">
<div id="wrapper">
<img src="assets/logo.svg" alt="A circle containing the letter G in serif type face." id="logo">
<h1>GRAEME REED'S PORTFOLIO</h1>
<h2>Designer</h2>
</div>
</div>
<video playsinline autoplay muted loop id="bgvid">
    <source src="assets/backgroundvideo2.mp4" type="video/mp4">
    <source src="assets/backgroundvideo2.webm" type="video/webm">
</video>
</section>
<section id="aboutpage">
<div class="wow fadeInUp">
<div id="wrapper">
<h1>ABOUT ME</h1>
<img src="assets/graemereed.jpg" alt="Graeme Reed's Pricture" id="picture">
<p>My name is Graeme Reed. I am currently living in Calgary, Alberta, Canada. I completed first year Business Administration: Accounting at SAIT before switching into the New Media Production and Design program of which I am in my final year. During my time in the program, I have learned a great deal about Graphic Design, Photomanipulation, Animation, Web Design, 3D Modeling and UX Design. I am an Adobe Certified Associate in Adobe Illustrator CC 2015, Adobe InDesign CC 2015 and Adobe Photoshop CC 2015. I have always had an interest in design. I am excited to get started working in the industry.</p>
<div id="badges">
<img src="assets/badge one.png" alt="Adobe Illustrator Cirtification Badge." class="badges">
<img src="assets/badge two.png" alt="Adobe PhotoShop Cirtification Badge." class="badges">
<img src="assets/badge three.png" alt="Adobe InDesign Cirtification Badge." class="badges">
</div>
</div>
</div>
</section>

<section id="skillset">

<div class="wow fadeInUp">
	<div id="skilltitle">
<h1>SKILL SET</h1>
<p>Here are my various skills in terms of Graphic Design and Web Design.</p>
		
	</div>
<img src="assets/skillset.svg" alt="Displays a skill layout table, ranking skills related to both graphic design and web design." id="skills">
</div>
</section>

<section id="filler">
<h1>PROJECTS</h1>
</section>

<section id="projectpage">
<div class="wow fadeInUp">
<div class="Projects">
<div class="RowOne">
<div>
<div class="container"><a href="websites.php"><img src="assets/website.jpg" alt="An image linking to the web design section of the website." ></a><h3>Web Design</h3></div>
<div class="container"><a href="graphicdesign.php"><img src="assets/design3.jpg" alt="An image linking to the graphic design section of the website" ></a><h3>Graphic Design</h3></div>
<div class="container"><a href="games.php"><img src="assets/code.jpg" alt="An image linking to the Actionscript section of the website." ></a><h3>ActionScript</h3></div>
</div>
</div>
</div>
</div>
</section>
<section id="contactpage">
<div class="wow fadeInUp">
<div>
	<h1>CONTACT</h1>
    <h2>For any futher information or business opportunities please email me</h2>
	<h2><a href="mailto:graemereed.business@gmail.com?subject=business">HERE</a></h2>
	<h2>graemereed.business@gmail.com</h2>
	<a href="#titlepage"><img src="assets/down.svg" alt="An SVG image that returns you to the top of the webpage" class="down"></a>
    </div>
    <div id="socialmediamobile">
    <a href="https://www.vanilladad.com"><img src="assets/store.svg" alt id="socialmedia"></a>
    <a href="https://www.instagram.com/graeme_reed/?hl=en"><img src="assets/insta.svg" alt id="socialmedia"></a>
    <a href="https://www.linkedin.com/in/graeme-reed-9297b5117?trk=hp-identity-name"><img src="assets/indeed.svg" alt id="socialmedia"></a>
    <a href="https://www.behance.net/graemethecff8d"><img src="assets/behance.svg" alt id="socialmedia"></a>
    </div>
	</div>
</section>

</main>
<footer>
<section id="footer">
	<p>Copyright © 2016</p>
</section>
</footer>

<script src="smoothscroll.js"></script>
<script src="smoothscrollP2.js"></script>

<script>
var overlay = document.getElementById("overlay");
window.addEventListener('load',function(){
	overlay.style.display = 'none';
})
</script>

<script src="fadeAnimation.min.js"></script>
<script>new WOW().init();</script>




</body>
</html>