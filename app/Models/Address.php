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

    public function lawyers()
    {
        $this->belongsTo(Lawyer::class);
    }

    public function cities()
    {
        $this->belongsTo(City::class);
    }
}
