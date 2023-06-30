<?php

namespace App\Models;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = 'cours';
    protected $fillable=['nomCours','courpdf','IdModel'];
    public function module()
    {
        return $this->belongsTo(Module::class, 'IdModel');
    }
    
}
