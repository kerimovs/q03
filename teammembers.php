<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css" style="text/css">
    <!-- <link rel="stylesheet" href="css/style.css" style="text/css"> -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="col-md-8 col-md-offset-4">
      <div class="titlebar row">
          <input type="text" placeholder="Project ID">
          <select class="combobox">
            <option value="Project Title">Project Title</option>
          </select>
          <select class="combobox">
            <option value="Client Company Name">Client Company Name</option>
          </select>
          <select class="combobox">
            <option value="Project ID">Project ID</option>
          </select>
          <button type="submit" class="btn btn-primary">Search Projects</button>
          <button type="submit" class="btn btn=primary">Add new project</button>
      </div>
      <div class="table-section row">
        <table class="table table-striped">
          <thead>
            <th>Pic</th>
            <th><a href="#">Full Name <i class="fa fa-sort"></i></a></th>
            <th><a href="#">Group <i class="fa fa-sort"></i></a></th>
            <th>Telephone</th>
            <th>Email address</th>
            <th>Job Title</th>
            <th>Last Active</th>
            <th><i class="fa fa-bars"></i></th>
          </thead>
          <?php
            include_once("functions.inc");
            $tm_array = array(0=>array('pic'=>'#','full_name'=>'Fred Marks','group'=>'administrator','telephone'=>'210-829-1278','email_address'=>'admin@nextloop.net','job_title'=>'manager','last_active'=>'2015-08-31 05:11:26'));
            createTMTable($tm_array);
          ?>
          <!-- <tbody>
            <tr>
              <td>
                <img src="" alt="" />
              </td>
              <td>
                Complete Web Desingn
              </td>
              <td>
                Open Demo
              </td>
              <td>
                16-09-2015
              </td>
              <td>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                      </div>
                  </div>
              </td>
              <td>
                02:25:45
              </td>
              <td>
                9
              </td>
              <td>
                <button type="button" class="btn btn-xs btn-primary">
                    <i class="fa fa-pencil"></i>
                </button>
                <button type="button" class="btn btn-xs btn-danger">
                    <i class="fa fa-trash"></i>
                </button>
              </td>
            </tr>
          </tbody> -->
        </table>
      </div>
  </div>

  </body>
</html>
