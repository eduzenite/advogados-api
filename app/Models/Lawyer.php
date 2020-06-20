<?php

namespace App\Models;

use DateTime;
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
        'photo',
        'date_of_birth'
    ];

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:lawyers,email|email',
            'document' => 'required',
            'oab' => 'required',
            'photo' => 'image:jpeg, png, bmp, gif',
            'date_of_birth' => 'required|date_format:"Y-m-d"',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O parâmetro "name" é obrigatório',
            'email.required' => 'O parâmetro "email" é obrigatório',
            'email.unique' => 'O e-mail já está cadastrado no sistema',
            'email.email' => 'O e-mail informado não é válido',
            'document.required' => 'O parâmetro "document" é obrigatório',
            'oab.required' => 'O parâmetro "oab" é obrigatório',
            'photo.image' => 'O formato de imagem não é aceito',
            'date_of_birth.required' => 'O parâmetro "date_of_birth" é obrigatório',
            'date_of_birth.date_format' => 'O parâmetro "date_of_birth" precisa ser uma data válida',
        ];
    }

    public function addresses()
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
