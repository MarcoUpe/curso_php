<?php
 
 class Task {
     private $title;
     private $description;
     private $completed;
  
     public function __construct($title, $description) {
         $this->title = $title;
         $this->description = $description;
         $this->completed = false;
     }
  
     public function markAsCompleted() {
         $this->completed = true;
     }
  
     public function markAsIncomplete() {
         $this->completed = false;
     }
  
     public function getTitle() {
         return $this->title;
     }
  
     public function getDescription() {
         return $this->description;
     }
  
     public function isCompleted() {
         return $this->completed;
     }
 }
  
  
 $task = new Task("Comprar arroz", "Comprar feijão, pão e ovos");
 echo "Tarefa: " . $task->getTitle() . "\n";
 echo "Descrição: " . $task->getDescription() . "\n";
 echo "Status: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";
  
 $task->markAsCompleted();
 echo "Status após marcação como concluída: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";
  
 $task->markAsIncomplete();
 echo "Status após marcação como não concluída: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";