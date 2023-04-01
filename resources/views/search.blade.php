@extends('layouts.master')
@section('title', 'Search')


@section('begin_css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/glightbox/glightbox.min.css">
    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <!--  BEGIN BREADCRUMBS  -->
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <div class="d-flex breadcrumb-content">
                            <div class="page-header">

                                <div class="page-title"><h3>SEARCH</h3></div>

                                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <!--  END BREADCRUMBS  -->

                    <div class="card style-5 bg-secondary mb-4">
                        <div class="card-top-content">
                            <div class="avatar avatar-md">
                                <img alt="avatar" src="assets/img/profile-6.jpeg" class="rounded-circle">
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Mary McDonald</h5>
                                <a href="javascript:void(0);" class="text-warning mt-2 d-inline-block">Follow</a>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
@endsection

@section('begin_js')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/glightbox/glightbox.min.js"></script>
    <script src="../src/plugins/src/glightbox/custom-glightbox.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

@endsection



