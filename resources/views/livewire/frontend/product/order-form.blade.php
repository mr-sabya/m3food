<div>
    <form wire:submit.prevent='save' method="POST" id="orderForm" class="order-form">
        <input type="hidden" name="_token" value="RM7tgLz4usrFi7dLT76Xu0wkBNvJDjNGa7MDQaoo" autocomplete="off">
        <div wire:loading class="wireload">
            <div wire:loading class="wireload">
                <div class="loadingArea pl-255">
                    <div class="gif ">
                        <div class="loadingio-spinner-spinner-u1p1v8rtcya">
                            <div class="ldio-fxjucai2sr7">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <legend>
            <span class="red">“3 Mithai Combo”</span>
            নেয়ার জন্য, নিচের ফর্মটি সম্পূর্ণ পূরণ করুন
        </legend>

        <div class="form-content text-start">
            <div class="row row-cols-1 row-cols-md-2 gx-3 gy-2">
                <div class="left">
                    <div class="left d-md-none">
                        <h3 class="title text-start">3 Mithai Combo</h3>
                        <!--[if BLOCK]><![endif]-->
                        <div class="d-inline-block me-2">
                            <input wire:model.live='attribute_id' value="134"
                                id="attr134" type="radio">
                            <label class="m-0" for="attr134">
                                3.8 Kg
                            </label>
                        </div>
                        <!--[if ENDBLOCK]><![endif]-->
                        <div class="option">
                            <div class="qty">
                                QTY<span class="pcs">(pcs)</span>
                            </div>
                            <div class="input">
                                <div class="input-group ">
                                    <button wire:click='updateQuantity(-1)' id="sub" class="input-group-text"
                                        type="button">
                                        <span class="material-icons-outlined">
                                            remove
                                        </span>
                                    </button>
                                    <input type="text" wire:model='quantity' name="quantity" class="form-control"
                                        id="quantity">
                                    <button wire:click='updateQuantity(1)' id="add" class="input-group-text"
                                        type="button">
                                        <span class="material-icons-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>
                    </div>

                    <div class="billing">Billing</div>
                    <div class="form">
                        <div class="form-group">
                            <label for="">নাম (Name)*</label>
                            <input wire:model='name' type="text" name="name"
                                class="form-control ">
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="form-group">
                            <label for="">মোবাইল নাম্বার (Mobile No)*</label>
                            <input wire:model='billing_phone' type="text" name="billing_phone" pattern="^0\d{8,11}$"
                                title="বাংলাদেশের ফোন নম্বর লিখুন, 0xxxxxxxxxx এই ফরম্যাটে"
                                class="form-control ">
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                            <small class="text-dark">মোবাইল নম্বরটি অবশ্যই শূন্য থেকে শুরু হবে</small>
                        </div>
                        <div class="form-group">
                            <strong> <label for="">শিপিং এরিয়া (Shipping Area)</label>
                            </strong>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="1" wire:model.live='city'
                                        id="dhakaCity">
                                    <label class="form-check-label text-dark" for="dhakaCity">
                                        ঢাকা জেলা মধ্যে (In Dhaka District)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="2" wire:model.live='city'
                                        id="otherCity">
                                    <label class="form-check-label text-dark" for="otherCity">
                                        ঢাকা জেলা বাইরে (Outside of Dhaka District)
                                    </label>
                                </div>
                            </div>
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div class="form-group">
                            <label for="">ডেলিভারি ঠিকানা (Delivery Address)*</label>
                            <textarea wire:model='delivery_location' name="address" rows="2"
                                class="form-control "></textarea>
                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="right">
                            <button wire:loading.attr='disabled' class="btn submit-btn bg-danger">
                                Place Order
                                Tk1,700
                            </button>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="left d-none d-md-block">
                        <h3 class="title text-start">3 Mithai Combo </h3>
                        <!--[if BLOCK]><![endif]-->
                        <div class="d-inline-block me-2">
                            <input wire:model.live='attribute_id' value="134"
                                id="attr134" type="radio">
                            <label class="m-0" for="attr134">
                                <!--[if BLOCK]><![endif]--> 3.8 KG
                                <!--[if ENDBLOCK]><![endif]-->
                            </label>
                        </div>
                        <!--[if ENDBLOCK]><![endif]-->

                        <div class="option option row m-0 py-2">

                            <div class="input col-9 p-0">
                                <div class="input-group ">
                                    <button wire:click='updateQuantity(-1)' id="sub" class="input-group-text"
                                        type="button">
                                        <span class="material-icons-outlined">
                                            remove
                                        </span>
                                    </button>
                                    <input type="text" wire:model='quantity' name="quantity" class="form-control"
                                        id="quantity">
                                    <button wire:click='updateQuantity(1)' id="add" class="input-group-text"
                                        type="button">
                                        <span class="material-icons-outlined">
                                            add
                                        </span>
                                    </button>
                                </div>
                                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                            </div>
                            <div class="qty col-3" style=" line-height: 34px; margin: 0; ">
                                QTY<span class="pcs">(pcs)</span>
                            </div>
                        </div>
                    </div>
                    <div class="product content-section">
                        <table class="w-100">
                            <tr>
                                <td width="50">
                                    <!--[if BLOCK]><![endif]--> <img class="w-100" class="banner-img"
                                        src="https://naturobd.com/storage/VgstxdCgcBner2YeZCPWa8oCqowWNCFWQCrCB58o.jpg" alt="" loading="lazy">
                                    <!--[if ENDBLOCK]><![endif]-->
                                </td>
                                <td>
                                    <div class="ps-2">
                                        <div class="name">
                                            3 Mithai Combo
                                        </div>
                                        <div class="tag">
                                            <!--[if BLOCK]><![endif]--> 3.8 KG
                                            <!--[if ENDBLOCK]><![endif]-->

                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    &times;
                                </td>
                                <td width="20" id="quantity-label" class="text-center">
                                    1
                                </td>
                                <td width="100" id="total-price" class="total-price text-end">

                                    Tk<strong class="">
                                        1650
                                    </strong>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="content-section vat">
                        <div class="d-flex justify-content-between top">
                            <span>Shipping Cost</span>
                            <span>Tk50</span>
                        </div>
                        <div class="d-flex justify-content-between total">
                            <span>Subtotal</span>
                            <span class="product-price">Tk1,700
                            </span>
                        </div>
                    </div>

                    <div class="content-section payment">
                        <div class="d-flex align-items-center head">
                            <span class="material-icons-outlined">
                                paid
                            </span>
                            Payment Type
                        </div>

                        <div>
                            <div class="d-flex align-items-start">
                                <input type="radio" checked name="delivery-area" class="form-check-input me-2"
                                    id="cashOnDelivery">
                                <div>
                                    <label class="label m-0" for="cashOnDelivery">
                                        Cash On Delivery
                                    </label>
                                    <div class="tagline">
                                        Pay with cash upon delivery.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

        </div>

    </form>

</div>