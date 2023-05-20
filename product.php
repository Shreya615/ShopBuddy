<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con1,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con1,$_GET['operation']);
		$id=get_safe_value($con1,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update product set status='$status' where id='$id'";
		mysqli_query($con1,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con1,$_GET['id']);
		$delete_sql="delete from product where id='$id'";
		mysqli_query($con1,$delete_sql);
	}
}

$sql="select product.*,categories.categories from product,categories where product.categories_id=categories.id order by product.id desc";
$res=mysqli_query($con1,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title text-2xl text-gray-700 font-bold mb-2 mt-4 ml-5">Products </h4>
                   <hr class="text-gray-400"/>
				   <h4 class="box-link text-base text-gray-500 mt-5 mb-4 ml-6"><a href="manage_product.php">Add Product</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table w-full">
						 <thead class="bg-gray-50 border-b-2 border-gray-200">
							<tr>
							   <th class="serial  p-3 text-sm font-semibold tracking-wide text-left">#</th>
							   <th class=" p-3 text-sm font-semibold tracking-wide text-left">ID</th>
							   <th class=" p-3 text-sm font-semibold tracking-wide text-left">Categories</th>
							   <th class=" p-3 text-sm font-semibold tracking-wide text-left">Name</th>
							   <th class=" p-3 text-sm font-semibold tracking-wide text-left">Image</th>
							   <th class=" p-3 text-sm font-semibold tracking-wide text-left">MRP</th>
							   <th class=" p-3 text-sm font-semibold tracking-wide text-left">Price</th>
							   <th class=" p-3 text-sm font-semibold tracking-wide text-left">Qty</th>
							   <th class=" p-3 text-sm font-semibold tracking-wide text-left"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=0;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr class="bg-gray-50">
							   <td class="serial p-3 text-sm text-gray-700"><?php echo $i=$i+1?></td>
							   <td  class="p-3 text-sm text-gray-700"><?php echo $row['id']?></td>
							   <td  class="p-3 text-sm text-gray-700"><?php echo $row['categories']?></td>
							   <td  class="p-3 text-sm text-gray-700"><?php echo $row['name']?></td>
							   <td  class="p-3 text-sm text-gray-700"><img class="h-20 w-16 " src="http://localhost/Shop%20Buddy/images/<?php echo $row['image']?>"/></td>
							   <td  class="p-3 text-sm text-gray-700"><?php echo $row['mrp']?></td>
							   <td  class="p-3 text-sm text-gray-700"><?php echo $row['price']?></td>
							   <td  class="p-3 text-sm text-gray-700"><?php echo $row['qty']?></td>
							   <td  class="p-3 text-sm text-gray-700">
								<?php
								if($row['status']==1){
									echo "<span class='badge badge-complete ml-4 font-bold  text-green-800 hover:underline'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending ml-4 font-bold  text-blue-800 hover:underline'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='badge badge-edit ml-4 font-bold text-black hover:underline'><a href='manage_product.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete ml-4 font-bold  text-red-800 hover:underline'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.php');
?>