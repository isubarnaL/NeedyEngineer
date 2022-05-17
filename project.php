       <!-- Projects-->
        <section class="projects-section bg-gray" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <h1 class="text-white">Find Notes by Subject:</h1><br>
                  <form name="subjform" id="subjform" action="notes.php?action=shownotes">
		              <div class="btn-group">
                          <select class="sum-control btn-black" name="UniId" id="UniId" valiclass="select" valimessage="Please select University" onchange="getResponseCatCollege(this.value,'divsemester')">
                          <option value="">----University----</option>
                          <option value="1">PU</option><option value="2">TU</option><option value="3">PU(Pokhara)</option><option value="4">KU</option><option value="5"> FWU</option><option value="6"> MWU</option></select>
			              <select class="sum-control btn-black" name="DeptId" id="DeptId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                          <option value="">----Department----</option>
                          <option value="CVL">Civil</option><option value="CMP">Computer</option><option value="ARC">Architecture</option><option value="ELC">Electrical</option><option value="MCH">Mechanical</option><option value="CHL">Chemical</option> </select>
			              <select class="sum-control btn-black"  name="SemId" id="SemId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                          <option value="">----Semester----</option>
                          <option value="I">I</option><option value="II">II</option><option value="III">III</option><option value="IV">IV</option><option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VII">VIII</option> </select>
		               	  <select class="sum-control btn-black" name="SubjId" id="SubjId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                          <option value="">----Subject----</option>
                          <option value="1">SCIENCE AND</option><option value="2">MANAGEMENT</option><option value="3">ARTS</option><option value="4">EDUCATION</option><option value="5">LAW</option><option value="6">MEDICAL AND ALLIED</option>          </select>
                          <input class="btn btn-black mx-auto" type="submit" value="Search"/> 
                      </div>
                  </form>		
			      <br><br>
			
			    <h1 class="text-white">Find Notes by College:</h1><br>
			      <form name="clzform" id="clzform" action="notes.php?action=shownotes">
		               <div class="btn-group">
                           <select class="sum-control btn-black"  name="UniId" id="UniId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
						   <option value="">----University----</option>
                           <option value="1">PU</option><option value="2">TU</option><option value="3">PU(Pokhara)</option><option value="4">KU</option><option value="5"> FWU</option><option value="6"> MWU</option></select>
		                   <select class="sum-control btn-black"  name="UniId" id="UniId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                           <option value="">----College----</option>
                           <option value="1">SCIENCE AND</option><option value="2">MANAGEMENT</option><option value="3">ARTS</option><option value="4">EDUCATION</option><option value="5">LAW</option><option value="6">MEDICAL AND ALLIED</option>          </select>
			               <select class="sum-control btn-black" name="DeptId" id="DeptId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                           <option value="">----Department----</option>
                           <option value="CVL">Civil</option><option value="CMP">Computer</option><option value="ARC">Architecture</option><option value="ELC">Electrical</option><option value="MCH">Mechanical</option> </select>
			               <select class="sum-control btn-black" name="SemId" id="SemId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                           <option value="">----Semester----</option>
                          <option value="I">I</option><option value="II">II</option><option value="III">III</option><option value="IV">IV</option><option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VII">VIII</option> </select>
						  <input class="btn btn-black mx-auto" type="submit" value="Search"/>
                       </div>
				  </form>
				  <br><br>
				
                <h1 class="text-white">Find Notes by NoteMaker:</h1><br>
                   <form name="makerform" id="makerform" action="notes.php?action=shownotes">
			            <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-black dropdown-toggle" type="button" data-toggle="dropdown">Select the Notemaker<span class="caret"></span></button>
                                   <ul class="dropdown-menu">
                                       <input class="form-control" id="myInput" type="text" placeholder="Search.."/>
                                          <li>name of person..</li>
										  <li>name of person..</li>
										  <li>name of person..</li>
										  <li>name of person..</li>
                                         
                                   </ul>
                            </div>
  						  <input class="btn btn-black mx-auto" type="submit" value="Search" style="margin-left:0.5rem !important;"/>
				        </div>
                  </form>
			      <br><br>
			  
               <h1 class="text-white">One Day Before Notes:</h1><br>
                  <form name="odbnform" id="odbnform" action="notes.php?action=shownotes">
	                   <div class="btn-group">
                            <select class="sum-control btn-black" name="UniId" id="UniId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                            <option value="">----University----</option>
                            <option value="1">PU</option><option value="2">TU</option><option value="3">PU(Pokhara)</option><option value="4">KU</option><option value="5">FWU</option><option value="6">MWU</option></select>
			                <select class="sum-control btn-black" name="DeptId" id="DeptId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                            <option value="">----Department----</option>
                            <option value="CVL">Civil</option><option value="CMP">Computer</option><option value="ARC">Architecture</option><option value="ELC">Electrical</option><option value="MCH">Mechanical</option> </select>
			                <select class="sum-control btn-black" name="SemId" id="SemId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                            <option value="">----Semester----</option>
                            <option value="I">I</option><option value="II">II</option><option value="III">III</option><option value="IV">IV</option><option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VII">VIII</option> </select>
						    <select class="sum-control btn-black" name="SubjId" id="SubjId" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                            <option value="">----Subject----</option>
                            <option value="1">SCIENCE AND</option><option value="2">MANAGEMENT</option><option value="3">ARTS</option><option value="4">EDUCATION</option><option value="5">LAW</option><option value="6">MEDICAL AND ALLIED</option>          </select>
		                	<select class="sum-control btn-black" name="EType" id="EType" valiclass="select" valimessage="Please select faculty" onchange="getResponseCatCollege(this.value,'divsemester')">
                            <option value="">----Exam Type----</option>
                            <option value="R">Regular</option><option value="B">Back(Partial)</option></select>
                            <input class="btn btn-black mx-auto" type="submit" value="Search"/>
                       </div>
				  </form>
                  <br><br>
            </div>
			                <!-- Project One Row-->

                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-gray text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-center">
                                    <h4 class="text-white">PUBLISH YOUR NOTES</h4>
                                    <p class="mb-0 text-white-50">If you want to publish your notes here,please <a class="nav-link js-scroll-trigger" href="#contact">contact</a> us.</p>
                                    <hr class="d-none d-lg-block mb-0 mc-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
	    <br>