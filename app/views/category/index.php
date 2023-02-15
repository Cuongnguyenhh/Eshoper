<h2>Thêm danh mục</h2>
<form method="post">
   <input type="text" name="txtname"> 
   <button>Thêm</button>
</form>
<ul>
   <?php foreach($data as $key=>$value){?>   
      <li><?php echo $value['name'];?>
      <a href="<?php echo base_url; ?>editcate/<?php echo $value['id']?>">Edit</a>
      <a href="<?php echo base_url; ?>delcate/<?php echo $value['id']?>">Delete</a></li>
   <?php } ?> 
</ul>