(function($) {

    $(document).ready(function() {

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
            $('input:checkbox').removeAttr('checked');
            $(this).parents(".accordion-container").removeClass('active');
            var title = $(this).val();

            var price = $(this).siblings('.actual-price').text();
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

                $("#input_2_42").val(price);
                $("#input_2_48").val(title);
                $("textarea#input_2_53").val("");
                $("textarea#input_2_54").val("");
                 $("input#input_2_56").val("");
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


        //submenu items 1

        /*  $('.sub-m1 input[type="checkbox"]').change(function() {


               var title = $(this).parents(".accordion-container").find("input[type='checkbox']").val();
               var cssClass = title.replace(/\s+/g, '-');
               cssClass = cssClass.toLowerCase();
               console.log(cssClass);
               console.log(title);
               var radioVal = $(this).val();
               console.log(radioVal);

               var selectedItem = $(".append-menu-content").find("." + cssClass);
               selectedItem.find(".sub-items1").html("<p class='rdoval'>" + radioVal + "</p>");

              var result = selectedItem.val().append("order-menu-title");

               var result = selectedItem.val();

               $("textarea#input_2_53").val(radioVal);
               console.log("radio"+radioVal);

           });*/

        /*  var testval = [];
         $('.sub-m1 input[type="checkbox"]:checked').each(function() {
           var allval = testval.push($(this).val());
           console.log("test");
        });
*/

         /*Sub Menu Choose 1*/
        $('.sub-m1 input[type="radio"]').change(function() {

            var selected = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").map(function(i, el) {
                return el.value;
            }).get();
             $("textarea#input_2_53").val("");
               
            $("textarea#input_2_53").val(selected);
            $("#field_2_53").show();
            /*alert("selected = [" + selected + "]\nas string = \"" + selected.join(";") + "\"");
             */
            console.log(selected);
        });

         $('.sub-m2 input[type="radio"]').change(function() {

            var selected = $(this).parents(".accordion-container.active").find(".sub-m2 input:checked").map(function(i, el) {
                return el.value;
            }).get();

                $("textarea#input_2_54").val("");
            $("textarea#input_2_54").val(selected);
            $("#field_2_54").show();
            /*alert("selected = [" + selected + "]\nas string = \"" + selected.join(";") + "\"");
             */
            console.log(selected);
        });



        /*Sub Menu Choose 2*/

       /* $('.sub-m1 input[type="checkbox"]').change(function() {
            if ($(".sub-m1 input:checked").length > 2) {   

                alert("Yo! Choose Only 2 Lah");
               $(this).prop('checked', false);
            };
            var selected = $(this).parents(".accordion-container.active").find(".sub-m1 input:checked").map(function(i, el) {
                return el.value;
            }).get();
             $("textarea#input_2_53").val("");
               
            $("textarea#input_2_53").val(selected);
            $("#field_2_53").show();
           
            console.log(selected);
        });*/

        /*$('.sub-m2 input[type="checkbox"]').change(function() {
            if ($(".sub-m1 input:checked").length > 2) {   

                alert("Yo! Choose Only 2 Lah");
               $(this).prop('checked', false);
            };
            var selected = $(this).parents(".accordion-container.active").find(".sub-m2 input:checked").map(function(i, el) {
                return el.value;
            }).get();

                $("textarea#input_2_54").val("");
            $("textarea#input_2_54").val(selected);
            $("#field_2_54").show();
           
            console.log(selected);
        });*/




         /*Beverage Choose 1*/
        $('.beverage-choose1 input[type="radio"]').change(function() {

            var selected = $(this).parents(".accordion-container.active").find(".beverage-choose1 input:checked").map(function(i, el) {
                return el.value;
            }).get();
             $("input#input_2_56").val("");
               
            $("input#input_2_56").val(selected);
            $("li#field_2_56").show();
           
            console.log(selected);
        });

          /*Beverage Choose 2*/
     /*   $('.beverage-choose2 input[type="checkbox"]').change(function() {
              if ($(".beverage-choose2 input:checked").length > 2) {   

                alert("Yo! Choose Only 2 Lah");
               $(this).prop('checked', false);
            };   
            var selected = $(this).parents(".accordion-container.active").find(".beverage-choose2 input:checked").map(function(i, el) {
                return el.value;
            }).get();
             $("input#input_2_56").val("");
               
            $("input#input_2_56").val(selected);
            $("li#field_2_56").show();
            
            console.log(selected);
        });*/






        //submenu items 2

        /* $('.sub-m2 input[type="checkbox"]').change(function() {


             var title = $(this).parents(".accordion-container").find("input[type='checkbox']").val();
             var cssClass = title.replace(/\s+/g, '-');
             cssClass = cssClass.toLowerCase();
             console.log(cssClass);
             console.log(title);
             var radioVal = $(this).val();
             console.log(radioVal);

             var selectedItem = $(".append-menu-content").find("." + cssClass);
             selectedItem.find(".sub-items2").html("<p class='rdoval'>" + radioVal + "</p>");

         });*/



        $(".accordion-title").on('click', function() {
            var that = $(this).parents(".accordion-container");
            that.toggleClass('active');
            if (that.hasClass('active')) {
                $('.active .accordion-content').show();


            } else {
                $('.accordion-content').hide();


            }
        });



        /* $( "#accordion" ).accordion({
      collapsible: true
    });  */


        /* $(".accordion-container").on('click', function() {
             var that = $(this);
             that.toggleClass('active');
             if (that.hasClass('active')) {
                 $('.active .accordion-content').show();


             } else {
                 $('.accordion-content').hide();

                    
             }
         });

         $('input[type="checkbox"]').on('click', function() {
             if ($(this).prop('checked')) {
                 console.log("checked");
                 
                     $('.order-form-area').show('slide', {
                         direction: 'right'
                     }, 1000);
             }

             else{
                 $('.order-form-area').hide('slide', {
                         direction: 'right'
                     }, 1000);
             }
         });

         $('.squaredOne input[type="checkbox"]').change(function() {


             var count = 0,
                 checkboxele = $('input[type="checkbox"]');
             $('#append-menu-titile').html('');
             for (var i = 0; checkboxele[i]; ++i) {
                 if (checkboxele[i].checked) {
                     var value = checkboxele[i].value,
                         title = $(this).next().text();
                     count += Number(checkboxele[i].value);
                     $('#append-menu-titile').append("<h2 class='black order-menu-title'>" + title + "</h2><p class='black'><em>with</em></p><div id='sub-items1'></div><div id='sub-items2'></div>");


                 }


             }
         });

         $('#sub-m1 input[type="radio"]').change(function() {


             var count = 0,
                 radioele = $('input[type="radio"]');
             $('#sub-items1').html('');
             for (var i = 0; radioele[i]; ++i) {
                 if (radioele[i].checked) {
                     var value = radioele[i].value,
                         title = $(this).next().text();
                     count += Number(radioele[i].value);
                     $('#sub-items1').append("<p class='black'>" + title + "</p>");


                 }

             }
         });


         $('#sub-m2 input[type="radio"]').change(function() {


             var count = 0,
                 radioele = $('input[type="radio"]');
             $('#sub-items2').html('');
             for (var i = 0; radioele[i]; ++i) {
                 if (radioele[i].checked) {
                     var value = radioele[i].value,
                         title = $(this).next().text();
                     count += Number(radioele[i].value);
                     $('#sub-items2').append("<p class='black'>" + title + "</p>");


                 }

             }
         });*/



        /*$("html").niceScroll();*/
        /*$("div#menu-listing .col-md-4:nth-child(2)").addClass('col-md-8');
        $("div#menu-listing .col-md-4:nth-child(2)").removeClass('col-md-4');*/

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
