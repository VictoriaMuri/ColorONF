<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Order extends Model
{
    use HasFactory;

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function typeservice(){
        return $this->belongsTo(TypeService::class);
    }

    public function design(){
        return $this->belongsTo(Design::class);
    }

    public function otherservice(){
        return $this->belongsTo(OtherService::class);
    }

    public function graph(){
        return $this->belongsTo(Graph::class);
    }
}
