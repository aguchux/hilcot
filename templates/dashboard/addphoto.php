<div class="section overlap info">
    <div class="container">


        <form action="/forms/addphoto" method="POST" enctype="multipart/form-data">
            <?= $Me->tokenize() ?>

            <div class="row">

                <div class="col-12 col-md-12 form-group">
                    <label>Title</label>
                    <input name="title" class="form-control form-control-lg" type="text" placeholder="Photo Title">
                </div>

                <div class="col-12 col-md-4 form-group">
                    <label>Glallery Photo</label>
                    <input required name="photo" class="form-control form-control-lg" type="file">
                </div>

            </div>

            <div class="row-flud clearfix">
                <div class="col-12 col-md-12 mt-5">
                    <button type="submit" class="btn btn-primary btn-lg">Create Phpoto</button>
                </div>
            </div>
        </form>
    </div>
</div>