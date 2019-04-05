<!DOCTYPE html lang="en" >
<html>
<head>
	<meta charset="utf-8">
	<title>Home : Algorithms</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" href="styles/default.css">
	<script src="js/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
</head>

<body>
<header>
	<?php include('header.php');?>
</header>
<nav>
	<?php include('navbar_algo.php');?>
</nav>
<!-- <hr> -->
<div id="main_body" class='col-sm-12 col-md-12 col-lg-12 col-xs-12'>
	<div id="left_article" class='col-lg-3 hidden-xs hidden-md hidden-sm' align="left"><?php include('left_bar_algo.php');?></div>
	<div id="mid_article"><article><h1>What is an Algorithm?</h1><p>An algorithm, is a process or a set of instructions which are to be followed in computing or problem-solving. It solves the problem for a valid input, considering all the cases, and gives an error if the input is invalid. By which I mean, an algorithm should take care of every possible scenario for corresponding problem. <br>For an example, if we are applying some algorithm to divide a number 'a' by 'b', we should throw an exception that division by zero is not possible when 'b' is zero. <br><br>Moreover, there may be different algorithms available for a certain problem, and you should always use the optimal one. To mention, sorting an array of elements, there are many algorithms, but each of them has some pros and some con. If you remember from our "numPY" tutorials, there was a function, <pre><code >numpy.sort(<i>array_name</i>,kind='heapsort')</code></pre><br>And this returns the sorted numpy array. The <b>kind</b> parameter here, refers to which algorithm is to be used. So, unknowingly, you have used the algorithm xD<br><br></p>
		<h4>'Why do we want to use optimal and not the same algorithm for all cases?'</h4>
		<p>So, let me say it one more time, <i>"For a programmer, if there are any precious things in this world, they are computer resources!"</i>, and it's true in every sense. An algorithm, is the way a programmer can utilise those resources cost-effectively. One of the very most important resource is CPU compputational time, or the actual time required for the program to execute. Obviously you want to write a program which takes the least time. But, <i>how?</i></p>
		<p>Consider a sample task where we are asked to check whether the number is prime or not. Without getting into much details, let's write the code first.<br>
			<pre><code>num=int(input("Give number")) 	  #some number we want to check
flag=0      		  	  #a flag to check a number is divisible or not
if num == 1:			  #if number is 1
	print("1 is composite")   #it is composite
else:		  		  #else
	for i in range(2,num-1):  #looping through 2 to num-1
		if(num%i==0):     #is number divisible i?
			flag=1	  #if yes, flag will say the number is not prime	
			break     #since we have got the number which divides num, breaking the loop
	if(flag==0):              #if flag is zero, we never got the number which divides num
		print("The number is prime")
	else:
		print("The number is not prime")</code></pre></p>
	<p>And, we are done for this. Great! But hold your horses (be stable?), right there. And I know, you will be like, "Shady, that code ran perfectly, and within a blink it said the number is prime or not." <br>But kids, this loop in the program is running from 2 to num-1, and let us say I have very old computer (hypothetical) which takes 1ms for execution of the one iteration of the above loop. If I entered the very big number, like "1299827" (it is prime :? ), it will cost 1299.826 seconds, which is around 21.67 minutes. And that's actually, a lot of time.</p>
	<p>Way to reduce that time is making range of a for loop to half of the 'num'. But that still gonna cost us around ten and half minutes. So, let us discuss the better way ...</p>
	<h4>Better way : Square root</h4>
	<p>This program which I am gonna show here, is based on the fact that if the number is not divisible by any number till it's square root, the number is prime. We have proved this mathematically and if you haven't checked out Maths section yet, you can just <a href="./mathsfrontpage.html">click here</a>.</p>
	<p>So our new code will be something like this:
		<pre><code>from math import sqrt
num=int(input("")) 		        #some number we want to check
flag=0      			        #a flag to check a number is divisible or not
for i in range(2,int(sqrt(num))):       #looping through 2 to square root of num
	if num%i==0 :   		#is number divisible i?
		flag=1			#if yes, flag will say the number is not prime
		break   		#since we have got the number which divides num, breaking the loop
if flag==0:         		        #if flag is zero, we never got the number which divides num
	print("The number is prime")
