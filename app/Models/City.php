<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $table = 'cities';
    protected $fillable = [
        'city',
        'state',
        'flag',
        'country',
    ];

    public static $rules = [
        'city' => 'required',
        'state' => 'required',
        'country' => 'required',
    ];

    public function messages()
    {
        return [
            'city.required' => 'O parâmetro "city" é obrigatório',
            'state.required' => 'O parâmetro "state" é obrigatório',
            'country.required' => 'O parâmetro "country" é obrigatório',
        ];
    }

    public function operation_cities()
    {
        $this->hasMany(OperationCity::class);
    }

    public function addresses()
    {
        $this->hasMany(Address::class);
    }
}
