<?php

    class QuestionnaireModel extends CI_Model {
        public function registerQuestionnaire($data) {
            $this->db->insert('reponses', $data);
        }
        public function getAllQuestionnaire() {
            $this->db->select('*');
            $this->db->from('reponses');
            $this->db->join('categorie', 'categorie.categorie_id = reponses.categorie_id');
            $this->db->join('mode', 'mode.mode_id = reponses.mode_id');
            $this->db->join('classe', 'classe.classe_id = reponses.classe_id');
            $query = $this->db->get();
            return $query->result() ;
        }
        public function deleteQuestionnaire($id) {
            $this->db->where('reponses_id', $id);
            $this->db->delete('reponses');
        }
    }