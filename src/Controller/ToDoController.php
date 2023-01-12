<?php

namespace Kamil\Todo\Controller;

use Kamil\Todo\Framework\DBConnections;
use Kamil\Todo\Repository\TaskRepository;

class ToDoController
{
    private TaskRepository $taskRepository;

    public function __construct(TaskRepository $taskRepository){
    $this->taskRepository = $taskRepository;
    }

    public function list(){
        $tasks = $this->taskRepository->getAllTasks();

        $smarty = new \Smarty();
        $smarty->assign(['tasks'=> $tasks]);
        $smarty->display(__DIR__. './../Views/HomePage.tpl');
    }


}