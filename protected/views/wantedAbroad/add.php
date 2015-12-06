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
                    <h3 class="box-title">Thêm mới tài liệu</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo Yii::app()->createUrl('wantedAbroad/addProcess') ?>">

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nation_request">Nước yêu cầu</label>
                                <input type="text" class="form-control" id="nation_request" name="nation_request" >
                            </div>
                            <div class="form-group">
                                <label for="wanted_number">Số truy nã quốc tế</label>
                                <input type="wanted_number" class="form-control" id="time_in_doc" name="wanted_number"  >
                            </div>
                            <div class="form-group">
                                <label for="crime">Tội danh</label>
                                <input type="crime" class="form-control" id="crime" name="crime"  >
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_publish">Ngày phát hành</label>
                                <input type="date_publish" class="form-control" id="date_publish" name="date_publish" >
                            </div>
                            <div class="form-group">
                                <label for="staff_assigned">Cán bộ xử lý</label>
                                <input type="staff_assigned" class="form-control" id="staff_assigned" name="staff_assigned" >
                            </div>
                            <div class="form-group">
                                <label for="object_name">Tên đối tượng</label>
                                <input type="text" class="form-control" id="object_name" name="object_name" >
                            </div>

                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div>
</section>
<script>
    
    $(function () {
        $('#date_publish').datepicker({
            dateFormat: 'yy-mm-dd'
        });
       
    });
</script>
