<!-- Resume Subpage -->
<section class="pt-page pt-page-4" data-id="courses">
 <div class="section-title-block">
  <h2 class="section-title">Courses</h2>
 </div>

 <div class="row">

  <?php
  arsort($courses);
  foreach ($courses as $course) : ?>

   <div class="col-sm-6 col-md-3 subpage-block">
    <div class="fun-fact-block gray-bg">
     <h4><?php echo $course->course_name ?></h4>
     <p><span class="event-description"><strong>School: </strong></span><span class="event-description"><?php echo $course->course_school ?></span></p>
     <p><?php echo $course->course_month ?>/<?php echo $course->course_year ?></p>
    </div>
   </div>

  <?php endforeach; ?>

 </div>

</section>
<!-- End Resume Subpage -->