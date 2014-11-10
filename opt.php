        <div class="wrap about-wrap">
<h1>Ban system</h1>
         <h2 class="nav-tab-wrapper">
	<a href="admin.php?page=bans" class="nav-tab">Home</a>
        <a href="admin.php?page=bansadd" class="nav-tab">Add</a>
        <a href="admin.php?page=bansopt" class="nav-tab nav-tab-active">Options</a>
        <a href="admin.php?page=bansstat" class="nav-tab">Statistics</a>
         </h2>
<div class="widefatbox">
    <?php
    if(isset($_POST['restert'])){
        echo '<form action="admin.php?page=bansopt" method="POST"><input type="hidden" name="retrue" value="retrue"><input type="submit" style="color:red;" value="Sure? Click to Reset!"  class="button"><br>';
    }
    if(isset($_POST['retrue'])){
    update_option( 'cnr', "0");
    update_option( 'nr', "0");
    update_option( 'id', "0");
    update_option( 'cookie', "0");
    update_option( 'c', '<div style="margin-left:10px; font-size:40px; line-height: 50px;">
You are banned
</div>
<hr>
<div style="margin-left:10px; font-size:25px; line-height: 30px;">
Your country is banned!
</div>');
    update_option( 'b', '<div style="margin-left:10px; font-size:40px; line-height: 50px;">
You are banned
</div>
<hr>
<div style="margin-left:10px; font-size:25px; line-height: 30px;">
You cannot access this page!
<br><br>
<span style="color:red">
Reason: [reason]
</span>
</div>');
    date_default_timezone_set(get_option('timezone_string'));
    $d = date("ymd");
    $dy = date("ymd", time() - 86400);
    update_option( 'date', $d);
    update_option( 'datey', $dy);
    update_option( 'today', "");
    update_option( 'yesterday', "");
    update_option( 'c_xml', '<?xml version="1.0" encoding="utf-8"?><CountryList/>');
    update_option( 'b_xml', '<?xml version="1.0" encoding="utf-8"?><BanList/>');
        echo '<span style="color:green; font-weight:bold;">Successfully reset!</span>';
    }else{
    if(isset($_POST['conf'])&&$_POST['conf']=="conf"){
    if(isset($_POST['cookie'])&&$_POST['cookie']=="true"){update_option('cookie', '1');}else{update_option('cookie', '0');}
    echo "<span style='color:green'>Successfully saved!<br></span>";}
}
    
    if(isset($_POST['banmsg'])){
        update_option('b', $_POST['banmsg']);
        echo "<span style='color:green'>Successfully saved!<br></span>";
    }elseif(isset($_POST['cbanmsg'])){
        update_option('c', $_POST['cbanmsg']);
        echo "<span style='color:green'>Successfully saved!<br></span>";
    }
    ?><br>
                <?php
                $file = @fsockopen("artur99.hostyd.com", 80);
                if(!$file){echo 'Sorry! Could not connect to server to check for updates...';}else{
                echo file_get_contents("http://artur99.net/items/ban_chk.php?version=".get_option('version'));} ?>
                <hr>
                <br><br><form action="admin.php?page=bansopt" method="POST">
    <input type="hidden" name="conf" value="conf">
    <input type="checkbox" name="cookie" value="true" <?php if(get_option('cookie')=="1"){echo 'CHECKED';} ?>>Ban user using cookies(more secure)<br>
<br>
    <input type="submit" value="Save" class="button"><br></form>
    <HR>

                <br>Message for banned users(HTML can be used and [reason] is the reason of banning):<br>
                <form action="admin.php?page=bansopt" method="POST">
                    <textarea cols="75" rows="15" name="banmsg"><?php echo stripslashes_deep(get_option('b')); ?></textarea>
                    <input type="submit" value="Save" class="button">
                </form>
                <br><hr>
                <br>Message for country banned users(HTML can be used):<br>
                <form action="admin.php?page=bansopt" method="POST">
                    <textarea cols="75" rows="15" name="cbanmsg"><?php echo stripslashes_deep(get_option('c')); ?></textarea>
                    <input type="submit" value="Save" class="button">
                </form>
                <br><hr>
                <br>

<form action="admin.php?page=bansopt" method="POST">
<input type="hidden" name="restert" value="restart">
<input type="submit" value="Reset the plugin!" class="button"><br><br>This will delete all bans, statistics and will restore settings to default.</form>
                
            </div></div>