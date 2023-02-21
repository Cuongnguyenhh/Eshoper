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
          <form action="../../addorder" method="POST">
					<?php 
                       
                        foreach($_SESSION['card'] as $cards){
                            echo
                             '
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
                                         <input   name="quantity'.$cards['id'].'" class="cart_quantity_input" type="number" name="quantity" value="1" autocomplete="off" size="2">
                                         <button class="cart_quantity_down" > - </button>
                                     </div>
                                 </td>
                                
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
        <button style="float :right" type="submit" class="btn btn-primary btn-lg"> Check Out </button>
                    </form>
			</div>
     
		</div>
</section>
<script>
  const quantityInputs = document.querySelectorAll('.cart_quantity_input');
  const priceElements = document.querySelectorAll('.cart_total_price');
  const productPrice = <?php echo $cards['prd_price']; ?>;

  // Add event listeners to all quantity input fields
  quantityInputs.forEach(function(input, index) {
    input.addEventListener('input', function(event) {
      const quantity = parseInt(input.value);
      priceElements[index].textContent = (productPrice * quantity).toFixed(2);
    });
  });

  // Add event listeners to all quantity up and down buttons
  const cartQuantityUpButtons = document.querySelectorAll('.cart_quantity_up');
  const cartQuantityDownButtons = document.querySelectorAll('.cart_quantity_down');
  cartQuantityUpButtons.forEach(function(button, index) {
    button.addEventListener('click', function(event) {
      event.preventDefault();
      const quantity = parseInt(quantityInputs[index].value) + 1;
      quantityInputs[index].value = quantity;
      priceElements[index].textContent = (productPrice * quantity).toFixed(2);
    });
  });       
  cartQuantityDownButtons.forEach(function(button, index) {
    button.addEventListener('click', function(event) {
      event.preventDefault();
      const quantity = parseInt(quantityInputs[index].value) - 1;
      if (quantity >= 1) {
        quantityInputs[index].value = quantity;
        priceElements[index].textContent = (productPrice * quantity).toFixed(2);
      }
    });
  });
</script> 


    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div>
            <!--/breadcrums-->

            <div class="step-one">
                <h2 class="heading">Step1</h2>
            </div>
            <div class="register-req">
                <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest
                </p>
            </div>
            <!--/register-req-->

            <div class="shopper-informations">
                <div class="row">

                    <div class="col-sm-5 clearfix">
                        <div class="bill-to">
                            <p>Bill To</p>
                            <div class="form-one">
                                <form>
                                    <input type="text" placeholder="User Name">
                                    <input type="number" placeholder="Phone">
                                    <input type="text" placeholder=" Name ">
                                    <input type="text" placeholder="Address ">

                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Shipping Order</p>
                            <textarea name="message" placeholder="Notes about your order, Special Notes for Delivery"
                                rows="16"></textarea>
                            <label><input type="checkbox"> Shipping to bill address</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2>Review & Payment</h2>
            </div>

            <div class="table-responsive cart_info">

            </div>
            <div class="payment-options">
                <span>
                    <label><input type="checkbox"> Direct Bank Transfer</label>
                </span>
                <span>
                    <label><input type="checkbox"> Check Payment</label>
                </span>
                <span>
                    <label><input type="checkbox"> Paypal</label>
                </span>
            </div>
        </div>
    </section>
    <!--/#cart_items-->