<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \App\Traits\ExcelExport;
class User extends Authenticatable
{
    use Notifiable , ExcelExport;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role', 'delegate_role', 'end_date', 'sub_role_id', 'last_login', 'active', 'delegate_by', 'delegate_at'];
    protected $guarded = ['password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];


    public function war_report()
    {
        return $this->hasMany('App\war_report', 'war_id');
    }

    public function user_login_history()
    {
        return $this->hasMany('App\user_login_history', 'user_id');
    }

    public function role_obj()
    {
        return$this->belongsTo('App\roles', 'role');
    }

    public function role_sub()
    {
        return$this->belongsTo('App\role_sub', 'sub_role_id');
    }

    public function AuditLogs()
    {
        return$this->hasMany('App\AuditLogs', 'user_id');
    }

    public function User()
    {
        return $this->hasMany('App\User', 'user_id');
    }

    

    public function PublicationComment()
    {
        return$this->hasMany('App\PublicationComment', 'created_by');
    }
}
