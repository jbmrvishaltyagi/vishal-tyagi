<html>
<head>
 <style type="text/css">
       
       body{
       
       	background-image:url(images.jpg);
        background-image:no-repeat;

       
       }
        h1{font-weight:bold;}
       h1{margin:1 px; }
       h1{color:blue;}
       h1{font-size:50px}
       h1{font-style:italic;}
       h1{line-height:130%;}

       p {color:magenta;}
       p {line-height:120%;}
	p{font-size:30px}
       </style>
<title> babynames project</title>

</head>
<body bgcolor="blue">


<h1><center>welcome</center></h1>  



<marquee bgcolor="yellow"behavior="scroll"><font color="red"><h2>use this website for find top-n birth in a given year</h2  ></marquee>



<form method='post' action='p2.php'>
<p>

YEAR:<input type='text' placeholder="YEAR 1944 TO 2013" name='year'>
<font color="green"><?php echo @$_GET ['YEAR']; ?></font>





NUMBER OF PEOPLES(top-n):<input type='text' name='people_quantity'  placeholder="FROM 10 TO 1000">
<font color="green"><?php echo @$_GET ['NUMBER'];?></font>


GENDER:
<select input type='gender'name='gender'>
<option value ='null'>Select Gender</option>
<option value ='Male'>Male</option>
<option value ='Female'>Female</option>
<option value ='Both'>Both</option>
</select><br/></br>
<font color="green"><?php echo @$_GET ['GENDER']; ?></font>





<input type='submit' name='submit' value='submit'>
 


</form>


 
 
 </body>
 </html>
 
 
 


 

 
 
 