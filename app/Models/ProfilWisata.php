<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ProfilWisata extends Model
{
    use HasFactory,Sluggable;

    protected $guarded =[
        "id"
    ];

    // protected $table = 'multiuploads';
    // protected $primaryKey = 'id';
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }

    public function foto(){
        return $this->hasMany(Foto::class);
    }

    public function video(){
        return $this->hasMany(video::class);
    }

    public function koleksi(){
        return $this->hasMany(koleksi::class);
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function scopeFilter($query, array $filter){
        $query->when($filter['kategori'] ?? false, function($query, $filter){
            return $query->where('categories.nama', $filter)
                        ->orWhere('categories.slug', $filter);
        });

        $query->when($filter['search'] ?? false, function($query, $filter){
            return $query->where('profil_wisatas.nama', 'like', '%' . $filter . '%')
                        ->orWhere('profil_wisatas.slug', 'like', '%' . $filter . '%');
        });
    }
}
