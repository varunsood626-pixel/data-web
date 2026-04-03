<?php
    use Illuminate\Support\Facades\DB;
    $b = DB::table('BulletinBoard')
            //->where('IsActive', 'Y')
            ->where('Date', date('Y-m-d'))
			->where('IsActive', 'Y')
			->where('BulletinPlatform', '1')
			// ->where('BulletinPlatform', '3')
            ->first();
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
// echo "<pre>";
// print_r($b);		
// exit;
 ?>
<!DOCTYPE html>
<html lang="En">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="Workbflow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Bflow</title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="https://www.brandcare.net/brandcare_img/favicon.ico">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="{{url('/')}}/new_login/assets/css/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="{{url('/')}}/new_login/assets/css/font-awesome.min.css" />
	<!--====== Slick  css ======-->
	<link rel="stylesheet" href="{{url('/')}}/new_login/assets/css/slick.css" />
	<!--====== Style css ======-->
	<link rel="stylesheet" href="{{url('/')}}/new_login/assets/css/style.css" />
    <style>
	.about-section {
		border-bottom: 1px solid #e5e5e5;
		margin-bottom: 50px;
	}
	header {
    	padding: 15px 0;
	}
	.site-logo img {
    	width: 100px;
	}



@media screen and (min-width : 800px){
    
	.deskPadInline50{
		padding-inline : 50px !important;
	}
	
	}

	
   
