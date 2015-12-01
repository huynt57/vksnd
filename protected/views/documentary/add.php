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
                <form role="form" method="POST" action="<?php echo Yii::app()->createUrl('documentary/addProcess') ?>">

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="number">Số công văn</label>
                                <input type="text" class="form-control" id="number" name="number" >
                            </div>
                            <div class="form-group">
                                <label for="time_in_doc">Thời gian ghi trên văn bản</label>
                                <input type="text" class="form-control" id="time_in_doc" name="time_in_doc"  >
                            </div>
                            <div class="form-group">
                                <label for="abstract">Trích yếu</label>
                                <textarea class="form-control" id="abstract" name="abstract"  ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="shortcut">Tóm tắt</label>
                                <textarea class="form-control" id="shortcut" name="shortcut"  ></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="keywords">Từ khóa</label>
                                <input type="text" class="form-control" id="keywords"  >
                            </div>
                            <div class="form-group">
                                <label for="reciever">Nơi gửi</label>
                                <input type="text" name="reciever" class="form-control" id="reciever"  >
                            </div>
                            <div class="form-group">
                                <label for="signed_user">Người ký</label>
                                <input type="text" class="form-control" id="signed_user"  >
                            </div>
                            <div class="form-group">
                                <label for="status">Tình trạng</label>
                                <select class="form-control">
                                    <option value="1">Đang thực hiện</option>
                                    <option value="2">Đã thực hiện</option>
                                    <option value="3">Đã chuyển</option>
                                </select>

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
