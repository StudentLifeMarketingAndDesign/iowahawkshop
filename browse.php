<!DOCTYPE html>
<html lang="en-US">
    <?php include 'includes/doc-head.php'; ?>
	<body>
		<?php include 'includes/header.php'; ?>
        <main id="main-content" tabindex="-1" class="cd-main-content">
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
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</p>
                        </div>
                    </div>
                    <?php include 'includes/featured-items.php'; ?>
                </div>
                <div id="merch-MerchFrame-65" class="catalogMerchFrame catMerchFrame-65">
                    <div id="merch-HeaderOptions-65" class="catalogHeaderOptions catHeaderOptions-65">
                        <div id="merch-Subheader-65" class="listSubheading catSubheading-65" style="display: none;">
                            <h2 id="merch-Subtitle-65" class="listSubtitle">Merchandise</h2>
                        </div>
                        <ul id="merch-Sort-65" class="catalogSort catSort-65">
                            <li class="catalogSortLabel"><span>Sort:</span></li>
                            <li id="merch-SortOpt-Price-65" class="catalogSortOpt" sortopt="Price">
                                <a id="merch-SortLink-Price-65" class="catalogSortButton" href="#" sortopt="Price"><span>Price</span></a>
                            </li>
                            <li id="merch-SortOpt-Descriptor-65" class="catalogSortOpt" sortopt="Descriptor">
                                <a id="merch-SortLink-Descriptor-65" class="catalogSortButton" href="#" sortopt="Descriptor"><span>Name</span></a>
                            </li>
                            <li id="merch-SortOpt-Author-65" class="catalogSortOpt" sortopt="Author" style="display: none;">
                                <a id="merch-SortLink-Author-65" class="catalogSortButton" href="#" sortopt="Author"><span>Author</span></a>
                            </li>
                            <li id="merch-SortOpt-Manufacturer-65" class="catalogSortOpt" sortopt="Manufacturer"><a id="merch-SortLink-Manufacturer-65" class="catalogSortButton" href="#" sortopt="Manufacturer"><span>Brand</span></a>
                            </li>
                            <li id="merch-SortOpt-Index-65" class="catalogSortOpt" sortopt="Index">
                                <a id="merch-SortLink-Index-65" class="catalogSortButton" href="#" sortopt="Index"><span>Default</span></a>
                            </li>
                        </ul>
                        <div id="merch-ItemCount-65" class="catalogItemCount catItemCount-65" style="display: block;">Items <span class="catalogItemMin">1</span> to <span class="catalogItemMax">66</span><span class="catalogItemOutOf">  (out of <span class="catalogItemTotalCount">98</span>)</span>
                        </div>
                        <div id="merch-SearchCount-65" class="catalogItemCount catItemCount-65" style="display: none;"><span class="catalogSearchCount">0</span><span class="catalogSearchPlus" style="display: none;">+</span> item<span class="catalogSearchPlural" style="display: none;">s</span> found
                        </div>
                    </div>

                    <!-- begin product list -->
                    <div id="merch-ListFrame-65" class="catalogListFrame catListFrame-65">
                        <div id="merch65-Item-A1739" class="catalogItemFrame merchItemFrame">
                            <div id="merch65-ItemDetailsFrame-A1739" class="catalogItemDetailsFrame">
                                <div id="merch65-ItemDetails-A1739" class="catalogItemDetails">
                                    <div id="merch65-ItemTitle-A1739" class="catalogItemTitle">
                                        <a id="merch65-ItemTitleLink-A1739" href="#" class="catalogItemLinkFrame">
                                            <div id="merch65-ImageFrame-A1739" class="catalogImageFrame">
                                                <img id="merch65-Img-A1739" class="catalogItemImage" alt="" src="https://via.placeholder.com/300x334" istextbook="0" border="0">
                                            </div>
                                            <span class="catalogItemLink catalogItemTitleLink">Product Name Goes Here</span>
                                        </a>
                                    </div>
                                    <div id="merch65-ItemInfo-A1739" class="catalogItemInfo"></div>
                                    <div id="merch65-ItemPriceFrame-A1739" class="itemPricing merch65ItemPricing priceDisplay">
                                        <div class="itemPricePrefix merch65ItemPricePrefix itemPricePrefixSale merch65ItemPricePrefixSale">Sale!</div>
                                        <div class="itemPriceMain merch65ItemPrice itemPriceSale merch65ItemPriceSale">$20.00</div>
                                        <div id="merch65-ItemPriceSuffix-A1739" class="itemPriceSuffix merch65ItemPriceSuffix itemPriceRegular merch65ItemPriceRegular">Regular price $28.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- repeat product list items -->
                        <?php for ($i = 0; $i < 4; $i++) { include('includes/item.php'); } ?>
                        <!-- end product list -->
                    </div>

                </div>
            </div>
        </main>

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