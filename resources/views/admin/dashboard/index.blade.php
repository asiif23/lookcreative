@extends('layouts.admin.app')
@section('css')
@endsection
@section('konten')
    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Dashboard</h3>
                </div>
            </div>

            <div class="row layout-spacing ">

                <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                    <div class="widget-content-area  data-widgets br-4">
                        <div class="widget  t-sales-widget">
                            <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-line-chart"></i>
                                </div>
                                <div class="media-body text-right">
                                    <p class="widget-text mb-0">Sales</p>
                                    <p class="widget-numeric-value">98,225</p>
                                </div>
                            </div>
                            <p class="widget-total-stats mt-2">94% New Sales</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                    <div class="widget-content-area  data-widgets br-4">
                        <div class="widget  t-order-widget">
                            <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-cart-bag"></i>
                                </div>
                                <div class="media-body text-right">
                                    <p class="widget-text mb-0">Orders</p>
                                    <p class="widget-numeric-value">24,017</p>
                                </div>
                            </div>
                            <p class="widget-total-stats mt-2">552 New Orders</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-sm-0 mb-4">
                    <div class="widget-content-area  data-widgets br-4">
                        <div class="widget  t-customer-widget">
                            <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-user-11"></i>
                                </div>
                                <div class="media-body text-right">
                                    <p class="widget-text mb-0">Customers</p>
                                    <p class="widget-numeric-value">92,251</p>
                                </div>
                            </div>
                            <p class="widget-total-stats mt-2">390 New Customers</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                    <div class="widget-content-area  data-widgets br-4">
                        <div class="widget  t-income-widget">
                            <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="media-body text-right">
                                    <p class="widget-text mb-0">Income</p>
                                    <p class="widget-numeric-value">9.5 M</p>
                                </div>
                            </div>
                            <p class="widget-total-stats mt-2">$2.1 M This Week</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-xl-8 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area monthly-chart  br-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-2 col-12  align-self-center">
                                <h3>Statistics</h3>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-10 col-12 mt-sm-0 mt-3">
                                <ul class="nav justify-content-sm-end justify-content-center monthly-chart-tab nav-pills"
                                    id="monthly-chart" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="monthly-chart-weekly-tab" data-toggle="pill"
                                            href="#monthly-chart-weekly" role="tab" aria-controls="monthly-chart-weekly"
                                            aria-selected="true">Weekly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="monthly-chart-monthly-tab" data-toggle="pill"
                                            href="#monthly-chart-monthly" role="tab"
                                            aria-controls="monthly-chart-monthly" aria-selected="true">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="monthly-chart-yearly-tab" data-toggle="pill"
                                            href="#monthly-chart-yearly" role="tab" aria-controls="monthly-chart-yearly"
                                            aria-selected="false">Yearly</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12 mt-3">
                                <div class="tab-content" id="monthly-chartContent">
                                    <div class="tab-pane fade show active" id="monthly-chart-weekly" role="tabpanel"
                                        aria-labelledby="monthly-chart-weekly-tab">
                                        <div class="v-pv-weekly" style="height: 300px; width: 100%; margin-top: 30px;">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row mt-3">
                                                <div
                                                    class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                    <div class="d-flex justify-content-sm-end  justify-content-center">
                                                        <div class="d-m-visitors data-marker align-self-center">
                                                        </div>
                                                        <span class="visitors">Visitors : 9,823</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                    <div class="d-flex justify-content-sm-start  justify-content-center">
                                                        <div class="d-m-page-view data-marker align-self-center">
                                                        </div>
                                                        <span class="page-view">Pageviews : 21,655</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="monthly-chart-monthly" role="tabpanel"
                                        aria-labelledby="monthly-chart-monthly-tab">
                                        <div class="v-pv-monthly" style="height: 300px; width: 100%; margin-top: 30px;">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row mt-3">
                                                <div
                                                    class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                    <div class="d-flex justify-content-sm-end  justify-content-center">
                                                        <div
                                                            class="d-m-visitors data-marker data-marker-success align-self-center">
                                                        </div>
                                                        <span class="visitors">Visitors : 19,823</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                    <div class="d-flex justify-content-sm-start  justify-content-center">
                                                        <div
                                                            class="d-m-page-view data-marker data-marker-secondary align-self-center">
                                                        </div>
                                                        <span class="page-view">Pageviews : 61,655</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="monthly-chart-yearly" role="tabpanel"
                                        aria-labelledby="monthly-chart-yearly-tab">
                                        <div class="v-pv-yearly" style="height: 300px; width: 100%; margin-top: 30px;">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row mt-3">
                                                <div
                                                    class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-right text-center mb-3 mr-sm-3 px-xl-0">
                                                    <div class="d-flex justify-content-sm-end  justify-content-center">
                                                        <div
                                                            class="d-m-visitors data-marker data-marker-success align-self-center">
                                                        </div>
                                                        <span class="visitors">Visitors : 80,823</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-5 col-md-5 col-sm-5 col-12 text-sm-left text-center mb-3 ml-sm-3 px-xl-0">
                                                    <div class="d-flex justify-content-sm-start  justify-content-center">
                                                        <div
                                                            class="d-m-page-view data-marker data-marker-secondary align-self-center">
                                                        </div>
                                                        <span class="page-view">Pageviews : 1,21,655</span>
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

                <div class="col-xl-4 col-lg-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box">
                        <div class="widget-header ">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Revenue and Profit</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area  monthly-profit-chart">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12 mt-3">
                                            <div class="s-r mx-auto"
                                                style="height: 300px; width: 100%; max-width: 275px;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-12 mt-2 mb-2">
                                    <div class="row mt-4">
                                        <div class="col-lg-6 col-md-6 col-6 px-xl-0 text-right">
                                            <div class="d-flex justify-content-end">
                                                <div class="d-m-revenue data-marker align-self-center"></div>
                                                <span class="page-view mr-sm-3">Revenue</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6 px-xl-0 text-left">
                                            <div class="d-flex justify-content-start">
                                                <div class="d-m-profit data-marker align-self-center"></div>
                                                <span class="page-view">Profit</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area event-calendar p-0  h-100 br-4">
                        <div class="calendar"></div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="top-searches widget-content-area p-0 widget-content-container  h-100 br-4">
                        <div class="col-lg-12 col-md-12 col-12 map-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <p class="mb-4 mt-2">Top Searches</p>
                                </div>
                            </div>
                        </div>
                        <div class="child-content">
                            <div id="world-map" style="height: 435px; max-height: 100%;"></div>
                            <div class="world-map-section">
                                <div class="">
                                    <div class="table-responsive top-search-scroll">
                                        <table class="table table-highlight-head">
                                            <thead>
                                                <tr>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-1 data-marker align-self-center">
                                                            </div>
                                                            <span class="page-view mr-sm-3">USA</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-2 data-marker align-self-center">
                                                            </div>
                                                            <span class="page-view mr-sm-3">Australia</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-3 data-marker align-self-center">
                                                            </div>
                                                            <span class="page-view mr-sm-3">Spain</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-4 data-marker align-self-center">
                                                            </div>
                                                            <span class="page-view mr-sm-3">France</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-5 data-marker align-self-center">
                                                            </div>
                                                            <span class="page-view mr-sm-3">India</span>
                                                        </div>
                                                    </th>
                                                    <th class="align-center">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="d-m-data-6 data-marker align-self-center">
                                                            </div>
                                                            <span class="page-view mr-sm-3">Other</span>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-center data-value-1">55%</td>
                                                    <td class="align-center data-value-2">30%</td>
                                                    <td class="align-center data-value-3">10%</td>
                                                    <td class="align-center data-value-4">4%</td>
                                                    <td class="align-center data-value-5">0.6%</td>
                                                    <td class="align-center data-value-6">0.4%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-5 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area page-views p-0  br-4">
                        <ul class="nav nav-pills py-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Daily</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Weekly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Monthly</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 text-center">
                                        <div class="daily">
                                            <p class="d-count mb-0">5,067</p>
                                            <p>Total Page Views</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div id="daily"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 text-center">
                                        <div class="weekly">
                                            <p class="w-count mb-0">25,067</p>
                                            <p>Total Page Views</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div id="weekly"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 text-center">
                                        <div class="month">
                                            <p class="m-count mb-0">276,097</p>
                                            <p>Total Page Views</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div id="month"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="row">

                        <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                            <div class="widget-content-area social-likes text-center p-0  br-4">
                                <div class="card facebook">
                                    <div class="icon mb-4">
                                        <i class="flaticon-facebook-logo"></i>
                                    </div>
                                    <div class="card-content">
                                        <h5>Facebook</h5>
                                        <p>13K Followers</p>
                                    </div>
                                    <div class="card-btn-section">
                                        <p>View Profile</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                            <div class="widget-content-area social-likes text-center p-0  br-4">
                                <div class="card dribbble">
                                    <div class="icon mb-4">
                                        <i class="flaticon-dribbble-bold"></i>
                                    </div>
                                    <div class="card-content">
                                        <h5>Dribbble</h5>
                                        <p>4K Followers</p>
                                    </div>
                                    <div class="card-btn-section">
                                        <p>Check Work</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-12 mb-sm-0 mb-4">
                            <div class="widget-content-area social-likes text-center p-0  br-4">
                                <div class="card twitter">
                                    <div class="icon mb-4">
                                        <i class="flaticon-twitter-logo"></i>
                                    </div>
                                    <div class="card-content">
                                        <h5>Twitter</h5>
                                        <p>7.2K Followers</p>
                                    </div>
                                    <div class="card-btn-section">
                                        <p>Read Tweets</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  END CONTENT PART  -->
@endsection

@section('script')
@endsection
