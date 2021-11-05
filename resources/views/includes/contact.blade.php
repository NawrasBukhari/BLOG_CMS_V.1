<div id="contact" class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-6 offset-md-3 ">
             <form class="main_form" action=""  method="post">
                <div class="row">
                   <div class="col-sm-12">
                   @csrf
                       <div class="col-sm-12">
                           <input class="contactus" placeholder="Name" type="text" name="Name" required="You Must Enter Your Name">
                       </div>
                       <div class="col-sm-12">
                       <input class="contactus" placeholder="Email" type="email" name=" Email" required="You Must Enter Your Email">
                       </div>
                       <div class="col-sm-12">
                       <input class="contactus" placeholder="Subject" type="text" name="Phone" required="You Must Enter the Subject">
                       </div>
                       <div class="col-sm-12">
                       <textarea class="textarea" placeholder="Message" type="text" name="Message" required="You Must Enter Your Message"></textarea>
                       </div>
                       <div class="col-sm-12">
                       <Button type="submit" name="send" value="Submit" class="send">Submit</Button>
                       </div>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
