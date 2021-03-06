<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    // protected $fillable = ['title', 'body'];
    // protected $guarded = [];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function addComment($body) {
        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters) {
        if(isset($filters['month']) && $month = $filters['month']) {
            // $query->whereMonth('created_at', Carbon::parse($month)->month);
            $query->whereMonth('created_at', Carbon::parse('first day of ' . $month)->month);
        }

        if(isset($filters['year']) && $year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives() {
        return static::selectRaw('year(created_at) as year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
