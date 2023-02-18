<?php
$prd = $data['prd']->getAttributes();
$cate = $data['cate'];


?>
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit Product
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="../../getupdate?id=<?php echo $prd['id'] ?>" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product name</label>
                                <input type="text" class="form-control" name="prd_name" id="exampleInputEmail1" value="<?php echo $prd['prd_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="text" class="form-control" name="prd_price" id="exampleInputPassword1" value="<?php echo $prd['prd_price'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quantity</label>
                                <input type="text" class="form-control" name="prd_quantity" id="exampleInputPassword1" value="<?php echo $prd['prd_quantity'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Category name</label>
                                <select name="cate_id" class="form-control input-sm m-bot15">
                                    <?php
                                    foreach ($cate as $cate) {
                                        $catekey = $cate->getAttributes();
                                        echo '<option value="' . $catekey['cate_name'] . '">' . $catekey['cate_name'] . '</option> ';
                                    }
                                    ?>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control input-sm m-bot15">
                                    <option value="0">Selling</option>
                                    <option value="1">Stop</option>
                                </select>
                            </div>


                            <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile" name="imgput">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>


    <!-- page end-->
</div>