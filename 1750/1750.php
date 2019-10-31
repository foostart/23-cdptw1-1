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
    $less->compileFile('less/1750.less', 'css/1750.css');
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href=" <?php echo $url_path;?>/css/bootstrap.min.css" />
    <link href="<?php echo $url_path; ?>/css/1750.css" rel="stylesheet" />
    <link href="<?php echo $url_path; ?>/fontawesome/css/all.css" rel="stylesheet" />
</head>

<body>
    <?php include '1750-content.php'; ?>
</body>
<script src="<?php echo $url_path; ?>/js/jquery-3.2.1.slim.min.js">
</script>

<script src="js/jquery.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
<script>
$(document).ready(function() {
    var audio = $("#clickSound")[0];
    var audio2 = $("#clickSound2")[0];
    $("#button").mousedown(function() {
        audio2.play();
    });
    $("#button").mouseup(function() {
        audio.play();
    });
});
</script>


</html>