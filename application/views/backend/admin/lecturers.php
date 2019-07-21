<a href="#"
    class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        Add Lecturer
</a>
<br><br>

<table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <th style="width: 60px;">#</th>
            <th>NIP</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Total Hour</th>
            <th>Total SKS</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $count    = 1;
            foreach ($lecture as $row):
        ?>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['nip'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['sex'];?></td>
        <td><?php echo $row['total_hour'];?></td>
        <td><?php echo $row['total_sks'];?></td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                    Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                    <li>
                        <a href="#">
                            <i class="entypo-pencil"></i>Edit
                        </a>
                    </li>
                    <li class="divider"></li>

                    <li>
                        <a href="#">
                            <i class="entypo-trash"></i>Delete
                        </a>
                    </li>
                </ul>
            </div>
        </td>
        <?php endforeach; ?>
    </tbody>
</table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

    jQuery(document).ready(function($)
    {
        $('#table_export').dataTable();
    });

</script>
