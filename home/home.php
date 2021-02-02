<img src="<?php echo "data:image;base64," . base64_encode($row['dpcover']); ?>" id="dp-cover">
<p id="dp-name"><?php echo $_SESSION['username']; ?></p>
<div style="top  : 315px; left : 51%; position : absolute; background-color : white; height : 35px; width : 200px;z-index: 0;border-radius : 20px;opacity : 0.6;"></div>
<img src="<?php echo "data:image;base64," . base64_encode($row['dpprofile']); ?>" id="dp-profile">