<?php
$this->load->library('session');
if ($_SESSION["accountType"] != 'sar') {
    redirect(base_url() . "main");
}
include "header.php";
?>
<div class="content" style="background-color: #FAFAFA;margin-top: 0px;padding-top: 50px;">
    <div class="container-fluid">
        <div class="row" style="margin-top: 30px">
            <div class="col-md-12 col-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title" style="font-weight: lighter">VACANCY DETAILS</h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-content">
                            <div class="row" style="font-weight: bold;font-size: 16px;margin-top: 40px">
                                <div class="col-12"><textarea name="txtDetails" id="txtDetails" style="width: 100%;height: 300px"></textarea></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    nicEditors.findEditor( "txtDetails" ).setWidth( 100% );
</script>
<?php
include "footer.php";
?>