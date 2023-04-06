<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Questionnaire extends CI_Controller {

        public function __construct() {
            parent::__construct() ;
            $this->load->model("ModeModel","mode") ;
            $this->load->model('CategorieModel',"categorie") ;
            $this->load->model("ClasseModel","classe") ;
            $this->load->model("QuestionnaireModel","questionnaire") ;

        }

        public function index() {
            $this->load->view('admin/questionnaire',array(
                'mode' => $this->mode->getAllMode() ,
                'categorie' => $this->categorie->getAllCategorie() ,
                'classe' => $this->classe->getAllClasse() ,
                'questions' => $this->questionnaire->getAllQuestionnaire() ,
            )) ;
        }
        public function enregistrer() {
            $data = array(
                "categorie_id" => $_POST['categorie_id'],
                "classe_id" => $_POST['classe_id'],
                "mode_id" => $_POST['mode_id'],
                "reponses_question" => $_POST['question'],
                "reponses_contenu" => $_POST['reponses'],
            ) ;
            $this->questionnaire->registerQuestionnaire($data) ;
            echo 'success' ;
        }
        public function getAllQuestions() {
            $questions = $this->questionnaire->getAllQuestionnaire() ;
            $affichage = '' ;
            for($q = 0; $q < count($questions); $q++):
                $affichage .= '<tr>' ;
                $affichage .= "<td>{$questions[$q]->categorie_nom }</td>" ;
                $affichage .= "<td>{$questions[$q]->classe_nom }</td>" ;
                $affichage .= "<td>{$questions[$q]->mode_nom }</td>" ;
                $affichage .= "<td>{$questions[$q]->reponses_question}</td>" ;
                $affichage .= "<td>" ;
                $d = json_decode($questions[$q]->reponses_contenu) ;
                for($k = 0; $k < count($d); $k++) {
                $affichage .= '<span class="text-info">'.$d[$k][0].'</span><span> : '.$d[$k][1].'</span><br>' ;
                }
                $affichage .= "</td>" ;
                $affichage .= "<td>" ;
                $affichage .= "<a class='badge bg-label-danger me-1' href='".base_url()."Questionnaire/supprimer/".$questions[$q]->reponses_id."'>Supprimer</a>" ;
                $affichage .= "</td>" ;
                $affichage .= "</tr>" ;
            endfor ;            
            echo $affichage ;

        }
        public function supprimer($id) {
            $this->questionnaire->deleteQuestionnaire($id) ;
            redirect('questionnaire') ;
        }
    }