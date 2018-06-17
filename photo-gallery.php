<?php include 'inc/header.php'; 
$images = [
	
	'LOTIS QCX Device Gallery' => [
		'1a.LOTIS QCX  Front View quarter profile with scanning head in  retracted position .JPG',
		'1b.LOTIS QCX front right quarter profile with taper forks in detail and scanning head retracted .JPG',
		'1c.LOTIS QCX right side profile front showing pipe clamp scanning head in the retracted position Front.JPG',
		'1d.LOTIS QCX - Left side 3 quarter profile  showing pipe clamp scanning head in retracted position.JPG',
		'1e.LOTIS QCX rear profile showing power and USB connections .JPG',
		'1f.LOTIS QCX rear profile showing device controls.JPG',
		'1g.LOTIS QCX underside profle .JPG',
	],
	'LOTIS QCX Program Software Gallery' => [
		'2a.LOTIS QCX program screen for Article Inspection setup.JPG',
		'2b.LOTIS QCX program main command screen .JPG',
		'2c.LOTIS QCX program screen manual overlay display.JPG',
		'2d.LOTIS QCX program screen with measurements display .JPG',
		'2e.LOTIS QCX program screen with display of electronic overlay of profiles .JPG',
	], 
	'LOTIS QCX In Use Gallery' => [
		'1a.LOTIS QCX clamped for pin inspection.jpg',
		'1b.LOTIS QCX in profile with power supply and data cable attached.jpg',
		'1c.LOTIS QCX powered up to scan pin thread at inspection station.jpg',
		'1d.LOTIS QCX dual lasers in close up view in scanning process.jpg',
		'1e.LOTIS QCX left profile showing taper fork and compression clamp.jpg',
		'1f.LOTIS QCX in left profile with shows proportional size to drill pipe.jpg',
		'1g.LOTIS QCX close up of clamp and scanning head in extended position.jpg',
	]
	
];

?>

<body class="inner">
    
    <!-- Page Content -->
	<div class="page_content">
		<?php include 'inc/footer.php'; ?>
		<section class="page">
		
			
			<div class="row">
				
				<div class="col-md-7 col-sm-7 offset-md-2 col-sm-offset-2">
					<h2 class="page_title">Photo Gallery</h2>
					<a class="backlink" href="/"><i class="backlink fa fa-caret-left"></i> BACK</a>

					  <?php foreach($images as $cat => $ob_images){ ?>
					  <h3 class="gallery_categ"><?= $cat ?></h3>
						<div class="row">
						<?php foreach($ob_images as $f){ ?>
							<div class="col-sm-4 col-xs-6 ">
								<a href="images/gallery/<?= $f ?>" class="lighterbox thumbnail">
									<div class="image_area" style="background-image:url('images/gallery/thumb.php?f=<?= $f ?>')" >
									&nbsp;
									</div>
								</a>
							</div>
						<?php } ?>
						</div>
						<br/>
					 <?php } ?>
					 
				</div>
				<div class="col-md-3 col-sm-3">
				  <?php
				 include('inc/inner_signup.php');
				 ?>
				</div>
			</div>
		</section>
	</div>
	
	
	
    <!-- /.container -->
	<!-- Footer
        <footer>
			<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright 2017 by abc   <a href="#" class="footer_link">Privacy Statement</a> <a href="#" class="footer_link">Terms Of Use</a></p>
                </div>
            </div>
			</div>
        </footer> -->
    <!-- /Footer -->
	<!-- jQuery -->
   <script>
   $(function(){
	  $(".lighterbox").lighterbox({ overlayColor : "white" }); 
   });
   </script>
	
</body>

</html>
