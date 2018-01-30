<?php include('header.php')?>
<style>
	.height-image {
		width: 100%;
		height: 350px;
	}
</style>

<!-- Main image size 1000x500 and save img/gallery/1/main.jpg-->

<link rel="stylesheet" href="css/timeline.css">
<section id=timeline>
	<h1>Events Time Line</h1>
	<p class="leader">All events are organized by CSI-ddubranch.</p>

	<div class="demo-card-wrapper">
		<div class="demo-card demo-card--step1">
			<div class="head">
				<div class="number-box">
					<span>13/09</span>
				</div>
				<h2>
					<span class="small">Contest</span> Quizophile</h2>
			</div>
			<div class="body">
				<p>The Test Of the grey cells open for all, yes you guessed it right the next event was a quiz competition with some twist
					and beyond the imagination rounds which made every one love the event.
				</p>
				<a data-toggle="modal" data-target="#myModal5">
					<img src="img/gallery/5/main.jpg" alt="Graphic" height="209" width="418">
				</a>
			</div>
		</div>





		<div class="demo-card demo-card--step2">
			<div class="head">
				<div class="number-box">
					<span>30/08</span>
				</div>
				<h2>
					<span class="small">Tad Talk</span> V2.0</h2>
			</div>
			<div class="body">
				<p>On 30th August’17 CSI organized its tad talk v2.0 on the topic of Machine Learning which was a great fun filled event
					delivered by our great and learned prof. Parth Dave Sir.
				</p>
				<a data-toggle="modal" data-target="#myModal4">
					<img src="img/gallery/4/main.jpg" alt="Graphic" height="209" width="418">
				</a>
			</div>
		</div>

		<div class="demo-card demo-card--step3">
			<div class="head">
				<div class="number-box">
					<span>21/08</span>
				</div>
				<h2>
					<span class="small">Seminar</span> Tips &amp; Tricks</h2>
			</div>
			<div class="body">
				<p>Csi organized Tips and tricks seminar for the freshers and the topic covered a vast array of daily life computer hacks
					which can make the life with computer a lot easier.
				</p>
				<a data-toggle="modal" data-target="#myModal3">
					<img src="img/gallery/3/main.jpg" alt="Graphic" height="209" width="418">
				</a>
			</div>
		</div>

		<div class="demo-card demo-card--step4" id="card2">

			<div class="head">

				<div class="number-box">
					<span>22/07</span>
				</div>
				<h2>
					<span class="small">Seminar</span> JavaScript</h2>
			</div>
			<div class="body">
				<p>A seminar was conducted on 22nd july’17 on the topic of JavaScript which was delivered by one of the ex-CSI member currently
					placed at Amazon,Mr Shaunak Thakar.
				</p>
				<a data-toggle="modal" data-target="#myModal2">
					<img src="img/gallery/2/main.jpg" alt="Graphic" height="209" width="418">
				</a>
			</div>
		</div>
		<div class="demo-card demo-card--step5">

			<div class="head">
				<div class="number-box">
					<span>18/07</span>
				</div>
				<h2>
					<span class="small">Tad Talk</span> V1.0</h2>
			</div>
			<div class="body">
				<p>The First Tad Talk Of the year held on the topic of linux and its essential was a fun filled event and liked by all.
				</p>
				<a data-toggle="modal" data-target="#myModal1">
					<img src="img/gallery/1/main.jpg" alt="Graphic" height="209" width="418">
				</a>
			</div>

		</div>
		


	</div>

	<!-- Modal 1-->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-center" id="exampleModalLabel">Tad Talk v1.0 </h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid height-image" src="img/gallery/1/001.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/1/002.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/1/003.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="card-block">
						<p class="text-justify">
							<h6> The First TAD Talk organized was held and on 18th July’17 and was based on </h6>
							<ol>
								<br>
								<li>How to Install Application in linux Using package manager or source code</li>
								<br>
								<li>Working with Guake Terminal,Terminator,Ksnap,Byanz</li>
								<br>
								<li>Using Virtual Box and Netwroking within virtual machines</li>
							</ol>
						</p>
					</div>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<!-- //Modal 1-->

	<!-- Modal 2-->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-center" id="exampleModalLabel">JavaScript</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid height-image" src="img/gallery/2/001.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/2/002.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/2/003.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="card-block">
						<p class="text-justify">
							<br>
							We organized a seminar on javascript,a programming language of the web.It's one of the most popular and in demand skills
							in today's market.<br><br> It can be used to control web pages on the client side , server-side and even mobile applications.
							<br><br>He even gave an introduction to the libraries of JavaScript like Jquery. In the last phase of the seminar, the speaker
							discussed some advanced concept of Java Script like AJAX and the working of it was briefly discussed.Special hands
							on sessions were provided to the students for the better understanding of the concepts and fundamentals of JavaScript.The
							speaker even discussed the different types of JavaScript frameworks like angular js, node js, Vanilla js etc.<br> <br>The
							speaker ended the seminar by reciting his experience of working in one the biggest IT companies in the world.

						</p>
					</div>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<!-- //Modal 2-->
	<!-- Modal 3-->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-center" id="exampleModalLabel">Tips and Tricks </h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid height-image" src="img/gallery/3/001.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/3/002.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/3/003.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="card-block">
						<p class="text-justify">
							<br>
							CSI ddu student branch organized its first seminar for 1st year Students : "Tips And Tricks" The Seminar covered the basics
							online hacks and various other tricks which can working with your machine easy.
							<br><br> On 21st August 2017, a seminar named
							“Tips and Tricks” was organized by the Computer Society Of India DDU Student Branch. The seminar was held especially
							for the First Year Students to help them step into the world of computers and increase their technical knowledge as
							well.The seminar began with a brief introduction of CSI Committee by Prakriti Tiwari, which was a way of helping students
							understand how our Committee works and what it aims at. Thereafter, Jainil Desai and Bhargav Lad, Committee Members
							of CSI took over the seminar, and covered helpful topics like Browser Extensions, Online Learning Courses, Googling
							Tricks and Smart Shopping.<br><br> The positive response of the audience motivated the CSI Committee for taking up such seminars
							in future as well.

						</p>
					</div>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<!-- //Modal 3-->
	<!-- Modal 4-->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-center" id="exampleModalLabel">Tad Talk v2.0 </h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid height-image" src="img/gallery/4/001.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/4/002.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/4/003.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="card-block">
						<p class="text-justify">
							<br>
							The Second TAD talk was organized on the topic of MACHINE LEARNING which included a brief overview of machine learning, prerequisites
							to learn it, and further advancement. <br><br>It also included topics like ImageNet, Tensor Flow, etc. The expert for this
							talk was Prof. Parth Dave from Faculty of Technology, DDU. The professor introduced himself and talked about his own
							experience on the topic of Machine Learning and also informed about the project he was working on. Later he gave briefings
							of machine and he related different types of learning processes with machine, which gave rise to machine learning.
							After that the speaker introduced us with Artificial Neural Network and Genetic Algorithms. <br><br>Overall it was a great
							learning experience and audience liked the content and showed their interest in TAD Talks.

						</p>
					</div>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<!-- //Modal 4-->
	<!-- Modal 5-->
	<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-center" id="exampleModalLabel">Quizophile </h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid height-image" src="img/gallery/5/001.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/5/002.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/5/003.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="card-block">
						<p class="text-justify"><br>
							The first competition for the academic year 2017-18 , a quiz competition held on 13th-14th of september. The quiz was a general
							knowledge quiz with 3 interesting rounds.
							<br><br> The quiz was especially held for first and second year students. It was
							a general knowledge quiz which included logical Reasoning, General Knowledge and Current Affair questions.The quiz
							had three rounds in total. The first round was held at the first day i.e. 13th September which was a MCQ round. The
							second round was Rapid Fire Round from that 10 participants qualified for the Final round. The third round was divided
							into two parts. First part of the round was an Audio-Visual question round with a little twist. While the second round
							was bidding and buzzer round At the last, according to the efficiency, knowledge base and coordination of the team
							in the final round, winner were declared and were rewarded with prize. <br><br>All in all, the response, activeness and enthusiasm
							of the participants was very appreciable as well as their splendid performance.
						</p>
					</div>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<!-- //Modal 5-->
	<!-- Modal 6-->
	<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-center" id="exampleModalLabel">Wordpress </h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid height-image" src="img/gallery/6/001.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/6/002.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block img-fluid height-image" src="img/gallery/6/003.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="card-block">
						<p class="text-justify"><br>
							Data missing The first competition for the academic year 2017-18 , a quiz competition held on 13th-14th of september. The
							quiz was a general knowledge quiz with 3 interesting rounds. The quiz was especially held for first and second year
							students. It was a general knowledge quiz which included logical Reasoning, General Knowledge and Current Affair questions.The
							quiz had three rounds in total. The first round was held at the first day i.e. 13th September which was a MCQ round.
							The second round was Rapid Fire Round from that 10 participants qualified for the Final round. The third round was
							divided into two parts. First part of the round was an Audio-Visual question round with a little twist. While the
							second round was bidding and buzzer round At the last, according to the efficiency, knowledge base and coordination
							of the team in the final round, winner were declared and were rewarded with prize. All in all, the response, activeness
							and enthusiasm of the participants was very appreciable as well as their splendid performance.
						</p>
					</div>
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>

	<!-- //Modal 6-->
</section>
<script>
	$(document).ready(function () {
		window.scrollBy({
			top: -100,
			left: 0,
			behavior: 'smooth',
		});
	});
</script>
<?php include('footer.php')?>