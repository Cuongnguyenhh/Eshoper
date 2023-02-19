<?php
$prd = $data['prd'];
?>
<div class="product-details">
    <!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="../../public/uploadfiles/<?= $prd['prd_img'] ?>" alt="" />

        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->


            <!-- Controls -->
            <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>
    <div class="col-sm-7">
        <div class="product-information">
            <!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2><?= $prd['prd_name'] ?></h2>
            <p> ID Product: <?=$prd['id']?></p>
            <img src="../../public/uploadfiles/<?= $prd['prd_img'] ?>" alt="" />
            <span>
                <span>US <?=$prd['prd_price']?>$</span>
                <label>Quantity:</label>
                <input type="text" value="1" />
                <a href="../../getcart?id=<?=$prd['id']?>"><button type="button" class="btn btn-fefault cart">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart
                    </button></a>
            </span>
            <p><b>Availability:</b> In Stock</p>
            <p><b>Condition:</b> New</p>
            <p><b>Brand:</b> E-SHOPPER</p>
            <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
        </div>
        <!--/product-information-->
    </div>
</div>
<!--/product-details-->