What is PHP
PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
PHP stands for "PHP: Hypertext Preprocessor"
PHO is open source scripting language
PHP scripts are executed on the server
PHP is free to download and use

What is Variable : 
Variables is simpally container that is used to store information.
Rule-
A variable starts with the $ sign,
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
Variable names are case-sensitive ($age and $AGE are two different variables)



Echo and Print:-
echo and print both perform same task. They are both used to display data.
echo can pass multiple string with separate as (,) 
Ex:
echo "Ankita","kumari",25;
echo does not return any value
echo is faster then print


print:
print can not pass multiple arguments
print always return 1.


Data Types:-
String  :- "hello"
Integer : 28
Float   :10.25
Boolean :trye or false
Array   : [10,12,"ram"]


What is string :-
A string is a sequence of characters, like "Hello world!".

some string function:-
1 strlen
echo strlen("Hello world!"); // outputs 12

2 str_word_count
echo str_word_count("Hello world!"); // outputs 2

3 strrev
echo strrev("Hello world!"); // outputs !dlrow olleH

4 strpos
echo strpos("Hello world!", "world"); // outputs 6

5 str_replace
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

6 lcfirst
echo lcfirst("Hello world!");  //hello world!

7 str_split
$str="Hello";
$ary=str_split($str);
echo "<pre>";
print_r($ary);
//Result : 
Array
(
    [0] => H
    [1] => e
    [2] => l
    [3] => l
    [4] => o
)


8 substr
echo substr("Hello world",6); // world

9 substr_count()
echo substr_count("Hello world. The world is nice","world");  //2

10 trim
$str = "Hello World!";
echo trim($str,"Hed!");  //llo Worl




PHP Conditional Statements
1 if

$age=18;
if (age > 18) {
  echo "You can vote";
}
----------------
2 if...else

if (age > 18) 
{
  echo "You can vote";
}
else
{
	echo "You can not vote";
}

--------------
3 if...elseif...else
$num1=10;
$num2=12;
$num3=6;
if($num1 > $num2 && $num1 > $num)
{
	echo "First number is greater";
}
else if($num2 > $num3 && $num2 > $num1)
{
	echo "Second number is greater";
}
else if($num3 > $num2 && $num3 > $num1)
{
	echo "Third number is greater";
}
else
{
	echo " All number is equal";
}

-------------------

4 Switch
$favcolor = "red";
switch ($favcolor) 
{
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

------------------


Loop :-Loops are used to execute the same block of code again and again, as long as a certain condition is true.
In PHP, we have the following loop types:
1 while 
$x = 1;

while($x <= 5) 
{
  echo "The number is: $x <br>";
  $x++;
}
---------------------
2 do...while
$x = 1;
do 
{
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
--------------------

3 for 
for ($x = 0; $x <= 10; $x++) 
{
  echo "The number is: $x <br>";
}
-------------------

4 foreach :- it work on only array value
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) 
{
  echo "$value <br>";
}



Cookie:-
Cookies are text files stored on the client computer and they are kept of use tracking purpose
setcookie(name, value, expire);
setcookie('cookie_name', 'cookie_value', time() + (86400 * 30), "/"); // 86400 = 1 day

get cookie
$_COOKIE['cookie_name'];


Session :-
Session is a supper global variable that strore on server.A session is a way to store information (in variables) to be used across multiple pages.
how to store value in session:
$_SESSION['sesson_name']=value;

How to get session value
echo $_SESSION['session_name'];


Include and require:-
PHP include and require is used to include a file on the basis of given path.
example:-
include ('filename'); 
require ('filename'); 

include only generates a warning and continue the execution of the script.
require generates a fatal error and stop the execution of the script.






What is OOP?
OOP stands for Object-Oriented Programming.
