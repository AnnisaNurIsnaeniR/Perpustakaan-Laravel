<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class pengembalianBukuModel extends Model
{
   
    protected $table = 'pengembalian_buku';
    protected $primarykey = 'id';
    public $timestamps = false;
	 protected $fillable = [
        	'id_peminjaman_buku','tanggal_pengembalian','denda'
    	 ];

}
