<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($categorie = 0) // permet de lister les produits et les catégories puis les filtrer par categorie
    {

        $products = Product::orderBy('created_at','desc')->paginate(10) ; //liste de mes produits
        if ($categorie != 0) {
            $products = Product::where('category_id',$categorie)->orderBy('created_at','desc')->paginate(10) ;
        }
        $categories = Category::orderBy('name','desc')->get() ; // liste de mes catégories
        return view('welcome',compact('products' , 'categories')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail(Product $product) // permet d'afficher le detail du produit mais aussi les produits similaires
    {
        $products = Product::where('category_id' , $product->category_id)->orderBy('created_at','desc')->inRandomOrder()->limit(4)->get() ;
        return view ('detail',compact('product','products')) ;
    }

    /**
     * Ajouter au caddie
     * Verifier l'existence du produit
     * Mettre à jour les quantité
     */

    public function addToCart(Product $product)
    {
        //on verifie l'existence du produit dans le panier
        //Select * from Cart where user_id = ? AND product_id = $product->id->limit(0,1)

        $cart = Cart::where('user_id',Auth::user()->id)
                    ->where('product_id',$product->id)
                    ->limit(1)->get();
        dd($cart) ;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
