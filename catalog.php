<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Browse</title>

		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/49191f9021.js" crossorigin="anonymous"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
		
		<!-- Sequoia CSS Files -->
		<link rel="stylesheet" type="text/css" href="https://www.hawkshop.com/css/masterstyles.css">
		<?php include 'includes/style.php'; ?>
		<link rel="stylesheet" type="text/css" href="https://www.hawkshop.com/scripts/jquery-ui-1.12.1/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="https://www.hawkshop.com/scripts/jquery-ui-1.12.1/jquery-ui.structure.min.css">
		<link rel="stylesheet" type="text/css" href="https://www.hawkshop.com/css/responsive/responsiveTemplate.css">
		<link rel="stylesheet" type="text/css" href="https://www.hawkshop.com/css/buttons.css">
		<link rel="stylesheet" type="text/css" href="https://www.hawkshop.com/css/iCheck/skins/sequoia/sequoia.css">
		<link rel="stylesheet" type="text/css" href="https://www.hawkshop.com/css/responsive/merchandise/itemList.css">
		<link rel="stylesheet" type="text/css" href="https://www.hawkshop.com/css/responsive/merchandise/itemDisplay.css">

		<!-- My CSS File -->
		<link rel="stylesheet" href="dist/main.css?cb=1588010098095">
	</head>
	<body>
		<?php include 'includes/header.php'; ?>



		<div id="merchPageFrame" class="catalogScale" style="min-height: 0px;">
			<div id="merch-Header-65">
				<h1 id="merch-Title-65" class="catalogPageTitle">Catalog Name Goes Here</h1>

				<!-- breadcrumbs -->
				<?php include 'includes/breadcrumbs.php'; ?>

				<ul id="merch-SaleBest-65" class="catalogSaleBest catSaleBest-65" style="display: table;">
					<li id="merch-discountsButton-65" class="catalogSaleBestOpt catalogSaleBestOpt-discounts" style="display: table-cell;">
						<a id="merch-discountsButtonLink-65" href="#" class="catalogSaleBestOptLink"><span>Sale Items</span></a>
					</li>
					<li id="merch-bestsellersButton-65" class="catalogSaleBestOpt catalogSaleBestOpt-bestsellers" style="display: table-cell;"><a id="merch-bestsellersButtonLink-65" href="#" class="catalogSaleBestOptLink"><span>Bestsellers</span></a>
					</li>
				</ul>
			</div>
			<div id="merch-HighlightFrame-65" class="catalogContent catContent-65">
				<div id="merch-ContentFrame-65" class="catalogContentFrame catContentFrame-65" style="display: block;">
					<div id="CatContent-65">
						<p>Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					</div>
				</div>

				<!-- Featured Items -->
				<?php include 'includes/featured-items.php'; ?>
				
				<!-- Begin Catalog -->
				<div id="merch-CatIconFrame-26" class="catIconFrame catIconFrame-26" style="display: block;">
					<!-- repeat catalog list items -->
					<?php for ($i = 0; $i < 7; $i++) { include('includes/catalog-item.php'); } ?>
					<!-- end catalog list -->
				</div>
			</div>

		</div>



		<?php include 'includes/callouts.php'; ?>
		<?php include 'includes/footer.php'; ?>

		<!-- JavaScript File -->
		<script src="dist/all.js?cb=1588081449454"></script>
		<!-- Jquery -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<!-- Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>