<style type="text/css">
    .checkout-info, .cart-summary { padding: 15px 0; border-bottom: 1px solid #E9E8E8; overflow: hidden; }

    .checkout-info h2 { font-size: 22px; font-weight: bold; border-bottom: 1px solid #E9E8E8; }

    .checkout-info h3 { font-size: 18px; font-weight: bold; }

    .checkout-info .sixcol { float: left; width: 40%; margin-right: 20px; }

    .checkout-info .last { margin-right: 0; }

    .output .row { padding: 5px 0; }

    .output label { float: left; width: 28%; line-height: 22px; }


    .output span { float: left; width: 70%; line-height: 22px; overflow: hidden; }

    .output input { float: left; width: 55%; }

    .output textarea { width: 95%; }

    .cart-summary { }

    .cart-summary h3 { line-height: 28px; font-size: 18px; font-weight: bold; }

    .cart-summary table { width: 100%; }

    table td { padding: 10px; border: 1px solid #E9E8E8; }

    table td.value { color: #f44747 !important; font-size: 140%; font-family: Georgia, "Times New Roman", Times, serif; font-style: italic; text-align: right; }

    table td input { width: 10%; }

    table td.bold { font-weight: bold; text-align: right; }

    .normal { margin-top: 20px; }

    .normal p { line-height: 1.6; margin: 0.7em 0; text-shadow: 0 1px #fff; }

    .add-info-cart { margin-top: 20px; }

    .add-info-cart label { font-weight: bold; font-size: 18px; }

    .add-info-cart .info { line-height: 20px; margin: 10px 0 0 10px; font-size: 14px; clear: both; }
    .contact { border-top: 1px solid #E9E8E8; padding: 10px 5px; }
    .contact .detail { margin-left: 20px; font-weight: bold; }
</style>


    <h2>Xác nhận đơn hàng</h2>

    <div class="cart-summary">
        <h3>Giỏ hàng của bạn</h3>
        <table>
            <thead>
                <tr>
                    <td>Tên</td>
                    <td>Giá</td>
                    <td>Số lượng / Update</td>
                    <td class="bold">Giảm giá</td>
                    <td class="value">Thành tiền</td>
                </tr>
            </thead>
            <tbody>
                <?php $valueItem = 0; ?>
                <?php foreach ($userCart as $cart) { ?>
                    <tr>
                        <td class="product-name"><?php echo $cart['name']; ?></td>
                        <td><?php echo Helper::formatNumber($cart['price']); ?></td>
                        <td><?php echo $cart['quantity']; ?></td>
                        <td class="bold"><?php echo $cart['formatValueDiscount']; ?></td>
                        <td class="value"><?php echo $cart['formatValueAfterDiscount']; ?></td>
                    </tr>
                    <?php $valueItem += $cart['valueAfterDiscount']; ?>
                <?php } ?>
                <tr>
                    <td colspan="4" style="text-align: right">Chi phí vận chuyển</td>
                    <td class="value"><?php echo Helper::formatNumber(Transport_Charge); ?></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right">Tổng tiền thanh toán</td>
                    <input type="hidden" class="total-value" value="<?php echo $valueItem + Transport_Charge; ?>" />
                    <td class="value total"><?php echo Helper::formatNumber($valueItem + Transport_Charge); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="checkout-info">
        <div class="sixcol billto">
            <h3>Bill To</h3>

            <div class="output">
                <div class="tab-content form clearfix">
                    <?php if (isset($billTo['username'])) { ?>
                        <div class="row">
                        <label>Tên truy cập</label>
                        <span><?php echo $billTo['username']; ?></span>
                    </div>
                    <?php } ?>

                    <div class="row">
                        <label>Email</label>
                        <span><?php echo $billTo['email']; ?></span>
                    </div>

                    <div class="row">
                        <label>Họ và tên</label>
                        <span><?php echo $billTo['full_name']; ?></span>
                    </div>

                    <div class="row">
                        <label>Điện thoại</label>
                        <span><?php echo $billTo['phone']; ?></span>
                    </div>

                    <div class="row">
                        <label>Địa chỉ</label>
                        <span><?php echo $billTo['address']; ?></span>
                    </div>

                    <div class="row">
                        <label>Mô tả</label>
                        <span><?php echo nl2br($billTo['description']); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sixcol shipto last">
            <h3>Ship To</h3>

            <div class="output">
                <div class="tab-content form clearfix">
                    <div class="row">
                        <label>Họ và tên</label>
                        <?php echo $shipTo['full_name'] ?>
                    </div>

                    <div class="row">
                        <label>Điện thoại</label>
                        <?php echo $shipTo['phone'] ?>
                    </div>

                    <div class="row">
                        <label>Địa chỉ</label>
                        <?php echo $shipTo['address'] ?>
                    </div>
                </div>

                <div class="row add-info-cart">
                    <label>Yêu cầu khác: </label>
                    <div class="clearfix"></div>
                    <div class="info"><?php echo nl2br($cartInfo); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="normal">
        <p>Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất để xác nhận đơn hàng này.</p><br />
        <p>Chúc bạn và gia đình có một ngày vui ve.</p>
        <p>Chân thành cám ơn đã mua hàng.</p>
        <div class="contact">
            <p>Mọi chi tiết, thắc mắc vui lòng liên hệ:</p>
            <p class="detail">ĐT: 0903.66.44.64</p>
            <p class="detail">Website: <a href="<?php echo Helper::url('/Shop/product/index'); ?>" title="Shop my pham han">http://shopmyphamhan.com</a></p>
        </div>
    </div>