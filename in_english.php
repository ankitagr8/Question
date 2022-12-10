What is PHP:-
PHP stands for Hypertext Preprocessor.
PHP is a server side scripting language.
PHP is an open source scripting language.PHP is an object orianted programing language.
PHP old name is personal Home page
--------------------------------------------------
What is difference between PHP and HTML:-
PHP is server side scripting language and HTML is a murkup language.
-------------------------------------------
What is a Variable:-
A variable is simply a container that is used to store both numeric and non-numeric information.
Variable has some rule
1.Variable start with a doller($) sign
2.Variable name can not contain space.
3.Variable name does not start with number.
-----------------------------------------------
Super Global Variable:-
it is globaly access.These are super global variable in php:
$_GET
$_POST
$_REQUEST
$_FILES
$_SESSION
$_COOKIE

---------------------------------------------
Difference between echo and print
echo can pass multiple string separated as (,)
Example:
$name="Ankita";
$age=25;
echo $name,$age;

Print can not pass multiple string
------------------------------------------------

Control statement or Conditional statement
1. If-Statement
	syntex:
	$num=20;
	if($num<=30)
	{
	echo "Greater then 30";
	}

2.If-else
	syntex:
	$num=20;
	if($num%2==0)
	{
	  echo "Even";
	}
	else
	{
	  echo "Odd";
	}
3. If-elseif-else
	syntex
	$num1=12;
	$num2=10;
	$num3=30;
	if($num1 > $num2 && $num1 > $num3)
	{
	  echo "First Number is Greater";
	}
	else if($num2 > $num1 && $num2 > $num3)
	{
	  echo "Second number is greater";
	}
	else
	{
	  echo "Third Number is greater";
	}

-----------------------------------------------
Break statement:-
break keyword is used to terminate the excecution of loop permanently.
for($i=1;$i<=10;$i++)
{
	if($i==3)
	{
	  break;
	}

	echo $i;
} 


Continue Statement:-
Continue keyword is used to halt the current iteration of loop but it does not terminate the loop.
for($i=1;$i<=10;$i++)
{
	if($i==3)
	{
	  continue;
	}

	echo $i;
} 
----------------------------------------

String:-
String is a sequence of character.
some sting function:
1.strlen(): get string length
2.strrev(): reverse of given string
3.substr(): retrive a section of string
4.str_word_count(): calculate the number of words in string
5.strtolower: Converts in lowercase
5.strtoupper: Converts in uppercase

------------------------------------------
Array:-
it's store multiple value in single variable.
Three types of Array:
1. Indexed Array
It's define with only value 
   syntex:
   $ary=["ram","raj","jon"];

2. Associative array
It's define with key and value
$ary=["a"=>"Ram","b"=>"Raj"];

3.Multidimensional Array.
In this we define array inside array.
---------------------------------------------

Array sorting function:-
sort():- work on index array, sort by ascending order

rsort():- work on index array, sort by descending order

arsort():- work on Associative array, sort by descinding order

ksort():- work on Associative array, key sort by ascending order

krsort():- work on Associative array, value sort by descinding order

-------------------------------------------
array_merge():-
The array_merge() function merges one or more arrays into one array.
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
		
array_combine():-
In array_combine, first array as key and second array as a value. But both array must be same length.
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);
		
		
		
-------------------------------------------
Get method:-
GET method is used to send data from form but it is not secure for security perpose becouse all data display in the URL
    and you can send limited data(2000 character) by GET. 


POST method:-
POST method is used to send data from form. it is secure for security perpose becouse data not display in the URL and
    you can send unlimited data by POST.
--------------------------------------------

$_REQUEST:-
you can recived data from both method GET and POST  

-----------------------------------------------

Include:-
Include is used to add any PHP file in php script.
syntex:
include('filename.php');
Its produce warning error and remining script can be run.



Require:-
Require is used to add any PHP file in php script.
syntex:
Require('filename.php');
Its produce fatel error and remining script can not run. 

----------------------------------------

What is session:-
Session is a supper Global variable in php. it's store on server.A session is a way to store information to be used across multiple pages.
session_start();
$_SESSION['session_name']='value';

----------------------------------------------

What is cookies:-
Cookie is a supper global variable in php. It is store on client browser as a small text file.

setcookie(name,value,time);

-----------------------------------------
Class:-
Class is a blueprint of object.
Syntex:-
class Demo
{
	public $name="Ankita";
	public function sum()
	{
		echo 12+2;
	}
}
$obj=new Deno();

---------------------------------------------
Object:-
Any thing is the world is an a object.Look around and you can find lots of object like laptop,car,bus etc.

--------------------------------------------------
Final Method:-
Final method can not be override in child class.

Final Class:- Final class can not be inherite by the child class.
------------------------------------------------------

Constructor:-
Constructor is a special type of function which will be called automatically when you create a object of class.

Syntex:-
function __construct()
{
	
}

------------------------------------------------

Public:- public method or variable can be accessible from anywhere. I mean from inside class, outside class and in child class also.

Protected:- protected method or variable can be accessible from inside class and in child class also.

Private:- private method or variable can be accessible from only inside class


-------------------------------------------------------
$This:-
The $this is a keyword which represents the current object or current instance of class.
class Demo
{
	public $first=10;
	public $second=12;
	function add()
	{
		$sum=$this->first+$this->second;
		echo $sum;
	}
}
$obj=new Demo;
$obj->add();


------------------------------------
Inheritance:-
Inheritance is a concept where one class shares the structure and behavior defined in another class. 
    If Inheritance applied to one class is called Single Inheritance, and if it depends on multiple classes, then it is called multiple Inheritance.
