<?php
if($_GET['s']=="details"): if(isset($_GET['del'])){
    $b_xml = get_option('b_xml'); $del = $_GET['del'];
    $data = simplexml_load_string($b_xml);
    for($i = 0, $length = count($data->Ban); $i < $length; $i++){
        if($data->Ban[$i]->id == $del){
            unset($data->Ban[$i]);
            update_option('b_xml', $data->saveXML());
            $g = get_option('nr');
            update_option('nr', $g-1);
            $url="admin.php?page=bans";
            echo "<meta http-equiv='refresh' content='0; url=$url' />";
            }
    }
}
    
    ?>

<div class="wrap about-wrap">
<h1>Ban System</h1>
         <h2 class="nav-tab-wrapper">
	<a href="admin.php?page=bans" class="nav-tab">Home</a>
        <a href="admin.php?page=bansadd" class="nav-tab">Add</a>
        <a href="admin.php?page=bansopt" class="nav-tab">Options</a>
        <a href="admin.php?page=bansstat" class="nav-tab">Statistics</a>
         </h2>
    <table class="widefat bandetwi" cellspacing="0">
        <?php
        $b_xml = get_option('b_xml');
        $get = simplexml_load_string($b_xml);
        
        $nnr = $_GET['id'];
        $u = get_option('nr')-1;
        for($i=0; $i<=$u; $i++){
        $id =  $get->Ban[$i]->id;
        if($id == $nnr){$nnr = $i;}
        }
          $id =  $get->Ban[$nnr]->id;
          $ip =  $get->Ban[$nnr]->ip;
          $start =  $get->Ban[$nnr]->date;
          $reason =  $get->Ban[$nnr]->reason;
if($reason==""){$reason="None";}
          $redirect =  $get->Ban[$nnr]->redirect;
          $or =  $get->Ban[$nnr]->or;
          if($or=="msg"){$orr='Show default message for banned users.';}else{$orr='Redirect users to the redirect URL.';}
          $end =  $get->Ban[$nnr]->end;
          $dur =  $get->Ban[$nnr]->time;
          if($redirect == ""){$redirect="None";}
          $tm =  $get->Ban[$nnr]->end;
          $dtnow = new DateTime(date('m/d/Y H:i'));
          $dtthan = new DateTime($tm);
         if ( $dtnow > $dtthan ) {$expired = "Expired";}else {$expired = "Active";}
          $add="Permanent";
