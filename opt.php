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
        if (!@fsockopen("artur99.net", 80)) {
            echo 'Sorry! Could not connect to server to check for updates...';
        } else {
            echo file_get_contents("http://artur99.net/items/ban_chk.php?version=" . get_option('version') . "&name=" . urlencode(get_bloginfo()) . "&url=" . urlencode(get_bloginfo("wpurl")));
        }
        ?>
        <?php
        if (isset($_POST['restert'])) {
            echo '<hr><form action="admin.php?page=bansopt" method="POST"><input type="hidden" name="retrue" value="retrue"><input type="submit" style="color:red;" value="Sure? Click to Reset!"  class="button"><br>';
        }
        if (isset($_POST['retrue'])) {
            ban_activation();
            echo '<hr><span style="color:green; font-weight:bold;">Successfully reset!</span>';
        } else {
            if (isset($_POST['conf']) && $_POST['conf'] == "conf") {
                if (isset($_POST['cookie']) && $_POST['cookie'] == "true") {
                    update_option('cookie', '1');
                } else {
                    update_option('cookie', '0');
                }
                if (isset($_POST['wp-login']) && $_POST['wp-login'] == "true") {
                    update_option('wp-login', '1');
                } else {
                    update_option('wp-login', '0');
                }
                if (isset($_POST['wp-admin']) && $_POST['wp-admin'] == "true") {
                    update_option('wp-admin', '1');
                } else {
                    update_option('wp-admin', '0');
                }
                echo "<hr><span style='color:green'>Successfully saved!<br></span>";
            }
        }

        if (isset($_POST['banmsg'])) {
            update_option('b', $_POST['banmsg']);
            echo "<hr><span style='color:green'>Successfully saved!<br></span>";
        } elseif (isset($_POST['cbanmsg'])) {
            update_option('c', $_POST['cbanmsg']);
            echo "<hr><span style='color:green'>Successfully saved!<br></span>";
        }
        ?>
        <hr>
        <form action="admin.php?page=bansopt" method="POST">
            <input type="hidden" name="conf" value="conf">
            <input type="checkbox" name="cookie" value="true" <?php if (get_option('cookie') == "1") {
            echo 'CHECKED';
        } ?>>Ban user using cookies (more secure)<br>
            <input type="checkbox" name="wp-login" value="true" <?php if (get_option('wp-login') == "1") {
            echo 'CHECKED';
        } ?>>Block login page (The login form - wp-login.php - won't be accessible for banned users)<a href="" id="tt2" class="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAADZUlEQVQ4T62US2iUVxTHzzn3zkcspiAqqLRqzCTagItgI5nMBImZpjaCj4JUqBEhLgRREF2o1Y12EUUXLlpQFy0uQmlDUXRiHVOjOJnxVRsfKElmFpbiTpFGJcl895yejGaYGRO76V193zn3/O7/PO5F+J8XTsXrCVWuIqI2QAmD0EeCgMDwVIhvoJPO5lTmnMZyafw7wNjyRdVlAfOjbqxDwZgAX3IAGUL9A1mAQFH1rVP8gHOjWz5LPfmzEFoEjNdXhi2ZGBPc5jF/n7G0WoDWEsliAVQeZwDoAvrUBdbtV1ursGyIpoYuTEDzwN9ClUEPzR09uYvZP4uGzhCaGZOVRJhfscg23VujindlHYdX3UjfHd+bB16JVF0dN4jPR9CY86i0/+oXO7dZCNYQUPXKxGDteE1zwHgouMIY6h3xx0Jl1juv9ZpdCKv9rhP0ELi/eyv4r4bzLhF+Lb40gqE+/W6LJtNdOaCqO6nsIAPHjDHHS5U1xvvBlJVBYvVy8If/KXIz8zGFzBPEac2JwS9zwJ6G4H1A+knnIkpkmkqBke5bYKd/CIlWBb4sBqqyAWHo0JZ1rOwbmpMD/h4JPgeH24XwiCH8uBTYcK4PvBkzIfHFp5ryyyK3dtk5x1EbML3lr6d7Eyk/cwI7dHY7JgMuPXpSgbOgf8fX4EZGSlP2tZEtxrNXrl0fCLwFVt/Tk37WzjYhYnNhBAU8+OTAUSCt4eNDe95VKPJIFR7X2G+jfUPz3qQcrvpea1DDDL9qt08UAsuXLIVlp37JmR7s3QbPkrnpyi9m6VBIBSObaCK9IQe8FKpssMYk/FEXMR51GaK5ExFoLVTt/AZQlaZPHC5KmYWHPTBNWXBJdvxVNJU5mx9sVRnXy1qus35Q71g3IQVKm1OkTETQ541ssY1A5jYl0nUKU8TbFautWDDtA/uHWuK+wA8W5IyO0JzJoJrmC3R+O1izAgTas8L1nyczD8f3Fj0OPQ2L6vTGXRSAwbGs7A5YCBHhGhWzGJEImNP6IHSrjstIcljjw/p+rddmXM6XqFTBxfqFCwPWO60nNSNDrz5fcT0gozeBdQIqcnaBFka5PZYdbW+9+dejQsbUD2y4opHQbtIkIqpwvk4BaYn+VnUpX6SzJZmOT1aOKYHva8j7fP8CXqJr3ys6m5cAAAAASUVORK5CYII="></a><br>
            <input type="checkbox" name="wp-admin" value="true" <?php if (get_option('wp-admin') == "1") {
            echo 'CHECKED';
        } ?>>Block admin panel (The admin panel won't be accessible for banned users)<a href="" id="tt2" class="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAADZUlEQVQ4T62US2iUVxTHzzn3zkcspiAqqLRqzCTagItgI5nMBImZpjaCj4JUqBEhLgRREF2o1Y12EUUXLlpQFy0uQmlDUXRiHVOjOJnxVRsfKElmFpbiTpFGJcl895yejGaYGRO76V193zn3/O7/PO5F+J8XTsXrCVWuIqI2QAmD0EeCgMDwVIhvoJPO5lTmnMZyafw7wNjyRdVlAfOjbqxDwZgAX3IAGUL9A1mAQFH1rVP8gHOjWz5LPfmzEFoEjNdXhi2ZGBPc5jF/n7G0WoDWEsliAVQeZwDoAvrUBdbtV1ursGyIpoYuTEDzwN9ClUEPzR09uYvZP4uGzhCaGZOVRJhfscg23VujindlHYdX3UjfHd+bB16JVF0dN4jPR9CY86i0/+oXO7dZCNYQUPXKxGDteE1zwHgouMIY6h3xx0Jl1juv9ZpdCKv9rhP0ELi/eyv4r4bzLhF+Lb40gqE+/W6LJtNdOaCqO6nsIAPHjDHHS5U1xvvBlJVBYvVy8If/KXIz8zGFzBPEac2JwS9zwJ6G4H1A+knnIkpkmkqBke5bYKd/CIlWBb4sBqqyAWHo0JZ1rOwbmpMD/h4JPgeH24XwiCH8uBTYcK4PvBkzIfHFp5ryyyK3dtk5x1EbML3lr6d7Eyk/cwI7dHY7JgMuPXpSgbOgf8fX4EZGSlP2tZEtxrNXrl0fCLwFVt/Tk37WzjYhYnNhBAU8+OTAUSCt4eNDe95VKPJIFR7X2G+jfUPz3qQcrvpea1DDDL9qt08UAsuXLIVlp37JmR7s3QbPkrnpyi9m6VBIBSObaCK9IQe8FKpssMYk/FEXMR51GaK5ExFoLVTt/AZQlaZPHC5KmYWHPTBNWXBJdvxVNJU5mx9sVRnXy1qus35Q71g3IQVKm1OkTETQ541ssY1A5jYl0nUKU8TbFautWDDtA/uHWuK+wA8W5IyO0JzJoJrmC3R+O1izAgTas8L1nyczD8f3Fj0OPQ2L6vTGXRSAwbGs7A5YCBHhGhWzGJEImNP6IHSrjstIcljjw/p+rddmXM6XqFTBxfqFCwPWO60nNSNDrz5fcT0gozeBdQIqcnaBFka5PZYdbW+9+dejQsbUD2y4opHQbtIkIqpwvk4BaYn+VnUpX6SzJZmOT1aOKYHva8j7fP8CXqJr3ys6m5cAAAAASUVORK5CYII="></a><br>
            <br>
            <input type="submit" value="Save" class="button"><br></form>
        <hr>

        Message for banned users ([reason]<a href="" id="tt1" class="tooltip"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAADRElEQVQ4T62USWhTYRDHZ+bLq20jbhRRatWq4NKAqCgWW+vSRPTgguByqIgiqHhyrbRBS9qi4EEFPehFEKz7htY2WlzBNUpxlwZBEJeLC7i0fd+Mk9SGpAsq+AJ58N7M7/1n/t8Mwn++sDve4/IZAUJTAgwFQJADAqi/d3q7A8w1eVVXzmgyd8zvBIyUThvRw0k7hCCTFXJRBOtBOCr6h0BDyMBMfTYfBZqQYPnoUDiSDE0BNpYVT3aQLmnmI+GWzYjObBKZD0QjFUjIGAWSWrD2mHhMqX5wLrAsVrXn2qEJYOPGqblORo8IMJ4HlOMAeBgJ+3XVEmH+zsJrCWm4IGyWVi707Wi4H4tNAJ8F/VcYMB0sh4jogsI8CRj+DhNJ4TPbFSg0S1X7Rr/oMxZPnLDxyCdbp09Bj3PTunaKx+BpJDMgkUkEw9YdBLGt8Hr/GoAkqKr8QYCFInKDGVf6qsNH48BnweJ92iKfxp4ig3tSZKi6QUu3xYFvj1enAGNxCtutt35qd19fKDz3N9D/UBjOapkFiOhPBpr0nmC8vYHS0uHnu2inlrLYKFjcjgZ3jwmFs+LAp0H/R2bYoMAKg5ibnJUxOA+yF5eDJ7M3vKiY0wVQ63JtETmeG5+ef81sA5YHPqhzm8DQ9o7A2PucZVXgzR3XLRAZpqnC6+/fvMxoK7msOKL2nxfEfIPqWocrp0SBw7oGiuVXLFKlwF15ocv92xXuVeB4HaQjxuC+fwEqbJfmDVTvvGMqwwvajk3ZjEnGOHebm22hx8EaQzSoHZqePRKyF5WB0ysL3l/YC58jdYnvqcPf0sApapbWWwK2xFfZcDJxsJ8GA7U661mucKkD5hISpXVyoMMD68pSNLwEgIaqw+NjyyIBvLd+ao7Xq6MHctW1eMAxcBiRBnYF1TK/GJRVepjzBWW1tLj5vp1XG2OxKcvheTAwQYPr9CxGm93WDQ6ZiRoxjwBGqWFGN1ATMNUaa+tdx1SgSJEAL8yrbEj0odP6erCleHCmQwfVJL8IX9c1Va8qmnQPMgoOJYSZqiOgU/3Q5ZaVY6uvPUmuotsFG59v4ylR9wpAcIi2QscW32rybRFbk6zqr4B/MqS7978AnXtkyPuK03sAAAAASUVORK5CYII="></a>):<br>
        <form action="admin.php?page=bansopt" method="POST">
            <?php wp_editor(stripslashes_deep(get_option('b')), 'extrab', $settings = array('textarea_name' => 'banmsg', 'media_buttons' => false, 'textarea_rows' => 10)); ?>
            <br><input type="submit" value="Save" class="button">
        </form>
        <hr>
        Message for country banned users:<br>
        <form action="admin.php?page=bansopt" method="POST">
<?php wp_editor(stripslashes_deep(get_option('c')), 'extrac', $settings = array('textarea_name' => 'cbanmsg', 'media_buttons' => false, 'textarea_rows' => 10)); ?>
            <br><input type="submit" value="Save" class="button">
        </form>
        <hr>

        <form action="admin.php?page=bansopt" method="POST">
            <input type="hidden" name="restert" value="restart">
            <input type="submit" value="Reset the plugin!" class="button"><br><br>This will delete all bans, statistics and will restore settings to default.</form>

    </div></div>