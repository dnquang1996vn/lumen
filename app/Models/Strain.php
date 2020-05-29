<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Strain
 *
 * @property int $id
 * @property string $name
 * @property string $code_tag
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $hidden
 * @property int $active
 * @property int $sync_status
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain whereCodeTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Strain whereSyncStatus($value)
 */
class Strain extends Model
{
    protected $fillable = [
        'name', 'code_tag', 'hidden', 'active', 'sync_status'
    ];

    protected $casts = [
        'hidden' => 'boolean',
        'active' => 'boolean',
    ];
}
