<?php
    $title = 'form';
 
    require_once 'connect.php';

?>
    <style>
        body{
            background-color: rgb(236, 141, 15);
        }
        .header{
            background-color:rgb(226, 47, 24); padding:5px;
        }
        h1{
            text-align: center;
            color: black;
        }
    </style>

    <body>
        <div class = "header">
            <h1><u><i>CHANDIGARH UNIVERSITY</i></u></h1>
            <h2 align= 'center'><i>The best private University in Punjab</i></h2>
        </div>
        <br>
        <form method="POST" action="success.php">
 	        <div>
 	            <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname">
                <br>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname">
 	        </div>
             <div>
                <label for="dob">DOB:</label> 
                <input type="date" id="dob" name="dob">
            </div>
 	        <div>
         	    <label for="email">Email:</label>
 	            <input type="text" id="email" name="email">    
 	        </div>
 	        <div> 	            
 	            <label for="phone">Contact No.</label>
 	            <input type="text" id="phone" name="phone"> 	            
 	        </div>
 	        <div>
 	            <input type="submit" value="Submit" name="submit">
     	        <input type="reset"> 	            
 	        </div>
        </form>
    </body>