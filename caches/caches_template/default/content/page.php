<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php if($catid==24||$catid==12) { ?>
<?php include template("content","header"); ?>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>contact-us.css" />
</head>
<style>
    .banner {
        float: left;
        width: 100%;
        height: 471px;
    }

    .swiper-slide {
        height: 471px;
    }

    .swiper-slide img {
        float: left;
        width: 100%;
        height: 100%;
    }

    .swiper-container-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        width: 200px;
    }

    .swiper-pagination-bullet-active {
        background: #fff;
    }
</style>
<body>
<!-- 轮播 -->
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner1.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner2.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner3.png" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="infor">
    <!-- <div class="infor-wrap"> -->
    <div class="crumbs">
        <div class="crumbs-wrap">
            <a href="about.html" class="zhu">中住地产</a>
            <a class="on">招贤纳士</a>
        </div>

    </div>

    <div class="infor-nav">
        <ul class="tab-nav tab1">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7761d2bcec0e838bc677ac224ba27419&action=category&catid=12&num=25&siteid=%24siteid&order=listorder+ASC&return=item\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$item = $content_tag->category(array('catid'=>'12','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($item)) foreach($item AS $val) { ?>
            <li <?php if($val[catid] ==$catid ) { ?> class="hover" <?php } ?> ><a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="xian" style="left: 0;"></div>
    </div>

    <div class="tab-box" style="display: block;">
        <div class="main">
            <div class="main-wrap">
                <div class="join-l">
                    <h1>2020</h1>
                    <b>中住地产招贤纳士</b>
                    <span>ZHONGZHU</span>
                    <p>
                        每一个品牌都有它的色彩，每一种色彩都有它独特的含义。说到中住地产，你想到的是什么颜色？黄色？金色？橘色？
                    </p>
                </div>
                <ul class="join-r">
                    <li>
                        <a href="#"><img src="<?php echo IMG_PATH;?>join2.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo IMG_PATH;?>join1.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo IMG_PATH;?>join3.png" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo IMG_PATH;?>join4.png" /></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>



</div>

</body>
<script src="<?php echo JS_PATH;?>jquery-1.min.js"></script>
<script src="<?php echo JS_PATH;?>swiper-bundle.min.js"></script>
<script src="<?php echo JS_PATH;?>nav.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // direction: 'vertical', // 垂直切换选项
        loop: true, // 循环模式选项

        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },
    })
</script>
<script>
    //房源选项卡
    $(document).ready(function() {
        function tab(i) {
            $(i).children().click(function() { //触发方式//click//mouseover
                $(this).siblings().removeClass();
                $(this).addClass('hover');
                $(this).parent().parent().siblings('.tab-box').hide();
                $(this).parent().parent().siblings('.tab-box').eq($(this).index()).show();
                console.log('index:'+$(this).index());
                if ($(this).index() == 0) {
                    $('.xian').animate({
                        left: '0px'
                    });
                } else if ($(this).index() == 1) {
                    {
                        $('.xian').animate({
                            left: '80px'
                        });
                    }
                } else if ($(this).index() == 2) {
                    {
                        $('.xian').animate({
                            left: '160px'
                        });
                    }
                } else if ($(this).index() == 3) {
                    {
                        $('.xian').animate({
                            left: '240px'
                        });
                    }
                }
            })
        }

        //tab调用
        $(function() {
            tab('.tab1')
            tab('.tab2')
            var url = location.href;
            var url_arr = url.split('?');
            console.log(url_arr);
            var tab_id = url_arr[1];
            $("#t_"+tab_id).click();
        })
        $(function() {
            $(".nav").click(function() {
                $(this).toggleClass("color").siblings().removeClass("color") //颜色
                $(this).next().slideToggle(500).siblings("ul").slideUp(500);
            })
        })
    });
</script>

<?php include template("content","footer"); ?>
<?php } else { ?>

<?php include template("content","header"); ?>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>contact-us.css" />
</head>
<style>
    .banner {
        float: left;
        width: 100%;
        height: 471px;
    }

    .swiper-slide {
        height: 471px;
    }

    .swiper-slide img {
        float: left;
        width: 100%;
        height: 100%;
    }

    .swiper-container-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        width: 200px;
    }

    .swiper-pagination-bullet-active {
        background: #fff;
    }
</style>
<body>
<!-- 轮播 -->
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner1.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner2.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner3.png" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="infor">
    <!-- <div class="infor-wrap"> -->
    <div class="crumbs">
        <div class="crumbs-wrap">
            <a href="about.html" class="zhu">中住地产</a>
            <a class="on">招贤纳士</a>
        </div>

    </div>

    <div class="infor-nav">
        <ul class="tab-nav tab1">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9b743ddbf76370179537cfe81738d760&action=category&catid=12&num=25&order=listorder+ASC&return=item\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$item = $content_tag->category(array('catid'=>'12','order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($item)) foreach($item AS $val) { ?>
            <li <?php if($val[catid] ==$catid ) { ?> class="hover" <?php } ?>><a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="xian" style="left: 0;"></div>
    </div>

    <div class="tab-box none" style="display: block;">
        <div class="main">
            <div class="main-wrap">
                <div class="contact-l">
                    <h1>济南中住房地产经纪有限公司</h1>
                    <h6>
                        ZHONG</br> ZHU
                    </h6>
                    <p class="p1"> <img src="<?php echo IMG_PATH;?>dianh.png" /> 400-869-9579 </p>
                    <p class="p1"> <img src="<?php echo IMG_PATH;?>dizh.png" /> www.jnhouse.com </p>
                    <p class="p1"> <img src="<?php echo IMG_PATH;?>weizh.png" /> 济南市历城区解放路30号东源大厦24层 </p>
                </div>
                <div class="contact-r">
                    <div class="map">

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</body>
<script src="<?php echo JS_PATH;?>jquery-1.min.js"></script>
<script src="<?php echo JS_PATH;?>swiper-bundle.min.js"></script>
<script src="<?php echo JS_PATH;?>nav.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // direction: 'vertical', // 垂直切换选项
        loop: true, // 循环模式选项

        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },
    })
</script>
<script>
    //房源选项卡
    $(document).ready(function() {
        function tab(i) {
            $(i).children().click(function() { //触发方式//click//mouseover
                $(this).siblings().removeClass();
                $(this).addClass('hover');
                $(this).parent().parent().siblings('.tab-box').hide();
                $(this).parent().parent().siblings('.tab-box').eq($(this).index()).show();
                console.log('index:'+$(this).index());
                if ($(this).index() == 0) {
                    $('.xian').animate({
                        left: '0px'
                    });
                } else if ($(this).index() == 1) {
                    {
                        $('.xian').animate({
                            left: '80px'
                        });
                    }
                } else if ($(this).index() == 2) {
                    {
                        $('.xian').animate({
                            left: '160px'
                        });
                    }
                } else if ($(this).index() == 3) {
                    {
                        $('.xian').animate({
                            left: '240px'
                        });
                    }
                }
            })
        }

        //tab调用
        $(function() {
            tab('.tab1')
            tab('.tab2')
            var url = location.href;
            var url_arr = url.split('?');
            console.log(url_arr);
            var tab_id = url_arr[1];
            $("#t_"+tab_id).click();
        })
        $(function() {
            $(".nav").click(function() {
                $(this).toggleClass("color").siblings().removeClass("color") //颜色
                $(this).next().slideToggle(500).siblings("ul").slideUp(500);
            })
        })
    });
</script>

<?php include template("content","footer"); ?>
<?php } ?>