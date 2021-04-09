<?php for($i=1; $i<=53; $i++) { ?>
<br>
<?php } ?>
	        $htmlData   =   '<html><head>';
                $htmlData   .=  '<style>
                .table1{
                    border:0px;
                    border-spacing: 0;
                    text-align:left;
                    width:450px;
                }
                .table1 tr td{
                	font-size:14px;
                	 text-align:left;
                	 color:#462a69;
                }
                </style>';
                $htmlData   .=  '</head><body>';
                for($i=1; $i<=40; $i++) { 
                	$htmlData   .=	'<br>';
 				}
                $htmlData   .=  '<table class="table1">
                	<tr>
                		<td width="130">&nbsp;</td>
                		<td style="text-align:left; height:25px; " ></td>
                	</tr>
                	<tr>
                		<td></td>
                		<td style="text-align:left; height:30px; padding-bottom: 10px" >'.$data['username'].'</td>
                	</tr>
                	<tr>
                		<td></td>
                		<td style="text-align:left; height:15px;">'.$data['password'].'</td>
                	</tr>
                </table>';
                $htmlData   .=  '</body></html>';
        	
        	$pdf->writeHTML($htmlData, true, false, false, false, '');

