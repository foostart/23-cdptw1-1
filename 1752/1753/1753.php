<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once $dir_block.'/libs/lessc.inc.php';
    }
    $less = new lessc();
    $less->compileFile('less/1753.less', 'css/1753.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo $url_path; ?>/css/bootstrap.min.css" >
    <link href="<?php echo $url_path; ?>/css/1753.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo $url_path; ?>/css/reset.css"> 
	<link rel="stylesheet" href="<?php echo $url_path; ?>/css/style.css"> 
<body>
    <?php include '1753-content.php'; ?>
</body>
    <script src="<?php echo $url_path; ?>/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo $url_path; ?>/js/popper.min.js"></script>
    <script src="<?php echo $url_path; ?>/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
	<script src="<?php echo $url_path; ?>/js/1753.js"></script>
</html>