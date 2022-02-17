@extends('layouts.app')

@section('content')
<div class="">
	<!-- Top banner -->
	{{-- <section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
			<div class="top-banner__image">
				<img src="./images/top-banner-author.jpg" alt="author image">
			</div>
			<div class="top-banner__text">
				<div class="top-banner__text-up">
					<span class="brand-span">Hello! I'm</span>
					<h2 class="top-banner__h2">Karunaaharan</h2>
				</div>
				<div class="top-banner__text-down">
					<h2 class="top-banner__h2">Bavaram</h2>
					<span class="brand-span">Software Developer</span>
				</div>
				<p class="text-seconary">I believe technology is improved anything.</p>
				<a href="#" class="brand-button">Read bio > </a>
			</div>
		</div>
	</section> --}}
	<!-- Top banner end -->

	<!-- About me -->
	<section class="fh5co-about-me">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="./images/about-me.jpg" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span>B</span>
						<h2 class="universal-h3 ">avaram</h2>
					</div>
					<p>I believe technology is improved anything.</p>
				</div>
			</article>
			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me</h2>
						<p><span>I </span>am information technology professionals. I always belive technology is improved anything. I choosed  farming automations. I am graduate student of University of Jaffna, now working as software developer is one of the start-up company. I have owns this page and idea but this is now in under developing stage. Somehow I  gave my design and system by technicaly . I need some co-worker to work with me for improved my ideas and developed my system and devices to next stage. I hope this one is make many start-up ideas.  </p>
						<h4>bavar</h4>
						<p class="p-white">See me</p>
					</div>
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me</h2>
						<p><span>P</span>art of this idea is done by me in my university 3rd year project in 2019. But this one is now reborn. My craziest love in <b style="font-weight: 800;">IoT</b> devices makes into these kind of smart devices. Now you also can play with my devices. I beleive this devices must important for next generation. My aim is sell a device per family in Srilanka. When we all are wants to change as a smart person then we must used  these kind of devices. I used this devices, Now I feel as smart. When you feel like a Smart person ? </p>
						<h4>Bavar</h4>
						<p class="p-white">See me</p>
					</div>
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>
	<!-- About me end -->

	<!-- Books and CD -->
	{{-- <section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">New Books And CD</h2>
			<div class="books">
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="./images/books-1.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Olivani</h4>
					<span class="single-book__price">$15.00</span>
					<!-- star rating -->
					<div class="rating">
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
					</div>
					<!-- star rating end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="./images/books-2.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Molleon’s Life</h4>
					<span class="single-book__price">$22.00</span>
					<!-- star rating -->
					<div class="rating">
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
					</div>
					<!-- star rating end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="./images/books-3.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Love is Love</h4>
					<span class="single-book__price">$25.00</span>
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="./images/books-4.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Give Me Also</h4>
					<span class="single-book__price">$30.00</span>
				</div>
			</div>
			<div class="books-brand-button">
				<a href="#" class="brand-button">View more</a>
			</div>
		</div>
	</section> --}}
	<!-- Books and CD end -->

	<!-- Counter -->
	{{-- <div class="fh5co-counter counters">
		<div class="counter-inner site-container">
			<div class="single-count">
				<span class="count" data-count="50">0</span>
				<div class="single-count__text">
					<img src="./images/counter-1.png" alt="counter icon">
					<p>Books</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="600">0</span>
				<div class="single-count__text">
					<img src="./images/counter-2.png" alt="counter icon">
					<p>Pages</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="2000">0</span>
				<div class="single-count__text">
					<img src="./images/counter-3.png" alt="counter icon">
					<p>Sales</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="125">0</span>
				<div class="single-count__text">
					<img src="./images/counter-4.png" alt="counter icon">
					<p>Awards</p>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- Counter -->

	<!-- Blog -->
	{{-- <section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">My Blog</h2>
			<div class="blog-slider blog-inner">
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog1.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Blog end -->

	<!-- Quotes -->
	{{-- <section class="fh5co-quotes">
		<div class="site-container">
			<div class="about-me-slider">
				<div>
					<h2 class="universal-h2 universal-h2-bckg">What People Are Saying</h2>
					<p>“Pudding croissant cake candy canes fruitcake sweet roll pastry gummies sugar plum. Tart pastry danish soufflé donut bear claw chocolate cake marshmallow chupa chups. Jelly danish gummi bears cake donut powder chocolate cake. Bonbon soufflé lollipop biscuit dragée jelly-o. Wafer pastry pudding tiramisu chocolate bar croissant cake. Pie caramels gummies danish.”</p>
					<img src="./images/quotes.svg" alt="quotes svg">
					<h4>David Dixon</h4>
					<p>Reader</p>
				</div>
				<div>
					<h2 class="universal-h2 universal-h2-bckg">What People Are Saying 2</h2>
					<p>“Pudding croissant cake candy canes fruitcake sweet roll pastry gummies sugar plum. Tart pastry danish soufflé donut bear claw chocolate cake marshmallow chupa chups. Jelly danish gummi bears cake donut powder chocolate cake. Bonbon soufflé lollipop biscuit dragée jelly-o. Wafer pastry pudding tiramisu chocolate bar croissant cake. Pie caramels gummies danish.”</p>
					<img src="./images/quotes.svg" alt="quotes svg">
					<h4>David Dixon</h4>
					<p>Reader</p>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Quotes end -->

	<!-- Social -->
	<section class="fh5co-social">
		<div class="site-container">
			<div class="social">
				<h5>Follow me!!</h5>
				<div class="social-icon">
					<ul class="list-inline footer_social_icon">
						<a href="https://www.facebook.com/kbavaram"><span class="fa fa-facebook"></span></a>
					   <a href="https://twitter.com/BavaramK"><span class="fa fa-twitter"></span></a>
						<a href="https://github.com/kbram"><span class="fa fa-github"></span></a>
						{{-- <a href=""><span class="fa fa-google-plus"></span></a> --}}
					   <a href="https://www.linkedin.com/in/bavaram/"><span class="fa fa-linkedin"></span></a>
					 </ul>
				</div>
				<h5>Contact with me!</h5>
			</div>
		</div>
	</section>
	<!-- Social -->
</div>
@endsection