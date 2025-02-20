<?php
class Main {
    private string $titlePage;
    private string $content;

    public function __construct(string $titlePage, string $content){
        $this->titlePage = $titlePage;
        $this->content = $content;
    }

    public function getTitlePage(): string {
        return $this->titlePage;
    }
    
    public function getContent(): string {
        return $this->content;
    }

    public function showContent(): void {
      
        $title = $this->getTitlePage();
        $content = $this->getContent();

        $body = <<<HTML
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./style/style.css">
                <title>{$title}</title>
            </head>
            <body>
                {$content}
            </body>
        </html>
        HTML;
        echo $body;
    }
}
?>
