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
                    <h3 class="box-title">Thêm vụ án</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo Yii::app()->createUrl('case/addProcess') ?>">

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="case_name">Vụ án</label>
                                <input type="text" class="form-control" id="case_name" name="case_name">
                            </div>
                            <div class="form-group">
                                <label for="accused">Bị can</label>
                                <input type="text"  class="form-control" id="accused" name="accused" >
                            </div>
                            <div class="form-group">
                                <label for="date_prosecution">Ngày khởi tố</label>
                                <input type="text" class="form-control" id="date_prosecution" name="date_prosecution"  >

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="detention_period">Thời hạn tạm giam</label>
                                <input type="text" class="form-control" id="detention_period" name="detention_period"  >
                            </div>

                            <div class="form-group">
                                <label for="investigation_period">Thời hạn điều tra</label>
                                <input type="text" class="form-control" id="investigation_period" name="investigation_period" >
                            </div>
                            <div class="form-group">
                                <label for="investigator">Điều tra viên thụ lý</label>
                                <input type="text" class="form-control" id="investigator" name="investigator" >
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
        $('#date_prosecution').datepicker({
            dateFormat: 'yy-mm-dd'
        });

    });
</script>
