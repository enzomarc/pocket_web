// Flash message at page load
if (sessionStorage.getItem('flash') != null) {
    const flash = JSON.parse(sessionStorage.getItem('flash'));

    if (flash.type === "warning")
        toastr.warning(flash.message, 'Warning');
    else if (flash.type === "error")
        toastr.error(flash.message, 'Error');
    else if (flash.type === "success")
        toastr.success(flash.message, 'Success');
    else if (flash.type === "info")
        toastr.info(flash.message, "Information");

    sessionStorage.removeItem('flash');
}

// Flash new message
const flash = function (message, type) {
    sessionStorage.removeItem('flash');

    const msg = { type: type, message: message };
    sessionStorage.setItem('flash', JSON.stringify(msg));
};

const close_modal = function (modal) {
    $('#' + modal + ' .modal-container').slideUp(300);
    $('#' + modal).fadeOut(400);
};

const show_modal = function (modal) {
    $('#' + modal).fadeIn(300).css('display', 'flex');
    $('#' + modal + ' .modal-container').slideDown(400);
};

/**
 * Replace session user with the given user.
 *
 * @param user
 */
const replace_user = function (user) {
    sessionStorage.removeItem('user');
    sessionStorage.setItem('user', JSON.stringify(user));
};

/**
 * Replace session selected shop.
 *
 * @param shop
 */
const replace_shop = function (shop) {
    selected = shop;
    sessionStorage.removeItem('shop');
    sessionStorage.setItem('shop', JSON.stringify(shop));
};