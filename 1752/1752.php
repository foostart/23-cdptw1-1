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
    $less->compileFile('less/1752.less', 'css/1752.css');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type"      content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1752</title>
    <link href="<?php echo $url_path; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $url_path; ?>/css/1752.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<body>
    <?php include '1752-content.php'; ?>
</body>
<script src="<?php echo $url_path; ?>js/jquery-3.2.1.slim.min.js">
</script>
<script>
$(function() {
    cbpHorizontalMenu.init();
});
</script>
<script>
(function(window, document) {
    document.getElementById('toggle').addEventListener('click', function(e) {
        document.getElementById('tuckedMenu').classList.toggle('custom-menu-tucked');
        document.getElementById('toggle').classList.toggle('x');
    });
})(this, this.document);
</script>

</html>