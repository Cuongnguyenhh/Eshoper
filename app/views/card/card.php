<style>
    button.cart_quantity_down {
  background-color: #fff;
  border: 1px solid #ccc;
  color: #333;
  padding: 6px 12px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 4px;
  cursor: pointer;
}

button.cart_quantity_down:hover {
  background-color: #f1f1f1;
  border: 1px solid #999;
  color: #666;
}

button.cart_quantity_down:active {
  background-color: #e6e6e6;
  border: 1px solid #999;
  color: #333;
}



button.cart_quantity_up {
  background-color: #fff;
  border: 1px solid #ccc;
  color: #333;
  padding: 6px 12px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 4px;
  cursor: pointer;
}

button.cart_quantity_up:hover {
  background-color: #f1f1f1;
  border: 1px solid #999;
  color: #666;
}

button.cart_quantity_up:active {
  background-color: #e6e6e6;
  border: 1px solid #999;
  color: #333;
}

</style>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
                        
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
                   
					<?php 
                       
                        foreach($_SESSION['card'] as $cards){
                            echo
                             ' <form action="">
                             <tbody>
						
                             <tr>
                                 <td class="cart_product">
                                     <a href=""><img style="width: 75px;" src="../../public/uploadfiles/'.$cards['prd_img'].'" alt=""></a>
                                 </td>
                                 <td class="cart_description">
                                     <h4><a href="">'.$cards['prd_name'].'</a></h4>
                                     <p>Web ID: 1089772</p>
                                 </td>
                                 <td class="cart_quantity">
                                     <div class="cart_quantity_button">
                                         <button class="cart_quantity_up" > + </button>
                                         <input   name="quantity" class="cart_quantity_input" type="number" name="quantity" value="1" autocomplete="off" size="2">
                                         <button class="cart_quantity_down" > - </button>
                                     </div>
                                 </td>
                                 </form>
                                 <td class="cart_total">
                                     <p class="cart_total_price">'.$cards['prd_price'].'</p>
                                 </td>
                                 <td class="cart_delete">
                                     <a class="cart_quantity_delete" href="../../delcart?id='.$cards['id'].'"><i class="fa fa-times"></i></a>
                                 </td>
                             </tr>
                         </tbody>
                          ';
                        }
                    ?>
				</table>
			</div>
		</div>
	</section>
    <script>
  const quantityInput = document.querySelector('.cart_quantity_input');
  const priceElement = document.querySelector('.cart_total_price');
  const productPrice = <?php echo $cards['prd_price']; ?>;

  document.querySelector('.cart_quantity_up').addEventListener('click', function(event) {
    event.preventDefault();
    const quantity = parseInt(quantityInput.value) + 1;
    quantityInput.value = quantity;
    priceElement.textContent = (productPrice * quantity).toFixed(2);
  });
</script>