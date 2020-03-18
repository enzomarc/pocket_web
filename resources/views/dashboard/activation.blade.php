@extends('layouts.dashboard')

@section('styles')
    <link rel="stylesheet" href="/css/activation.css">
@stop

@section('content')
    <div class="container" style="padding: 50px 50px 0 50px">
        <div class="row" id="header">
            <h3>Activate your business</h3>
            <p>To activate your business, kindly complete the checks below. When you're done, click the "Send Activation Request" button.</p>
        </div>

        <div class="row alert">
            <i class="fa fa-question-circle"></i>
            <div class="row">
                <h6>Need someone else in the company to enter this information?</h6>
                <p><a href="#">Invite an administrator</a> to this account.</p>
            </div>
        </div>

        <div class="row" id="steps">
            <div class="row step" id="personal-step">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>1</span>
                </div>
                <div class="nine columns">
                    <h5>Personal Information</h5>
                    <span>Please tell us a little about yourself</span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button button-primary size-sm modal-show" data-modal="personal_info_modal">Continue</a>
                </div>
            </div>
            <div class="row step" id="business-step">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>2</span>
                </div>
                <div class="nine columns">
                    <h5>Business Information</h5>
                    <span>Please tell us more about your business</span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button button-primary size-sm modal-show" data-modal="business_info_modal">Continue</a>
                </div>
            </div>
            <div class="row step" id="doc-step">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>3</span>
                </div>
                <div class="nine columns">
                    <h5>Verification Documents</h5>
                    <span>The documents we ask for are based on your <a href="#">business profile</a></span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button button-primary size-sm modal-show" data-modal="verification_documents_modal">Continue</a>
                </div>
            </div>
            <div class="row step" id="bank-step">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>4</span>
                </div>
                <div class="nine columns">
                    <h5>Settlement Account</h5>
                    <span>Let us know where to send your payouts to</span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button button-primary size-sm">Continue</a>
                </div>
            </div>
            <div class="row step">
                <div class="one column">
                    <i class="fa fa-check"></i>
                    <span>5</span>
                </div>
                <div class="nine columns" id="call-step">
                    <h5>Truecaller Verification (Optional)</h5>
                    <span>Increase transaction limits for your business</span>
                </div>
                <div class="two columns" style="display: flex; justify-content: flex-end">
                    <a href="#" class="button button-primary size-sm">Continue</a>
                </div>
            </div>
        </div>

        <div class="row cta">
            <button class="button-success" disabled>Send Activation Request</button>
            <a href="#">Or change business type to <b>Registered Business</b></a>
        </div>
    </div>

    <!-- Personal Information Modal -->
    <div class="row modal" id="personal_info_modal">
        <div class="modal-container">
            <div class="row modal-header">
                <div class="eleven columns">
                    <h6 class="modal-title">Personal Information</h6>
                </div>
                <div class="one column">
                    <a href="#" class="modal-close" data-modal="personal_info_modal"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form id="personal_form" action="">
                <div class="row modal-body">
                    <div class="row u-full-width">
                        <div class="six columns">
                            <label for="first_name">First name</label>
                            <input class="u-full-width" type="text" name="first_name" id="first_name" required>
                        </div>
                        <div class="six columns">
                            <label for="last_name">Last name</label>
                            <input class="u-full-width" type="text" name="last_name" id="last_name">
                        </div>
                    </div>
                    <div class="row u-full-width">
                        <label for="phone">Phone number</label>
                        <input type="text" class="u-full-width" name="phone" id="phone" minlength="9" maxlength="13" placeholder="+237" required>
                    </div>
                    <div class="row u-full-width">
                        <label for="email">Email address</label>
                        <input type="email" class="u-full-width" name="email" id="email" readonly required>
                    </div>
                    <div class="row u-full-width">
                        <label for="role" id="role-label">What's your role at <span class="xshopname">Shop</span></label>
                        <select name="role" id="role" class="u-full-width">
                            <option value="administrator">Administrator</option>
                            <option value="manager">Manager</option>
                            <option value="developer">Developer</option>
                        </select>
                    </div>
                </div>
                <div class="row modal-footer">
                    <div class="six columns">
                        <a href="#" data-modal="personal_info_modal" class="button modal-close size-sm">Cancel</a>
                    </div>
                    <div class="six columns">
                        <button type="submit" class="button-success size-sm">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Business Information Modal -->
    <div class="row modal modal-xlg" id="business_info_modal">
        <div class="modal-container">
            <div class="row modal-header">
                <div class="eleven columns">
                    <h6 class="modal-title">Business Information</h6>
                </div>
                <div class="one column">
                    <a href="#" class="modal-close" data-modal="business_info_modal"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form id="business_form" role="form" enctype="multipart/form-data">
                <div class="row modal-body">
                    <div class="row u-full-width" style="display: flex; justify-content: center; align-items: center; text-align: center; margin-bottom: 2%">
                        <p style="width: 80%; font-size: 15px; color: #444">We encourage you to fill out as many of theses details as you can. This helps speed up the process of verifying your business.</p>
                    </div>
                    <div class="row u-full-width">
                        <div class="seven columns" style="padding: 0 3%">
                            <div class="row u-full-width input-control">
                                <label for="business_description">What does <span class="xshopname">Shop</span> does? <span style="font-size: 13px; color: red">*</span></label>
                                <textarea name="business_description" id="business_description" cols="30" rows="10"
                                          class="u-full-width" required style="margin: 0"></textarea>
                                <span class="tiny">Please enter a detailed description of the goods and services your business provides. <b>For example:</b> "Acme Corp sells roses, tulips and many other types of flowers for both individual and corporate customers."</span>
                            </div>

                            <div class="row u-full-width input-control">
                                <label for="business_email">Business General Contact Email <span style="font-size: 13px; color: red">*</span></label>
                                <input type="email" class="u-full-width" name="business_email" id="business_email" required>
                                <span class="tiny">This is the primary contact email for your business. Transaction notifications go to this email if they're turned on for your business.</span>
                            </div>

                            <div class="row u-full-width input-control">
                                <label for="support_email">Support Email <span style="font-size: 13px; color: red">*</span></label>
                                <input type="email" class="u-full-width" name="support_email" id="support_email" required>
                                <span class="tiny">Support requests from your customers will go to this email.</span>
                            </div>

                            <div class="row u-full-width input-control">
                                <label for="phone">Phone number of the Business <span style="font-size: 13px; color: red">*</span></label>
                                <input type="text" class="u-full-width" name="business_phone" id="business_phone" minlength="9" maxlength="13" placeholder="+237" required>
                                <span class="tiny">Customers will call you via this number to discuss product prices. <br><b>IMPORTANT:</b> this phone number should always be available, so make sure this number is assigned to a decision-maker at your organization.</span>
                            </div>

                            <div class="row u-full-width input-control">
                                <label for="phone">Physical Address of the Business <span style="font-size: 13px; color: red">*</span></label>
                                <input type="text" class="u-full-width" name="address" id="address" required>
                                <span class="tiny">Enter the complete address of your business. <b>Example:</b> 1134 Alahala Road, Yaoundé, Cameroon.</span>
                            </div>
                        </div>
                        <div class="five columns" style="padding: 0 3%">
                            <div class="row u-full-width input-control">
                                <label for="business_logo">Business Logo</label>
                                <span class="tiny">We recommend you to use a square logo with dimensions 100px by 100px for best results on the checkout form.</span><br>
                                <div class="logo-selector" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 250px">
                                    <img id="business_logo" src="/images/logo-p.png" alt="logo" style="width: 48px; height: 48px; margin-bottom: 10%">
                                    <input type="file" name="logo" id="logo" accept="image/*" hidden>
                                    <a href="#" class="button size-sm choose-file">+ Change File</a>
                                    <span class="tiny">Max Size: 512Kb</span>
                                </div>
                            </div>

                            <div class="row u-full-width input-control">
                                <label for="business_website">Website Link for the Business</label>
                                <input type="text" class="u-full-width" name="business_website" id="business_website" placeholder="https://">
                            </div>

                            <div class="row u-full-width input-control">
                                <label>Your Business on Social Media</label>
                                <input type="text" class="u-full-width" name="facebook" id="facebook" placeholder="Facebook">
                                <input type="text" class="u-full-width" name="twitter" id="twitter" placeholder="Twitter">
                                <input type="text" class="u-full-width" name="instagram" id="instagram" placeholder="Instagram">
                                <input type="text" class="u-full-width" name="linkedin" id="linkedin" placeholder="LinkedIn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row modal-footer">
                    <div class="six columns">
                        <a href="#" data-modal="business_info_modal" class="button modal-close size-sm">Cancel</a>
                    </div>
                    <div class="six columns">
                        <button type="submit" class="button-success size-sm">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Document Verification Modal -->
    <div class="row modal" id="verification_documents_modal">
        <div class="modal-container">
            <div class="row modal-header">
                <div class="eleven columns">
                    <h6 class="modal-title">Verification Documents</h6>
                </div>
                <div class="one column">
                    <a href="#" class="modal-close" data-modal="verification_documents_modal"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form id="documents_form" role="form" enctype="multipart/form-data">
                <input type="hidden" name="verified_by" id="verified_by">
                <div class="row modal-body">
                    <div class="row u-full-width">
                        <label for="role" id="role-label">Data page of Passport/Driver's license/National ID/Voter's ID Card</label>
                        <select name="type" id="type" class="u-full-width">
                            <option value="national id">National ID</option>
                            <option value="passport">Passport</option>
                            <option value="driver's license">Driver's license</option>
                            <option value="voter's id card">Voter's ID Card</option>
                        </select>
                        <div class="row u-full-width" style="text-align: center">
                            <input type="file" name="document" id="document" hidden>
                            <a href="#" class="button size-sm u-full-width" id="choose_document">+ Choose Files</a>
                            <span class="tiny file u-full-width"></span>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row modal-footer">
                    <div class="six columns">
                        <a href="#" data-modal="verification_documents_modal" class="button modal-close size-sm">Cancel</a>
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
        let user_step = false;
        let business_step = false;
        let document_step = false;
        let bank_step = false;

        /* Check activation steps */
        if (user.first_name != null && user.first_name !== "" && user.phone != null && user.phone !== "") {
            $('#personal-step').addClass('completed');
            $('#personal-step a.button').removeClass('button-primary').text('Update');
            user_step = true;
        }

        if (selected.business_description != null && selected.business_description !== "" && selected.business_email != null && selected.business_email !== "" && selected.address != null && selected.address !== "" && selected.business_phone != null && selected.business_phone !== "" && selected.support_email != null && selected.support_email !== "") {
            $('#business-step').addClass('completed');
            $('#business-step a.button').removeClass('button-primary').text('Update');
            business_step = true;
        }

        $.ajax({
            url: API_ENDPOINT + "/shop/" + selected.id + "/verifications",
            method: "GET",
            headers: { Authorization: user.token },
            success: (response) => {
                const verification = response.verification;

                if (verification != false) {
                    $('#doc-step').addClass('completed');
                    $('#doc-step a.button').removeClass('button-primary').text('Update');
                    document_step = true;
                }
            },
            error: (response) => {
                console.log(response);
            }
        });

        /* Load personal information */
        $('#email').val(user.email);
        $('#first_name').val(user.first_name);
        $('#last_name').val(user.last_name);
        $('#phone').val(user.phone);

        /* Load business information */
        $('#business_description').val(selected.business_description);
        $('#business_email').val(selected.business_email);
        $('#business_phone').val(selected.business_phone);
        $('#business_website').val(selected.business_website);
        $('#support_email').val(selected.support_email);
        $('#address').val(selected.address);
        $('#verified_by').val(user.id);

        if (selected.socials != null) {
            $('#facebook').val(selected.socials.facebook);
            $('#twitter').val(selected.socials.twitter);
            $('#linkedin').val(selected.socials.linkedin);
            $('#instagram').val(selected.socials.instagram);
        }


        /* Personal information update */
        $('#personal_form').submit(function (e) {
            e.preventDefault();
            e.stopPropagation();

            const first_name = $('#first_name').val();
            const last_name = $('#last_name').val();
            const phone = $('#phone').val();

            $.ajax({
                url: API_ENDPOINT + '/teams/' + user.id,
                method: 'PUT',
                data: { first_name: first_name, last_name: last_name, phone: phone },
                success: (data) => {
                    replace_user(data.user);
                    toastr.success(data.message, 'Success');
                    close_modal('personal_info_modal');
                },
                error: (data) => {
                    console.log(data);
                    toastr.error(data.responseJSON.message, 'Error');
                    close_modal('personal_info_modal');
                }
            })
        });

        /* Business information update */
        $('#business_form').submit(function (e) {
            e.preventDefault();
            e.stopPropagation();

            const business_description = $('#business_description').val();
            const business_email = $('#business_email').val();
            const support_email = $('#support_email').val();
            const address = $('#address').val();
            const business_phone = $('#business_phone').val();
            const business_website = $('#business_website').val();
            const facebook = $('#facebook').val();
            const twitter = $('#twitter').val();
            const instagram = $('#instagram').val();
            const linkedin = $('#linkedin').val();
            const socials = { facebook: facebook, twitter: twitter, instagram: instagram, linkedin: linkedin };
            const data = new FormData($('#business_form')[0]);

            $.ajax({
                url: API_ENDPOINT + '/shop/' + selected.id,
                method: 'PUT',
                data: { business_description: business_description, business_phone: business_phone, business_email: business_email, support_email: support_email, address: address, business_website: business_website, socials: socials },
                headers: { Authorization: user.token },
                success: (response) => {
                    replace_shop(response.shop);
                    toastr.success(response.message, 'Success');
                    close_modal('business_info_modal');
                },
                error: (response) => {
                    console.log(response);
                    toastr.error(response.responseJSON.message, 'Error');
                    close_modal('business_info_modal');
                }
            });

            $.ajax({
                url: API_ENDPOINT + '/shop/' + selected.id + '/shop',
                method: 'PUT',
                data: data,
                headers: { Authorization: user.token },
                contentType: false,
                processData: false,
                success: (response) => {
                    toastr.success(response.message, 'Logo updated');
                },
                error: (response) => {
                    console.log(response);
                    toastr.info(response.responseJSON.message, 'Logo update');
                }
            });
        });

        $('.choose-file').click(function () {
            $('#logo').click();
        });

        $('#logo').change(function () {
            const file = $(this)[0].files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                $('#business_logo')[0].src = reader.result;
            });

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        $('#choose_document').click(function () {
            $('#document').click();
        });

        $('#document').change(function () {
            const file = $(this)[0].files[0];
            $('span.file').text(file.name);
        });

        $('#documents_form').submit(function (e) {
            e.preventDefault();
            e.stopPropagation();

            const doc_data = new FormData($(this)[0]);

            if ($('#document')[0].files.length <= 0)
                toastr.warning("No document provided. Please choose a document to verify.", 'File missing');
            else {
                $.ajax({
                    url: API_ENDPOINT + '/shop/' + selected.id + '/verifications',
                    method: 'POST',
                    data: doc_data,
                    headers: { Authorization: user.token },
                    contentType: false,
                    processData: false,
                    success: (response) => {
                        close_modal('verification_documents_modal');
                        toastr.success(response.message, 'Document updated');

                        $.ajax({
                            url: API_ENDPOINT + "/shop/" + selected.id + "/verifications",
                            method: "GET",
                            headers: { Authorization: user.token },
                            success: (response) => {
                                const verification = response.verification;

                                if (verification != false) {
                                    $('#doc-step').addClass('completed');
                                    $('#doc-step a.button').removeClass('button-primary').text('Update');
                                    document_step = true;
                                }
                            },
                            error: (response) => {
                                console.log(response);
                            }
                        });
                    },
                    error: (response) => {
                        console.log(response);

                        if (response.responseJSON)
                            toastr.error(response.responseJSON.message, 'Verification error');
                        else
                            toastr.error("An error occurred during verification document transfer.", 'Verification error');
                    }
                });
            }
        });
    </script>
@stop