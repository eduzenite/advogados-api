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

    public function operation_cities()
    {
        $this->hasMany(OperationCity::class);
    }

    public function addresses()
    {
        $this->hasMany(Address::class);
    }
}
