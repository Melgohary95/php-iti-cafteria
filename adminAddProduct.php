<?php include('./components/header.php') ?>
<?php include('./components/navBar.php') ?>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Add Product
					</span>
				</div>

				<form method="post" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Product">
						<span class="label-input100">Product</span>
						<input class="input100" type="text" name="product" placeholder="Enter product">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Price</span>
						<input class="input100" type="number" name="price"
                        min="10" max="100">
                 
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Category</span>
                        <input class="input100" list="categorys" name="category">
                        <datalist id="categorys">
                          <option value="tea">
                          <option value="coffe">
    
                        </datalist>
						<span class="focus-input100"></span>
					</div>
					
				


					  <div class="wrap-input100 validate-input m-b-26" data-validate="Profile Picture">
						<span class="label-input100">Profile Picture</span>
						<input  class="input100" type="file" name="browse" id="fileToUpload">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Save
						</button>

						<button class="login100-form-btn">
							Reset
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

  <?php include('./components/footer.php') ?>
