@extends('layouts.app')
@section('content')

<div class="scroll-container panel1"> 
<section class="scroll-sequence__container apple-container" id="home">
   <div class="scroll-sequence apple-sequence">
      <div class="animate-content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 mobile-text">
                  <div class="center-text">
                     <div class="main-body-text">
                        <p  class="p-header" id="home-show">GIRALANG + </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6"></div>
               <div class="col-md-2">
               </div>
            </div>
         </div>
      </div>
   </div>
  
   <div class="animate">
      <div class="container">
      <img src="images/stars-layer1.png" class="object" data-value="-2" alt="stars-layer1"/>
      <img src="images/stars-layer2.png" class="object" data-value="6" alt="stars-layer2"/>
      <img src="images/stars-layer3.png" class="object" data-value="4" alt="stars-layer3"/>
      </div>
   </div>

  
  
   
   <div class="scroll-sequence__content">
      <div class="speak">
         <h1 >g</h1>
         <p>g</p>
      </div>
      <div class="speak">
         <h1>g</h1>
         <p>g</p>
      </div>
      <div class="speak">
         <h1>g</h1>
         <p>g</p>
      </div>
   </div>
</section>

<section class="section panel2" id="apartments">
   <div class="container-fluid">
      <div class="section-02__content">
         <div class="section-body-text">
            <div class="row apartments-mobile">
               <div class="col-md-4 flex-box-new">
                  <div class="main-body-text">
                     <p id="apartmet_show" class="p-header" style="display: none;">GIRALANG + <a  href="#apartments">APARTMENTS</a></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="main-body-text-button">
                     <p class="p-body">TP Dynamics will develop G+ on Block 6 Section 79 Giralang, on the Canopus Street site between Menkar Close and Atalumba Close.
                        The mixed-use development includes space for a 1,000m2 supermarket and supporting retail.
                        We are already in discussions with several prospective tenants and a café is a high priority for the area.
                        The upper 3 levels of the 4-storey development will house 50 apartments and lofts of 1, 2 and 3 bedrooms.
                     </p>
                     <button type="button" class="btn-1" id="modal_view_right" data-toggle="modal" data-target="#information_modal">REGISTER</button>   
                  </div>
               </div>
               <div class="col-md-2">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- left modal -->
<div class="modal modal_outer right_modal fade register-for-one" id="information_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
   <div class="modal-dialog" role="document">
   
   <div id="loaderr" class="lds-dual-ring hidden overlay"></div>
      
         <div class="modal-content ">
            <div class="top-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body get_quote_view_modal_body">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 register-apartments">
                        <h1 class="form-header">Register for Apartments</h1>
                        

                     </div>

                     <div class="col-md-12">
                     <div class="alert alert-success alert-block" id="alert-block-register" style="display: none;">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong class="success-msg"></strong>
                     </div>
                     </div>

                    
                     


                  </div>
                  <form method="post"  id="get_quote_frm" class="Send_Email_form">
                    @csrf
                  <div class="form-section">
                     <div class="row">
                        <div class="col-md-6">
                           <label>CONTACT INFO</label>
                           <div class="form-group">
                              <input type="text" class="form-control" id="name" name="name" placeholder="JAMES">
                              <span class="text-danger-new error-text name_err"></span>
                             
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" id="email" name="email"  placeholder="EMAIL">
                              <span class="text-danger-new error-text email_err"></span>
                          
                           </div>
                           <div class="form-group">
                              <input type="number" class="form-control" id="phone" name="phone"  placeholder="PHONE">
                              <span class="text-danger-new error-text phone_err"></span>
                              
                           </div>
                           <label>I AM AN*</label>
                           <div class="row">
                              <div class="col-md-6 owner-occupier">
                                 <div class="form-group">
                                 <div class="round">
                                    <input type="checkbox" id="checkboxone" name="owner_occupier" value="owner_occupier" class="form-control input-filed">
                                    <label id="checkboxlableone" for="checkboxlableone">OWNER OCCUPIER</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 investor">
                                 <div class="form-group">
                                 <div class="round">
                                    <input type="checkbox" id="checkboxtwo" name="owner_occupier"  value="investor" class="form-control input-filed">
                                    <label id="checkboxlabletwo" for="checkboxlabletwo">INVESTOR</label>
                                 </div>
                                 </div>
                              </div>
                           </div>
                           <label>BEDROOM(S)*</label>
                           <div class="row-class">
                              <div class="col-md-3-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkboxbone" name="bedroom" class="form-control input-circle1" value="1">
                                    <label id="lablebone" for="checkbox">1</label>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-3-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkboxbtwo" name="bedroom" class="form-control input-circle1" value="2">
                                    <label id="lablebtwo" for="checkbox">2</label>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-3-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkboxbtree" name="bedroom" class="form-control input-circle1" value="3">
                                    <label id="labletree" for="checkbox">3</label>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-3-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkboxbfor" name="bedroom" class="form-control input-circle1" value="4">
                                    <label id="lablebfor" for="checkbox">4</label>
                                 </div>
                                 </div>
                              </div>
                           </div>
                           <label>BATHROOM(S)*</label>
                           <div class="row-class">
                              <div class="col-md-4-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkbox" name="bathroom" class="form-control input-circle2" value="1">
                                    <label for="checkbox">1</label>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-4-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkbox" name="bathroom" class="form-control input-circle2"  value="2">
                                    <label for="checkbox">2</label>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-4-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkbox" name="bathroom" class="form-control input-circle2"  value="3">
                                    <label for="checkbox">3</label>
                                 </div>
                                 </div>
                              </div>
                           </div>
                           <label>CAR PARK(S)*</label>
                           <div class="row-class">
                              <div class="col-md-4-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkbox" name="car_parks" class="form-control input-circle2"  value="1">
                                    <label for="checkbox">1</label>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-4-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkbox" name="car_parks" class="form-control input-circle2"  value="2">
                                    <label for="checkbox">2</label>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-4-l">
                                 <div class="form-group">
                                 <div class="circle">
                                    <input type="checkbox" id="checkbox" name="car_parks" class="form-control input-circle2"  value="3">
                                    <label for="checkbox">3</label>
                                 </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for=""> HOW DID YOU HEAR ABOUT US?</label>
                           <div class="row list-item-new">
                              <div class="col-md-6">
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Allhomes" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Allhomes
                                    </p>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Canberra Weekly" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Canberra Weekly
                                    </p>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Social Media" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Social Media
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Word of mouth" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Word of mouth
                                    </p>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Site Signage" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Site Signage
                                    </p>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio"  value="Google Search" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Google Search
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <textarea class="text-areas" name="message"  cols="80" rows="15"  placeholder="MESSAGE"></textarea>
                              </div>
                           </div>
                           <div class="row">
                           <div class="col-md-12 capcha" id="g-recaptcha-response-regiser">
                           
                           {!! app('captcha')->display() !!}
                     @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                     @endif
                           </div>
                           <div class="col-md-12">
                           <span class="text-danger-new error-text g_recaptcha_response_err"></span>
                           </div>
                           
                              
                              <div class="col-md-12 submit-btn">
                                 <button id="submit-apartmet" type="submit" class="btn-2">SUBMIT MESSAGE</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      
   </div>
</div>


<section class="section panel3"  id="retail">
   <div class="container-fluid">
      <div class="section-02__content">
         <div class="section-body-text">
            <div class="row retail-mobile">
               <div class="col-md-4 flex-box-new">
                  <div class="main-body-text">
                     <p id="retail-show" class="p-header" style="display: none;">GIRALANG + <a href="#retail">RETAIL</a></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="main-body-text-button">
                     <p class="p-body">G+ will revitalise the site of the old Giralang Shopping Centre and deliver greater amenity to the local community.
                        Connectivity is a key consideration for G+.
                        The vibrant local shopping and residential precinct will work in harmony with surrounding community facilities,
                        parking and the nearby Giralang Primary School.
                     </p>
                     <button type="button" class="btn-1" id="modal_view_right" data-toggle="modal" data-target="#information_modal1">REGISTER</button>   
                  </div>
               </div>
               <div class="col-md-2">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- left modal -->
