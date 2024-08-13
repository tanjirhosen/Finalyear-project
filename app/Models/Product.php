<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static  $product, $image, $imageName, $directory, $imageUrl,$message;

    public static function imageUpload($request){
        self::$image     = $request->file('image');
        self::$imageName = rand(1,999).'.'.self::$image->getClientOriginalName();
        self::$directory = 'uploads/product-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newProduct($request){
        self::$product                    = new Product();
        self::$product->category_id       = $request->category_id;
        self::$product->sub_category_id   = $request->sub_category_id;
        self::$product->brand_id          = $request->brand_id;
        self::$product->unit_id           = $request->unit_id;
        self::$product->name              = $request->name;
        self::$product->code              = $request->code;
        self::$product->regular_price     = $request->regular_price;
        self::$product->selling_price     = $request->selling_price;
        self::$product->stock_amount      = $request->stock_amount;
        self::$product->reorder_label     = $request->reorder_label;
        self::$product->image             = self::imageUpload($request);
        self::$product->short_description = $request->short_description;
        self::$product->long_description  = $request->long_description;
        self::$product->save();
        return self::$product;
    }
    public static function updateProduct($request,$product){
        self::$product = $product;
        self::$product->category_id     = $request->category_id;
        self::$product->sub_category_id = $request->sub_category_id;
        self::$product->brand_id        = $request->brand_id;
        self::$product->unit_id         = $request->unit_id;
        self::$product->name            = $request->name;
        self::$product->code            = $request->code;
        self::$product->regular_price   = $request->regular_price;
        self::$product->selling_price   = $request->selling_price;
        self::$product->stock_amount    = $request->stock_amount;
        self::$product->reorder_label   = $request->reorder_label;
        if($request->file('image')){
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
            self::$product->image = self::imageUpload($request);
        }
        self::$product->short_description  = $request->short_description;
        self::$product->long_description   = $request->long_description;
        self::$product->save();
    }

    public static function deleteProduct($id){
        self::$product =  Product::find($id);
        if (file_exists(self::$product->image)){
            unlink( self::$product->image);
        }
        self::$product->delete();
    }

    public static function updateFeaturedStatus($id){
        self::$product =  Product::find($id);

        if (self::$product->featured_status == 1)
        {
            self::$product->featured_status = 0;
            self::$message = 'Product Status Explore';
        }
        else {
            self::$product->featured_status = 1;
            self::$message = 'Product Status New Arrival';
        }
        self::$product->save();
        return self::$message;
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function sub_category(){
        return $this->belongsTo(SubCategory::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function othersImage(){
        return $this->hasMany(OthersImage::class);
    }


}