@media screen and (max-width : 800px){ 
    .bflow-logo img{
        width: 64.8px;
    }

	.about-section {
        padding: 50px 0;
    }
    
        .about-text {
        margin-top: 20px;
    }

    .about-text .title {
        font-size: 30px;
    }

    .about-text .subtitle {
        font-size: 16px;
    }

    .contact-form form input, .contact-section .contact-form input, .contact-form form textarea{
        margin-bottom: 10px;
        height: 35px;
    }

    .contact-form form button, #newsButton{
        margin-top: 0;
        margin-bottom: 0;
    }
    
    .contact-form form button{
        margin-block: 14px 0;
    }
    
    #newsHead {
    font-size: 25px;
    margin-bottom : 20px;
    }
    
    .about-text p {
    padding-bottom: 20px;
}

}
    </style>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--====== Header part start ======-->
	<header>
		<div class="container-fluid deskPadInline50">
			<div class="d-flex align-items-center justify-content-between">
				<div class="site-logo">
					<a href="https://www.brandcare.net/">
						<img src="{{url('/')}}/new_login/assets/img/brandcare-black-logo.png" alt="Brandcare Logo">
					</a>
				</div>
				<div class="header-right">
					<div class="bflow-logo">
						<a href="https://www.brandcare.net/">
							<img src="{{url('/')}}/new_login/assets/img/bflow-logo.svg" alt="BFlow Logo">
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="contact-section">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-12 col-md-12 leftPad20Mob">
					<div class="contact-text">
						<div class="contact-form">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
								<div class="row">
									<div class="col-lg-5 col-12">
										<input type="email" placeholder="Email*"  name="email"  value="{{ @$_COOKIE['email'] }}">
									</div>
									<div class="col-lg-5 col-12">
										<input type="password" placeholder="Password*"  id="myInput"  name="password"   value="{{ @$_COOKIE['password'] }}">
										<div class="font-iconb" >
										<i class="fa-solid fa-eye" onclick="myFunction()"></i>
									</div>
									</div>
									<div class="col-lg-2 col-12">
										<button type="submit" value="Submit">Submit</button>
									</div>
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif

                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-section">
	<?php // print_r($b); ?>
    <?php if(@$b->title){ ?>
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-12 col-md-12">
					<p for="newsHead" id="newsHead">  <?php echo @$b->title; ?></p>
				</div>
				<div class="col-lg-6 col-md-8">

                <?php if(@$b->profile_photo){ ?>

                    <?php if(explode(".",@$b->profile_photo)[count(explode(".",@$b->profile_photo))-1]=="mp4"){ ?>
                    <video controls class="wlcome-img img-responsive animate fadeInUp Four">
                    <source src="{{ url('/uploads/bulletin/'.@$b->profile_photo) }}" type="video/mp4">
                    </video>
                <?php }else{ ?>
                    <!-- <img src="{{ url('/uploads/bulletin/'.@$b->profile_photo) }}" alt="Ocean" data-scrolled-into-view="true"
                    class="wlcome-img img-responsive animate fadeInUp Four"> -->

                    <div class="about-img" id="newsImage" style="background: url('{{ ('uploads/bulletin/' . @$b->profile_photo) }}'); background-size: contain; background-repeat: no-repeat;  width : ${window.outerWidth < 580 ? window.outerWidth - 30 : 550}px; height : ${window.outerWidth < 580 ? window.outerWidth - 30 : 550}px;">
					</div>
                    <?php } ?>
                    <?php } ?>

					
				</div>
				<div class="col-lg-6 col-md-10">
					<div class="about-text">
                    <!-- <?php echo @$b->title; ?> -->
                    <?php echo @$b->BulletinBoardNotice; ?>
						
					</div>
				</div>
				
			</div>
		</div>
    <?php }else{ ?>

      
      <!-- <p style="font-size:40px;" for="newsHead" id="newsHead"></p> -->

      <div class="container" id="bflowdata">
			<!-- <div class="row align-items-center justify-content-center">
				<div class="col-lg-12 col-md-12">
					<p for="newsHead" id="newsHead">Hair care advertising needs a scientific approach</p>
				</div>
				<div class="col-lg-6 col-md-8">
					<div class="about-img" id="newsImage" style="background: url(https://workbflow.net/new_login/assets/img/Firefly.webp); background-size: cover;">
					</div>
				</div>
				<div class="col-lg-6 col-md-10">
					<div class="about-text" id="newsDesc">

						<a type="submit" value="submit" id="newsButton" class="button spec-hover" ><span>See Full Article</span></a>
					</div>
				</div>
				
			</div> -->
		</div>
      
<!--     
      <button type="submit" value="submit" id="newsButton" class="button spec-hover" ><span>See Full Article</span></button> -->

  <?php } ?>



	</section>

		<section class="instagram-section p-0">
		<div class="container-fluid p-0">
			<div class="instagram-images" id="posts-container">
				

			</div>
		</div>
	</section>
	<footer>
		<div class="footer-copyright-area">
			<div class="container container-1360">
				<div class="row align-items-center">
					<div class="col-lg-6 col-12">
						<div class="social-links">
							<ul>
								<li class="title">Follow Us</li>
								<li><a href="https://twitter.com/Brandcare_Asia">Twitter</a></li>
								<li><a href="https://www.facebook.com/brandcare.asia/">Facebook</a></li>
								<li><a href="https://in.pinterest.com/brandcarecommun/">Pinterest</a></li>
								<li><a href="https://www.instagram.com/brandcare.asia/">Instagram</a></li>
								<li><a href="https://in.linkedin.com/company/brandcare-asia">Linkedin</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="copyright-text text-lg-center">
							<p>© <?php echo date('Y'); ?> Brandcare. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{url('/')}}/new_login/assets/js/vendor/jquery-1.12.4.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="{{url('/')}}/new_login/assets/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/new_login/assets/js/popper.min.js"></script>
	<!--====== Slick js ======-->
	<script src="{{url('/')}}/new_login/assets/js/slick.min.js"></script>
	<!--====== Images Loaded ======-->
	<script src="{{url('/')}}/new_login/assets/js/imagesloaded.pkgd.min.js"></script>
	<!--====== Isotope js ======-->
	<script src="{{url('/')}}/new_login/assets/js/isotope.pkgd.min.js"></script>
	<!--====== Magnific Popup js ======-->
	<script src="{{url('/')}}/new_login/assets/js/jquery.magnific-popup.min.js"></script>
	<!--====== Nice Select js ======-->
	<script src="{{url('/')}}/new_login/assets/js/jquery.nice-select.min.js"></script>
	<!--====== Main js ======-->
	<script src="{{url('/')}}/new_login/assets/js/main.js"></script>

    
	<script>
		   function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
                $(".fa-solid").addClass("fa-eye-slash");
                $(".fa-solid").removeClass("fa-eye");
            } else {
                x.type = "password";
                $(".fa-solid").addClass("fa-eye");
                $(".fa-solid").removeClass("fa-eye-slash");
            }
        }
	
    </script>

