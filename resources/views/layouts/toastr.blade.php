
     <script src="{{asset('front/js/vendor/jquery-1.12.4.min.js')}} "></script>

    <script src="{{asset('front/js/toastr.min.js')}} "></script>
    <script src="{{asset('front/js/toastr.js')}} "></script>  

    <link rel="stylesheet" href="{{asset('front/css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/toastr.min.css')}}">


<script>

  @if(Session::has('enquiresuccess'))

        toastr.success("{{ Session::get('enquiresuccess') }}");

  @endif

    @if(Session::has('messagesuccess'))

        toastr.success("{{ Session::get('messagesuccess') }}");

  @endif

      @if(Session::has('fanakasuccess'))

        toastr.success("{{ Session::get('fanakasuccess') }}");

  @endif

      @if(Session::has('kikwetusuccess'))

        toastr.success("{{ Session::get('kikwetusuccess') }}");

  @endif


      @if(Session::has('dharurasuccess'))

        toastr.success("{{ Session::get('dharurasuccess') }}");

  @endif

        @if(Session::has('msafirisuccesspsv'))

        toastr.success("{{ Session::get('msafirisuccesspsv') }}");

  @endif

        @if(Session::has('msafirisuccessmoto'))

        toastr.success("{{ Session::get('msafirisuccessmoto') }}");

  @endif
        @if(Session::has('corpmedicalsuccess'))

        toastr.success("{{ Session::get('corpmedicalsuccess') }}");

  @endif

 
        @if(Session::has('instmedicalsuccess'))

        toastr.success("{{ Session::get('instmedicalsuccess') }}");

  @endif

 
        @if(Session::has('estmedicalsuccess'))

        toastr.success("{{ Session::get('estmedicalsuccess') }}");

  @endif

 
        @if(Session::has('resmedicalsuccess'))

        toastr.success("{{ Session::get('resmedicalsuccess') }}");

  @endif
 
        @if(Session::has('indmedicalsuccess'))

        toastr.success("{{ Session::get('indmedicalsuccess') }}");

  @endif
 
        @if(Session::has('fam_medicalsuccess'))

        toastr.success("{{ Session::get('fam_medicalsuccess') }}");

  @endif
        @if(Session::has('ticketsuccess'))

        toastr.success("{{ Session::get('ticketsuccess') }}");

  @endif

          @if(Session::has('quotesuccess'))

        toastr.success("{{ Session::get('quotesuccess') }}");

  @endif

          @if(Session::has('medicalteamsuccess'))

        toastr.success("{{ Session::get('medicalteamsuccess') }}");

  @endif

            @if(Session::has('roadteamsuccess'))

        toastr.success("{{ Session::get('roadteamsuccess') }}");

  @endif


            @if(Session::has('fireteamsuccess'))

        toastr.success("{{ Session::get('fireteamsuccess') }}");

  @endif

            @if(Session::has('firstteamsuccess'))

        toastr.success("{{ Session::get('firstteamsuccess') }}");

  @endif
 


  @if(Session::has('roadsuccess'))

        toastr.success("{{ Session::get('roadsuccess') }}");

  @endif


    @if(Session::has('subsuccess'))

        toastr.success("{{ Session::get('subsuccess') }}");

  @endif
 

</script>
