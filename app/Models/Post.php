<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'media', 'tag_user', 'share_link', 'post_activity', 'post_location', 'user_id',
      ];


      public function user(): BelongsTo
      {
          return $this->belongsTo(User::class);
      }

      public function like_post(): HasOne
      {
          return $this->hasOne(Post::class, 'post_id', 'id');
      }
}
