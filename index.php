<?php //Init
	
	// Display options
	$options = array(
		'debug' => $_GET['debug'] 
	);

	$product_categories = array(
		array(
			'category_name' => 'Alpine skis',
			'style' => 'alpineskis',
			'attributes' =>	array(
				array(
					'attribute_name' => 'AlpineSkiLengthJunior',
					'attribute_public_name' => 'Ski length',
					'article_type' => 'AlpineSkiJunior',
					'profile_attribute' => 'Length of person (cm)',
					'get' => 'length',
					'attribute_calc' => 'Length of person - 20cm',
					'allow_less' => 2,
					'allow_more' => 5,
					'unit' => 'cm',
					'products' => array(
						array(
							'product_name' => 'Knatte/Junior'
						),
						array(
							'product_name' => 'Knatte/Junior Twintip'
						)
					),
					'fetch' => 'AlpineSkiLengthJunior'
				),
				array(
					'attribute_name' => 'AlpineSkiLengthSenior',
					'attribute_public_name' => 'Ski length',
					'article_type' => 'AlpineSkiSenior',
					'profile_attribute' => 'Length of person (sm)',
					'get' => 'length',
					'attribute_calc' => 'Length of person - 14cm',
					'allow_less' => 6,
					'allow_more' => 2,
					'unit' => 'cm',
					'products' => array(
						array(
							'product_name' => 'Senior medel'
						),
						array(
							'product_name' => 'Senior Advanced'
						),
						array(
							'product_name' => 'Senior Extreme'
						),
						array(
							'product_name' => 'Senior Extreme Pro'
						),
						array(
							'product_name' => 'Senior Twintip'
						)	
					),
					'fetch' => 'AlpineSkiLengthSenior'
				),
				array(
					'attribute_name' => 'AlpineSkiLengthFreeride',
					'attribute_public_name' => 'Ski length',
					'article_type' => 'AlpineSkiFreeride',
					'profile_attribute' => 'Length of person (cm)',
					'get' => 'length',
					'attribute_calc' => 'Length of person - 7cm',
					'allow_less' => 5,
					'allow_more' => 2,
					'unit' => 'cm',
					'products' => array(
						array(
							'product_name' => 'Senior Freeride'
						),
						array(
							'product_name' => 'Senior Topptur Medel'
						),
						array(
							'product_name' => 'Senior Topptur Advanced'
						)
					),
					'fetch' => 'AlpineSkiLengthFreeride'
				)
			)
		),
		array(
			'category_name' => 'Alpine boots',
			'style' => 'alpineboots',
			'attributes' =>	array(
				array(
					'attribute_name' => 'AlpineBootSize',
					'attribute_public_name' => 'Boot size',
					'article_type' => 'AlpineBoot',
					'profile_attribute' => 'Shoe size',
					'get' => 'shoesize',
					'attribute_calc' => 'Shoe size * 0.66',
					'allow_less' => 0,
					'allow_more' => 0,
					'unit' => 'cm',
					'products' => array(
						array(
							'product_name' => 'Knatte/Junior'
						),
						array(
							'product_name' => 'Senior Medel'
						),
						array(
							'product_name' => 'Senior Advanced'
						),
						array(
							'product_name' => 'Senior Topptur Medel'
						),
						array(
							'product_name' => 'Senior Topptur Avancerad'
						)

					),
					'fetch' => 'AlpineBootSize',
				)
			)
		),
		array(
			'category_name' => 'Cross country skis',
			'style' => 'crosscountryskis',
			'attributes' =>	array(
				array(
					'attribute_name' => 'CrossCountrySkiiLengthJunior',
					'attribute_public_name' => 'Ski length',
					'article_type' => 'CrossCountrySkiJunior',
					'profile_attribute' => 'Length of person (cm)',
					'get' => 'length',
					'attribute_calc' => 'Length of person + 10cm',
					'allow_less' => 15,
					'allow_more' => 10,
					'unit' => 'cm',
					'products' => array(
						array(
							'product_name' => 'Junior Medel'
						)
					),
					'fetch' => 'CrossCountrySkiLengthJunior',
				),
				array(
					'attribute_name' => 'CrossCountrySkiiLengthSenior',
					'attribute_public_name' => 'Ski length',
					'article_type' => 'CrossCountrySkiSenior',
					'profile_attribute' => 'Length of person (cm)',
					'get' => 'length',
					'attribute_calc' => 'Length of person + 20cm',
					'allow_less' => 20,
					'allow_more' => 15,
					'unit' => 'cm',
					'products' => array(
						array(
							'product_name' => 'Senior Medel'
						),
						array(
							'product_name' => 'Senior Advanced'
						)
					),
					'fetch' => 'CrossCountrySkiLengthSenior',
				)
			)
		),
		array(
			'category_name' => 'Cross country boots',
			'style' => 'crosscountryboots',
			'attributes' =>	array(
				array(
					'attribute_name' => 'CrossCountryBootSize',
					'attribute_public_name' => 'Boot size',
					'article_type' => 'CrossCountryBoot',
					'profile_attribute' => 'Shoe size',
					'get' => 'shoesize',
					'attribute_calc' => 'Shoe size + 1',
					'allow_less' => 0,
					'allow_more' => 0,
					'unit' => '',
					'products' => array(
						array(
							'product_name' => 'Knatte/Junior'
						),
						array(
							'product_name' => 'Senior'
						)	
					),
					'fetch' => 'CrossCountryBootSize',
				)
			)
		),
		array(
			'category_name' => 'Snowboards',
			'style' => 'snowboards',
			'attributes' =>	array(
				array(
					'attribute_name' => 'SnowboardLength',
					'attribute_public_name' => 'Snowboard length',
					'article_type' => 'Snowboard',
					'profile_attribute' => 'Length of person (cm)',
					'get' => 'length',
					'attribute_calc' => 'Length of person - 20cm',
					'allow_less' => 2,
					'allow_more' => 8,
					'unit' => 'cm',
					'products' => array(
						array(
							'product_name' => 'Knatte/Junior Medel'
						),
						array(
							'product_name' => 'Knatte/Junior Advanced'
						),
						array(
							'product_name' => 'Senior Medel'
						),
						array(
							'product_name' => 'Senior Advanced'
						)
					),
					'fetch' => 'SnowboardLength',
				)
			)
		
		),
		array(
			'category_name' => 'Snowboard boots',
			'style' => 'snowboardboots',
			'attributes' =>	array(
				array(
					'attribute_name' => 'SnowboardBootSize',
					'attribute_public_name' => 'Boot size',
					'article_type' => 'SnowboardBoot',
					'profile_attribute' => 'Shoe size',
					'get' => 'shoesize',
					'attribute_calc' => 'Shoe size',
					'allow_less' => 0,
					'allow_more' => 0,
					'unit' => '',					
					'products' => array(
						array(
							'product_name' => 'Knatte/Junior'
						),
						array(
							'product_name' => 'Senior'
						)
					),
					'fetch' => 'SnowboardBootSize',
				)
			)
		),
		array(
			'category_name' => 'Skates',
			'style' => 'skates',
			'attributes' =>	array(
				array(
					'attribute_name' => 'SkateSize',
					'attribute_public_name' => 'Skate size',
					'article_type' => 'skates',
					'profile_attribute' => 'Shoe size',
					'get' => 'shoesize',
					'attribute_calc' => 'Shoe size',
					'allow_less' => 0,
					'allow_more' => 0,
					'unit' => '',					
					'products' => array(
						array(
							'product_name' => 'Knatte/Junior'
						),
						array(
							'product_name' => 'Senior'
						),
						array(
							'product_name' => 'Cross Country Senior'
						)
					),
					'fetch' => 'SkateSize',
				)
			)
		)
	
	);

	// Backwards compability for array_key_first
	if (!function_exists('array_key_first')) {
	    function array_key_first($arr) {
	        foreach($arr as $key => $unused) {
	            return $key;
	        }
	        return NULL;
	    }
	}

	// return calculated recommended attribute 
	function CalcAttribute($attribute){
		switch($attribute) {
			case 'AlpineSkiLengthJunior' :
				if( $_GET['length'] ){
					return $_GET['length'] - 20;
					break;
				}
			case 'AlpineSkiLengthSenior' : 
				if( $_GET['length'] ){
					return $_GET['length'] - 14;
					break;
				}
			case 'AlpineSkiLengthFreeride' :	
				if( $_GET['length'] ){
					return $_GET['length'] - 7;
					break;
				}
			case 'AlpineBootSize' :	
				if( $_GET['shoesize'] ){
					return $_GET['shoesize'] * 0.66 ;
					break;
				}			
			case 'SnowboardLength' :	
				if( $_GET['length'] ){
					return $_GET['length'] - 20;
					break;
				}			
			case 'SnowboardBootSize' :	
				if( $_GET['shoesize'] ){
					return $_GET['shoesize'];
					break;
				}			
			case 'CrossCountrySkiLengthJunior' :	
				if( $_GET['length']){
					return $_GET['length'] + 10;
					break;
				}			
			case 'CrossCountrySkiLengthSenior' :	
				if( $_GET['length']){
					return $_GET['length'] + 20;
					break;
				}
			case 'CrossCountryBootSize' :	
				if( $_GET['shoesize']){
					return $_GET['shoesize'] + 1;
					break;
				}
			case 'SkateSize' :	
				if( $_GET['shoesize']){
					return $_GET['shoesize'];
					break;
				}				

		} 
	}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>	
  	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cairo&display=swap">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="style.css" >
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
	<form>

	<div class="row main"> 
		<?php 
	if($options['debug'] == true) { ?>
	 	<div class="col-md-12">
			<div class="content debug">
				<h2>Debug</h2>
				<div class="row">
					<div class="col-md-6">
						<h3>$_GET</h3>
						<pre>
<?php var_export($_GET);?>
						</pre>
					</div>
					<div class="col-md-6">
						<h3>Result</h3>
						<pre>
							
<?php var_export($product_categories) ?>;
						</pre>
					</div>
						</div>
			</div>
		</div>
	<?php } ?>
		<div class="col-lg-6">
			<div class="content meta">
				<h1>Proof of concept: Recommended article attribute</h1>
				<p>This tool aims to demonstrate the suggested method for calculating the recommended article attribut based on profile attributes given by the customer. The tool returns the recommended value for the for each article attribute type, regardless if that axact size exists or not, and the stock calculation would return the models which are close to this recommended value</p>
				<p>With a product or package product the user would select an article variant for the article(s) added to that product.</p>
								<div class="row">
					<div class="col-md-9"><input name="debug" id="debug" type="checkbox" <?= ($_GET['debug']) ? 'checked' : null ; ?>/><label for="debug">Show debugging info</label></div>
				</div>
			</div>
		</div>

		<div class="col-md-6">		
			<div class="content">
				<h2>Profile attributes</h2>
				<p>The attributes for customer.</p>
				<div class="row">
					<hr />
					<div class="col-lg-9">
						<label for="length">Length of person</label>
						<p>Length of the customer in cm</p>
					</div>
					<div class="col-lg-3">
						<input type='number' name='length' value='<?= $_GET['length'] ?>'>
					</div>
					<hr />
					<div class="col-lg-9">
						<label for="shoesize">Shoe size</label>
						<p>European standard (Paris point) shoe size for customer.</p>
					</div>
					<div class="col-lg-3">
						<input type='number' name='shoesize' value='<?= $_GET['shoesize'] ?>'>
					</div>
				</div>
			</div>
		</div>
	

		<div class="col-sm-12">
			<div class="content slim">
				<button type="submit">Submit</button>
			</div>	
		</div>	

	</form>

