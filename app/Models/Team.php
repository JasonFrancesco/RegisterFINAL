<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'tb_team';
    protected $primaryKey = 'team_id';
    protected $fillable = ['name'];
}
