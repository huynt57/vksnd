<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="box">
                <div class="box-body">
                    <?php if (Yii::app()->user->hasFlash('error')): ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-ban"></i> Cảnh báo !</h4>
                            <?php echo Yii::app()->user->getFlash('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (Yii::app()->user->hasFlash('success')): ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Thành công !</h4>
                            <?php echo Yii::app()->user->getFlash('success'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="box-header with-border">
                    <h3 class="box-title">Danh sách vụ án</h3>
                    <a class="btn btn-primary" style="float: right" href="<?php echo Yii::app()->createUrl('case/add') ?>">Thêm</a>
                </div><!-- /.box-header -->

                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã số</th>
                            <th>Vụ án</th>
                            <th>Bị can</th>
                            <th>Ngày khởi tố</th>
                            <th>Thời hạn tạm giam</th>
                            <th>Thời gian điều tra</th>
                            <th>Điều tra viên thụ lý/th>
                            <th>Hành động</th>
                        </tr>
                        <?php foreach ($models as $item): ?>
                            <tr>
                                <td><?php echo $item->id; ?></td>
                                <td><?php echo $item->case_name; ?></td>
                                <td>
                                    <?php echo $item->accused; ?>
                                </td>
                                <td> <?php echo $item->date_prosecution; ?></td>
                                <td> <?php echo $item->detention_period; ?></td>
                                <td> <?php echo $item->investigation_period; ?></td>
                                <td> <?php echo $item->investigator; ?></td>

                                <td>                                
                                    <a href="<?php echo Yii::app()->createUrl('case/edit', array('id' => $item->id)) ?>"><span class="label label-primary">Sửa</span></a>
                                    <a href="<?php echo Yii::app()->createUrl('case/delete', array('id' => $item->id)) ?>" onclick="if (!confirm('Bạn có chắc chắn xóa không ?, Hành động này không thể khôi phục')) {
                                                return false;
                                            }"><span class="label label-danger">Xóa</span></a>
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