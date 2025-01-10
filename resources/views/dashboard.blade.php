@extends('layouts.app')
@section('content')       

<div class="page-content space-top p-b65">

        <div class="container py-0">


            <div class="line-5 text-secondary dz-content">
                <h2>Welcome to Dashboard...</h2>
                <br/>

                <form action="{{route('logout')}}" method="post">
                    @csrf
                    
                    <button type="submit">Logout</button>
                </form>
                
               
            </div>

        </div>
    </div>
@endsection
