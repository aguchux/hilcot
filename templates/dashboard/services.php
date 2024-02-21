

<div class="section overlap info">
    <div class="container">

<legend class="mb-3">List Products
    <a class="pull-right btn btn-mini btn-success" href="/dashboard/addproduct"><span>+Add Product</span></a>
</legend>

<div>
    <table class="table table-bordered">

        <tr class="success" style="height:20px; padding:0px;">
            <td><strong>ID</strong></td>
            <td><strong>Title</strong></td>
            <td><strong>Edit</strong></td>
            <td><strong>Delete</strong></td>
        </tr>

        <? while($service=mysqli_fetch_object($services)): ?>

        <tr>
            <td><?= $service->id; ?></td>
            <td><?= $service->name ?></td>
            <td><a href="/dashboard/products/<?= $service->id; ?>/editproduct">Edit</a></td>
            <td><a href="/dashboard/products/<?= $service->id; ?>/deleteproduct">Delete</a></td>
        </tr>

        <? endwhile; ?>

    </table>
</div>

    
    </div>
</div>