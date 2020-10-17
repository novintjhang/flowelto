<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Category;
use App\Cart;
use App\User;
use App\Transaction;
use App\TransactionDetail;
use App\Product;

class CartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Cart::where('user_id', '=', Auth::User()->id)->with('product')->get();
        if(Auth::user()) $data['user_role'] = User::role();
        $data['date'] = Carbon::now()->format('l, d F Y');
        $data['categories'] = Category::all();
        return view('pages.cart')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'productId' => 'required',
            'quantity' => 'required|integer|min:1',
        ));

        $cart = Cart::where('user_id', '=', Auth::User()->id)->where('product_id', '=', $request->productId)->first();
        if($cart){
            $cart->quantity += $request->quantity;
        }else{
            $cart = new Cart();
            $cart->user_id = Auth::User()->id;
            $cart->product_id = $request->productId;
            $cart->quantity = $request->quantity;
        }
        $cart->save();
        
        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'quantity' => 'required|numeric|min:0',
        ));

        $item = Cart::find($id);

        if($item && $item->user_id == Auth::User()->id){
            if($request->quantity == 0){
                $item->delete();
            }else{
                $item->quantity = $request->quantity;
                $item->save();
            }
        }

        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkout(){
        $items = Cart::where('user_id', '=', Auth::User()->id)->get();
        if(count($items) > 0){
            $transaction = new Transaction();
            $transaction->user_id = Auth::User()->id;
            $transaction->save();
            foreach($items as $item){
                $transaction_detail = new TransactionDetail();
                $transaction_detail->transaction_id = $transaction->id;
                $transaction_detail->product_id = $item->product_id;
                $transaction_detail->quantity = $item->quantity;
                $transaction_detail->save();           
                $item->delete();
            }
        }

        return redirect()->route('transaction.index');
    }
}
