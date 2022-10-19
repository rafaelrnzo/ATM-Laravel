@extends('layouts.app')

@section('content')
    <div class=" flex justify-center text-center  ">
        <div class="bg-white border-2 border-blue-900 rounded-xl m-10 p-10 ">
            <div class=""> 
                <h1 class="text-4xl">
                    Menu
                </h1>
            </div>  
            <div class=" p-10 m-4 mt-1">
                <div class="border-2 m-2 p-2 border-blue-900 hover:bg-blue-300"><a href="/saldo">Cek Saldo</a></div>
                <div class="border-2 m-2 p-2 border-blue-900 hover:bg-blue-300"><a href="/wd">WIthDraw</a></div>
                <div class="border-2 m-2 p-2 border-blue-900 hover:bg-blue-300"><a href="/transaksi">Transaksi</a></div>
                <div class="border-2 m-2 p-2 border-blue-900 hover:bg-blue-300"><a href="/transfer">Transfer</a></div>

            </div>
        </div>
        
    </div>
@endsection
