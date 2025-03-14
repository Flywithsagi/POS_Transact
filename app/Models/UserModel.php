<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Nama tabel
    protected $primaryKey = 'user_id'; // Primary key pada tabel tersebut
    /**
     * 
     * @var array
     */
    protected $fillable = ['level_id', 'username', 'nama','password'];
}
