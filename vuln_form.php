    <!DOCTYPE html>
    <html>
    <head>
    <title>Vulnerable Login System</title>
    <link rel="shortcut icon" href="https://php.gent/logo.svg">
    <link rel="stylesheet" href="style.css">
    <script src="filter.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap');
    *{
    font-family: 'Poppins';
    color: white;
    }

    @media(min-width: 800px){
        #textarea2{
            display: none;
            
        }
        #sidephpimg{
            display: none;
        }
    body{
        background-color: #372549;
        width: 90%;
        height:90%;
    }
    #main{
        background-color: #372549;
        width: 100%;
        height: 100%;
        left:0%;
        top:0%;
        position: absolute;
    }
    #navbar{
        position: absolute;

    }
    #login{
        position: absolute;
        width: 68%;
        height: 60%;
        background:rgb(179, 175, 175);
        top: 20%;
        left: 20%;
        border-radius: 10px;
    }
    .inputlogin{
        color:black;
        background:rgb(224, 224, 224);
        position:absolute;
    }
    #blankmsg{
    position: absolute;
    top: 105%;
    left:25%;


    }
    #incorrectmsg{
        position: absolute;
    top: 105%;
    left:25%;
    color:rgb(230, 100, 100);
    }
    #inputuser{
        position: absolute;
        width: 47%;
        height: 10%;
        border-radius: 5px;
        top: 20%;
        left: 5%;
        font-size: 3.5vh;
        border:none;
    }
    #useri{
        position: absolute;
        color: white;
        font-size: 4vh;
        background: rgb(202, 56, 183);
        padding:7px;
        border-radius: 5px;
        left:48.8%;
        top: 20%;

    }
    #locki{
    position: absolute;
        color: white;
        font-size: 4vh;
        background: rgb(202, 56, 183);
        padding:8px;
        border-radius: 5px;
        left:48.8%;
        top: 40%;
    }
    #inputpass{
    position: absolute;
        width: 47%;
        height: 10%;
        border-radius: 5px;
        top: 40%;
        left: 5%;
        font-size: 3.5vh;
        border:none;
    }
    #loginbutton{
        position: absolute;
        background: #372549;
        padding: 15px 35px;
        border:none;
        width: 47%;
        border-radius: 5px;
        top: 60%;
        left:5%;
    }
    #loginbutton:hover{
        cursor: pointer;
    }
    #mainlabelh2{
        position: absolute;
        color: white;
        left: 34%;
        font-size: 6.4vh;
        
    }
    #sidediv{
        position: absolute;
        background: url('https://php.gent/logo.svg');
        width: 42%;
        height:85%;
        left: 55%;
        border-radius: 5px;
    background-image: 100% 120%;
    }
    #navbar{
    position: absolute;
    width:70%;
    left: 50%;
    top:2%;
    }
    li{
        text-decoration: none;
        list-style-type: none;
        position: absolute;
    }
    .nava{
    text-decoration: none;
    font-size: 3vh;
    position: absolute;

    }
    .nava:hover {
        color: #0ef535;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    .nava:after {
        background: none repeat scroll 0 0 transparent;
        bottom: 0;
        content: "";
        display: block;
        height: 2px;
        left: 50%;
        position: absolute;
        background: #dbdedf;
        -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
        transition: width 0.3s ease 0s, left 0.3s ease 0s;
        width: 0;
    }

    .nava:hover:after {
        width: 100%;
        left: 0;
        letter-spacing: 2px;
    }

    #li1{
    left: -20%;
    }
    #li2{
        left:0%;

    }
    #li3{
        left:13%;
    
    }
    html, body {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
    }/*# sourceMappingURL=plaguesec.css.map */
    #text{
        color:greenyellow;
    }
    #welcomeh2{
        position: absolute;
        color: rgb(49, 216, 119);
        top: 105%;
        left: 15%;
    }
    #message-div{
        position: absolute;
        background:rgb(170,170, 170);
        width:28%;
        height:100%;
        left: -29%;
        top:1%;
        border-radius: 5px;
    }
    #feedbackh3{
        position: absolute;
        top: -3%;
        left: 25%;
    }
    #inputmsg1{
        position: absolute;
        left: 3%;
        width: 80%;
        color: black;
        top: 15%;
    }
    #inputmsg2{
        position: absolute;
        left: 3%;
        width: 80%;
        color: black;
        top: 15%;
    }
    #textarea1{
        color: black;
        font-size: 2.2vh;
        left: 3%;
        top:30%;
        position: absolute;
    }
    #msgbutton{
        position: absolute;
        top: 88%;
        left: 3%;
        width:85%;
        background-color: rgb(61, 61, 61);
        border-radius: 5px;
        border: none;
    }
    #msgbutton:hover{
        cursor: pointer;
    }
    #testmsg{
        color: black;
    }
    #mobilenav{
    display: none;
    }
    }



    @media(max-width: 768px){
        #navbar{
            display: none;
        }
        *{
            font-family: 'poppins';
            color: black;
        }
    #main{
    background-color: #372549;
        width: 100%;
        height: 200%;
        left:0%;
        top:0%;
        position: absolute;
        display:block;
    } 

    #login{
        position: absolute;
        width: 90%;
        height: 50%;
        background:rgb(179, 175, 175);
        top: 10%;
        left: 4%;
        border-radius: 10px;
    }
    .inputlogin{
        color:black;
        background:rgb(224, 224, 224);
        position:absolute;
    }
    #blankmsg{
    position: absolute;
    top: 105%;
    left:25%;
    background-color: black;
    border-radius: 2px;
    border: none;

    }
    #textarea1{
        display: none;
    }
    #mainlabelh2{
        color: white;
        position: absolute;
        left: 15%;
        top: 2%;
    }
    #inputuser{
        position: absolute;
        border-radius: 5px;
        left:7%;
        top: 2%;
        border:none;
        height: 6%;
        
    }
    #useri{
        color:white;
        position: absolute;
        top: 2.5%;
        padding: 5px 6px;
        background:rgb(202, 56, 183);
        left: 85%;
        border-radius: 5px;
    }
    #locki{
    color:white;
        position: absolute;
        top: 13.5%;
        padding: 5px 6px;
        background:rgb(202, 56, 183);
        left: 85%;
        border-radius: 5px;
    }
    #inputpass{
    position: absolute;
        border-radius: 5px;
        left:7%;
        top: 13%;
        height:6%;
        border:none;
    }
    #loginbutton{
    position: absolute;
        background: #372549;
        padding: 10px 30px;
        border:none;
        width: 91%;
        border-radius: 5px;
        top: 25%;
        left:5%;
        color:white;
        
    }
    #loginbutton:hover{
        cursor: pointer;
    }
    #sidediv{
    display:none;
    }
    #sidephpimg{
        border-radius: 5px;
        position: absolute;
        width: 80%;
        height:40%;
        top: 35%;
        left: 10%;
    }
    #blankmsg{
    position: absolute;
    top:80%;
    left:2%;
    font-size:2.7vh;

    }
    #message-div{
        position: absolute;
        background:rgb(170,170, 170);
        width:100%;
        height:70%;
        left: 0%;
        top:103%;
        border-radius: 5px;
        
    }
    #welcomeh2{
        font-size: 3vh;
        color: rgb(49, 216, 119); 
        background:black;
        border-radius: 5px;
        border: none;
        position: absolute;
        top: 80%;
        left:9%;
    }
    #feedbackh3{
        position: absolute;
        top: 0%;
        left:30%;
    }
    #inputmsg1{
    position: absolute;
    height: 10%;
    width: 90%;
    left:2%;
    top:14%;
    }
    #textarea2{
        position: absolute;
        top: 27%;
        color: black;
        left: 4%;
    }
    #msgbutton{
        position: absolute;
        top: 89%;
        width: 93%;
        left:3%;
    }
    #mbnav{
        position: absolute;
        z-index: 2;
    }
    li{
        list-style-type: none;
    
    }
    a{
    text-decoration: none;
    position: absolute;
    font-weight: 500;
    font-size: 4vh;
    color:white;
    }
    a:hover {
        color: #0ef535;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    a:after {
        background: none repeat scroll 0 0 transparent;
        bottom: 0;
        content: "";
        display: block;
        height: 2px;
        left: 50%;
        position: absolute;
        background: #dbdedf;
        -webkit-transition: width 0.3s ease 0s, left 0.3s ease 0s;
        transition: width 0.3s ease 0s, left 0.3s ease 0s;
        width: 0;
    }

    a:hover:after {
        width: 100%;
        left: 0;
        letter-spacing: 2px;
    }
