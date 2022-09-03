$(function () {
    $('#dvd').css('display', 'none')
    $('#book').css('display', 'none')
    $('#furniture').css('display', 'none')
    $('#productType').on('click', function(e){
        e.preventDefault()
        let value = $('#productType').val()
        console.log(value);
        if($('#productType').val() === "1"){
                $('#dvd').css('display', 'flex')
                $('#book').css('display', 'none')
                $('#furniture').css('display', 'none')
            }else if($('#productType').val() === "2"){
                $('#dvd').css('display', 'none')
                $('#furniture').css('display', 'flex')
                $('#book').css('display', 'none')
            }else if($('#productType').val() === "3"){
                $('#dvd').css('display', 'none')
                $('#book').css('display', 'flex')
                $('#furniture').css('display', 'none')
            }else {
                $('#dvd').css('display', 'none')
                $('#book').css('display', 'none')
                $('#furniture').css('display', 'none')
            }
    })

})