<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SpecialitiesDetail
 * 
 * @property int $id
 * @property int $id_specialities
 * @property string $external_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Specialty $specialty
 *
 * @package App\Models
 */
class SpecialitiesDetail extends Model
{
	use SoftDeletes;
	protected $table = 'specialities_detail';

	protected $casts = [
		'id_specialities' => 'int'
	];

	protected $fillable = [
		'id_specialities',
		'external_link'
	];

	public function specialty()
	{
		return $this->belongsTo(Specialty::class, 'id_specialities');
	}
}
