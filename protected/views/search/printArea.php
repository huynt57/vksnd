<section class="content">
    <h2 class="page-header">Kết quả tìm kiếm</h2>

    <div class="row">
        <div class="col-md-12">
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
                <?php foreach ($cases_abroad as $item): ?>
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
                            <a href="<?php echo Yii::app()->createUrl('documentary/delete', array('id' => $item->id)) ?>" onclick="if (!confirm('Bạn có chắc chắn xóa không ?, Hành động này không thể khôi phục')) {
                                        return false;
                                    }"><span class="label label-danger">Xóa</span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <table class="table table-bordered">
                <tr>
                    <th>Mã số</th>
                    <th>Vụ án</th>
                    <th>Bị can</th>
                    <th>Ngày khởi tố</th>
                    <th>Thời hạn tạm giam</th>
                    <th>Thời gian điều tra</th>
                    <th>Điều tra viên thụ lý</th>
                    <th>Hành động</th>
                </tr>
                <?php foreach ($cases as $item): ?>
                    <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><?php echo $item->case_name; ?></td>
                        <td>
                            <?php echo $item->accused; ?>
                        </td>
                        <td> <?php echo Date('m/d/Y', $item->date_prosecution); ?></td>
                        <td> <?php echo $item->detention_period; ?></td>
                        <td> <?php echo $item->investigation_period; ?></td>
                        <td> <?php echo $item->investigator; ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>
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
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
</section>