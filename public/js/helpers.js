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