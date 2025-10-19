<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class news extends Model
{
    protected $fillable = ['judul_berita', 'slug', 'content', 'thumbnail', 'published_at'];

    public function getFormattedDateAttribute()
    {
        Carbon::setLocale('id');
        return Carbon::parse($this->published_at)->translatedFormat('d F Y,H:i');
    }

   public function getThumbnailUrlAttribute(): ?string
{
    return $this->thumbnail ? asset('storage/' . $this->thumbnail) : null;
}




    // Generate slug otomatis dari title
    protected static function booted()
    {
        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });

        static::updating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });
    }
}