if($dur == "1h"){$add = "1 Hour";}
if($dur == "6h"){$add = "6 Hours";}
if($dur == "12h"){$add = "12 Hours";}
if($dur == "24h"){$add = "24 Hours";}
if($dur == "2d"){$add = "2 Days";}
if($dur == "3d"){$add = "3 Days";}
if($dur == "7d"){$add = "7 Days";}
if($dur == "30d"){$add = "30 Days";}
if($dur == "1y"){$add = "1 Year";}
if($dur == "p"){$add = "Permanent";}
echo "
        <tr><td class='dl'>ID:</td><td>$id</td></tr>
        <tr><td class='dl'>IP:</td><td>$ip</td></tr>
        <tr><td class='dl'>Reason:</td><td>$reason</td></tr>
        <tr><td class='dl'>Added on:</td><td>$start</td></tr>
        <tr><td class='dl'>Expire on:</td><td>$end</td></tr>
        <tr><td class='dl'>For:</td><td>$add</td></tr>
        <tr><td class='dl'>If detected:</td><td>$orr</td></tr>
        <tr><td class='dl'>Redirect URL:</td><td>$redirect</td></tr>
        <tr><td class='dl'>Status:</td><td>$expired</td></tr>
        <tr><td class='dl'>Delete:</td><td><a href='admin.php?".$_SERVER['QUERY_STRING']."&del=".$id."'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAARlSURBVHjapJbPbxRlHMY/78zO7nZbdoZSoGN7qBFFqThTAqYHsWPUKBFjQSsH0wiGYPCiHPxDPBiuJCQSggdMMB6IyYsnNDTsFvlhUShBu5UiO9vtdn/Mj9fDJkDZbbXwJHN6583nfd48zzevsG2bdjo/dngEyA2fOlrif+j82GETcIdPHT3Xbl08Cpr5+Euz/nSfTKTSbv3ydV9Foffsia/yK0FuffSFI5wXpCrOW8Gtv3JRFHibT3695IDaEsj4EZOn+2VqcJOrVypkujJWB0pO7T3kLAeZGT/iGC9vlYm+jZbRaJDp6nBTsZBTew+ZbUFXdx8wGeiTDG5yuXYDogiyaTQra2WUkNfe/aQF9ueeTx22DUrWd1tc/QOSBphdJNd0ugaavLr7gLkEdPud/aa55RnJS5tdfr0G5XmIGoCCTAqtx7SyRkLO7D5wHzaz56CjjWxvQi79Bo1qc49Q0JUi1ZlyU0rJyTf3mQAJgHBTv9RffM7lwiRUa633k0zA2qxFpSJnxj/fD8C2LcfoNi0mJpvuH5ZSYBikdeUuhKEEhkRx32cjmeFtMnmvBILm1yIFSkAcgwL6bLB74PIUBEHb3wkCmCsyN+/jh4En/hk7aKYV0xnTtFhrga7zxFIxLFbhbpHZet0vx+GAsG2bm8O7nKRQUqzrsehILeNqFQpCKJZYqFT8eRV72y/8mL/fo+tDrzmdyaTEXGORSj2Zm2KJ6kLZrwndG8zJfEthr2/d6XQKJJZpkX4MZ1EMlQqV+bK/oJQ3dOV8ftnJcPv5HY6uG02YvkpSI4TiPf+OUp47NZFfcQQBTA9sfS9pZU+TTK4S1IDF2uhTUxPfPbqUaLuhVgGyUKuuPgTL7GlxdLO7z0nsGZV6Z8bih7OrA4UBUbns3w0Db8gv5Jd1dKVrvaPvfkvq3VmL02eg3lgdKFboAisdhfJCZq23fbHYGoZJo8uxxt6XiY0bLE6dhnrt8eIdN8taikK/piJvKKg8iPclUk7Hhx/IzIYei5Pfrt5JyxVGRLUq91B+OQy9V7QwL6bX9ZrZ0dHpbH+/pX9zopmcJx5BAhp1FsMGBTR/XsUDCcLYVb/fsDjzPcQRCLHs/RMEhLFCAzQjAQl9RVda0ABNs0C5wrZtLhbLF02Fm04aILQ2jQ8JoogFpXyl6/uTaOhxdKxDExYJY5lO1fGBOUFuxFoz1ExdFHmLcSSNes3VEwnQtQdzK4qpxxElofuBpnk7urN5gPydoqfiUGYQFoa+9ICNgIoQVDSRU5rhLUndT7NzpqlimQY3iUBHEaGoolMm9hsIb6e9YUk3Jgp/OwZCdqCsJAKBIkSwiGIBkWsI4b3au77UUthfCgUzRsgkyhUIQqGoKvwGeG/YdtuX0M+FgqMQMi2UBRAAFSVyEXiv272lZSfDuULBrIIE3Bjha0J5b/faKz63zs4WnEghAStG5ATK22Xbpf8cqgDHC7MjQG78oVOtpOOFWRNwx+3etg/IfwcAyojpcbk4/Z8AAAAASUVORK5CYII='> Delete</a></td></tr>";
?>
        <tr><td><a href="admin.php?page=bans">&#171; Back to list</a></td></tr></table>

</div>

<?php else: ?>
    

        <div class="wrap about-wrap">
