<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metabolites  extends Model{

	protected $table = 'secondary_metabolites';
	protected $primaryKey = 'secMetID';
	public $timestamps = false;

	protected $fillable = [];

	protected $hidden = [];

}