<!doctype html>
<html lang="en-US">
<head>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Cuevas Bakeshop </title>	
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	
	
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');	
		
*,
*::before,
::after{
	margin:0;
	padding: 0;
	box-sizing: border-box;	
}
	
	
	
html{
	height: 100%; 
	background-color: #F0E0C4;
	font-family: 'Cabin', sans-serif;
	font-size: 10px;	
	scroll-behavior: smooth;	
}	
	
body{
	overflow-x: hidden;	
}	
	
section{
	padding: 3.9rem 0;			
}	
	
img{
	width: 100%;
	max-width: 100%;	
}
	
a{
	text-decoration: none;	
}
	
p{
	font-size: 1.6rem;
}	
	
.container{
	width:100%;
	max-width: 122.5rem;
	margin: 0 auto;
	padding:0 2.4rem;
}		
	
/* header */	
	
header{
	width:100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1;
	background-image: linear-gradient(to bottom, rgba(0,0,0,.5), transparent);	
}
	
.nav{
	height: 7.2rem;
	padding-top: 100px;
	display: flex;
	align-items: center;
	justify-content: center;		
}	

.menu-toggle{
	color: #EEA210;
	font-size: 2.2rem;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	right: 2.5rem;
	cursor: pointer;
	z-index: 1500;		
}	
	
.fa-times{
	display: none;		
}	
	
.nav-list{
	list-style: none;
	position: fixed;
	top: 0;
	left: 0;
	width: 80%;
	height: 100vh;
	background-color: #33140A;
	padding: 4.4rem;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	z-index: 1250;
	transform: translateX(-100%);
	transition: transform .5s;
	margin:0;
	text-transform: uppercase;
}	

	
.nav::before{
	content: '';
	position: fixed;
	top:0;
	left:0;
	width: 100vw;
	height: 100vh;
	background-color: rgba(0,0,0,.8);
	z-index: 1000;
	opacity:0;
	transform: scale(0);
	transition: opacity .5s;	
}	
	
.open .fa-times{
	display: block;

}	
	
.open .fa-bars{
	display: none;	
}	
	
.open .nav-list{
	transform: translateX(0);
}	
	
.open .nav::before{
	opacity: 1;
	transform: scale(1);	
}	

	
.nav-list .nav-item{
	list-style:none;
	text-align:center;
	display: block;		
}	
	
.nav-list .nav-item:last-child{
	border-right: none;	
}	
	

.nav-list .nav-item a{
	text-decoration: none;
	padding: 10px;
	display: block;	
}		
	
	
.nav-item{
	border-bottom: 2px solid rgba(255,255,255, .3);				
}	
	

.nav-item .icon{
	width:40px;
	height: 40px;
	text-align:center;
	overflow: hidden;
	margin:0 auto 10px;	
		
}	
	
.nav-item .icon .fa{
	width:100%;
	height: 100%;
	line-height: 40px;
	font-size:30px;
	transition:0.5s;
	color: #FFFFFF;
}
	
.nav-item .icon .fa:last-child{
	color: #EEA210;
}		
	
.nav-item:hover .icon .fa{
	transform: translateY(-100%);
}	
	
.nav-link{
	display: block;
	color: #FFFFFF;
	text-transform: uppercase;
	font-size: 1.6rem;
	letter-spacing: 2px;
	margin-right: -2px;
	transition: color.5s;	
	position: relative;
	height:20px;
	width:100%;
	display: block;	
	overflow: hidden;
}	
	
.nav-link:hover{
	color: #EEA210;		
}	
	
	
ul li a .nav-link span{
	display:block;
	position: relative;
	color:#FFFFFF;
	font-size:18px;
	line-height: 20px;
	transition: 0.5s;
}	
	
ul li a .nav-link span:before{
	content: attr(data-text);
	position: absolute;
	top: -100%;
	left: 0;
	width: 100%;
	height: 100%;
	color: #EEA210;
}	
	
ul li a:hover .nav-link span{
	transform: translateY(20px);
}	

	
	
/* hero */
.hero{
	width: 100%;
	height: 100vh;
	background: url("background.png") center no-repeat;
	background-size: cover;
	display:flex;
	align-items: center;
	text-align: center;	
}	

.sub-headline{
	font-size: 8.5rem;
	font-family: 'Alex Brush', cursive;
	color: #41190B;
	font-weight: 100;
	line-height: .4;
	letter-spacing: 2px;
	opacity: 0;
	animation: fadeUp .5s forwards;
	animation-delay: .5s;
}	
	
