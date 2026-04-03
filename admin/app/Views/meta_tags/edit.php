<style>
    .card {
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.125), 0 3px 15px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
    }

    .form-label {
        font-size: 18px;
        color: #0a5cab;
        font-weight: 500;
    }

    .form-control {
        border: 1px solid #0a5cab;
    }

    .btn {
        width: 100px;
        padding: 6px;
        background: #3b9ce6;
        color: white;
        border: 1px solid #3b9ce6;
    }

    .btn:hover {
        background-color: #318bcc;
        border-color: #318bcc;
    }
</style>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-8 col-12">
            <div class="card">
                <h4 class="mb-3">Edit Meta Tag</h4>
                <form action="<?= base_url('meta_tags/update/'.$meta_tag->id) ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="title" class="form-control" value="<?= $meta_tag->title ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea name="description" class="form-control" required><?= $meta_tag->description ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Keywords</label>
                        <input type="text" name="keywords" class="form-control" value="<?= $meta_tag->keywords ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OG Title</label>
                        <input type="text" name="ogtitle" class="form-control" value="<?= $meta_tag->ogtitle ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OG Description</label>
                        <textarea name="ogdescription" class="form-control"><?= $meta_tag->ogdescription ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OG Image (optional)</label>
                        <input type="file" name="ogimage" class="form-control" accept="image/*">
                        <?php if (!empty($meta_tag->ogimage)): ?>
                            <small>Current: <a href="<?= base_url('uploads/' . $meta_tag->ogimage) ?>" target="_blank"><?= $meta_tag->ogimage ?></a></small>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Page Name</label>
                        <input type="text" name="page" class="form-control" value="<?= $meta_tag->page ?>" required>
                    </div>

                    <button type="submit" class="btn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
