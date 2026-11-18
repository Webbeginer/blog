<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Blog extends Model{
    use HasFactory;
    protected $fillable=[
        "title",
        "author",
        "slug",
        "content"
    ];

    protected $with= ['user', 'category']; 

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, "author_id", "id");
    }
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function scopeFilter(Builder $query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where("title", "like", "%".$search."%");
        });
        $query->when($filters['category'] ?? false, function($query, $category){
            $query->whereHas("category", function($query) use ($category){
                $query->where('slug', $category);
            });
        });
        $query->when($filters['author'] ?? false, function($query, $author){
            $query->whereHas("user", function($query) use ($author){
                $query->where('name', $author);
            });
        });
        }

    
}