.first-letter{
	text-transform: uppercase;
	font-size: 10.3rem;
}	
	
	
.headline{
	color:#FFF;
	font-size: 2.7rem;
	font-family: 'Source Sans Pro', sans-serif;
	text-transform: uppercase;
	font-weight:900;
	padding-top: 10px;
	letter-spacing: .5rem;
	margin-right: -.5rem;
	animation: scale .5s forwards;

}	

.separator{
	display: flex;
	align-items: center;
	justify-content: center;
	
}	
	
.line{
	width: 100%;
	max-width: 12rem;
	height: .25rem;
	background-color: #FFFFFF;
	position: relative;	
	opacity: 0;
	animation: grow 2s forwards;
	animation-delay: .9s;
}
	
.line-right::before,
.line-left::before{
	content:'';
	position: absolute;
	top: 50%;
	transform: translateY(-50%);	
	border: .6rem solid transparent;
	opacity: 0;
	animation: grow .5s forwards;
	animation-delay: 1.2s;
}	

.line-right::before{
	border-right-color: #FFFFFF;
	right: 0;	
}
	
.line-left::before{
	border-left-color: #FFFFFF;
	left: 0;	
}	
	
.asterisk{
	font-size: 1.2rem;
	color: #41190B;
	margin: 0 1.6rem;	
	opacity: 0;
	animation: spin .5s forwards;
	animation-delay: .7s;
}	
	
.single-animation{
	opacity: 0;
	animation: fadeDown .5s forwards;
	animation-delay: 1.5s;	
}	
	
	
.headline-description h5{
	color: #FFFFFF;
	font-size: 1.4rem;
	font-weight: 100;
	text-transform: uppercase;
	margin-bottom: 1.2rem;
	letter-spacing: 3px;
	margin-right: -3px;
}

.btn{
	display: inline-block;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-right: -2px;	
}	
	
.cta-btn{
	font-size: 1.1 rem;
	background-color: #FFFFFF;
	padding: .9rem 1.8rem;
	color: #41190B;
	border-radius: .4rem;
	transition: background-color .5s;	
}	

.cta-btn:hover, 
.cta-btn:focus{
	color: #FFFFFF;
	background-color: #CF9F6E;	
}	
	
/*discover our story*/
	
.global-headline{
	text-align: center;
	margin-top: 3.9rem;	
}	
	
.discover-our-story .global-headline{
	margin-top: 6.9rem;	
}	
	
.global-headline .asterisk{
	color: #000000;	
	margin: 2.4rem 0;
}	

.headline-dark{
	color: #EEA10F;
	letter-spacing: .7rem;
	margin-right: -.7rem;
} 
	
.global-headline .sub-headline{
	letter-spacing: -1px;
	line-height: .42;
}	
	
.bakeshop-info{
	text-align: center;		
}		
	
.bakeshop-description{
	margin-bottom: 3rem;	
}	
    
.bakeshop-description p{
	line-height: 1.6;
	margin-bottom: 2.4rem;
}	

.body-btn{
	font-size: 1.5rem;
	color: #33140A;
	position: relative;
	transition: color .5s;	
}

.body-btn::before{
	content: '';
	position: absolute;
	left: 0;
	bottom: -3px;
	width: 100%;
	height: 2px;
	background-color: #33140A;
	transition: background-color .5s;
		
}	
	
.body-btn:hover,
.body-btn:focus{
	color: #EEA10F;
}	
	
.body-btn:hover::before,
.body-btn:focus::before{
	background-color: #EEA10F;	
}	
	
/*tasteful delights*/
	
.tasteful-delights{
	background: url("tasteful-delights.png") center no-repeat;
	background-size: cover;	
}	
	
.between{
	min-height: 65vh;
	display: flex;
	align-items: center;
}	
	
/*Discover our Menu*/	
.image-group{
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	grid-gap: 1.5rem;
}	
	
.discover-our-products .bakeshop-description{
	padding-top: 3rem;
	margin-bottom: 0;
}	

/* indulge yourself */
	
.indulge-yourself{
	background: url("indulge-yourself.png") center no-repeat;	
	background-size: cover;
}	
	
/* footer */

footer{
	position: fixed;
	bottom: 0;
	border-top: 15px solid #EEA210;
}
	
.back-to-top{
	width: 7rem;
	height: 7rem;
	background-color:#932C0D;
	position: absolute;
	top: -3rem;
	left: 50%;
	transform: translateX(-50%);
	border-radius: 50%;
}	
	
.back-to-top i{
	display: block;
	color: #EEA210;
	font-size: 2rem;
	padding: 2rem;
	animation: up 2s infinite;
}		

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}


.footer-distributed{
	background-color: #932C0D;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px 'Cabin', sans-serif;
	padding: 50px 50px 60px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 35%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Alex Brush', cursive;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 30%;
}

