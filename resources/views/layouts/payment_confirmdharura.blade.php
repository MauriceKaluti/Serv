       
                                    <div class="form-group">
                                        <label>Choose Payment Method</label>
                                        <div class="row">
               <!-- Card -->
              <div style="margin-bottom: 30px; margin-right: 3px; width: 250px;" class="card">
                <div class="card-header" id="rasaC">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#rasaCT" aria-expanded="true" aria-controls="rasaCT">
                        <input type="radio" name=""><img style="width: 80px; height: 80px;" src="{{url('front/img/mpesa.png')}}"> 
                    </button>
                  </h5>
                </div>
                <div id="rasaCT" class="collapse" aria-labelledby="rasaC" data-parent="#accordion">
            <div class="card-body">

             <input type="text" class="form-control" placeholder="Enter Phone Number" name="">
             <br>
              <input type="button" class="form-control" style="background-color: green; color: #fff; cursor: pointer;" class="boxed-btn3-login" value="Confirm Number">
              <span>*Wait for a transaction pop up prompt to enter MPESA PIN</span>

               
                  </div>
                </div>
            </div>
        <!-- End Card -->

 


            <!-- Card -->
              <div style="margin-bottom: 30px;" class="card">
                <div class="card-header" id="rasaD">
                  <h5 class="mb-0">
                    <button style="text-decoration: none;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#rasaDT" aria-expanded="true" aria-controls="rasaDT">
                  <input type="radio" name=""><img style="width: 80px; height: 80px;" src="{{url('front/img/paypallogo.png')}}">
                    </button>
                  </h5>
                </div>
                <div id="rasaDT" class="collapse" aria-labelledby="rasaD" data-parent="#accordion">
                  <div class="card-body">
                       <input type="button" class="form-control" style="background-color: #2690C3; color: #fff;" class="boxed-btn3-login" value="Login Paypal">
                </div>
                </div>
            </div>

            <!-- end card -->


             </div>           
                                     
            </div>
 