
  function acdMenu() {
                //第2階層のアコーディオン　
        $(".nav-content2 ul li a").click(function() {
            $(".nav-content2 ul li a").not(this).next().slideUp("fast");
            $(this).toggleClass("open").next().slideToggle("fast");
        });
    }
 
    $(function() {
        acdMenu();
    });

