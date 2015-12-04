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
                    <h3 class="box-title">Cập nhật vụ án</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo Yii::app()->createUrl('case/editprocess') ?>">

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="number">Số công văn</label>
                                <input type="text" class="form-control" id="number" name="number" value="<?php echo $model->number ?>">
                            </div>
                            <div class="form-group">
                                <label for="time_in_doc">Thời gian ghi trên văn bản</label>
                                <input type="text" class="form-control" id="time_in_doc" name="time_in_doc" value="<?php echo date('m/d/Y', $model->time_in_doc) ?>" >
                            </div>
                            <div class="form-group">
                                <label for="abstract">Trích yếu</label>
                                <textarea rows="5" class="form-control" id="abstract" name="abstract" value="<?php echo $model->abstract ?>" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="shortcut">Tóm tắt</label>
                                <textarea rows="5" class="form-control" id="shortcut" name="shortcut" value="<?php echo $model->shortcut ?>" ></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $model->id; ?>">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Tên quốc gia</label>
                                <input type="text" class="form-control" id="country" value="<?php echo $model->country ?>" >
                            </div>
                            <div class="form-group">
                                <label for="did_by">Người thực hiện</label>
                                <input type="text" class="form-control" id="did_by" value="<?php echo $model->did_by ?>" >
                            </div>
                            <div class="form-group">
                                <label for="obj_name">Tên đối tượng</label>
                                <input type="text" class="form-control" id="obj_name" value="<?php echo $model->obj_name ?>" >
                            </div>
                            <div class="form-group">
                                <label for="reciever">Nơi gửi</label>
                                <input type="text" name="reciever" class="form-control" id="reciever" value="<?php echo $model->reciever ?>" >
                            </div>
                            <div class="form-group">
                                <label for="signed_user">Người ký</label>
                                <input type="text" class="form-control" id="signed_user" value="<?php echo $model->signed_user ?>" >
                            </div>
                            <div class="form-group">
                                <label for="status">Tình trạng</label>
                                <select class="form-control" onchange="showOff()" id="change_status">
                                    <option>Chọn trạng thái</option>
                                    <option value="1" <?php if ($model->status == 1): ?> selected="selected" <?php endif; ?>>Đang thực hiện</option>
                                    <option value="2" <?php if ($model->status == 2): ?> selected="selected" <?php endif; ?>>Đã thực hiện</option>
                                    <option value="3" <?php if ($model->status == 3): ?> selected="selected" <?php endif; ?>>Đã chuyển</option>
                                </select>

                            </div>
                            <div class="form-group" id="receive_day">
                                <label for="date_recieve">Ngày tiếp nhận xử lý</label>
                                <input type="text" class="form-control" id="date_recieve" name="date_recieve" value="<?php echo date('m/d/Y', $model->date_recieve) ?>" >
                            </div>
                            <div class="form-group" id="doc_end">
                                <label for="number_doc_finish">Công văn kết thúc số</label>
                                <input type="text" class="form-control" id="number_doc_finish" name="number_doc_finish" value="<?php echo $model->number_doc_finish ?>" >
                            </div>
                            <div class="form-group" id="doc_send">
                                <label for="number_doc_send">Số công văn chuyển</label>
                                <input type="text" class="form-control" id="number_doc_send" name="number_doc_send" value="<?php echo $model->number_doc_send ?>" >
                            </div>
                            <div class="form-group" id="receive_place">
                                <label for="reciever">Nơi tiếp nhận</label>
                                <input type="text" class="form-control" id="reciever" name="reciever" value="<?php echo $model->reciever ?>" >
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div>
</section>
<script>
    function showOff() {
        if (document.getElementById('change_status').value === '1') {

            $('#receive_day').show();
//            $('#receive_day').datepicker({
//                dateFormat: 'yy-mm-dd'
//            });
            $('#doc_end').hide();
            $('#doc_send').hide();
            $('#receive_place').hide();
        } else if (document.getElementById('change_status').value === '2') {
            $('#receive_day').hide();
            $('#doc_end').show();
            $('#doc_send').hide();
            $('#receive_place').hide();
        } else if (document.getElementById('change_status').value === '3') {
            $('#receive_day').hide();
            $('#doc_end').hide();
            $('#doc_send').show();
            $('#receive_place').show();
        } else {
            $('#receive_day').hide();
            $('#doc_end').hide();
            $('#doc_send').hide();
            $('#receive_place').hide();
        }
    }
    $(function () {
        $('#time_in_doc').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('#receive_day').hide();
        $('#doc_end').hide();
        $('#doc_send').hide();
        $('#receive_place').hide();
        //Date range picker with time picker
    });
</script>
