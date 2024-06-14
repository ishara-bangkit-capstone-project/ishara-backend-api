<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'url', 'path_name', 'file_name', 'extension', 'size'];

    public function getFullPathAttribute()
    {
        return "{$this->url}{$this->path_name}";
    }
}
