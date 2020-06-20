<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class LawyerArea extends Pivot
{
    use SoftDeletes;
    protected $table = 'lawyer_areas';
    protected $fillable = [
        'lawyer_id',
        'area_id',
    ];

    public static $rules = [
        'lawyer_id' => 'required',
        'area_id' => 'required',
    ];

    public function messages()
    {
        return [
            'lawyer_id.required' => 'O parâmetro "lawyer_id" é obrigatório',
            'area_id.required' => 'O parâmetro "area_id" é obrigatório',
        ];
    }

    public function lawyers()
    {
        $this->belongsTo(Lawyer::class);
    }

    public function areas()
    {
        $this->belongsTo(Area::class);
    }
}
