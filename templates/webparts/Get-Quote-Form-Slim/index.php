<?php
$Services = $Core->SubPages($Core->getSiteInfo("Services-Page"));
?>
<!-- Contact -->
<div class="section contact <?= ($i == 1) ? 'overlap' : '' ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-md-push-8">

            </div>

            <div class="col-sm-8 col-md-8 col-md-pull-4">
                <div class="content">
                    <p class="section-heading-3 editable" id="<?= "{$PageInfo->id}-{$page_part->id}-6" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 6, "Suspendisse est nunc mollis id elit ac efficitur rutrum mauris. Pellentesque ut orci ac leo dictum viverra ac ac turpis.") ?></p>
                    <div class="margin-bottom-30"></div>
                    <h3 class="section-heading-2 editable" id="<?= "{$PageInfo->id}-{$page_part->id}-7" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 7, "Contact Details") ?></h3>
                    <form action="/forms/servicequote" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true" method="POST">

                        <input type="hidden" name="pageid" value="<?= $PageInfo->id ?>" />
                        <?php if (isset($_REQUEST['done'])) : ?>
                            <div class="help-block with-errors alert alert-success">Thank you. We will get back to you.</div>
                        <?php endif; ?>

                        <div class="form-group">
                            <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Full Name...">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="p_department" name="p_department">
                                <?php while ($serv = mysqli_fetch_object($Services)) : ?>
                                    <option value="<?= $serv->menutitle ?>"><?= $serv->menutitle ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="p_email" name="p_email" placeholder="Enter Address...">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="p_subject" name="p_subject" placeholder="Subject...">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea id="p_message" name="p_message" class="form-control" rows="6" placeholder="Write message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-secondary" style="pointer-events: all; cursor: pointer;">REQUEST A QUOTE</button>
                        </div>
                    </form>
                    <div class="margin-bottom-50"></div>
                    <p><em class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-8" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 8, "Note: Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.") ?></em></p>
                </div>
            </div>

        </div>

    </div>
</div>