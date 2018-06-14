<?php 
include("include/header.php");
?>
		<link rel="stylesheet" href="vendor/jsgrid/dist/jsgrid-theme.min.css">
		<link rel="stylesheet" href="vendor/DataTables/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="vendor/DataTables/Buttons/css/buttons.dataTables.min.css">
		<link rel="stylesheet" href="vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css"> 
		
<div class="site-content">
				<!-- Content -->
				<div class="content-area py-1">
					<div class="container-fluid">
						<h4>View New Admission Request</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item active">New Admission Request</li>
						</ol>
						<div class="box box-block bg-white">
							<h5 class="mb-1">Exporting New Admission Request List Data</h5>
							<table class="table jsgrid table-striped table-bordered dataTable table-responsive" id="table-2">
								<thead> 
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Date of Birth</th>
										<th>Gender</th>
										<th>Medium</th>
										<th>email</th>
										<th>Father's Name</th>
										<th>Father's Mob. No</th>
										<th>Father's Profession</th>
										<th>Permanent Address</th>
										<th>Permanent Pincode</th>
										<th>Permanent Mobile</th>
										<th>Local Address</th>
										<th>Local Pincode</th>
										<th>Local Mobile</th>
										<th>Regular Classes</th>
										<th>Weekend Classes</th>
										<th>Course</th>
										<th>If Optional, Subject</th>
										<th>Class XII year</th>
										<th>Class XII subject</th>
										<th>Class XII univ</th>
										<th>Class XII marks</th>
										<th>Class XII division</th>
										<th>Class XII Medium</th>
										<th>Graduation year</th>
										<th>Graduation subject</th>
										<th>Graduation univ</th>
										<th>Graduation division</th>
										<th>Graduation marks</th>
										<th>Graduation medium</th>
										<th>Post Graduation Gyear</th>
										<th>Post Graduation subject</th>
										<th>Post Graduation Guniv</th>
										<th>Post Graduation marks</th>
										<th>Post Graduation division</th>
										<th>Post Graduation medium</th>
										<th>Additional year</th>
										<th>Additional subject</th>
										<th>Additional univ</th>
										<th>Additional marks</th>
										<th>Additional division</th>
										<th>Additional medium</th>
										<th>Last exam</th>
										<th>Subjects for the Main Exam</th>
										<th>Civil Services/PCS Examination earlier</th>
										<th>Family background</th>
										<th>IF student</th>
										<th>IF employed</th>
										<th>Newspaper</th>
										<th>Magazines</th>
										<th>Need Hostel</th>
										<th>Recommended By</th>
										<th>Date</th>
										<th>Signature</th>
										<th>ip_address</th>
										<th>Date Added</th>
									</tr>
								</thead>
								<tbody>
                                <?php
                                $stmt = $reg_user->runQuery("SELECT * FROM request_admission ORDER BY date_added DESC");
                                $stmt->execute();
                                for($i=1; $stmt1 = $stmt->fetchObject(); $i++)
                                {
                                ?><tr>
										<td><?php echo $i;?></td>
										<td><?php echo $stmt1->fullname;?></td>
										<td><?php echo $stmt1->dateofbirth;?></td>
										<td><?php echo $stmt1->gender;?></td>
										<td><?php echo $stmt1->medium;?></td>
										<td><?php echo $stmt1->email;?>
										<td><?php echo $stmt1->father_name;?></td>
										<td><?php echo $stmt1->father_mobile;?></td>
										<td><?php echo $stmt1->father_profession;?>
										<td><?php echo $stmt1->permanent_address;?></td>
										<td><?php echo $stmt1->permanent_pincode; ?></td>
										<td><?php echo $stmt1->permanent_mobile;?></td>
										<td><?php echo $stmt1->local_address;?></td>
										<td><?php echo $stmt1->local_picode;?></td>
										<td><?php echo $stmt1->local_mobile;?></td>
										<td><?php echo $stmt1->regular_session;?></td>
										<td><?php echo $stmt1->weekend_session;?>
										<td><?php echo $stmt1->course;?></td>
										<td><?php echo $stmt1->course_optional_subject;?></td>
										<td><?php echo $stmt1->qualification_12year;?>
										<td><?php echo $stmt1->qualification_12subject;?></td>
										<td><?php echo $stmt1->qualification_12univ; ?></td>
										<td><?php echo $stmt1->qualification_12marks;?></td>
										<td><?php echo $stmt1->qualification_12division;?></td>
										<td><?php echo $stmt1->qualification_12medium;?></td>
										<td><?php echo $stmt1->qualification_Gradyear;?></td>
										<td><?php echo $stmt1->qualification_Gradsubject;?></td>
										<td><?php echo $stmt1->qualification_Graduniv;?>
										<td><?php echo $stmt1->qualification_Graddivision;?></td>
										<td><?php echo $stmt1->qualification_Gradmarks;?></td>
										<td><?php echo $stmt1->qualification_Gradmedium;?>
										<td><?php echo $stmt1->qualification_PostGyear;?></td>
										<td><?php echo $stmt1->qualification_PostGsubject; ?></td>
										<td><?php echo $stmt1->qualification_PostGuniv;?></td>
										<td><?php echo $stmt1->qualification_PostGmarks;?></td>
										<td><?php echo $stmt1->qualification_PostGdivision;?></td>
										<td><?php echo $stmt1->qualification_PostGmedium;?></td>
										<td><?php echo $stmt1->qualification_AddQyear;?></td>
										<td><?php echo $stmt1->qualification_AddQsubject;?>
										<td><?php echo $stmt1->qualification_AddQuniv;?></td>
										<td><?php echo $stmt1->qualification_AddQmarks;?></td>
										<td><?php echo $stmt1->qualification_AddQdivision;?>
										<td><?php echo $stmt1->qualification_AddQmedium;?></td>
										<td><?php echo $stmt1->last_exam; ?></td>
										<td><?php echo $stmt1->optional_subject_main;?></td>
										<td><?php echo $stmt1->appeared_civil_exam;?></td>
										<td><?php echo $stmt1->family_bground;?></td>
										<td><?php echo $stmt1->is_student;?>
										<td><?php echo $stmt1->is_employed;?></td>
										<td><?php echo $stmt1->newspapers;?></td>
										<td><?php echo $stmt1->magazines;?>
										<td><?php echo $stmt1->hostel;?></td>
										<td><?php echo $stmt1->recommended; ?></td>
										<td><?php echo $stmt1->todaydate;?></td>
										<td><?php echo $stmt1->signature;?></td>
										<td><?php echo $stmt1->ip_address;?></td>
										
										
										<td><?php echo $stmt1->date_modified;?></td>
										</tr><?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			<script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="vendor/tether/js/tether.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap4/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/mwheelIntent.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js"></script>
		<script type="text/javascript" src="vendor/waves/waves.min.js"></script>
		<script type="text/javascript" src="vendor/switchery/dist/switchery.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/Responsive/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/Buttons/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/JSZip/jszip.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/pdfmake/build/pdfmake.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/pdfmake/build/vfs_fonts.js"></script>
		<script type="text/javascript" src="vendor/DataTables/Buttons/js/buttons.html5.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/Buttons/js/buttons.print.min.js"></script>
		<script type="text/javascript" src="vendor/DataTables/Buttons/js/buttons.colVis.min.js"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="js/demo.js"></script>
		<script type="text/javascript" src="js/tables-datatable.js"></script>
		<script type="text/javascript">
function delete_id(id)
{
	if(confirm('Are you sure you Want to Delete this Internet Pack?'))
	{
		window.location.href='/internet-pack-list?delete_id='+id;
	}
}
</script> 	 	 	