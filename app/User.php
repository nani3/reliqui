<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor\Doctor');
    }

    public function patient()
    {
        return $this->hasOne('App\Models\Patient\Patient');
    }

    public function staff()
    {
        return $this->hasOne('App\Models\Setting\Staff\Staff');
    }

    public function appointment()
    {
        return $this->hasMany('App\Models\Appointment\Appointment');
    }

    public function medicalRecord()
    {
        return $this->hasMany('App\Models\MedicalRecord\MedicalRecord');
    }
}
