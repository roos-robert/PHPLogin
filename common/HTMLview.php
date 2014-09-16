<?php
class HTMLView {
    public function echoHTML($body) {
        if ($body === NULL) {
            throw new \Exception("HTMLView::echoHTML does not allow body to be null");
        }
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>PHPLogin</title>
    <meta http-equiv='content-type' content='text/html; charset=utf-8' />
</head>
<body>
$body
</body>
</html>";
    }
}