

  <style>
  

    #button {
      background-color: #F05A1A;
      border-radius: 5px;
      color: white;
      font-size:13px;
      padding: 10px 50px 10px 50px;
      text-align: center;
     
    }

    .table {border: none;}




  </style>

 <?php include( plugin_dir_path( __FILE__ ) . 'awasam-config.php'); ?>


 
   
       <div>
        <br>
         <form id="contact_form"  action="/order" enctype="multipart/form-data" method="GET">
           <div class="row">
            <div class="col-sm-12">

                 

                <select name="client_deadline" class="form-control"  onchange ="calculate(this.form);">
                  <option>Select Urgency</option>
                  <option value="12" selected="">14 Days</option>
                  <?php foreach ($urgency as $urgency): ?>
                   <option name="order_deadline" value="<?php echo $urgency['pricing_value']; ?>"> <?php echo $urgency['pricing_urgency']; ?> <?php echo $urgency['pricing_duration']; ?>  </option>
                 <?php endforeach; ?>
               </select>
        
            
                <div class="form-group">
                 <select name="Order_type" class="form-control"  onchange ="calculate(this.form);">
                  <option>Select type document</option>
                  <option value="1" selected="">Essay</option>
                  <?php foreach ($pptype as $pptype): ?>
                    <option value="<?php echo $pptype['pptype_pvalue']; ?>"> <?php echo $pptype['pptype_name']; ?>  </option>
                  <?php endforeach; ?>
                </select>
              </div>

           
             <div class="form-group">

               <select class="form-control select2" id="exampleSelect1" name="level"  onchange ="calculate(this.form);">
                 <option selected="">Select Academic Level</option>
                 <option value="1" selected="">Undegraduate</option>
                 <?php foreach ($academic_level as $academic_level): ?>
                   <option value="<?php echo $academic_level['aclevel_value']; ?>" name="ops_aclevel"> <?php echo $academic_level['aclevel_name']; ?>  </option>
                 <?php endforeach; ?>
               </select>
             </div>
             <div style="display: none;" class="form-group">
               <select class="form-control select2" name=price onchange ="calculate(this.form);">

                <option  selected>select Spacing</option>
               
                <option selected="" value="1">Double</option>
                 <option value="2">Single</option>
              </select> 
            </div>
            <div class="form-group">
              <select class="form-control select2" name=page onchange ="calculate(this.form);">

               <option value="1"> Select words/Pages </option>
               <option value="1" selected=""> 1 Page (275 words)</option>
               <?php foreach (range(1, 30, 1) as $x) {  ?>
                <option value="<?php echo $x; ?>"> <?php echo $x; ?> Pages  (<?php echo $x*275; ?> words)</option>
              <?php } ?>


            </select>
          </div>
          <div class="form-group">
           <input type="hidden" name = total class="form-control">
                  
                       <h3 id="display">Total price: $12.99</h3>
                       <hr>
            <center>  
             <button type="submit" class="avia-button av-l8iau4xu-55ceabddc9dbe7b989e63a5e95c7f515 avia-icon_select-no avia-size-large  avia-color-theme-color ">Write My Paper</button>


            </center>
           
           
         
         

         </div>

     </div> 
   </div>
 </form>
</div>



<script type="text/javascript">

  function calculate(f) {
    var amount = 12;
    var price = f.price.options[f.price.selectedIndex].value;
    var page = f.page.options[f.page.selectedIndex].value;
    var client_deadline = f.client_deadline.options[f.client_deadline.selectedIndex].value;
    var level = f.level.options[f.level.selectedIndex].value;
     var order_type = f.Order_type.options[f.level.selectedIndex].value;

    var amount = client_deadline;
   


   var total=amount*price*page*order_type;
   var total = total.toFixed(2);
   f.total.value=total;
   var dollar = "Total price: $";

  document.getElementById('display').innerHTML =dollar.concat(total);



 }
</script>


