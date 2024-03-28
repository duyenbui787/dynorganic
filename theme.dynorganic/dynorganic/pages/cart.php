<div class="main-content-wp" id="cart-page">
    <div class="container">
        <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <ul class="breadcrumb">
                    <li>
                        <a href="" class="breadcrumb-item active">Giỏ hàng</a>
                    </li>
                    <li><i class="fa-solid fa-angle-right icon-breadcrumb"></i></li>
                    <li><a href="" class="breadcrumb-item">Thanh toán</a></li>
                    <li><i class="fa-solid fa-angle-right icon-breadcrumb"></i></li>
                    <li><a href="" class="breadcrumb-item">Hoàn thành đơn hàng</a></li>
                </ul>
            </div>
        </div>
        <div class="section" id="info-cart-wp">
            <div class="section-detail">
                <div class="row">
                    <div class="cart-table col-lg-7">
                        <table class="shop-table">
                            <thead>
                                <tr>
                                    <th class="product-name product-name-1" colspan="3">Sản phẩm</th>
                                    <th class="product-name product-name-2 d-sm-none" colspan="2">Sản phẩm</th>
                                    <th class="product-price d-none d-sm-block">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="subtotal">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-item">
                                    <td class="remove"><a href="">x</a></td>
                                    <td class="product-thumb">
                                        <a href=""><img src="public/img/product/img-1.png" alt=""></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="">Omega từ tảo Sunwarrior Vegan DHA & EPA</a>
                                    </td>
                                    <td class="product-price"><a>990.000đ</a></td>
                                    <td class="product-quantity">
                                        <input type="button" class="minus-btn" value="-">
                                        <input type="text" name="num-order" value="1" id="num-order" min="1" max="10">
                                        <input type="button" class="plus-btn" value="+">
                                    </td>
                                    <td class="subtotal">990.000đ</td>
                                </tr>
                                <tr class="cart-item">
                                    <td class="remove"><a href="">x</a></td>
                                    <td class="product-thumb">
                                        <a href=""><img src="public/img/product/img-2.png" alt=""></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="">Bột hỗn hợp thực vật giúp đẹp da</a>
                                    </td>
                                    <td class="product-price">1.000.000đ</td>
                                    <td class="product-quantity">
                                        <input type="button" class="minus-btn" value="-">
                                        <input type="text" name="num-order" value="1" id="num-order" min="1" max="10">
                                        <input type="button" class="plus-btn" value="+">
                                    </td>
                                    <td class="subtotal">1.000.000đ</td>
                                </tr>
                                <tr class="actions-wp">
                                    <td class="actions " colspan="6">
                                        <div class="continue-shopping">
                                            <a href="?page=home">
                                                <i class="fa-solid fa-arrow-left-long"></i>
                                                Tiếp tục xem sản phẩm
                                            </a>
                                        </div>
                                        <div class="update-cart">
                                            <input type="submit" class="button" name="update-cart"
                                                value="Cập nhật giỏ hàng">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end cart-table -->
                    <div class="cart-collaterals col-lg-5">
                        <div class="coupon-wp">
                            <input type="text" name="coupon-code" class="input-text" id="coupon-code"
                                placeholder="Mã giảm giá">
                            <input type="submit" name="apply-coupon" value="Áp dụng mã giảm giá" id="apply-coupon">
                        </div>

                        <div class="cart-totals">
                            <table cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-name" colspan="2">Cộng giỏ hàng</th>
                                    </tr>
                                </thead>
                            </table>
                            <table>
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Tạm tính</th>
                                        <td>
                                            <span class="price-amount">1.990.000đ</span>
                                        </td>
                                    </tr>
                                    <tr class="shipping-total">
                                        <th>Phí vận chuyển</th>
                                        <td><span class="price-amount">20.000đ</span></td>

                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng</th>
                                        <td><span class="price-amount">2.010.000đ</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="proceed-to-checkout">
                                <a href="?page=checkout" class="checkout-btn">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                    <!-- end cart-collaterals -->
                </div>
            </div>

        </div>
    </div>
</div>