<div class="section <?= ($i == 1) ? 'overlap' : '' ?> feature my-5">

	<div class="container my-5">
		<div class="row">


			<div class="col-sm-12 col-md-12">
				<div class="box-partner">
					<!-- item 1 -->
					<div class="item">
						<div class="box-image">
							<div class="client-img">
								<a><img src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 1, "{$assets}images/partners-1.png") ?>" id="<?= "{$PageInfo->id}-{$page_part->id}-1" ?>" data-type="img" class="img-responsive editable" data-width="205" data-height="50"></a>
							</div>
						</div>
						<div class="box-info">
							<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-2" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 2, "Pestco") ?></div>
							<p class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-3" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 3, "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.") ?></p>
						</div>
					</div>
				</div>
			</div>


		</div>



	</div>

</div>