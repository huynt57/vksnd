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
                    <h3 class="box-title">Thêm mới đơn thư</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo Yii::app()->createUrl('letter/addprocess') ?>">

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="letter_created">Người làm đơn</label>
                                <input type="text" class="form-control" id="letter_created" name="letter_created" >
                            </div>
                            <div class="form-group">
                                <label for="signed_recieve">Ngày tiếp nhận</label>
                                <input type="text" class="form-control" id="signed_recieve" name="signed_recieve"  >
                            </div>
                            <div class="form-group">
                                <label for="decided_assigned">Quyết định phân công</label>
                                <input type="text" name="decided_assigned" class="form-control" id="decided_assigned"  >
                            </div>
                            <div class="form-group">
                                <label for="content">Nội dung đơn</label>
                                <textarea type="text" name="content" class="form-control" id="content"  ></textarea>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="signed_date">Ngày ký</label>
                                <input type="text" class="form-control" id="signed_date" name="signed_date" >
                            </div>
                            <div class="form-group">
                                <label for="staff_assigned">Cán bộ giải quyết</label>
                                <input type="text" class="form-control" id="staff_assigned" name="staff_assigned" >
                            </div>
                            <div class="form-group">
                                <label for="verification_period">Thời hạn xác minh</label>
                                <input type="text" class="form-control" id="verification_period" name="verification_period" >
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
        $('#signed_recieve').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('#signed_date').datepicker({
            dateFormat: 'yy-mm-dd'
        });

    });
</script>

