<div class="container-fluid">
		<div class="container collections">
			<p class="para4-p">indoor collections</p>
			<h1>our collections</h1>
			<p>Built a tested code base or had them built, you decided on a content.</p>
		</div>
		<div class="container slider">
		  <div class="col-6 mySlides">
			<div class="numbertext">1 / 6</div>
			<img src="image/gallery1.jpg" style="width:100%">
		  </div>

		  <div class="col-6 mySlides">
			<div class="numbertext">2 / 6</div>
			<img src="image/gallery2.jpg" style="width:100%">
		  </div>

		  <div class="col-6 mySlides">
			<div class="numbertext">3 / 6</div>
			<img src="image/gallery3.jpg" style="width:100%">
		  </div>

		  <div class="col-6 mySlides">
			<div class="numbertext">4 / 6</div>
			<img src="image/gallery4.jpg" style="width:100%">
		  </div>

		  <div class="col-6 mySlides">
			<div class="numbertext">5 / 6</div>
			<img src="image/gallery5.jpg" style="width:100%">
		  </div>

		  <div class="col-6 mySlides">
			<div class="numbertext">6 / 6</div>
			<img src="image/gallery6.jpg" style="width:100%">
		  </div>

		  <a class="prev" onclick="plusSlides(-1)">❮</a>
		  <a class="next" onclick="plusSlides(1)">❯</a>
		</div>
		<div class="cl"></div>
		<div class="container">
			<div class="row1">
				<div class="column1">
				  <img class="demo cursor" src="image/gallery1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
				</div>
				<div class="column1">
				  <img class="demo cursor" src="image/gallery2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
				</div>
				<div class="column1">
				  <img class="demo cursor" src="image/gallery3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
				</div>
				<div class="column1">
				  <img class="demo cursor" src="image/gallery4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
				</div>
				<div class="column1">
				  <img class="demo cursor" src="image/gallery5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
				</div>    
				<div class="column1">
				  <img class="demo cursor" src="image/gallery6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
				</div>
			</div>
		</div>
		<div class="cl"></div>
		<hr class="footer-line">
		<div class="container">
			<div class="col-6"><p class="footer-p">Copyright @ 2025 Indoor Loreal London-All Rights Reserved</p></div>
			<div class="col-6">
				<div class="col-1 ff"><img src="image/footer_facebook.png" alt="" width="200%"></div>
				<div class="col-1 ff"><img src="image/footer_instagram.png" alt="" width="200%"></div>
				<div class="col-1 ff"><img src="image/footer_twitter.png" alt="" width="200%"></div>
				<div class="col-1 ff"><img src="image/footer_pintrest.png" alt="" width="200%"></div>
				<div class="col-1 ff"><img src="image/footer_youtube.png" alt="" width="200%"></div>
			</div>
		</div>
		<div class="cl"></div>
  	</div>
<script>
var elements = document.getElementsByClassName("column");
var s;

function three() {
    for (s = 0; s < elements.length; s++) {
    elements[s].style.msFlex = "50%";  
    elements[s].style.flex = "50%";
  }
}

function four() {
  for (s = 0; s < elements.length; s++) {
    elements[s].style.msFlex = "25%";  
    elements[s].style.flex = "25%";
  }
}


var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var s = 0; s < btns.length; s++) {
  btns[s].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>	
<script>
	let slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("demo");
	  let captionText = document.getElementById("caption");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	  captionText.innerHTML = dots[slideIndex-1].alt;
	}
</script>
<script>
const counters = document.querySelectorAll('.value');
const speed = 1000;

counters.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('name');
      const data = +counter.innerText;
     
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        }else{
          counter.innerText = value;
        }
     
   }
   
   animate();
});
	</script>