.footer-distributed h3 span{
	color:  #EEA210;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #EEA210;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 40%;
}

.footer-distributed .footer-company-contact{
	line-height: 20px;
	color:  #FFFFFF;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
	text-align: justify;
}	

.footer-distributed .footer-company- span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}
	
.footer-distributed .footer-center i{
	background-color: #41190B;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #FFFFFF;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #FFFFFF;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
	text-align: justify;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color: #41190B;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}
	
.footer-distributed .lower-footer{
	background-color: #33140A;	
	width: 100%;
	position: absolute;
	padding-top: 20px;
	left: 0px;
}

.footer-distributed .copyright{
	color: #FFFFFF;
	text-align: center;
	padding: 10px;
}

.footer-distributed .bgmusic{
	text-align: center;
}



@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right,
	.footer-distributed .lower-footer{
		display: block;
		width: 100%;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}
}	

/* media queries */
@media screen and (min-width: 900px){
	section{
		padding: 7.9rem;
	}
	
	.menu-toggle{
		display: none;
	}
	
	.nav{
		justify-content: space-between;
	}
	
	.nav-list{
		position: initial;	
		width: initial;
		height: initial;
		background-color: transparent;
		padding:0;
		justify-content: initial;
		flex-direction: row;
		transform: initial;
		transition: initial;
	}
	
	.nav-item{
		margin-left: 0 2.4rem;
		border: none;
	}
	
	.nav-item: last-child{
		margin-right: 0px;
	}
	
	.nav-link{
		font-size: 1.3rem;
	}
	
	.active{
		position: relative;
	}
	
	.active::before{
		content: '';
		position: absolute;
		width: 100%;
		height: 2px;
		background-color: #FFFFFF;
		left: 0;
		bottom: -3px;
	}
	
	.sub-headline{
		font-size: 10rem;
	}
	
	.first-letter{
		font-size: 12.2rem;
	}
	
	.headline{
		font-size: 4.7rem;
		letter-spacing: .8rem;
	}
	
	.line{
		max-width: 11.4rem;
	}
	
	.bakeshop-info{
		display: flex;
		align-items: center;
	}
	
	.bakeshop-info > div{
		flex: 1;
	}
	
	.padding-right{
		padding-right: 7rem;
	}
	
	

	.social-media{
		width: 100%;
		max-width: 27.3rem;
		margin: 1 1rem;
		
	}
	
	.social-icons i{
		opacity: 1;
	}
}	
	
/* animations */
	@keyframes fadeUp {
		0%{
			transform: translateY(4rem);
		}
		100%{
			opacity: 1;
			transform: translateY(0);
		}
	}
	
	@keyframes scale {
		0%{
			transform: scale(2);
		}
		100%{
			opacity: 1;
			transform: scale(1);
		}
	}
	
	@keyframes grow {
		0%{
			width: 0;
		}
		100%{
			opacity: 1;
			width: 100%;
		}
	}
	
	@keyframes spin {
		0%{
			transform: rotate(0);
		}
		100%{
			opacity: 1;
			transform: rotate(-360deg);
		}
	}
	
	@keyframes fadeDown {
		0%{
			transform: translateY(-1rem);
		}
		100%{
			opacity: 1;
			transform: translateY(0);
		}
	}
 
	@keyframes up {
		0%{
			opacity: 0;
		}
		
		50%{
			opacity: 1;
			
		}
		
		100%{
			opacity: 0;
			transform: translateY(-1rem);
		}
	}


	
	
	
	

</style>
<body>
	
