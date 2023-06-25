<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Td extends Model
{
    use HasFactory;
    protected $fillable=['nomTd','tdpdf','IdModul'];
    public function module()
    {
        return $this->belongsTo(Module::class, 'IdModul');
    }
}
