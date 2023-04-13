
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$Height=$_GET['height'];
	$Weight=$_GET['weight'];
	if($Height == '' || $Weight == ''){
		$Error = "The input values are required.";
	}
	elseif (filter_var($Height, FILTER_VALIDATE_FLOAT) === false || filter_var($Weight, FILTER_VALIDATE_FLOAT) === false) {
		$Error = "The input value must be a number only.";
	}
	else{
		/*Calculation begins from here.*/
		/*Convert cm to inch -> foot to inch -> meter to inch */
		$Height = ($Height=='centimeter')?$Height*0.393701:$Height;
		/*Convert kg to pound*/
		$Weight = ($Weight=='kilogram')?$Weight*2.2:$Weight;
		$BMIIndex = round($Weight/($Height*$Height)* 10,000);

		/*Set Message*/
		if ($BMIIndex < 18.5) {
			$Message="Underweight";
		} else if ($BMIIndex <= 24.9) {
			$Message="Normal";
		} else if ($BMIIndex <= 29.9) {
			$Message="Overweight";
		} else {
			$Message="Obese";
		}
	}
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP BMI Calculator Program Demo</title>
	<link rel="shortcut icon" href=https://www.w3schools.in/asset/img/favicon-32x32.png type=image/png>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../asset/app.css">
</head>
<body>
	<!-- Top bar -->
	<div class="container-fluid shadow-sm border-bottom mb-4">
		<div class="row aligh-items-center">
			<div class="col">
				<nav class="navbar navbar-light">
					<a class="btn btn-sm btn-light me-2" href="php-bmi-calculator-demo.zip" title="Download Demo Files"><svg class="svg-icon" viewBox="0 0 24 24">
						<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
						<polyline points="7 10 12 15 17 10"></polyline>
						<line x1="12" y1="15" x2="12" y2="3"></line>
					</svg></a>
					<?php if(!isset($_GET['iframe'])){?>
						<a class="btn btn-primary" href="https://www.w3schools.in/php/tutorials/" title="W3schools PHP Tutorial" target="_blank">Learn PHP</a>
					<?php } ?>
				</nav>
			</div>
		</div>
	</div>
	<!-- Main -->
	<!-- Editor -->
	<div class="container" style="max-width:800px">
		<div class="text-center mb-5">
			<h1 class="fw-bolder mb-0">PHP BMI Calculator</h1>
		</div>
		<form method="GET" action="">
			<div class="row justify-content-center" >
				<div class="col">
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 justify-content-center">
						<div class="col text-center mb-3 mb-md-5">
							<label for="height" class="fs-3">Height</label>
							<div class="input-group">
								<input id="height" class="form-control form-control-custom w-50" name="height" type="number" step="any" value="<?php if(!empty($Height)){echo $Height;}?>">
								<select class="form-select w-50" name="height">
									<option value="centimeter" <?php if(isset($Height) && $Height=='centimeter'){echo "selected";}?>>Centimeter</option>
									
								</select>
							</div>
						</div>
						<div class="col text-center mb-3 mb-md-4">
							<label for="weight" class="fs-3">Weight</label>
							<div class="input-group">
								<input id="weight" class="form-control form-control-custom w-50" name="weight" type="number" step="any" value="<?php if(!empty($Weight)){echo $Weight;}?>">
								<select class="form-select w-50" name="weight">
									<option value="kilogram" <?php if(isset($Weight) && $Weight=='kilogram'){echo "selected";}?>>Kilogram</option>
								</select>
							</div>
						</div>
						<div class="col text-center mb-3 mb-md-4"><input type="submit" name="submit" value="Calculate" class="btn btn-success"></div>
					</div>
				</div>
			</div>
		</form>
		<?php if(isset($BMIIndex) && is_numeric($BMIIndex)){?><!-- Result -->
		<div class="row justify-content-center">
			<div class="col text-center">
				<label for="Result" class="fs-4">Result</label>
				<input id="Result" name="Result" class="form-control form-control-custom" value="<?php echo $BMIIndex.' '.$Message; ?>">
			</div>
		</div>
		<?php } if(isset($Error)){?><!-- Error Messages -->
		<div class="row justify-content-center">
			<div class="col">
				<div class="alert alert-danger shadow-sm" role="alert">Error: <?php echo $Error; ?></div>
			</div>
		</div>
	<?php } ?>
</div>
</body>
</html>