<header>	
<div class="container">
	<nav class="nav">
		<div class="menu-toggle">
			<i class="fa fa-bars" aria-hidden="true"></i>
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
		<a href="home.html" class="logo"><img src="Logo cuevas.png" width="333" height="117" alt="Cuevas Logo"></a>
		<ul class="nav-list">
		<li class="nav-item">
			<a href="home.html"> 
				<div class="icon">
					<i class="fa fa-home" aria-hidden="true"></i>
					<i class="fa fa-home" aria-hidden="true"></i>
				</div>
				<div class="nav-link active"><span data-text="Home">Home</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="about.html"> 
				<div class="icon">
					<i class="fa fa-file-text-o" aria-hidden="true"></i>
					<i class="fa fa-file-text-o" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="About">About</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="milestones.html"> 
				<div class="icon">
					<i class="fa fa-flag-o" aria-hidden="true"></i>
					<i class="fa fa-flag-o" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Milestones">Milestones</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="products.html"> 
				<div class="icon">
					<i class="fa fa-shopping-basket" aria-hidden="true"></i>
					<i class="fa fa-shopping-basket" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Products">Products</span></div>
			</a>
		</li>		 
		<li class="nav-item">
			<a href="gallery.html"> 
				<div class="icon">
					<i class="fa fa-picture-o" aria-hidden="true"></i>
					<i class="fa fa-picture-o" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Gallery">Gallery</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="branches.html"> 
				<div class="icon">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Branches">Branches</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="testimonials.html"> 
				<div class="icon">
					<i class="fa fa-users" aria-hidden="true"></i>
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Testimonials">Testimonials</span></div>
			</a>
		</li>
		<li class="nav-item">
			<a href="contact.html"> 
				<div class="icon">
					<i class="fa fa-address-book-o" aria-hidden="true"></i>
					<i class="fa fa-address-book-o" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Contact">Contact</span></div>
			</a>
		</li>
		<li class="nav-item">
		    <a href="login.php"> 
				<div class="icon">
					<i class="fa fa-sign-in" aria-hidden="true"></i>
					<i class="fa fa-sign-in" aria-hidden="true"></i>
				</div>
				<div class="nav-link"><span data-text="Login">Login</span></div>
			</a>
		</li>
		</ul>
	</nav>
</div>
</header>
<!-- header ends -->

<section class="hero" id="hero">
	<div class="container">
		<h2 class="sub-headline">
			<span class="first-letter">W</span>elcome
		</h2>
		<h1 class="headline">Cuevas Bakeshop</h1>
		<div class="headline-description">
			<div class="separator">
				<div class="line line-left"></div>
				<div class="asterisk"><i class="fa fa-asterisk" aria-hidden="true"></i></div>
				<div class="line line-right"></div>
			</div>
			<div class="single-animation">
				<h5>To God Be The Glory</h5>
				<a href="about.html" class="btn cta-btn">Explore</a>
			</div>
		</div>
	</div>
</section>
<!-- hero ends -->	
	
<section class="discover-our-story">
	<div class= "container">
		<div class="bakeshop-info">
			<div class="bakeshop-description padding-right animate-left">
				<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">D</span>iscover
						</h2>
						<h1 class="headline headline-dark">Our Story</h1>
						<div class="asterisk"><i class="fa fa-asterisk" aria-hidden="true"></i></div>
				</div>
				<p>
				Metring Cuevas, the owner of Cuevas bakeshop, started out as a pandesal vendor,  helping out his older brother run his bakery in Tondo.  Instead of learning in the classroom, Metring Cuevas spent his childhood roaming the streets of Manila to sell bread.   His unwavering  dream of having his own bakery was what brought the former rice farmer from a sleepy town in Batangas to the busy streets of Tondo, Manila.          
				</p>
				<a href="about.html" class="btn body-btn">About us</a>
			</div>
			<div class="bakeshop-info-img animate-right">
				<img src="cuevas.jpg" alt="cuevas">
			</div>
		</div>
	</div>
</section>
<!-- discover our story ends -->
	
	
<section class="tasteful-delights between">
	<div class="container">
		<div class="global-headline">
			<div class="animate-top">
				<h2 class="sub-headline">
					<span class="first-letter">T</span>asteful
				</h2>
			</div>
			<div class="animate-bottom">
				<h1 class="headline">Delights</h1>
			</div>
		</div>
	</div>
</section>
<!-- tasteful delights -->
	
<section class="discover-our-products">
	<div class="container">
		<div class="bakeshop-info">
			<div class="image-group padding-right animate-left">
				<img src="product1.jpg" alt="product">
				<img src="product2.jpg" alt="product">
				<img src="product3.jpg" alt="product">
				<img src="product4.jpg" alt="product">
			</div>
			<div class="bakeshop-description animate-right">
				<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">D</span>iscover
						</h2>
						<h1 class="headline headline-dark">Our Products</h1>
						<div class="asterisk"><i class="fa fa-asterisk" aria-hidden="true"></i></div>
				</div>
				<p>
				The Cuevas  family is committed to using the finest ingredients to all their branches ensuring that quality remains the cornerstone of the Cuevas’ tradition.   Our baked products are classic breakfast and merienda time favorites.  Our loyal customers and patrons are very important to us that is why we give them the widest range of what they need and like for less.   Every day, we want to create a lasting impression of our goodies that makes everyone yearning  for more and satisfying everyone’s palate.           
				</p>
				<a href="products.html" class="btn body-btn">View our Products</a>
			</div>
		</div>
	</div>
</section>	
<!-- discover our products ends-->	
	
