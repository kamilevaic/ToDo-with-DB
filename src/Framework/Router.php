<?php

namespace Kamil\Todo\Framework;


use Kamil\Todo\Controller\PageNotFoundController;
use Kamil\Todo\Controller\ToDoController;

class Router
{
        private PageNotFoundController $pageNotFoundController;
        private ToDoController $toDoController;
//    private HomePageController $homePageController;
//    private TodoController $todoController;

    public function __construct(
        PageNotFoundController $pageNotFoundController,
        ToDoController $toDoController)
    {
        $this->pageNotFoundController = $pageNotFoundController;
        $this->toDoController = $toDoController;

    }

//    public function __construct(
//        HomePageController $homePageController,
//        TodoController $todoController
//    ) {
//        $this->homePageController = $homePageController;
//        $this->todoController = $todoController;
//    }

    public function process(string $route, array $request = null)
    {
        switch ($route) {
            case '/':
                $this->toDoController->list();
                break;
            case '/list':
                die('hello from list');
                break;
            case '/create':
                 die('hello from create');
                break;
            default:
                $this->pageNotFoundController->display();
                break;
        }
    }

}