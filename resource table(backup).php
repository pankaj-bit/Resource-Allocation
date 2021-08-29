<div id="result" class="col-md-5" >
<?php


$query="SELECT * FROM `resource`";
$search_result=filterTable($query);

function filterTable($query)
{
$con = mysqli_connect('localhost','root','','addresource');
$filter_result=mysqli_query($con,$query);
return $filter_result;
}
?>



<div class="container-table100">
<div class="wrap-table100">
<div class="table100">
<table>
<thead>
<tr class="table100-head">
<th class="column1">event name</th>
<th class="column2">start date</th>
<th class="column3">end date</th>
<th class="column4">start time</th>
<th class="column5">end time</th>
<th class="column6">Venue</th>
<th class="column6">Event Description</th>
<th class="column6">Event Status</th>
<th class="column6">Incharge</th>

</tr>
</thead>

<?php


while($row=mysqli_fetch_array($search_result))
{

echo "<tbody><tr>";
echo "<td class=column1> ".$row['event_name']."</td>";
echo "<td class=column2> ".$row['event_date']."</td>";
echo "<td class=column3> ".$row['event_date2']."</td>";
echo "<td class=column4> ".$row['start_time']."</td>";
echo "<td class=column5> ".$row['end_time']."</td>";
echo "<td class=column6> ".$row['venue']."</td>";
echo "<td class=column6> ".$row['event_desc']."</td>";
echo "<td class=column6> ".$row['event_status']."</td>";
echo "<td class=column6> ".$row['incharge']."</td>";
echo "</tr></tbody>";



}




?>
</table>



</div>
</div>


</div>

</div>
</div>
</div>
