<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'point',
        'area_id',
        'spot',
        'entry_id',
        'level_id',
        'depth_id',
        'month_id',
        'shop',
        'comment',
        'evaluation_id',
        'image_url',
        'user_id',
        
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('area', 'entry', 'level' , 'depth' , 'month' , 'user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    
    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
    
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    
    public function depth()
    {
        return $this->belongsTo(Depth::class);
    }
    
    public function month()
    {
        return $this->belongsTo(Month::class);
    }
    
    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
