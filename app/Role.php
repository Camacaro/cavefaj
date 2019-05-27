<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	protected $fillable = [
        'id', 'name', 'display_name', 'description',
    ];
    
	protected $guarded = ['id','created_at','updated_at'];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function permisos(){
        return $this->belongsToMany(Permission::class);
    }
}