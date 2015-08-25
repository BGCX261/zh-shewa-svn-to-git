<div <?php if($emod02['id'])echo 'id='.$emod02['id']?> class="mod emod-02<?php if ($emod02['className'])echo $emod02['className']?>">
		<span class="top"><span class="tl"></span><span class="tr"></span></span>
		<div class="inner">
			<div class="hd">
			<h2><?php echo $emod02['hd'];?></h2>
			</div>
			<div class="bd">
				<?php
				for($i=0;$i<$emod02['bdlength'];$i++){
					echo $emod02['bd'];
				}
				?>
			</div>
		</div>
		<span class="bottom"><span class="bl"></span><span class="br"></span></span>
	</div>