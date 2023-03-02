<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'factures';
    protected $fillable = ['Réf', 'Titre', 'Prix', 'TVA', 'Total', 'Client', 'created_at', 'updated_at'];
}