else:
	print("The number is not prime")</code></pre></p>
	<p>In the for loop above, we took the sqaure root of the number and will iterate the loop through 2 to that square root. To understand the need of this method, I will check the same example where we used really big prime number and had to wait ten minutes for the output. The square root of the number '1299827' is '1140.099' which is '1140' after converting to integer. Now, as the earlier hypothetical machine, it will take 1140 milliseconds or 1.140 seconds for the execution. That is really quick compared to  previous approach.</p>
	<p>
		<b><h4>Comparing both:</h4></b>
		<p>It will be better if reader can compare the both approaches side by side. Thus, I am adding this block where you can input a number and see the time taken by both the functions. It is advisable to input a really big prime number so that the difference can actually be seen. For example: 11737333 is prime.</p>
		<div class="container-fluid">
			<div class="row">
				<div class='form-group '>
					Number:<input type="number" class='form-control' id='number'>
				</div>
				<button type="button" class="btn" onclick="isPrime()">Calculate</button>
			</div>	
		</div>
		<br>
		<table class='table table-hover'>
			<th>Normal method</th>
			<th>Square root method</th>
			<tr>
				<td>Output: <span id='out_for_prime'></span></td>
				<td>Output: <span id='out_for_sqrt'></span></td>
			</tr>
			<tr>
				<td>Time: <span id='time_for_prime'></span></td>
				<td>Time: <span id='time_for_sqrt'></span></td>
			</tr>
		</table>
	</p>
	<p>The only thing which might concern the user at this point is the time consumed for finding the square root and it is the valid point. However, great python does a great job in this and it is actually efficient that our previous approach. Finding the root can also be represented as: <pre><code>root=num**0.5</code></pre>Though equivalent, sqrt() and ** can take differnet time depending on the python version and machine. One more thing I will like to clarify before we wrap this part and move to another creative idea, many high level languages use very best algorithm for finidng the square root and finding the root is not actually the number but the size required to represent the number in machine. So, it takes constant time to find square root of each integer. This will be more clear when we focus on asymptotic notations which some of you might be aware of but till the time we assume our hypothetical machine takes a constant time, say 10ms to find the square root. This is the most practical way you will be using to find whether the number is prime or not (I don't know when we use such things but yeah, what if you want to find your bank account number is prime or not?)<br>Lets look at one of the crazy approaches which might save us some time as well...</p>
	<b><h4>The crazy way :</h4></b>
	<p>Though we are calling it a crazy way, there is not much crazy about it. It is just a simple math. A square of a number is always composite. If the square root of a number is integer, the number is not prime. Also, a number is very likely to be divisible by 2 as the half of the numbers are even (probability? we covered it <a href="#">here</a>). If we check whether the number is even, we don't have to iterate till that number and waste our CPU cycles. Thus, we eliminate the case by checking the condition: <pre><code>num%2==0</code></pre>When done, we are left wiht odd numbers. Out of them, the numbers which end with five are divisible by 5. Similarly we go with the case where the number is divisible by 3. We check whether the number is divisible by 3 cause it will be divisible 9 obviously. Left with 7, we check it manually. If we don't get any case like that, we carry  our previous procedure, iterating till the square root.</p>
	<p>Code:</p>
	<pre><code>import math
global n
def find_prime(num):
    prime=true
    sq=math.sqrt(num)
    if sq.is_integer():
        prime=false
    else:
        divisors=[2,3,5,7]
        if not num in divisors:
          for i in divisors:
            if num%i == 0:
              prime=false
              break
        if num>10 and prime:
             for i in range(2,sq)s:
                 if n%i==0:
                        return false

   if prime:
        return true
   else:
        return false

n=int(input("Give number:"))
p=find_prime(n)
if p :
      print (n,' is prime')
else:
      print (n,' is not prime')
</code></pre>

<p>There is no such great revolutionary thing happening in this program, but that was not our objective as well. We wanted to flash some light over the stones which are generally left unturned while learning the programming. It is very important for readers to understand that the algorithm which you will learn in class or some tutorials like this, may or may not be optimised. You have to find a better way of doing the task, by which I mean consuming less resources of computer. Just don't blidly copy the psuedocode taught by professor. Think with your nerves, that is there any way to do this task quicker? Questions like, which data structure to use, which approach and strategy to implement can guide you to the correct program. Remember, the goal is not to write a program which can give correct answer, but is to write the one which can give correct answer in shortest possible time. </p>
<p>Wrapping up, I hope why is it necessary to use the suitable algorithm and save a computing time. Moving ahead we will look at some of the sorting algorithms and visualise how the sorting is being done and where the time is running out. If you have any doubts, drop a comment below, otherwise, as always, see y'all in the next tutorial.</p>
<a href="./selection_sort.html">Next</a>
	</article></div>
	

	<div id="right_article" class='col-lg-3 hidden-xs hidden-md hidden-sm'>
			<?php include('right_bar_algo.php');?>
</div>
<!-- <input type="text" name="search" placeholder="Search.." class="sbar"> -->
<!-- <button type="submit" class="sbutton"><i class="fa fa-search"></i></button> -->
</body>


<script>
	function isPrime(){
		var input_box = document.getElementById("number");
		var out_for_prime = document.getElementById("out_for_prime");
		var out_for_sqrt = document.getElementById("out_for_sqrt");
		var time_for_prime = document.getElementById("time_for_prime");
		var time_for_sqrt = document.getElementById("time_for_sqrtr");
		var number = input_box.value;
		var t=Date.now();
		sqrt_call(time_for_sqrt,out_for_sqrt,number,t);
		prime_call(time_for_prime,out_for_prime,number,t);
		// out_for_prime.innerHTML=number*2;
	}

	function sqrt_call(a,b,c,d){
		var i=2;
		var flag=1;
		
		for(i=2;i<Math.sqrt(c);i++){
			if(c%i==0){
				flag=0;
				break;
			}
		}
		if(flag==1)
			b.innerHTML="Is Prime";
		else
			b.innerHTML="Not Prime";
		var new_t=Date.now();
		time_for_sqrt.innerHTML=new_t-d;
	}

	function prime_call(a,b,c,d){
		var i=2;
		var flag=1;

		for(i=2;i<c-1;i++){
			if(c%i==0){
				flag=0;
				break;
			}
		}	
		if(flag==1)
			b.innerHTML="Is Prime";
		else
			b.innerHTML="Not Prime";
		var new_t=Date.now();
		time_for_prime.innerHTML=new_t-d;
	}

</script>
</html>	
