<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Categorie extends CI_Controller {

        public function __construct() {
            parent::__construct() ;
            $this->load->model('CategorieModel',"categorie") ;
        }
        public function index() {
            $this->load->view('admin/categorie',array(
                'categorie' => $this->showCategorieSection() ,
            )) ;
        }
        
        public function register() {
            $categorie = $_POST['categorie'] ;
            $data = json_decode($_POST['content']) ;

            $this->categorie->registerCategorie(['categorie_nom' => $categorie],$data) ;

            echo json_encode(array(
                'success' => true ,
            )) ;
        }

        public function supprimer($id) {
            $this->categorie->deleteCategorie($id) ;
            echo json_encode(array(
                'success' => true ,
            )) ;
        }
        public function getCateg() {
            echo json_encode($this->showCategorieSection()) ;
        } 
        public function showCategorieSection() {
            return $this->categorie->getAllCategorie() ;
        }
    }