<?php
	session_start();
	//include dal file
	include '../library/lib-DAL.php';
	$manageData = new ManageContent_DAL();
		
	//takes the image size
	$img = getimagesize('../../temp/'.$GLOBALS['_POST']['imagename']);
	//print_r($img);
	//gets the image extension
	$ext = pathinfo('../../temp/'.$GLOBALS['_POST']['imagename'], PATHINFO_EXTENSION);

	$responsiveWidth = $GLOBALS['_POST']['width'];
	$responsiveHeight = $GLOBALS['_POST']['height'];
	$img_order = $GLOBALS['_POST']['imgOrder'];
	$pid = $GLOBALS['_POST']['pid'];
	
	$actualWidth = $img[0];
	$actualHeight = $img[1];
	
	$xCoordinate = ($actualWidth/$responsiveWidth)*$GLOBALS['_POST']['xcordinate'];
	$yCoordinate = ($actualHeight/$responsiveHeight)*$GLOBALS['_POST']['ycordinate'];
	
	
	$targ_w = ($actualWidth/$responsiveWidth)*300;
	$targ_h = ($actualHeight/$responsiveHeight)*300;
	
	
	$jpeg_quality = 90;
	$png_quality = 9;
	
	$src = '../../temp/'.$GLOBALS['_POST']['imagename'];
	
	
	if($ext == 'png') {
		$img_r = imagecreatefrompng($src);
		$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
		imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
		//save image in admin panel
		//imagepng($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $png_quality);
		//save image in ui product folder
		imagepng($dst_r,'../../../images/product/'.$GLOBALS['_POST']['imagename'], $png_quality);
		
		//save the product image into the database
		saveProductImage($manageData,$pid,$GLOBALS['_POST']['imagename'],$img_order);
	}
	else if($ext == 'jpeg' ) {
		$img_r = imagecreatefromjpeg($src);
		$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
		imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
		//save image in admin panel
		//imagejpeg($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
		//save image in ui product folder
		imagejpeg($dst_r,'../../../images/product/'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
		
		//save the product image into the database
		saveProductImage($manageData,$pid,$GLOBALS['_POST']['imagename'],$img_order);
	}
	else if($ext == 'jpg') {
		$img_r = imagecreatefromjpeg($src);
		$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
		imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$targ_w,$targ_h);
		//save image in admin panel
		//imagejpeg($dst_r,'../../img/product'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
		//save image in ui product folder
		imagejpeg($dst_r,'../../../images/product/'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
		
		//save the product image into the database
		saveProductImage($manageData,$pid,$GLOBALS['_POST']['imagename'],$img_order);
	}/*
	else if($ext == 'bmp') {
			$img_r = imagecreatefromwbmp($src);
			$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
			imagecopyresampled($dst_r,$img_r,0,0,$xCoordinate,$yCoordinate,$targ_w,$targ_h,$actualWidth,$actualHeight);
			imagewbmp($dst_r,'../../userimage/'.$GLOBALS['_POST']['imagename'], $jpeg_quality);
			
		}*/
	
	
	
		
	echo 'img/'.$GLOBALS['_POST']['imagename'];
	
	
	
	//function for adding cropped product image
	function saveProductImage($manageData,$product_id,$img,$img_order)
	{
		//checking that product with order id is present or not
		$pro = $manageData->getValueMultipleCondtn('product_image','*',array('product_id','img_order'),array($product_id,$img_order));
		if(empty($pro[0]))
		{
			//insert the value
			$insert = $manageData->insertValue('product_image',array('product_id','image','img_order'),array($product_id,$img,$img_order));
			
		}
		else
		{
			//update the value
			$update = $manageData->updateValueMultipleCondition('product_image','image',$img,array('product_id','img_order'),array($product_id,$img_order));
			
		}
	}

?>