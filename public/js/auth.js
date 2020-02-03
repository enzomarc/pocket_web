let selected = null;    // Selected shop
let user = null;
const API_ENDPOINT = "http://localhost:3000/api";

const logout = function () {
    sessionStorage.removeItem('user');
    sessionStorage.removeItem('shop');
    selected = null;
    location.replace('/login');
};

if (sessionStorage.getItem('user') == null) {
    logout();
} else {
    user = JSON.parse(sessionStorage.getItem('user'));
    const token = user.token;

    /* Check user existence */
    $.ajax({
        url: API_ENDPOINT + '/check/' + token,
        method: 'GET',
        success: (data) => {
            user = data.user;
            sessionStorage.removeItem('user');
            sessionStorage.setItem('user', JSON.stringify(user));
        },
        error: () => {
            logout();
        }
    });

    window.user = user;

    if (user.shops.length <= 0)
        logout();
    else {
        if (sessionStorage.getItem('shop') == null) {
            _.each(user.shops, (shop) => {
                if (shop.active)
                    selected = shop;
            });

            if (selected != null) {
                if (sessionStorage.getItem('shop') == null)
                    sessionStorage.setItem('shop', JSON.stringify(selected));
            } else {
                logout();
                flash("All your shops are disabled. Try contact your shop administrator.", 'warning');
            }
        } else {
            const selected_id = JSON.parse(sessionStorage.getItem('shop')).id;
            selected = _.where(user.shops, { id: selected_id })[0];
            selected.socials = JSON.parse(selected.socials);
            sessionStorage.removeItem('shop');
            sessionStorage.setItem('shop', JSON.stringify(selected));
        }
    }
}
