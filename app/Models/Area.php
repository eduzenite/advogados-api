<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
    use SoftDeletes;
    protected $table = 'areas';
    protected $fillable = [
        'name',
    ];

    public static $rules = [
        'name' => 'required',
    ];

    public function messages()
    {
        return [
            'name.required' => 'O parâmetro "name" é obrigatório',
        ];
    }

    public function lawyer_areas()
    {
        $this->hasMany(LawyerArea::class);
    }
}
