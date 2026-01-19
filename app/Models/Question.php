<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'body',
        'views',
        'answers',
        'votes',
        'best_answer_id',
        'user_id',
    ];

    protected $casts = [
        'views' => 'integer',
        'answers' => 'integer',
        'votes' => 'integer',
        'best_answer_id' => 'integer',
        'user_id' => 'integer',
    ];

    // Чтобы роуты вида /questions/{question} использовали slug
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Таблицу answers сделаем позже (тема 197), но связь можно объявить уже сейчас
    /*public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }*/
}
