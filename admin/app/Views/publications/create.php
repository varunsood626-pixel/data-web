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

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-6 col-12">
            <div class="card">
                <form method="post" action="<?= base_url('publications/store') ?>">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Published by</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Publish On</label>
                        <input type="text" name="publishon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="url" name="link" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="">Select</option>
                            <option value="screening">Screening</option>
                            <option value="diagnosis">Diagnosis</option>
                            <option value="therapy_guidance">Therapy Guidance</option>
                            <option value="monitoring">Monitoring</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Active</label>
                        <select name="active" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
