@extends('layouts.app')

@section('content')


<div class="uk-container uk-container-large" style="background-color:white;">
    <div class="uk-container uk-container-medium">
        <nav id="dc" class="uk-navbar-container " style="max-height:62px;" uk-navbar>
    <div class="uk-navbar-left">
        <div class="uk-container uk-container-medium">
            <ul class="uk-navbar-nav">
                <li id="dcli" class="uk-active"><a href="index.php" id="dca">Dashboard </a></li>
            </ul>
        </div>
    </div>
    <div class="uk-navbar-right" style="margin-right: 50px;">
        <div class="uk-container uk-container-medium">
            <ul class="uk-navbar-nav">
                <li>
                    <ul class="uk-breadcrumb">
                        <li><span style="color: white;">Welcome to Xevello Dashboard</span></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</nav>

<div class="uk-container uk-container-large" style="background-color:white; ">
    <div class="uk-container uk-container-medium uk-padding">
    
        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin" uk-grid>
            <div>
                <div id="statscard" class="uk-card uk-card-default uk-card-body">
                    <span>ORDERS</span>
                    <i id="iconav" class="fas fa-box-open"></i>
                    <p style="font-size: 25px;">1587</p>
                    <p style="font-size: 13px;"><span id="badgenav" class="uk-badge"> +11%</span> from previous month
                    </p>
                </div>
            </div>
            <div>
                <div id="statscard" class="uk-card uk-card-default uk-card-body">
                    <span>REVENUE</span>
                    <i id="iconav" class="fas fa-coins"></i>
                    <p style="font-size: 25px;">$46,876</p>
                    <p style="font-size: 13px;"><span id="badgenav" style="background-color: #ec536c;" class="uk-badge"> -39% </span> from previous month
                    </p>
                </div>
            </div>
            <div>
                <div id="statscard" class="uk-card uk-card-default uk-card-body">
                    <span>EXPENSES</span>
                    <i id="iconav" class="fas fa-dolly-flatbed"></i>
                    <p style="font-size: 25px;">$6,876</p>
                    <p style="font-size: 13px;"><span id="badgenav" style="background-color: #f5b225;" class="uk-badge"> 0% </span> from previous month
                    </p>
                </div>
            </div>
            <div>
                <div id="statscard" class="uk-card uk-card-default uk-card-body">
                    <span>PRODUCT SOLD</span>
                    <i id="iconav" class="fas fa-briefcase"></i>
                    <p style="font-size: 25px;">3,876</p>
                    <p style="font-size: 13px;"><span id="badgenav" class="uk-badge"> 56% </span> from previous month
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection