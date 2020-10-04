	
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png">
  </head>

  <body>

  
   <div class="container-scroller">
<!------------------------------------------------ Header templete ------------------------------------------------>
	<?php include("../int_new/Navbar_pcr.php");?>
  
  <!------------------------------------------------ Header templete ------------------------------------------------>
	<div class="container-fluid page-body-wrapper">
	<?php
    include("../int_new/header_creator.php");
    include("../ENG/connectpcr.php");?>
 <?php
  $sql = "SELECT *  FROM `pcr_annual_plan` LEFT JOIN pcr_section_anp on pcr_annual_plan.`anp_sec_id` = pcr_section_anp.sec_id   
  LEFT JOIN pcr_change_type on pcr_annual_plan.`anp_ct_id` = pcr_change_type.ct_id LEFT JOIN pcr_change_point on pcr_annual_plan.anp_cp_id = pcr_change_point.cp_id 
  LEFT JOIN pcr_product ON pcr_annual_plan.anp_pro_id = pcr_product.pro_id LEFT JOIN pcr_rank ON pcr_annual_plan.anp_rk_id = pcr_rank.rk_id 
  WHERE `anp_anp_number` LIKE 'DN-FY20-001'";
  
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

 ?>
		
	    <div class="main-panel">
          <div class="content-wrapper">
			
		  			<!--space header-->
			
			    
					  <div class="card">
			 <div class="card-header headC">
    <center style="color:white;"><h5><b>Annual Plan</b><h5></center>
	 
  </div>
			    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <form class="form-sample">
                                        <table class="tg" width="85%">
                                        
                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td style="width: 550px; "><b>Annual Plan No : </b><?php echo $row["anp_anp_number"];?></td>
												<td class="tg-0lax"><b>Crated Date : </b><?php echo $row["anp_create_date"] ;?></td>	
                                            </tr>

                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td><b>Issue : </b><?php echo $row["anp_issue"];?></td>
                                                <td><b>Section : </b><?php echo $row["sec_name"];?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td><b>Company : </b><?php echo $row["anp_company"];?></td>
                                                <?php 
                                                if($row["anp_add_item"] == 1){
                                                    $row["anp_add_item"] = "Yes";
                                                }else{
                                                    $row["anp_add_item"] = "NO";
                                                }
                                                ?>
                                                <td><b>Addition item : </b><?php echo $row["anp_add_item"];?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td><b>Title : </b><?php echo $row["anp_title"];?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td><b>Change type : </b><?php echo $row["ct_name"];?></td>
                                                <td><b>Rank : </b><?php echo $row["rk_name"];?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td><b>Customer submission : </b><?php echo $row["anp_cus_sub"];?></td>
                                                <?php 
                                                if($row["anp_plan_review"] == 1){
                                                    $row["anp_plan_review"] = "Yes";
                                                }else{
                                                    $row["anp_plan_review"] = "NO";
                                                }
                                                ?>
                                                <td><b>Planning review : </b><?php echo $row["anp_plan_review"];?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td><b>Product : </b><?php echo $row["pro_name"];?></td>
                                                <td><b>Part name : </b><?php echo $row["anp_part_name"];?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td><b>Output : </b><?php echo $row["anp_output"];?></td>
                                                <td><b>Customer : </b><?php echo $row["anp_concern"];?></td>
                                            </tr>
                                            <br>
                                            <tr>
                                                <td style="width: 100px;"></td>
                                                <td><b>Line : </b><?php echo $row["anp_line"];?></td>
                                                <td><b>Process : </b><?php echo $row["anp_process_name"];?></td>
                                            </tr>
                                            <tr style="height: 0px">
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<div class="col-sm-12" style="text-align: right;"> 											
												<button  style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-dark btn-fw" onclick="window.location.href='IN0021.php';">
												Cancel
												</button>
											</div>	
										</div>	
									</div>	
								</div>
                            </div>
                        </div>
                    </div>
                    	
														

<!---->
              </div>

			
			
	
			

			
			
				
	
               
		

              </div>
            </div>
			
	</div>


	   
  </body>


  <style type="text/css">
                            .tg {
                                border: 0;
                                border-spacing: 0;
                            }
                            
                            .tg td {
                                font-family: 'Ruda', sans-serif;
                                font-size: 14px;
                                padding: 10px 5px;
                            }
                            
                            .tg th {
                                font-family: 'Ruda', sans-serif;
                                font-size: 14px;
                                font-weight: normal;
                                padding: 10px 5px;
                            }
                            
                            .tg .tg-0lax {
                                text-align: left;
                                vertical-align: top;
                            }
                            
                            .header-text {
                                text-align: center !important;
                                font-size: 25px;
                            }
                            
                            li {
                                padding-bottom: 10px !important;
                            }
.headC{
	background-color: #124373;
	height: 45px;
}
button.C{
      width : 25%;	
	  height : 25px;
}
button.navbtn{
  position: absolute;
  top:50%;
  right: 0;
  width: 100px;
  height : 35px;
  transform: translateY(-50%);
	
}
</style>

<!--confirm button-->
<style>
/*confirm button*/
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
/*confirm button*/
</style>
</html>