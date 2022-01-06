/*
 * Prestafa
 *
 * */
$('document').ready(function(){

  $("#form_step2_specific_price_save").click(function() {
    var input = $('#specific_price_form input');
    input.each(function(){
      var value = $(this).val();

      if( value ){
        convertValue = persiamNumberToEnglish(value);

        if (convertValue != "" && $(this).parent().hasClass('datepicker')) {
          var dateArray = convertValue.split("-", 1);
          if (dateArray[0] < 1900) {
            convertValue = moment(convertValue, 'jYYYY-jMM-jDD').format('YYYY-MM-DD');
          }
        }

        $(this).val(convertValue);
      }

    });
  });

    if( typeof psf_plus_jalali_status !== 'undefined' && psf_plus_jalali_status == '1' )
    {
        var input = $('input.datepicker, input.datetimepicker, #calendar input.date-input,.datepicker input');
        window.formatPersian = false;

        input.closest("form").submit(function() {
            input.each(function(){
                var value = $(this).val();
                if( value !== '' && value !== '0000-00-00 00:00:00' && value !== '0000-00-00' ) {
                    var date = new DateJalali ( persiamNumberToEnglish(value) );
                    $(this).val( date.getDate() );
                }
            });


            localFilterDateProcess();
        });

        input.each(function(){
            var value = $(this).val();
            if( value !== '' && value !== '0000-00-00 00:00:00' && value !== '0000-00-00' ){
                var date = new DateJalali ( persiamNumberToEnglish(value) );
                $(this).val( date.getJalali() );
            }
        });

        localFilterDateProcess();

        $('.datepicker1,.datepicker2').each( function() {
            var date = new DateJalali ( $(this).data('date') );
            $(this).data('date', date.getJalali() );
        });
        $('#datepicker-from-info,#datepicker-to-info').each(function(){
            var date = new DateJalali ( $(this).html() );
            $(this).html(date.getJalali());
        });

        // Brithday Jalali
        if( $('select[name=years]').length )
        {
            synsBrithday.init();
            $('#customer_form').submit(function() {
                synsBrithday.setDateBrithdayNew();
            });
        }


    }
});


// TODO: REMOVED
// fixed bug
$(document).ready(function(){
    var isSubmitReset = false;
    $("[id^='local_']").each(function(){
        var local_id = $(this).attr('id');
        var local_name = local_id.substr('local_'.length);

        if( $("#" + local_name).val().toLowerCase() == "invalid date" ) {
            $("#" + local_name).val("");
            isSubmitReset = true;
        }
    });

    setTimeout(function(){
        if( isSubmitReset == true ) {
            $("[name^=submitReset]").click();
        }
    }, 500);
});
// fixed bug
// TODO: REMOVED

function localFilterDateProcess() {
    $("[id^='local_']").each(function(){
        var local_id = $(this).attr('id');
        var local_name = local_id.substr('local_'.length);
        var local_value = $(this).val();

        if( local_value ) {
            convertValue = moment(local_value, 'DD/MM/YYYY').format('YYYY-MM-DD');
            convertValue = persiamNumberToEnglish(convertValue);
            $("#" + local_name).val( convertValue );
        }
    });
}

function persiamNumberToEnglish(value) {
    if (!value) {
        return;
    }
    var arabicNumbers = ["١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩", "٠"],
        persianNumbers = ["۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹", "۰"];

    for (var i = 0, numbersLen = arabicNumbers.length; i < numbersLen; i++) {
        value = value.replace(new RegExp(arabicNumbers[i], "g"), persianNumbers[i]);
    }

    var persianNumbers = ["۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹", "۰"],
        englishNumbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    for (var i = 0, numbersLen = persianNumbers.length; i < numbersLen; i++) {
        value = value.replace(new RegExp(persianNumbers[i], "g"), englishNumbers[i]);
    }

    return value;
}


$(document).ready(function(){
    $('input[type="number"]').each(function() {
        $(this).val(persiamNumberToEnglish($(this).val()));
    });

    $('.js-btn-save,.product-footer #submit,#product_form_preview_btn').on('click', function (event) {
        $('input[name*="attribute_quantity"]').each(function() {
            $(this).val(persiamNumberToEnglish($(this).val()));
        });
    });
});
