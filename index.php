What is "echo" in PHP?

What is "print" in PHP?

 What is the difference between "echo" and "print" in PHP?
 Echo can output one or more string but print can only output one string
 Echo is faster than print


 How a variable is declared in PHP?
 $variableName=value; 

What is the difference between $message and $$message?
$message stores variable data while $$message is used to store variable of variables.
<?php  
$x = "abc";  
$$x = 200;   //$abc
// echo $x."<br/>";  
// echo $$x."<br/>";  
echo $abc;  
?> 


What are the different loops in PHP?
1 while
2 do-while
3 for
4 foreach


What is the use of count() function in PHP?
array ke value ko count karne ke liye use karete hai


What does isset() function?
The isset() function checks if the variable is defined and not null.
ye check karta hai ki kisi variable me koi value set hai ki nahi
<?php  
$a=10;
if(isset($a))
{
	echo "Value exist";
}
else
{
	echo "not";
}
?> 


What is the array in PHP?
An array is used to store multiple values in a single variable

How many types of array are there in PHP?
There are three types of array in PHP:

Indexed array: an array with a numeric key.
$season=array("summer","winter","spring","autumn");

Associative array: isme key or value dono define karna parta hai.
$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");  


Multidimensional array: isme array ke under array define karte hai.




How to get the length of string?
strlen()
<?php  
$str="Hello";
echo strlen($str);
?> 


Explain some of the PHP string functions?
There are many array functions in PHP:
strtolower()
strtoupper()
ucfirst()
lcfirst()
ucwords()
strrev()
strlen()


What are the methods to submit form in PHP?
There are two methods GET and POST.


How can you submit a form without a submit button?
You can use JavaScript submit() function


What are the ways to include file in PHP?
include
require


Differentiate between require and include?

What is Cookies? How to create cookies in PHP?

Explain setcookie() function in PHP?
setcookie() function is used to set cookie


What is a session?

What is the difference between session and cookie?

What are the different types of errors in PHP?

what is implode and explode
implode: array ko string me convert karta hai 
explode: string ko array me convert karat hai


Explain PHP split() function
split ka use string ko array me convert karne ke liye karte hai 


