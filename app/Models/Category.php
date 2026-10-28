<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name'];

    public function texts(): HasMany
    {
        return $this->hasMany(Texts::class);
    }
}
