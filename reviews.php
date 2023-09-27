<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
.glyphicon-star {
  color:gold;
}
span.glyphicon-calendar {
  padding-left:20px;
}
.fa-facebook-official {
  color:#3b5998;;
}
.fa-twitter-square {
  color:#00aced;
}
.fa-google-plus {
  color: #dd4b39;    
}



  </style>

 <?php include( plugin_dir_path( __FILE__ ) . 'awasam-config.php'); ?>


 
 
          <div class="row-fluid"> 
           <?php foreach ($opreviews as $site): ?>

   
      <div class="col-sm-4">
          <div class="panel panel-default">
          <div class="panel-heading">
            <span itemscope itemtype="http://schema.org/Review">


              <meta itemprop="datePublished" content="01-01-2016">
              <?php echo $site['order_subject']; ?>
              
              <span class="pull-right">
              <span class="reviewRating" itemscope itemtype="http://schema.org/Rating">
                <meta itemprop="worstRating" content="1">
                  <span itemprop="ratingValue">5</span> / 
                <span itemprop="bestRating"> stars </span>
              </span><!--/reviewRating-->
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </small>
          </div><!--/panel-heading-->
          <div class="panel-body" itemprop="reviewBody">
            <p><?php echo $site['order_ratecomment']; ?></p>

            <span itemprop="author" itemscope itemtype="http://schema.org/Person">
              <small>
              <span itemprop="name">User id: #<?php echo $site['order_writer']; ?></span>
            </span><!--/author schema -->

              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>

              <meta itemprop="datePublished" content="<?php echo $site['order_dateposted']; ?>"><?php echo $site['order_dateposted']; ?>
              

            </small>
          </div><!--/panel-body-->

        </div><!--/panel-->
      </div><!--/col-sm-6-->
         
                 <?php endforeach; ?>
                   </div><!--/row (2) -->