<?php
	if($_GET){	
		foreach($product_categories as $category){
			echo '<div class="col-md-12"><div class="content ' . $category['style'] . '">';
				echo '<span class="header">Article type</span><br />';
				echo '<h2>' . $category['category_name'] . '</h2>';
				foreach($category['attributes'] as $attribute){
					echo '<hr />';
					echo '<div class="row">';
						echo '<div class="col-md-2">';
						echo '<span class="header">Product(s) - Subset of article models</span><br />';
							foreach($attribute['products'] as $product){
								echo '<span class="label">' . $product['product_name'] . '</span><br />';
							}
						echo '</div>';
						echo '<div class="col-md-3">';
							echo '<div class="row">';
								echo '<div class="col-md-12">';	
									echo '<span class="">' . 'Profile attribute: '. '</span><br />';
								echo '</div>';
								echo '<div class="col-sm-7">';
									echo '<span class="label">' . $attribute['profile_attribute']. '</span>';
								echo '</div>';
								echo '<div class="col-sm-5">';	
									echo '<span class="value">' .$_GET[$attribute['get']] . '</span>';	
								echo '</div>';
							echo '</div>';
							
						echo '</div>';
						echo '<div class="col-md-1">' . '<span class="arrow">></span>' . '</div>';
						echo '<div class="col-md-6">';
						
							

							echo '<div class="row">';
								echo '<div class="col-md-12">';	
									echo '<span class="">' . 'Article attribute: '. $attribute['attribute_name'] .  '</span><br />';
								echo '</div>';
								echo '<div class="col-sm-9">';
									echo '<span class="label">' . 'Optimal ' . $attribute['attribute_public_name'] . '</span>';
								echo '</div>';
								echo '<div class="col-sm-3">';	
									echo '<span class="value">' . CalcAttribute($attribute['fetch']) . $attribute['unit'] . '</span>';	
								echo '</div>';
								echo '<div class="col-md-12">';
									echo '<span class="calc">' . $attribute['attribute_name'] . ' = ' . $attribute['attribute_calc'] . '</span>';
								echo '</div>';
								if ($attribute['allow_less'] > 0 || $attribute['allow_more'] > 0 ){
									echo '<div class="col-sm-9">';
										echo '<span class="label">' . 'Minimum ' . $attribute['attribute_public_name'] . '</span>';
									echo '</div>';
									echo '<div class="col-sm-3">';	
										echo '<span class="value">' . (CalcAttribute($attribute['fetch']) - $attribute['allow_less']) . $attribute['unit'] . '</span>';	
									echo '</div>';
									echo '<div class="col-md-12">';
										echo '<span class="calc">-' . $attribute['allow_less'] . $attribute['unit'] . "</span>";
									echo '</div>';
									echo '<div class="col-sm-9">';
										echo '<span class="label">' . 'Maximum ' . $attribute['attribute_public_name'] . '</span>';
									echo '</div>';
									echo '<div class="col-sm-3">';	
										echo '<span class="value">' . (CalcAttribute($attribute['fetch'])+$attribute['allow_more']) . $attribute['unit'] . '</span>';
									echo '</div>';
									echo '<div class="col-md-12">';
										echo '<span class="calc">+' . $attribute['allow_more'] . $attribute['unit'] . "</span>";
									echo '</div>';
								}
								echo '</div>';						
						echo '</div>';
						
					
					echo '</div>';
									
				}
			echo '</div></div>';
		}
	}
?>	

</body>
</html>
