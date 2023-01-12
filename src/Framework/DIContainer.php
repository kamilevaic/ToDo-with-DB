<?php
namespace Kamil\Todo\Framework;

use Kamil\Todo\Controller\PageNotFoundController;
use Kamil\Todo\Controller\ToDoController;
use Kamil\Todo\Repository\TaskRepository;
use RuntimeException;

class DIContainer
{
    private array $entries = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('Class ' . $id . 'not found in container.');
        }
        $entry = $this->entries[$id];

        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $callable): void
    {
        $this->entries[$id] = $callable;
    }

    public function loadDependencies()
    {
        $this->set(
            Router::class,
            function (DIContainer $container){
                return new Router(
                    $container->get(PageNotFoundController::class),
                    $container->get(ToDoController::class)
                );
            }
        );
//
        $this->set(
            PageNotFoundController::class,
            function (DIContainer $container){
                return new PageNotFoundController();
            }
        );

        $this->set(
            ToDoController::class,
            function (DIContainer $container){
                return new ToDoController(
                    $container->get(TaskRepository::class)
                );
            }
        );

        $this->set(
            TaskRepository::class,
            function (DIContainer $container){
                return new TaskRepository();
            }
        );


    }
}