@extends('Admin.Layout.master') @section('content')

<div class="container-fluid">
    <div class="content_right_area">
        <div class="frm_area_1">
            <h4>Appointments</h4>
            <!-- calender area   -->
            <div id="calendar"></div>

            <!-- calender area  -->
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="appointment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <input class="modal-detail" type="text" name="detail" id="detail" placeholder="Enter Details">
                <input class="modal-detail" type="time" id="start" name="start">
                <input type="hidden" id="start_date" >
                <input type="hidden" id="end_date" >

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="modal_close" style="background-color:#972330;">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection @section('css') @endsection @section('scripts')

<script>
    $(document).on("click","#modal_close",function() {
        var detail = $("#detail").val()
        var start = $("#start").val()
        var start_date = $("#start_date").val()
        var end_date = $("#end_date").val()
        $("#appointment_modal").modal("hide");
        callAjax(detail,start,start_date,end_date)
    })
    $(document).ready(function () {
        var SITEURL = "{{ url('/') }}";

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        var calendar = $("#calendar").fullCalendar({
            editable: true,
            events: SITEURL + "/admin/calender",
            displayEventTime: false,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === "true") {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                // var title = prompt("Appointment:");
                $("#appointment_modal").modal("show");
                var start = moment(start, "DD.MM.YYYY").format("YYYY-MM-DD");
                var end = moment(end, "DD.MM.YYYY").format("YYYY-MM-DD");
                $("#start_date").val(start)
                $("#end_date").val(end)
            },
            eventDrop: function (event, delta) {
                var start = moment(event.start, "DD.MM.YYYY").format("YYYY-MM-DD");
                var end = moment(event.end, "DD.MM.YYYY").format("YYYY-MM-DD");

                $.ajax({
                    url: "{{route('calender.create')}}",
                    data: {
                        title: event.title,
                        start: start,
                        end: end,
                        id: event.id,
                        type: "update",
                    },
                    type: "POST",
                    success: function (response) {
                        toastr.info("Appointment Updated Successfully");
                    },
                });
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: "{{route('calender.create')}}",
                        data: {
                            id: event.id,
                            type: "delete",
                        },
                        success: function (response) {
                            calendar.fullCalendar("removeEvents", event.id);
                            toastr.warning("Appointment Deleted Successfully");
                        },
                    });
                }
            },
            eventMouseover: function(event, jsEvent, view) {
                $(this).append('<div id="'+event.id+'" class="hover-end">'+event.title+'</div>');
            },
            eventMouseout: function(event, jsEvent, view) {
                $('#'+event.id).remove();
            },
        });
    });

    function callAjax(detail,start,start_date,end_date) {

        console.log(start_date)
        console.log(start)
            $.ajax({
                url: "{{route('calender.create')}}",
                data: {
                    title: detail,
                    start: start_date,
                    end: end_date,
                    start_time: start,
                    type: "add",
                },
                type: "POST",
                success: function (data) {
                    toastr.success("Appointment Created Successfully");
                    location.reload()
                },
            });
        }

</script>
@endsection
