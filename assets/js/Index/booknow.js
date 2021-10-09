'use strict';

$(document).ready(function()
{
    $('[name="tour"]').parent().parent().find('img').attr('src', $('[name="tour"]').find('[value="' + $('[name="tour"]').val() + '"]').data('image'));

    $('[name="tour"]').on('change', function()
    {
        window.location.href = $(this).find('[value="' + $(this).val() + '"]').data('url');
    });

    $('form[name="booknow"]').on('submit', function(e)
    {
        e.preventDefault();

        var form = $(this);

        $.ajax({
            type: 'POST',
            data: form.serialize(),
            processData: false,
            cache: false,
            dataType: 'json',
            success: function(response)
            {
                if (response.status == 'success')
                {
                    alert(response.message);

                    location.reload();
                }
                else if (response.status == 'error')
                {
                    var errors = '';

                    for (var i = 0; i < response.errors.length; i++)
                        errors = errors + response.errors[i] + ' - ';

                    alert(errors);
                }
            }
        });
    });
});
