@extends('Admin.Layout.master') @section('content')
<div class="container-fluid">
    <div class="content_right_area">
        <div class="table_area_customer">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Customers</h4>
                <?php  echo $getCustomer->links() ?>
            </div>
            <div class="table_area">
                <table class="table table-hover" id="customer-listing">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Alternative Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Reference</th>
                            <th scope="col">Notes</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getCustomer as $_getCus)
                        <tr>
                            <td>{{ $_getCus->id ?? '0' }}</td>
                            <td><a href="{{route('customer.order.detail',[$_getCus->id])}}">{{ $_getCus->firstname ?? '' }} {{ $_getCus->lastname ?? '' }}</a></td>
                            <td>{{ $_getCus->phone ?? '' }}</td>
                            <td>{{ $_getCus->alt_phone ?? '' }}</td>
                            <td>{{ $_getCus->email ?? '' }}</td>
                            <td>{{ $_getCus->reffer ?? '' }}</td>
                            <td>{{ $_getCus->notes ?? '' }}</td>

                            <td>
                                <a href="{{ route('new.customer.edit', $_getCus->id) }}"><i class="far fa-edit"></i></a>|<a href="{{ route('new.customer.delete', $_getCus->id) }}"><i class="far fa-trash-alt"></i></a>
                            </td>
                            <!-- <td>
                                        <a href="#"><i class="far fa-edit"></i></a>
                                        |<a href="#"><i class="far fa-trash-alt"></i></a>
                                    </td>-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection @section('css')
<style>
    body {
        background-color: #eef2f5;
    }

    .content_right_area {
        /*padding: 30px 0;*/
    }

    .content_right_area .search_area {
        padding: 0 40px;
    }

    i.far {
        font-size: 16px;
        padding: 0 5px 0 0;
        color: #972330;
    }
</style>
@endsection @section('scripts')
<script>
    $(document).ready(function () {
        $('#customer-listing').DataTable();
    });
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
</script>
@endsection
