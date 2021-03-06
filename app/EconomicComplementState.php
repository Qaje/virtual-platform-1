<?php

namespace Muserpol;

use Illuminate\Database\Eloquent\Model;

class EconomicComplementState extends Model
{
    protected $table = 'eco_com_states';
    protected $fillable = [
  		   'eco_com_state_type_id',
            'name'
  	];

    protected $guarded = ['id'];
    public $timestamps=false;
    public function economic_complement_state_type()
    {
    	return $this->belongsTo(EconomicComplementStateType::class);
    }
    public function economic_complements()
    {
    	return $this->hasMany(EconomicComplement::class);
    }
}
