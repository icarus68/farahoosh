<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Charts</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Popularity Chart</b>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            
<?php echo \yii2mod\c3\chart\Chart::widget([
    'options' => [
            'id' => 'popularity_chart'
    ],
    'clientOptions' => [
       'data' => [
            'x' => 'x',
            'columns' => [
                ['x', 'week 1', 'week 2', 'week 3', 'week 4'],
                ['Popularity', 10, 20, 30, 50]
            ],
            'colors' => [
                'Popularity' => '#4EB269',
            ],
        ],
        'axis' => [
            'x' => [
                'label' => 'Month',
                'type' => 'category'
            ],
            'y' => [
                'label' => [
                    'text' => 'Popularity',
                    'position' => 'outer-top'
                ],
                'min' => 0,
                'max' => 50,
                'padding' => ['top' => 10, 'bottom' => 0]
            ]
        ]
    ]
]); ?>
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


