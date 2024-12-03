@extends('layouts.default')

@section('content')
<!-- Start right Content here -->

<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user"
                                class="rounded-circle m-r-5">

                            {{$admin->name}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Welcome</h5>
                            </div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i>
                                Profile</a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

                <div class="clearfix"></div>

            </nav>

        </div>
        <!-- Top Bar End -->

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Needs</h4>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <!-- end page title end breadcrumb -->


                <div class="row total-data">
                    <div class="col-lg-2">
                        <div class="card card-body">
                            <p class="card-text">Total Contacts</p>
                            <h4 class="card-title font-20 mt-0">{{$totalContacts}}</h4>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card card-body">
                            <p class="card-text">Total Posts</p>
                            <h4 class="card-title font-20 mt-0">{{$totalPosts}}</h4>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="card card-body">
                            <p class="card-text">Total Solutions</p>
                            <h4 class="card-title font-20 mt-0">{{$totalSolutions}}</h4>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified nav-tabs p-4" role="tablist"
                                    style="padding-bottom: 1rem !important;">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link show active" data-toggle="tab" href="#contacts" role="tab"
                                            aria-selected="true">Contacts</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link show" data-toggle="tab" href="#posts" role="tab"
                                            aria-selected="false">Posts</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link show" data-toggle="tab" href="#solutions" role="tab"
                                            aria-selected="false">Solutions</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane p-3 show active" id="contacts" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead class="tabs-table">
                                                    <tr>
                                                        <th class="border-top-0"><i class="fas fa-user"></i>Email</th>
                                                        <th class="border-top-0"><i class="mdi mdi-bank"></i>Phone
                                                            Number</th>
                                                        <th class="border-top-0"><i
                                                                class="mdi mdi-account-card-details"></i>
                                                            Country</th>
                                                        <th class="border-top-0"><i
                                                                class="fas fa-calendar-alt"></i>Registration
                                                            Date</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->phone }}</td>
                                                        <td>{{ $user->country }}</td>
                                                        <td>{{ $user->created_at->format('M d Y h:iA T') }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3 show" id="posts" role="tabpanel">
                                        <div class="container">
                                            <div class="row row-posts">
                                                @foreach($posts as $purpose)
                                                <div class="col-xs-12 col-md-3 mb-3">
                                                    <!-- Simple card -->
                                                    <div class="card" data-toggle="modal"
                                                        data-target=".needsModal{{ $purpose->id }}">
                                                        @if(isset($purpose->image))
                                                        <img class="card-img-top img-fluid"
                                                            src="{{ asset('storage/' . $purpose->image) }}"
                                                            alt="Card image cap">
                                                        @else
                                                        <img class="card-img-top img-fluid"
                                                            src="{{ asset('assets/images/card-placeholder.png') }}"
                                                            alt="Card image cap">
                                                        @endif

                                                        <div class="card-body card-body-posts">
                                                            <h4 class="card-title font-16 mt-0">{{ Illuminate\Support\Str::limit($purpose->title, 20) }}
                                                            </h4>
                                                            <div>
                                                                <p href="#"
                                                                    class="float-left waves-effect waves-light posts-country">
                                                                    {{ $purpose->user->country }}
                                                                </p>
                                                                <p href="#"
                                                                    class="float-right waves-effect waves-light posts-solution">
                                                                    <span>{{ $purpose->total_solutions }}</span> solutions
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>



                                    <div class="tab-pane p-3 show" id="solutions" role="tabpanel">
                                        <div class="row row-posts">
                                            @foreach($solutions as $solution)

                                            <div class="col-md-6 col-lg-6 col-xl-4">
                                                <!-- Simple card -->
                                                <div class="card" data-toggle="modal"
                                                    data-target=".solutions-modal{{ $solution->id }}">
                                                    <img class="card-img-top img-fluid"
                                                        src="{{ asset('storage/' . $solution->purpose->image) ?? asset('assets/images/card-placeholder.png') }}"
                                                        alt="Card image cap">
                                                    <div class="card-body card-body-posts">
                                                        <div>
                                                            <p href="#"
                                                                class="float-left waves-effect waves-light posts-solution">
                                                                {{ $solution->user->email ?? 'anonymous@gmail.com' }}
                                                            </p>
                                                            <p href="#"
                                                                class="float-right  waves-effect waves-light posts-solution-number">
                                                                {{ $solution->user->phone ?? '0802-XXX-XXXX' }}</p>
                                                        </div>
                                                        <div>
                                                            <p href="#"
                                                                class="float-left waves-effect waves-light posts-country">
                                                                {{ $solution->user->country ?? 'Space' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            @endforeach
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->



                <!-- Needs Modal -->
                @foreach($posts as $purpose)
                <div class="modal fade needsModal{{ $purpose->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog tada animated">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title need-title" id="exampleModalLabel" style="color: #070D2D;">
                                    Purpose</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="user-need-details">
                                    <div class="user-need-detail">
                                        <p style="color: #727796;">{{ $purpose->created_at->format('d M Y h:ia T') }}</p>
                                        <p style="color: #070D2D;">{{ $purpose->user->email }}</p>
                                    </div>

                                    <div class="user-need-detail">
                                        <p style="color: #727796;">{{ $purpose->user->country }}</p>
                                        <p style="color: #070D2D;">{{ $purpose->user->phone ?? '0802-XXX-XXXX' }}</p>
                                    </div>
                                </div>

                                <h5 class="need-description" style="font-weight: 420; color: #FE5430;" id="">
                                    Need Title: {{ $purpose->title }}</h5>
                                <p style="color: #0C0932;">
                                    {{ $purpose->description }}
                                </p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                @endforeach



                <!-- Solutions Modal -->
                @foreach($solutions as $solution)
                <div class="modal fade solutions-modal{{ $solution->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog tada animated">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title need-title" id="exampleModalLabel" style="color: #070D2D;">
                                    Solution Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="user-need-details">
                                    <div class="user-need-detail">
                                        <p style="color: #727796;">{{ $solution->created_at->format('d M Y h:ia T') }}
                                        </p>
                                        <p style="color: #070D2D;">{{ $solution->user->email ?? 'anonymous@gmail.com' }}
                                        </p>
                                    </div>

                                    <div class="user-need-detail">
                                        <p style="color: #727796;">{{ $solution->user->country ?? 'Space' }}</p>
                                        <p style="color: #070D2D;">{{ $solution->user->phone ?? '0802-XXX-XXXX' }}</p>
                                    </div>
                                </div>

                                <h5 class="need-description" style="font-weight: 420; color: #FE5430;" id="">
                                    Need Title: {{ $solution->purpose->title }}</h5>
                                <p style="color: #0C0932;">
                                    {{ $solution->solution_description }}
                                </p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                @endforeach


            </div><!-- container -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    <footer class="footer">
        © 2024 My1need.
    </footer>

</div>
<!-- End Right content here -->
@endsection