<div class="row">
    <div class="col-md-4">
        <p>Số kết quả tương trợ tư pháp hình sự đi: <?php echo Yii::app()->session['documentary_cnt']?> </p>
        <p>Số kết quả tương trợ tư pháp hình sự đến: <?php echo Yii::app()->session['documentaryRecieve_cnt']?> </p>
        <p>Số kết quả tham gia ý kiến: <?php echo Yii::app()->session['opinion_cnt']?> </p>

    </div>
    <div class="col-md-4">
        <p>Số kết quả văn bản có yếu tố nước ngoài: <?php echo Yii::app()->session['documentaryAbroad_cnt']?> </p>
        <p>Số kết quả vụ án: <?php echo Yii::app()->session['case_cnt']?> </p>
        <p>Số kết quả đơn thư: <?php echo Yii::app()->session['letter_cnt']?> </p>
    </div>
    <div class="col-md-4">
        <p>Số kết quả thẩm định, hướng dẫn: <?php echo Yii::app()->session['guide_cnt']?> </p>
        <p>Số kết quả truy nã nước ngoài: <?php echo Yii::app()->session['wantedAbroad_cnt']?> </p>
        <p>Số kết quả vụ việc có yếu tố nước ngoài khác: <?php echo Yii::app()->session['casesAbroadOther_cnt']?> </p>
    </div>
</div>


