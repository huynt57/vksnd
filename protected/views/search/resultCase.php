<section class="content">
    <h2 class="page-header">Kết quả tìm kiếm</h2>

    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultDocumentary', $_GET) ?>">Yêu cầu tương trợ <br>tư pháp hình sự đi</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Yêu cầu tương trợ <br>tư pháp hình sự đến</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Tham gia <br>ý kiến   </a></li>
                    <li><a href="#tab_4" data-toggle="tab">Văn bản có <br>yếu tố nước ngoài </a></li>
                    <li class="active"><a href="<?php echo Yii::app()->createUrl('search/resultCase', $_GET) ?>">Vụ án</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultLetter', $_GET) ?>">Đơn thư</a></li>
                    <li><a href="#tab_7" data-toggle="tab">Thẩm định,<br> hướng dẫn</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultWantedAbroad', $_GET) ?>">Truy nã <br>nước ngoài</a></li>
                    <li><a href="#tab_9" data-toggle="tab">Vụ việc có <br>yếu tố nước ngoài khác</a></li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_5">
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
                            <?php foreach ($models as $item): ?>
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

                                    <td>                                
                                        <a href="<?php echo Yii::app()->createUrl('case/edit', array('id' => $item->id)) ?>"><span class="label label-primary">Sửa</span></a>
                                        <a href="<?php echo Yii::app()->createUrl('case/delete', array('id' => $item->id)) ?>" onclick="if (!confirm('Bạn có chắc chắn xóa không ?, Hành động này không thể khôi phục')) {
                                                    return false;
                                                }"><span class="label label-danger">Xóa</span></a>
                                    </td>
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
                    </div>
                    <!-- /.tab-pane -->
                    
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
</section>