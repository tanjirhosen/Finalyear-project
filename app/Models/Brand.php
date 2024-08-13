<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand, $image, $imageName, $directory, $imageUrl;

    public static function imageUpload($request){
        self::$image = $request->file('image');
        self::$imageName =  rand(1,999).'.'.self::$image->getClientOriginalName();
        self::$directory = 'uploads/brand-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;

    }

    public static function newBrand($request){
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->image = self::imageUpload($request);
        self::$brand->description = $request->description;
        self::$brand->save();
    }

    public static function updateBrand($request,$id){
        self::$brand                =  Brand::find($id);
        self::$brand->name          = $request->name;
        if($request->file('image')){
            if (file_exists(self::$brand->image)){
                unlink(self::$brand->image);
            }
            self::$brand->image = self::imageUpload($request);
        }

        self::$brand->description   = $request->description;
        self::$brand->status        = $request->status;
        self::$brand->save();
    }

    public static function deleteBrand($id){
       self::$brand =  Brand::find($id);

       if (file_exists(self::$brand->image)){
           unlink( self::$brand->image);
       }

       self::$brand->delete();

    }

}
