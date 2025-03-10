<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\FutureChange;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'telephone',
        'email',
        'address',
        'jobtitle',
    ];

    /**
     * Get the future changes for the employee.
     */
    public function futureChanges() : HasMany
    {
        return $this->hasMany(FutureChange::class);
    }
}