<h1>Ban system</h1>
         <h2 class="nav-tab-wrapper">
	<a href="admin.php?page=bans" class="nav-tab nav-tab-active">Home</a>
        <a href="admin.php?page=bansadd" class="nav-tab">Add</a>
        <a href="admin.php?page=bansopt" class="nav-tab">Options</a>
        <a href="admin.php?page=bansstat" class="nav-tab">Statistics</a>
         </h2>

        
            <?php
           $b_xml = get_option('b_xml');
            if(isset($_GET['del'])){
    $b_xml = get_option('b_xml'); $del = $_GET['del'];
    $data = simplexml_load_string($b_xml);
    for($i = 0, $length = count($data->Ban); $i < $length; $i++){
        if($data->Ban[$i]->id == $del){
            unset($data->Ban[$i]);
            update_option('b_xml', $data->saveXML());
            $g = get_option('nr');
            update_option('nr', $g-1);
            $url="admin.php?page=bans";
            echo "<meta http-equiv='refresh' content='0; url=$url' />";
            }
    }
}
                
                
                
             echo '<table class="widefat" cellspacing="0"><thead>
        <tr><th class="id">ID</th><th class="ip">IP Adress</th><th class="date">Status</th><th class="act">Remove</th><th class="act">Details</th></tr></thead><tbody>';
        $m=get_option('nr');
        if($m==0){echo '</tbody></table><div style="color:grey;text-align:center;"><br>No IP banned yet!</div>';}else{
            $m=$m-1;
        for($i=0; $i<=$m; $i++){
          $get = simplexml_load_string($b_xml);
          $id =  $get->Ban[$i]->id;
          $ip =  $get->Ban[$i]->ip;
          $tm =  $get->Ban[$i]->end;
          $dtnow = new DateTime(date('m/d/Y H:i'));
          $dtthan = new DateTime($tm);
         if ( $dtnow > $dtthan ) {$expired = "Expired";}else {$expired = "Active";}
echo '<tr><td>'.$id.'</td><td>'.$ip.'</td><td>'.$expired.'</td><td><a href="admin.php?'.$_SERVER['QUERY_STRING'].'&del='.$id.'"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAARlSURBVHjapJbPbxRlHMY/78zO7nZbdoZSoGN7qBFFqThTAqYHsWPUKBFjQSsH0wiGYPCiHPxDPBiuJCQSggdMMB6IyYsnNDTsFvlhUShBu5UiO9vtdn/Mj9fDJkDZbbXwJHN6583nfd48zzevsG2bdjo/dngEyA2fOlrif+j82GETcIdPHT3Xbl08Cpr5+Euz/nSfTKTSbv3ydV9Foffsia/yK0FuffSFI5wXpCrOW8Gtv3JRFHibT3695IDaEsj4EZOn+2VqcJOrVypkujJWB0pO7T3kLAeZGT/iGC9vlYm+jZbRaJDp6nBTsZBTew+ZbUFXdx8wGeiTDG5yuXYDogiyaTQra2WUkNfe/aQF9ueeTx22DUrWd1tc/QOSBphdJNd0ugaavLr7gLkEdPud/aa55RnJS5tdfr0G5XmIGoCCTAqtx7SyRkLO7D5wHzaz56CjjWxvQi79Bo1qc49Q0JUi1ZlyU0rJyTf3mQAJgHBTv9RffM7lwiRUa633k0zA2qxFpSJnxj/fD8C2LcfoNi0mJpvuH5ZSYBikdeUuhKEEhkRx32cjmeFtMnmvBILm1yIFSkAcgwL6bLB74PIUBEHb3wkCmCsyN+/jh4En/hk7aKYV0xnTtFhrga7zxFIxLFbhbpHZet0vx+GAsG2bm8O7nKRQUqzrsehILeNqFQpCKJZYqFT8eRV72y/8mL/fo+tDrzmdyaTEXGORSj2Zm2KJ6kLZrwndG8zJfEthr2/d6XQKJJZpkX4MZ1EMlQqV+bK/oJQ3dOV8ftnJcPv5HY6uG02YvkpSI4TiPf+OUp47NZFfcQQBTA9sfS9pZU+TTK4S1IDF2uhTUxPfPbqUaLuhVgGyUKuuPgTL7GlxdLO7z0nsGZV6Z8bih7OrA4UBUbns3w0Db8gv5Jd1dKVrvaPvfkvq3VmL02eg3lgdKFboAisdhfJCZq23fbHYGoZJo8uxxt6XiY0bLE6dhnrt8eIdN8taikK/piJvKKg8iPclUk7Hhx/IzIYei5Pfrt5JyxVGRLUq91B+OQy9V7QwL6bX9ZrZ0dHpbH+/pX9zopmcJx5BAhp1FsMGBTR/XsUDCcLYVb/fsDjzPcQRCLHs/RMEhLFCAzQjAQl9RVda0ABNs0C5wrZtLhbLF02Fm04aILQ2jQ8JoogFpXyl6/uTaOhxdKxDExYJY5lO1fGBOUFuxFoz1ExdFHmLcSSNes3VEwnQtQdzK4qpxxElofuBpnk7urN5gPydoqfiUGYQFoa+9ICNgIoQVDSRU5rhLUndT7NzpqlimQY3iUBHEaGoolMm9hsIb6e9YUk3Jgp/OwZCdqCsJAKBIkSwiGIBkWsI4b3au77UUthfCgUzRsgkyhUIQqGoKvwGeG/YdtuX0M+FgqMQMi2UBRAAFSVyEXiv272lZSfDuULBrIIE3Bjha0J5b/faKz63zs4WnEghAStG5ATK22Xbpf8cqgDHC7MjQG78oVOtpOOFWRNwx+3etg/IfwcAyojpcbk4/Z8AAAAASUVORK5CYII="><br>Delete</a></td><td><a href="admin.php?'.$_SERVER['QUERY_STRING'].'&s=details&id='.$id.'"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAThSURBVHja3FZdbJNVGH7O97evrq0rWwuFJYSBYy2/cys6uMA7SUy8gBskw2yEBS9MpOtIVmAgAwmJ+3ERBNlcIIrsQi4IyXBgMgclOA3IiMKgYRi2lh8ptfTv++t3vICVNi0TY8KFb3KSk5Pz5Xmf533e9zuEUoqXEQxeUnCTm0uXLqUPWZaFwWDIzYphoKoqDn15GPeCd+1Wm21NIBi0JxKJ+1TXz/ICf33Xro8xzWJBMpmEJEmorq7OBsoMSinySZp5VlxS0kAY8r6mqWZN06IAFnOUbqWUPsj3fT4gnuO4D3meL6UUqQwY8DwPVdXoDLu9IhgIvJuIJ2CxWLBi+XLrTb+/LBKJuAyiOMBxHHieh6Io3wC4mgNEKQUhZJnVausoLCyEruvPMuI4yLKMc0PnEQwEAApwPIdNH2zCG8tc+H7gDI4ePbq4uKRksdlkhq7rmJgYZwF48pqBEGIihEDXdVBKoVMKhmUhSRJOn+7H4NCPYBgGiWQcG+rrUV1VhWg0Dr/fj+LiaTCIhnSChBAylXT6pMY6peA5DrFoFCdPnsTwLz+jgBcgSRI2bmxAtcuFUCiE433H4TvvQ6PHA0EogKLIYBjmid5TAKVBOJZDMplEX18frly5AtFggCzLcDc2wuFw4FEohN7eXgwPD8PtdqNy6VLE43EQQp4aamozPCk8xyEUCuHUqVO4ePEnvFpkRjKZwJamLSgvL0fo4UMc+OIArv1+DS0tLXA4HIjFYhkgNJNQNtCkoizH4f6DBzj+7TFcvvwrioqKAAo0eZpQPn8+goEADh46CL/fj92792DOnDmIxePZLfA8e5tMpslLWvhRGEeOHMGtsTEIggDCMPB6vZg1axYmxsexf//nCAbvoq6uHizLQkomc/qGUgqaD6irqwuCIKC0tNR69949hMNhOJ0OjN0ag9frhd1ux62xMXS0tyORTGCz242uzzpRVjYXzc3N0CQpt7kzwNP2Pny4GwMDZ6qGzp3rCIVCaGraAp/PhzdravDavLkYvTGKT/bsQSQSQX3dBnR2dqDQaERDQwNkWU7XJXPlla6ystI4c+bMr81mM7zNXs02fTo3zWJBT3c3bt64gQsXfHA4nKitXY99+/Ziht2O1tbdEEURiiw/K/BzpEszMhpfeWd09Lp1yZIlzVarlVEVBS07dsLlcmFkZASrV6/Be+vWobOzHc4FC9HW1g5BECBLEmjGfMxilM/eIyNX50VjsQme5/2apjGKqsJms+HTtjaIoojBwUFs374NNTU1aGnZAV3XIcsyCCE5Dnva9Vn2TjNSFOU3VVHKJFlawQtCimVZEACaquHEie/gaXRj5cq3sHXrNmiqClVRAEpBdT3/Sun5a5RKpc6yLHutp7tn7wKHk5RXVCAej6G/vx9f9fSgtnY9Ptq8GYlEArqug/zjr07PIkom3fF0/pVzPN8riuKK6TYbIpEIOI6Dx+NBXf0GSJKUNdGnCkII/gqHOxYtWujJYrR27Vpomnbz7VWrdhqNph9u376NQmMhql6vwuzZsxEOh/Gv3heEQNdTudK1traCEAJJknhVS8HhdIJSClVVcWd8IquwLxIUgMCyXA7Q48ePJ7d/RKNxWVHVghcoxNQPEpPpz6mm9x1e4I+BoOK/ABGQFMMQX44Z/jfvur8HABpac74MygDCAAAAAElFTkSuQmCC"><br>Details</a></td></tr>';
          }echo '</tbody></table>';}
  ?>
        </div>
        
    <?php endif; ?>