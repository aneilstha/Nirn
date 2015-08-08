
<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="dist/locationpicker.jquery.min.js"></script>
<div>
        <div class="container">
                <div class="col-lg-6">
                    <div id="us5" class="map-content"></div>
                    <p></p>
                </div>
                <div class="col-lg-6">
                    <div class="form container-fluid">
                        <div class="row form-group">
                            <label class="col-sm-2 control-label">Street:</label>

                            <div class="col-sm-6">
                                <input class="form-control" id="us5-street1" disabled="disabled">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-2 control-label">City:</label>

                            <div class="col-sm-6">
                                <input class="form-control" id="us5-city" disabled="disabled">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-2 control-label">State or Province:</label>

                            <div class="col-sm-6">
                                <input class="form-control" id="us5-state" disabled="disabled">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-2 control-label">Postal code:</label>

                            <div class="col-sm-6">
                                <input class="form-control" id="us5-zip" disabled="disabled">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-2 control-label">Country:</label>

                            <div class="col-sm-6">
                                <input class="form-control" id="us5-country" disabled="disabled">
                            </div>
                        </div>
                        <div class="row addr form-group">
                        <div class="col-md-12">
                        <address>
                            <h5>Head Office</h5>
                            <p><i class="fa fa-map-marker"></i>&nbspPurnachandi Marga <br>20/26, Jawalakhel, Lalitpur</p>
                            <p><i class="fa fa-phone-square"></i>&nbsp+977-01-5524316</p>
                            <p><i class="fa fa-envelope"></i><a href="mailto:info@nirnnepal.org">&nbspinfo@nirnnepal.org</a></p>
                            <p><i class="fa fa-envelope"></i><a href="mailto:nirnnepal@gmail.com">&nbspnirnnp@gmail.com </a></p>
                        </address>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <script>
                function updateControls(addressComponents) {
                    $('#us5-street1').val(addressComponents.addressLine1);
                    $('#us5-city').val(addressComponents.city);
                    $('#us5-state').val(addressComponents.stateOrProvince);
                    $('#us5-zip').val(addressComponents.postalCode);
                    $('#us5-country').val(addressComponents.country);
                }
                $('#us5').locationpicker({
                    location: {latitude: 27.6725493, longitude: 85.318394},
                    radius: 400,
                    onchanged: function (currentLocation, radius, isMarkerDropped) {
                        var addressComponents = $(this).locationpicker('map').location.addressComponents;
                        updateControls(addressComponents);
                    },
                    oninitialized: function(component) {
                        var addressComponents = $(component).locationpicker('map').location.addressComponents;
                        updateControls(addressComponents);
                    }
                });
            </script>
        </div>

        

    </div>
   