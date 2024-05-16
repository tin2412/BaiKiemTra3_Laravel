<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhansu extends Model
{
    use HasFactory;
    protected $table = 'nhansu';
    public $timestamps = false;
    protected $fillable = [
        'hoten','gioithieu', 'bangcap', 'thongtingioithieu', 'kinang', 'kinhnghiem'
    ];
    public function quanlynhansu()
    {
        return $this->belongsTo(quanlynhansu::class);
    }
  

}
