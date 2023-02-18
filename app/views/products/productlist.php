<div class="table-agile-info">
<a href="../../public/uploadfiles">ffff</a>
  <div class="panel panel-default">
    <div class="panel-heading">
      All Category
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
            
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Product name</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Category</th>
            <th>Image</th>
            <th>Time Create</th>
            <th></th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php
        $list = $data['list'];
          $count = 0;
        foreach($list as $listprd){
            $allprd = $listprd->getAttributes();
            if($allprd['prd_type'] == 0){
              $status = 'Selling';
            }else{ 
              $status = 'Stop seles';
            }
           
            echo '<tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>'.$allprd['prd_name'].'</td>
            <td><span class="text-ellipsis">'.$allprd['prd_quantity'].'</span></td>
            <td><span class="text-ellipsis">'.$status.'</span></td>
            <td><span class="text-ellipsis">'.$allprd['cate_id'].'</span></td>
            <td><img style="width: 75px;" class ="imprd" src="../../public/uploadfiles/'.$allprd['prd_img'].'"/></td>
            <td><span class="text-ellipsis">'.$allprd['time_create'].'</span></td>
            <td>
              <a href="../../editcate?id='.urlencode($allprd['id']) .'" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>';
        }
        
    ?>
          </tr>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">


        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>