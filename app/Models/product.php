<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','year', 'price','images',
        'visibility','tipe_mesin',
        'busi','kopling','sistem_bahan_bakar',
        'tipe_rangka','ukuran_ban_belakang','ukuran_ban_depan','sistem_pengereman'
    ];

    public function category() {
        return $this->belongsTo(category::class);
    }
}
