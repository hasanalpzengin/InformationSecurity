//sqlinjection
var checkedSQL = "$this->db->query('SELECT id FROM users WHERE username=?', array($username))";
var notcheckedSQL = "$this->db->query('SELECT id FROM users WHERE username=\"'.$username.'\"')";

$("#sqlinjectionCheckbox").change(function () {
    var c = this.checked ? true : false;
    if(c){
        $("#sqlinjection-code").text(checkedSQL);
    }else{
        $("#sqlinjection-code").text(notcheckedSQL);
    }
});

//csrf
//csrf token
var checkedCSRF_token = "$token = uniqid(mt_rand(), TRUE);\n$_SESSION['token'] = $token;\n$url = 'http://example.com/index.php?token={$token}';\n"+
    "//PHP\nif(empty($_GET['token']) || $_GET['token'] !== $_SESSION['token'])\n{\nshow_404();\n}";
var notcheckedCSRF_token = "<form action=\"login.php\" method=\"post\">\n" +
    "<input name=\"username\" placeholder=\"username\" type=\"text\"/>\n" +
    "<input name=\"password\" placeholder=\"password\" type=\"password\"/>\n" +
    "<input name=\"submit\" value=\"login\" type=\"submit\"/>\n" +
    "</form>\n"+
    "//PHP\n $username = $_POST['username'];\n $password = $_POST['password'];\n login($username, $password);";

$("#csrfCheckbox-token").change(function () {
    var c = this.checked ? true : false;
    if(c){
        $("#csrf-code-token").text(checkedCSRF_token);
    }else{
        $("#csrf-code-token").text(notcheckedCSRF_token);
    }
});
//csrf referer
var checkedCSRF_referer = "if(isset($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']))\n" +
    "if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST)!=$_SERVER['HTTP_HOST'])\n" +
    "exit('Anti-CSRF mechanism!');";
var notcheckedCSRF_referer = "";

$("#csrfCheckbox-referer").change(function () {
    var c = this.checked ? true : false;
    if(c){
        $("#csrf-code-referer").text(checkedCSRF_referer);
    }else{
        $("#csrf-code-referer").text(notcheckedCSRF_referer);
    }
});

var checkedXSS = "localhost/index.php?search=username\n" +
    "$search = htmlspecialchars($_GET['search'], ENT_QUOTES, 'UTF-8');\n"+
    "$sql = 'SELECT email FROM users WHERE username=\"'.$search.\"';\n" +
    "$this->db->query($sql);";
var notcheckedXSS = "localhost/index.php?search=username\n" +
    "$sql = 'SELECT email FROM users WHERE username=\"'.$_GET['search'].\"';\n" +
    "$this->db->query($sql);";

$("#xssCheckbox").change(function () {
    var c = this.checked ? true : false;
    if(c){
        $("#xss-code").text(checkedXSS);
    }else{
        $("#xss-code").text(notcheckedXSS);
    }
});

$(document).ready(function () {
    $("#sqlinjection-code").text(notcheckedSQL);
    $("#csrf-code-token").text(notcheckedCSRF_token);
    $("#csrf-code-referer").text(notcheckedCSRF_referer);
    $("#xss-code").text(notcheckedXSS);
});