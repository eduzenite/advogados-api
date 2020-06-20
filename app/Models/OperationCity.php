<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class OperationCity extends Pivot
{
    use SoftDeletes;
    protected $table = 'operation_cities';
    protected $fillable = [
        'lawyer_id',
        'city_id',
    ];

    public static $rules = [
        'lawyer_id' => 'required',
        'city_id' => 'required',
    ];

    public function messages()
    {
        return [
            'lawyer_id.required' => 'O parâmetro "lawyer_id" é obrigatório',
            'city_id.required' => 'O parâmetro "city_id" é obrigatório',
        ];
    }

    public function lawyers()
    {
        $this->belongsTo(Lawyer::class);
    }

    public function cities()
    {
        $this->belongsTo(City::class);
    }
}
