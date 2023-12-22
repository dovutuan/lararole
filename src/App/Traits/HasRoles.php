<?php

namespace Dovutuan\Lararole\App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

trait HasRoles
{
    use HasRelationships;

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
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(config('lararole.models.role'), config('lararole.tables.user_roles'));
    }

    /**
     * @return HasManyDeep
     */
    public function screens(): HasManyDeep
    {
        return $this->hasManyDeep(
            config('lararole.models.screen'),
            [
                config('lararole.models.user_role'),
                config('lararole.models.role_screen')
            ],
            ['user_id', 'role_id', 'id'],
            ['id', 'role_id', 'screen_id']
        )
            ->whereIsActive(true)
            ->groupby(config('lararole.tables.user_roles') . '.user_id', config('lararole.tables.screens') . '.id');
    }

    /**
     * @return HasManyDeep
     */
    public function permissions(): HasManyDeep
    {
        return $this->hasManyDeep(
            config('lararole.models.permission'),
            [
                config('lararole.models.user_role'),
                config('lararole.models.role_screen'),
                config('lararole.models.screen_permission'),
            ],
            ['user_id', 'role_id', 'permission_id', 'id'],
            ['id', 'role_id', 'screen_id', 'permission_id']
        )->groupby(config('lararole.tables.user_roles') . '.user_id', config('lararole.tables.permissions') . '.id');
    }
}
