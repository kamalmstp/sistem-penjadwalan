<a href="#"
    class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        Add Room
</a>
<br><br>

<table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <th style="width: 60px;">#</th>
            <th>Name</th>
            <th>Capacity</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $count    = 1;
            foreach ($room as $row):
        ?>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['capacity'];?></td>
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
