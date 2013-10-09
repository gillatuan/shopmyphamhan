<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//VI" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language ?>" lang="<?php echo Yii::app()->language ?>">
<head>    <!-- Mobile viewport optimisation -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-language" content="<?php echo Yii::app()->language ?>"/>
    <title><?php echo $this->pageTitle; ?></title>
    <meta name="author" content="Bui Doan Ngoc Tuan" />
    <meta name="robots" content="index, follow, noarchive"/>
    <meta name='revisit-after' content='1 days'/>

    <link rel="canonical" href="<?php echo $this->canonicalUrl; ?>">
    <link rel="stylesheet" href="<?php echo Helper::themeUrl(); ?>/css/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo Helper::themeUrl(); ?>/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo Helper::themeUrl(); ?>/css/styleNivoSlider.css" type="text/css" media="screen"/>
    <!-- 1140px Grid styles for IE --><!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo Helper::themeUrl(); ?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
    <!-- The 1140px Grid - http://cssgrid.net/ -->
    <link rel="stylesheet" href="<?php echo Helper::themeUrl(); ?>/css/1140.css" type="text/css" media="screen" />
    <!-- Your styles  -->
    <link rel="stylesheet" href="<?php echo Helper::themeUrl(); ?>/css/form.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo Helper::themeUrl(); ?>/css/styles.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?php echo Yii::getPathOfAlias('webroot'); ?>/favicon.ico" type="image/x-icon" />
</head>
<body>
<div id="topNav">
    <div class="container clearfix">
        <div class="row">
            <div class="threecol floatleft logo">
                <h1><a href="<?php echo Helper::url('/Shop/product/index') ?>" title="shopmyphamhan.com">
                    <span class="voxenang">Shopmypham</span>
                    <span class="cacloai">han</span>
                    <span class="domain">.com</span>
                </a></h1>
            </div>
            <div class="ninecol floatright last">
                <ul class="menu">
                    <?php if (Helper::user()->isGuest) { ?>
                        <li><a href="<?php echo Helper::url('/site/login'); ?>" title="Đăng nhập">Đăng nhập</a></li>
                    <?php } else { ?>
                        <li><p>Welcome back, <a href="<?php echo Helper::url('/Shop/product/index'); ?>?r=Admin" title="Trang quản lý dành cho Admin"><span><?php echo ucfirst(Helper::user()->name); ?></span></a></p></li>
                        <li><a href="<?php echo Helper::url('/site/logout'); ?>" title="Thoát">Thoát</a></li>
                    <?php } ?>
                    <li><a href="<?php echo Helper::url('/Shop/product/faq'); ?>" title="Hỏi đáp">Hỏi đáp</a></li>
                    <li><a href="<?php echo Helper::url('/site/contact'); ?>" title="Liên hệ">Liên hệ</a></li>
                    <li><a class="yahoo" href="ymsgr:sendim?ngoctuan3010842003" title="Hỗ trợ Online"><img border=0 src="http://opi.yahoo.com/online?u=ngoctuan3010842003&m=g&t=2&l=us"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="header" class="topbottom-40">
    <div class="container">
        <div class="row overflow-visible">
             <ul class="twelvecol menu-categories">
                 <?php $this->widget('Shop.components.NavCategory', array(
                    'parent' => 0
                 )) ?>
                 <li><a href="<?php echo Helper::url('/Shop/product/readNews', array('newsAlias' => 'Giao-nhan-hang-hoa-xuat-nhap-khau')) ?>" title="Giao nhận hàng hoá xuất nhập khẩu"><span>Giao nhận hàng hoá xuất nhập khẩu</span></a></li>
            </ul>
        </div>
        <div class="row topbottom-20 bg-white">
            <div class="search sixcol">
                <div class="form">
                    <form id="searchform" name="searchform" method="get" action="<?php echo Helper::url('/Shop/product/search'); ?>">
                        <div class="row">
                            <label>Tìm kiếm</label>
                            <input type="text" name="kw" />
                        </div>
                        <div class="row buttons">
                            <input type="submit" value="Tìm kiếm" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="signs sixcol last">
                <a href="<?php echo Helper::url('/Shop/product/readNews', array('newsAlias' => 'Cam-ket-loi-ich-khi-mua-online')) ?> " title="Cam kết lợi ích khi mua online" class="online-useful">Cam kết lợi ích khi mua online</a>
                <a href="#" title="Sản phẩm chất lượng">
                    <img src="<?php echo Helper::themeUrl(); ?>/images/voxenangcacloai-cam-ket-dam-bao-san-pham-chat-luong.jpg" alt="Vỏ xe nâng Ngọc Thanh đảm bảo sản phẩm chất lượng" /></a>
            </div>
        </div>
    </div>
