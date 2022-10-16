<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;

    protected $fillable = ["name", "password", "field", "salary", "cpf", "rg", "atribuitions", "start_on_company", "birthdate"];

    public static function getAll(): Collection
    {
        return parent::get();
    }
}
