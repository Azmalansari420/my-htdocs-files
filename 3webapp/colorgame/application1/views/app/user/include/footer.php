<div class="toaster"></div>
<script src="<?=base_url() ?>assets/js/jquery.js"></script>
<script src="<?=base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?=base_url() ?>assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?=base_url() ?>assets/js/dz.carousel.js"></script>
<script src="<?=base_url() ?>assets/js/settings.js"></script>
<script src="<?=base_url() ?>assets/js/custom.js"></script>

<script>

    $(".select-amount").click(function(event) {
        $(".select-amount").removeClass("selected");
        $(this).addClass("selected");
        final_amount = amount = $(this).data('amt');
        $('#bet-amount').val(amount);
    }); 

function toaster(message, type) 
   {
     var toaster = $('.toaster');
     toaster.html(message);
     toaster.addClass(type);
     toaster.fadeIn(500);
     setTimeout(function() {
       toaster.fadeOut(500);
     }, 3000);
   }



   function set_full_url(href)
   {
       if(href==undefined || href=='#')
       {
           return false;
       }   
       else 
       {
           var full_url = href;       
           var device_arr = window.location.href.split('id=');
           if(device_arr.length>1)
               device_id = window.location.href.split('id=')[1].split('&')[0];
           else device_id = '';
           firebase_token = window.location.href.split('token=')[1];
           var full_url_array = full_url.split('id');
           var full_url_qs_array = full_url.split('?');
           if(full_url_array.length==1)
           {
               if(full_url_qs_array.length==1)
                   full_url = full_url+"?id="+device_id;
               else
                   full_url = full_url+"&id="+device_id;
           }
           var full_url = full_url;
           var check_api_url = full_url.split("<?=base_url('api/') ?>");
           if(check_api_url.length==1)
           {
               var full_url_array = full_url.split("<?=base_url(user_app) ?>");
               if(full_url_array.length==1)
               {
                   full_url = "<?=base_url(user_app) ?>"+full_url_array[0];
               }
               else
               {
                   full_url = "<?=base_url(user_app) ?>"+full_url_array[1];
               }
           }
           full_url = full_url_new = full_url+'&token='+firebase_token;
       }
       return full_url;
   }
</script>

<!-- webview end -->




</body>
</html>