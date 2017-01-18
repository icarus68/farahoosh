<?php
//include(dirname(dirname(dirname(dirname(__FILE__))))."/vendor/webhdfs/autoload.php");
        $hdfs = new \org\apache\hadoop\WebHDFS(
                'masternode',
                '50070',
                'hduser',
                'masternode',
                '9000',
                'true'
                );
        
        $response = $hdfs->listStatus($path);
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">File Manager</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b><span dir="ltr">"<?php echo $path; ?>"</span></b>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example" dir="ltr">
                                <thead>
                                    <tr>
                                        <th>Files</th>
                                        <th>Size (bytes)</th>
                                        <th>Last Modified</th>
                                    </tr>
                                </thead>
                                <tbody id="gpsitems">
                                    <?php
                                    //print_r($response);
                                    if($path != '/')
                                    {
                                        $tmp = explode('/', $path);
                                        if(count($tmp)>2)
                                        {
                                        unset($tmp[count($tmp)-1]);
                                        $tmp = implode('/', $tmp);
                                        }else{
                                            $tmp = "/";
                                        }
                                        ?>
                                    <tr>
                                        <td colspan="3">
                                            <li class="fa fa-folder"></li> <?php echo '<a href="'. \yii\helpers\Url::to(['site/filemanager','path'=>$tmp]).'">..</a>'; ?>
                                        </td>
                                            
                                    </tr>
                                        <?php
                                        
                                    }
                                    foreach($response->FileStatuses->FileStatus as $item){
                                    ?>
                                    <tr>
                                    <td>
                                        <?php
                                        if($item->type=="DIRECTORY")
                                        {
                                            
                                            $name = '<a href="'.\yii\helpers\Url::to(['site/filemanager','path'=>$path.($path=='/'?'':'/').$item->pathSuffix]).'">'.$item->pathSuffix.'</a>';
                                        }
                                        else{
                                            $name = $item->pathSuffix;
                                        }
                                        ?>
                                        <li class="<?php echo ($item->type=="DIRECTORY")?'fa fa-folder':'fa fa-file'; ?>"></li> <?php echo $name; ?>
                                    </td>
                                    <td><?php echo $item->length; ?></td>
                                    <td>
                                        <?php echo date('d-m-20y', $item->modificationTime); ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
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


