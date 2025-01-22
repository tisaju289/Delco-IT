<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'deadline',
        'assigned_to',
        'team_leader',
        'created_by',
        
    ];

    public function assignedTo()
    {
        return $this->belongsTo(Employee::class, 'assigned_to');
    }

    // Relationship for created_by
    public function createdBy()
    {
        return $this->belongsTo(Employee::class, 'created_by');
    }
}
