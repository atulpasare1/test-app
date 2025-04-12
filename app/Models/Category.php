<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Specify table name if it's not plural
    protected $primaryKey = 'id'; // Specify the primary key
    protected $fillable = [
        'name',
        'code',
        'slug',
        'short_description',
        'description',
        'image_path',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // Relationships
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
}
