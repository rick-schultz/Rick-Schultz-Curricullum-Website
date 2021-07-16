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
              <h4>Users</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped data-table">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>User</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $user) : ?>
                      <tr>
                        <td><?php echo $user->id ?></td>

                        <td><?php echo $user->first_name . ' ' . $user->last_name ?></td>

                        <td><?php echo $user->email ?></td>

                        <td><?php echo $user->username ?></td>

                        <td>
                          <?php if ($user->active == 1) {
                            echo '<span class="badge badge-success badge-shadow">Active</span>';
                          } elseif ($user->active == 0) {
                            echo '<span class="badge badge-danger badge-shadow">Inactive</span>';
                          } ?>
                        </td>

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