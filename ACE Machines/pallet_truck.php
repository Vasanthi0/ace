<?php require 'header.php'; ?>
<div role="main" class="main">
   <section class="page-header page-header-modern page-header-background page-header-background-md">
      <div class="container">
         <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
               <h1 class="text-9 font-weight-bold">PRODUCTS</h1>
            </div>
         </div>
      </div>
   </section>
   <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
      <div class="row pt-5 pb-4 my-5">
         <div class="col-12  mb-5 mb-md-0">
            <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Pallet Truck</h2>
            <p class="mb-4">There are two main types of color mixing: additive color mixing and subtractive color mixing. Additive color mixing is creating a new color by a process that adds one set of wavelengths to another set of wavelengths. </p>
		      <button type="button" class="btn btn-primary btn-lg d-none d-md-block mb-3" data-toggle="modal" data-target="#myModal">
               Yes, I am interested!
            </button>
         </div> 
		<div class="col-12 col-md-7">
			<table class="table table-bordered">
               <thead>
                  <tr>
                     <td colspan="2" style="background:#1874cc;
                        color:#fff;text-align:center">SPECIFICATION </td>
                  </tr>
               </thead>
               <tbody>
                  <tr style="background:#f5f5f5">
                     <td>Model  </td>
                     <td>ACE 500 PT</td>
                  </tr>
                  <tr style="background:#e8e6e6">
                     <td>Capacity </td>
                     <td> 500 kg</td>
                  </tr>
                  <tr style="background:#f5f5f5">
                     <td>Lifting  </td>
                     <td>Hydraulic</td>
                  </tr>
                  <tr style="background:#e8e6e6">
                     <td>Type  </td>
                     <td>Manual</td>
                  </tr>
                  
               </tbody>
            </table>
		</div>   
		<div class="col-12 col-md-5   mb-5 mb-md-0">
            <div class="slide-container ">
              <img class="" id="item" src="./update_images/iloveimg-resized (1)/hollow-block-making-machine-500x500 (1).jpg" width="100%">
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<section class="d-none d-md-block">
   <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content adjus-modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="d-flex p-2">
            <div class="w-35">
               <img src="./update_images/iloveimg-resized (1)/hollow-block-making-machine-500x500 (1).jpg" class=" modal-img">
               <h6>Fly Ash Brick Making Machine</h6>
               <p>₹ 6 Lakhs/ Unit</p>
               <p>Sold By - Asia Control Engineering, Coimbatore, Tamil Nadu</p>
               <p>Capacity: 2000 Bricks Per Hour Method: Hydraulic Pressure Brand: ACE Machines Voltage: 440</p>
            </div>
            <div class="modal-body right">
               <h4>Connect with "Asia Control Engineering"</h4>
               <label>Mobile Number</label><br>
               <input type="text" class="modal-input" placeholder="Enter your mobile no">
               <div class="">
                  <button class="btn btn-success modal-btn mt-3">Submit</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<?php require 'Product_Range.php'; ?>
<?php require 'footer.php'; ?>