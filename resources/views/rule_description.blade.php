@extends('layouts.app')
@section('content')

<!-- Header -->
        <header class="header mt-5">
            <div class="container">
                <div class="header-content">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <i class="icon feather icon-chevron-left"></i>
                        </a>
                        <h6 class="title">Back</h6>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content">
                        <ul class="nav nav-pills light style-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-list-tab" data-bs-toggle="pill" data-bs-target="#pills-list" type="button" role="tab" aria-controls="pills-list" aria-selected="true"><i class="icon feather icon-list"></i></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-grid-tab" data-bs-toggle="pill" data-bs-target="#pills-grid" type="button" role="tab" aria-controls="pills-grid" aria-selected="false" tabindex="-1"><i class="icon feather icon-grid"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    <!-- Header -->

<div class="page-content space-top p-b65">

        <div class="container py-0">

            <h2>Rule description</h2>
            <br/>


            <div class="line-5 text-secondary dz-content">
                Rule description
                <br/>
                1 Once system-randomized store tasks are started, they cannot be canceled or modified; It must be understood that the orders are given randomly by the system, so there is no choice.
                2. After completing a task, All of your funds and commissions will be received from your bank account within 1 to 30 minutes. If you are not completed tasks, the retirement will not be effected if work is not completed.
                3. Sometimes you can find some lucky orders during the process; For lucky orders, Your account balance may not be sufficient to cover the additional value of the order. In that case, You must recharge the difference to your work account. Once the order is completed, you will earn a lot. It works well according to the above terms. You can earn a lot of commissions and it can change your life.
                4. You can only find lucky orders 1 to 4times in VIP2-VIP6. Lucky orders give you more commissions. Very rare. In addition, Secret orders include 1 or 2 lucky orders that will be available.(Hiden order earned 35%to 60%)
            </div>

        </div>
    </div>
@endsection
