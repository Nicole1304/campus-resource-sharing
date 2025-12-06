<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowRequest extends Model
{
    protected $fillable = ['resource_id', 'borrower_id', 'status'];

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function borrower()
    {
        return $this->belongsTo(User::class, 'borrower_id');
    }
}