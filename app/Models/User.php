<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
    ];
    protected $appends = [
        'posting_count',
        'agency_agent_count',
        'agency_agent_for_sale_count',
        'agency_agent_for_rent_count'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id', 'id');
    }

    public function postings()
    {
        return $this->hasMany(Posting::class, 'user_id', 'id');
    }

    protected function getPostingCountAttribute()
    {
        $count = Posting::where('user_id', $this->id)->count();
        return $count;
    }

    protected function getAgencyAgentCountAttribute()
    {
        $agentCount = User::where('role_id', 4)->where('agency_id', $this->id)->count();
        return $agentCount;
    }

    protected function getAgencyAgentForSaleCountAttribute()
    {
        $agents = User::where('role_id', 4)->where('agency_id', '!=', null)->get();
        $forSale = 0;
        foreach ($agents as $key => $value) {
            $forSale += Posting::where('user_id', $value->id)->whereRelation('purpose', 'name', 'Sale')->count();
        }
        return $forSale;
    }

    protected function getAgencyAgentForRentCountAttribute()
    {
        $agents = User::where('role_id', 4)->where('agency_id', '!=', null)->get();
        $forRent = 0;
        foreach ($agents as $key => $value) {
            $forRent += Posting::where('user_id', $value->id)->whereRelation('purpose', 'name', 'Rent')->count();
        }
        return $forRent;
    }
}
