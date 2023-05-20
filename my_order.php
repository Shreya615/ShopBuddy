<?php 
require('topu.php');

?>
<div class="ht__bradcaump__area" >
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="wishlist-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table class="table w-full p-3">
                                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                                            <tr class="mb-2">
                                                <th class="product-thumbnail p-3 text-sm font-semibold tracking-wide text-left">Order </th>
                                                <th class="product-name p-3 text-sm font-semibold tracking-wide text-left"><span class="nobr">Order Date</span></th>
                                                <th class="product-price p-3 text-sm font-semibold tracking-wide text-left"><span class="nobr"> Address </span></th>
                                                <th class="product-stock-stauts p-3 text-sm font-semibold tracking-wide text-left"><span class="nobr"> Payment Type </span></th>
												<th class="product-stock-stauts p-3 text-sm font-semibold tracking-wide text-left"><span class="nobr"> Payment Status </span></th>
												<th class="product-stock-stauts p-3 text-sm font-semibold tracking-wide text-left"><span class="nobr"> Order Status </span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="mt-3">
											<?php

                                                $name1=$_SESSION['name'];
                                                $res=mysqli_query($con1,"select * from users where name='$name1'");
                                                $row=mysqli_fetch_assoc($res);
                                                $_SESSION['USER_ID']=$row['id'];

											$uid=$_SESSION['USER_ID'];
											$res=mysqli_query($con1,"select `order`.*,order_status.name as order_status_str from `order`,order_status where `order`.user_id='$uid' and order_status.id=`order`.order_status");
											while($row=mysqli_fetch_assoc($res)){
											?>
                                            <tr class="bg-gray-50 mb-3 p-4">
												<td class="product-add-to-cart p-3 text-lg font-bold text-slate-600  hover:text-pink-600  text-center"><a href="my_order_details.php?id=<?php echo $row['id']?>"> View Order</a></td>
                                                <td class="product-name p-3  font-bold text-slate-700 text-lg"><?php echo $row['added_on']?></td>
                                                <td class="product-name p-3  font-bold text-slate-700 text-lg">
												<?php echo $row['address']?><br/>
												<?php echo $row['city']?><br/>
												<?php echo $row['pincode']?>
												</td>
												<td class="product-name p-3  font-bold text-slate-700 text-lg"><?php echo $row['payment_type']?></td>
												<td class="product-name p-3  font-bold text-slate-700 text-lg"><?php echo ucfirst($row['payment_status'])?></td>
												<td class="product-name p-3  font-bold text-slate-700 text-lg"><?php echo $row['order_status_str']?></td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        						
<?php require('footer.inc.php')?>        