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
        $this->call->view('create_quiz');
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $quizTitle = $_POST['quizTitle'] ?? ''; 
        //     $note = $_POST['note'] ?? '';
        //     $question = $_POST['question'] ?? '';
        //     $selecttype = $_POST['selecttype'] ?? '';
        //     $answer = $_POST['answer'] ?? '';
        
        //     $this->call->model('Quiz_model');  
        //     $quizModel = new Quiz_model();
        
        //     $result = $quizModel->create_quiz($quizTitle, $note, $question, $selecttype, $answer);
        
        //     if ($result) {
        //         echo "Quiz created successfully!";
        //     } else {
        //         echo "Failed to create quiz.";
        //     }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $quiz_title = isset($_POST['quiz_title']) ? $_POST['quiz_title'] : '';
            $note = isset($_POST['note']) ? $_POST['note'] : '';
            $question = isset($_POST['question']) ? $_POST['question'] : '';
            $selecttype = isset($_POST['selecttype']) ? $_POST['selecttype'] : '';
            $answer = isset($_POST['answer']) ? $_POST['answer'] : '';
        
            $this->call->model('Quiz_model');  
            $this->Quiz_model->create_quiz($quiz_title, $note, $question, $selecttype, $answer);
          
            return redirect('create_quiz');
        }
        // }
    }

    public function view_form()
    {
        // Fetch quiz questions from the database
        $questions = $this->Quiz_model->get_quiz_questions(); // Create this method in your model

        // Pass data to the view
        $data['questions'] = $questions;
        $this->call->view('view_form', $data);
    }
}

?>
