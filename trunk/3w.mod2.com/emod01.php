<div <?php if($emod01['id'])echo 'id='.$emod01['id']?> class="mod emod-01<?php if ($emod01['className'])echo $emod01['className']?>">
		<span class="top"><span class="tl"></span></span>
		<div class="inner">
			<div class="hd">
			<h2><?php echo $emod01['hd'];?></h2>
			</div>
			<div class="bd">
				<?php
				for($i=0;$i<$emod01['bdlength'];$i++){
					echo $emod01['bd'];
				}
				?>
			</div>
		</div>
		<span class="bottom"><span class="bl"></span></span>
</div> 