<section class="indulge-yourself between">
	<div class="container">
		<div class="global-headline">
			<div class="animate-top">
				<h2 class="sub-headline">
					<span class="first-letter">I</span>ndulge
				</h2>
			</div>
			<div class="animate-bottom">
				<h1 class="headline">Yourself</h1>
			</div>
		</div>
	</div>
</section>	
<!-- indulge yourself ends -->	
	
<section class="visit-ourbranches">
	<div class= "container">
		<div class="bakeshop-info">
			<div class="bakeshop-description padding-right animate-left">
				<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">V</span>isit
						</h2>
						<h1 class="headline headline-dark">Our Branches</h1>
						<div class="asterisk"><i class="fa fa-asterisk" aria-hidden="true"></i></div>
				</div>
				<p>
				We welcome you to all our branches.  Visit our different branches and see for yourself our awesome freshly baked goodness.  We assure you, that you  won’t regret coming to our stores and taste our delicious soft breads.   Everyone will feel special with our extraordinary bread treats.        
				</p>
				<a href="branches.html" class="btn body-btn">Branches</a>
			</div>
			<div class="image-group">
				<img class="animate-top" src="branches1.jpg" alt="branches">
				<img class="animate-bottom" src="branches2.jpg" alt="branches">
			</div>
		</div>
	</div>
</section>	
<!-- visit our branches ends -->
	
	<!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

	

<footer class="footer-distributed">
			<div class="footer-left">
          <img src="Logo cuevas.png" alt="logo">
				<h3>Cuevas<span> Bakeshop</span></h3>
 
				<p class="footer-links">
					<a href="home.html">Home</a>
					|
					<a href="about.html">About</a>
					|
					<a href="milestones.html">Milestones</a>
					|
					<a href="products.html">Products</a>
					|
					<a href="gallery.html">Gallery</a>
					|
					<a href="branches.html">Branches</a>
					|
					<a href="testimonials.html">Testimonials</a>
					|
					<a href="contact.html">Contact</a>
				</p>
 
				
			</div>
 
			<div class="footer-center">
				<p class="footer-company-contact">
					<span>Contact Cuevas Bakeshop</span></p>
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>#3 Don Pablo Subdivision, Malinta, Valenzuela City </span>
						</p>
				</div>
 
				<div>
					<i class="fa fa-phone"></i>
					<p> Globe - 0927 268-4000</p>
					<p> Smart - 0907 552-8438</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:customerservice@cuevasbakeshop.com.ph">customerservice@cuevasbakeshop.com.ph</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About Cuevas Bakeshop</span>
					Cuevas Bakeshop is a family-owned business that caters bread, pastries and cakes to Filipino masses.   Cuevas Bakeshop takes pride in the quality and affordability of their breads, pastries and cakes that can give full satisfaction to every Filipino.</p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/Cuevas-Bakeshop-202030989881324/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/CuevasBakery"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/cuevas.bakeshop/?fbclid=IwAR2pLaMZOmeFhCc5DOkDO0CztztMcLv8iSTWLjk9SCvhl-GClorNZFWHzA0"><i class="fa fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCga0LTSqA6xQ_-L7eztTrCQ/featured?fbclid=IwAR3pDr44tl45AlCHrJV3lGPRXz6HSNzaCmFQdDb4aX-03PJkVRzTPsLvkCQ"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
	
	<div class="lower-footer">
		<div class="copyright">
			© Copyright 2022 Cuevas Bakeshop. All rights reserved.<br>
		Developed by: Guimong | Leria | Lorenzo | Mangali | Morelos
		</div>
		<div class="bgmusic">
			<audio controls loop>
				<source src="SugarMorning.mp3" type="audio/mpeg">
			</audio>
		</div>
	</div>
	
	
		</footer>	
	
	
	
	
<script>
	
	const selectElement = function (element){
	return document.querySelector(element);
	};
	
	
	let menuToggler = selectElement('.menu-toggle');
	let body = selectElement('body');
	
	menuToggler.addEventListener('click', function () {
		body.classList.toggle('open');	
	});
	
	//scroll reveal
	
	window.sr = ScrollReveal();
	
	
	sr.reveal('.animate-left', {
		origin: 'left',
		duration: 1000,
		distance: '25rem',
		delay: 300
		
	});
	
	sr.reveal('.animate-right', {
		origin: 'right',
		duration: 1000,
		distance: '25rem',
		delay: 600
		
	});
	
	sr.reveal('.animate-top', {
		origin: 'top',
		duration: 1000,
		distance: '25rem',
		delay: 600
		
	});
	
	sr.reveal('.animate-bottom', {
		origin: 'bottom',
		duration: 1000,
		distance: '25rem',
		delay: 600
		
	});
	
	
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>
	
</body>
</html>
