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
                <h4 class="mb-3">Create Meta Tag</h4>
                <form action="<?= base_url('meta_tags/store') ?>" method="post" enctype="multipart/form-data">
                     <div class="mb-3">
                        <label class="form-label">Page Name</label>
                        <input type="text" name="page" class="form-control" placeholder="Page Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Meta Title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea name="description" class="form-control" placeholder="Meta Description" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Keywords</label>
                        <input type="text" name="keywords" class="form-control" placeholder="Keywords" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OG Title</label>
                        <input type="text" name="ogtitle" class="form-control" placeholder="OG Title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OG Description</label>
                        <textarea name="ogdescription" class="form-control" placeholder="OG Description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">OG Image</label>
                        <input type="file" name="ogimage" class="form-control" accept="image/*">
                    </div>

                   

                    <button type="submit" class="btn">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
