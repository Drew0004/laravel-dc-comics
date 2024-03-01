<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
        'artists',
        'writers'];
}
