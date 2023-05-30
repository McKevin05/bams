<table width="100%" border="1" cellspacing='0' cellpadding='0' border-spacing='0'>
    <tr>
        <td><b>NO.</b></td>
        <td><b>TITLE</b></td>
        <td><b>PROPONENT</b></td>
        <td><b>BUDGET</b></td>
        <td><b>NO. OF DAYS</b></td>
        <td><b>CATEGORY</b></td>
    </tr>
    <?php $cnt = 1; foreach ($aip as $key => $row):?>
        <tr>
            <td><?php echo $cnt++?></td>
            <td><?php echo $row->project_title?></td>
            <td><?php echo $row->project_proponent?></td>
            <td><?php echo $row->project_budget?></td>
            <td><?php echo $row->project_no_of_days?></td>
            <td><?php echo $row->project_category?></td>
        </tr>
    <?php endforeach?>
</table>
