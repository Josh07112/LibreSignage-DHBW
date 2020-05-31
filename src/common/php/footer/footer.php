<?php

use libresignage\common\php\Config;

?>

<footer class="container-fluid footer d-flex align-items-center">
	<div class="container-fluid">
		<span>
			DHBW LibreSignage <?php echo Config::config('LS_VER'); ?> &bull;
			Copyright <?php echo '2018-'.date('Y'); ?> Eero Talus, modifiziert von Joshua Jenkins
			</br>
			<a href="<?php echo Config::config('README_PAGE'); ?>">LibreSignage</a>
			ist kostenlos und Open-Source.
		</span>
	</div>
</footer>
