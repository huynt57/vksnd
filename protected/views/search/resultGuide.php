<section class="content">
    <h2 class="page-header">Kết quả tìm kiếm</h2>

    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li  ><a href="<?php echo Yii::app()->createUrl('search/resultDocumentary', $_GET) ?>">Yêu cầu tương trợ <br>tư pháp hình sự đi</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultDocumentaryRecieve', $_GET) ?>"  >Yêu cầu tương trợ <br>tư pháp hình sự đến</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultOpinion', $_GET) ?>"  >Tham gia <br>ý kiến   </a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultDocumentaryAbroad', $_GET) ?>"  >Văn bản có <br>yếu tố nước ngoài </a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultCase', $_GET) ?>">Vụ án</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultLetter', $_GET) ?>">Đơn thư</a></li>
                    <li class="active"><a href="<?php echo Yii::app()->createUrl('search/resultGuide', $_GET) ?>"  >Thẩm định,<br> hướng dẫn</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultWantedAbroad', $_GET) ?>">Truy nã <br>nước ngoài</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('search/resultCasesAbroadOther', $_GET) ?>"  >Vụ việc có <br>yếu tố nước ngoài khác</a></li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_7">
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
                                        <a href="<?php echo Yii::app()->createUrl('documentary/delete', array('id' => $item->id)) ?>" onclick="if (!confirm('Bạn có chắc chắn xóa không ?, Hành động này không thể khôi phục')) {
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
                    <div class="tab-pane" id="tab_2">

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">

                    </div>
                    <div class="tab-pane" id="tab_4">

                    </div>
                    <div class="tab-pane" id="tab_5">

                    </div>
                    <div class="tab-pane" id="tab_6">

                    </div>
                    <div class="tab-pane" id="tab_7">

                    </div>
                    <div class="tab-pane" id="tab_8">

                    </div>
                    <div class="tab-pane" id="tab_9">

                    </div>
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