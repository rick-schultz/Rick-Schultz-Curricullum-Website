</div>
<!-- General JS Scripts -->
<script src="<?php echo base_url('assets/backend/js/app.min.js') ?>"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="<?php echo base_url('assets/backend/js/scripts.js') ?>"></script>
<!-- Custom JS File -->
<script src="<?php echo base_url('assets/backend/js/custom.js') ?>"></script>

<?php if (isset($scripts)) : ?>
 <?php foreach ($scripts as $script) : ?>
  <script src="<?php echo base_url('assets/backend/' . $script) ?>"></script>
 <?php endforeach; ?>
<?php endif; ?>

</body>

</html>