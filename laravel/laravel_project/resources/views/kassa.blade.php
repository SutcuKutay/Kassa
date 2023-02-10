@extends('layout.app')

@section('title')
    Kassa
@endsection

@section('section')
    <div class="section-left">
        <div class="textbox-div">
            <img src="assets/img/icons/section/textbox/search.png" alt="" width="15" height="15"
                class="margin-left margin-right-5">
            <input type="text" placeholder="Zoeken..." class="section-textbox">
            <img src="assets/img/icons/section/textbox/cross.png" alt="" width="15" height="15"
                class="margin-right">
        </div>
        <div class="section-pizza-div">
            <div class="pizza orange">
                <p>Pizza</p>
            </div>
            <div class="pizza pink">
                <p>Pizza</p>
            </div>
            <div class="pizza brown">
                <p>Pizza</p>
            </div>
            <div class="pizza green">
                <p>Pizza</p>
            </div>
            <div class="pizza blue">
                <p>Pizza</p>
            </div>
            <div class="pizza dark-blue">
                <p>Pizza</p>
            </div>
            <div class="pizza light-orange">
                <p>Pizza</p>
            </div>
        </div>
    </div>
    <div class="section-right">
        <div class="section-table-div">
            <div class="table-header">
                <img src="assets/img/icons/section/table/bag.png" alt="" width="27" height="27">
                <p>Producten</p>
            </div>
            <div class="table-body">
                <div class="table-body-contents">
                    <div class="table-body-contents-first">
                        <img src="assets/img/icons/section/table/plus.png" alt="" width="20" height="20">
                        <p>Klant toevoegen</p>
                    </div>
                    <div class="table-body-contents-second">
                        <div class="contents-second-twin-buttons-div">
                            <button class="contents-second-buttons" type="button" title="Contant" onclick="">
                                <p>Contant</p>
                            </button>
                            <button class="contents-second-buttons" type="button" title="PIN">
                                <p>PIN</p>
                            </button>
                        </div>
                        <div class="contents-second-twin-buttons-div">
                            <button class="contents-second-buttons" type="button" title="iDealQR" onclick="">
                                <p>iDealQR</p>
                            </button>
                            <button class="contents-second-buttons" type="button" title="iDealSMS">
                                <p>iDealSMS</p>
                            </button>
                        </div>
                        <button class="contents-second-buttons" type="button" title="Contant/PIN" onclick="">
                            <p>Contant/PIN</p>
                        </button>
                    </div>
                    <hr>
                    <div class="table-body-contents-third">
                        <button type="button" title="product">
                            <img src="assets/img/icons/section/table/aangepast-product.png" alt="" width="15"
                                height="15">
                            <p>Aangepast product</p>
                        </button>
                        <button type="button" title="korting">
                            <img src="assets/img/icons/section/table/aangepaste-korting.png" alt="" width="15"
                                height="15">
                            <p>Aangepast korting</p>
                        </button>
                        <button type="button" title="Fooi">
                            <img src="assets/img/icons/section/table/euro.png" alt="" width="15" height="15">
                            <p>Fooi</p>
                        </button>
                    </div>
                    <hr>
                    <button class="table-body-contents-fourth">
                        <p>Betalen</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
