
$('.submit-previous-form').click(function(e) {
                e.preventDefault();
                $($(this)).prev('form').submit();
});