<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; //usando o eloquent ORM para facilitar interação com a DB

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['title', 'description', 'status']; //descreve que estes campos são preenchiveis

    //definindo propriedades protegidas
    protected $title;
    protected $description;
    protected $status;
}