<div class="modal modal_outer right_modal fade register-form-two" id="information_modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
   <div class="modal-dialog" role="document">

   <div id="loader" class="lds-dual-ring hidden overlay"></div>
     
         <div class="modal-content ">
            <div class="top-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body get_quote_view_modal_body">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 Register-text-retail">
                        <h1 class="form-header">Register for Retail</h1>
                     </div>

                     

                     <div class="col-md-12">
                     <div class="alert alert-success alert-block" id="alert-block-retail" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong class="success-msgg"></strong>
                    </div>
                     </div>
                     
                  </div>
                  <form method="post"  id="get_quote_frm" class="Send_Email_form-new">
                  @csrf
                  <div class="form-section">
                     <div class="row">
                        <div class="col-md-6">
                           <label>CONTACT INFO</label>
                           <div class="form-group"> 
                              <input type="text" class="form-control" name="namee" id="name" placeholder="JAMES">
                              <span class="text-danger-new error-text name_errr"></span>
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" name="emaill" id="email"  placeholder="EMAIL">
                              <span class="text-danger-new error-text email_errr"></span>
                           </div>
                           <div class="form-group">
                              <input type="number" class="form-control" name="phonee" id="phone"  placeholder="PONE">
                              <span class="text-danger-new error-text phone_errr"></span>
                           </div>
                           <div class="form-group">
                              <select  class="form-control" id="select-menu"  placeholder="SELECT YOUR BUSINESS TYPE">
                                 <option>SELECT YOUR BUSINESS TYPE</option>
                                 <option value="Business">Business</option>
                                 <option value="Retail">Retail</option>
                                 <option value="Commercial Office">Commercial Office</option>
                              </select>
                           </div>
                           <label>LOOKING FOR (SQM)*</label>
                           <div class="row">
                              <div class="col-md-12 js-ranger-slide">
                              <input type="text" class="js-range-slider" name="my_range" value="" />
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 retail-about-you">
                           <label for=""> HOW DID YOU HEAR ABOUT US?</label>
                           <div class="row list-item-row">
                              <div class="col-md-6">
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Allhomes" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Allhomes
                                    </p>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" value="Canberra Weekly" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Canberra Weekly
                                    </p>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" value="Social Media" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Social Media
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-check">
                                    <input class="form-check-input" value="Word of mouth" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Word of mouth
                                    </p>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" value="Site Signage" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Site Signage
                                    </p>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" value="Google Search" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <p class="form-check-label" for="flexRadioDefault1">
                                       Google Search
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <textarea class="text-areas" name="message" id="retail-message"  cols="80" rows="10"  placeholder="SPECIFY YOUR BUSINESS REQUIREMENT"></textarea>
                              </div>
                           </div>
                           <div class="row retial-btn-capcha">
                              <div class="col-md-12 capcha" id="g-recaptcha-response-ratil">
                                
                              {!! app('captcha')->display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                            
                              </div>
                              <div class="col-md-12">
                              <span class="text-danger-new error-text g_recaptcha_response_errr"></span> 
                              </div>
                              
                              <div class="col-md-12 submit-btn">
                                  
                                 <button id="submit-retail" type="submit"  class="btn-2">SUBMIT MESSAGE</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </form>

               </div>
            </div>
         </div>
      
   </div>
</div>

<!-- map -->

<section class="section map-panel panel4"  id="location">
   <div class="container-fluid">

   <div class="row location-map-alimet">
      <div class="image-location">
         <img src="/images/giralang-location.jpg" alt="giralang-location">
      </div>
   </div>
   </div>
    

      <div class="row map-cl location-mobile">
         <div class="col-md-4 location-mobile-flex">
            <div class="iram-map-tex">
               <div class="main-body-text">
                  <p id="location-show" style="display: none;" class="p-header">GIRALANG + <a href="#location">LOCATION</a></p>
               </div>
            </div>
         </div>
         <div class="col-md-6 map-image-icons-image">
            <div class="image-icons-round">
              
            </div>
            <div class="image-icons-round-sub">
            <a href="#"><img class="location-map-box" src="/images/cross.png" alt="cross"></a>
            </div>
         </div>
         <div class="col-md-2"></div>
    
   </div>
</section>






<!-- iframe -->
<section class="section iframe-section-main panel5"  id="memeto">
   <div class="container-fluid">
      <div class="row irame-cl irame-mobile-flex">
         <div class="col-md-4">
            <div class="iram-map-tex">
               <div class="main-body-text">
                  <p id="memeto-show" style="display: none;" class="p-header">GIRALANG + <a href="#memeto">360</a></p>
               </div>
            </div>
         </div>
         <div class="col-md-6"></div>
         <div class="col-md-2"></div>
      </div>
      
      <div class="row iframe-map-row">
      <div class="iframe-map">
         <iframe src="https://momento360.com/e/u/9865194b15ac43df9c6defb5375f8b65?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=large" title="description" width="100%"></iframe>
      </div>
      </div>
     
   </div>
</section>


<!-- vision -->
<section class="section panel6"  id="vision">
   <div class="container-fluid">
      <div class="section-02__content">
         <div class="section-body-text">
            <div class="row vision-mobile">
               <div class="col-md-4 flex-box-new">
                  <div class="main-body-text">
                     <p id="vision-show" style="display: none;" class="p-header">GIRALANG + <a href="#vision">VISION</a></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="main-body-text-button">
                     <p class="p-body">Our vision is for a safe and accessible site for all precinct users.
                        A reconfigured carpark will deliver two basement levels to accommodate the retail and residential uses.
                        The arrangement will include new driveway entry and exit points off Canopus Crescent,
                        new on-street parking on Menkar Close and a reconfigured carpark and drop-off arrangement for the existing Giralang Primary School.
                     </p>
                  </div>
               </div>
               <div class="col-md-2">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- FAQ -->
<section class="section panel7" id="questions">
   <div class="container-fluid">
      <div class="section-02__content">
         <div class="section-body-text">
            <div class="row questions-mobile">
               <div class="col-md-4 flex-box-new">
                  <div class="main-body-text">
                     <p id="questions-show" style="display: none;" class="p-header">GIRALANG + <a href="#questions">QUESTIONS</a></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="accordion" class="accordion">
                     <div class="card mb-0 home-faq-card">
                        <div class="card-header" data-toggle="collapse" href="#collapseOne">
                           <a class="card-title head-2">When will the works be completed?</a>
                        </div>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                           <p>All works scheduled to be completed by 2023.</p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                           <a class="card-title head-2">Where will the construction workers park?</a>
                        </div>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                           <p>The Lessee will licence Block 6 Section 72 at Rosevear Place to provide parking for construction
                              workers. This site can accommodate 170 vehicles, which is more than the Lessee requires.
                           </p>
                           <p>The excess 22 car parking spaces will be offered, as long stay spaces to the businesses, services and
                              organisations on Rosevear Place.
                           </p>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                           <a class="card-title head-2">What are the off-site works?</a>
                        </div>
                        <div id="collapse5" class="collapse" data-parent="#accordion">
                           <div class="card-body">
                              <p>Offsite works include undergrounding of HV powerlines, installation of new water main and sewer
                                 mains.This is expected to be completed by December 2021.
                              </p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                           <a class="card-title head-2">Where can I park?</a>
                        </div>
                        <div id="collapse7" class="collapse" data-parent="#accordion">
                           <div class="card-body">
                              <p>Please see Parking Arrangement tab identifying short-stay, long-stay and disabled access parking the
                                 Dickson Group Centre.
                              </p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                           <a class="card-title head-2"> How will the development be communicated to the business owners, staff and
                           community? </a>
                        </div>
                        <div id="collapse8" class="collapse" data-parent="#accordion">
                           <div class="card-body">
                              <p>Please see Parking Arrangement tab identifying short-stay, long-stay and disabled access parking the
                                 Dickson Group Centre.
                              </p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                           <a class="card-title head-2"> Where can I obtain more information as the development progresses? </a>
                        </div>
                        <div id="collapse9" class="collapse" data-parent="#accordion">
                           <div class="card-body">
                              <p>Updated information will be made available on the fencing banners to the site, at this website  and on the Dickson Village Facebook page</p>
                           </div>
                        </div>
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                           <a class="card-title head-2">Will the apartments be for sale</a>
                        </div>
                        <div id="collapse10" class="collapse" data-parent="#accordion">
                           <div class="card-body">
                              <p>It is the developers intention to lease all the apartments.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2"></div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="scroll-sequence__container tree-container panel8" id="developer">
   <div class="scroll-sequence tree-sequence">
   <div class="animate-content">
         <div class="container-fluid">
            <div class="row developer-mobile-show">
               <div class="col-md-3 developer-text">
                  <div class="center-text">
                     <div class="main-body-text">
                        <p id="developer-show" style="display: none;" class="p-header">GIRALANG + <a class="developer-new"  href="#developerr">DEVELOPER</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6"></div>
               <div class="col-md-3 developer-last-image">
                  <a href="https://www.tpdynamics.com.au/" target="_blank" rel="noopener noreferrer"><img  class="image-id" src="images/tpd-logo.png" alt="tpd-logo"></a>
               </div>
            </div>
         </div>
      </div>
</div>

<div class="animateone" style="display:none;">
      <img src="images/stars-layer1.png" class="objectone" data-value="-2" alt="stars-layer1"/>
      <img src="images/stars-layer2.png" class="objectone" data-value="6" alt="stars-layer2"/>
      <img src="images/stars-layer3.png" class="objectone" data-value="4" alt="stars-layer3"/>
     </div>
  


   <div class="scroll-sequence__content">
      <div class="speak">
         <h1>T</h1>
         <p>T</p>
      </div>
      <div class="speak">
         <h1>A</h1>
         <p>C</p>
      </div>
      <div class="speak">
         <h1>R</h1>
         <p>T</p>
      </div>


         </div> 

      
     
</section>

<section id="developerr">

</section>
</div>













<script src="https://unpkg.com/scroll-out@2.2.3/dist/scroll-out.min.js"></script>

<script>
const appleSequenceImages = [];
const treeSequenceImages = [];


for (let i = 0; i <= 39; i ++) {
  appleSequenceImages.push(`${`000${i}`.slice(-4)}.webp`);
}
for (let i = 0; i <= 39; i ++) {
  treeSequenceImages.push(`${`000${i}`.slice(-4)}.webp`);
}


const requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

class EventEmitter {
  listeners = {}
  addListener(eventName, fn) {
    this.listeners[eventName] = this.listeners[eventName] || [];
    this.listeners[eventName].push(fn);
    return this;
  }
  on(eventName, fn) {
    return this.addListener(eventName, fn);
  }
  once(eventName, fn) {
    this.listeners[eventName] = this.listeners[eventName] || [];
    const onceWrapper = () => {
      fn();
      this.off(eventName, onceWrapper);
    }
    this.listeners[eventName].push(onceWrapper);
    return this;
  }
  off(eventName, fn) {
    return this.removeListener(eventName, fn);
  }
  removeListener (eventName, fn) {
    let lis = this.listeners[eventName];
    if (!lis) return this;
    for(let i = lis.length; i > 0; i--) {
      if (lis[i] === fn) {
        lis.splice(i,1);
        break;
      }
    }
    return this;
  }
  emit(eventName, ...args) {
    let fns = this.listeners[eventName];
    if (!fns) return false;
    fns.forEach((f) => {
      f(...args);
    });
    return true;
  }
  listenerCount(eventName) {
    let fns = this.listeners[eventName] || [];
    return fns.length;
  }
  rawListeners(eventName) {
    return this.listeners[eventName];
  }
}
class Canvas {
  constructor(e) {
    this.images = e.images;
    this.container = e.container;
    this.cover = e.cover;
    this.displayIndex = 0;
  }
  
  setup() {
    this.canvas = document.createElement("canvas");
    this.container.appendChild(this.canvas);
    this.ctx = this.canvas.getContext('2d')
    
    window.addEventListener('resize', () => this.resize());
    this.resize();
  }
  
  renderIndex(e) {
    if (this.images[e]) {
        return this.drawImage(e);
    }
    // Find closest loaded image
    for (var t = Number.MAX_SAFE_INTEGER, r = e; r >= 0; r--)
        if (this.images[r]) {
            t = r;
            break
        }
    for (var n = Number.MAX_SAFE_INTEGER, i = e, o = this.images.length; i < o; i++)
        if (this.images[i]) {
            n = i;
            break
        }
    this.images[t] ? this.drawImage(t) : this.images[n] && this.drawImage(n)
  }
  
  drawImage(e) {
    this.displayIndex = e,
    this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
    const x = Math.floor((this.canvas.width - this.images[this.displayIndex].naturalWidth) / 2);
    const y = Math.floor((this.canvas.height - this.images[this.displayIndex].naturalHeight) / 2);
    if (this.cover) {
      
      this.drawImageCover(this.ctx, this.images[this.displayIndex]);
    } else {
      this.ctx.drawImage(this.images[this.displayIndex], x, y);
    }
  }
  
  resize() {
    const w = this.container.clientWidth;
    const h = this.container.clientHeight;
    this.canvas.style.height = `${h}px`;
    this.canvas.style.width = `${w}px`;
    this.canvas.height = h;
    this.canvas.width = w;
    
    this.renderIndex(this.displayIndex);
  }
  
  /**
 * By Ken Fyrstenberg Nilsen
 *
 * drawImageProp(context, image [, x, y, width, height [,offsetX, offsetY]])
 *
 * If image and context are only arguments rectangle will equal canvas
*/
  drawImageCover(ctx, img, x, y, w, h, offsetX, offsetY) {

      if (arguments.length === 2) {
          x = y = 0;
          w = ctx.canvas.width;
          h = ctx.canvas.height;
      }

      // default offset is center
      offsetX = typeof offsetX === "number" ? offsetX : 0.5;
      offsetY = typeof offsetY === "number" ? offsetY : 0.5;

      // keep bounds [0.0, 1.0]
      if (offsetX < 0) offsetX = 0;
      if (offsetY < 0) offsetY = 0;
      if (offsetX > 1) offsetX = 1;
      if (offsetY > 1) offsetY = 1;

      var iw = img.width,
          ih = img.height,
          r = Math.min(w / iw, h / ih),
          nw = iw * r,   // new prop. width
          nh = ih * r,   // new prop. height
          cx, cy, cw, ch, ar = 1;

      // decide which gap to fill    
      if (nw < w) ar = w / nw;                             
      if (Math.abs(ar - 1) < 1e-14 && nh < h) ar = h / nh;  // updated
      nw *= ar;
      nh *= ar;

      // calc source rectangle
      cw = iw / (nw / w);
      ch = ih / (nh / h);

      cx = (iw - cw) * offsetX;
      cy = (ih - ch) * offsetY;

      // make sure source rectangle is valid
      if (cx < 0) cx = 0;
      if (cy < 0) cy = 0;
      if (cw > iw) cw = iw;
      if (ch > ih) ch = ih;

      // fill image in dest. rectangle
      ctx.drawImage(img, cx, cy, cw, ch,  x, y, w, h);
  }
}
class ImgLoader extends EventEmitter {
  constructor(opts) {
    super();
    this.images = opts.imgsRef;
    this.imageNames = opts.images;
    this.imagesRoot = opts.imagesRoot;
    this.sequenceLength = opts.images.length;
    this.priorityFranes = opts.priorityFrames;
    this.complete = false;
    this.loadIndex = 0;
    
    this.priorityQueue = this.createPriorityQueue();
    this.loadingQueue = this.createLoadingQueue();
    
    this.loadNextImage();
  }
  
  loadImage(e) {
    if (this.images[e]) {
      return this.loadNextImage();
    }
    const onLoad = () => {
      img.removeEventListener('load', onLoad);
      this.images[e] = img;
      
      if (e === 0) {
        this.emit('FIRST_IMAGE_LOADED');
      }
      this.loadNextImage();
    }
    const img = new Image;
    img.addEventListener('load', onLoad);
    img.src = (this.imagesRoot ? this.imagesRoot : '') + this.imageNames[e];
  }
  
  loadNextImage() {
    if (this.priorityQueue.length) {
      this.loadImage(this.priorityQueue.shift());
      if (!this.priorityQueue.length) {
        this.emit('PRIORITY_IMAGES_LOADED');
      }
    } else if (this.loadingQueue.length) {
        this.loadImage(this.loadingQueue.shift())
    } else {
      this.complete = true;
      this.emit('IMAGES_LOADED');
    }
  }
  
  createPriorityQueue() {
    const p = this.priorityFrames || [];
    if (!p.length) {
      p.push(0);
      p.push(Math.round(this.sequenceLength / 2));
      p.push(this.sequenceLength - 1);
    }
    return p;
  }
  
  createLoadingQueue() {
    return this.imageNames.map((s, i) => i).sort((e, n) => {
       return Math.abs(e - this.sequenceLength / 2) - Math.abs(n - this.sequenceLength / 2)
    });
  }
}
class ScrollSequence {
  constructor(opts) {
    this.opts = {
      container: 'body',
      starts: 'out',
      ends: 'out',
      imagesRoot: '',
      cover: false,
      ...opts
    }
    this.container = typeof opts.container === 'object' ? 
      opts.container : 
      document.querySelector(opts.container);
    
    this.scrollWith = !opts.scrollWith ? 
      this.container : 
      typeof opts.scrollWith === 'object' ? 
        opts.scrollWith : 
        document.querySelector(opts.scrollWith);
    
    this.images = Array(opts.images.length);
    this.imagesToLoad = opts.images;
    this.priorityFrames = opts.priorityFrames;
    
    this.loader = new ImgLoader({
      imgsRef: this.images,
      images: this.imagesToLoad,
      imagesRoot: this.opts.imagesRoot,
      priorityFrames: this.priorityFrames
    });
    
    this.canvas = new Canvas({
      container: this.container,
      images: this.images,
      cover: this.opts.cover
    });
    
    this.init();
  }
  
  init() {
    this.canvas.setup();
    this.loader.once('FIRST_IMAGE_LOADED', () => {
      this.canvas.renderIndex(0);
    })
    this.loader.once('PRIORITY_IMAGES_LOADED', () => {
      window.addEventListener('scroll', () => this.changeOnWindowScroll());
    })
    this.loader.once('IMAGES_LOADED', () => {
      console.log('Sequence Loaded');
    })
  }
  
  changeOnWindowScroll() {
    const step = 100 / (this.images.length - 1);
    const mapToIndex = Math.floor(this.percentScrolled / step);
    requestAnimationFrame(() => this.canvas.renderIndex(mapToIndex));
  }
  
  get percentScrolled() {
    const {starts, ends} = this.opts;
    const el = this.scrollWith;
    const doc = document.documentElement;
    const clientOffsety = doc.scrollTop || window.pageYOffset;
    const elementHeight = el.clientHeight || el.offsetHeight;
    const clientHeight = doc.clientHeight;
    let target = el;
    let offsetY = 0;
    do {
        offsetY += target.offsetTop;
        target = target.offsetParent;
    } while (target && target !== window);
    
    let u = (clientOffsety - offsetY);
    let d = (elementHeight + clientHeight)
    
    if (starts === 'out') u += clientHeight;
    if (ends === 'in') d -= clientHeight;
    if (starts == 'in') d -= clientHeight;
    
    const value = u / d * 150;
    return value > 100 ? 100 : value < 0 ? 0 : value;
  }
}

const appleSequence = new ScrollSequence({
  container: '.apple-sequence',
  scrollWith: '.apple-container',
  images: appleSequenceImages,
  imagesRoot: '/images/intro/',
  priorityFrames: [0, 20, 40, 60, 90],
  cover: true,
  playUntil: 'scroll-out',
  starts: 'in'
});

const treeSequence = new ScrollSequence({
  container: '.tree-sequence',
  scrollWith: '.tree-container',
  images: treeSequenceImages,
  imagesRoot: '/images/outro/',
  priorityFrames: [0, 20, 40, 60, 90],
  cover: true,
  starts: 'out',
  ends: 'in'
});




</script>









<script type="text/javascript">
    document.addEventListener("mousemove", parallax);
    function parallax(e){
      document.querySelectorAll(".object").forEach(function(move){

        var moving_value = move.getAttribute("data-value");
        var x = (e.clientX * moving_value) / 250;
        var y = (e.clientY * moving_value) / 250;

        move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
      });
    }
</script>

<script type="text/javascript">
    document.addEventListener("mousemove", parallax);
    function parallax(e){
      document.querySelectorAll(".objectone").forEach(function(move){

        var moving_value = move.getAttribute("data-value");
        var x = (e.clientX * moving_value) / 250;
        var y = (e.clientY * moving_value) / 250;

        move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
      });
    }
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js" integrity="sha512-qp27nuUylUgwBZJHsmm3W7klwuM5gke4prTvPok3X5zi50y3Mo8cgpeXegWWrdfuXyF2UdLWK/WCb5Mv7CKHcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
   var lastScrollTop = 0;

$(window).scroll(function() {

    var scrollTop = $(this).scrollTop();
    
    
    if(scrollTop > 9980){
 
      $('.image-id').show(); 
      $('.developer-new').show();
    
     }
     else{
      $('.image-id').hide();
      $('.developer-new').hide();
     
     }

});

</script>


<script>
   var lastScrollTop = 0;

$(window).scroll(function() {

    var scrollTop = $(this).scrollTop();
    
    if (scrollTop > 0) {
        $('.animate').hide();   
    } else {
        $('.animate').show();   
    }
    
    if(scrollTop > 2220){
      $('#home-show').addClass('home-color-chnage');  
     }
     else{
      $('#home-show').removeClass('home-color-chnage');
     }

});


</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script>
   

      $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 1000,
        from: 200,
        to: 500,
        grid: true
    });


