<?php
    class ReadingList {
        protected $stack;
        protected $limit;

        public function __construct($limit = 10) {
            $this->stack = [];
            $this->limit = $limit;
        }

        function getStack() {
            return $this->stack;
        }

        function isEmpty() {
            return empty($this->stack);
        }

        public function push($item) {
            if(count($this->stack) < $this->limit) {
                array_unshift($this->stack, $item);
            } else {
                throw new RunTimeException('Stack is full!');
            }
        }

        function pop() {
            if($this->isEmpty()) {
                throw new RunTimeException('Stack is empty!');
            } else {
                return array_shift($this->stack);
            }
        }

        function top() {
            return current($this->stack);
        }

    }

    $myBooks = new ReadingList();
    $myBooks->push('A Dream of Spring');
    $myBooks->push('A Dream of Spring');
    $myBooks->push('A Dream of Spring');
    $myBooks->push('A Dream of Spring');
    $myBooks->push('A Dream of Spring');
    $myBooks->push('A Dream of Spring');
    $myBooks->push('The Winds of Winter');
    $myBooks->push('A Dance with Dragons');
    $myBooks->push('A Feast for Crows');
    $myBooks->push('A Storm of Swords'); 
    // $myBooks->push('A Clash of Kings');
    // $myBooks->push('A Game of Thrones');

    echo "<pre>";
    print_r($myBooks->getStack());

    $myBooks->pop();
    $myBooks->pop();
    echo "<pre>";
    print_r($myBooks->getStack());