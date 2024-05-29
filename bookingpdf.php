<?php

require_once __DIR__ . '/mpdf/vendor/autoload.php';

require('config.php');
session_start();

$query = "SELECT dest_tbl.dest_id as dest_id,dest_tbl.dest_img,dest_tbl.dest_name,dest_tbl.dest_price,cust_tbl.cust_id as cust_id,cust_tbl.cust_name,cust_tbl.address,cust_tbl.country,cust_tbl.pincode,cust_tbl.state,cust_tbl.city,booking_tbl.book_id as book_id,booking_tbl.from_date,booking_tbl.to_date,booking_tbl.book_venue,booking_tbl.status,booking_tbl.posting_date from booking_tbl join dest_tbl on booking_tbl.dest_id=dest_tbl.dest_id join cust_tbl on booking_tbl.cust_email=cust_tbl.email";
                    
$query_run = mysqli_query($conn,$query);

$row = mysqli_fetch_array($query_run);



$css=file_get_contents('css/bootstrap.min.css');
$html='
<body>
<div class="container bootdey">
<div class="row invoice row-printable">
<div class="col-md-10">

<div class="panel panel-default plain" id="dash_0">

<div class="panel-body p30">
<div class="row">



<div class="col-lg-6">

<div class="invoice-from">
<ul class="list-unstyled text-right">
<li><img width="100" src="images/logo.png" alt="Invoice logo"></li><br>
<li>Lila Mani Corporate Height,</li>
<li>Udaipur - 772778</li>
<li>+(91) 798 439 2061</li>
<li>dreammaker2023@gmail.com</li>
</ul>
</div>
</div>

<div class="col-lg-12">
<div class="invoice-details mt25">
<div class="well">
<ul class="list-unstyled mb0">
<li><strong>Invoice Date:</strong> '.$row['posting_date'].'   </li>
<li><strong>Status:</strong> <span class="label label-danger">UNPAID</span></li>
</ul>
</div>
</div>';
$email = $_SESSION['email'];

$query = "SELECT dest_tbl.dest_id as dest_id,dest_tbl.dest_img,dest_tbl.dest_name,dest_tbl.dest_price,cust_tbl.cust_id as cust_id,cust_tbl.cust_name,cust_tbl.address,cust_tbl.country,cust_tbl.pincode,cust_tbl.state,cust_tbl.city,booking_tbl.book_id as book_id,booking_tbl.from_date,booking_tbl.to_date,booking_tbl.book_venue,booking_tbl.status from booking_tbl join dest_tbl on booking_tbl.dest_id=dest_tbl.dest_id and booking_tbl.cust_email='$email' join cust_tbl on booking_tbl.cust_email=cust_tbl.email";
 
                        $query_run = mysqli_query($conn,$query);
                        
                        if(mysqli_num_rows($query_run)>0)
                        {
                        foreach($query_run as $row)
                        {
                            if($row['status']==1){

$html.='
<div class="invoice-to mt25">
<ul class="list-unstyled">
<li><strong>Invoiced To:</strong></li>
<li>'.$row['cust_name'].'</li>
<li>'.$row['address'].'</li>
<li>'.$row['city'].'-'.$row['pincode'].', '.$row['state'].'</li>
<li>'.$row['country'].'</li>
</ul>
</div>';
  }}}
$html.='

<div class="invoice-items">
<div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
<table class="table table-bordered">
<thead>
<tr>
<th class="per40 text-center">Destination(From date - To date)</th>
<th class="per35 text-center">Venue type</th>
<th class="per25 text-center">Total</th>
</tr>
</thead>';

$email = $_SESSION['email'];
                        $query = "SELECT dest_tbl.dest_id as dest_id,dest_tbl.dest_img,dest_tbl.dest_name,dest_tbl.dest_price,booking_tbl.book_id as book_id,booking_tbl.from_date,booking_tbl.to_date,booking_tbl.book_venue,booking_tbl.status from booking_tbl join dest_tbl where booking_tbl.dest_id=dest_tbl.dest_id and booking_tbl.cust_email='$email'";

                        $query_run = mysqli_query($conn,$query);
                        
                        if(mysqli_num_rows($query_run)>0)
                        {
                        foreach($query_run as $row)
                        {
                            if($row['status']==1){
                    
$html.='
<tbody>
<tr>
<td>'.$row['dest_name'].' ('.$row['from_date'].' - '.$row['to_date'].')</td>
<td class="text-center">'.$row['book_venue'].'</td>
<td class="text-center">₹'.number_format($row['dest_price'], 2).'<sup>*</sup></td>
</tr>
</tbody>
';

                            }}}
$html.='
</table>
</div>
</div>
<div class="invoice-footer mt25">
<p class="text-center">Only over Counter Payment are ecceptable<a href="#" class="btn btn-default ml15"></p>
</div>
<div>
Signature:
</div>
</div>

</div>

</div>
</div>

</div>

</div>
</div>
</body>
';







$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html,2);
$mpdf->Output('booking.pdf','i');


?>