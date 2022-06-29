@extends('Admin.Layout.master')

@section('content')
<div class="container-fluid">
    <div class="content_right_area insertAfter">
        
        <div class="frm_area_1">
            <h4>Search</h4>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <form >
                        <div class="row g-3">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input type="text" placeholder="Customer ID" name="cust_id" id="cust_id">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input type="text" placeholder="Order ID" name="order_id" id="order_id">
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input type="text" placeholder="Enter Name" name="name" id="name">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input type="number" placeholder="Phone" name="phone" id="phone">
                            </div>
                         
                        </div>
                       
                        <div class="row g-3 mt-3">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input type="email" placeholder="Email Address" name="email" id="email">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input type="number" name="zip" id="zip" placeholder="Zip Code">
                            </div>
                        
                        </div>
                      
                        <div class="txt_p">
                            <!-- <p>Search the database using any of the parameters above. Partials are permitted.</p> -->
                        </div>



                    </form>
                        <button id="search">Search</button>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center">
                    <!-- <div class="img_beef">
                        <img src="images/beef.svg" alt="Beef">
                    </div> -->
                </div>


            </div>
        </div>

    </div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#customer-listing').DataTable();
    });
    $(document).on("click","#search",function() {
        $('.table_area_customer').remove()
        var name = $("#name").val()
        var zip = $("#zip").val()
        var email = $("#email").val()
        var phone = $("#phone").val()
        var cust_id = $("#cust_id").val()
        var order_id = $("#order_id").val()
        $.ajax({
                type : 'POST',
                dataType : 'JSON',
                url: "{{route('search.customer')}}",
                data: {name:name, zip:zip, email:email, phone:phone, cust_id:cust_id, order_id:order_id,  _token:"{{csrf_token()}}"},
                success: function (response) {
                    if (response.status == 1) {
                        $(".insertAfter").append(response.message);
                    }
                }
            });
    });
</script>
@endsection