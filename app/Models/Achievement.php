<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Achievement
 * 
 * @property int $id
 * @property int $profile_id
 * @property string $title
 * @property string|null $issuer
 * @property string|null $year
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Achievement extends Model
{
	use SoftDeletes;
	protected $table = 'achievements';

	protected $casts = [
		'profile_id' => 'int'
	];

	protected $fillable = [
		'profile_id',
		'title',
		'issuer',
		'year',
		'description'
	];
	public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
