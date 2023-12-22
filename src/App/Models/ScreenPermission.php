<?php

namespace Dovutuan\Lararole\App\Models;

use Illuminate\Database\Eloquent\Model;

class ScreenPermission extends Model
{
    public $table = 'screen_permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['screen_id', 'permission_id'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
