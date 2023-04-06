<?php

    class CategorieModel extends CI_Model {
        public function registerCategorie($categorie,$datas) {
            $this->db->insert('categorie', $categorie) ;

            $this->db->select('*') ;
            $this->db->from('categorie') ;
            $this->db->order_by('categorie_id','DESC') ;
            $query = $this->db->get() ;
            $data = $query->result() ;
            
            for($i = 0; $i < count($datas); $i++) {
                $this->db->insert('section',array(
                    'categorie_id' => $data[0]->categorie_id ,
                    'section_nom' => $datas[$i] ,
                )) ;
            }
            
        }
        public function getAllCategorie() {
            $query = $this->db->get('categorie');
            $results = $query->result() ;
            $data = [] ;
            

            for($i = 0; $i < count($results); $i++) {
                $id = $results[$i]->categorie_id ;
                $this->db->select('*') ;
                $this->db->from('section') ;
                $this->db->where('categorie_id',$id) ;
                $data = $this->db->get()->result() ;
                $results[$i]->section = $data ;
            }
            return $results ;
        }


        
        public function deleteCategorie($id) {
            $this->db->where('categorie_id', $id);
            $this->db->delete('categorie');

            $this->db->where('categorie_id',$id) ;
            $this->db->delete('section') ;
        }

        public function updateCategorie($nom, $id) {
            $data = array(
                'categorie_nom' => $nom,
            );
            
            $this->db->where('categorie_id', $id);
            $this->db->update('categorie', $data);
        }
    }