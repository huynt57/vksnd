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
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tìm kiếm</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="GET" action="<?php echo Yii::app()->createUrl('search/searchResult') ?>">
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="keyword">Từ khóa</label>
                                <input type="text" class="form-control" id="keyword" name="keyword" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" id="advance_search">Bật tìm kiếm nâng cao</button>
                            </div>
                        </div>
                        <div id="hide_form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_start">Từ ngày</label>
                                    <input type="text" class="form-control" id="date_start" name="date_start" >
                                </div>
                                <div class="form-group">
                                    <label for="date_end">Đến ngày</label>
                                    <input type="text" class="form-control" id="date_end" name="date_end"  >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nation">Quốc gia</label>
                                    <input type="text" class="form-control" id="nation" name="nation" >
                                </div>
                                <div class="form-group">
                                    <label for="assignee">Cán bộ thụ lý</label>
                                    <input type="text" class="form-control" id="assignee" name="assignee"  >
                                </div>
                                <div class="form-group">
                                    <label for="obj_name">Đối tượng</label>
                                    <input type="text" class="form-control" id="obj_name" name="obj_name"  >
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div>
</section>
<script>

    $(function () {
        $('#date_end').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('#date_start').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('#hide_form').hide();
        $('#advance_search').click(function () {
            $('#hide_form').toggle();
        });


    });
</script>
