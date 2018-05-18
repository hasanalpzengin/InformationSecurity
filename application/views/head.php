<head>
    <title>Information Security</title>
    <link href="/css/main.css" rel="stylesheet" type="text/css"/>
    <link href="/css/<?php echo $controller ?>.css" rel="stylesheet" type="text/css"/>
    <script src="/js/jquery-3.3.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="page-wrapper">
<a href="/index.php/<?php echo $controller; ?>/index">
    <div class="header-wrapper">
        <img src="/image/security.png">
        <h1 class="h1w">Web Uygulaması Güvenliği</h1>
    </div>
</a>

<?php
if ($controller == "page") {
?>
    <div class="navigation-wrapper">
        <a href="/index.php/page/sql_injection" class="navigation-item" id="sqlButton"><h3 class="h3w">SQL Injection</h3></a>
        <a href="/index.php/page/csrf" class="navigation-item" id="csrfButton"><h3 class="h3w">CSRF</h3></a>
        <a href="/index.php/page/xss" class="navigation-item" id="xssButton"><h3 class="h3w">XSS</h3></a>
        <a href="/index.php/page/broken_authentication" class="navigation-item" id="baButton"><h3 class="h3w">Broken Authentication and Session Management</h3></a>
        <a href="/index.php/page/file_include" class="navigation-item" id="fileIncludeButton"><h3 class="h3w">File Include</h3></a>
        <a href="/index.php/page/hash_attacks" class="navigation-item" id="hashAttacksButton"><h3 class="h3w">Hash Attacks</h3></a>
        <a href="/index.php/page/pratik" class="navigation-item" id="pratikButton"><h3 class="h3w">Pratik</h3></a>
        <a href="/index.php/page/sql_injection_bot" class="navigation-item" id="sqlBotButton"><h3 class="h3w">SQL Injection Bot</h3></a>
    </div>
<?php
}
?>
<div class="content-wrapper">
