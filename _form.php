
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($contact['id']): ?>
                    Update contact <b><?php echo $contact['firstname'] ?></b>
                <?php else: ?>
                    Create new contact
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>First name</label>
                    <input name="name" value="<?php echo $contact['firstname'] ?>"
                           class="form-control">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input name="contactname" value="<?php echo $contact['lastname'] ?>"
                           class="form-control">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" value="<?php echo $contact['telephone'] ?>"
                           class="form-control  ">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input name="website" value="<?php echo $contact['address'] ?>"
                           class="form-control ">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>