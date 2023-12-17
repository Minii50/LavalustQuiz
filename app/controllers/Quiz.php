<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class Quiz extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Quiz_model'); 
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
            $jsonPayload = file_get_contents('php://input');
            $postData = json_decode($jsonPayload, true);

            $quizTitle = $postData['quizTitle'];
            $note = $postData['note'];
            $questions = $postData['questions'];

            // Initialize arrays to store question details
            $quizQuestions = [];
            $quizTypes = [];
            $quizAnswers = [];

            // Loop through each question in the array
            foreach ($questions as $question) {
                $quizQuestions[] = $question['text'];
                $quizTypes[] = $question['type'];
                $quizAnswers[] = $question['answer'];
            }

            // Pass arrays to the model function
            $quizCreated = $this->Quiz_model->create_quiz($quizTitle, $note, $quizQuestions, $quizTypes, $quizAnswers);

            if ($quizCreated) {
                // Quiz creation was successful
                $this->call->view('login');
                exit;
            } else {
                // Quiz creation failed
                echo 'Failed to create the quiz';
            }
        }
    }
}

?>