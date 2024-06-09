<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['item', 'user_id', 'done', 'completed_on'];

    protected $casts = ['done' => 'boolean', "user_id" => 'int'];

    protected $dates = ['completed_on'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
