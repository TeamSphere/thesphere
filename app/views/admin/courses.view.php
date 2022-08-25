<?php $this->view('admin/admin-header',$data) ?>

<?php if($action == 'add'):?>

  <div class="card col-md-5 mx-auto">
    <div class="card-body">
      <h5 class="card-title">New Course</h5>

      <!-- No Labels Form -->
      <form method="post" class="row g-3">
        
        <div class="col-md-12">
          <input value="<?=set_value('title')?>" name="title" type="text" class="form-control <?=!empty($errors['title']) ? 'border-danger':'';?>" placeholder="Course title">

          <?php if(!empty($errors['title'])):?>
            <small class="text-danger"><?=$errors['title']?></small>
          <?php endif;?>

        </div>

        <div class="col-md-12">
          <input value="<?=set_value('primary_subject')?>" name="primary_subject" type="text" class="form-control <?=!empty($errors['primary_subject']) ? 'border-danger':'';?>" placeholder="Primary subject e.g logic, philosophy, mechanics etc.">

          <?php if(!empty($errors['primary_subject'])):?>
            <small class="text-danger"><?=$errors['primary_subject']?></small>
          <?php endif;?>

        </div>
 
 
        <div class="col-md-12">
          <select name="category_id" id="inputState" class="form-select <?=!empty($errors['category_id']) ? 'border-danger':'';?>">
            
            <option value="" selected="">Course Category...</option>
            <?php if(!empty($categories)):?>
              <?php foreach($categories as $cat):?>
                <option <?=set_select('category_id',$cat->id)?> value="<?=$cat->id?>"><?=esc($cat->category)?></option>
              <?php endforeach;?>
            <?php endif;?>

          </select>

          <?php if(!empty($errors['category_id'])):?>
            <small class="text-danger"><?=$errors['category_id']?></small>
          <?php endif;?>

        </div>
    
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Save</button>

          <a href="<?=ROOT?>/admin/courses">
            <button type="button" class="btn btn-secondary">Cancel</button>
          </a>
        </div>
      </form><!-- End No Labels Form -->

    </div>
  </div>

<?php elseif($action == 'edit'):?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Course</h5>
            <?php if(!empty($row)):?>

                <div class="float-end">
                    <button class="js-save-button btn btn-success disabled">Save</button>
                    <a href="<?=ROOT?>/admin/courses">
                            <button class="btn btn-primary">Back</button>
                    </a>
                </div>

                <h5 class=""><?=esc($row->title)?></h5>

                

                <!-- Bordered Tabs Justified -->
                <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                    <li class="nav-item flex-fill" role="presentation">
                        <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link w-100 active" id="intended-learners-tab" data-bs-toggle="tab" data-bs-target="#intended-learners" type="button" role="tab" aria-controls="intended-learners" aria-selected="true">Intended learners</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link w-100" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link w-100" id="course-landing-page-tab" data-bs-toggle="tab" data-bs-target="#course-landing-page" type="button" role="tab" aria-controls="landing-page" aria-selected="false">Course landing page</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link w-100" id="promotions-tab" data-bs-toggle="tab" data-bs-target="#promotions" type="button" role="tab" aria-controls="promotions" aria-selected="false">Promotions</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <button onclick="set_tab(this.getAttribute('data-bs-target'))" class="nav-link w-100" id="course-message-tab" data-bs-toggle="tab" data-bs-target="#course-messages" type="button" role="tab" aria-controls="course-messages" aria-selected="false">Course messages</button>
                    </li>
                </ul>
                <div oninput="something_changed(event)"class="tab-content pt-2" id="borderedTabJustifiedContent">
                    <div class="tab-pane fade show active" id="intended-learners" role="tabpanel" aria-labelledby="intended-learners">
                        1Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
                        <input type="text" name="" />
                    </div>
                    <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum">
                        2Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                        <input type="text" name="" />
                    </div>
                    <div class="tab-pane fade" id="course-landing-page" role="tabpanel" aria-labelledby="landing-page">
                        3Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                        <input type="text" name="" />
                    </div>
                    <div class="tab-pane fade" id="promotions" role="tabpanel" aria-labelledby="promotions">
                        4 Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                        <input type="text" name="" />
                    </div>
                    <div class="tab-pane fade" id="course-messages" role="tabpanel" aria-labelledby="course-messages">
                        5 Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                        <input type="text" name="" />
                    </div>
                </div><!-- End Bordered Tabs Justified -->
            <?php else: ?>
            <div>That course was not found!</div>
            <?php endif;?>
        </div>
    </div>

<?php else:?>

  <div class="card">

    <div class="card-body">
      <h5 class="card-title">
        My Courses 
        <a href="<?=ROOT?>/admin/courses/add">
          <button class="btn btn-primary float-end"><i class="bi bi-camera-video-fill"></i> New Course</button>
        </a>
      </h5>

      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Instructor</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Primary Subject</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <?php if(!empty($rows)):?>
          <tbody>

            <?php foreach($rows as $row):?>
              <tr>
                <th scope="row"><?=$row->id?></th>
                <td><?=esc($row->title)?></td>
                <td><?=esc($row->user_row->name ?? 'Unknown')?></td>
                <td><?=esc($row->category_row->category ?? 'Unknown')?></td>
                <td><?=esc($row->price_row->name ?? 'Unknown')?></td>
                <td><?=esc($row->primary_subject)?></td>
                <td><?=get_date($row->date)?></td>
                <td>
                    <a href="<?=ROOT?>/admin/courses/edit/<?=$row->id?>">
                        <i class="bi bi-pencil-square"></i> 
                    </a>
                    <a href="<?=ROOT?>/admin/courses/delete/<?=$row->id?>">
                        <i class="bi bi-trash-fill text-danger"></i>
                    </a>
                </td>
              </tr>
            <?php endforeach;?>

          </tbody>
        <?php else:?>
          <tr><td colspan="10">No records found!</td></tr>
        <?php endif;?>

      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>

<?php endif;?>

<script>

    var tab = sessionStorage.getItem("tab") ? sessionStorage.getItem("tab"): "#intended-learners";
    var dirty = false;

    function show_tab(tab_name)
      {
        const someTabTriggerEl = document.querySelector(tab_name +"-tab");
        const tab = new bootstrap.Tab(someTabTriggerEl);

        tab.show();
        
        disable_save_button(false);
        

      }

    function set_tab(tab_name) {
        tab = tab_name;
        sessionStorage.setItem("tab", tab_name);

        if (dirty) {
            //ask user to save when switching tabs
            if (!confirm("Your changes were not saved. Continue?")) {
                 tab = dirty;
                sessionStorage.setItem("tab", dirty);
                setTimeout(function () {

                    show_tab(dirty);
                    disable_save_button(true);

                }, 10);
            } else {
                dirty = false;
                disable_save_button(false);
            }
        }
    }

    function something_changed(e) {
           dirty = tab;
         disable_save_button(true);
       
    }

    function disable_save_button(status = false) {
        if (status) {
            document.querySelector(".js-save-button").classList.remove("disabled");
        } else {
            document.querySelector(".js-save-button").classList.add("disabled");
        }
    }

</script>

<?php $this->view('admin/admin-footer',$data) ?>