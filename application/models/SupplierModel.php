<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierModel extends CI_Model {

    public function code_create()
    {
      
      $sql    = "SELECT MAX(MID(supplierKode, 9, 4)) AS supplierKode
                  FROM supplier
                  WHERE MID(supplierKode, 3, 6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
          $query  = $this->db->query($sql);
  
          if ($query->num_rows() > 0) {
              $row    = $query->row();
              $n      = ((int) $row->supplierKode) + 1;
              $no     = sprintf("%'.04d", $n);
          } else {
              $no     = "0001";
          }
          $code    = "SP" . date('ymd') . $no;
          return $code;
    }
  
  public  function Add($post) {
  $x = $this->code_create();
  
        $arr = array(
            'supplierName' => $post['supplierName'],
            'supplierKode' => $x,
            'supplierEmail' => $post['supplierEmail'],
            'supplierNotelp' => $post['supplierNotelp'],
            'supplierNohp' => $post['supplierNohp'],
            'supplierDescription' => $post['supplierDescription']
          );

          
          $this->db->insert('supplier',$arr);
    }


   public function getdata() {
        $sql = "SELECT * FROM supplier ORDER BY supplierID DESC";
        $x =  $this->db->query($sql);
        return $x;
        
    }
}