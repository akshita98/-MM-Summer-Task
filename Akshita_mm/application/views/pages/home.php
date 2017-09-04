<!--Main news-->
		<div class="row">
			<div class="col-md-5">
				<div style="border: 2px solid grey">
        <?php foreach ($top_articles as $news) : ?>
				  <h2><?php echo $news['title']; ?></h2>
                   <a href="<?php echo site_url('index.php/website/view/'.$news['id']); ?>">
                   <img src="data:image/jpeg;base64,<?php echo base64_encode( $news['image'] ); ?>" alt="<?php echo $news['title']; ?>">
                  <div class="caption">
                      
                      <p><?php echo substr($news['article'],0,100); ?> <strong><u>Read full story</u></strong></a></p>
                      
                </div></a>
                 <?php endforeach ; ?>
			   </div>
		  </div>
			<!--Headlines-->


		   <div class="col-md-3">
				  <div class="row">
              <?php foreach ($recent_articles as $news) : ?>
                
                   <a href="<?php echo site_url('index.php/website/view/'.$news['id']); ?>">
                   <h4 class="well"><?php echo $news['title']; ?></h4>
                 </a>
               <?php endforeach ; ?>
          </div>
        </div>
               
					<!--<div class="box1"  style="border: 1px solid grey"><a href="#"><span class="textbox" >UAE rushes anti-cholera to UAE</span></a></div>
				</div>
				<div class="row">
					<div class="box1" style="border: 1px solid grey"><a href="#"><span class="textbox" >Triple Talaq to marry brother-in-law</span></a></div>
				</div>
				<div class="row">
					<div class="box1" style="border: 1px solid grey"><a href="#"><span class="textbox" >Summer temperature breaks last year record</span></a></div>
				</div>
				<div class="row">
					<div class="box1" style="border: 1px solid grey"><a href="#"><span class="textbox" >Chelsea becomes the King of England</span></a></div>
              </div>
				<div class="row">
					<div class="box1" style="border: 1px solid grey"><a href="#"><span class="textbox" >Trump wins warm welcome in Riyadh</span></a></div>
				</div>
				<div class="row">
					<div class="box1" style="border: 1px solid grey"><a href="#"><span class="textbox" >10 new schools to open in Odisha</span></a></div>
				</div>
				<div class="row">
					<div id="lastbox" style="border: 1px solid grey"><a href="#"><span class="textbox" >Delhi accident case reopen</span></a></div>
				</div>
          </div> -->
          <!--Daily Poll-->
		  <div class="col-md-4" id="borderpoll"  style="border:2px solid white">
                <div class="row">
                    <h1 class="lead" id="poll">Daily Poll</h1>
                    <h1 style="border: 1px solid grey"></h1>
               </div>
                <div class="row">
                   <h5><span id="question" class="lead"><b>Are you satisfied with Modi's government?</b></span></h5>
               </div>	
               <div class="row">
                   <div class="checkbox">
                       <label><input type="checkbox" value=""><span class="textbox">Yes. I am completely satisfied.</span></label><br>
                       <br>
                       <label><input type="checkbox" value=""><span class="textbox">No. I am not satisfied.</span></label><br>
                        <br>
                        <label><input type="checkbox" value=""><span class="textbox">Not interested.</span></label>
                   </div>
              </div>
              <div class="row">
                   <button type="button" class="btn btn-primary btn-lg" id="votebutton" >Vote and see results</button>
               </div>
              <h3 id="article" class="lead">Related articles</h3>
              <h1 style="border: 1px solid grey"></h1>
              <a href="#"><h5 class="textbox">Modi's Government</h5></a>
          </div>
      </div>
   </div>
   <br>
   

   <div class="container">
   		<div class="row">
   			<div class="col-md-6">
   				<a href="#"><img src="national.jpg" class="img1">
   				<h2 class="imagetitle">Pak Jet fly near Siachen; IAF says Indian Airspace not violated.</h2></a>
   			</div>	
   			<div class="col-md-6">
   				<a href="#"><img src="gauti.jpg" class="img1">
   				<h2 class="imagetitle">Gautam Gambhir leads KKR to another victory.</h2></a>
   			</div>	
   	    </div>
   	    <br>
   	    <div class="row">
   	    	<div class="col-md-12">
   	    		<div class="page-header">
           			<h3 class="lead" style="font-size: 25px;" >In case you missed it</h3>
           		</div>
   	    		<div class="row">
        			<div class="col-md-3">
        				<a href="#"><img src="modi.jpg" class="imagebox"  >
        				<h5 class="striptopic"><strong>Modi's Swachh Bharat Abhiyan supported by Bill Gates.</strong></h5></a>
        			</div>
        			<div class="col-md-3">
        				<a href="#"><img src="sonam.jpg" class="imagebox">
        				<h5 class="striptopic"><strong>Bollywood celebrity at Cannes 2017</strong></h5></a>
        			</div>
        			<div class="col-md-3">
        				<a href="#"><a href="#"><img src="terry.jpg" class="imagebox">
        				<h5 class="striptopic"><strong>Terry retires by winning an EPL title</strong></h5></a>
        			</div>
        			<div class="col-md-3">
        				<a href="#"><img src="jip.jpg" class="imagebox">
        				<h5 class="striptopic"><strong>Jio grosses as No.1 company in India.</strong></h5></a>
        			</div>
        	  </div>
          </div>
       </div>
       
        <div class="row">
           <div class="col-md-12">
           		<div class="page-header">
           			<h3 class="lead" style="font-size: 25px;">Entertainment</h3>
           		</div>
             <a href="#"><img src="ash2.jpg" id="subimage"><h2  class="imagetitle2"> Beauty undefined: Aishwarya Rai shines at Cannes 2017</h2></a>
            </div>
   	   </div>
   	  <div class="row">
          <div class="col-md-12">
          		<div class="page-header">
           			<h3 class="lead" style="font-size: 25px;">Sports</h3>
           		</div>
          	 <a href="#"><img src="terry2.jpg" id="subimage"><h2  class="imagetitle2"> End of an era: John Terry retires from football</h2></a>
          </div>
   	   </div>
   	   <br>
   	   <br>
       <h1 style="border:1px solid grey"></h1>
       <br>
   	   	<div class="row">
   	   		<div class="col-md-2">
   	   			<a href="#"><div class="circle">
   	   				<h5 class="circletext"><strong>Feedback</strong></h5>
   	   			</div></a>
   	   		</div>	
   	   		<div class="col-md-2">
   	   			<a href="#"><div class="circle">
   	   				<h5 class="circletext"><strong>Our Apps</strong></h5>
   	   			</div></a>
   	   	  </div>
   	   	  <div class="col-md-2">
   	   			<a href="#"><div class="circle">
   	   				<h5 class="circletext"><strong>Get the Paper</strong></h5>
   	   			</div></a>
   	   	  </div>
   	   	  <div class="col-md-2">
   	   			<a href="#"><div class="circle">
   	   				<h5 class="circletext"><strong>Our Location</strong></h5>
   	   			</div></a>
   	   	  </div>
   	   	  <div class="col-md-2">
   	   			<a href="#"><div class="circle">
   	   				<h5 class="circletext"><strong>Advanced Search</strong></h5>
   	   			</div></a>
   	   	  </div>
   	   	  <div class="col-md-2">
   	   			<a href="#"><div class="circle">
   	   				<h5 class="circletext"><strong>Site map</strong></h5>
   	   			</div></a>
   	   	  </div>
   	  </div>
   	  <br>
   	  <h1 style="border:1px solid grey"></h1>
   	  <br>
   	  <br>