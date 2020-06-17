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

    public function lawyers()
    {
        $this->belongsTo(Lawyer::class);
    }

    public function areas()
    {
        $this->belongsTo(Area::class);
    }
}
