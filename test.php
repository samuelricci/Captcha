<html>
    <head>
        <title>This be a test</title>
        <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <div class="testcaptcha" style="border: 1px solid black;">
            <img src="captcha.php" />
            <form action="validation.php" method="post">
                <input type="text" name="answer" placeholder="Enter captcha here" />
                <input type="submit" value="CHECK" /> 
            </form>
        </div>
    </body>

    <footer>
    </footer>
</html>