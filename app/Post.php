<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $guarded  = ['id'];

    

   public function comments(){
       
       return $this->hasMany(Comment::class);

   }


   public function tags(){

    return $this->belongsToMany(Tag::class);

}

   public function user(){

    return $this->belongsTo(User::class);

}

    public function scopeFilter($query, $filters)
            {

            if (isset($filters['month'])) 
            {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
            }


            if (isset($filters['year'])) 
            {
            $query->whereYear('created_at', $filters['year']);
            }


            if (isset($filters['recent']))
            {
            $query->where( 'created_at', '>', Carbon::now()->subDays(14));
            }
    }



    public static function archives(){
       
        return static::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')

        ->groupBy('year','month')

        ->orderByRaw('min(created_at) desc')

        ->get()->

        toArray();

}


}