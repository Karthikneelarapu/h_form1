 <form name="form1" enctype="multipart/form-data" method="post" action="file.php" id="application-form" class="form">
              <div class="row clearfix">
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" value="" placeholder="Enter Your Name"  name="name" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" value="" placeholder="Enter Your Email Address" name="email" required >
                  </div>
                  <div class="form-group">
                    <label class="form-label">Phone</label>
                    <input type="phone" value="" placeholder="Contact Number" name="phone" required >
                  </div>
                  <div class="clearfix"></div>
                  
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="form-label">Message</label>
                    <textarea name="message" placeholder="Type Message Here"></textarea>
                  </div>
                </div>
              </div>
                <p>
                 
                  <input type="file" id="exampleInputFile" name="my_file">
                </p>
              <div class="form-group text-right">
                <button type="submit"  class="theme-btn dark-btn hvr-bounce-to-right">
                  <span class="fa fa-envelope"></span> Send Message </button>
              </div>
            </form>