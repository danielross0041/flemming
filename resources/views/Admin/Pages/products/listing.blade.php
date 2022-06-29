@extends('Admin.Layout.master')
@section('content')
    <div class="container-fluid">
        <div class="content_right_area">
            
            <div class="table_area_customer">
                <div class="table_area">
                    <table class="table table-hover" id="product-listing">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Product Class</th>
                                <th scope="col">Make</th>
                                <th scope="col">Category</th>
                                <th scope="col">Type</th>
                                <th scope="col">Variety</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($_getProducts as $_getPro)
                                <tr>
                                    <td>{{ $_getPro->prod_id ?? '0' }}</td>
                                    <td><a>{{ $_getPro->pclass ?? '' }} </a></td>
                                    <td>{{ ucwords($_getPro->makerName->name) }}</td>
                                    <td>{{ ucwords($_getPro->categoryName->name) ?? '' }}</td>
                                    <td>{{ $_getPro->type ?? '' }}</td>
                                    <td>{{ $_getPro->variety ?? '' }}</td>
                                    <td>${{ $_getPro->price ?? '' }}</td>
                                    <td><a href="{{ route('products.create', $_getPro->prod_id ?? '0' ) }}"><i class="far fa-edit"></i></a>|
									<a href="{{ route('products.delete', $_getPro->prod_id) }}"><i class="far fa-trash-alt"></a></i></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        body {
            background-color: #EEF2F5;
        }

        .content_right_area {
            /*padding: 30px 0;*/
        }

        .content_right_area .search_area {
           /* padding: 0 40px; */
        }

        i.far {
            font-size: 16px;
            padding: 0 5px 0 0;
            color: #972330;
        }
		[type="search"]{
			padding: 12px 35px !important;
			width: 269pxpx !important;
			position: relative;
			background: #F7F8FA;
			border-radius: 6px !important;
			-webkit-appearance: none;
			-moz-appearance: none;
			font-size: 14px;
			margin: 24px;    
		}
    </style>
@endsection
@section('scripts')
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": 'toast-top-right'
            }

            toastr.success("{{ session('message') }}");
        @endif
    </script>
    <script>
        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": 'toast-top-right'
            }

            toastr.error("{{ session('error') }}");
        @endif
		$(document).ready(function () {
			$('#product-listing').DataTable();
		});
    </script>
@endsection
