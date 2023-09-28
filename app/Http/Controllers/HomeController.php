<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use function Laravel\Prompts\search;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home.index', compact('products'));
    }
    public function contactUs()
    {
        return view('home.contact-us');
    }

    public function aboutUs()
    {
        return view('home.about-us');
    }
    public function blog()
    {
        return view('home.blog');
    }
    public function shop()
    {
        $products = Product::query();
        if ($key = \request('search'))
        {
            $products->where('name','LIKE',"%{$key}%")
                ->orWhere('body','LIKE',"%{$key}%")
                ->orWhere('category','LIKE',"%{$key}%");
        }
        $products = $products->latest()->paginate(6);
        $categories = Category::categoriesTree();
        return view('home.shop', compact('products','categories'));
    }

    public function comparison()
    {
        $products = Product::all();
        $all[] = session()->get('item');
        foreach ($all as $row)
        {
            $p = $products->find($row);
        }
        return view('home.comparison', compact('p'));
    }
    public function compare($id)
    {
        $value = session()->get('item');
        if ($value == null || count($value) <= 3)
        {
            if ($value == null)
            {
            session()->push('item',$id);
            alert()->success('اولین محصول','برای مقایسه اضافه شد');
            return back();
            }else{
                session()->push('item',$id);
                alert()->success(count($value)+1,'محصول برای مقایسه انتخاب کردید');
                return back();
            }
        }else
        {
            alert()->error('حداکثر تعداد محصول',' برای مقایسه 4 عدد است');
            return back();
        }
    }
    public function ComparisonDelete()
    {
        session()->pull('item');
        return back();
    }
    public function question()
    {
        return view('home.question');
    }
    public function card()
    {
        $total = 0;
        if (session('card') !== null)
        {

            foreach (session('card') as $id => $items)
            {
                $total += $items['prise'] * $items['quantity'];
            }

        }
        return view('home.card', compact('total'));
    }
    public function sell($id)
    {
        $product = Product::findOrFail($id);
        $card = session()->get('card',[]);

        if(isset($card[$id]))
        {
            $card[$id]['quantity']++;
            alert()->success('محصول','به سبد خرید افزوده شد');
        }else{
            $card[$id] = [
                'product_name' => $product->name,
                'prise'        => $product->prise,
                'photo'        => $product->images[0],
                'quantity'     => 1
            ];
        }
        session()->put('card', $card);
            alert()->success('محصول','به سبد خرید افزوده شد');
        return back();
    }

    public function sellDelete()
    {
        session()->pull('card',);
        return back();
    }
    public function singlePage()
    {
        return view('home.single-page');
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        $product->visit++;
        $product->save();
        $products = Product::latest()->where('category',$product->category)->get();
        return view('home.single-product', compact('products','product'));
    }
}
