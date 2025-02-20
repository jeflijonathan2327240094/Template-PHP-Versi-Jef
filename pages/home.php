<?php
// include_once '../Main.php';
// include_once '../Connection';

class Home {
    public function showPage(): string {
       
        $content = <<<HTML
            <h1>
                Hello. Welcome to My Website
            </h1>
        HTML;
        return $content;
    }
}

?>
