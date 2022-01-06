<div class="container-fluid m-auto">
    <div class="row col-12 bg-info">
        <div class="iconSvg">{!! ($svg->book())!!} </div><div class="float-left h3">آخرین کتاب ها</div>
    </div>
    <i class="clearfix"></i>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-2">
            <div class="card m-4" style="width:13rem">
                <a href="#"><img class="card-img-top" src="/upload/images/adverse/MR_1.jpg" width="200" height="150"></a>
                <div class="card-body">
                    <a href=""><p class="text-center">ذخيره فيلم هاي ويديو يي و ويرايش اوليه آنها</p></a>
                    <a class="btn btn-primary btn-block" href="#"><del>100000</del> تومان</a>
                    <a class="btn btn-warning btn-block" href="http://raisiardal.irsingle/ذخيره-فيلم-هاي-ويديو-يي-و-ويرايش-اوليه-آنها">85000 تومان </a>
                    <span>افزودن به سبد خرید</span>
                    <form action="http://raisiardal.ir/user/bookCart" method="post" class="text-right mr-5 mb-3">
                        <input type="hidden" name="_token" value="bl1hR7zsAUVb0HpRN96Mo0m5fDMpq7xLbt6kIFfN">
                        <input type="hidden" class="hidden" name="user_id" value="0">
                        <input type="hidden" class="hidden" name="book_id" value="16">

                        <button type="submit" class="btn btn-outline-primary">
                            <div class="iconSvg">
                                {!! ($svg->shoppingCart())!!}

                            </div>

                        </button>
                    </form>

                    <div class="card-footer text-center" style="font-size:10px;">(۱ ساعت و ۱۰ دقیقه)</div>
                </div>

            </div>
        </div>

    </div>
</div>
