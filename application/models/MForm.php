<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MForm extends CI_Model {

  public function leftJoin(){
    $this->db->select("lokomotif.kd_kereta as kd_keretaL, lokomotif.nama, kursi.kd_kursi, kursi.kd_gerbong, kursi.kd_kereta as kd_keretaK");
    $this->db->from("lokomotif");
    $this->db->join("kursi", "lokomotif.kd_kereta = kursi.kd_kereta", "left");

    $hasil = $this->db->get();
    return $hasil;
  }

  public function rightJoin(){
    $this->db->select("kursi.kd_kursi, kursi.kd_gerbong as kd_gerbongK, kursi.kd_kereta as kd_keretaK, gerbong.kd_gerbong as kd_gerbongG, gerbong.kd_kereta as kd_keretaG, gerbong.nama");
    $this->db->from("kursi");
    $this->db->join("gerbong", "kursi.kd_gerbong = gerbong.kd_gerbong", "right");

    $hasil = $this->db->get();
    return $hasil;
  }

  public function innerJoin(){
    $this->db->select("lokomotif.kd_kereta as kd_keretaL, lokomotif.nama as namaL, kursi.kd_kursi, kursi.kd_gerbong as kd_gerbongK, kursi.kd_kereta as kd_keretaK, gerbong.kd_gerbong as kd_gerbongG, gerbong.kd_kereta as kd_keretaG, gerbong.nama as namaG");
    $this->db->from("lokomotif");
    $this->db->join("kursi", "lokomotif.kd_kereta = kursi.kd_kereta", "inner");
    $this->db->join("gerbong", "kursi.kd_gerbong = gerbong.kd_gerbong", "inner");

    $hasil = $this->db->get();
    return $hasil;
  }
}