<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
	$('.cin_recent').slick({
	  dots: false,
	  infinite: false,
	  speed: 1500,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	   centerMode: false,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
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
</script>
<script>
  	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		type: 'line',

		data: {
			labels: ["Jun 2020", "Jul 2020", "Aug 2020", "Sep 2020", "Oct 2020", "Nov 2020", "Dec 2020", "Jan 2021", "Feb 2021", "Mar 2021", "Apr 2021", "May 2021"],
	    datasets: [{
				label: "Movies Views",
				backgroundColor: 'red',
				borderColor: 'red',
				data: [26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 110.8, 142.6],
			}]
		},
		options: {
	    layout: {
	      padding: 10,
	    },
			legend: {
				position: 'bottom',
			},
			title: {
				display: true,
				text: 'Precipitation in Toronto'
			},
			scales: {
				yAxes: [{
					scaleLabel: {
						display: true,
						labelString: 'Precipitation in mm'
					}
				}],
				xAxes: [{
					scaleLabel: {
						display: true,
						labelString: 'Month of the Year'
					}
				}]
			}
		}
	});
</script>
<script>
	$(document).ready(function(){
		$('.cin_bar_btn').click(function(){
			$('.fa-bars').toggleClass('fa-angle-right');
			$('.cin_dash_sidebar').toggleClass('cin_dash_sidebar_minimize');
			$('.cin_dash_mainarea').toggleClass('cin_dash_mainarea_active')
		});
	})
</script>

</body>
</html>