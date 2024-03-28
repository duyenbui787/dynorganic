<div class="main-content-wp" id="checkout-page">
    <div class="container">
        <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <ul class="breadcrumb">
                    <li>
                        <a href="" class="breadcrumb-item">Giỏ hàng</a>
                    </li>
                    <li><i class="fa-solid fa-angle-right icon-breadcrumb"></i></li>
                    <li><a href="" class="breadcrumb-item active">Thanh toán</a></li>
                    <li><i class="fa-solid fa-angle-right icon-breadcrumb"></i></li>
                    <li><a href="" class="breadcrumb-item">Hoàn thành đơn hàng</a></li>
                </ul>
            </div>
        </div>
        <div id="checkout-wp">
            <div class="row">
                <div class="section col-md-7" id="customer-detail">
                    <div id="customer-detail-inner">
                        <div class="section-head">
                            <h4 class="title">Thông tin đặt hàng</h4>
                        </div>
                        <div class="section-detail">
                            <form action="" name="form-checkout" class="form-checkout">
                                <div class="form-row">
                                    <div class="form-col">
                                        <label for="lastname">Họ <span class="required">*</span></label>
                                        <input type="text" name="lastname" id="lastname" placeholder="Họ">
                                    </div>
                                    <div class="form-col">
                                        <label for="name">Tên <span class="required">*</span></label>
                                        <input type="text" name="name" id="name" placeholder="Tên">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-col">
                                        <label for="province">Tỉnh thành <span class="required">*</span></label>
                                        <input type="text" name="province" id="province" placeholder="Tỉnh thành">
                                    </div>
                                    <div class="form-col">
                                        <label for="wards">Phường xã <span class="required">*</span></label>
                                        <input type="text" name="wards" id="wards" placeholder="Phường xã">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-col">
                                        <label for="address">Địa chỉ <span class="required">*</span></label>
                                        <input type="text" name="address" id="address" placeholder="Địa chỉ">
                                    </div>
                                    <div class="form-col">
                                        <label for="phone">Số điện thoại <span class="required">*</span></label>
                                        <input type="tel" name="phone" id="phone" placeholder="Số điện thoại">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-col">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="email" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-col note">
                                        <label for="note">Ghi chú đơn hàng <span class="required">*</span></label>
                                        <textarea name="note" id="" cols="80"
                                            placeholder="Ghi chú về đơn hàng"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end customer-detail -->
                <div class="section col-md-5" id="customer-order">
                    <div id="customer-order-inner">
                        <div class="section-head">
                            <h4 class="title">Đơn hàng của bạn</h4>
                        </div>
                        <div class="section-detail">
                            <table class="shop-table-checkout">
                                <thead>
                                    <tr>
                                        <th class="product-">Sản phẩm</th>
                                        <th class="product-total text-right">Tạm tính</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart-item">
                                        <td class="product-name">Omega từ tảo Sunwarrior Vegan DHA & EPA <span
                                                class="quantity">x1 </span></td>
                                        <td class="product-total text-right">990.000đ</td>
                                    </tr>
                                    <tr class="cart-item">
                                        <td class="product-name">Omega từ tảo Sunwarrior Vegan DHA & EPA <span
                                                class="quantity">x1 </span></td>
                                        <td class="product-total text-right">990.000đ</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Tạm tính</th>
                                        <td class="text-right">
                                            <span class="price-amount">1.990.000đ</span>
                                        </td>
                                    </tr>
                                    <tr class="shipping-total">
                                        <th>Vận chuyển</th>
                                        <td class="text-right"><span class="price-amount">20.000đ</span></td>

                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng</th>
                                        <td class="text-right"><span class="price-amount">2.010.000đ</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- end shop-table-checkout -->
                            <div class="checkout-payment-wp">
                                <ul class="payment-methods">
                                    <li class="payment-method-cod" style="margin-bottom: 16px;">
                                        <input type="radio" id="payment-method-cod" class="input-radio"
                                            name="payment-method" value="cod" checked="checked">
                                        <label for="payment-method-cod">Thanh toán khi nhận hàng (COD)</label>
                                    </li>
                                    <li class="payment-method-bacs">
                                        <input type="radio" id="payment-method-bacs" class="input-radio"
                                            name="payment-method" value="bacs">
                                        <label for="payment-method-bacs">Chuyển khoản ngân hàng / Ví điện tử</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- end checkout-payment -->
                            <div class="place-order">
                                <div class="terms-and-conditions-wp">
                                    <div class="form-row validate-required">
                                        <input type="checkbox" class="input-checkbox" id="terms" name="terms">
                                        <label for="">Tôi đã đọc và đồng ý với <a href="">điều khoản và điều kiện</a>
                                            của website <span class="required">*</span></label>
                                    </div>
                                </div>
                                <div class="order-now-wp">
                                    <a href="?page=checkout_success">

                                        <input type="submit" id="order-now" value="Đặt hàng" class="button">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>