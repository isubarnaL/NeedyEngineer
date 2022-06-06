<?php 

                              include_once 'dbCon.php';
                              $con = connect();
							  if(!empty($_POST['depart_id']) ) 
							  {
								//$uni_id=$_POST['uni_id'];
                                $depart_id=	$_POST['depart_id'];
                                 //$semester=	$_POST['semester'];				
                              $sql = "SELECT * FROM `subject_names` WHERE  depart_id='$depart_id' ;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['subject_id']; ?>"><?php echo $r['subject_name']; ?></option>
							  <?php }}
							  
else { echo '<option value="">not selected ggodly</option>';
}
							  ?>
							  