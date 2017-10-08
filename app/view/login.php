<html>
    <head>
        <title>Login</title>
        <base href="http://localhost/mvc/public/" />
        <link rel="Stylesheet" type="text/css" href="css/ecommerce.css"/>
    </head>
    <body>
        <div id="loginDiv">
            <h4>Login:</h4>
            <form method="post" action="login" name="UserForm">
                Username: <input type="text" name="username"/><br/>
                Password: <input type="password" name="password"/></br>
                <input type="submit" name="loginButton" value="Login"/>
            </form>
        </div>
        <div id="registerDiv">
            <br/><h4>Register:</h4>
            <form name="registerForm" action="login" method="post">
                <label for="firstname">First Name: </label>
                <input type="text" name="firstname" id="firstname" /><br/>
                <label for="lastname">Last Name: </label>
                <input type="text" name="lastname" id="lastname" /><br/>
                <label for="address">Address: </label>
                <input type="text" name="address" id="address" /><br/>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" /><br/>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" /><br/>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" /><br/>
                <label for="passwordconfirm">Password Confirm: </label>
                <input type="password" name="passwordconfirm" id="passwordconfirm" /><br/>
                <div class="lower">
                    <input type="submit" name="registerButton" value="Register" />
                </div>
            </form>
    </body>
</html>