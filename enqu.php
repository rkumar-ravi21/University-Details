<html>
<body>
<div style="text-align:center">
  <h2 class="tmodal-title text-center" style="margin-left:80px;">Enquire Form</h2>

  <div class="modal-body">
	   <div class="row">

       <div class="col-md-5 text-center">
			      <h3>Do you have any questions?</h3>
						<p>Our team will contact you in next 24 hours.</p>
						<p>Feel free to call us : +91 8460297398</p>
						<img src="support.png" class="" width="200" />
      </div>

			<div class="col-md-7">
			     <form method="post" action="enquiry.php">
             <input type="hidden" name="action" value="add" />
             <input type="hidden" name="type" value="enquiry" />
            <div class="row">
               <br><br>
            <div class="col-md-12 col-sm-12">
              <div class="form-group">
                  <label class="control-label">Name</label>
								  <input type="text" placeholder="Name" class="form-control" name="name" value="" required />
							</div>
						</div>
							<br><br>
            <div class="col-md-12 col-sm-12">
              <div class="form-group">
                  <label class="control-label">Email</label>
									<input type="email" placeholder="Email" class="form-control" name="email" value="" required />
							</div>
						</div>
						  <br><br>
            <div class="col-md-12 col-sm-12">
              <div class="form-group">
                  <label class="control-label">Mobile No</label>
									<input type="text" placeholder="Mobile No" class="form-control" name="mobile" value="" required />
							</div>
						</div>
						  <br><br>
            <div class="col-md-12 col-sm-12">
              <div class="form-group">
                  <label class="control-label">Reason</label>
									<select name="reason" class="form-control" required />
									<option value="">Select Enquire Reason</option>
									<option value="Study Abroad">Study Abroad</option>
									<option value="Immigration">Immigration</option>
									<option value="Visitor Visa">Visitor Visa</option>
									<option value="Business Immigration">Business Immigration</option>
									</select>
							</div>
						</div>
					</div>
			</div>
		</div>
  </div>

  <div class="modal-footer">
    <button type="submit" value="submit" class="btn btn-primary text-width-700 text-uppercase">Send</button>
  </div>
	</form>
</div>
</body>
</html>
