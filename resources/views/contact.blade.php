@extends('layouts.master')
@section('title', 'CONTACT')

@section('begin_css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/plugins/src/leaflet/leaflet.css" rel="stylesheet" type="text/css"/>
    <link href="../src/assets/css/light/pages/contact_us.css" rel="stylesheet" type="text/css"/>
    <link href="../src/assets/css/dark/pages/contact_us.css" rel="stylesheet" type="text/css"/>
    <!--  END CUSTOM STYLE FILE  -->
@endsection

@section('content')
    <div class="layout-px-spacing">


        <div class="middle-content container-xxl p-0">


            <div class="statbox widget box box-shadow layout-top-spacing">

                <div class="widget-content widget-content-area">

                    <div class="contact-us-form">

                        <div class="row gx-5">
                            <div class="col-md-6">

                                <form action="{{route("contact.store")}}" method="post" class="row g-4">
                                    @csrf
                                    <div class="col-md-12">
                                        <h5>Send Us Email</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputName" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="inputName" id="inputName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputSubject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="inputSubject" id="inputSubject" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputMessage" class="form-label">Message</label>
                                        <textarea id="inputMessage"  name="inputMessage"  class="form-control" cols="30" rows="10" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                                class="btn btn-primary _effect--ripple waves-effect waves-light">Send
                                        </button>
                                    </div>
                                </form>

                            </div>

                            <div class="col-md-12 mt-4">

                                <div class="paper contact-us-info-section-1">

                                    <div class="row gx-5">
                                        <div class="col-12">
                                            <h4 class="contact-title">Let's Talk</h4>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 mb-3">

                                            <div class="widget-paper">

                                                <h5>Istanbul</h5>
                                                <p>+90 505 068 71 61</p>

                                            </div>
                                        </div>





                                        <div class="col-12 mt-5">
                                            <h4 class="contact-title">Mail Us at</h4>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 mb-3">

                                            <div class="widget-paper">

                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="icon icon-tabler icon-tabler-help" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="12" cy="12" r="9"></circle>
                                                        <line x1="12" y1="17" x2="12" y2="17.01"></line>
                                                        <path
                                                            d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                                                    </svg>
                                                </div>

                                                <h5>Support</h5>
                                                <p>info@fikretcure.dev</p>

                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection



@section('begin_js')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/leaflet/us-states.js"></script>
    <script src="../src/plugins/src/leaflet/eu-countries.js"></script>
    <script src="../src/plugins/src/leaflet/leaflet.js"></script>
    <script>
        // / Define Map Location
        var leaflet = L.map('contact-map', {
            center: [40.74785318312211, -73.98370985752007],
            zoom: 30
        });

        // Init Leaflet Map. For more info check the plugin's documentation: https://leafletjs.com/
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(leaflet);

        // Define Marker Layer
        var markerLayer = L.layerGroup().addTo(leaflet);

        // Set Custom SVG icon marker
        var leafletIcon = L.divIcon({
            html: `<span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" style="fill: #ffffff80;color: #191e3a;">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="11" r="3"></circle>
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                    </svg></span>`,
            bgPos: [10, 10],
            iconAnchor: [20, 37],
            popupAnchor: [-7, -37],
            className: 'leaflet-marker'
        });

        // Show current address
        L.marker([40.74785318312211, -73.98370985752007], {icon: leafletIcon}).addTo(markerLayer).bindPopup('16 E 34th St, NY 10016, US', {closeButton: false}).openPopup();
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

@endsection
