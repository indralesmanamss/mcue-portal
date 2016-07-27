<?php
  use yii\helpers\Html;
?>

<div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading">
      List of Participant
    </div>
    <div class="table-responsive">
      <table ui-jq="dataTable" class="table table-striped b-t b-b">
        <thead>
          <tr>
            <th  style="width:5%">No</th>
            <th  style="width:25%">Speaker</th>
            <th  style="width:25%">Email</th>
            <th>Registered</th>
            <th  style="width:15%">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $no = 1;
            foreach ($model as $row) {
          ?>
            <tr>
              <td><?php echo $no;?></td>
              <td>
                  <a herf="#" class="pull-left thumb-sm avatar m-r profile-pegawai" data-toggle="modal" data-target="#profile-pegawai">
                    <img src="<?php echo (!empty($row['img_url'])) ? $row['img_url'] : 'images/doctor.jpg'?>" alt="..." class="img-circle">
                    <i class="on b-white bottom"></i>
                  </a>
                      <div class="clear">
                        <div><a href="#" class="profile-pegawai" data-toggle='modal' data-target='#profile-pegawai'><?php echo $row['fname'].' '.$row['lname'];?></a></div>
                      </div>
              </td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo date("d F Y", $row['created_at']);?></td>
              <td>
                <?= Html::a('<button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Profile"><i class="icon-user"></i></button>', null,
                      [
                        'data-toggle' => 'modal',
                        'data-target' => '#profile-participant',
                        'value' => $row["id"],
                        'onClick' => '
                          $value = $(this).attr("value");
                          $.post("index.php?r=site/profile&id='.'"+$value,function(data){
                            $("#profile-participant .modal-content").html(data)
                          })
                        '
                      ]); 
                ?>
                <?= 
                    Html::a(' <button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Edit"><i class="icon-note"></i></button>',['/site/edit-user', 'id' => $row['id']]); 
                ?>   
                <a href="" data-toggle="modal" data-target="#delete-participant" value=""><button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Delete"><i class="icon-trash"></i></button></a> 
              </td>
            </tr>
          <?php
            $no++;
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal Profile Pegawai -->
      <div class="modal fade" id="profile-participant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>

  <!-- Modal Reset Password Speaker -->
      <div class="modal fade" id="edit-participant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
</div>