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
     <link rel="stylesheet" href="style.css">
    <style>
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
