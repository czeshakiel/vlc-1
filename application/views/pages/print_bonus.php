<div align="center">
             <b style="font-size:20px;">VLC DRIVING TUTORIAL SERVICES</b><br>
             <b>Kidapawan City</b><br><br>
             13th Month Report<br><br>             
             YEAR <?=date('Y',strtotime($startdate));?>
             </div>                
<div><br>
    <table border="1" width="100%" cellspacing="0" cellpadding="2" style="border-collapse: collapse; font-size:12px;">
        <tr>
            <td align="center" width="5%">NO.</td>
            <td align="center" width="30%">NAME</td>
            <td align="center">DESIGNATION</td>            
            <td align="center">AMOUNT</td>
            <td align="center" width="20%">SIGNATURE</td>
        </tr>
        <?php
        $x=1;
        $days=0;
        foreach($items as $item){
            $bonus=0;
            if($item['is_daily']==1){
                $query=$this->Payroll_model->getAllBonusDaily($startdate,$enddate,$item['empid'],$branch);                
                foreach($query as $amount){
                    if($item['empid']=="04"){
                        $salary=500;
                        $days += $amount['no_of_days_work'];
                    }else{
                        $salary=420;
                    }
                    $bonus += ($salary*$amount['no_of_days_work']);
                }
                if(date('Y',strtotime($startdate))==2025){
                    $bonus += $salary*83;
                }                
            }else{                
                $bonus = $days*420;
                if(date('Y',strtotime($startdate))==2025){
                    $bonus = $bonus+(420*83);
                }                
            }
            echo "<tr>";
                echo "<td>$x.</td>";
                echo "<td>$item[lastname], $item[firstname] $item[middlename]</td>";
                echo "<td align='center'>$item[designation]</td>";
                echo "<td align='right'>".number_format($bonus/12,2)."</td>";
                echo "<td></td>";
            echo "</tr>";
            $x++;
        }
        ?>
    </table>
</div>
<br><br>
<div>
<b>Prepared By</b><br><br>
______________________
</div>