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

    public function lawyer_areas()
    {
        $this->hasMany(LawyerArea::class);
    }
}
