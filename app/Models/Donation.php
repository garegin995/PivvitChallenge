<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'donorName',
        'campaignID',
        'amount'
    ];
    
    public static function getTableName() {
        return (new self)->getTable();
    }
}
