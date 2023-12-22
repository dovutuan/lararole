<?php

namespace Dovutuan\Lararole\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Screen extends Model
{
    protected $table = 'screens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'is_active'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<string>
     */
    protected $hidden = [
        'pivot',
        'laravel_through_key'
    ];

    /**
     * @return HasMany
     */
    public function roleScreens(): HasMany
    {
        return $this->hasMany(config('lararole.models.role_screen'));
    }

    /**
     * @return HasMany
     */
    public function screenPermissions(): HasMany
    {
        return $this->hasMany(config('lararole.models.screen_permission'));
    }

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(config('lararole.models.role'), config('lararole.tables.role_screens'));
    }

    /**
     * @return BelongsToMany
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(config('lararole.models.permission'), config('lararole.tables.screen_permissions'));
    }
}
