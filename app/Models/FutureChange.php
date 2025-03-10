<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Employee;

class FutureChange extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'column',
        'new_value',
        'change_date',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'change_date' => 'date',
    ];

    /**
     * Get the employee associated with the scheduled change.
     */
    public function employee() : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}


