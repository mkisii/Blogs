<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    // protected $timestamps = true;

    protected $fillable = [
        'name',
        'founded',
        'description',
    ];
// One to Many Relationship
    public function carmodels()
    {
        return $this -> hasMany(CarModel::class);
    }

    // One to One Relationship

    public function headquarter()
    {
        return $this->hasOne(Headquarter::class);
    }

    // Has many relationship

    public function engines()

    {
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //Foreign key on CarModel table
            'model_id' //Foreign Key on Engine table
        );
    }

    //One Through relationship
    public function productionDate()
    {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

}
