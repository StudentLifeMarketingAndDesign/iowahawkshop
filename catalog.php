<!DOCTYPE html>
<html lang="en-US">
    <?php include 'includes/doc-head.php'; ?>
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