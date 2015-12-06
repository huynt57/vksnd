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
                    <h3 class="box-title">Danh sách công văn</h3>
                    <a class="btn btn-primary" style="float: right" href="<?php echo Yii::app()->createUrl('wantedAbroad/add') ?>">Thêm</a>
                </div><!-- /.box-header -->

                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã số</th>
                            <th>Nước yêu cầu</th>
                            <th>Số truy nã quốc tế</th>
                            <th>Ngày phát hành</th>
                            <th>Cán bộ xử lý</th>
                            <th>Hành động</th>
                        </tr>
                        <?php foreach ($models as $item): ?>
                            <tr>
                                <td><?php echo $item->id; ?></td>
                                <td><?php echo $item->nation_request; ?></td>
                                <td>
                                    <?php echo $item->wanted_number; ?>
                                </td>
                                <td> <?php echo Date('m/d/Y', $item->date_publish); ?></td>
                                <td> <?php echo $item->staff_assigned; ?></td>
                               
                                <td>                                
                                    <a href="<?php echo Yii::app()->createUrl('wantedAbroad/edit', array('id' => $item->id)) ?>"><span class="label label-primary">Sửa</span></a>
                                    <a href="<?php echo Yii::app()->createUrl('wantedAbroad/delete', array('id' => $item->id)) ?>" onclick="if (!confirm('Bạn có chắc chắn xóa không ?, Hành động này không thể khôi phục')) {
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