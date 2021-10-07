<?php   include("./formValidation.php") ; ?>

<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend><b>NAME</b></legend>

					<input type="text" name="name" value=""> 
                    <?php 
                        if(isset($error['name'])){
                            echo $error['name'];
                        } 
                    ?>
                    
                    <br><br>
                    <hr>
			
					<input type="submit" name="submit1" value="Submit">
				
		</fieldset>
	</form>

    <form method="post" action="">
		<fieldset>
			<legend><b>EMAIL</b></legend>

					<input type="email" name="email" value=""> 
                    <?php 
                        if(isset($error['email'])){
                            echo $error['email'];
                        } 
                    ?>
                    
                    <br><br>
                    <hr>
			
					<input type="submit" name="submit2" value="Submit">
				
		</fieldset>
    </form>

    <form method="post" action="">
		<fieldset>
			<legend><b>DATE OF BIRTH</b></legend>

					<input type="date" name="dob" value="">
                    <?php 
                        if(isset($error['dob'])){
                            echo $error['dob'];
                        } 
                    ?>
                    <br><br>
                    <hr>
			
					<input type="submit" name="submit3" value="Submit">
				
		</fieldset>
	</form>

    <form method="post" action="">
        <fieldset>
			<legend><b>GENDER</b></legend>

					<input type="radio" name="gender" value="male" /> Male 
				    <input type="radio" name="gender" value="female" /> Female 
				    <input type="radio" name="gender" value="no gender" /> Others
                    
                    <?php 
                        if(isset($error['gender'])){
                            echo $error['gender'];
                        } 
                    ?>

                    <br><br>
                    <hr>

                    <input type="submit" name="submit4" value="Submit">

        </fieldset>
	</form>

    <form method = "post" action = "">
        <fieldset>
			<legend><b>DEGREE</b></legend>

					<input type="checkbox" name="degree" value="ssc" /> SSC 
				    <input type="checkbox" name="degree" value="hsc" /> HSC 
				    <input type="checkbox" name="degree" value="bsc" /> BSc
                    <input type="checkbox" name="degree" value="msc" /> MSc 
                    <?php 
                        if(isset($error['degree'])){
                            echo $error['degree'];
                        } 
                    ?>
                    <br><br>
                    <hr>

                    <input type="submit" name="submit5" value="Submit">

        </fieldset>
    </form>


    <form  method = "post" action = "">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>

            <select name="type" id="type">
                <option value="">Choose One</option>
                <option value="a+">A positive</option>
                <option value="ab+">AB positive</option>
                <option value="a-"> A negative</option>
                <option value="ab">AB negative</option>
                <option value="b">B positive</option>
                <option value="b-">B negative</option>
            </select>

            <?php 
                        if(isset($error['type'])){
                            echo $error['type'];
                        } 
                    ?>
            <br><br>
            <hr>

            <input type="submit" name="submit6" value="Submit">

        </fieldset>
    </form>
			        
				
	
</body>
</html>