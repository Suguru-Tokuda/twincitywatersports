<h3 class="mb"><?= $headline ?></h3>
<?php
if (isset($flash)) {
  echo $flash;
}
?>
<div class="form-panel">
  <h4>Booking Schedule</h4>
  <a href="<?= base_url() ?>boat_rental/create_boat/<?= $boat_rental_id ?>" ><button type="button" class="btn">Back to Boat Management</button></a>
  <table class="table table-striped table-bordered bootstrap-datatable datatable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Start Date</th>
        <th>End Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $this->load->module('timedate');
      foreach($query->result() as $row) {
        $first_name = $row->firstName;
        $last_name = $row->lastName;
        $email = $row->email;
        $start_date = $this->timedate->get_date($row->boat_start_date, "datepicker_us");
        $start_time = $this->timedate->get_time($row->boat_start_date);
        $end_date = $this->timedate->get_date($row->boat_end_date, "datepicker_us");
        $end_time = $this->timedate->get_time($row->boat_end_date);
        ?>
        <tr>
          <td><?= $first_name." ". $last_name ?></td>
          <td><a href="mailto:<?= $email ?>"><?= $email ?></a></td>
          <td><?= $start_date. " ".$start_time ?></td>
          <td><?= $end_date." ". $end_time ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
  <?= $pagination ?>
</div>
