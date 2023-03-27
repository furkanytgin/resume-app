<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'summary',
        'education',
        'experience',
        'skills',
    ];

    /**
     * Get the user that owns the ResumeController
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the sharedresumes for the ResumeController
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sharedresumes()
    {
        return $this->hasMany(SharedResume::class);
    }
}
