<?php

namespace Dovutuan\Lararole\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permission extends Model
{
    protected $table = 'permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['name'];

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
    public function permissionScreens(): HasMany
    {
        return $this->hasMany(config('lararole.models.screen_permission'));
    }

    /**
     * @return BelongsToMany
     */
    public function screens(): BelongsToMany
    {
        return $this->belongsToMany(config('lararole.models.screen'), config('lararole.tables.screen_permissions'));
    }
}
