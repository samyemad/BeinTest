<script src="js/jquery.min.js"></script>         
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>

<script type="text/javascript" src="js/nav/tinynav.js"></script> 
<script type="text/javascript" src="js/nav/superfish.js"></script>                

<script type='text/javascript' src='js/efect_switcher/jquery.content-panel-switcher.js'></script> 

<script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  

<script type="text/javascript" src="js/slide/camera.js" ></script>      
<script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>         

<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>

<script src="js/bootstrap.js"></script>

<script type="text/javascript" src="js/jquery-func.js"></script>        
<script>
    $(document).ready(function () {
        $("#search_product").click(function () {


            var product_name = $("#product_name").val();
            var type = $("#type").val();
            var page_count = $("#page_count").val();
            var path = "<?php echo dirname($_SERVER['PHP_SELF']) . '/Action/Search.php'; ?>";

            $.ajax({
                type: 'GET',
                url: path,
                data: {
                    product_name: product_name,
                    type: type,
                    page_count: page_count
                },
                success: function (data) {
                    //$(".row-fluid padding_top_min").html(data);
                    if (data == 1)
                    {
                        var result_path = "<?php echo dirname($_SERVER['PHP_SELF']) . '/Action/Search_Result.php'; ?>";
                        
                        $.ajax({
                            type: 'GET',
                            url: result_path,
                            success: function (msg) {
                                
                                $("#product_all").html(msg);
                                $("#load-page").show();
                            }
                        });

                    }
                }
            });


        });
        $("#load-page").click(function () {


            var product_name = $("#product_name").val();
            var type = $("#type").val();
            var page_count = parseInt($("#page_count").val());
            var path = "<?php echo dirname($_SERVER['PHP_SELF']) . '/Action/Search.php'; ?>";

            $.ajax({
                type: 'GET',
                url: path,
                data: {
                    product_name: product_name,
                    type: type,
                    page_count: page_count
                },
                success: function (data) {
                    //$(".row-fluid padding_top_min").html(data);
                    if (data == 1)
                    {
                        var result_path = "<?php echo dirname($_SERVER['PHP_SELF']) . '/Action/Search_Result.php'; ?>";
                        
                        $.ajax({
                            type: 'GET',
                            url: result_path,
                            success: function (msg) {
                                
                                $("#product_all").html(msg);
                            }
                        });

                    }
                }
            });
            var next_count=page_count+1;
            $("#page_count").val(next_count);


        });
    })
</script>