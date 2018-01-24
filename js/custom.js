

(function($) {

    $(document).ready(function() {
        jQuery(document).bind('gform_post_render', function(e){ 

        gform.addFilter('gform_datepicker_options_pre_init', function(optionsObj, formId, fieldId) {
            if (formId == 2 && fieldId == 3) {
                optionsObj.minDate = 0;
                optionsObj.maxDate = '+1 W';

            }
            return optionsObj;
        });


        $(".disable-input input").prop("disabled", true);
        $(".disable-input textarea").prop("readonly", 'readonly');



        $( document ).ajaxComplete(function() {
        $(".disable-input input").prop("disabled", true);
        $(".disable-input textarea").prop("readonly", 'readonly');
        });

        $("#tabs").tabs();
        $('.event-colorbox').colorbox();

        $('.food-menu-item').hover(function() {
            $(this).addClass('selected');
            $('.food-menu-item.selected .hover-overlay').show();
        }, function() {
            $(this).removeClass('selected');
            $('.hover-overlay').hide();
        });

        $('.accordion-container  .primary-radio').on('click', function() {


            $(".order-form-area.col-md-4.col-md-offset-1").show();
            $('input:checkbox').removeAttr('checked');
            $(this).parents(".accordion-container").removeClass('active');
            var title = $(this).val();

            var price = $(this).siblings('.actual-price').text();
             var menuprice_int = parseFloat(price);    
            var dishid = $(this).siblings('.section-1-dish-id').text();


            console.log(price);
            var cssClass = title.replace(/\s+/g, '-');
            cssClass = cssClass.toLowerCase();
            console.log(cssClass);
            console.log(title);

            if ($(this).prop('checked')) {
                // console.log("checked");

                //append the item

                //var el = "<div class='" + cssClass + "'> <h2 class='order-menu-title'>" + title + "</h2><p class='with'><em>with</e></mp><div class='sub-items1'></div><div class='sub-items2'></div></div>";

                var el = "<p>Your Selection:</p><div class='" + cssClass + "'> <h2 class='order-menu-title'>" + title + "</h2><div class='sub-items1'></div><div class='sub-items2'></div></div>";


                $(".append-menu-content").html($(el));
                 $("textarea#input_2_53").val("");
                $("textarea#input_2_54").val("");
                $("input#input_2_56").val("");
                 $("textarea#input_2_63").val("");
                 $("textarea#input_2_64").val("");
                 $("textarea#input_2_65").val("");
                 $("textarea#input_2_66").val("");
              
                $("#input_2_69").val("");    
                $("#input_2_69").val(menuprice_int);
                $("#input_2_72").val(menuprice_int);
                $("#input_2_48").val(title);

                $("#input_2_63").val(dishid);
               
                
                $("#field_2_53").hide();
                $("#field_2_54").hide();
                $("#field_2_56").hide();

                /* $('.order-form-area').show('slide', {
                     direction: 'right'
                 }, 1000);*/
            } else {

                //remove from the list 
                var selectedItem = $(".append-menu-content").find("." + cssClass);
                console.log(selectedItem);
                selectedItem.remove();

                //when there are no item selected , hide the form
                var selectedItems = $(".append-menu-content").find(".black").length;
                console.log(selectedItems);
                /* if (selectedItems == 0) {

                     $('.order-form-area').hide('slide', {
                         direction: 'right'
                     }, 1000);

                 }*/

            }
        });




        /*Sub Menu 1 Choose 1*/
        $('.sub-m1 input[type="radio"]').change(function() {

            var selected = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").map(function(i, el) {
                return el.value;
            }).get();



            var selected = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").map(function(i, el) {
                return el.value;
                /* return $(el).attr('data-dish1');*/
            }).get();

             // var dish1_ID = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").data('dish1');

            var dish1_ID = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").map(function(i, el) {

                return $(el).attr('data-dish1');
            }).get();

            $("textarea#input_2_53").val("");

            $("textarea#input_2_53").val(selected);

            $("#field_2_53").show()

            $("textarea#input_2_65").val("");

            $("textarea#input_2_65").val(dish1_ID);

            ;

        });


        /*Sub Menu 1 Choose 2*/

        $('.sub-m1 input[type="checkbox"]').change(function() {
            if ($(".sub-m1 input:checked").length > 2) {

                alert("Please select only 2.");
                $(this).prop('checked', false);
            };
            var selected = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").map(function(i, el) {
                return el.value;
                /* return $(el).attr('data-dish1');*/
            }).get();



            // var dish1_ID = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").data('dish1');

            var dish1_ID = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").map(function(i, el) {

                return $(el).attr('data-dish1');
            }).get();

            $("textarea#input_2_53").val("");

            $("textarea#input_2_53").val(selected);

            $("#field_2_53").show()

            $("textarea#input_2_65").val("");

            $("textarea#input_2_65").val(dish1_ID);

            ;

            console.log(selected);
        });


        /*Sub Menu 2 Choose 1*/

        $('.sub-m2 input[type="radio"]').change(function() {

            var selected = $(this).parents(".accordion-container.active").find(".sub-m2 input:checked").map(function(i, el) {
                return el.value;
            }).get();

             var selected = $(this).parents(".accordion-container.active").find(".sub-m2 input:checked").map(function(i, el) {
                return el.value;
            }).get();

            var dish2_ID = $(this).parents(".accordion-container.active").find(".sub-m2 input:checked").map(function(i, el) {

                return $(el).attr('data-dish2');
            }).get();

            $("textarea#input_2_54").val("");
            $("textarea#input_2_54").val(selected);

            $("textarea#input_2_66").val("");

            $("textarea#input_2_66").val(dish2_ID);
            $("#field_2_54").show();

            console.log('test'+ dish2_ID);
        });


        /*Sub Menu 2 Choose 2*/
        

        $('.sub-m2 input[type="checkbox"]').change(function() {
            if ($(".sub-m2 input:checked").length > 2) {

                alert("Please select only 2.");
                $(this).prop('checked', false);
            };
            var selected = $(this).parents(".accordion-container.active").find(".sub-m2 input:checked").map(function(i, el) {
                return el.value;
            }).get();

            var dish2_ID = $(this).parents(".accordion-container.active").find(".sub-m2 input:checked").map(function(i, el) {

                return $(el).attr('data-dish2');
            }).get();

            $("textarea#input_2_54").val("");
            $("textarea#input_2_54").val(selected);

            $("textarea#input_2_66").val("");

            $("textarea#input_2_66").val(dish2_ID);
            $("#field_2_54").show();

            console.log('test'+ dish2_ID);
        });







        /*Beverage Choose 1*/
        $('.beverage-choose1 input[type="radio"]').change(function() {

            var selected = $(this).parents(".accordion-container.active").find(".beverage-choose1 input:checked").map(function(i, el) {
                return el.value;
            }).get();

            var bid = $(this).parents(".accordion-container.active").find(".beverage-choose1 input:checked").map(function(i, el) {
                return $(el).attr('data-beverage');
            }).get();

            $("input#input_2_56").val("");

            $("input#input_2_56").val(selected);

            $("li#field_2_56").show();

            $("textarea#input_2_64").val("");

            $("textarea#input_2_64").val(bid);

            

            console.log(selected);
        });

        /*Beverage Choose 2*/
        $('.beverage-choose2 input[type="checkbox"]').change(function() {
            if ($(".beverage-choose2 input:checked").length > 2) {

                alert("You can only select 2");
                $(this).prop('checked', false);
            };
            var selected = $(this).parents(".accordion-container.active").find(".beverage-choose2 input:checked").map(function(i, el) {
                return el.value;
            }).get();
            var bid = $(this).parents(".accordion-container.active").find(".beverage-choose2 input:checked").map(function(i, el) {
                return $(el).attr('data-beverage');
            }).get();

            $("input#input_2_56").val("");

            $("input#input_2_56").val(selected);
            $("li#field_2_56").show();

            $("textarea#input_2_64").val("");

            $("textarea#input_2_64").val(bid);

            console.log(bid);
        });



        /*Additional Add on 1*/
        $('.addon1 input[type="checkbox"]').change(function() {
            /*if ($(".addon1 input:checked").length > 2) {

                alert("Yo! Choose Only 2 Lah");
                $(this).prop('checked', false);
            };*/
            var selected = $(this).parents(".accordion-container.active").find(".addon1 input:checked").map(function(i, el) {
                return el.value;
            }).get();

            var bid = $(this).parents(".accordion-container.active").find(".addon1 input:checked").map(function(i, el) {
                return $(el).attr('data-addonprice');
            }).get();

            var menuprice = $('input#input_2_72').val();

            var menuprice_int = parseFloat(menuprice);

            var total = 0;
            for (var i = 0; i < bid.length; i++) {
            total += bid[i] << 0;
            }


            var bid_price = parseInt(bid);

            $("textarea#input_2_67").val("");

            $("textarea#input_2_67").val(selected);
            

            $("input#input_2_69").val("");


            $("input#input_2_69").val(total+menuprice_int);

            console.log(bid);
        });

        /*Additional Add on 2*/
        $('.addon2 input[type="checkbox"]').change(function() {
            /*if ($(".addon2 input:checked").length > 2) {

                alert("Yo! Choose Only 2 Lah");
                $(this).prop('checked', false);
            };*/
            var selected = $(this).parents(".accordion-container.active").find(".addon2 input:checked").map(function(i, el) {
                return el.value;
            }).get();

            var bid = $(this).parents(".accordion-container.active").find(".addon2 input:checked").map(function(i, el) {
                return $(el).attr('data-addonprice');
            }).get();

           
            var total = 0;
            for (var i = 0; i < bid.length; i++) {
            total += bid[i] << 0;
            }


            $("li#field_2_71").show();

            $("textarea#input_2_70").val("");

            $("textarea#input_2_70").val(selected);
           

            $("input#input_2_71").val("");


            $("input#input_2_71").val(total);

            console.log(bid);
        });


        /*Additional extra charge for equipment*/ 

        $('.extracharge input[type="checkbox"]').change(function() {
            /*if ($(".extracharge input:checked").length > 2) {

                alert("Yo! Choose Only 2 Lah");
                $(this).prop('checked', false);
            };*/
            var selected = $(this).parents(".accordion-container.active").find(".extracharge input:checked").map(function(i, el) {
                return el.value;
            }).get();

            var bid = $(this).parents(".accordion-container.active").find(".extracharge input:checked").map(function(i, el) {
                return $(el).attr('data-addonprice');
            }).get();

           
            var total = 0;
            for (var i = 0; i < bid.length; i++) {
            total += bid[i] << 0;
            }


            $("li#field_2_74").show();

            $("textarea#input_2_73").val("");

            $("textarea#input_2_73").val(selected);
           

            $("input#input_2_74").val("");


            $("input#input_2_74").val(total);

            console.log(bid);
        });    


    /*    $('.extra-charge input[type="checkbox"]').change(function() {
            if ($(".extra-charge input:checked").length > 2) {

                alert("Yo! Choose Only 2 Lah");
                $(this).prop('checked', false);
            };
            var selected = $(this).parents(".accordion-container.active").find(".extra-charge input:checked").map(function(i, el) {
                return el.value;
            }).get();

            var bid = $(this).parents("accordion-container.active").find(".extra-charge input:checked").map(function(i, el) {
                return $(el).attr('data-addonprice');
            }).get();

           
            var total = 0;
            for (var i = 0; i < bid.length; i++) {
            total += bid[i] << 0;
            }


            var bid_price = parseInt(bid);

            $("textarea#input_2_73").val("");

            $("textarea#input_2_73").val(selected);
          

            $("input#input_2_74").val("");


            $("input#input_2_74").val(total);

            console.log(bid);
        });*/







        //submenu items 2

        $('.sub-m2 input[type="checkbox"]').change(function() {


            var title = $(this).parents(".accordion-container").find("input[type='checkbox']").val();
            var cssClass = title.replace(/\s+/g, '-');
            cssClass = cssClass.toLowerCase();
            console.log(cssClass);
            console.log(title);
            var radioVal = $(this).val();
            console.log(radioVal);

            var selectedItem = $(".append-menu-content").find("." + cssClass);
            selectedItem.find(".sub-items2").html("<p class='rdoval'>" + radioVal + "</p>");

        });



    });
    
   /* Gravity form ends */






        $(".accordion-title").on('click', function() {
            var that = $(this).parents(".accordion-container");
            that.toggleClass('active');
            if (that.hasClass('active')) {
                $('.active .accordion-content').show();


            } else {
                $('.accordion-content').hide();


            }
        });




        $('.next-to-form').click(function(event) {

            $('.your-selection').hide();
            $('.gravity-form-area').show();

            $(this).hide();

            $('textarea#input_2_39').val($('.append-menu-content').text());
        });

        $('.mobile-nxt').click(function(event) {
            $('#mobile-form').show();

            $('html, body').stop().animate({
                scrollTop: $('#mobile-form').offset().top
            }, 600, 'linear');
            $('.toggle-area').hide();
            $('.mobile-order-area').css('min-height', '20px');

            /*$('.mobile-order-area').hide(300);*/
        });

        $('.down-close').toggle(function() {
            $('.toggle-area').hide();
            $('.mobile-order-area').css('min-height', '20px');

            $(this).addClass('up-arr');
        }, function() {
            $('.toggle-area').show();
            $(this).removeClass('up-arr');
        });






        $('.previous-to-form').click(function(event) {
            $('.your-selection').show();
            $('.gravity-form-area').hide();
            $('.next-to-form').show();
        });


        $('a.scroll').bind('click', function(event) {

            var $anchor = $(this);

            $('html, body').stop().animate({

                scrollTop: $($anchor.attr('href')).offset().top

            }, 900, 'linear');

            event.preventDefault();

        });





        var swiper = new Swiper('.swiper-container', {

            pagination: '.swiper-pagination',

            slidesPerView: 1,

            paginationClickable: true,

            spaceBetween: 30,

            keyboardControl: true



        });





        $('a.scroll').bind('click', function(event) {

            var $anchor = $(this);

            $('html, body').stop().animate({

                scrollTop: $($anchor.attr('href')).offset().top

            }, 900, 'linear');

            event.preventDefault();

        });

    });



})(jQuery);