<?php $this->load->view('backend/layout/navbar'); ?>
<?php $this->load->view('backend/layout/sidebar'); ?>

<!-- Main Content -->
<div class="main-content">
 <section class="section">
  <div class="section-body">

   <div class="row">
    <div class="col-12">
     <div class="card">
      <div class="card-header">
       <h4>Add new course</h4>
      </div>
      <form method="post" action="<?php echo base_url('backend/courses/core') ?>">
       <div class="card-body">
        <div class="form-group row mb-4">
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Course</label>
         <div class="col-sm-12 col-md-7">
          <input type="text" class="form-control" id="course_name" name="course_name">
         </div>
        </div>
        <div class="form-group row mb-4">
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">School</label>
         <div class="col-sm-12 col-md-7">
          <input type="text" class="form-control" id="course_school" name="course_school">
         </div>
        </div>
        <div class=" form-group row mb-4">
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 ">Month</label>
         <div class="col-12 col-sm-12 col-md-3 mb-4">
          <input type="text" class="form-control" id="course_month" name="course_month">
         </div>
         <label class=" col-form-label text-md-right col-12 col-md-1 col-lg-1">Year</label>
         <div class="col-12 col-sm-12 col-md-3">
          <input type="text" class="form-control" id="course_year" name="course_year">
         </div>
        </div>
        <div class=" form-group row mb-4">
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
         <div class="col-sm-12 col-md-7">
          <button class="btn btn-primary" type="submit" name="insert" value="insert">Publish</button>
         </div>
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>

   <div class="row">
    <div class="col-12">
     <div class="card">
      <div class="card-header">
       <h4>Courses</h4>
      </div>
      <div class="card-body">
       <div class="table-responsive">
        <table class="table table-striped data-table">
         <thead>
          <tr>
           <th class="text-center">
            #
           </th>
           <th>Course</th>
           <th>School</th>
           <th>Month</th>
           <th>Year</th>
          </tr>
         </thead>
         <tbody>
          <?php foreach ($courses as $course) : ?>
           <tr>
            <td class="text-center"><?php echo $course->course_id ?></td>

            <td><?php echo $course->course_name ?></td>

            <td><?php echo $course->course_school ?></td>

            <td><?php echo $course->course_month ?></td>

            <td><?php echo $course->course_year ?></td>

           </tr>
          <?php endforeach; ?>
         </tbody>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>

  </div>
 </section>

 <?php $this->load->view('backend/layout/sidebar-settings'); ?>
</div>