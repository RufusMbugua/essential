    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
    <meta name="description" content="Online Data Management Tool for the Ministry of Health, Governent of Kenya <?php echo date('Y')?>">
    <meta name="keywords" content="Kenya,MNH,commodity assessment,Nairobi,eHealth,ministry of health,GoK,government,survey,health analytics,mfl,maternal health,new born health care" />
    <meta name="author" content="Ministry of Health, Government of Kenya">

    <!--fav and touch icons -->
    <link rel="shortcut icon"  href="<?php echo base_url(); ?>/images/favicon.ico">
    <title><?php echo $title; ?></title>

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic' rel='stylesheet' type='text/css'>


    <!-- New Bower Components -->
<link rel="stylesheet" href="<?echo base_url();?>assets/bower_components/flat-ui-official/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="<?echo base_url();?>assets/bower_components/flat-ui-official/css/flat-ui.css">
<link rel="stylesheet" href="<?echo base_url();?>assets/bower_components/flat-ui-official/bootstrap/css/prettify.css">
<link rel="stylesheet" href="<?echo base_url();?>assets/bower_components/intro.js/introjs.css">
<link rel="stylesheet" href="<?echo base_url();?>assets/stylesheets/flat.css">



<!-- Load JS here for greater good =============================-->
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/jquery-1.8.3.min.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/bootstrap.min.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/bootstrap-select.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/bootstrap-switch.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/flatui-checkbox.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/flatui-radio.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/jquery.tagsinput.js"></script>
    <script src="<?echo base_url();?>assets/bower_components/flat-ui-official/js/jquery.placeholder.js"></script>
<script src="<?echo base_url();?>assets/bower_components/intro.js/intro.js"></script>
<!--script src="<?echo base_url();?>assets/bower_components/"></script-->


        <script src="<?php echo base_url()?>js/highcharts.js"></script>
        <script src="<?php echo base_url()?>js/exporting.js"></script>
    <script src="<?php echo base_url()?>js/Merged-JS.js"></script>
    <script src="<?php echo base_url()?>js/FusionMaps/FusionCharts.js"></script>



    <link rel="shortcut icon"  href="<?php echo base_url(); ?>/images/favicon.ico">

    <script>
            $(document).ready(function(){
    var selectClicked2;
    var selectValue2;
    var selectLink;
    $('.level2').click(function(){
        selectClicked2  = $(this).attr('id');
        selectValue2 = $('#'+selectClicked2).attr('value');
        //alert(selectValue);
        //if(selectValue==2){
            switch(selectClicked2){
                case 'mnh-level2':
                    selectLink = '<?php echo base_url(); ?>'+'mnh/analytics';
                        break;
                        case 'ch-level2' :
                        selectLink = '<?php echo base_url(); ?>'+'ch/analytics';
                        break;
                        }
                        //}

                        });
                        $('#mnh-btn').click(function(){
                        //$('body').load(selectLink);
                        });
                        $('#ch-btn').click(function(){
                        //$('body').load(selectLink);
                        });
                        });
    </script>

    <link rel="shortcut icon"  href="<?php echo base_url(); ?>/images/favicon.ico">





    <!-- CODEMIRROR: Download from http://codemirror.net/codemirror.zip -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third-party/codemirror/codemirror.css" />
    <script src="<?php echo base_url(); ?>assets/third-party/codemirror/codemirror.js"></script>

    <!-- Download from http://www.firepad.io/firepad.zip -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third-party/firepad/firepad.css" />
    <script src="<?php echo base_url(); ?>assets/third-party/firepad/firepad.js"></script>

