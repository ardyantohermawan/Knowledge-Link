		<script src="<?php echo base_url().'assets/js/jquery-ui-1.10.3.custom.min.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/js/prettify.js'; ?>"></script>
        <!-- Text Editor -->
        <script src="<?php echo base_url().'assets/js/tiny_mce/jquery.tinymce.js'; ?>"></script>
        <!--jQuery atags input -->
        <script src="<?php echo base_url().'assets/js/jquery.tagsinput.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/js/jquery-select.js'; ?>"></script>
        <!--jQuery touch scroll -->
        <script src="<?php echo base_url().'assets/js/jquery.nicescroll.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/js/jquery.cookie.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/js/jquery.hoverIntent.minified.js'; ?>"></script>
        <!--jQuery leftbar navigation accordion -->
        <script src="<?php echo base_url().'assets/js/jquery.dcjqaccordion.2.7.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/js/jquery.dataTables.js'; ?>"></script>
        <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'; ?>"></script>
        <!-- Theme common script -->
        
        <script src="<?php echo base_url().'assets/js/common-script.js'; ?>"></script>
        <!--[if lte IE 7]>
                        <script src="js/font-alpona-ie7.js"></script>
                        <![endif]-->
        <script>
            $(function() {
                $('textarea.tinymce-simple').tinymce({
                    script_url: 'js/tiny_mce/tiny_mce.js',
                    theme: "simple"
                });
                $('#tags_1').tagsInput({width: 'auto'});
            });
			$(function() {
                $('.data-tbl-boxy').dataTable({
                    "sPaginationType": "bootstrap",
                    "iDisplayLength": 10,
                    "oLanguage": {
                        "sLengthMenu": "<span class='lengthLabel pull-left'>Entries per page:</span><span class='lenghtMenu pull-left'> _MENU_</span>",
                    },
                    "sDom": '<"widget-head clearfix"fl>,<"widget-container"<"widget-block"<"widget-content"t>,,<"table-bottom clearfix"<"tbl-pagination pull-left"p><"tbl-data-info pull-right"i>>'
                });
            });
            $(function() {
                $('.data-tbl-boxy-vscroll').dataTable({
                    "sPaginationType": "bootstrap",
                    "iDisplayLength": 10,
                    "bScrollInfinite": true,
                    "bScrollCollapse": true,
                    "sScrollY": "200px",
                    "oLanguage": {
                        "sLengthMenu": "<span class='lengthLabel pull-left'>Entries per page:</span><span class='lenghtMenu pull-left'> _MENU_</span>",
                    },
                    "sDom": '<"widget-head clearfix"fl>,<"widget-container"<"widget-block"<"widget-content"t>,,<"table-bottom clearfix"<"tbl-pagination pull-left"p><"tbl-data-info pull-right"i>>'
                });
            });
            $(function() {
                $('.tbl-simple').dataTable({
                    "sPaginationType": "bootstrap",
                    "iDisplayLength": 10,
                    "bInfo": true,
                    "oLanguage": {
                        "sLengthMenu": "<span class='lengthLabel'>Entries per page:</span><span class='lenghtMenu'> _MENU_</span>",
                    },
                    "sDom": '<"widget-head clearfix"fl>,<"widget-container"t>,<"table-bottom clearfix"<"tbl-pagination pull-left"p><"tbl-data-info pull-right"i>>'
                });
            });

            $(".select2").select2();
        </script>