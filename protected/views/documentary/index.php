<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách công văn</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã số</th>
                            <th>Số công văn</th>
                            <th>Tóm tắt</th>
                            <th>Người ký</th>
                            <th>Từ khóa</th>
                            <th>Tình trạng</th>
                            <th>Hành động</th>
                        </tr>
                        <?php foreach ($models as $item): ?>
                            <tr>
                                <td><?php echo $item->id; ?></td>
                                <td><?php echo $item->number; ?></td>
                                <td>
                                    <?php echo $item->shortcut; ?>
                                </td>
                                <td> <?php echo $item->signed_user; ?></td>
                                <td> <?php echo $item->keywords; ?></td>
                                <td>
                                    <?php $status = StringHelper::getStatus($item->status); ?>
                                    <span class="label label-<?php echo $status['lable'] ?>"><?php echo $status['status'] ?></span>
                                </td>
                                <td>                                
                                    <a href="<?php echo Yii::app()->createUrl('documentary/edit', array('id' => $item->id)) ?>"><span class="label label-primary">Sửa</span></a>
                                    <a href="<?php echo Yii::app()->createUrl('documentary/delete', array('id' => $item->id)) ?>"><span class="label label-danger">Xóa</span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php
                    $this->widget('CLinkPager', array(
                        'pages' => $pages,
                        'maxButtonCount' => Yii::app()->params['btn_cnt'],
                        'htmlOptions' => array('class' => 'pagination pagination-sm no-margin pull-right',
                        ),
                        'header' => '',
                        'prevPageLabel' => 'Trước',
                        'nextPageLabel' => 'Sau',
                        'firstPageLabel' => 'Đầu tiên',
                        'lastPageLabel' => 'Cuối cùng',
                        'selectedPageCssClass' => 'active',
                            )
                    )
                    ?>
                </div>
            </div><!-- /.box -->
        </div> 
    </div> 
</section>