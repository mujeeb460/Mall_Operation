@extends('layouts.app')
@section('content')

<style>
            .blink {
                animation: blinker 1.5s linear infinite;
                color: red;
                font-family: sans-serif;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }

            .commission{
                font-weight: bold;
            }
        </style>

<div class="page-content">
    <div class="container">
        <div class="product-offer">
            <div class="row bg-primary py-5">
                            <div class="col-4">
                                <img src="{{asset('assets/images/photo.png')}}" width="80">
                            </div>
                            <div class="col-8 text-white">
                                <span>Username: {{auth()->user()->phone}}</span>
                                <span>Invitation code: 6884998</span>
                                <span class=""><hr width="45" height="40"></span>
                                <span class="">Honor score: 100</span>
                            </div>

                            <div class="col-12 shop-card py-5">

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                <a class="btn bg-primary btn-sm w-100 py-3 text-white" href="{{route('deposit.index')}}">Deposit</a>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn bg-primary w-100 text-white">Signout</button>
                                </form>
                                
                            </div>
                            
            </div>
        </div>
    </div>
</div>
@endsection
