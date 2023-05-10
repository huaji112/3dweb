<?php
   
   $json = file_get_contents('x3d.json');
   $result = json_decode($json, true);
   
   $id=$_GET['id'];
if($id==1){
	$title=$result['canshu'][0]['title'];
	$url1=$result['canshu'][0]['url1'];
	$url2=$result['canshu'][0]['url2'];
	$url3=$result['canshu'][0]['url3'];
	$biao=$result['canshu'][0]['biao'];
	$daxiao1=$result['canshu'][0]['daxiao1'];
	$daxiao2=$result['canshu'][0]['daxiao2'];
	$daxiao3=$result['canshu'][0]['daxiao3'];
	
	
}elseif($id==2){
	
	$title=$result['canshu'][1]['title'];
	$url1=$result['canshu'][1]['url1'];
	$url2=$result['canshu'][1]['url2'];
	$url3=$result['canshu'][1]['url3'];
	$biao=$result['canshu'][1]['biao'];
	$daxiao1=$result['canshu'][1]['daxiao1'];
	$daxiao2=$result['canshu'][1]['daxiao2'];
	$daxiao3=$result['canshu'][1]['daxiao3'];
	
	
}elseif($id==3){
	
	$title=$result['canshu'][2]['title'];
	$url1=$result['canshu'][2]['url1'];
	$url2=$result['canshu'][2]['url2'];
	$url3=$result['canshu'][2]['url3'];
	$biao=$result['canshu'][2]['biao'];
	$daxiao1=$result['canshu'][2]['daxiao1'];
	$daxiao2=$result['canshu'][2]['daxiao2'];
	$daxiao3=$result['canshu'][2]['daxiao3'];
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title;?></title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
	<link rel="stylesheet" href="x3dom.css">
	<script src="x3dom.js"></script>
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke">
                <h1><a class="navbar-brand" href="index.php">
                        Coca<span class="sub-color">Cola</span>
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="StatementofOriginality.php">Statement of Originality</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="models.php">3D Models</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" onclick="tan()">Contact</a>
                        </li>
                    </ul>
                    
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Statement of Originality </h2>
                       
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Statement of Originality</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/ab-->
    <section class="w3l-team py-5" id="w3l-team">
        <div class="container py-md-5">
            <div class="row text-left">
                <div class="col-md-6 mt-md-5 pe-lg-5">
                    <div class="title-content text-left">
                       
                        <h3 class="title-w3l mb-3"><?php echo $title;?></h3>
						<p><?php echo $biao;?></p>
                        <!--btn-primary-->
                        <a class="btn btn-style btn-primary mt-md-5 mt-4" id="model" onclick="model(<?php echo $id;?>)">Model</a> 
						<a class="btn btn-style  mt-md-5 mt-4" id="wire" onclick="wire(<?php echo $id;?>)">Wire</a>
						<a class="btn btn-style  mt-md-5 mt-4" id="material" onclick="material(<?php echo $id;?>)">Material</a><br/>
						<a class="btn btn-style  mt-md-5 mt-4" id="on" onclick="on(<?php echo $id;?>)">On</a>
						 <a class="btn btn-style  mt-md-5 mt-4" id="off" onclick="off(<?php echo $id;?>)">Off</a>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-5">
                    <div id="luyou1" style="width:600px;margin:0 auto;background:#cccccc;height:350px;margin-top:30px;">
                   
				   <x3d id="x3domOrientationSceneView" width='600px' height='450px' >
                     <scene>
                        
                         <viewpoint position="<?php echo $daxiao1;?>" ></viewpoint> 
                        <inline   url="x3d/<?php echo $url1;?>" mapDEFToID="true" namespaceName="orientationBox" width="600px" height="300px" style="margin-left:-20px;"></inline>
                       
					</scene>
                   
				    </div>
					<div id="luyou2" style="width:600px;margin:0 auto;background:#cccccc;height:350px;margin-top:30px;display:none">
				   <x3d id="x3domOrientationSceneView" width='600px' height='450px' >
                     <scene>
                        
                         <viewpoint position="<?php echo $daxiao2;?>" ></viewpoint> 
                        <inline   url="x3d/<?php echo $url2;?>" mapDEFToID="true" namespaceName="orientationBox" width="600px" height="300px" style="margin-left:-20px;margin-top:20px;"></inline>
                       
					</scene>
                   
				    </div>
					<div id="luyou3" style="width:600px;margin:0 auto;background:#cccccc;height:350px;margin-top:30px;display:none">
				   <x3d id="x3domOrientationSceneView" width='600px' height='450px' >
                     <scene>
                        
                         <viewpoint position="<?php echo $daxiao3;?>" ></viewpoint> 
                        <inline   url="x3d/<?php echo $url3;?>" mapDEFToID="true" namespaceName="orientationBox" width="600px" height="300px" style="margin-left:-20px;margin-top:20px;"></inline>
                       
					</scene>
                   
				    </div>
                   
                </div>
                
               
            </div>

        </div>
    </section>
   
    <!--/footer-->
   <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container pt-md-5">
                <div class="w3l-footer-text-style">
                    <div class="footer-list-cont d-sm-flex align-items-center justify-content-between mb-5">

                        <h2 class="w3logo"><a class="navbar-brand" href="index.php">
                                Coca<span class="sub-color">Cola</span>
                            </a></h2>
                        <div class="main-social-footer-29">
                            
                        </div>
                    </div>
                </div>
                <div class="row footer-top-29 pt-lg-5 pt-sm-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="address-grid">
                              <p>2023 Coca Cola. by@<a href="https://www.coca-cola.co.uk/brands">coca-cola</a></p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4 ps-lg-5">
                        
                        <div class="address-grid mt-sm-5 mt-4">
                            <h5>Home</h5>
                            <h5 class="email-cont-text mt-1"> <a href="index.php" class="mail">Home</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu ps-lg-5 mt-lg-0 mt-sm-5 mt-4">
                        <div class="address-grid">
                            <h5 class="mb-4 pb-lg-2">3D Models</h5>
                            <ul>
                                <li><a href="detail.php?id=1">Caleb Davis Bradham</a></li>
                                <li><a href="detail.php?id=2">Coca-Cola Zero Sugar</a></li>
                                <li><a href="detail.php?id=3">Sergio Costa</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="address-grid col-lg-4 col-md-6 col-sm-7 ps-lg-5 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main">
                        <h5>StatementofOriginality</h5>
                        <ul>
                        <li><a href="StatementofOriginality.php"><span class="fas fa-angle-right mr-2"></span>StatementofOriginality</a></li>
                        
                    </ul>
                    </div>
                </div>
               
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-long-arrow-alt-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move top -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!--/slider-js-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
		function tan(){
		alert("Producer: Yunfei Du / Contact email: yd241@sussex.ac.uk");}
		
		
	//btn-primary
	function model(id){
        
	  $("#luyou1").css("display", "block");
	  $("#luyou2").css("display", "none");
	  $("#luyou3").css("display", "none");
	  
	  
	  $("#model").addClass("btn-primary");
	  $("#wire").removeClass("btn-primary");
	  $("#material").removeClass("btn-primary");
   
    }
	
	function wire(id){
	   
	  $("#luyou1").css("display", "none");
	  $("#luyou2").css("display", "block");
	  $("#luyou3").css("display", "none");
	   $("#model").removeClass("btn-primary");
	  $("#wire").addClass("btn-primary");
	  $("#material").removeClass("btn-primary");
	}
    
	function material(id){
	   
	  $("#luyou1").css("display", "none");
	  $("#luyou2").css("display", "none");
	  $("#luyou3").css("display", "block");
	    $("#model").removeClass("btn-primary");
	  $("#wire").removeClass("btn-primary");
	  $("#material").addClass("btn-primary");
	
	}
	
	
	function on(){
	  
	  $("#luyou1").css("background-color", "#f8f9fa");
	  $("#luyou2").css("background-color", "#f8f9fa");
	  $("#luyou3").css("background-color", "#f8f9fa");
	  $("#on").addClass("btn-primary");
	  $("#off").removeClass("btn-primary");
	}
	
	function off(){
	   
	   $("#luyou1").css("background-color", "#524f4f");
	  $("#luyou2").css("background-color", "#524f4f");
	  $("#luyou3").css("background-color", "#524f4f");
	  $("#off").addClass("btn-primary");
	  $("#on").removeClass("btn-primary");
	}
	
		
    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
