@extends('layouts.app')

@section('content')
    <h3>Products</h3>
    <div class="uk-container uk-container-large" style="background-color:white;">
            <div class="uk-container uk-container-medium">
        
                <div class="uk-grid-match uk-margin" uk-grid>
                    <div class=" uk-width-1-4@m">
                        <div style="padding:10px;" class="uk-card uk-card-default uk-card-body">
                                @if($page->is_edit)
                                   <h4>Edit Product</h4> 
                                @else
                                    <h4>Add New</h4>
                                @endif
                            <hr/>
                            @include("inc.messages")
                            @if($page->is_edit)
                                <a href="/products" class="uk-text-small uk-margin-remove">Add New</a>
                            @endif
                            <div class="uk-margin">
                                {!! Form::open(['action' => ($page->is_edit ? ['ProductsController@update', $page->product->id] : 'ProductsController@store'), "method" => $page->is_edit ? "PUT" : "POST"]) !!}
                                    {{Form::text('name', $page->product->name, ['class' => 'uk-input uk-width-1-1', 
                                                    'placeholder' => 'Product Name', 'maxlength' => '30', 'autocomplete' => 'off',
                                                    'required' => 'required' ])}}  

                                    {{Form::textarea('description', $page->product->description, ['class' => 'uk-margin-top uk-textarea', 
                                                    'placeholder' => 'Description', 'rows' => '6', 'autocomplete' => 'off',
                                                    'required' => 'required', 'style' => 'min-height:100px; min-width:100%;' ])}}

                                    {{Form::number('price', $page->product->price, ['class' => 'uk-margin-top uk-input uk-width-1-1', 
                                                    'placeholder' => 'Retail Price', 'maxlength' => '20', 'autocomplete' => 'off',
                                                    'required' => 'required' ])}} 

                                    {{Form::text('product_code', $page->product->product_code, ['class' => 'uk-margin-top uk-input uk-width-1-1', 
                                                    'placeholder' => 'Product Code', 'maxlength' => '20', 'autocomplete' => 'off',
                                                    'required' => 'required', "list" => "browsers" ])}} 

                                    <datalist id="browsers">
                                        @foreach($page->products as $product) 
                                            <option value="{{$product->product_code}}"></option>
                                        @endforeach
                                    </datalist>
                                    
                                    {{Form::text('category', $page->product->category, ['class' => 'uk-margin-top uk-input uk-width-1-1', 
                                                    'placeholder' => 'Category', 'list' => 'category_list', 'autocomplete' => 'off',
                                                    'required' => 'required' ])}} 

                                    <datalist id="category_list">
                                        @foreach($page->products as $product) 
                                            <option value="{{$product->category}}"></option>
                                        @endforeach
                                    </datalist> 

                                    {{Form::submit(($page->is_edit ? "Eidt Product" : "Add Product"), ['class' => 'uk-margin-top uk-button uk-width-1-1 uk-button-secondary'])}}

                                {!! Form::close() !!} 
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-expand@m">
                        <div style="padding:10px; " class="uk-card uk-card-default uk-card-body">
                            <nav id="dc" class="uk-navbar-container" style="max-height:50px;" uk-navbar>
                                <div class="uk-navbar-left"> 
                                    <ul class="uk-navbar-nav">
                                        <li id="dcli" class="uk-active"><a href="/products" id="dca">Manage Products</a> </li>    
                                    </ul>
                                </div>
                                <div class="uk-navbar-right" style="margin-right: 50px;">
                                    <div class="uk-container uk-container-medium">
                                        <ul class="uk-navbar-nav">  
                                            {!! Form::open(['action' => 'ProductsController@index', "method" => "GET"]) !!}
                                                
                                                <div class="uk-search uk-search-default"> 
                                                    {{  Form::search('search', $page->search_key, ['class' => 'uk-search-input uk-form-small',
                                                                "id" => "searchpr",
                                                                'placeholder' => 'Search...',
                                                                'maxlength' => '30', 
                                                                'style' => 'font-size:12px;'
                                                        ])
                                                    }}
                                                </div>
                                            {!! Form::close() !!} 
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <br>
                            <div class="uk-align-right uk-margin-remove">  
                                    {{ $page->products->links('inc.shortpagination') }}
                            </div>
                            <table class="uk-table uk-table-small uk-table-divider">
                                <thead>
                                    <tr>
                                        <th id="tableheading" style="width:40px; color:#24424c;">Pr I'd</th>
                                        <th id="tableheading" style="width:120px; color:#24424c;">Name</th>
                                        <th id="tableheading" style="width:280px; color:#24424c;">Description</th>
                                        <th id="tableheading" style="width:20px; color:#24424c;">Price</th>
                                        <th id="tableheading" style="width:60px; color:#24424c;">Pr Code</th>
                                        <th id="tableheading" style="width:80px; color:#24424c;">Category</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                        @if(count($page->products) > 0) 
                                                @foreach($page->products as $product)
                                                    <tr style="font-size:13px;">
                                                        <td> {{$product->id}} </td>
                                                        <td> {{$product->name}} </td>
                                                        <td> {{$product->description}} </td>
                                                        <td> {{$product->price}} </td>
                                                        <td> {{$product->product_code}} </td>
                                                        <td> {{$product->category}} </td>
                                                        <td>
                                                            <a href="/products/{{$product->id}}/edit" uk-tooltip="pos: top ; title: Edit" 
                                                                    class="xev-icon fa fa-pencil-alt"></a>
                                                        </td>
                                                        <td>
                                                            <button uk-tooltip="pos: top ; title: Delete" 
                                                        class="xev-icon fa fa-trash delete-product" data-url="{{action("ProductsController@destroy", ['id' => $product->id ])}}" data-id="{{$product->id}}"></button>
                                                        </td>
                                                    <tr>
                                                @endforeach 
                                        @else 
                                            <tr>
                                                <td colspan="8" style="border:1.5px dashed #ddd; padding: 50px">
                                                    <p class='uk-text-center'>No Products Found</p>
                                                </td>
                                            </tr>
                                        @endif
                                </tbody>
                            </table>
                            <ul class="uk-pagination uk-flex-right" uk-margin>
                                     
                            </ul>
            
                        </div>
                    </div>
                </div>
            </div>
            
            <br>
            <br>
    </div>

    <div id="delete-confirm" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Are you Sure to delete?</h2>
            <p>The Product will be delete permanently, click yes to delete</p>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Yes</button>
            </p>
        </div>
    </div>
@endsection

