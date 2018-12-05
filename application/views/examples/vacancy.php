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
                        <form class="form-horizontal" method="post" action="<?= base_url('Email/send_mail') ?>">
                            <div class="card-header card-header-text" data-background-color="rose">
                                <h4 class="card-title" style="font-weight: lighter">VACANCY DETAILS</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-content">
                                <div class="row" style="font-weight: bold;font-size: 16px;margin-top: 40px">
                                    <div class="col-12"><textarea name="txtDetails" id="txtDetails"
                                                           style="width: 100%;height: 300px"></textarea></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-fill"
                                    style="left: 50%;transform: translateX(-50%);font-weight: bold"
                                    id="submitEmailBtn">
                                Send to operator
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'txtDetails' );
        // DecoupledEditor
        //     .create(document.querySelector('#txtDetails'))
        //     .then(editor = > {
        //     const toolbarContainer = document.querySelector('#toolbar-container');
        //
        // toolbarContainer.appendChild(editor.ui.view.toolbar.element);
        // } )
        // .catch(error = > {
        //     console.error(error);
        // } )
        // ;

        // nicEditors.findEditor( "txtDetails" ).setWidth( 100% );
        // var editor;
        // function reLoadEditor() {
        //     editor.removeInstance('txtDetails');
        //     editor = new nicEditor({fullPanel : false}).panelInstance('txtDetails');
        // }();
        //
        // $(window).resize( function() {
        //     reLoadEditor();
        // } );
    </script>
<?php
include "footer.php";
?>