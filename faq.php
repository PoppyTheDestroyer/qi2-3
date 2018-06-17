<?php include 'inc/header.php'; 
$questions = [
	'What is the primary purpose of this tool?' => 'This tool is primarily designed to replace the time-consuming process of mold analysis of thread features through use of an optical comparitor and an overlay.',

	'How long does the inspection process take?' => 'Less than one minute',

	'Is there a PASS/FAIL evaluation?' => 'PASS/FAIL criteria are determined from shop to shop depending on internal quality standards.',

	'Can I drop the tool?' => 'This is a precision measuring instrument that can potentially be damaged by excessive shocks.Handle with care.',

	'Normally, a whole suite of gages is required for a certain connection type/family. Will I need to buy a different tool for each connection type/family?' => 'No, the QC-X is adaptable to a wide variety of API, semi-premium and premium threadforms, and custom processing algorithms for proprietary threads can be developed.',

	'Can I store and retreive data collected by the QC-X?' => 'Yes, all data can be stored indefinitely. No need for storing bulky and hard to manage molds.', 


];
?>

<body class="inner">
    
    <!-- Page Content -->
	<div class="page_content">
		<?php include 'inc/footer.php'; ?>
		<section class="page">
		
			
			<div class="row">
				
				<div class="col-md-7 col-sm-7 offset-md-2 col-sm-offset-2">
					<h2 class="page_title">FREQUENTLY ASKED QUESTIONS</h2>
					<a class="backlink" href="/"><i class="backlink fa fa-caret-left"></i> BACK</a>

					<div id="accordion">
					<?php 
					$ix = 0;
					foreach ($questions as $quest => $ans){ 
					$ix++;
					?>
					  <div class="card">
						<div class="card-header" id="headingOne">
						   
							<div class="btn_open_paanel" data-toggle="collapse" data-target="#collapse<?= $ix ?>" aria-expanded="true" aria-controls="collapse<?= $ix ?>" href="#">
							  <?= $quest ?>
							</div>
							<div class="clearfix"></div>
						</div>

						<div id="collapse<?= $ix ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						  <div class="card-body">
							<?= $ans ?>
						  </div>
						</div>
					  </div>
					<?php } ?> 
					</div>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
</body>

</html>
