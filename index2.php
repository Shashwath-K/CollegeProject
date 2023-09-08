<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root',''.'youtube');
$cfg['Servers'][$i]['ssl_key'] = '/etc/mysql/server-key.pem';
$res=mysqli_query($con,SELECT * FROM 'mytable1');
if(mysqli_num_rows($res)>0) {
	$html='<style>.table{background-color:blue;}</style><table class="table">';
			$html.='<tr><td>Number</td>><td>SMS</td></tr>';
			while($row=mysqli_fetch_assoc($res)) {
				$html.='<tr><td>'.$row['Number'].'</td><td>'.$row['SMS'].'</td></tr>';
			}

	$html.='</table>';
}else{
	$html="Data not found";
	
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='dhanu/'time().'.pdf';
$mpdf->output($file,'D');
?>
