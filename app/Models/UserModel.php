<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'tb_user';
    //Uncoment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama','username','password','role'];
}