<!DOCTYPE html>
<html>
<body>
<pre>

<?php

//Part 1
function calculateTotal(price, quantity)
{
$total=$price * $quantity;
$applyTax=$total*=0.1;
return $applyTax;
}

function formatProductName($name)
{
//captitalize first letter of each word
//trim whitespace
//cut to 50 or less characters
}

function calculateDiscount($price, $discountPercent)
{
$percentCost=1-$discountPercent;
$newPrice=$percentCost * $price;
return $newPrice;
}
//Part 2
//create product array that contains name and price for each item
//display list of products
//remove dupes and sort by price in ascending order

//Apply 10% discount to all products in Electronics category

//script to identify all products in electronics category, reduce price by 10% and print updated product list

//script to merge supplier inventories to a single array, remove dupes and print combined inventory

//Part 3
//script to convert product descs to lower case and replace _ with spaces, remove unnecessary special characters

//script to accept product desc as input, calculates and prints # of characters in desc, counts and prints the total number of words in the desc and checks if "leather" appears in the desc and prints "Keyword found" if it exists, and "Keyword not found" otherwise
/* if ("leather" exists)
	echo "Keyword found";
   else echo "Keyword not found";

//script to accept customre review as input, extracts and prints first 20 characters of the review, followed by "...", searches for the word "ecxellent and prints its starting position if found.  

echo "Thank you for your feedback! <br> $review";
?>  


</pre>
</body>
</html>
