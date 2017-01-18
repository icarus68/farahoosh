<script>
var count = 1;
if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("<?php echo Yii::$app->urlManager->createUrl('site/getmessage'); ?>")
    source.onmessage = function(event) {
        var class_name = 'odd';
        if(count % 2 === 0 )
            class_name = 'even';
        var obj = jQuery.parseJSON( event.data );
        var tr_str = '<tr class="'+class_name+' gradeX"><td>'+obj.timestamp+'</td><td>'+obj.lat+'</td><td>'+obj.long+'</td><td class="center">Android 5.1</td><td class="center">REST Protocol</td></tr>';
        $('#gpsitems').prepend(tr_str);
        count++;
    };
} else {
        var tr_str_error = '<tr class="odd gradeX"><td colspan="5">Sorry, your browser does not support server-sent events...</td></tr>';
        $('#gpsitems').prepend(tr_str_error);
}
</script>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">جداول</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        موقعیت های کاربر "مهرداد حسین زاده"
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>زمان</th>
                                        <th>lat</th>
                                        <th>long</th>
                                        <th>سیستم عامل</th>
                                        <th>نوع ارتباط</th>
                                    </tr>
                                </thead>
                                <tbody id="gpsitems">
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


