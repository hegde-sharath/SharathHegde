	<!DOCTYPE html>
	<html>
<style>

body {

	/*background-image:  url("https://designroast.org/wp-content/uploads/2015/08/ways-to-make-website-more-professional.jpg");
	background-repeat: no-repeat;
	background-size: cover;*/
	background-image: linear-gradient(-90deg, #8668ee, #c92ef8);
}
h2{
    color:/*#ef9986*/#ff6947;
    font-size:25;
    margin-left:10%;
}


.adminform{
     border: 3px solid white;
    margin: auto; 
    width:500px;
    background-color: white;
}
b{
    color:/*#f9d3ca*/#ff6947;font-size: 20;
}
.container input[type=text], .container input[type=password] {
    width: 100%;
    padding: 12px 6px;
    margin: 8px 0;
    border: 1px solid #ccc;
    box-sizing:border-box;
    border-radius: 5px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
}

button:hover {
    opacity: 0.8;
}



h2 {
    text-align: center;
    margin: 12px 0 12px 0;
    
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 20px;
    width: 500px;
}

</style>
<body>
 <div>
 <form class=adminform action="modules/operation.php" method="post" >
	<div class="container">
	<h2>Admin's Section </h2>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="adminname" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="adminpassword" required>
    <button type="submit">Login</button>
 	</div>
</form>
</body>
</html>