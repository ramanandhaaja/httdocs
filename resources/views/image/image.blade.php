
<?php
/* FETCH IMAGE & WRITE TEXT */
$img = imagecreatefromjpeg('./assets/invoice_format.jpg');
$color = imagecolorallocate($img, 0,0,0);

$font = "./assets/GOTHAM-MEDIUM.TTF";

$invoice_number = "11/INV/9/2024";
$invoice_date = "11/9/2024";

$name = $customer->first_name;
$address = "Jalan Kemang Timur Raya no 62";

$new_name="A.jpeg";

$product_name = " Minyak Kita 1L";
$product_qty = " 1";
$product_price = " 180.000";
$product_total = " 180.000";

$sub_total = "136.000.000";
$tax = "0";
$grand_total = "136.000.000";

//Invoice NUMBER
imagettftext($img, 20, 0, 1020, 380, $color, $font, $invoice_number);
imagettftext($img, 20, 0, 1020, 422, $color, $font, $invoice_date);

//Customer Detail
imagettftext($img, 20, 0, 142, 422, $color, $font, $name);
imagettftext($img, 20, 0, 142, 455, $color, $font, $address);

//Content
imagettftext($img, 24, 0, 132, 1000, $color, $font, $product_name);
imagettftext($img, 24, 0, 740, 1000, $color, $font, $product_qty);
imagettftext($img, 24, 0, 850, 1000, $color, $font, $product_price);
imagettftext($img, 24, 0, 1080, 1000, $color, $font, $product_total);

imagettftext($img, 24, 0, 132, 1050, $color, $font, $product_name);
imagettftext($img, 24, 0, 740, 1050, $color, $font, $product_qty);
imagettftext($img, 24, 0, 850, 1050, $color, $font, $product_price);
imagettftext($img, 24, 0, 1080, 1050, $color, $font, $product_total);

//Total
imagettftext($img, 24, 0, 1080, 1429, $color, $font, $sub_total);
imagettftext($img, 24, 0, 1080, 1490, $color, $font, $tax);
imagettftext($img, 24, 0, 1080, 1545, $color, $font, $grand_total);


/* OUTPUT IMAGE */
header('Content-type: image/jpeg');

/* create directory */
$directory = "assets/uploads/certificates/user/";

/* image save */
imagejpeg($img, $directory.$new_name);
$jsonImagePath = $directory.$new_name;

/*
<a href="{{ asset($imagePath) }}" style="color: #2c2c2c;"
    class="ms-1 me-1">{{ $customer->first_name }}</i></a>
*/
?>
{"imagePath":"{{ asset($jsonImagePath) }}"}

