@extends('layouts.dashboard')

@section('content')
    <div class="row" style="background-color: #fff; padding: 20px">
        <div class="six columns left" style="align-items: center;">
            <span>Search for customers</span>
        </div>
        <div class="six columns right">
            <button style="margin: 0" class="button-success size-sm modal-show" data-modal="add_customer_modal"><i class="fa fa-plus"></i>&nbsp; Add customer</button>
            <button style="margin: 0 0 0 5px" class="button-success size-sm">Export CSV</button>
        </div>
    </div>

    <div class="row container">
        <table class="u-full-width hovered" id="customers_table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full name</th>
                    <th>Customer email</th>
                    <th>Customer phone</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cersei Lanister</td>
                    <td>seilanister@westeros.com</td>
                    <td>6989797785</td>
                    <td><span class="badge badge-error">Failed</span></td>
                    <td>
                        <button class="size-xs button-primary"><i class="fa fa-eye"></i>&nbsp; Transactions</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Add customer Modal -->
    <div class="row modal" id="add_customer_modal">
        <div class="modal-container">
            <div class="row modal-header">
                <div class="eleven columns">
                    <h6 class="modal-title">New Customer</h6>
                </div>
                <div class="one column">
                    <a href="#" class="modal-close" data-modal="add_customer_modal"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form id="customer_form" action="">
                <div class="row modal-body">
                    <div class="row u-full-width" style="display: flex; justify-content: center; align-items: center; text-align: center; margin-bottom: 2%">
                        <p style="width: 80%; font-size: 15px; color: #444">Only the phone number field is mandatory.</p>
                    </div>

                    <div class="row u-full-width">
                        <label for="phone">Phone number *</label>
                        <input type="text" class="u-full-width" name="phone" id="phone" minlength="9" maxlength="13" placeholder="+237" required>
                    </div>
                    <div class="row u-full-width">
                        <div class="six columns">
                            <label for="first_name">First name</label>
                            <input class="u-full-width" type="text" name="first_name" id="first_name">
                        </div>
                        <div class="six columns">
                            <label for="last_name">Last name</label>
                            <input class="u-full-width" type="text" name="last_name" id="last_name">
                        </div>
                    </div>
                    <div class="row u-full-width">
                        <label for="email">Email address</label>
                        <input type="email" class="u-full-width" name="email" id="email">
                    </div>
                </div>
                <div class="row modal-footer">
                    <div class="six columns">
                        <a href="#" data-modal="add_customer_modal" class="button modal-close size-sm">Cancel</a>
                    </div>
                    <div class="six columns">
                        <button type="submit" class="button-success size-sm">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('script')
    <script>
        function loadCustomers() {
            $.ajax({
                url: API_ENDPOINT + '/customers',
                method: 'GET',
                success: (response) => {
                    const customers = response.customers;
                    const table = $('#customers_table tbody')[0];
                    table.innerHTML = "";

                    _.each(customers, (customer) => {
                        table.innerHTML += '<tr><td>'+ customer.id +'</td><td>'+ customer.first_name +' '+ customer.last_name +'</td><td>'+ customer.email +'</td><td>'+ customer.phone +'</td><td><span class="badge badge-success">Success</span></td><td><button class="size-xs button-primary"><i class="fa fa-line-chart"></i>&nbsp; Transactions</button></td></tr>';
                    });
                },
                error: (response) => {
                    toastr.warning("Unable to load your customers list. Contact administrator.", 'Warning');
                    console.log(response);
                }
            });
        }

        loadCustomers();

        $('#customer_form').submit((e) => {
            e.preventDefault();
            e.stopPropagation();

            $.ajax({
                url: API_ENDPOINT + '/customers',
                method: 'POST',
                data: { phone: $('#phone').val(), first_name: $('#first_name').val(), last_name: $('#last_name').val(), email: $('#email').val(), created_by: selected.id },
                success: (response) => {
                    toastr.success(response.message, 'Success');
                    close_modal('add_customer_modal');
                    loadCustomers();
                },
                error: (response) => {
                    console.log(response);
                    toastr.error(response.responseJSON.message, 'Error');
                    close_modal('add_customer_modal');
                }
            });
        });
    </script>
@stop