<?php

namespace App\Game\Classes\GameObject;

class GameObjectList implements \Iterator, \Countable
{
    private array $elements = [];

    private int $position = 0;

    private int $count = 0;

    public function __construct()
    {

    }

    public function addElement(IGameObject $element)
    {
        ++$this->count;
        $this->elements[] = $element;
    }

    public function set($key, $val)
    {
        $this->elements[$key] = $val;
    }

    public function get($key)
    {
        return $this->elements[$key];
    }

    // Метод должен вернуть значение текущего элемента
    public function current()
    {
        return $this->elements[$this->position];
    }

    // Метод должен вернуть ключ текущего элемента
    public function key()
    {
        return $this->position;
    }

    // Метод должен сдвинуть "указатель" на следующий элемент
    public function next(): void
    {
        ++$this->position;
    }

    // Метод должен поставить "указатель" на первый элемент
    public function rewind(): void
    {
        $this->position = 0;
    }

    // Метод должен проверять - не вышел ли указатель за границы?
    public function valid(): bool
    {
        return isset($this->elements[$this->position]);
    }

    public function count()
    {
        // TODO: Implement count() method.
        return $this->count;
    }
}
