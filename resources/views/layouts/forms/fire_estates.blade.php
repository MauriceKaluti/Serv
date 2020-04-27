
<form class="form-contact form form-emergency_fire_estate" action="{{route('storeFirePackage')}}" method="post">
{{csrf_field()}}
<input class="form-control valid" value="@if (Auth::guest()) @else {{Auth::user()->id}} @endif" name="user_id" hidden="" type="text"  placeholder="Applicant User ID">

<input class="form-control valid" value="Estate" name="package_type" hidden="" type="text"  placeholder="Package Type">

<div class="popup_boxPage ">
<div class="popup_inner">
<h3>Subscribe For Estate</h3>
<div class="row">

<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="resident_name"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Residential Estate Name'" placeholder="Enter Residential Estate Name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="cont_person"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Cont. Person 1'" placeholder="Enter Cont. Person 1">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="cont_person2"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Cont. Person 2'" placeholder="Enter Cont. Person 2">
</div>
</div>


<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="email"  type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email'" placeholder="Enter Email">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="phone_one"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone 1'" placeholder="Enter Phone 1">
</div>
</div>



<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="phone_two" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone 2'" placeholder="Enter Phone 2">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="number_households" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Number of Households'" placeholder="Enter Number of Households">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="number_extra" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Number of Extra Structures'" placeholder="Enter Number of Extra Structures">
</div>
</div>

<div style="margin-bottom: 30px;" class="col-sm-6">
<div class="form-group">
<select style="display:block; width:100%;padding:0;border-width:0" required="" id="estcounty" multiple="" name="county[]"></select>

</div>
</div>


<div style="margin-bottom: 30px;" class="col-sm-6">
<div class="form-group">
<select style="display:block; width:100%;padding:0;border-width:0" required="" id="esttown" multiple="" name="town[]"></select>

</div>
</div>


<div style="margin-bottom: 30px;" class="col-sm-6">
<div class="form-group">
<select style="display:block; width:100%;padding:0;border-width:0" required="" id="estfire_serv_category" multiple="" name="serv_category[]"></select>
</div>
</div>


<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="post_address"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Postal Address'" placeholder="Enter Postal Address">
</div>
</div>


<div class="col-sm-6">
<div class="form-group">
<input required="" class="form-control valid" name="post_code"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Postal Code'" placeholder="Enter Postal Code">
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<textarea required="" class="form-control valid" name="additional" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Additional Details(Use Guide)'" placeholder="Enter Additional Details(Use Guide)"></textarea>

</div>
</div>


<div class="col-sm-6">
<div class="form-group">
<input value="Deploy a standby fire engine" type="checkbox" name="fire_engine">
<label for="terms_agree">Deploy a standby fire engine</label>

</div>

<div class="form-group">
<input value="Deploy fire marshal in site" type="checkbox" name="fire_marshal">
<label for="terms_agree">Deploy fire marshal in site</label>

</div>

<div class="form-group">
<input value="Service existing fire fighting equipments on site" type="checkbox" name="service_equip">
<label for="terms_agree">Service existing fire fighting equipments on site</label>

</div>

<div class="form-group">
<input value="Supply and service fire fighting equipments" type="checkbox" name="supply_service">
<label for="terms_agree">Supply and service fire fighting equipments</label>

</div>

<div class="form-group">
<input value="Offer fire safety and first Aid training" type="checkbox" name="fire_safety">
<label for="terms_agree">Offer fire safety and first Aid training</label>

</div>
</div> 
<div class="col-sm-6">
<div class="form-group">
<label>Package Price(Ksh.)</label>
<input required="" readonly="" value="4500" class="form-control valid" name="cost"  type="text" placeholder="Price">
</div>
</div>   
                   
  @include('layouts.payment_confirm')

</div>
<br><br>
<div class="form-group">
<input type="checkbox" id="terms_agree" required="required" checked="">
<label for="terms_agree">I agree to share details with ResQ247 in line with  <a href="#">OUR ONLINE POLICY</a></label>
</div>
<div class="form-group mt-3">
<button type="submit" class="boxed-btn3-login">Subscribe Now</button>
</div>
</div>
</div>
</form>