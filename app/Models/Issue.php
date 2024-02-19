<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Issue extends Model
{
    use HasFactory;

    public function user(): HasOne
    {
        return $this->hasOne(User::class,'user_id');
    }

    public function category(): HasOneOrMany
    {
        return $this->hasOne(Category::class,'category_id');
    }

    public function level(): HasOne
    {
        return $this->hasOne(IssueLevel::class,'level_id');
    }

    public function status(): HasOne
    {
        return $this->hasOne(IssueStatus::class,'status_id');
    }
}
