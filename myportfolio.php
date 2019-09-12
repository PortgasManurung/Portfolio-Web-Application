<?php
function get_CURL($url){

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

return json_decode($result,true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCvE4MyYATDXZEVLVbtATSDQ&key=AIzaSyDwVZFvg0rAiCRMiBMX_a4e605XlN5yhEo');

$youtubeProfilPic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];


//video
$result =get_CURL('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCvE4MyYATDXZEVLVbtATSDQ&key=AIzaSyDwVZFvg0rAiCRMiBMX_a4e605XlN5yhEo&maxResults=1&order=date');
$resultVideoId = $result['items'][0]['id']['videoId'];


//instagram
$clientId = '93a229bc73fd4711bed8a84a5a0a5c8e';
$accesstoken = '1997836564.93a229b.0ece052990fd4f818f249b414db60576';

$result = get_CURL('https://api.instagram.com/v1/users/self/?access_token=1997836564.93a229b.0ece052990fd4f818f249b414db60576');
$usernameIg = $result['data']['username'];
$profilPictureIg = $result['data']['profile_picture'];
$follower = $result['data']['counts']['followed_by'];


//postingan
$result = get_CURL('https://api.instagram.com/v1/users/self/media/recent/?access_token=1997836564.93a229b.0ece052990fd4f818f249b414db60576&count=8');

$photos = [];
foreach ($result['data'] as $photo ){
	$photos[] = $photo['images']['thumbnail']['url'];
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Sam Portfolio</title>
	<!-- my css -->
	<link rel="stylesheet" type="text/css" href="myportfolio.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://apis.google.com/js/platform.js"></script>

</head>
<body>
	<!-- header section -->
	<section id="profil">
		<div class="container text-center">
			<div class="user-box">		
				<img src="profilportfolio.png">
				<h1>Samuel Tua Manurung</h1>
				<p>Full Stack Developer</p>
				<p>Telkom University - 2016</p>
			</div>
		</div>
		<div class="scroll-btn">
			<div class="scroll-bar">
				<a href="#about"><span></span></a>
			</div>
		</div>
	</section>

	<!-- my info -->
	<section id="info-user">
		<div class="nav-bar">
			<nav class="navbar navbar-expand-lg ">
			  <a class="navbar-brand" href="#">SAM PORTFOLIO</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="fa fa-bars"></i>
			    </span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="#top">HOME<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#about">ABOUT ME</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#resume">RESUME</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link " href="#services">SERVICES</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link " href="#contact">CONTACT</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>
	</section>

	<!-- about me -->
	<section>
		<div class="container about ">
			<div class="row">
				<div class="col-md-6 text-center">
					<img src="profilportfolio.png" class="profile-img">
				</div>
				<div class="col-md-6">
					<h3>About Me</h3>
					<p>A collage student who is learning to develop skills in web development and also data science. "I believe nothing is too impossible if prayed and done really seriously"
					</p>

					<div class="skills-bar">
						<p>Bootstrap</p>
						<div class="progress">
							<div class="progress-bar" style="width: 85%">
								85%
							</div>
						</div>

						<p>Codeigniter</p>
						<div class="progress">
							<div class="progress-bar" style="width: 75%">
								75%
							</div>
						</div>

						<p>Data Science</p>
						<div class="progress">
							<div class="progress-bar" style="width: 70%">
								70%
							</div>
						</div>

						<p>Java</p>
						<div class="progress">
							<div class="progress-bar" style="width: 70%">
								70%
							</div>
						</div>

						<p>Adobe Photoshop</p>
						<div class="progress">
							<div class="progress-bar" style="width: 65%">
								65%
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="social-icons">
			<ul>
				<a href="https://twitter.com/samuelm63599624"><li><i class="fa fa-twitter"></i></li></a>
				<a href="https://www.facebook.com/samuel.manurung1"><li><i class="fa fa-facebook"></i></li></a>
				<a href="https://github.com/PortgasManurung"><li><i class="fa fa-github"></i></li></a>
			</ul>
		</div>

		<!-- resume -->
		<div class="resume" id="resume">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="text-center">Experience</h3>
						<ul class="timeline">
							<li>
								<h4><span>2019 - </span> Fullstack Developer</h4>
								<p>	Using codeigniter and bootstrap 			frameworks for web development.
									Creating an E-commerce for vallet companies. Working on the frontend and backend during the internship.
								</br>
								<b>Company</b> - PT Pakar Layanan Tanpa Batas</br>
								<b>Duration</b> - [28 April - 28 Juni]</br>
								</p>
								<b>Location</b> - Bandung Tecno Park</br>
								</p>

							</li>

							<li>
								<h4><span>2019 - </span> Chief Executive</h4>
								<p>Direct and lead all divisions to create memorable events for Telkom graduates who arae in PMK
								</br>
								<b>Organization</b> - PMK TELKOM</br>
								<b>Duration</b> - [14 Januari - 14 April]</br>
								</p>
								<b>Location</b> - Villa Lembang</br>
								</p>

							</li>


							<li>
								<h4><span>2018 - </span> Family Division Leader</h4>
								<p>Lead and direct a division tasked with creating family within the organization
								</br>
								<b>Organization</b> - KBSU TELKOM</br>
								<b>Duration</b> - [15 Desember - 15 Desember]</br>
								</p>
								<b>Location</b> - Telkom University</br>
								</p>

							</li>

							

						</ul>
					</div>

					<div class="col-md-6">
						<h3 class="text-center">Education</h3>
						<ul class="timeline">
							<li>
								<h4><span>2016 </span> Telkom University</h4>
								<p>Majored in informatics engineering for undergraduate programs
								</br>
								<b>Duration</b> - [2016 - Present]</br>
								</p>
								<b>Location</b> - Telkom Bandung</br>
								</p>

							</li>

							<li>
								<h4><span>2013 </span> SMA Negeri 1 Balige</h4>
								<p>
									High school in north sumatra and majored in natural science
								</br>
								<b>Duration</b> - [2013 - 2016]</br>
								</p>
								<b>Location</b> - Balig, Sumatra Utara</br>
								</p>

							</li>


							<li>
								<h4><span>2018 - </span> Family Division Leader</h4>
								<p>Lead and direct a division tasked with creating family within the organization
								</br>
								<b>Organization</b> - KBSU TELKOM</br>
								<b>Duration</b> - [15 Desember - 15 Desember]</br>
								</p>
								<b>Location</b> - Telkom University</br>
								</p>

							</li>

							

						</ul>
					</div>


				</div>
			</div>
		</div>




		<div>
			<div class="services" id="services">
				<div class="container">
					<h1 class="text-center">Social Media</h1>
					<p class="text-center">Find me on social media</p>

					<div class="row justify-content-center service-box">
						<div class="col-md-5 content1 text-center">
							<i class="fa fa-youtube"> <span> YouTube</span></i>
							<div class="row youtubes">
								<div class="col-md-4">
								<img src="<?=$youtubeProfilPic;?>" width="200" class="rounded-circle img-thumbnail" >
								</div>
								<div class="col-md-8 pr-5">
									<h5><?=$channelName ?></h5>
									<p><?=$subscriber?> Subscriber</p>
									<div class="g-ytsubscribe" data-channelid="UCvE4MyYATDXZEVLVbtATSDQ" data-layout="default" data-count="default"></div>
								</div>
							</div>
							<div class="row mt-3 pb-3">
								<div class="col">
									<div class="embed-responsive embed-responsive-16by9">
									  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?=$resultVideoId?>" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
				

						<div class="col-md-5 content1 text-center">
							<i class="fa fa-instagram"> <span>Instagram</span></i>
							<div class="row youtubes">
								<div class="col-md-4">
								<img src="<?=$profilPictureIg ?>" width="200" class="rounded-circle img-thumbnail" >
								</div>
								<div class="col-md-8 pr-5">
									<h5><?=$usernameIg ?></h5>
									<p><?=$follower ?> Followers</p>
									<div></div>
								</div>

								<div class="row mt-3 pb-3">
									<div class="col">
										<?php foreach($photos as $photo):; ?>
										<div class="fotoig">
											<img src="<?=$photo;?>">
										</div>
										<?php endforeach ?>
									</div>
								</div>
							</div>
						
						</div>
					
						
					

				</div>
				
			</div>
		</div>
	</div>

	<div class="contact" id="contact">
		<div class="text-center container">
			<h1>My Contact</h1>
			<p class="text-center">You can contact me via one of the contacts below</p>			
		
	

		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-phone"></i>
				<p>+62 8160426152</p>
			</div>

			<div class="col-md-4">
				<i class="fa fa-envelope"></i>
				<p>samuelmanurung.st@gmail.com</p>
			</div>

			<div class="col-md-4">
				<i class="fa fa-bold"></i>
				<p>manurung-space.blogspot.com</p>
			</div>	
		
		</div>

	</section>
	<section class="copyright">
		<div>
			&copy; 2019 Samuel Tua Manurung
		<div>
	</section>
	
	<script src="smooth-scroll.js">
		
	</script>
	<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>