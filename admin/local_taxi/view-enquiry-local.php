<?php 
if(isset($_GET['delete_id'])){

	$stmt = $reg_user->runQuery("DELETE FROM request_localtaxi_four LEFT JOIN request_localtaxi_eight WHERE id=".$_GET['delete_id']);
	$stmt->execute(array(":id"=>$id));
	header("Location: view-enquiry-local");
}

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
						<h4>View Admin User List</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Admin Local Taxi(4 HRS X 40 KMS) & (8 HRS X 80 KMS)  List</li>
						</ol>
						<div class="box box-block bg-white">
							<h5 class="mb-1">Exporting Admin User List Data</h5>
							<table class="table jsgrid table-striped table-bordered dataTable table-responsive" id="table-2">
								<thead>
									<tr>
									    <th>EDIT</th>
										<th>Pickup Location</th>
										<th>Drop Location</th>
										<th>Start Date</th>
										<th>Pickup Time</th>
										<th>Package</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Email</th>
										<th>Car Type</th>
										<th>IP</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    $stmt = $reg_user->runQuery("SELECT * FROM  request_localtaxi_four  UNION ALL SELECT * FROM  request_localtaxi_eight  ORDER BY id");
                                    $stmt->execute();
                                    for($i=0; $stmt1 = $stmt->fetchObject(); $i++)
                                    {
                                    ?><tr>	
                                    <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
    								
										<a href="javascript:delete_id(<?php echo $stmt1->id;?>)"><button type="submit" class="jsgrid-button jsgrid-delete-button" href="" title="Delete" name="delete-ad"></button></a>
										</td>
    										<td><?php echo $stmt1->pickup_location; ?></td>
    										<td><?php echo $stmt1->drop_location;?></td>
    										<td><?php echo $stmt1->start_date;?></td>
    										<td><?php echo $stmt1->pickup_time;?></td>
    										<td><?php echo $stmt1->package;?></td>
    										<td><?php echo $stmt1->name;?></td>
    										<td><?php echo $stmt1->mobile;?></td>
    										<td><?php echo $stmt1->email;?></td>
    										<td><?php echo $stmt1->car_type;?></td>
    										<td><?php echo $stmt1->ip;?></td>
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
	if(confirm('Are you sure you want to Delete this Local Taxi (4HRS X 40KMS) & (8HRS X 80KMS)?'))
	{
		window.location.href='view-enquiry-local?delete_id='+id;
	}
}
</script>