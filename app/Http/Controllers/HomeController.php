<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Stripe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $product = Product::all();
        $comment = Comment::all();
        $reply = Reply::all();
        return view('home.userpage', compact('product', 'comment', 'reply'));
    }
    public function redirect()
    {
        $role = Auth::user()->role;

        if ($role == 'artisan' && Auth::id()) {
            $total_product = Product::all()->count();
            $total_order = Order::all()->count();
            $total_customer = User::where('role', '=', 'customer')->count();

            $orders = Order::all();
            $total_revenue = 0;
            foreach ($orders as $order) {
                $total_revenue += $order->price;
            }
            $total_delivered = Order::where('delivery_status', '=', 'delivered')->get()->count();
            $total_processing = Order::where('delivery_status', '=', 'processing')->get()->count();
            return view('users.artisans.home', compact('total_product', 'total_order', 'total_customer', 'total_revenue', 'total_delivered', 'total_processing', 'orders'));
        }
        if ($role == 'customer') {   //home + dashboard //ghi dashbord
            $product = Product::all();
            $comment = Comment::orderby('id', 'desc')->get();
            $reply = Reply::all();
            return view('home.userpage', compact('product', 'comment', 'reply'));
        }
        if ($role == 'deliveryman') {   //home + dashbord //ghi dashboard
            $product = Product::all();
            $comment = Comment::orderby('id', 'desc')->get();
            $orders = Order::all();
            return view('users.deliverymans.home', compact('product', 'comment', 'orders'));
        }
    }

    public function product_details($id)
    {
        $product = Product::find($id);
        return view('home.product_details', compact('product'));
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $product = Product::find($id);
            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->name_prod;
            $cart->quantity = $request->quantity;
            $cart->price = $product->price * $request->quantity;
            $cart->image = $product->image;

            $cart->prod_id = $product->id;
            $cart->user_id = $user->id;
            $cart->save();
            return redirect()->back()->with('message', 'Product added to cart');
        } else {
            return redirect('login');
        }
        return view('home.product_details', compact('product'));
    }



    public function show_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('home.show_cart', compact('cart'));
        } else {
            return redirect('login');
        }
    }
    public function remove_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Product deleted successfuly');
    }
    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->image = $data->image;

            $order->prod_id = $data->prod_id;
            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->save();
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('message', 'We Received Your  Order , We Will connect with you soon...');
    }
    public function stripe($totalprice)
    {
        return view('home.stripe', compact('totalprice'));
    }

    public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $totalprice,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);
        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->image = $data->image;

            $order->prod_id = $data->prod_id;
            $order->payment_status = 'Paid';
            $order->delivery_status = 'processing';
            $order->save();
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        Session::flash('success', 'Payment successful!');

        return back();
    }


    public function show_order()
    {
        if (Auth::id()) {
            $user = Auth::User();
            $userid = $user->id;
            $order = Order::where('user_id', '=', $userid)->get();

            return view('home.order', compact('order'));
        } else {
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order = Order::find($id);
        $order->delivery_status = 'You Canceled the Order';
        $order->save();
        return  redirect()->back();
    }

    public function add_comment(Request $request)
    {
        if (Auth::id()) {
            $comment = new Comment;
            $comment->name = Auth::user()->name;
            $comment->user_id = Auth::user()->id;
            $comment->comment = $request->comment;
            $comment->save();
            return  redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function add_reply(Request $request)
    {
        if (Auth::id()) {
            $reply = new Reply();
            $reply->name = Auth::user()->name;
            $reply->user_id = Auth::user()->id;
            $reply->comment_id = $request->commentId;
            $reply->reply = $request->reply;
            $reply->save();
            return  redirect()->back();
        } else {
            return redirect('login');
        }
    }


    public function product_search(Request $request)
    {
        $comment = Comment::orderby('id', 'desc')->get();
        $reply = Reply::all();
        $search_text = $request->search;

        $product = Product::where('name_prod', 'LIKE', "%$search_text%")
            ->paginate(10);

        $artisan = User::where('role', '=', 'artisan')->where('name', 'LIKE', "%$search_text%")
            ->paginate(10);

        return view('home.userpage', compact('product', 'reply', 'comment', 'artisan'));
    }






    public function products(Request $request)
    {
        $product = Product::all();
        $comment = Comment::all();
        $reply = Reply::all();
        return view('home.all_product', compact('product', 'comment', 'reply'));
    }







    public function search_product(Request $request)
    {
        $comment = Comment::orderby('id', 'desc')->get();
        $reply = Reply::all();
        $serach_text = $request->search;
        $product = Product::where('name_prod', 'LIKE', "%$serach_text%")
            ->paginate(10);
        return view('home.all_product', compact('product', 'reply', 'comment'));
    }






    public function artisan_profile($id)
    {
        $artisan = User::find($id);

        if (!$artisan) {
            return redirect()->route('error.page');
        }

        $product = Product::where('user_id', $artisan->id)->paginate(10);

        return view('home.artisan_profile', compact('artisan', 'product'));
    }
}
