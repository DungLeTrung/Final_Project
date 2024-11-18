
function showVanillaToast(content, type) {
    VanillaToasts.create({
        title: type === 'success' ? 'Success' : 'Error',
        text: content,
        type: type,
        timeout: 3000
    });
}

function formValidAjax(xhr) {
    const response = xhr.responseJSON;
    const message = response && response.message ? response.message : 'An error occurred. Please try again.';

    showVanillaToast(message, 'error');
    if (response && response.errors) {
        $.each(response.errors, function (field, errors) {
            const errorElement = $(`#${field}-error`);
            if (errorElement.length) {
                errorElement.show().text(errors[0]);
            }
        });
    }
}