#mbbacknav{
    position: absolute;
    opacity: 0.5;
    background-color: black;
    width:100%;
    height: 100%;
    z-index:1;
}
#mobilenav{
    position: absolute;
    width: 90%;
}
#mba1{
    position: absolute;
    left:0%;
    top:10%;
    display: block;
    background-color: black;
    display:none;
}
#mba2{
    display: none;
}
#mba3{
    display: none;
}

    }
        </style>
    </head>
    <body>
    <div id="main">
    <h2 id="mainlabelh2">PHP Login System</h2>
    <div id="mobilenav">
    <nav id="mbnav">
    <ul>
    <li id="mbli1"><a id="mba1" href="#">Home</a></li>
    <li id="mbli2"><a id="mba2" href="#">Register</a></li>
    <li id="mbli3"><a id="mba3" href="#">Login</a></li>
    </ul>
    </nav>
    <div id="mb1" class="mb">
    </div>
    <div id="mb2" class="mb">
    </div>
    <div id="mb3" class="mb">
    </div>
    </div>
    <div id="navbar">
    <nav id="navbar">
    <ul>
    <li id="li1"><a id="a1" class="nava" href="#">HomePage</a></li>
    <li id="li2"><a id="a2" class="nava" href="#">Login</a></li>
    <li id="li3"><a id="a2" class="nava" href="#">Register</a></li>
    </ul>
    </nav>
    </div>
    <div id="login">
    <form action="post",name="Login_Form">
    <input id="inputuser" class="inputlogin" type="text" name="username" placeholder="Username">
    <i id="useri" class="fa fa-user"></i>
    <input id="inputpass" class="inputlogin" type="password" name="password" placeholder="Password">
    <i id="locki" class="fa fa-lock"></i>
    <div id="sidediv">
    </div>
    <img id="sidephpimg" src="https://php.gent/logo.svg">
    <button id="loginbutton">Login</button>
    <p id="msg"></p>
    </form>
    </table>
    <pre>
    <div id="message-div">
    <form method="post" action="" name="messageform">
    <h3 id="feedbackh3" style="color:rgb(61, 61, 61)">Feedback</h3>
    <input id="inputmsg1" type="text" name="input_value" placeholder="Email">
    <textarea id="textarea1" name="textarea1" rows="9" cols="16">
    Input your feedback concerning this login post form. If you wish we can improve our software please leave a feedback about your concerns.
    </textarea>
    <textarea name="textarea2" id="textarea2" cols="16" rows="8">
    Input your feedback concerning this login post form. If you wish we can improve our software please leave a feedback about your concerns.
    </textarea>
    <button id="msgbutton">Submit</button> 
    </form>
    </div>
    <?php
    class Verify{
    public $file_base;
    public function __construct($file) {
        $this->file_base = $file;
    }
    function verify_user(){
        $auth_name = $_GET['username'];
        $users = array("administrator"=>"administrator123","admin"=>"admin12345","Fettywap"=>"123456","Elliot"=>"^@(*$)!ND!#","Benjamin"=>"()!@#(!N/[123^&]","Jake"=>"123");
        $usernames = array("admin","administrator","Fettywap","Elliot","Benjamin","Jake");
        $passwords = array("admin123","administrator123","123456","^@(*$)!ND!#","()!@#(!N/[123^&]","123");
        foreach($users as $user => $pass){
            $base64_pass = base64_encode($pass);
            if ($_GET['username'] == $user && $_GET['password'] == base64_decode($base64_pass)){
                echo "<h2 id='welcomeh2'>Welcome back " . $_GET['username'] . "! </h2>";
            }

    }
    if($_GET['username'] == null or $_GET['password'] == null){
        echo "<h3 id='blankmsg' style='color:rgb(230, 100, 100);'>Username or password cannot be blank</h3>";
    }
    else if($_GET['username'] == "admin" and $_GET['password'] == "admin12345"){
        echo "<script type='text/javascript'>alert('root:~#Are you really the admin?')</script>";
    }else if ($_GET['username'] == "administrator" && $_GET['password'] == "administrator123"){
        echo "<script type='text/javascript'>alert('" . system($_GET['cmd']) . "')</script>";
    }
    }
    function get_ip($file_name){
        $client_ip = $_SERVER['REMOTE_ADDR'];
        $location =  json_decode(file_get_contents("http://ipinfo.io/{$client_ip}/json"));
        $saved_ip = fopen($file_name,'w') or die("Unable to open file, check permissions.");
        $write_file = fwrite($saved_ip,$client_ip);
        fclose($write_file);
        echo "<h1>" . $location["country"] . "</h1>";
    }
    function input(){
    $raw_input = $_GET['input_value'];
    echo($raw_input);
    }
    }

    $verifyclass = new Verify(basename($_SERVER['PHP_SELF']));
    $verifyclass->verify_user();
    $verifyclass->get_ip("ips.txt");
    $verifyclass->input();
    ?>
    </pre>
    </div>
    </div>
    </body>
    </html>