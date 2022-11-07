@extends('layouts.admin.app')
@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('assets/admin/plugins/table/sticky-table-header/component.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('konten')
    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="container">
            <div class="page-header">
                <div class="page-title">
                    <h3>Services</h3>
                    <div class="crumbs">
                        <ul id="breadcrumbs" class="breadcrumb">
                            <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                            <li><a href="#">Konten</a></li>
                            <li class="active"><a href="#">Services</a> </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Daftar Servis</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <table class="table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="user-name">gary coleman</td>
                                        <td class="user-email">gary.coleman21@example.com</td>
                                        <td class="user-phone">(398)-332-5385</td>
                                        <td class="user-mobile">(888)-677-3719</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">rose parker</td>
                                        <td class="user-email">rose.parker16@example.com</td>
                                        <td class="user-phone">(293)-873-2247</td>
                                        <td class="user-mobile">(216)-889-4933</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">chloe nelson</td>
                                        <td class="user-email">chloe.nelson18@example.com</td>
                                        <td class="user-phone">(957)-213-3499</td>
                                        <td class="user-mobile">(207)-516-4474</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">eric bell</td>
                                        <td class="user-email">eric.bell16@example.com</td>
                                        <td class="user-phone">(897)-762-9782</td>
                                        <td class="user-mobile">(565)-627-3002</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">douglas hayes</td>
                                        <td class="user-email">douglas.hayes92@example.com</td>
                                        <td class="user-phone">(231)-391-6269</td>
                                        <td class="user-mobile">(790)-838-2130</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">cameron brown</td>
                                        <td class="user-email">cameron.brown32@example.com</td>
                                        <td class="user-phone">(204)-488-5204</td>
                                        <td class="user-mobile">(508)-463-6811</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">nevaeh diaz</td>
                                        <td class="user-email">nevaeh.diaz99@example.com</td>
                                        <td class="user-phone">(436)-578-2946</td>
                                        <td class="user-mobile">(906)-412-3302</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">kathy miller</td>
                                        <td class="user-email">kathy.miller62@example.com</td>
                                        <td class="user-phone">(724)-705-3555</td>
                                        <td class="user-mobile">(764)-841-2531</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">susan king</td>
                                        <td class="user-email">susan.king88@example.com</td>
                                        <td class="user-phone">(774)-205-7754</td>
                                        <td class="user-mobile">(639)-267-9728</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">jeffery ramirez</td>
                                        <td class="user-email">jeffery.ramirez83@example.com</td>
                                        <td class="user-phone">(723)-243-7706</td>
                                        <td class="user-mobile">(172)-597-3422</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">gary coleman</td>
                                        <td class="user-email">gary.coleman21@example.com</td>
                                        <td class="user-phone">(398)-332-5385</td>
                                        <td class="user-mobile">(888)-677-3719</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">rose parker</td>
                                        <td class="user-email">rose.parker16@example.com</td>
                                        <td class="user-phone">(293)-873-2247</td>
                                        <td class="user-mobile">(216)-889-4933</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">chloe nelson</td>
                                        <td class="user-email">chloe.nelson18@example.com</td>
                                        <td class="user-phone">(957)-213-3499</td>
                                        <td class="user-mobile">(207)-516-4474</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">eric bell</td>
                                        <td class="user-email">eric.bell16@example.com</td>
                                        <td class="user-phone">(897)-762-9782</td>
                                        <td class="user-mobile">(565)-627-3002</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">douglas hayes</td>
                                        <td class="user-email">douglas.hayes92@example.com</td>
                                        <td class="user-phone">(231)-391-6269</td>
                                        <td class="user-mobile">(790)-838-2130</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">cameron brown</td>
                                        <td class="user-email">cameron.brown32@example.com</td>
                                        <td class="user-phone">(204)-488-5204</td>
                                        <td class="user-mobile">(508)-463-6811</td>
                                    </tr>
                                    <tr>
                                        <td class="user-name">nevaeh diaz</td>
                                        <td class="user-email">nevaeh.diaz99@example.com</td>
                                        <td class="user-phone">(436)-578-2946</td>
                                        <td class="user-mobile">(906)-412-3302</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT PART  -->
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/admin/plugins/table/sticky-table-header/jquery.ba-throttle-debounce.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/table/sticky-table-header/jquery.stickyheader.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
