let selected = null;    // Selected shop

const logout = function () {
    sessionStorage.removeItem('user');
    localStorage.removeItem('user');
    location.replace('/login');
};

if (sessionStorage.getItem('user') == null) {
    logout();
} else {
    const API_ENDPOINT = "http://192.168.8.104:3000/api";
    const user = JSON.parse(sessionStorage.getItem('user'));
    // const token = user.token; Check token to verify user
    const shops = user.shops;
    window.user = user;
    window.shops = shops;

    if (shops.length <= 0)
        logout();
    else {
        _.each(shops, (shop) => {
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
    }
}
