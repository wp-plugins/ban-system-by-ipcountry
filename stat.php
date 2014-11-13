        <div class="wrap about-wrap">
<h1>Ban system</h1>
         <h2 class="nav-tab-wrapper">
	<a href="admin.php?page=bans" class="nav-tab">Home</a>
        <a href="admin.php?page=bansadd" class="nav-tab">Add</a>
        <a href="admin.php?page=bansopt" class="nav-tab">Options</a>
        <a href="admin.php?page=bansstat" class="nav-tab nav-tab-active">Statistics</a>
         </h2>
<div class="widefatbox">
                    <?php 
                    date_default_timezone_set(get_option('timezone_string'));
                    $d = date("ymd");
                    $dy = date("ymd", time() - 86400);
                    if(!isset($_GET['d'])||$_GET['d']=="t"){
                        if(get_option('date')==$d){
                        $date = get_option('today');}else{$date="";}
                        $text = '<h2 class="nav-tab-wrapper small-wrap"><a href="admin.php?page=bansstat&s=stats&d=t" class="nav-tab nav-tab-active">Today</a><a href="admin.php?page=bansstat&s=stats&d=y" class="nav-tab">Yesterday</a></h2>';
                        $sh = get_option('today');
                    }
                    else{
                        if(get_option('datey')==$dy){
                        $date = get_option('yesterday');}else{$date="";}
                        $text = '<h2 class="nav-tab-wrapper small-wrap"><a href="admin.php?page=bansstat&s=stats&d=t" class="nav-tab">Today</a><a href="admin.php?page=bansstat&s=stats&d=y" class="nav-tab nav-tab-active">Yesterday</a></h2>';
                        $sh = get_option('yesterday');
                    }
                    echo $text;
                    if($date!=""){echo $sh;}else{echo '<br><br>No visits!';} ?>
                    
                    
                </div></div>