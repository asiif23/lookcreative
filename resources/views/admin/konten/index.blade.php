@extends('layouts.admin.app')
@section('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/ecommerce/order.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
@endsection
@section('konten')
    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Konten</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"><a href="#">Konten</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="order-top-section">
                        <h4 class="mb-5 card-title text-center">Konten Status</h4>
                        <div class="card-section mx-md-auto">
                            <div class="row mt-5">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                    <div class="o-cards">
                                        <h5 class="txt-o-placed">Konten Placed</h5>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                <div id="o-progress-order-placed" class=""></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                <h4>2215</h4>
                                                <h6>Today's Konten</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                    <div class="o-cards">
                                        <h5 class="txt-o-preparing">Preparing</h5>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                <div id="o-progress-preparing" class=""></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                <h4>1344</h4>
                                                <h6>In Process</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                    <div class="o-cards">
                                        <h5 class="txt-o-shipped">Shipped</h5>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                <div id="o-progress-shipped" class=""></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                <h4>924</h4>
                                                <h6>Shipped Today</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                    <div class="o-cards">
                                        <h5 class="txt-o-arrival">Delivered</h5>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                <div id="o-progress-delivered" class=""></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                <h4>768</h4>
                                                <h6>Delivered Today</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Order Listing</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="ecommerce-order-list" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column"> Record No. </th>
                                            <th>Order</th>
                                            <th>Purchased On</th>
                                            <th>Vendor</th>
                                            <th>Ship To</th>
                                            <th>Base Price</th>
                                            <th>Purchased Price</th>
                                            <th class="align-center">Status</th>
                                            <th class="align-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="checkbox-column"> 1 </td>
                                            <td>1</td>
                                            <td>12/09/2017</td>
                                            <td>HP</td>
                                            <td>Liam Sheldon</td>
                                            <td>$234.40</td>
                                            <td>$200.40</td>
                                            <td class="align-center"><span class="badge badge-success">Approved</span></td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i> View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 2 </td>
                                            <td>2</td>
                                            <td>21/01/2018</td>
                                            <td>APPLE</td>
                                            <td>Donna Rogers</td>
                                            <td>$234.40</td>
                                            <td>$205.40</td>
                                            <td class="align-center"><span class="badge badge-danger">Closed</span></td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i> View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 3 </td>
                                            <td>3</td>
                                            <td>12/02/2018</td>
                                            <td>MICROSOFT</td>
                                            <td>Grace Roberts</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-primary">Pending</span></td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i> View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 4 </td>
                                            <td>4</td>
                                            <td>12/02/2018</td>
                                            <td>DELL</td>
                                            <td>James Taylor</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-warning">Suspended</span></td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i> View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 5 </td>
                                            <td>5</td>
                                            <td>12/02/2018</td>
                                            <td>SAMSUNG</td>
                                            <td>Alexander Gray</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-primary">Pending</span></td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                    View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 6 </td>
                                            <td>6</td>
                                            <td>12/02/2018</td>
                                            <td>SONY</td>
                                            <td>Nia Hillyer</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-success">Approved</span>
                                            </td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                    View</button></td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 7 </td>
                                            <td>7</td>
                                            <td>12/02/2018</td>
                                            <td>GoPro</td>
                                            <td>Andy King</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-primary">Pending</span></td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                    View</button></td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 8 </td>
                                            <td>8</td>
                                            <td>12/02/2018</td>
                                            <td>RAYBAN</td>
                                            <td>Laurie Fox</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-warning">Suspended</span>
                                            </td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                    View</button></td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 9 </td>
                                            <td>9</td>
                                            <td>12/02/2018</td>
                                            <td>WALMART</td>
                                            <td>Ryan McKillop</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-danger">Closed</span></td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                    View</button></td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 10 </td>
                                            <td>10</td>
                                            <td>12/02/2018</td>
                                            <td>ROLEX</td>
                                            <td>Roxanne</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-success">Approved</span>
                                            </td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                    View</button></td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 11 </td>
                                            <td>11</td>
                                            <td>12/02/2018</td>
                                            <td>LG</td>
                                            <td>Iris Hubbard</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-warning">Suspended</span>
                                            </td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                    View</button></td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 12 </td>
                                            <td>12</td>
                                            <td>12/02/2018</td>
                                            <td>SHARP</td>
                                            <td>Keith Foster</td>
                                            <td>$234.40</td>
                                            <td>$210.40</td>
                                            <td class="align-center"><span class="badge badge-danger">Closed</span></td>
                                            <td class="align-center"><button type="button"
                                                    class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                    View</button></td>
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
    <!--  END CONTENT PART  -->
@endsection

@section('script')
    <!--  BEGIN CUSTOM SCRIPT FILES  -->
    <script src="{{ asset('assets/admin/plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/ecommerce/order.js') }}"></script>
    <!--  END CUSTOM SCRIPT FILES  -->
@endsection
