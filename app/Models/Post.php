<?php

namespace App\Models;

use Clockwork\Storage\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Post extends Model
{
  use HasFactory;
  //protected $fillable = ["title", "excerpt", "body"];
  protected $guarded = ['id'];
  protected $with = ['user', 'category', 'city'];

  public function scopeFilter($query, array $filters)
  {
    $query->when($filters['search'] ?? false, function ($query, $search) {
      return $query->where(function ($query) use ($search) {
        $query->where('title', 'like', '%' . $search . '%')
          ->orWhere('body', 'like', '%' . $search . '%');
      });
    });

    $query->when($filters['city'] ?? false, function ($query, $city) {
      return $query->whereHas('city', function ($query) use ($city) {
        $query->where('slug', $city);
      });
    });

    $query->when(
      $filters['user'] ?? false,
      fn ($query, $user) =>
      $query->whereHas('user', fn ($query) =>
      $query->where('name', $user))
    );
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function city()
  {
    return $this->belongsTo(City::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
