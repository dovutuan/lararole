<?php

namespace Dovutuan\Lararole\App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleScreen extends Model
{
    protected $table = 'role_screens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['role_id', 'screen_id'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