<script>
          async function fetchWordPressPosts() {
            const endpoint = 'https://www.brandcare.net/Bk_20feb25/bdeliveradmin/getimageapi.php';
            try {
                const response = await fetch(endpoint);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const posts = await response.json();
                displayPosts(posts);
            } catch (error) {
                console.error('Error fetching posts:', error);
            }
        }
 

		function displayPosts(posts) {
            const container = document.getElementById('posts-container');
            let widthHeight = window.outerWidth > 768 ? `${window.outerWidth/7}px` : `${window.outerWidth/2}px`;

           // Clear any existing content
            var html="";
            posts.forEach(post => {
                const postElement = document.createElement('div');
                const imageUrl = post['image_url']
                                ? post['image_url']
                                : 'https://via.placeholder.com/150';
			// Placeholder image if no featured image

			container.innerHTML +=`<div class="image">
			<div class="imgContainer" style="background-image : url('${imageUrl}'); width : ${widthHeight}; height : ${widthHeight}; ">
			</div>
			<div class="bottomText1">
			<p>${post['description']}</p>
			</div>
			<a href="${post['content_url']}" class="fullReport stretched-link" target="_blank">See Full Article</a>
			</div>`;
						});
            //  container.appendChild(html);
            // $('#posts-container').html(html);
        }
 
        // Fetch and display posts when the page loads
        	async function instagramlSlider() {
	    await fetchWordPressPosts();
	    
		var slide = $('.instagram-images');
		slide.slick({
			infinite: true,
			slidesToShow: 7,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 5000,
			speed: 500,
			arrows: false,
			fade: false,
			dots: false,
			swipe: true,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 6,
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 5,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 4,
					}
				},
				{
					breakpoint: 576,
					settings: {
						slidesToShow: 2,
					}
				}
			],
		});
	}
	
	instagramlSlider();
 
    //    async function fetchNews() 
    //    {
    //     try {
    //     const response = await fetch('https://aninews.in/rss/feed/category/health.xml');

    //     if (!response.ok) {
    //         throw new Error(`HTTP error! Status: ${response.status}`);
    //     }

    //     const xmlText = await response.text();
    //     const parser = new DOMParser();
    //     const xmlDoc = parser.parseFromString(xmlText, 'application/xml');
        
    //     const items = xmlDoc.getElementsByTagName('item');
    //     if (items.length === 0) {
    //         throw new Error('No news articles found.');
    //     }

    //         // Get a random article
    //         const randomIndex = Math.floor(Math.random() * items.length);
    //         const randomItem = items[randomIndex];

    //         const title = randomItem.getElementsByTagName('title')[0]?.textContent || 'No title available';
    //         const link = randomItem.getElementsByTagName('link')[0]?.textContent || '#';
    //         const description = randomItem.getElementsByTagName('description')[0]?.textContent || 'No description available';

    //         // Check for image, if not present use a default image
    //         let imageUrl = '';
    //         const imageTag = randomItem.getElementsByTagName('image')[0];
    //         if (imageTag) {
    //             const imageUrlTag = imageTag.getElementsByTagName('url')[0];
    //             if (imageUrlTag) {
    //                 imageUrl = "https://d3lzcn6mbbadaf.cloudfront.net/"+imageUrlTag.textContent;
    //             }
    //         } else {
    //             imageUrl = 'https://thumbs.dreamstime.com/z/latest-news-isolated-icon-megaphone-bullhorn-breaking-report-vector-info-announcement-tv-radio-broadcast-web-article-161471413.jpg?w=992';
    //         }


    //         // // Update the DOM elements with fetched data
    //         // document.getElementById('newsHead').textContent = title;
    //         // document.getElementById('newsDesc').textContent = description;
    //         // document.getElementById('newsImage').src = imageUrl;
    //         // document.getElementById('newsButton').onclick = () => {
    //         //     if (link !== '#') {
    //         //         window.open(link, '_blank');
    //         //     }


	// 		const cleanedDescription = description.replace(/^[A-Za-z\s()]+(?:\s\[[A-Za-z\s]+\])?,?\s[A-Za-z]+\s\d{1,2}\s\([A-Za-z]+\):?\s*/g, '');

			

	// 		const cleanedImageUrl = imageUrl
	// 		.replace(/__sized__\//, '') // Remove '__sized__/' from the URL
	// 		.replace(/-thumbnail-\d+x\d+-\d+/, ''); // Remove '-thumbnail-320x180-70'

	// 		// Ensure the URL still ends with '.jpg'
	// 		const finalImageUrl = cleanedImageUrl.endsWith('.jpg') ? cleanedImageUrl : cleanedImageUrl + '.jpg';

	// 		// console.log('dsads',finalImageUrl);

    //         $('#bflowdata').html(`
    //             <div class="row align-items-center justify-content-center">
    //             <div class="col-lg-12 col-md-12">
    //             <p for="newsHead" id="newsHead">${title}</p>
    //             </div>
    //             <div class="col-lg-6 col-md-8">
    //             <div class="about-img" style="background: url(${finalImageUrl}); background-size: contain; background-repeat: no-repeat">
    //             </div>
    //             </div>
    //             <div class="col-lg-6 col-md-10">
    //             <div class="about-text">
    //             <p>
    //             	${cleanedDescription}
    //             </p>
    //             <a type="submit" value="submit" id="newsButton" class="button spec-hover" href="${link}" target="_blank"><span>See Full Article</span></a>
    //             </div>
    //             </div>
    //             </div>`);


    //       //  };
    //     } catch (error) {
    //         console.error('Error fetching the news:', error);
    //     }
    // }
    
    

    //     // Call the function after the DOM is fully loaded
    //     document.addEventListener('DOMContentLoaded', () => {
    //         fetchNews();
    //     });

