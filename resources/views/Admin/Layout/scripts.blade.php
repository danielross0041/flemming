
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/typeEffect.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/js/custome.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script src="https://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js"></script>
<script src="https://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js"></script>

<script type="text/javascript">
    $(document).on("change","#location_set",function() {
        var locations = $(this).val()
        $.ajax({
            type : 'GET',
            dataType : 'JSON',
            url: "{{route('location.set')}}",
            data: {locations:locations},
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    location.reload();
                }
                
            }
        });
    })
</script>
<script>
  

  // $(document).ready(function(){
  //   var description = CKEDITOR.replace( 'description' );
  //   description.on( 'change', function( evt ) {
  //       $("#description").text( evt.editor.getData())    
  //   });
  // })
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
        toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
        toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
        toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true,
    "debug": false,
    "positionClass": "toast-bottom-right",
  }
        toastr.warning("{{ session('warning') }}");
  @endif
</script>