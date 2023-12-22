<?php

namespace Dovutuan\Lararole\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Role extends Model
{
    use HasRelationships;

    protected $table = 'roles';

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
    public function roleScreens(): HasMany
    {
        return $this->hasMany(config('lararole.models.role_screen'));
    }

    /**
     * @return BelongsToMany
     */
    public function screens(): BelongsToMany
    {
        return $this->belongsToMany(config('lararole.models.screen'), config('lararole.tables.role_screens'));
    }

    /**
     * @return HasMany
     */
    public function userRoles(): HasMany
    {
        return $this->hasMany(config('lararole.models.user_role'));
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(config('lararole.models.user'), config('lararole.tables.user_roles'));
    }
}
