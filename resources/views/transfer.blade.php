@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
      <div>
        <h1 class="text-xl">Transfer</h1>
        <a href="/">back</a>
      </div>
      <div class="border-2 border-blue-900 p-10 m-12 mt-12 w-[35rem] h-[40vh] rounded-2xl">
        <div class="flex justify-center ">
          <form action="POST">
            <div>
              <label for="from">from</label>
              <input type="text" class="border-2 border-blue-900" >
            </div>
            <div>
              <label for="from">to</label>
              <input type="text" class="border-2 border-blue-900" >
            </div>
            <div>
              <label for="from">Nominal</label>
              <input type="text" class="border-2 border-blue-900" >
            </div>

            
            
          </form>
        </div>
        <div class="mt-[7rem]">
          <div><a href="/" class="p-3 bg-green-500 rounded-xl">Kirim</a></div>
        </div>
      </div>
    </div>
@endsection
