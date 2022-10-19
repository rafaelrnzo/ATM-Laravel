@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
      <div>
        <h1 class="text-xl">Cek Saldo</h1>
        <a href="/">back</a>
      </div>
      <div class="border-2 border-blue-900 p-10 m-12 mt-12 w-[35rem] h-[40vh] rounded-2xl">
        <div>
          <h1 class="text-3xl">{{Auth::user()->name}}</h1>
          <h1 class="text-xl m-2 ml-0">{{Auth::user()->rekening}}</h1>
        </div>
        <div class="mt-[7rem]">
          <h1>Saldo</h1>
          <h1>Rp1.000.000.00</h1>
        </div>
      </div>
    </div>
@endsection
