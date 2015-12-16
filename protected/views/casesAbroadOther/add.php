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
                <form role="form" method="POST" action="<?php echo Yii::app()->createUrl('CasesAbroadOther/addProcess') ?>">

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
                                <label for="reciever">Nơi gửi</label>
                                <input type="text" name="reciever" class="form-control" id="reciever"  >
                            </div>
                            <div class="form-group">
                                <label for="abstract">Trích yếu</label>
                                <textarea rows="5" class="form-control" id="abstract" name="abstract"  ></textarea>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="signed_user">Người ký</label>
                                <input type="text" class="form-control" id="signed_user"  >
                            </div>
                            <div class="form-group">
                                <label for="shortcut">Tóm tắt</label>
                                <textarea rows="5" class="form-control" id="shortcut" name="shortcut"  ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="country">Tên quốc gia</label>
                                <input type="text" class="form-control" id="country" >
                            </div>
                            <div class="form-group">
                                <label for="did_by">Người thực hiện</label>
                                <input type="text" class="form-control" id="did_by" >
                            </div>
                            <div class="form-group">
                                <label for="obj_name">Tên đối tượng</label>
                                <input type="text" class="form-control" id="obj_name" >
                            </div>


                            <div class="form-group">
                                <label for="status">Tình trạng</label>
                                <select class="form-control" onchange="showOff();" id="change_status">
                                    <option>Chọn trạng thái</option>
                                    <option value="1">Đang thực hiện</option>
                                    <option value="2">Đã thực hiện</option>
                                    <option value="3">Đã chuyển</option>
                                </select>

                            </div>
                            <div class="form-group" id="receive_day">
                                <label for="date_recieve">Ngày tiếp nhận xử lý</label>
                                <input type="text" class="form-control" id="date_recieve" name="date_recieve"  >
                            </div>
                            <div class="form-group" id="doc_end">
                                <label for="number_doc_finish">Công văn kết thúc số</label>
                                <input type="text" class="form-control" id="number_doc_finish" name="number_doc_finish"  >
                            </div>
                            <div class="form-group" id="doc_send">
                                <label for="number_doc_send">Số công văn chuyển</label>
                                <input type="text" class="form-control" id="number_doc_send" name="number_doc_send"  >
                            </div>
                            <div class="form-group" id="receive_place">
                                <label for="reciever">Nơi tiếp nhận</label>
                                <input type="text" class="form-control" id="reciever" name="reciever">
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
