<html>  
<head>  
    <title>login system</title>  
    // insert style.css file inside login.html  
    <link rel = "stylesheet" type = "css" href = "./css/style.css">   
</head>  
<body>  
    <div id = "frm" >  
        <h1>Login</h1>  
        <form name="f1" action = "./data/authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input name = "btnLogin" type = "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
    // validation for empty field
    <script href = "./js/script.js"></script>
    <!-- <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>   -->
</body>     
</html>  