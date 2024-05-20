<?php
  $page_title = 'All Product';
  require_once('includes/load.php');
   page_require_level(2);
?>
<?php
 $year = date('Y');
 $sales = monthlySales($year);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="libs/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
</head>
<body>
    <div class="dashboard_sidebar">
            <div class="dashboard_sidebar_user">
                <img src="image/LOGO.png" />
            </div>
            <h3 class="dashLogo">SYNERTRACK</h3>
    </div>
    <div class="panel-heading clearfix">
          <div class="pull-right">
            <button onclick = "PrintPage()" class="btn btn-primary" id="print-btn">Print</button>
          </div>
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Daily Sales</span>
          </strong>
        </div>
    <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th> Product name </th>
                <th class="text-center" style="width: 15%;"> Quantity sold</th>
                <th class="text-center" style="width: 15%;"> Total </th>
                <th class="text-center" style="width: 15%;"> Date </th>
             </tr>
            </thead>
           <tbody>
             <?php foreach ($sales as $sale):?>
             <tr>
               <td class="text-center"><?php echo count_id();?></td>
               <td><?php echo remove_junk($sale['name']); ?></td>
               <td class="text-center"><?php echo (int)$sale['qty']; ?></td>
               <td class="text-center"><?php echo remove_junk($sale['total_saleing_price']); ?></td>
               <td class="text-center"><?php echo $sale['date']; ?></td>
             </tr>
             <?php endforeach;?>
           </tbody>
         </table>
    </div>
</body>
<script type="text/javascript">
    function PrintPage(){
        window.print();
    }
    window.addEventListener('DOMContentLoaded', (event) => {
        PrintPage()
        setTimeout(function(){window.close()},750)
    });
</script>
<?php include_once('layouts/footer.php'); ?>