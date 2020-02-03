<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/ivy.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/toastr.min.css">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css">
    @yield('styles')
    <!-- Scripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/toastr.min.js"></script>
    <script src="/js/underscore.js"></script>
    <script src="/js/helpers.js"></script>
    <script src="/js/auth.js"></script>

    <title>Pocket - Dashboard</title>
</head>
<body>
    <div class="row" style="height: 100%">
        <div class="two columns menu">
            <div class="row account-info">
                <h5 class="xshopname">Pocket</h5>
                <span class="xusermail">support@pocket.com</span>
            </div>

            <div class="row menu-group">
                <ul>
                    <li>
                        <a href="{{ route('dashboard.start') }}"><i class="fa fa-globe"></i>Getting Started</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.home') }}"><i class="fa fa-home"></i>Home</a>
                    </li>
                </ul>
            </div>

            <div class="row menu-group">
                <span class="group-title">YOUR BUSINESS</span>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-credit-card"></i>Transactions</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-get-pocket"></i>Payouts</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-history"></i>Balance History</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flag-o"></i>Disputes</a>
                    </li>
                </ul>
            </div>

            <div class="row menu-group">
                <span class="group-title">YOUR CUSTOMERS</span>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-users"></i>Customers</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pie-chart"></i>Insights</a>
                    </li>
                </ul>
            </div>

            <div class="row menu-group">
                <span class="group-title">SELLER TOOLS</span>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-file-o"></i>Payments Pages</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i>Products</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-o"></i>Invoices</a>
                    </li>
                </ul>
            </div>

            <div class="row menu-group">
                <span class="group-title">SPLIT PAYMENTS</span>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-book"></i>Subaccounts</a>
                    </li>
                </ul>
            </div>

            <div class="row menu-group">
                <span class="group-title">RECURRING BILLING</span>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-filter"></i>Plans</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-refresh"></i>Subscriptions</a>
                    </li>
                </ul>
            </div>
            <hr>

            <div class="row menu-group">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-eye"></i>Audit Logs</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tasks"></i>Settings</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="ten columns content" style="width: 86.666667%;">
            <div class="row navbar">
                <ul>
                    <li>
                        <a href="">
                            <i class="fa fa-bell-o"></i>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="row container">
                @yield('content')
            </div>
        </div>
    </div>
<script>
    $('.xusermail').text(window.user.email);
    $('.xuserfirstname').text(window.user.first_name);
    $('.xuserlastname').text(window.user.last_name);
    $('.xuserphone').text(window.user.phone);
    $('.xshopname').text(selected.business_name);
    toastr.options.progressBar = true;
    toastr.options.closeButton = true;

    $('li.active').removeClass('active');

    const items = $('.menu ul li');

    _.each(items, (item) => {
        const str = item.children[0].textContent.toLowerCase();

        if (str === "{{ $page }}")
            item.classList.add('active');
    });

    $('.modal-close').click(function () {
        const modal = $(this)[0].dataset['modal'];
        close_modal(modal);
    });

    $('.modal-show').click(function () {
        const modal = $(this)[0].dataset['modal'];
        show_modal(modal);
    });
</script>
@yield('script')
</body>
</html>