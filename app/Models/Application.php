<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email_id',
        'mobile_number',
        'address',
        'gender',
        'classX_board',
        'classX_percentage',
        'classX_passing',
        'classXII_board',
        'classXII_percentage',
        'classXII_passing',
        'graduation_board',
        'graduation_percentage',
        'graduation_passing',
        'masters_board',
        'masters_percentage',
        'masters_passing',
        'preferred_location',
        'expected_ctc',
        'current_ctc',
        'notice_period',
        'hindi',
        'hindi_read',
        'hindi_write',
        'hindi_speak',
        'gujrati',
        'gujrati_read',
        'gujrati_write',
        'gujrati_speak',
        'english',
        'english_read',
        'english_write',
        'english_speak',
        'php',
        'php_type',
        'mysql',
        'mysql_type',
        'laravel',
        'laravel_type',
        'oracle',
        'oracle_type',

    ];
}
