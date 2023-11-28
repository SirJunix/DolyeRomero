 <!-- ***** Reservation Us Area Starts ***** -->
 <section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>You can contact us here</h2>
                    </div>
                    <p>We value your feedback, inquiries, and suggestions. Our team is here to assist you with any questions or concerns you may have about our Agricultural Insurance Application Assistance System. Please don't hesitate to get in touch with us through the following channels:</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">aiaas@gmail.com</a><br><a href="#">info@company.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{url('reservation')}}" method="post">

                        @csrf

                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Insurance Application Reservation</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                        </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                          </fieldset>
                        </div>
                        
                        <div class="col-lg-6">
                            <div id="filterDate2">    
                              <div class="input-group date" data-date-format="dd/mm/yyyy">
                                <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                <div class="input-group-addon" >
                                  <span class="glyphicon glyphicon-th"></span>
                                </div>
                              </div>
                            </div>   
                        </div>
                        
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->