</script>


   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script type="text/javascript">
           

        $(document).ready(function() {
         $('.Send_Email_form').on('submit', function(event){
			       event.preventDefault();

                var name = $("input[name='name']").val();
                var email = $("input[name='email']").val();
                var phone = $("input[name='phone']").val();
                var owner_occupier = $("input[name='owner_occupier']:checked").val();
                var bedroom = $("input[name='bedroom']:checked").val();
                var bathroom = $("input[name='bathroom']:checked").val();
                var car_parks = $("input[name='car_parks']:checked").val();
                var flexRadioDefault = $("input[name='flexRadioDefault']:checked").val();
                var message = $("textarea").val();
                var g_recaptcha_response=$('#g-recaptcha-response-regiser').val();

            
                $.ajax({
                  headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       },
                    url: "{{route('apartmet.register')}}",
                    type:'POST',
                    data: {name,email,phone,owner_occupier,bedroom,bathroom,car_parks,flexRadioDefault,message,g_recaptcha_response},
                    beforeSend: function() {
                     $('#loaderr').removeClass('hidden');
                     },
                    success: function(data) {
                     $(".Send_Email_form").trigger("reset");
                     printMsg(data);
                    },
                    complete: function(){
                     $('#loaderr').addClass('hidden');
                    },
                });
            }); 

            function printMsg (msg) {
               
              if($.isEmptyObject(msg.error)){
                  $('#alert-block-register').css('display','block').append('<strong>'+msg.success+'</strong>');
                  
              }else{
                $.each(msg.error, function( key, value ) { 
                     
                  $('.'+key+'_err').text(value);

                });
              }
            }
        });
    </script>