</div>

<div id="wrapper">
    <div class="container">
        <!--Slider-->
        <?php if (Yii::app()->controller->id == 'product' && Yii::app()->controller->action->id == 'index') { ?>
            <div class="row">
                <div class="sevencol slider-wrapper theme-default">
                    <?php $this->widget('Shop.components.BannersModule', array(
                        'position' => 1,
                        'page' => 1
                    )) ?>
                </div>
                <div class="fivecol last">
                    <?php $this->widget('Shop.components.VideoYoutube', array(
                        'isOnIndex' => 1
                    )); ?>
                </div>
            </div>
        <?php } ?>

        <!-- Cart -->
        <div class="row bottom-20 cart-info">
            <div class="cart sevencol last">
                <?php
                $amountProducts = Cart::hasCookie('amountProducts') ? 'Bạn có ' . Cart::getCookie('amountProducts') . ' sản phẩm trong giỏ hàng.' : 'Giỏ hàng'; ?>
                <a href="<?php echo Helper::url('/Shop/product/viewCart'); ?>" title="<?php echo $amountProducts; ?>" class="your-cart"><?php echo $amountProducts; ?>
                    <img src="<?php echo Helper::themeUrl(); ?>/images/voxenangcacloai-gio-hang.gif" alt="vỏ xe nâng các loại giỏ hàng">
                </a>
            </div>
        </div>

        <!--Products in Category-->
        <div class="row content">
            <?php echo $content; ?>
        </div>

        <div class="row">
            <div class="quickLinks twelvecol">
                <h2>Giới Thiệu - Tin Tức - Tin Thông Báo - Tin Khuyến Mãi</h2>
                <?php $this->widget('Shop.components.SomeNews'); ?>
            </div>
        </div>
    </div>
</div>

<a href="#" class="scrollup" title="Scroll" style="display: none;">Scroll</a>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="time-activity fourcol">
                <h3>THỜI GIAN BÁN HÀNG:</h3>
                <p><strong>8h sáng - 18h tối</strong>.(Từ Thứ 2 - Chủ Nhật)</p>
            </div>
            <div class="copyright fourcol">
                <h3>BẢN QUYỀN THUỘC CTY TNHH VỎ MÂM XE NÂNG NGỌC THANH.</h3>
                <p>Địa chỉ: Số 3 Bùi Tư Toàn F.An Lạc Q.Bình Tân</p>
                <p>Email: <a href="mailto:tuan.buidoanngoc@gmail.com">tuan.buidoanngoc@gmail.com</a></p>
                <p>All Rights Reserved. Designed by <a href="http://web3in1.com" title="Web3in1.com">Web3in1.com</a></p>
            </div>
            <div class="pttt fourcol last">
                <h3>Phương thức thanh toán:</h3>
                <p><img src="<?php echo Helper::themeUrl(); ?>/images/payment-methods.png" border="0" alt="payment-methods.png"></p>
            </div>
        </div>
    </div>
</div>

<div id="nav-fixed">
    <ul class="twelvecol">
        <li class="threecol last">
            <form action="<?php echo Helper::url('/site/sendToFriend') ?>" method="post">
                <input type="text" name="send-mail-to-friend" onfocus="if(this.value=='Gửi email cho bạn bè') this.value='';" onblur="if(this.value=='') this.value='Gửi email cho bạn bè';" value="Gửi email cho bạn bè"> |
                <input type="submit" value="Gửi">
            </form>
        </li>
        <li class="hot-products twocol last"><a href="#" title="Hot product">Hot Products</a></li>
        <li class="hot-line threecol last"><p>Hot line: <span>0903.66.44.64</span></p></li>
        <li class="nav-social floatright fourcol last">
            <?php $url = Yii::app()->createAbsoluteUrl(Yii::app()->request->requestUri); ?>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank" title="Facebook social">
                <img class="footer_social" src="<?php echo Helper::themeUrl(); ?>/images/facebook_24.png" border="0" alt="facebook social" />
            </a>
            <a href="https://twitter.com/share?url=<?php echo $url; ?>" title="Twitter social">
                <img class="footer_social" src="<?php echo Helper::themeUrl(); ?>/images/twitter_24.png" border="0" alt="twitter social" />
            </a>
            <a href="https://plus.google.com/share?url=<?php echo $url; ?>" title="Google Plus social" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                <img src="https://www.gstatic.com/images/icons/gplus-32.png" alt="Share on Google+" />
            </a>
            <!--<a class="" title="Pinterest social">
                <img class="footer_social" src="<?php /*echo Helper::themeUrl(); */?>/images/stumble_24.png" border="0" alt="Pinterest social" />
            </a>
            <a class="" title="More social">
                <img class="footer_social" src="<?php /*echo Helper::themeUrl(); */?>/images/blogger_24.png" border="0" alt="More social" />
            </a>-->
        </li>
    </ul>
