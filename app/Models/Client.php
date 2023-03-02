<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = ['Société', 'Téléphone', 'Email', 'Adresse', 'TVA', 'Factures', 'created_at', 'updated_at'];
}
