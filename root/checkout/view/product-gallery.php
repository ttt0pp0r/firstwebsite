<div id="product-grid">
	<div class="txt-heading">Choose your products</div>
	<div class="product-item">
		<div class="product-image">
			<img src="../image/shawarma.jpg" id="<?php echo "shawarma1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Shawarma";?></strong>
		</div>
		<div class="product-price"><?php echo "5.00";?></div>

		<input type="button" id="add_<?php echo "shawarma1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "shawarma1";?>','<?php echo "Shawarma";?>','<?php echo "5.00";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="../image/bigshawarma.jpg" id="<?php echo "shawarma2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Big Shawarma";?></strong>
		</div>
		<div class="product-price"><?php echo "6.00";?></div>

		<input type="button" id="add_<?php echo "shawarma2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "shawarma2";?>','<?php echo "Big Shawarma";?>','<?php echo "6.00";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="../image/xlshawarma.jpg" id="<?php echo "shawarma3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "XL Shawarma";?></strong>
		</div>
		<div class="product-price"><?php echo "7.00";?></div>

		<input type="button" id="add_<?php echo "shawarma3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "shawarma3";?>','<?php echo "XL Shawarma";?>','<?php echo "7.00";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="../image/xxlshawarma.jpg" id="<?php echo "shawarma4";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "XXL Shawarma";?></strong>
		</div>
		<div class="product-price"><?php echo "8.00";?></div>

		<input type="button" id="add_<?php echo "shawarma4";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "shawarma4";?>','<?php echo "XXL Shawarma";?>','<?php echo "8.00";?>')" />

	</div>
</div>