<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
    protected $table = 'addresses';
    protected $fillable = [
        'lawyer_id',
        'address1',
        'number',
        'address2',
        'city_id',
        'zip_code'
    ];

    public static $rules = [
        'lawyer_id' => 'required',
        'address1' => 'required',
        'number' => 'required',
        'city_id' => 'required|integer',
        'zip_code' => 'required|integer'
    ];

    public function messages()
    {
        return [
            'lawyer_id.required' => 'O parâmetro "lawyer_id" é obrigatório',
            'address1.required' => 'O parâmetro "address1" é obrigatório',
            'number.required' => 'O parâmetro "number" é obrigatório',
            'city_id.required' => 'O parâmetro "city_id" é obrigatório',
            'city_id.integer' => 'O parâmetro "city_id" precisa ser um inteiro',
            'zip_code.required' => 'O parâmetro "zip_code" é obrigatório',
            'zip_code.integer' => 'O parâmetro "zip_code" precisa ser um inteiro',
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
