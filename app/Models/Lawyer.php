<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lawyer extends Model
{
    use SoftDeletes;
    protected $table = 'lawyers';
    protected $fillable = [
        'name',
        'email',
        'company',
        'phone',
        'document', //cpf ou cnpj
        'oab',
        'date_of_birth'
    ];

    public function adresses()
    {
        $this->hasMany(Address::class);
    }

    public function lawyer_areas()
    {
        $this->hasMany(LawyerArea::class);
    }

    public function operation_cities()
    {
        $this->hasMany(OperationCity::class);
    }
}
