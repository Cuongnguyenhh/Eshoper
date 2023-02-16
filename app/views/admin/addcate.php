
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add Category Product
                </header>
                <div class="panel-body">
                    <div class="position-center">
                      
                    
                        <form role="form" action="../../getaddcate" method="post">
                           
                            <div class="form-group">
                                <label for="">Categoty Name</label>
                                <input type="text" class="form-control" name="cate_name" id=""
                                    placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Discripction</label>
                                <textarea style="resize: none; " rows="5" name="categoty_product_decs" type="text" class="form-control"
                                    id=""> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Show</label>
                                <select name="type" class="form-control input-sm m-bot15">
                                    <option value="0">Show</option>
                                    <option value="1">Hide</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control input-sm m-bot15">
                                    <option value="0">Selling</option>
                                    <option value="1">Out Of Stock</option>
                                    <option value="1">Stop Seles</option>
                                    
                                </select>
                            </div>

                            <button type="submit" name="add_category_product" class="btn btn-info">Add Category</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>



        <!-- page end-->
    </div>
</div>
</div>

