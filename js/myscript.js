
    $(document).ready(function() {
        $("div.pages.welcome").fadeIn("slow");  
          
        $("a.list-group-item").on("click", function() {

          
            //If the element is not active
            if (!$(this).hasClass("active")) {
                $("a.active").removeClass("active");
                $(this).addClass("active");
                //Hide div page shown
                $("div.pages").hide();
                }
                //If clicked option with category class.
                if ($(this).hasClass("category"))   {
                    //Collapses other opened div sibblings
                    $("div").siblings(".panel-collapse.collapse.in").collapse("hide");
                    //Unselects others options
                    $("a.active").removeClass("active");
                }
                else if ($(this).parent().parent().prev().children().children().hasClass("category")) {
                    //Do nothing when selected children of opened category
                }
                //Collapses category when selected non-category option 
                else if ($(".panel-collapse.collapse").hasClass("in")){
                    $(".panel-collapse.collapse").collapse("hide");
                }
        });
    });


