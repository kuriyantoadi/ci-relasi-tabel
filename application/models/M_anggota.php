<?php

class M_anggota extends CI_Model{
   public function data_anggota(){
      $this->db->select('*');
      $this->db->from('anggota');
      $query = $this->db->get();
      return $query;
   }

   public function data_simpanan(){
      $this->db->select('*');
      $this->db->from('simpanan');
      $this->db->join('anggota','anggota.id_anggota = simpanan.id_anggota');
      $query = $this->db->get();
      return $query;
   }

   function join2table(){
      $this->db->select('*');
      $this->db->from('simpanan');
      $this->db->join('anggota','anggota.id_anggota = simpanan.id_anggota');
      $query = $this->db->get();
      return $query;
   }
}
