
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="foot_logo">
					<a href="#"><img src="assets/images/logo.png"></a>
				</div>
				<ul class="list-group list-group-horizontal justify-content-center my-3">
					<li class="list-group-item bg-transparent"><a href="#">Home</a></li>
					<li class="list-group-item bg-transparent"><a href="#">Contact Us</a></li>
					<li class="list-group-item bg-transparent"><a href="#">Help Center</a></li>
					<li class="list-group-item bg-transparent"><a href="#">Terms & Conditions</a></li>
					<li class="list-group-item bg-transparent"><a href="#">Privacy Policy</a></li>
				</ul>
				<ul class="list-group list-group-horizontal justify-content-center my-3 foot_social">
					<li class="list-group-item bg-transparent"><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li class="list-group-item bg-transparent"><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li class="list-group-item bg-transparent"><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li class="list-group-item bg-transparent"><a href="#"><i class="fa fa-youtube"></i></a></li>
				</ul>
				<div class="copyright">
					<p>&copy; Copyright 2020 Cinimat. All rights reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$('.cin_carousel').slick({
  dots: true,
  infinite: false,
  speed: 1500,
  slidesToShow: 4,
  slidesToScroll: 4,
   centerMode: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.cin_top_movies').slick({
  dots: true,
  infinite: false,
  speed: 1500,
  slidesToShow: 5,
  slidesToScroll: 4,
   centerMode: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
</body>
</html>