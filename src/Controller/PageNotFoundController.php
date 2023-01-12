<?php

namespace Kamil\Todo\Controller;

class PageNotFoundController
{
    public function display()
    {
        $smarty = new \Smarty();
        $smarty->display(__DIR__ . './../Views/NotFound.tpl');
    }
}