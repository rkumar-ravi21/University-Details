<html>
<body>
<section class="content-section" style="padding-top:10px !important;">
            <div class="container">
                <div class="row">

                    <!-- ========== SECTION HEADER ========== -->
                    <div class="col-md-12 section-header text-center">
                        <h3 class="section-title underline">Evaluate Your Profile</h3>

                    </div> <br><br><!-- end section-header -->

                    <!-- ========== left part ========== -->
                    <div class="col-md-12 ">
                       <form class="bv-form" id="form121" method="post" name="form" action="evaluation.php" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                            <div class="form-group col-md-6 has-feedback">
                                <label for="name"> Preferred Destination</label>
                                <select name="destination" class="form-control input-style-2" data-bv-field="destination">
								<option value="0" selected="" disabled="">Your Preferred Destination</option>
								<option value="CANADA">Canada </option>
								<option value="UK">United Kingdom</option>
                                <option value="USA">USA</option>
							</select><i class="form-control-feedback" data-bv-icon-for="destination" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="destination" data-bv-result="NOT_VALIDATED" style="display: none;">The preferred destination is required and cannot be empty</small></div>
                           <br><br> <div class="form-group col-md-6 has-feedback">
                                <label for="name"> Area of Interest</label>

                                <select name="interest" class="form-control input-style-2" data-bv-field="interest">
								<option value="0" selected="" disabled="">Your area of Interest</option>
								<option value="Computer and Information Technology">Computer and Information Technology</option>
                                <option value="Design and Art">Design and Art</option>
                                <option value="MBA">MBA</option>
                                <option value="Medical">Medical</option>
							</select><i class="form-control-feedback" data-bv-icon-for="interest" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="interest" data-bv-result="NOT_VALIDATED" style="display: none;">The area of interest is required and cannot be empty</small></div>
                            <br><br><div class="form-group col-md-12 has-feedback">
                                <label for="name"> Level of course</label>

                                <select name="course" class="form-control input-style-2" data-bv-field="course">
								<option value="0" selected="" disabled="">Level of course looking for</option>
								<option value="Bachelors">Bachelors</option>
								<option value="Certificate">Certificate</option>
								<option value="Masters">Masters</option>
                                <option value="Non degree courses">Non degree courses</option>
                                </select><i class="form-control-feedback" data-bv-icon-for="course" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="course" data-bv-result="NOT_VALIDATED" style="display: none;">The level of course looking for is required and cannot be empty</small></div>
                           <br><br> <div class="form-group col-md-6 has-feedback">
                                <label for="">Full Name</label>
                                <input type="text" name="fullname" placeholder="Full name" class="form-control input-style-2" data-bv-field="fullname"><i class="form-control-feedback" data-bv-icon-for="fullname" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="fullname" data-bv-result="NOT_VALIDATED" style="display: none;">The first tname is required and cannot be empty</small><small class="help-block" data-bv-validator="regexp" data-bv-for="fullname" data-bv-result="NOT_VALIDATED" style="display: none;">The full name  can consist of alphabetical characters and spaces only</small></div>
                            <br><br><div class="form-group col-md-6 has-feedback">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="Email address" class="form-control input-style-2" data-bv-field="email"><i class="form-control-feedback" data-bv-icon-for="email" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The email address is required and cannot be empty</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small></div>
                            <br><br><div class="form-group  col-md-6 has-feedback">
                                <label for="">Mobile</label>
                                <input type="text" name="mobile" placeholder="Mobile" class="form-control input-style-2" data-bv-field="mobile"><i class="form-control-feedback" data-bv-icon-for="mobile" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="mobile" data-bv-result="NOT_VALIDATED" style="display: none;">The mobile number is required and cannot be empty</small><small class="help-block" data-bv-validator="regexp" data-bv-for="mobile" data-bv-result="NOT_VALIDATED" style="display: none;">The mobile number is invalid</small></div>
                            <br><br><div class="form-group  col-md-6 has-feedback">
                                <label for="">City</label>
                               <input type="text" name="city" placeholder="City" class="form-control input-style-2" data-bv-field="city"><i class="form-control-feedback" data-bv-icon-for="city" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="city" data-bv-result="NOT_VALIDATED" style="display: none;">The city is required and cannot be empty</small></div>
							<br><br><div class="form-group  col-md-6 has-feedback">
                                <label for="">Last Qualification</label>
                                <select name="last_qualification" class="form-control input-style-2" data-bv-field="last_qualification">
								  <option value="" selected="" disabled="">Last Qualification</option>
								  <option value="10th">10th</option>
								  <option value="12th">12th</option>
								  <option value="Bachelores">Bachelors</option>
								  <option value="Masters">Masters</option>
								</select><i class="form-control-feedback" data-bv-icon-for="last_qualification" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="last_qualification" data-bv-result="NOT_VALIDATED" style="display: none;">The last_qualification is required and cannot be empty</small></div>
                            <!--<div class="form-group col-md-6">
                                <label for="">10th (%)</label>
                                <input type="text" name="tenth" placeholder="10th (%)" class="form-control input-style-2">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="">12th (%)</label>
                                <input type="text" name="twelth" placeholder="12th (%)" class="form-control input-style-2">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="">Bachelores (%)</label>
                              <input type="text" name="bech" placeholder="Bachelores (%)" class="form-control input-style-2">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="">Masters (%)</label>
                               <input type="text" name="mast" placeholder="Masters (%)" class="form-control input-style-2">
                            </div>-->
							<br><br><div class="form-group  col-md-6 has-feedback">
                                <label for="">Score (%)</label>
                               <input type="text" name="score" placeholder="Score (%)" class="form-control input-style-2" data-bv-field="score"><i class="form-control-feedback" data-bv-icon-for="score" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="score" data-bv-result="NOT_VALIDATED" style="display: none;">The score(%) is required and cannot be empty</small></div>

                            <!--<div class="form-group  col-md-6">
                                <label for="">Year Of Entry</label>
                                <select name="year" class="form-control input-style-2">
								<option value="0" selected="" disabled="">Year Of Entry</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								</select>
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="">Intake</label>
                             <select name="Intake" class="form-control input-style-2">
								<option value="0" selected="" disabled="">Intake</option>
								<option value="Spring">Spring</option>
								<option value="Fall">Fall</option>
							</select>
                            </div>

                            <div class="form-group  col-md-12">
                                <label for="message">Message</label>
                                <textarea class="form-control input-style-2" id="message" name="message" placeholder="Enter your message.." required rows="3"></textarea>
                            </div>-->

							<br><br><div class="clearfix"></div>
                            <br><br><div class="form-group col-md-6">
                                     <button type="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right pull-left" action="submit">Submit</button>
                            </div>
					    </form>
                    </div>

<div class="clearfix"></div>





                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

</body>
</html>
