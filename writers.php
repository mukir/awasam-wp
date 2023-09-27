
<style type="text/css">
    .blog .carousel-indicators {
        left: 0;
        top: auto;
        bottom: -40px;

    }

    /* The colour of the indicators */
    .blog .carousel-indicators li {
        background: #a3a3a3;
        border-radius: 50%;
        width: 8px;
        height: 8px;
    }

    .blog .carousel-indicators .active {
        background: #707070;
    }

    .team-slider__writer-stats-number {
        display: block;
        font-weight: 500;
        font-size: 24px;
        color: #03c1ff;
    }

    .team-slider__writer-stats-item {
        color: #045281;
        font-weight: 400;
        font-size: 14px;
        line-height: 1.1;
    }

    .team-slider__controls-row {
        padding-top: 20px;
    }

    .team-slider__controls-row {
        display: -ms-flexbox;
        display: flex;
        padding-top: 30px;
        border-bottom: none;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
    }

    .img {
        box-sizing: border-box;
    }

    .team-slider__item-inner-wrapper {
        max-width: 375px;
        padding: 30px;
    }

    .team-slider__info-row {
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .team-slider__info-row, .team-slider__stats-row {
        display: -ms-flexbox;
        display: flex;
        border-bottom: 2px solid #03c1ff;
        -ms-flex-pack: distribute;
        justify-content: space-around;
    }

    .team-slider__info-row {
        padding-bottom: 25px;
    }

    .hired-before {
        position: relative;
        border-radius: 3px !important;
        overflow: hidden;
        display: block;
    }

    .team-slider__writer-pic-link {
        max-width: 80px;
        border-radius: 3px;
        overflow: hidden;
        -ms-flex-negative: 0;
        flex-shrink: 0;
    }

    a {
        color: #03c1ff;
        background: transparent;
        text-decoration: none;
        cursor: pointer;
        transition: color .2s ease-in-out;
    }

    .team-slider__writer-info {
        text-align: left;
        padding-left: 20px;
        overflow: hidden;
    }

    .team-slider__item-inner-wrapper {
        max-width: 375px;
        padding: 30px;
    }

    .team-slider__item-inner-wrapper {
        width: 100%;
        padding: 35px 20px;
        background-color: rgba(15,128,222,.05);
        height: 100%;
        margin: 0 auto;
    }

    .star-rate, .star-rate > div {
        width: 100px;
        height: 17px;
        background-size: 20px 17px;
    }

    .star-rate {
        background-image: url(<?php echo plugins_url( 'images/star-full@2x.png', __FILE__ );?>);
        background-repeat: repeat-x;
        margin: 2px 0;
    }

    .btn_without-shadow, .btn_without-shadow:hover {
        box-shadow: none;
    }

    .btn_thin {
        padding: 12px 38px;
    }

    .btn_second-accent {
        background-color: #03c1ff;
        color: #fff;
    }

    .btn {
        display: inline-block;
        margin-bottom: 0;
        padding: 14px 30px;
        vertical-align: middle;
        text-align: center;
        font-family: GothamPro,sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 1.45;
        letter-spacing: .05em;
        text-transform: uppercase;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 13px;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        outline: none;
        transition: .15s ease-in-out;
        transition-property: all;
        transition-property: color,background,opacity,border,box-shadow;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }



    .team-slider__writer-name-link {
        display: block;
        color: #045281;
        font-weight: 500;
        font-size: 20px;
        margin-bottom: 8px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    a {
        color: #03c1ff;
        background: transparent;
        text-decoration: none;
        cursor: pointer;
        transition: color .2s ease-in-out;
    }

    .team-slider__writer-stats-item {
        color: #045281;
        font-weight: 400;
        font-size: 14px;
        line-height: 1.1;

    }

    .slider-order-card.lazy-bg-loaded {
    background-image: url(<?php echo plugins_url( 'images/order-card-bg_v2.png', __FILE__ );?>);
}

.slider-order-card {
    min-height: 319px;
}

.slider-order-card {
    padding: 100px 30px 30px !important;
    background-size: contain;
    background-position: 50% 0;
    background-repeat: no-repeat;
    background-color: #f3f9fd !important;
}

.team-slider__item-inner-wrapper {
    max-width: 375px;
    padding: 30px;
}


.team-slider__item-inner-wrapper {
    width: 100%;
    padding: 35px 20px;
    background-color: rgba(15,128,222,.05);
    height: 100%;
    margin: 0 auto;
}


</style>

</style>

<div class="container">
    <div class="row blog">
        <div class="col-md-12">
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">


                            <div class="col-md-4">
                                <div class="team-slider__item team-slider__item_v2">
                                    <div class="team-slider__item-inner-wrapper">
                                        <div class="team-slider__info-row">
                                            <a class="team-slider__writer-pic-link hired-before " href="/order/" title="View writer’s profile">
                                                <img class="js_lazy_slider_img team-slider__writer-pic" alt="Writer avatar" src="<?php echo plugins_url( 'images/writers/travis.jpg', __FILE__ );?>">
                                            </a>
                                            <div class="team-slider__writer-info">
                                                <a class="team-slider__writer-name-link" href="/order" title="View Prof. John M profile">
                                                    Travis
                                                </a>
                                                <p class="team-slider__writer-status">&numero;1 In global rating</p>
                                                <div class="star-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                    <div style="width:98%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-slider__stats-row">
                                            <p class="team-slider__writer-stats-item" title="# of successful papers">
                                                <span class="team-slider__writer-stats-number">708</span>
                                            finished papers                        </p>

                                            <a class="team-slider__writer-stats-item" href="/order/writer/u/1667" title="All reviews are unedited and published as is.">
                                                <span class="team-slider__writer-stats-number">560</span>
                                            customer reviews                    </a>
                                        </div>
                                        <div class="team-slider__controls-row">
                                            <p class="team-slider__success-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                <span class="team-slider__success-rate-number">
                                                    98%
                                                </span>
                                            success rate                    </p>
                                            <div class="team-slider__hire-button">
                                             <a href="/order">
                                                <button class="js_hw_button btn btn_second-accent btn_without-shadow btn_thin" data-js-hire-writer-id="2521752" data-js-hire-writer-url="/order" data-js-hire-writer-source="hire writer in carousel" data-js-hire-writer-action="click" data-js-hire-writer-choose-order-url="/customer/hire-writer-choose-order/2521752">
                                            Hire</button>
                                        </a>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                           <div class="col-md-4">
                                <div class="team-slider__item team-slider__item_v2">
                                    <div class="team-slider__item-inner-wrapper">
                                        <div class="team-slider__info-row">
                                            <a class="team-slider__writer-pic-link hired-before " href="/order/writer/u/1678" title="View writer’s profile">
                                                <img class="js_lazy_slider_img team-slider__writer-pic" alt="Writer avatar" src="<?php echo plugins_url( 'images/writers/super_proff.jpg', __FILE__ );?>">
                                            </a>
                                            <div class="team-slider__writer-info">
                                                <a class="team-slider__writer-name-link" href="/order/writer/u/1678" title="View Prof. John M profile">
                                                   Superprof
                                                </a>
                                                <p class="team-slider__writer-status">&numero;2 In global rating</p>
                                                <div class="star-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                    <div style="width:98%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-slider__stats-row">
                                            <p class="team-slider__writer-stats-item" title="# of successful papers">
                                                <span class="team-slider__writer-stats-number">610</span>
                                            finished papers                        </p>

                                            <a class="team-slider__writer-stats-item" href="/order/writer/u/1678" title="All reviews are unedited and published as is.">
                                                <span class="team-slider__writer-stats-number">453</span>
                                            customer reviews                    </a>
                                        </div>
                                        <div class="team-slider__controls-row">
                                            <p class="team-slider__success-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                <span class="team-slider__success-rate-number">
                                                    98%
                                                </span>
                                            success rate                    </p>
                                            <div class="team-slider__hire-button">
                                              <a href="/order">
                                                <button class="js_hw_button btn btn_second-accent btn_without-shadow btn_thin" data-js-hire-writer-id="2521752" data-js-hire-writer-url="/order" data-js-hire-writer-source="hire writer in carousel" data-js-hire-writer-action="click" data-js-hire-writer-choose-order-url="/customer/hire-writer-choose-order/2521752">
                                            Hire</button>
                                        </a>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                              <div class="col-md-4">
                                <div class="team-slider__item team-slider__item_v2">
                                    <div class="team-slider__item-inner-wrapper">
                                        <div class="team-slider__info-row">
                                            <a class="team-slider__writer-pic-link hired-before " href="/order/writer/u/1660" title="View writer’s profile">
                                                <img class="js_lazy_slider_img team-slider__writer-pic" alt="Writer avatar" src="<?php echo plugins_url( 'images/writers/3412221.jpg', __FILE__ );?>">
                                            </a>
                                            <div class="team-slider__writer-info">
                                                <a class="team-slider__writer-name-link" href="/order/writer/u/1660" title="View Prof. John M profile">
                                                  Professor Ethan
                                                </a>
                                                <p class="team-slider__writer-status">&numero;3 In global rating</p>
                                                <div class="star-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                    <div style="width:98%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-slider__stats-row">
                                            <p class="team-slider__writer-stats-item" title="# of successful papers">
                                                <span class="team-slider__writer-stats-number">481</span>
                                            finished papers                        </p>

                                            <a class="team-slider__writer-stats-item" href="/order/writer/u/1660" title="All reviews are unedited and published as is.">
                                                <span class="team-slider__writer-stats-number">310</span>
                                            customer reviews                    </a>
                                        </div>
                                        <div class="team-slider__controls-row">
                                            <p class="team-slider__success-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                <span class="team-slider__success-rate-number">
                                                    97%
                                                </span>
                                            success rate                    </p>
                                            <div class="team-slider__hire-button">
                                              <a href="/order">
                                                <button class="js_hw_button btn btn_second-accent btn_without-shadow btn_thin" data-js-hire-writer-id="2521752" data-js-hire-writer-url="/order" data-js-hire-writer-source="hire writer in carousel" data-js-hire-writer-action="click" data-js-hire-writer-choose-order-url="/customer/hire-writer-choose-order/2521752">
                                            Hire</button>
                                        </a>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>









        </div>
        <!--.row-->
    </div>
    <!--.item-->
    <div class="carousel-item">
        <div class="row">

               <div class="col-md-4">
                               <div class="team-slider__item team-slider__item_v2">
                    <article class="team-slider__item-inner-wrapper slider-order-card lazy-bg">
                        <p class="slider-order-card__text">
                            Don't miss the chance <br>to chat with the experts. <br>It's FREE
                        </p>
                        <div class="slider-order-card__btn">
                            <a href="javascript:void(Tawk_API.toggle())" class="btn btn_second-accent btn_without-shadow" onclick="if (!window.__cfRLUnblockHandlers) return false; gta('send','event','CTA','click','get start in carousel');" data-cf-modified-97aa26ab7e1d9d6dc5af9e01-="">let's start</a>
                        </div>
                    </article>
                </div>


                        </div>




                           <div class="col-md-4">
                                <div class="team-slider__item team-slider__item_v2">
                                    <div class="team-slider__item-inner-wrapper">
                                        <div class="team-slider__info-row">
                                            <a class="team-slider__writer-pic-link hired-before " href="https://papersowls.org/order/writer/u/1672" title="View writer’s profile">
                                                <img class="js_lazy_slider_img team-slider__writer-pic" alt="Writer avatar" src="<?php echo plugins_url( 'images/writers/geek2.jpg', __FILE__ );?>">
                                            </a>
                                            <div class="team-slider__writer-info">
                                                <a class="team-slider__writer-name-link" href="https://papersowls.org/order/writer/u/1672" title="View Prof. John M profile">
                                                   Geek
                                                </a>
                                                <p class="team-slider__writer-status">&numero;4 In global rating</p>
                                                <div class="star-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                    <div style="width:98%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-slider__stats-row">
                                            <p class="team-slider__writer-stats-item" title="# of successful papers">
                                                <span class="team-slider__writer-stats-number">315</span>
                                            finished papers                        </p>

                                            <a class="team-slider__writer-stats-item" href="https://papersowls.org/order/writer/u/1672" title="All reviews are unedited and published as is.">
                                                <span class="team-slider__writer-stats-number">200</span>
                                            customer reviews                    </a>
                                        </div>
                                        <div class="team-slider__controls-row">
                                            <p class="team-slider__success-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                <span class="team-slider__success-rate-number">
                                                    98%
                                                </span>
                                            success rate                    </p>
                                            <div class="team-slider__hire-button">
      <a href="/order">
                                                <button class="js_hw_button btn btn_second-accent btn_without-shadow btn_thin" data-js-hire-writer-id="2521752" data-js-hire-writer-url="/order" data-js-hire-writer-source="hire writer in carousel" data-js-hire-writer-action="click" data-js-hire-writer-choose-order-url="/customer/hire-writer-choose-order/2521752">
                                            Hire</button>
                                        </a>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                              <div class="col-md-4">
                                <div class="team-slider__item team-slider__item_v2">
                                    <div class="team-slider__item-inner-wrapper">
                                        <div class="team-slider__info-row">
                                            <a class="team-slider__writer-pic-link hired-before " href="https://papersowls.org/order/writer/u/1668" title="View writer’s profile">
                                                <img class="js_lazy_slider_img team-slider__writer-pic" alt="Writer avatar" src="<?php echo plugins_url( 'images/writers/3422810.jpg', __FILE__ );?>">
                                            </a>
                                            <div class="team-slider__writer-info">
                                                <a class="team-slider__writer-name-link" href="https://papersowls.org/order/writer/u/1668" title="View Prof. John M profile">
                                                  Estelle
                                                </a>
                                                <p class="team-slider__writer-status">&numero;5 In global rating</p>
                                                <div class="star-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                    <div style="width:98%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-slider__stats-row">
                                            <p class="team-slider__writer-stats-item" title="# of successful papers">
                                                <span class="team-slider__writer-stats-number">167</span>
                                            finished papers                        </p>

                                            <a class="team-slider__writer-stats-item" href="/order" title="All reviews are unedited and published as is.">
                                                <span class="team-slider__writer-stats-number">72</span>
                                            customer reviews                    </a>
                                        </div>
                                        <div class="team-slider__controls-row">
                                            <p class="team-slider__success-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                                                <span class="team-slider__success-rate-number">
                                                    97%
                                                </span>
                                            success rate                    </p>
                                            <div class="team-slider__hire-button">
                                          <a href="/order">
                                                <button class="js_hw_button btn btn_second-accent btn_without-shadow btn_thin" data-js-hire-writer-id="2521752" data-js-hire-writer-url="/order" data-js-hire-writer-source="hire writer in carousel" data-js-hire-writer-action="click" data-js-hire-writer-choose-order-url="/customer/hire-writer-choose-order/2521752">
                                            Hire</button>
                                        </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                             <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>


</div>
<!--.row-->
</div>
<!--.item-->

</div>
<!--.carousel-inner-->
</div>
<!--.Carousel-->

</div>
</div>
</div>

<script type="text/javascript">

    // optional
    $('#blogCarousel').carousel({
        interval: false
    });
</script>
