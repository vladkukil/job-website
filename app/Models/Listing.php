<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\String\s;

class Listing extends Model
{
    protected $fillable = ['title','user_id', 'logo', 'company', 'location', 'website', 'email', 'tags', 'description'];

    use HasFactory;

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');

        }
    }

    //Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
 //TODO Create a search by locations and companies.
