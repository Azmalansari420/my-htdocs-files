<?php $this->load->view('header'); ?>
<style>
    img.testimonial__items--thumbnail__img.border-radius-50
    {
        height: 70px;
    }
    @media only screen and (min-width: 1025px) {
        .desktop-none {
            display:none !important;
        }
    } 
    @media only screen and (max-width: 1026px) {
        .mobile-none {
            display:none !important;
        }
    } 
</style>

    <main class="main__content_wrapper">
        <!-- pc -->
        <section class="hero__slider--section mobile-none">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">                    
                     <?php
                    $this->db->order_by('id desc');
                    $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,'type'=>2,));
                    foreach ($slider as $key => $value) 
                        { ?>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items" style="background: url(<?php echo base_url(); ?>media/uploads/slider/<?php echo $value->image; ?>);background-repeat: no-repeat;background-attachment: scroll;background-size: 100% 550px;height: 550px;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <div class="hero__slider--items__inner">
                                            <div class="slider__content">
                                                <?php
                                                if(!empty($value->sub_title))
                                                    { ?>
                                                <p class="slider__content--desc desc1 mb-15">
                                                    <img class="slider__text--shape__icon" src="<?php echo base_url(); ?>assets/img/icon/text-shape-icon.png" alt="text-shape-icon"> <?php echo $value->sub_title; ?></p> 
                                                <?php } ?>
                                                <?php
                                                if(!empty($value->title))
                                                    { ?>
                                                <h2 class="slider__content--maintitle h1"><?php echo $value->title; ?></h2>
                                            <?php } ?>
                                            <?php
                                                if(!empty($value->content))
                                                    { ?>
                                                <p class="slider__content--desc desc2 d-sm-2-none mb-40 "><?php echo $value->content; ?></p>    
                                            <?php } ?>
                                            <?php
                                                if(!empty($value->url))
                                                    { ?>
                                                <a class="primary__btn slider__btn" href="<?php echo $value->url; ?>">Show Collection
                                                    <svg class="slider__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                                    </svg>
                                                </a>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>                   
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </section>

        <!-- ----desktop--- -->
        <section class="hero__slider--section desktop-none">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">                    
                     <?php
                    $this->db->order_by('id desc');
                    $slider = $this->crud->selectDataByMultipleWhere('slider',array('status'=>1,'type'=>1,));
                    foreach ($slider as $key => $value) 
                        { ?>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items" style="background: url(<?php echo base_url(); ?>media/uploads/slider/<?php echo $value->image; ?>);background-repeat: no-repeat;background-attachment: scroll;background-size: 365px;height: 365px;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <div class="hero__slider--items__inner">
                                            <div class="slider__content">
                                                <?php
                                                if(!empty($value->sub_title))
                                                    { ?>
                                                <p class="slider__content--desc desc1 mb-15">
                                                    <img class="slider__text--shape__icon" src="<?php echo base_url(); ?>assets/img/icon/text-shape-icon.png" alt="text-shape-icon"> <?php echo $value->sub_title; ?></p> 
                                                <?php } ?>
                                                <?php
                                                if(!empty($value->title))
                                                    { ?>
                                                <h2 class="slider__content--maintitle h1"><?php echo $value->title; ?></h2>
                                            <?php } ?>
                                            <?php
                                                if(!empty($value->content))
                                                    { ?>
                                                <p class="slider__content--desc desc2 d-sm-2-none mb-40 "><?php echo $value->content; ?></p>    
                                            <?php } ?>
                                            <?php
                                                if(!empty($value->url))
                                                    { ?>
                                                <a class="primary__btn slider__btn" href="<?php echo $value->url; ?>">Show Collection
                                                    <svg class="slider__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                                    </svg>
                                                </a>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>                   
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </section>



        <!-- categories section -->

        <section class="new__product--section section--padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="product__collection--content">
                            <h2 class="product__collection--content__title">Our Categories</h2>
                            <p class="product__collection--content__desc">Here are a number of categories in Women's Wear  to find out the best choices to choose, Explore to get More-</p>
                            <a class="product__collection--content__btn primary__btn btn__style3" href="<?php echo base_url('shop'); ?>">View More</a>  
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="new__product--sidebar position__relative">
                            <div class=" product__swiper--column3 swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    $this->db->order_by('id desc');
                                    $cate = $this->crud->selectDataByMultipleWhere('categories',array('status'=>1,));
                                    foreach($cate as $data)
                                        { ?>
                                    <div class="swiper-slide">
                                        <div class="new__product--items" style="text-align: center;">
                                            <div class="new__product--thumbnail">
                                                <a class="new__product--thumbnail__link" href="<?php echo base_url('shop/'.$data->slug); ?>">
                                                    <img class="new__product--thumbnail__img" src="<?php echo base_url(); ?>media/uploads/categories/<?php echo $data->image; ?>" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="new__product--content">
                                                <h3 class="new__product--content__title"><a href="<?php echo base_url('shop/'.$data->slug); ?>"><?php echo $data->name; ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="swiper__nav--btn style3 swiper-button-next"></div>
                            <div class="swiper__nav--btn style3 swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0 mobile-none">
            <div class="container-fluid">
                <div class="row row-cols-md-2 row-cols-1 mb--n28">
                    <?php
                    $this->db->limit(2);
                    $this->db->order_by('id desc');
                    $banner = $this->crud->selectDataByMultipleWhere('offer_banners',array('status'=>1,'type'=>1,'mobile'=>2,));
                    foreach($banner as $data)
                        { ?>
                    <div class="col mb-28">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail " href="<?php echo $data->link; ?>">
                                <img class="banner__items--thumbnail__img banner__img--max__height" src="<?php echo base_url(); ?>media/uploads/offer_banners/<?php echo $data->image; ?>" alt="banner-img">
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle d-none d-lg-block"><?php echo $data->sub_title; ?></span>
                                    <h2 class="banner__items--content__title h3"><?php echo $data->title; ?></h2>
                                    <span class="banner__items--content__link"><u>Shop now</u></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="banner__section section--padding pt-0 desktop-none">
            <div class="container-fluid">
                <div class="row row-cols-md-2 row-cols-1 mb--n28">
                    <?php
                    $this->db->limit(2);
                    $this->db->order_by('id desc');
                    $banner = $this->crud->selectDataByMultipleWhere('offer_banners',array('status'=>1,'type'=>1,'mobile'=>1,));
                    foreach($banner as $data)
                        { ?>
                    <div class="col mb-28">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail " href="<?php echo $data->link; ?>">
                                <img class="banner__items--thumbnail__img banner__img--max__height" src="<?php echo base_url(); ?>media/uploads/offer_banners/<?php echo $data->image; ?>" alt="banner-img">
                                <div class="banner__items--content">
                                    <span class="banner__items--content__subtitle d-none d-lg-block"><?php echo $data->sub_title; ?></span>
                                    <h2 class="banner__items--content__title h3"><?php echo $data->title; ?></h2>
                                    <span class="banner__items--content__link"><u>Shop now</u></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>


        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-35">
                    <h2 class="section__heading--maintitle">Our Products</h2>
                </div>
                <ul class="product__tab--one product__tab--primary__btn d-flex justify-content-center mb-50">
                    <li class="product__tab--primary__btn__list active" data-toggle="tab" data-target="#featured">Featured </li>
                    <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#trending">Trending </li>
                    <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#newarrival">New Arrival  </li>
                </ul>
                <div class="tab_content">
                    <div id="featured" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                <?php
                                $this->db->order_by('id desc');
                                $this->db->limit(8);
                                $product = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'feauture_product'=>1,));
                                foreach($product as $data)
                                    { 
                                        $this->load->view('product-card',array("data"=>$data));
                                     } ?>
                                
                            </div>
                        </div>
                    </div>
                    <div id="trending" class="tab_pane">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                <?php
                                $this->db->order_by('id desc');
                                $this->db->limit(8);
                                $product = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'tranding_product'=>1,));
                                foreach($product as $data)
                                    {
                                    $this->load->view('product-card',array("data"=>$data));
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div id="newarrival" class="tab_pane">
                        <div class="product__section--inner">
                            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                                <?php
                                $this->db->order_by('id desc');
                                $this->db->limit(8);
                                $product = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'new_arrival'=>1,));
                                foreach($product as $data)
                                    {
                                    $this->load->view('product-card',array("data"=>$data));
                                     } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start deals banner section -->
        <?php
        $this->db->limit(1);
        $this->db->order_by('id desc');
        $deal = $this->crud->selectDataByMultipleWhere('dela_of_day',array('status'=>1,));
        
        if(!empty($deal))
        {
        
         ?>
        <section class="deals__banner--section section--padding pt-0">
            <div class="container-fluid">
                <?php
                        foreach($deal as $data)
                        { ?>
                <div class="deals__banner--inner banner__bg" style="background-image: url(<?php echo base_url(); ?>media/uploads/dela_of_day/<?php echo $data->image; ?>);">
                    <div class="row row-cols-1 align-items-center">
                        
                        <div class="col">
                            <div class="deals__banner--content position__relative">
                                <span class="deals__banner--content__subtitle text__secondary"><?php echo $data->sub_title; ?></span>
                                <h2 class="deals__banner--content__maintitle"><?php echo $data->title; ?></h2>
                                <p class="deals__banner--content__desc"><?php echo $data->content; ?> </p>
                                <div class="deals__banner--countdown d-flex" data-countdown="<?php echo $data->countdown; ?>"></div>
                                <a class="primary__btn" href="<?php echo $data->url; ?>">Show Collection
                                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                    </svg>
                                </a>
                                <br>
                                <div class="banner__bideo--play">
                                    <a class="banner__bideo--play__icon glightbox" href="<?php echo $data->video_link; ?>" data-gallery="video">
                                        <svg id="play" xmlns="http://www.w3.org/2000/svg" width="40.302" height="40.302" viewBox="0 0 46.302 46.302">
                                            <g id="Group_193" data-name="Group 193" transform="translate(0 0)">
                                            <path id="Path_116" data-name="Path 116" d="M39.521,6.781a23.151,23.151,0,0,0-32.74,32.74,23.151,23.151,0,0,0,32.74-32.74ZM23.151,44.457A21.306,21.306,0,1,1,44.457,23.151,21.33,21.33,0,0,1,23.151,44.457Z" fill="currentColor"/>
                                            <g id="Group_188" data-name="Group 188" transform="translate(15.588 11.19)">
                                                <g id="Group_187" data-name="Group 187">
                                                <path id="Path_117" data-name="Path 117" d="M190.3,133.213l-13.256-8.964a3,3,0,0,0-4.674,2.482v17.929a2.994,2.994,0,0,0,4.674,2.481l13.256-8.964a3,3,0,0,0,0-4.963Zm-1.033,3.435-13.256,8.964a1.151,1.151,0,0,1-1.8-.953V126.73a1.134,1.134,0,0,1,.611-1.017,1.134,1.134,0,0,1,1.185.063l13.256,8.964a1.151,1.151,0,0,1,0,1.907Z" transform="translate(-172.366 -123.734)" fill="currentColor"/>
                                                </g>
                                            </g>
                                            <g id="Group_190" data-name="Group 190" transform="translate(28.593 5.401)">
                                                <g id="Group_189" data-name="Group 189">
                                                <path id="Path_118" data-name="Path 118" d="M328.31,70.492a18.965,18.965,0,0,0-10.886-10.708.922.922,0,1,0-.653,1.725,17.117,17.117,0,0,1,9.825,9.664.922.922,0,1,0,1.714-.682Z" transform="translate(-316.174 -59.724)" fill="currentColor"/>
                                                </g>
                                            </g>
                                            <g id="Group_192" data-name="Group 192" transform="translate(22.228 4.243)">
                                                <g id="Group_191" data-name="Group 191">
                                                <path id="Path_119" data-name="Path 119" d="M249.922,47.187a19.08,19.08,0,0,0-3.2-.27.922.922,0,0,0,0,1.845,17.245,17.245,0,0,1,2.889.243.922.922,0,1,0,.31-1.818Z" transform="translate(-245.801 -46.917)" fill="currentColor"/>
                                                </g>
                                            </g>
                                            </g>
                                        </svg>
                                        <span class="visually-hidden">Video Play</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php } ?>
            </div>
        </section>
    <?php } ?>
  
        <!-- End deals banner section -->

        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-50">
                    <h2 class="section__heading--maintitle">Our Best Seller</h2>
                </div>
                <div class="product__section--inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                         <?php
                        $this->db->order_by('id desc');
                        $this->db->limit(8);
                        $product = $this->crud->selectDataByMultipleWhere('product',array('status'=>1,'our_best'=>1,));
                        foreach($product as $data)
                            {
                            $cate = $this->crud->selectDataByMultipleWhere('categories',array('id'=>$data->cat_id,));
                            $subcate = $this->crud->selectDataByMultipleWhere('sub_categories',array('id'=>$data->sub_cat_id,));

                            $color_id = 0;
                            $this->db->group_by('color_id');
                            $this->db->limit(1);
                            $this->db->select("color_id");
                            $color = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
                            if(!empty($color))
                            {
                                foreach ($color as $key => $value) 
                                { 
                                    $color_id = $value->color_id;
                                    break;
                                } 
                            }
                            $size_id = 0;
                            $this->db->group_by('size_id');
                            $this->db->limit(1);
                            $this->db->select("size_id");
                            $color = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
                            if(!empty($color))
                            {
                                foreach ($color as $key => $value) 
                                { 
                                    $size_id = $value->size_id;
                                    break;
                                } 
                            }

                            $price = 0;
                            $this->db->group_by('price');
                            $this->db->limit(1);
                            $this->db->select("price");
                            $color = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
                            if(!empty($color))
                            {
                                foreach ($color as $key => $value) 
                                { 
                                    $price = $value->price;
                                    break;
                                } 
                            }

                            $cut_price = 0;
                            $this->db->group_by('cut_price');
                            $this->db->limit(1);
                            $this->db->select("cut_price");
                            $color = $this->db->get_where('all_images',array('p_id'=>$data->id,))->result_object();
                            if(!empty($color))
                            {
                                foreach ($color as $key => $value) 
                                { 
                                    $cut_price = $value->cut_price;
                                    break;
                                } 
                            }
                            
                             ?>

                        <div class="swiper-slide">
                            <div class="product__items ">
                                <div class="product__items--thumbnail">
                                    <a class="product__items--link" href="<?php echo base_url('product-details/'.$data->slug); ?>">
                                        <img class="product__items--img product__primary--img" src="<?php echo base_url(); ?>media/uploads/product/<?php echo $data->thumb_img; ?>" alt="product-img">
                                        <img class="product__items--img product__secondary--img" src="<?php echo base_url(); ?>media/uploads/product/<?php echo $data->thumb_img2; ?>" alt="product-img">
                                    </a>
                                    <div class="product__badge">
                                        <span class="product__badge--items sale">- <?php echo discount($cut_price,$price); ?>% Off</span>
                                    </div>
                                </div>
                                <div class="product__items--content">
                                    <span class="product__items--content__subtitle"><?php echo $cate[0]->name; ?>, <?php echo $subcate[0]->name; ?></span>
                                    <h3 class="product__items--content__title h4"><a href="<?php echo base_url('product-details/'.$data->slug); ?>"><?php echo $data->name; ?></a></h3>
                                    <div class="product__items--price">
                                        <span class="current__price">₹ <?php echo number_format($price,2); ?></span>
                                        <span class="price__divided"></span>
                                        <span class="old__price">₹ <?php echo number_format($cut_price,2); ?></span>
                                    </div>

                                    <ul class="rating product__rating d-flex">
                                        <?php
                                        $i=1;
                                        while($i<5)
                                        {
                                            if($i<=$data->rating)
                                                { ?>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <?php } else { ?>
                                        <?php } $i++; } ?>
                                    </ul>

                                    <ul class="product__items--action d-flex">
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn add__to--cart addtocart" data-p_id="<?=$data->id ?>" data-color_val="<?=$color_id ?>" data-size_val="<?=$size_id ?>">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                      <g>
                                                        <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                        <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                        <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                      </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text"> + Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn addtowishlist" data-p_id="<?=$data->id ?>">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg> 
                                                <span class="visually-hidden">Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list modelview" data-id="<?php echo $data->id; ?>">
                                            <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                                <span class="visually-hidden">Quick View</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                       
                       
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0 mobile-none">
            <div class="container-fluid">
                <div class="row row-cols-md-2 row-cols-1 mb--n28">
                    <?php
                    $this->db->limit(2);
                    $this->db->order_by('id desc');
                    $banner = $this->crud->selectDataByMultipleWhere('offer_banners',array('status'=>1,'type'=>2,'mobile'=>2,));
                    foreach($banner as $data)
                        { ?>
                    <div class="col mb-28">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail " href="<?php echo $data->link; ?>">
                                <img class="banner__items--thumbnail__img banner__img--max__height" src="<?php echo base_url(); ?>media/uploads/offer_banners/<?php echo $data->image; ?>" alt="banner-img">
                                <div class="banner__items--content">
                                      <?php
                                    if(!empty($data->sub_title))
                                        { ?>
                                    <span class="banner__items--content__subtitle d-none d-lg-block"><?php echo $data->sub_title; ?></span>
                                <?php } ?>
                                    <?php
                                    if(!empty($data->title))
                                        { ?>
                                    <h2 class="banner__items--content__title h3"><?php echo $data->title; ?></h2>
                                <?php } ?>
                                <?php
                                if(!empty($data->link))
                                    { ?>
                                    <span class="banner__items--content__link"><u>Shop now</u></span>
                                <?php } ?>
                                </div>
                            </a>
                        </div>
                    </div>
                   <?php } ?>
                </div>
            </div>
        </section>

        <section class="banner__section section--padding pt-0 desktop-none">
            <div class="container-fluid">
                <div class="row row-cols-md-2 row-cols-1 mb--n28">
                    <?php
                    $this->db->limit(2);
                    $this->db->order_by('id desc');
                    $banner = $this->crud->selectDataByMultipleWhere('offer_banners',array('status'=>1,'type'=>2,'mobile'=>1,));
                    foreach($banner as $data)
                        { ?>
                    <div class="col mb-28">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail " href="<?php echo $data->link; ?>">
                                <img class="banner__items--thumbnail__img banner__img--max__height" src="<?php echo base_url(); ?>media/uploads/offer_banners/<?php echo $data->image; ?>" alt="banner-img">
                                <div class="banner__items--content">
                                      <?php
                                    if(!empty($data->sub_title))
                                        { ?>
                                    <span class="banner__items--content__subtitle d-none d-lg-block"><?php echo $data->sub_title; ?></span>
                                <?php } ?>
                                    <?php
                                    if(!empty($data->title))
                                        { ?>
                                    <h2 class="banner__items--content__title h3"><?php echo $data->title; ?></h2>
                                <?php } ?>
                                    <span class="banner__items--content__link"><u>Shop now</u></span>
                                </div>
                            </a>
                        </div>
                    </div>
                   <?php } ?>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start testimonial section -->
        <section class="testimonial__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Our Clients Say</h2>
                </div>
                <div class="testimonial__section--inner testimonial__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $this->db->order_by('id desc');
                        $this->db->limit(20);
                        $testi = $this->crud->selectDataByMultipleWhere('testimonials',array('status'=>1,));
                        foreach($testi as $data)
                            { ?>
                        <div class="swiper-slide">
                            <div class="testimonial__items text-center">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img border-radius-50" src="<?php echo base_url(); ?>media/uploads/testimonials/<?php echo $data->image; ?>" alt="testimonial-img">
                                </div>
                                <div class="testimonial__items--content">
                                    <h3 class="testimonial__items--title"><?php echo $data->name; ?></h3>
                                    <span class="testimonial__items--subtitle"><?php echo $data->position; ?></span>
                                    <p class="testimonial__items--desc"><?php echo $data->content; ?></p>
                                    <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <?php
                                        $i=1;
                                        while($i<=5)
                                        {
                                            if($i<=$data->rating)
                                            { ?>

                                         <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    <?php } else{ ?>
                                    <?php } $i++; } ?>
                                        
                                        

                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                       
                        
                    </div>
                    <div class="testimonial__pagination swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End testimonial section -->

        <!-- Start banner section -->
        <?php
        $this->db->order_by('id desc');
        $this->db->limit(1);
        $single = $this->crud->selectDataByMultipleWhere('singlebanner',array('status'=>1,));
        if(!empty($single))
        {
        ?>
        <section class="banner__section section--padding pt-0">
            <div class="container-fluid">
                <div class="row row-cols-1">
                    <div class="col">
                        <?php
                        foreach($single as $data)
                        { 
                        ?>
                        <div class="banner__section--inner position__relative">
                            <a class="banner__items--thumbnail display-block" href="<?php echo $data->link; ?>"><img class="banner__items--thumbnail__img banner__img--height__md display-block" src="<?php echo base_url(); ?>media/uploads/singlebanner/<?php echo $data->image; ?>" alt="banner-img">
                                <div class="banner__content--style2">
                                    <h2 class="banner__content--style2__title text-white"><?php echo $data->title; ?></h2>
                                    <p class="banner__content--style2__desc"><?php echo $data->content; ?> </p>
                                    <span class="primary__btn">Shop Now
                                        <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                        <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
       

        <!-- Start blog section -->
        <section class="blog__section section--padding pt-0">
            <div class="container-fluid">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">From The Blog</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $this->db->order_by('id desc');
                        $this->db->limit(10);
                        $blogs = $this->crud->selectDataByMultipleWhere('blog',array('status'=>1,));
                        foreach($blogs as $data)
                            { ?>
                        <div class="swiper-slide">
                            <div class="blog__items">
                                <div class="blog__thumbnail">
                                    <a class="blog__thumbnail--link" href="<?php echo base_url('blog-details/'.$data->slug); ?>"><img class="blog__thumbnail--img" src="<?php echo base_url(); ?>media/uploads/blog/<?php echo $data->image; ?>" alt="blog-img"></a>
                                </div>
                                <div class="blog__content">
                                    <span class="blog__content--meta"><?php echo date('d M Y',strtotime($data->addeddate)); ?></span>
                                    <h3 class="blog__content--title"><a href="<?php echo base_url('blog-details/'.$data->slug); ?>"><?php echo $data->name; ?></a></h3>
                                    <a class="blog__content--btn primary__btn" href="<?php echo base_url('blog-details/'.$data->slug); ?>">Read more </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        

    </main>

   

<?php $this->load->view('footer'); ?>