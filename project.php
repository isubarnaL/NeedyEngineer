       <!-- Projects-->
        <section class="projects-section bg-gray" id="projects">
            <div class="container">
		 <!-- delete from here Row-->	
                <!-- Featured Project Row-->
             <center>   <h1 class="text-white">Find Notes by Subject:</h1><br>
				<div class="btn-group" style="border: 2px solid black; padding:50px;" ;>
                  <form class="form-inline" action="notes.php" method="POST" enctype="multipart/form-data">
		               
					  
                          <select class="sum-control btn-black" name="uni_id" placeholder="xxxyyyy" >
                          <option value="">----University----</option>
                          <?php 
                              include 'dbCon.php';
                              $con = connect();
                              $sql = "SELECT * FROM `uni_tables`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['uni_id']; ?>"><?php echo $r['uni_name']; ?></option>
                            <?php } ?>
                         </select>
			              <select class="sum-control flex-fill btn-black" name="depart_id"  >
                          <option value="">----Department----</option>
                            <?php 
							
                              $con = connect();
                              $sql = "SELECT * FROM `depart_tables` ORDER BY id ASC;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['depart_id']; ?>"><?php echo $r['depart_name']; ?></option>
                            <?php } ?> </select>
			              <select class="sum-control btn-black"  name="semester"  >
                          <option value="">----Semester----</option>
                          <?php 
                              
                              $con = connect();
                              $sql = "SELECT * FROM `semester`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['semester']; ?>"><?php echo $r['sem_name']; ?></option>
                            <?php } ?> </select>
		               	  <select class="sum-control btn-black" name="subject_id"  >
                          <option value="">----Subject----</option>
                                   <?php 
                              
                              $con = connect();
                              $sql = "SELECT * FROM `subject_names`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['subject_id']; ?>"><?php echo $r['subject_name']; ?></option>
                            <?php } ?> </select>
							
                        <div class="featured-text text-center text-lg-left">
                          <button class="btn btn-black mx-auto" type="submit" name="subjsearch" >search</button></div></center>
                  </form>	
</div>
			      <br><br><hr>
				  <h5 class="text-warning"><center>OR<br><i class="fa fa-chevron-down" aria-hidden="true"></i></center></h5><hr><br>
			
			  <center>  <h1 class="text-white">Find Notes by College:</h1><br>
				<div class="btn-group" style="border: 2px solid black; padding:50px;">
			      <form class="form-inline" action="notes.php" method="POST" enctype="multipart/form-data">
		               
                           <select class="sum-control btn-black"  name="uni_id"  >
						   <option value="">----University----</option>
						     <?php 
                             // include 'dbCon.php';
                              $con = connect();
                              $sql = "SELECT * FROM `uni_tables`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['uni_id']; ?>"><?php echo $r['uni_name']; ?></option>
                            <?php } ?>
                           </select>
		                   <select class="sum-control btn-black"  name="college_id"  >
                           <option value="">----College----</option>
						    <?php 
                              
                              $con = connect();
                              $sql = "SELECT * FROM `college_names`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['college_id']; ?>"><?php echo $r['college_name']; ?></option>
                            <?php } ?>
                           </select>
			               <select class="sum-control btn-black" name="depart_id"  >
                           <option value="">----Department----</option>
						     <?php 
                              
                              $con = connect();
                              $sql = "SELECT * FROM `depart_tables` ORDER BY id ASC;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['depart_id']; ?>"><?php echo $r['depart_name']; ?></option>
                            <?php } ?>
						   </select>
                           <select class="sum-control btn-black" name="semester" >
                           <option value="">----Semester----</option>
						     <?php 
                              
                              $con = connect();
                              $sql = "SELECT * FROM `semester`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['semester']; ?>"><?php echo $r['sem_name']; ?></option>
                            <?php } ?> </select>
							   <div class="featured-text text-center text-lg-left">
                          <button class="btn btn-black mx-auto" type="submit" name="clzsearch">search <i class="fa fa-search"></i></button></div>
                       </div></center>
				  </form>
				  <br><br><hr>
				  <h5 class="text-warning"><center>OR<br><i class="fa fa-chevron-down" aria-hidden="true"></i></center></h5><hr><br>
				
                <center><h1 class="text-white">Find Notes by NoteMaker:</h1><br>
				
				<div class="btn-group" style="border: 2px solid black; padding:50px;">
                   <form class="form-inline" action="notes.php" method="POST" enctype="multipart/form-data">
			            
                            <select class="sum-control btn-black"  name="notemaker_id"  >
						   <option value="">----Notemaker----</option>
						 <?php 
                    
                              $con = connect();
                              $sql = "SELECT * FROM `notemaker_tables`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['notemaker_id']; ?>"><?php echo $r['notemaker_name']; ?></option>
                            <?php } ?>
                         </select>
                           <div class="featured-text text-center text-lg-left">
  						  <button class="btn btn-black mx-auto" type="submit" name="ntmkrsearch">search <i class="fa fa-search"></i></button></div>
				        </div>
						</center>
                  </form>
			      
				  
				         
				  
			 <!-- 
               <h1 class="text-white">One Day Before Notes:</h1><br>
                  <form name="odbnform" id="odbnform" action="notes.php?action=shownotes">
	                   <div class="btn-group">
                            <select class="sum-control btn-black" name="UniId" id="UniId"  >
                            <option value="">----University----</option>
                            <option value="1">PU</option><option value="2">TU</option><option value="3">PU(Pokhara)</option><option value="4">KU</option><option value="5">FWU</option><option value="6">MWU</option></select>
			                <select class="sum-control btn-black" name="DeptId" id="DeptId"  >
                            <option value="">----Department----</option>
                            <option value="CVL">Civil</option><option value="CMP">Computer</option><option value="ARC">Architecture</option><option value="ELC">Electrical</option><option value="MCH">Mechanical</option> </select>
			                <select class="sum-control btn-black" name="SemId" id="SemId"  >
                            <option value="">----Semester----</option>
                            <option value="I">I</option><option value="II">II</option><option value="III">III</option><option value="IV">IV</option><option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VII">VIII</option> </select>
						    <select class="sum-control btn-black" name="SubjId" id="SubjId"  >
                            <option value="">----Subject----</option>
                            <option value="1">SCIENCE AND</option><option value="2">MANAGEMENT</option><option value="3">ARTS</option><option value="4">EDUCATION</option><option value="5">LAW</option><option value="6">MEDICAL AND ALLIED</option>          </select>
		                	
                            <input class="btn btn-black mx-auto" type="submit" value="Search"/>
                       </div>
				  </form>
                  <br><br>
				  -->
            </div>
			                <!-- Project One Row-->

                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-gray text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-center">
                                    <h4 class="text-white">PUBLISH YOUR NOTES</h4>
                                    <p class="mb-0 text-white-50">If you want to publish your notes here, please <a class="nav-link js-scroll-trigger" href="#contact">contact</a> us.</p>
                                    <hr class="d-none d-lg-block mb-0 mc-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
	    