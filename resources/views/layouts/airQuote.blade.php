  <!-- Air Quote Modal -->
    <div class="modal fade vertical-align-center" data-backdrop="false" id="airQuote" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Request For Air Emergency Package Quote</h5>
                    <button title="Close Modal" style="color: red;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form-contact" method="POST" action="{{route('storeAirQuote')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <input class="form-control" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id"   type="text" hidden=""  placeholder="Applicant User ID">

                        <div class="col-lg-12 form-group">
                           <input class="form-control" value="@if (Auth::guest()) @else {{Auth::user()->name}} @endif" required="" name="name" type="text"  placeholder="Name">
                        </div>
                        <div class="col-lg-12 form-group">
                         <input class="form-control" required="" value="@if (Auth::guest()) @else {{Auth::user()->email}} @endif" name="email" type="email"  placeholder="Email">
                        </div>
                        <div class="col-lg-12 form-group">
                             <input class="form-control"  required="" name="phone" type="text"  placeholder="Phone no.">
                        </div>
                         <div class="col-lg-12 form-group">
                             <input class="form-control"  required="" name="origin_location" type="text"  placeholder="Origin Rescue Location">
                           
                        </div>
                         <div class="col-lg-12 form-group">
                             <input class="form-control"  required="" name="facility_dest" type="text"  placeholder="Destination Facility">
                           
                        </div>
                         <div class="col-lg-12 form-group">
                             <input class="form-control"  required="" name="nature_patient" type="text"  placeholder="Nature of Evacuated Patient">
                           
                        </div>
                      
                

                         <!--    <div class="col-lg-12 form-group">
                                
                            &nbsp&nbsp&nbsp&nbsp<input title="Remember Me Next Login" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label>Agree with terms</label>
                          
                           
                        </div> -->

                        <div class="col-lg-12 form-group">
                            <button style="margin-top: 30px!important;" type="submit"  class="boxed-btn3-login">Request Quote</button>
                        </div>
 
                    </form>
                </div>

            </div>
        </div>
    </div>