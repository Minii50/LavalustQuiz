<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class Quiz extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('Quiz_model'); 
    }

    public function index()
    {

    }

    public function create_quiz_get() {
        $this->call->view('create_quiz');
    }
    
    public function create_quiz_post() 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $quizTitle = $_POST['quizTitle'] ?? ''; 
            $note = $_POST['note'] ?? '';
            $question = $_POST['question'] ?? '';
            $selecttype = $_POST['selecttype'] ?? '';
            $answer = $_POST['answer'] ?? '';
        
            $this->call->model('Quiz_model');  
            $quizModel = new Quiz_model();
        
            $result = $quizModel->create_quiz($quizTitle, $note, $question, $selecttype, $answer);
        
            if ($result) {
                echo "Quiz created successfully!";
            } else {
                echo "Failed to create quiz.";
            }
        }
    }
}

?>
