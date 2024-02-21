<?php
$Services = $Core->SubPages($Core->getSiteInfo("Services-Page"));
?>
<!-- SERVICES -->
<div class="section <?= ($i == 1) ? 'overlap' : '' ?> services">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2 class="section-heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-27" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 27, "SERVICES") ?></h2>
			</div>
		</div>

		<div class="row no-gutter">

			<?php while($service = mysqli_fetch_object($Services)): ?>
			<div class="col-sm-6 col-md-4">
				<!-- BOX 1 -->
				<div class="box-icon-3">
					<div class="line-t"></div>
					<div class="icon">
						<div class="fa fa-gears"></div>
					</div>
					<div class="body-content">
						<div class="heading"><?= $service->menutitle ?></div>
						<span><?= $service->title ?></span>
						<a href="/info/<?= $service->slug ?>" class="readmore">READ MORE</a>
					</div>
					<div class="line-b"></div>
				</div>
			</div>
			<?php endwhile; ?>

		</div>
	</div>
</div>