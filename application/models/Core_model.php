<?php

defined('BASEPATH') or exit('Ação não permitida');

class Core_model extends CI_Model
{
 public function get_all($table = NULL, $conditions = NULL)
 {
  if ($table && $this->db->table_exists($table)) {
   if (is_array($conditions)) {
    $this->db->where($conditions);
   }
   return $this->db->get($table)->result();
  } else {
   return false;
  }
 }

 public function get_by_id($table = NULL, $conditions = NULL)
 {
  if ($table && $this->db->table_exists($table) && is_array($conditions)) {
   $this->db->where($conditions);
   $this->db->limit(1);
   return $this->db->get($table)->result();
  } else {
   return false;
  }
 }

 public function insert($table = NULL, $data = NULL, $get_last_id = NULL)
 {
  if ($table && $this->db->table_exists($table) && is_array($data)) {
   $this->db->insert($table, $data);

   //Insere na sessão o último ID inserido na Base de Dados
   if ($get_last_id) {
    $this->session->set_userdata('last_id', $this->db->insert_id());
   }

   if ($this->db->affected_rows() > 0) {
    $this->session->set_flashdata('sucess', 'Data sucessfully saved!');
   } else {
    $this->session->set_flashdata('error', 'Not possible to alter data.');
   }
  } else {
   return false;
  }
 }

 public function update($table = NULL, $data = NULL, $conditions = NULL)
 {
  if ($table && $this->db->table_exists($table) && is_array($data) && is_array($conditions)) {
   if ($this->db->update($table, $data, $conditions)) {
    $this->session->set_flashdata('sucess', 'Data sucessfully saved!');
   } else {
    $this->session->set_flashdata('error', 'Not possible to alter data.');
   }
  } else {
   return false;
  }
 }

 public function delete($table = NULL, $conditions = NULL)
 {
  if ($table && $this->db->table_exists($table) && is_array($conditions)) {
   if ($this->db->delete($table, $conditions)) {
    $this->session->set_flashdata('sucess', 'Registry excluded sucessfully!');
   } else {
    $this->session->set_flashdata('error', 'Not possible to exclude registry.');
   }
  } else {
   return false;
  }
 }

 public function generate_unique_code($table = NULL, $code_type = NULL, $code_size = NULL, $search_field = NULL)
 {
  do {
   $code = random_string($code_type, $code_size);
   $this->db->where($search_field, $code);
   $this->db->from($table);
  } while ($this->db->count_all_results() >= 1);
  return $code;
 }
}
