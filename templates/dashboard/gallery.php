<div class="section overlap info">
    <div class="container">

        <legend class="mb-3">Gallery <small>list Photos</small>
            <a class="pull-right btn btn-mini btn-success" href="/dashboard/addphoto"><span>+Add Photo</span></a>
        </legend>

        <div>
            <table class="table table-bordered">

                <tr class="success" style="height:20px; padding:0px;">
                    <td><strong>ID</strong></td>
                    <td><strong>Title</strong></td>
                    <td><strong>Photo</strong></td>
                    <td><strong>Delete</strong></td>
                </tr>

                <? while($gallery=mysqli_fetch_object($galleries)): ?>

                <tr>
                    <td><?= $gallery->id; ?></td>
                    <td><?= $gallery->title ?></td>
                    <td><img src="<?= $gallery->photo; ?>" style="height: 50px;"></td>
                    <td><a href="/dashboard/gallery/<?= $gallery->id; ?>/deletephoto">Delete</a></td>
                </tr>

                <? endwhile; ?>

            </table>
        </div>



    </div>
</div>