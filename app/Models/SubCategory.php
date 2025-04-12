<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories'; // Specify table name if it's not plural
    protected $primaryKey = 'id'; // Specify the primary key
    protected $fillable = [
        'name',
        'code',
        'slug',
        'category_id',
        'sub_category_type_id',
        'short_description',
        'description',
        'image_path',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
