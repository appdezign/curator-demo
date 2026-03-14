<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\ObjectImage;

class Page extends Model
{
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'pages';

	protected $guarded = [
		'id',
		'created_at',
		'updated_at',
	];

	public function images(): MorphMany
	{
		return $this->morphMany(ObjectImage::class, 'mediable')->orderBy('order');
	}
}
