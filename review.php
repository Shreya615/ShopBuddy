<?php 
require('topu.php');
$con1=mysqli_connect("localhost","root","","ecom");
$pid='';

if(isset($_GET['iid'])){
	$product_id=mysqli_real_escape_string($con1,$_GET['iid']);
    $pid=$product_id;
	if($product_id>0){
		$get_product=get_product($con1,'','',$product_id);
	}else{
		?>
		<script>
		window.location.href='home.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='home.php';
	</script>
	<?php
}	
if(isset($_POST['submit'])){
    $name=$_SESSION['name'];
    $r=get_safe_value($con1,$_POST['comment']);
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con1,"insert into review (product_id, user_name, comment,added_on) values('$pid','$name','$r','$added_on')");
    ?>
    <script>
        alert("Review Added");
        window.location.href='home.php';
    </script>
    <?php
}	

?>
<!-- Start Banner area -->
<div class="ht__bradcaump__area mb-6" >
    <img class ="w-full  object-contain"src="images/b3.jpeg" alt="">
</div>
        <!-- End Banner area -->
                    <div class="row ml-40 flex mb-10">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active h-max w-96" id="img-tab-1">
										    <img class=" h-96 object-contain  "src="http://localhost/Shop%20Buddy/images/<?php echo $get_product['0']['image']?>" alt="full-image"/>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                                
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40 ml-6 mt-9">
                            <div class="ht__product__dtl">
                                <h2 class="text-3xl font-bold text-gray-800 mb-3"><?php echo $get_product['0']['name'];?></h2>
                                <ul  class="pro__prize">
                                    <li class="old__prize text-gray-400 font-bold my-1 line-through">₹<?php echo $get_product['0']['mrp']?>/-</li>
                                    <li class="font-bold text-slate-700 text-lg ">₹<?php echo $get_product['0']['price'];?>/-</li>
                                </ul>
                                <p class="pro__info mb-4 text-gray-600 font-bold"><?php echo $get_product['0']['short_desc'];?></p>
                            </div>
                        </div>
                        <div class="form ml-auto mr-40 ">
                            <form id="form1" name="f"  method="POST" class="bg-gray-100 p-6 rounded">
                                <h1 class="text-3xl font-bold text-gray-500 mb-6"> Add Your Review</h1>
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <div class="flex">
                                            <label class="font-bold text-slate-600 mb-3 mr-3 text-lg mt-3">Name:</label>
                                            <div class="rounded p-4 w-max bg-gray-200 mb-3 mr-3 " type="text" id="name" name="n"><?php echo $_SESSION['name']; ?></div>
                                        </div>
                                     </div>
                                </div>
                                
                                <div class="single-contact-form mb-2">
                                    <div class="contact-box message">
                                        <label class="font-bold text-slate-600 mb-3 mr-3 text-lg mt-3">Review:</label><br>
                                        <textarea  class="w-96 h-36 p-4 bg-gray-200 rounded mt-3"name="comment"  id="message" placeholder="Add Your Review" required></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn mb-2">
                                    <button type="Submit" name="submit" value="Submit"  id="submit"class="fv-btn h-12 w-64 bg-pink-600 flex items-center justify-center text-white  text-2xl rounded text-md cursor-pointer hover:bg-white focus:ring-pink-600 hover:border-pink-600 hover:text-pink-600">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php require('footer.inc.php')?>     