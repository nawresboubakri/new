<?php
include "table_panier.php";
//include "server.php";
include "../../core/productC.php";

?>

<?php

$r=new RatingC();
if (isset($_GET['ref_prod'])){
	$produitC=new ProduitC();
	$produit1C=new ProduitC();
    $result=$produitC->recupererProduit($_GET['ref_prod']);
  
	foreach($result as $row){
		$ref_prod=$row['ref_prod'];
		$nom_prod=$row['nom_prod'];
		$quantite=$row['quantite'];
		$description_prod=$row['description_prod'];
		$disponibilite=$row['disponibilite'];
		$prix_prod=$row['prix_prod'];
		$cat=$row['cat'];
		$src=$row['src'];
		$sexe=$row['sexe'];


 $reff= $row['ref_prod'];
  $catt=$row['cat'];

  }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1"> -->
	 <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="style.css">
	
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="print.css" media="print">
 
  <link rel="stylesheet" href="main.css">
  <!--===============================================================================================-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" href="starrr.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="stylebutton.css">

</head>


	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div>
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Livraison gratuite pour une commande standard de plus de 100 $
					</div>

					

				
				</div>
			</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li >
								<a href="home.php">Acceuil</a>
								<!--<ul class="sub-menu">
									<li><a href="index.html">Homepage 1</a></li>
									<li><a href="home-02.html">Homepage 2</a></li>
									<li><a href="home-03.html">Homepage 3</a></li>
								</ul>-->
							</li>

							<li class="active-menu">
								<a href="product.php">Catalogue</a>
																<ul class="sub-menu">
									<li><a href="product.php">Produits</a></li>
									<li><a href="home-02.php">Coaching</a></li>
									<li><a href="AfficherClub.php">Nos clubs</a></li>
								</ul>
							</li>

							<li class="active-menu">
								<a href="Evenement.php">Actualité</a>
																<ul class="sub-menu">
									<li><a href="Evenement.php">Nos événements</a></li>
									<li><a href="Offres.php">Nos Offres</a></li>
								</ul>
							</li>


							

							<li class="label1" data-label1="hot">
								<a href="shoping-cart.php">Commande</a>
							</li>

						

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
							<li class="main-menu">
								<a href="#">
									Mon Compte
							  
								</a>
								<ul class="sub-menu">
									<li><a href="s'inscrire.php">s'inscrire</a></li>
									<li><a href="login.php">se connecter</a></li>
									<li><a href="logout.php">se déconnecter</a></li>
									<li><a href="Espace-client.php">votre espace</a></li>
									
						
								</ul>
							</li>
						</ul>
					</div>	

					
					
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo count($_SESSION["shopping_cart"]);?>">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Rechercher...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
		<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
				<?php 
				$total = 0;
				     foreach($_SESSION["shopping_cart"] as $keys => $values)
					 {  
				 ?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
						<img src="image/<?php echo $values["item_nom_prod"]?>.jpg"> 
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo $values["item_nom_prod"]; ?>
							</a>

							<span class="header-cart-item-info">
							<?php echo $values["item_prix_prod"]; ?>
							</span>
						</div>
					</li>
					<?php
					$total = $total + ( $values["item_prix_prod"]);
				    
					  } ?>
					
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
					<?php echo $total; ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/about2.jpg');">
			<h2 class="ltext-105 cl0 txt-center">
				Plus De Details
			</h2>
		</section>
	
	

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">

		<div class="container">

			<div class="row">

				<div class="flex-w flex-sb-m p-b-52">
				 
</div>

				<div class="col-md-6 col-lg-7 p-b-30 ">

					<div class="p-l-25 p-r-30 p-lr-0-lg isotope-item isotope-item <?php echo $cat ?> <?php echo $sexe ?>">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="../../image/<?php echo $row['nom_prod']?>-01.jpg">
									
									<div class="wrap-pic-w pos-relative">
										
										   <img src="../../image/<?php echo $row['nom_prod']?>-01.jpg" alt="IMG-PRODUCT">


										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../../image/<?php echo $row['nom_prod']?>-01.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								

								<div class="item-slick3" data-thumb="../../image/<?php echo $row['nom_prod']?>-02.jpg">
									<div class="wrap-pic-w pos-relative">

										<img src="../../image/<?php echo $row['nom_prod']?>-02.jpg" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../../image/<?php echo $row['nom_prod']?>-02.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="../../image/<?php echo $row['nom_prod']?>-03.jpg">
									<div class="wrap-pic-w pos-relative">

										<img src="../../image/<?php echo $row['nom_prod']?>-03.jpg" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../../image/<?php echo $row['nom_prod']?>-03.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>

								</div>
							</div>
							<div class="p-t-32">

							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span class="cl4">&nbsp;&nbsp;&nbsp;</span>
								<span class="cl12 m-l-4 m-r-6"></span>
								<span>
									<span class="cl4">By</span> Admin  
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									<?php echo date("Y/m/d") ; ?>
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									<?php echo $row['cat']; ?> 
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								
							</span>
						</div>
						</div>
					</div>
				</div>

					
	<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo strtoupper($row['nom_prod']) ?>
						  
						</h4>

						<span class="mtext-106 cl2">
							$<?php echo $row['prix_prod']?>
						</span>

						<p class="stext-102 cl3 p-t-23">
						<?php if ($row['disponibilite']==1) {
						?>
						En stock
						<?php } ?>
						</p>

						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Taille
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="time">
											<option>Choose an option</option>
											<option>Taille S</option>
											<option>Taille M</option>
											<option>Taille L</option>
											<option>Taille XL</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Couleur
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="time">
											<option>Choose an option</option>
											<option>Red</option>
											<option>Blue</option>
											<option>White</option>
											<option>Grey</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
								

									<div class="size-204 flex-w flex-m respon6-next">
								

									<button class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10"  ><a href="shoping-cart.php?ref_prod=<?php echo $row["ref_prod"]; ?>">ajouter au panier </a></button>
								</div>
								</div>
							</div>	
						</div>

		<!--  <form action="pdf.php" method="GET">
			<input type="submit" name="pdf" style="float :right;padding-top: 5px;padding-left: 5px;padding-bottom: 5px;padding-right: 5px; background-color: #282828; color: #ffffff" value="Exporter PDF" class="btn btn-sm">
				
          </form>
  -->

         

						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>
 	                        <div>
 	                        	<div id="fb-root"></div>
 	                        	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0"></script>
<div class="fb-share-button" data-href="http://localhost:1234/projet-web-uranus/projet-web-uranus/views/frontend/product-detail.php?ref_prod=98989" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A1234%2Fprojet-web-uranus%2Fprojet-web-uranus%2Fviews%2Ffrontend%2Fproduct-detail.php%3Fref_prod%3D98989&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
 	                        	
                          <!--    <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%3A1234%2Fprojet-web-uranus%2Fprojet-web-uranus%2Fviews%2Ffrontend%2Fproduct-detail.php%3Fref_prod%3D98989&layout=button&size=small&width=81&height=20&appId" width="81" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
 	                        </div>

							<a target="_blank" title="Facebook" href="https://www.facebook.com/sharer.php" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a target="_blank" title="Twitter" href="https://twitter.com/share?url=https://bit.ly/2sI7H3v" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a target="_blank" title="Google +" href="https://plus.google.com/share?url=https://tontonduweb.com/previews-warc/genieCivil/article1.html" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>


							<a href="comments_produit.php?ref_prod=<?php echo $row['ref_prod'] ?>"  class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Comments"><i class="fas fa-comments" ></i></a>
						</div>
						
					</div>
				</div>

			</div>
	
		<div class="cont-btn">
			<button id="btnc" onclick="return clickme()" >
	
	  Voter
		     </button> 
		
		</div>
		<script type="text/javascript">
		function clickme(){

const el = document.createElement('div')

el.innerHTML = "Pour voter ,Vous devez se connecter </br>  <a href='login.php'>se connecter</a>"

swal({
  title: "Hello!",
  content: el,
   
})

		}
	</script>
		
<!-- LIKE AND DISLIKE -->
	<div class="vote">
	<div class="vote_bar">
	<div class="vote_progress"></div>
	</div>
	<div class="vote_btns">
<?php
//	$user_id=$_SESSION['email']; ?>
			
	<i <?php if (userLiked($row['ref_prod'])): ?>
      		  class="fa fa-thumbs-up like-btn"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-up like-btn"
      	  <?php endif ?>
      	  data-id="<?php echo $row['ref_prod'] ?>"></i>
      	<span class="likes"><?php echo getLikes($row['ref_prod']); ?></span>
      	
      	&nbsp;&nbsp;&nbsp;&nbsp;

	    <!-- if user dislikes post, style button differently -->
      	<i 
      	  <?php if (userDisliked($row['ref_prod'])): ?>
      		  class="fa fa-thumbs-down dislike-btn"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-down dislike-btn"
      	  <?php endif ?>
      	  data-id="<?php echo $row['ref_prod'] ?>"></i>
      	<span class="dislikes"><?php echo getDislikes($row['ref_prod']); ?></span>
      </div>
		
	</div>

   <script type="text/javascript">
   $(document).ready(function(){

    // if the user clicks on the like button ...
    $('.like-btn').on('click', function(){
      var post_id = $(this).data('id');
      $clicked_btn = $(this);
      if ($clicked_btn.hasClass('fa-thumbs-o-up')) {
          action = 'like';
      } else if($clicked_btn.hasClass('fa-thumbs-up')){
          action = 'unlike';
      }
      $.ajax({
          url: 'product-detail.php',
          type: 'post',
          data: {
              'action': action,
              'post_id': post_id

          },
          success: function(data){
              res = JSON.parse(data);
              if (action == "like") {
                  $clicked_btn.removeClass('fa-thumbs-o-up');
                  $clicked_btn.addClass('fa-thumbs-up');
              } else if(action == "unlike") {
                  $clicked_btn.removeClass('fa-thumbs-up');
                  $clicked_btn.addClass('fa-thumbs-o-up');
              }
              // display the number of likes and dislikes
              $clicked_btn.siblings('span.likes').text(res.likes);
              $clicked_btn.siblings('span.dislikes').text(res.dislikes);
    
              // change button styling of the other button if user is reacting the second time to post
              $clicked_btn.siblings('i.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
              swal("Thank You","You likes This Product  !", "success");
          }
      });       
    
    });
    
    // if the user clicks on the dislike button ...
    $('.dislike-btn').on('click', function(){
      var post_id = $(this).data('id');
      $clicked_btn = $(this);
      if ($clicked_btn.hasClass('fa-thumbs-o-down')) {
          action = 'dislike';
      } else if($clicked_btn.hasClass('fa-thumbs-down')){
          action = 'undislike';
      }
      $.ajax({
          url: 'product-detail.php',
          type: 'post',
          data: {
              'action': action,
              'post_id': post_id
          },
          success: function(data){
              res = JSON.parse(data);
              if (action == "dislike") {
                  $clicked_btn.removeClass('fa-thumbs-o-down');
                  $clicked_btn.addClass('fa-thumbs-down');
              } else if(action == "undislike") {
                  $clicked_btn.removeClass('fa-thumbs-down');
                  $clicked_btn.addClass('fa-thumbs-o-down');
              }
              // display the number of likes and dislikes
              $clicked_btn.siblings('span.likes').text(res.likes);
              $clicked_btn.siblings('span.dislikes').text(res.dislikes);
              
              // change button styling of the other button if user is reacting the second time to post
              $clicked_btn.siblings('i.fa-thumbs-up').removeClass('fa-thumbs-up').addClass('fa-thumbs-o-up');
              swal("Sorry","You dislikes This Product !", "success");
             

          }
      });   
    
    });
    
    });
 </script>

 <!-- Fin LIKE and DISLIKE -->
 <div><br><br></div>
  <div><br><br></div>



			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									
                                     <?php echo $row['description_prod']?>

								</p>
							</div>
							</div>
<!-- ne fonctionne pas si je le déplace -->
<?php 

$Catc= new categorieC();

$listeCategories=$Catc->recupererCategorie($catt);
foreach ($listeCategories as $row) {
    $cat=$row['cat'];
    $ref_cat=$row['ref_cat'];
    $generation =$row['generation'];
    $marque=$row['marque'];
    $size=$row['size'];
    $couleur=$row['couleur']; 
    $stock=$row['stock'];

		}	
?>
			<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Categorie
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['cat'] ?>
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Génération
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['generation'] ?>
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Marque
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['marque']?>
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Couleur
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['couleur']?>
											</span>
										</li>
                                                
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
											      Size
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $row['size'];?>
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Stock
											</span>

											<span class="stext-102 cl6 size-206">
											<?php	if($row['stock']==1) {?>
												<!--<?php// echo $row['stock']; ?>-->
												En Stock
                                               <?php }?>
											</span>
										</li>
									</ul>

								</div>
							</div>
						</div>

			


	


						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm"> 
										<!-- Review -->
						<div class="flex-w flex-m p-t-50 p-b-23">
									<span class="stext-102 cl3 m-r-16">
													Your Rating
									</span>
										      
                                                  <script src="starrr.js"></script>
<?php
$r=new RatingC();
$rr=new RatingC();
	//$conn = mysqli_connect("localhost", "root", "", "projet-web-2");
	//$result_ratings = mysqli_query($conn, "SELECT * FROM ratings WHERE product_id = '" . $reff . "'");
$result_ratings =$r->afficherP($reff);
	$ratings = 0;
	//while ($row_ratings = mysqli_fetch_object($result_ratings))

//while( $row_ratings=$result_ratings->fetch() )

 foreach($result_ratings as $row_ratings)
	{
		//$ratings += $row_ratings->ratings;

		//$ratings += $row_ratings['ratings'];
		$ratings += $row_ratings['ratings'];
		
		
	}
	
$n=$rr->nombre($reff);


	$average_ratings = 0;
	if ($ratings > 0)
	{

		
	//	$average_ratings =round($ratings / mysqli_num_rows($result_ratings)) ;
		$average_ratings =round($ratings /$n ) ;

	}
?>

	<div class="ratings" data-rating="<?php echo $average_ratings; ?>">
	</div>
	<div style=" color: black ;size:100px;"  >
		 <?php echo "$average_ratings";?> / 5 
	</div>

	<form method="POST" onclick="return saveRatings(this);">
		<input type="hidden" name="product_id" value="<?php echo $reff; ?>">

		<div class="starrr"></div>

		
	</form> 

<script>
var ratings = 0;
$(function () {
	$(".starrr").starrr().on("starrr:change", function (event, value) {
		ratings = value;
	});
	
		var rating = document.getElementsByClassName("ratings");
for (var a = 0; a < rating.length; a++)
{

	$(rating[a]).starrr({
		readOnly: true,
		rating: rating[a].getAttribute("data-rating")
	});
}
});

function saveRatings(form) {
	var product_id = form.product_id.value;

	$.ajax({
		url: "save-ratings.php",
		method: "POST",
		data: {
			"product_id": product_id,
			"ratings": ratings
		},
		success: function (response) {
			swal(response, "You Rating Saved !", "success");
		}
	});

	return false;
}
</script>
</div>
                                                <div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>

<a href="comments_produit.php?ref_prod=<?php echo"$reff"?>"  class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Comments"><i class="fas fa-comments" ></i></a>

													
												</div>
											    </div>
                              	
									</div>
								</div>
							</div>
		
					</div>
				

					</div>
				</div>
			</div>
		</div>



		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				
			</span>

			<span class="stext-107 cl6 p-lr-25">
			<?php echo strtoupper($row['cat']); ?>
			</span>
		</div>

	<!--	 <button onclick="window.print();" class="btn btn-primary" id="print-btn"> Print</button>
	</section> -->

	<!-- Related Products -->

	</form>
	


	 	<?php
}

	?>

		<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>
                     
			<!-- Slide2 -->
			 <div class="wrap-slick2">
				

				<div class="slick2">
						 <?php
                      $produit1C=new ProduitC();
                      $res=$produit1C->rechercherListeProduit($catt);

  
	                  foreach($res as $row){
		
	               	$nom_prod=$row['nom_prod'];
		            $prix_prod=$row['prix_prod'];
		            $src=$row['src'];
		            $ref_prod=$row['ref_prod'];
		       
		            ?>
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">

								 <img src ="<?php echo $row['src']?>"alt="IMG-PRODUCT">

								<a href="product-detail.php?ref_prod=<?php echo $ref_prod ?>&nom_prod=<?php echo $nom_prod ?>&prix_prod=<?php echo $prix_prod ?>&cat=<?php echo $catt ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
									Quick View
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product-detail.php?ref_prod=<?php echo $ref_prod ?>&nom_prod=<?php echo $nom_prod ?>&prix_prod=<?php echo $prix_prod ?>&cat=<?php echo $cat ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo strtoupper($row['nom_prod']); ?>
									</a>


									<span class="stext-105 cl3">
										$<?php echo $row['prix_prod']?> 
									</span>
								</div>

								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
									</a>
								</div>
							</div>
						</div>
					</div>

					

		

					<?php } ?>

					
				</div>
				
			</div>


		</div>

					
	</section>


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Femme
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Homme
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Chaussures
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Accessoires
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Aide
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Suivre la livraison 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Réclamation
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Livraison
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Restez en contact
					</h4>

					<p class="stext-107 cl7 size-201">
						des questions? Faites le nous savoir en magasin au 8e étage, 379 Hudson St, New York, NY 10018 ou appelez-nous au (+1) 96716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Nouveauté
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								souscrire
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<!--===============================================================================================-->	
	<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>  -->
<!--===============================================================================================-->
     <script src="vendor/animsition/js/animsition.min.js"></script> 
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script> 
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>  
<!--===============================================================================================-->
	<script src="js/main.js"></script>




</body>
</html>


 


 