</div>

<?php Helper::cs()->registerCoreScript('jquery'); ?>
<?php Helper::cs()->registerCoreScript('jquery.ui'); ?>
<?php Helper::cs()->registerScriptFile(Helper::themeUrl() . '/js/imgLiquid-min.js', CClientScript::POS_END); ?>
<?php Helper::cs()->registerScriptFile(Helper::themeUrl() . '/js/css3-mediaqueries.js', CClientScript::POS_END); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32319582-2', 'vomamxenang.com');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
    $(function() {
        /* scroll to top*/
        $(window).scroll(function(){
            if ($(this).scrollTop() > 300) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    })
    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(window);

        $window.scroll(function (e) {
            if ($window.scrollTop() > pos) {
                $this.css({
                    width: '8%',
                    position: 'fixed',
                    top: 0,
                    left: 0,
                    size: '27px',
                    align: 'center'
                });
            } else {
                $this.css({
                    width: '54%',
                    position: 'relative',
                    top: 0,
                    size: '35px',
                    align: 'center'
                });
            }
        });
    };

    $('.cart').followTo(350);
</script>
<script type="text/javascript">
    $(function() {
        $(".add-cart").click(function() {
            var url = "<?php echo Helper::url('/Shop/product/updateOrDeleteCart'); ?>";
            var $this = $(this);
            var productAlias = $this.attr("id").replace("id-", "");

            param = {
                category: "<?php echo Helper::get('category'); ?>",
                alias: productAlias,
                quantity: 1,
                valueBefore: 0,
                totalValueBefore: 0,
                type: "addCart"
            };

            processAjax(url, param, $this, productAlias, "addCart");

            return false;
        })
    })

    function processAjax(url, param, objectThis, alias, typeCart) {
        $(".addcart-success").show().html('<img src="<?php echo Helper::themeUrl(); ?>/images/loading.gif" alt="loading image" />');
        $.ajax({
            url: url,
            type: "post",
            data: param,
            success: function(data){
                var decodeData = jQuery.parseJSON(data);

                if (typeCart != "delOneCart" && param.quantity > 0) {
                    $.each( decodeData, function( key, dataCart ) {
                        if (dataCart.alias == alias) {
                            if($(".your-cart").text() == "Cart Empty") {
                                $(".your-cart").text("Bạn có 1 Sản phẩm trong giỏ hàng.");
                            } else {
                                $(".your-cart").text("Bạn có " + dataCart.amountProductsInCart + " Sản phẩm trong giỏ hàng.");
                            }

                            if (typeCart == "updateCart") {
                                $(".addcart-success").html("Bạn đã cập nhật sản phẩm " + dataCart.name + " với số lượng " + dataCart.quantity + " vào giỏ hàng.");

                                objectThis.parent().find(".product-value").val(dataCart.valueAfterDiscount);
                                $("#id-" + alias).parent().parent().find(".value").text(dataCart.formatValueAfterDiscount);
                                $("#id-" + alias).parent().parent().find(".bold").text(dataCart.formatValueDiscount);

                                if ($("tbody .bold").text() == "") {
                                    $("table tbody").html("<tr><td colspan=5>Không có bất kỳ sản phẩm nào trong giỏ hàng của bạn cả.</td></tr>")
                                } else {
                                    $(".total-value").val(dataCart.totalValueAfterDiscount)
                                    $(".total").text(dataCart.formatTotalValueAfterDiscount);
                                }
                            } else {
                                $(".addcart-success").html("Bạn đã thêm sản phẩm " + dataCart.name + " với số lượng " + dataCart.quantity + " vào giỏ hàng.");
                            }
                        }
                    });
                } else if (typeCart == "delOneCart" || param.quantity == 0) {
                    objectThis.parent().parent().remove();

                    if ($("tbody .bold").text() == "") {
                        $("table tbody").html("<tr><td colspan=5>Không có bất kỳ sản phẩm nào trong giỏ hàng của bạn cả.</td></tr>");
                        $(".your-cart").text("Giỏ hàng rỗng.");
                    } else {
                        $(".total-value").val(decodeData[1])
                        $(".total").text(decodeData[2]);
                        $(".your-cart").text("Bạn còn " + (decodeData[3]) + " Sản phẩm trong giỏ hàng.");
                    }
                    $(".addcart-success").html("Bạn đã xóa sản phẩm " + objectThis.parent().parent().find(".product-name").text() + " thành công.");
                }
                setTimeout(function() { $(".addcart-success").fadeOut("slow"); }, 3000);

                return false;
            }
        });
    }
</script>
</body>
</html>