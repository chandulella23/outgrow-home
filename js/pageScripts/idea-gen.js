
        $(document).ready(function(){
            $('#background').mouseParallax({ moveFactor: 5 });
            $('#foreground').mouseParallax({ moveFactor: 1 });


            $(".sec1-button").click(function(){
                //$(".sec1-bg").hide();
                $(".sec2-bg").removeClass("hide");
                $(".logo-top").removeClass("hide");
                $('html, body').animate({
                    scrollTop: $('.sec2-bg').offset().top
                }, 1000);
                setTimeout(function(){
                    $(".sec1-bg").addClass("hide");
                }, 1000)

            });

            $('.selectize-category').selectize({
                create: false,
                sortField: 'text',
                onChange:function(event){
                    makeSubCategory('.selectize-sub-category',saveSubCat[event]);
                    saveData.category = event;

                    $(".sec3-bg").removeClass("hide");
                    $('html, body').animate({
                        scrollTop: $('.sec3-bg').offset().top
                    }, 1000);
                    setTimeout(function(){
                        $(".sec2-bg").addClass("hide");
                    }, 1000)

                   $('.selectize-category-result')[0].selectize.setValue(event);
                }
            });

            $('.selectize-sub-category').selectize({
                create: false,
                sortField: 'text',
                onChange:function(event){
                    saveData.subCat = event;

                    $(".sec4-bg").removeClass("hide");
                    $('html, body').animate({
                        scrollTop: $('.sec4-bg').offset().top
                    }, 1000);
                    setTimeout(function(){
                        $(".sec3-bg").addClass("hide");
                    }, 1000)

                    $('.selectize-sub-category-result')[0].selectize.setValue(event);
                }
            });

            $("#form-email").focus(function(){
                if(!$('.email-validator').hasClass('hide')) $('.email-validator').addClass('hide');
            })

            $(".sec-button").click(function(){
                var verify = emailValidation($("#form-email").val());
                if(verify) {
                    window.email = $("#form-email").val();
                    if(parseData[saveData.category][saveData.subCat] || parseData[saveData.category]['keyCustom'])    showTitle();
                    $(".sec5-bg").fadeIn("slow", function() {
                        $(this).removeClass("hide");
                    });
                    $(".sec4-bg").fadeOut("slow", function() {
                        $(this).addClass("hide");
                    });
                    $(".logo-top").removeClass("hide");
                    $('body').css('overflow-y','scroll');

                }
                else $('.email-validator').removeClass('hide');
            });

            $('.sec-button-update').click(function(){
                if(parseData[saveData.category][saveData.subCat]){
                    $('.result-page-loader').removeClass('hide');
                    showTitle();
                }
                // $('.build-btn').removeClass('hide');
            })

            $('.selectize-category-result').selectize({
                create: false,
                sortField: 'text',
                onChange:function(event){
                    makeSubCategory('.selectize-sub-category-result',saveSubCat[event]);
                    saveData.category = event;
                }
            });

            $('.selectize-sub-category-result').selectize({
                create: false,
                sortField: 'text',
                onChange:function(event){
                    saveData.subCat = event;
                }
            });

            // owl carousel start js
            $(".owl-demo").owlCarousel({
               
                itemsDesktop : [1366,3],
                itemsDesktopSmall : [979,2],
                navigation:true,
                navigationText: [
                "<i class='material-icons'>keyboard_arrow_left</i>",
                "<i class='material-icons'>keyboard_arrow_right</i>"
                ],
                
            });
        });

        $(document).on('click', '.item-selected', function(event){
            var index = buildSelect.indexOf($(this).text().trim());
            if($(this).children('input').prop('checked')) {
                if(index == -1) buildSelect.push($(this).text().trim());
            }
            else {
                if(index > -1)   buildSelect.splice(index,1);
            }
            if(buildSelect.length > 0)  {
                $('#build-select').html('('+buildSelect.length+')');
                if($('.build-btn').hasClass('hide'))    $('.build-btn').removeClass('hide');
            }
            else {
                 if(!$('.build-btn').hasClass('hide')) $('.build-btn').addClass('hide');
            }
        })

        $('.build-btn').click(function(){
            $('.build-btn').addClass('hide');
            var data = {
                timestamp:timestamp,
                email: email,
                category:saveData.category,
                sub_category:saveData.subCat,
                app_selected: buildSelect,
                flag: flag ? false : true 
            }
            requestBuild(data);
           /* $.ajax({
                type:'POST',
                url: link.getResponseLink(),
                data: JSON.stringify(data),
                success:function(response){
                    console.log(JSON.parse(response));
                },
                error:function(){

                }
            })*/
            flag = true;
        })