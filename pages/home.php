<?php
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
