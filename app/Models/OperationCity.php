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

    public function lawyers()
    {
        $this->belongsTo(Lawyer::class);
    }

    public function cities()
    {
        $this->belongsTo(City::class);
    }
}
