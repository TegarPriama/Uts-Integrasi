<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WashService extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'duration'];

    public static function allServices()
    {
        return [
            1 => ['id' => 1, 'name' => 'Cuci Cepat', 'price' => 30000, 'duration' => '15 menit'],
            2 => ['id' => 2, 'name' => 'Cuci Lengkap', 'price' => 50000, 'duration' => '30 menit'],
            3 => ['id' => 3, 'name' => 'Cuci + Poles', 'price' => 80000, 'duration' => '45 menit'],
        ];
    }

    public static function getServiceById($id)
    {
        $services = self::allServices();

        return $services[$id] ?? null;
    }
}