// 'https://www.hindustantimes.com/feeds/rss/lifestyle/health/rssfeed.xml',
//'https://www.hindustantimes.com/feeds/rss/ht-insight/public-health/rssfeed.xml',

	
async function fetchNews() {
	try {
		const rssUrls = [
			'https://rss.nytimes.com/services/xml/rss/nyt/Health.xml',
			'https://www.thehindu.com/sci-tech/health/feeder/default.rss',
			'https://www.thehindu.com/sci-tech/technology/feeder/default.rss'
		];

		function getRandomRss2JsonUrl() {
			const randomIndex = Math.floor(Math.random() * rssUrls.length);
			const randomRssUrl = rssUrls[randomIndex];
			return `https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(randomRssUrl)}`;
		}

		const rss2jsonUrl = getRandomRss2JsonUrl();

		$.ajax({
			url: rss2jsonUrl,
			method: 'GET',
			dataType: 'json',
			success: function (data) {
				if (data.status !== 'ok') {
					$('#bflowdata').html('<p>Error fetching RSS feed.</p>');
					return;
				}

				const items = data.items;
				if (!items || items.length === 0) {
					$('#bflowdata').html('<p>No news items found.</p>');
					return;
				}

				const randomIndex = Math.floor(Math.random() * items.length);
				const item = items[randomIndex];

				// Clean HTML from description
				const cleanedDescription = $('<div>').html(item.description).text();
				const finalImageUrl = item.enclosure && item.enclosure.link ? item.enclosure.link : '';

				const imageWidth = Math.min(window.outerWidth - 30, 550);

				const htmlContent = `
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-12 col-md-12">
							<p for="newsHead" id="newsHead">${item.title}</p>
						</div>
						${finalImageUrl ? `
						<div class="col-lg-6 col-md-8">
							<div class="about-img">
								<img src="${finalImageUrl}" style="width: ${imageWidth}px; height: auto;" />
							</div>
						</div>` : ''}
						<div class="col-lg-6 col-md-10">
							<div class="about-text">
								<p>${cleanedDescription}</p>
								<a class="button spec-hover" href="${item.link}" target="_blank"><span>See Full Article</span></a>
							</div>
						</div>
					</div>
				`;

				$('#bflowdata').html(htmlContent);
			},
			error: function () {
				$('#bflowdata').html('<p>Error loading RSS feed.</p>');
			}
		});
	} catch (error) {
		console.error('Error fetching the news:', error);
		$('#bflowdata').html('<p>Unexpected error occurred.</p>');
	}
}

fetchNews();

    </script>
 

 
</body>

</html>