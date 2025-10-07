<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewHelpful extends Model
{
    use HasFactory;

    protected $fillable = ['review_id', 'user_id', 'is_helpful'];

    public function review()
    {
        return $this->belongsTo(ProductReview::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}