<?php

namespace App\Service;


class StudentService {
    
    protected $pdo;
    protected $boardFactory;


    public function __construct($pdo,$boardFactory) {
        $this->pdo = $pdo;
        $this->boardFactory = $boardFactory;

    }
  
    private function selectStudent($id) {
        $statement = $this->pdo->prepare("select * from student where id = {$id} ");

        $statement->execute();

        return $statement->fetch();
    }


    private function selectBoardType($id) {
        $statement = $this->pdo->prepare("select type from board where studentId = {$id} ");

        $statement->execute();
        $boardType =  ($statement->fetch())['type'];
        return $boardType;
    }

    public function getStudentInfo ($id) : Board {
        $studentData = $this->selectBoardType($id);
        $boardType = $this->selectBoardType($id);
        $board = $this->boardFactory->getBoard($boardType);
        $studentAvg = $board->studentAverage(explode($statementData));
        // $studentPassed = $board->studentPassed($statementData);
        // $studentStats = $board->studentStats($statementData);

    }

 
    
}