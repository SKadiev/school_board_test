<?php

namespace App\Service;
use App\Models\Student;


class StudentService {
    
    protected $pdo;
    protected $boardFactory;


    public function __construct($pdo, $boardFactory) {
        $this->pdo = $pdo;
        $this->boardFactory = $boardFactory;

    }
  
    private function selectStudent($id) {
        $statement = $this->pdo->prepare("select * from student where id = {$id} ");

        $statement->execute();

        return $statement->fetch();
    }


    private function selectBoardId($id) {
        $statement = $this->pdo->prepare("select boardId from studentboard where studentId = {$id} ");

        $statement->execute();
        $boardType =  ($statement->fetch())['boardId'];
        return $boardType;
    }

    private function selectBoardType($id) {
        $statement = $this->pdo->prepare("select type from board where id = {$id} ");
        $statement->execute();
        $boardType =  ($statement->fetch())['type'];
        return $boardType;
    }

    public function getStudentInfo ($id)  {
        $statsData = [];
        $studentData = $this->selectStudent($id);
        $boardId = $this->selectBoardId($studentData['id']);
        $boardType = $this->selectBoardType($boardId);
        $board = $this->boardFactory->getBoard($boardType);
    
        $student = new Student(
            $id,
            $studentData['name'],
            $board->studentAverage(explode(',' , $studentData['grades'])),
            $board->studentPassed(explode(',', $studentData['grades'])),
            $studentData['grades']
        );
        var_dump(($board->studentStats($student)));

    

    }

 
    
}