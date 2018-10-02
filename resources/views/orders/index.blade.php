
@extends('layouts.app')

@section('content')

<div class="uk-container uk-container-large" style="background-color:white;">
    <div class="uk-container uk-container-medium">
        <nav id="dc" class="uk-navbar-container" style="max-height:50px;" uk-navbar>
                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            <li id="dcli" class="uk-active"><a href="products.php" id="dca">Manage Invoices</a> </li>


                        </ul>
                    </div>
                    <div class="uk-navbar-right" style="margin-right: 50px;">
                        <div class="uk-container uk-container-medium">
                            <ul class="uk-navbar-nav">
                                <li>

                                </li>

                                <div class="uk-margin">
                                    <div class="uk-search uk-search-default">
                                        <input id="searchpr" class="uk-search-input  uk-form-small" type="search" style="font-size:12px;" placeholder="Search..." maxlength="30">
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </nav>
        <br>
        <form>
            <div class="uk-grid-match uk-margin" uk-grid>
                
                <div class="uk-width-expand@m">
                    <div style="padding:10px; " class="uk-card uk-card-default uk-card-body">
                        <table id="myTable" style="font-size:13px; margin-bottom:0px;" class="uk-table uk-table-small uk-table-divider">
                            <thead>
                                <tr>
                                    <th id="tableheading" style="width:10px; color:#24424c;">#</th>
                                    <th id="tableheading" style="width:120px; color:#24424c;">Invoice I'd</th>
                                    <th id="tableheading" style="width:80px; color:#24424c;">Date</th>
                                    <th id="tableheading" style="width:150px; color:#24424c;">Name</th>
                                    <th id="tableheading" style="width:180px; color:#24424c;">Items</th>
                                    <th id="tableheading" style="width:100px; color:#24424c;">Phone number</th>
                                    <th id="tableheading" style="width:100px; color:#24424c;">Total price</th>
                                    <th id="tableheading" style="width:60px; color:#24424c;">Paid tr</th>
                                    <th id="tableheading" style="width:60px; color:#24424c;">Type</th>
                                    <th style="width:20px;"></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="td1" contenteditable="true"></td>
                                    <td id="td2" contenteditable="true"></td>
                                    <td contenteditable="true">18/07/2014</td>
                                    <td contenteditable="true">Abdul qadir basha</td>
                                    <td contenteditable="true">Chicken burger, Juice and more</td>
                                    <td contenteditable="true">9900141870</td>
                                    <td contenteditable="true">Rs. 162<span></span></td>
                                    <td contenteditable="true">Cash <span></span></td>
                                    <td contenteditable="true">Take Away <span></span></td>
                                    <td><i id="dltbtn" class="fas fa-file-pdf"  style="padding:5px; border-radius:2px; background-color:#f2f2f2; text-decoration:none; color:#005059;  font-size:12px;border:none; outline:none; "></i></td>
                                    <td><i id="dltbtn" class="fas fa-trash" style="
                                        padding:5px; border-radius:2px; background-color:#f2f2f2; text-decoration:none; color:#005059;  font-size:12px;border:none; outline:none; "></i> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </form>

    </div>

</div>
@endsection 