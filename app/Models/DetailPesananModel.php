<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetailPesananModel extends Model{
    protected $table = 'tb_detail_pesanan';
    // Uncomment below if you want add primary key
    protected $primarykey="id";
    protected $allowedFields = ['user_id','pesanan_id','menu_id','jumlah'];
}