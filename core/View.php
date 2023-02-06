<?php
namespace Core;

class View
{
    public function render(Page $page)
    {
        return $this->renderLayout($page, $this->renderView($page));
    }

    private function renderLayout(Page $page, $content)
    {
        $layoutPath = __DIR__ . "/../app/Views/layouts/{$page->layout}.php";
        if (file_exists($layoutPath)) {
            ob_start();
            $title = $page->title;
            include $layoutPath;
            return ob_get_clean();
        }
    }

    private function renderView(Page $page)
    {
        if ($page->view) {
            $viewPath = __DIR__ . "/../app/Views/{$page->view}.php";

            if (file_exists($viewPath)) {
                ob_start();
                $content = $page->content;
                require $viewPath;
                return ob_get_clean();
            } else {
                echo "Не найден файл с представлением по пути $viewPath";
                die();
            }
        }
    }
}