<script type="text/javascript">

       
            
        $(document).ready(function() {
            $(".Send_Email_form-new").on('submit', function(event){
			       event.preventDefault();

                var name = $("input[name='namee']").val();
                var email = $("input[name='emaill']").val();
                var phone = $("input[name='phonee']").val();
                

                var select_menu =$("#select-menu option:selected").val();

                var range = $('.js-range-slider').val();

               
                var flexRadioDefault = $("input[name='flexRadioDefault']:checked").val();
                var message =$("textarea#retail-message").val();

                var g_recaptcha_response =$('#g-recaptcha-response-ratil').val();

                $.ajax({
                     headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       },
                  
                    url: "{{route('retail.register')}}",
                    type:'POST',
                    data: {name,email,phone,select_menu,range,flexRadioDefault,message,g_recaptcha_response},
                    beforeSend: function() {
                     $('#loader').removeClass('hidden');
                     },
                     success: function(data) {
                     $(".Send_Email_form-new").trigger("reset");
                    
                     printMsg(data);
                     
                    },
                    complete: function(){
                     $('#loader').addClass('hidden');
                    },
                });
            }); 

            function printMsg (msg) {

             
               
              if($.isEmptyObject(msg.error)){
                  
                  $('#alert-block-retail').css('display','block').append('<strong>'+msg.success+'</strong>');
               
                  
              }else{
                $.each(msg.error, function( key, value ) { 

                  
                 
                  $('.'+key+'_errr').text(value);

                });
              }
            }
        });

   
    </script>





          

          




@endsection