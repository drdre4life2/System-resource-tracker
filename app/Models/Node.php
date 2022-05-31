<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;
    protected $fillable  = ['system_uptime', 'total_ram', 'allocated_ram', 'total_disk', 'allocated_disk'];
}
