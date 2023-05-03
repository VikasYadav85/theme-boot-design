<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class VendorModel extends Model
{
    use SoftDeletes, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'full_name',
        'user_name',
        'email',
        'contact',
        'company',
        'country',
        'customer_type', 

        'status', 
        'birth_date', 
        'mobile', 
        'website', 
        'language', 
        'gender', 
        'contact_option', 
        'address_line1', 
        'address_line2', 
        'postcode', 
        'city', 
        'state', 
        'country', 
        'twitter', 
        'facebook',

        'instagram', 
        'github', 
        'codepen', 
        'stack',  

    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

}
