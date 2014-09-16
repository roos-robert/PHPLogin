<?php
class HTMLView {
    public function echoHTML($body) {
        if ($body === NULL) {
            throw new \Exception("HTMLView::echoHTML does not allow body to be null");
        }
        echo "
<!DOCTYPE html>
<html>
<body>
$body
</body>
</html>";
    }
}