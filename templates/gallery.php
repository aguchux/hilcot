<!-- Team -->
<?php $Galleries = $Core->Galleries() ?>
<div class="section why overlap">
    <div class="container">

        <div class="row grid-services">


            <?php while ($gallery = mysqli_fetch_object($Galleries)) : ?>



                <div class="col-sm-6 col-md-4">
                    <div class="box-image-4">
                        <div class="media">
                            <img date-height="500" data-width="500" data-type="img" src="<?= $gallery->photo ?>" class="img-responsive">
                        </div>
                    </div>
                </div>


            <?php endwhile; ?>

        </div>
    </div>
</div>