/*
 * Prestafa
 *
 * */
$(document).ready(function(){
    $('body').one('click', '#account-creation_form select[name=years]', function(){
        setBirthdayPS16();
    });

    // Brithday Jalali
    if( $('select[name=years]').length ) {
        setBirthdayPS16();
    }


    // Brithday Jalali
    if( $('input[name=birthday]').length )
    {
        synsBrithday.newInit();
        $("button[type='submit']").closest("form").submit(function() {
            synsBrithday.newSetDateBrithdayNew();
        });

        $("button[type='submit']").closest("form").submit(function() {
            synsBrithday.newSetDateBrithdayNew();
        });
    }
});


function setBirthdayPS16(){
    synsBrithday.init();
    $("button[name=submitIdentity]").closest("form").submit(function() {
        synsBrithday.setDateBrithdayNew();
    });

    $("button[name=submitAccount]").closest("form").submit(function() {
        synsBrithday.setDateBrithdayNew();
    });
}
