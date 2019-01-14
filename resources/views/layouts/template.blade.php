<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>{{ config('app.name', 'Laravel') }} -  @yield('judul')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="{{ asset('assets/css/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/demo5/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="{{ asset('assets/css/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- begin::Header -->
			<header id="m_header" class="m-grid__item		m-header " m-minimize="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-header__top">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">

							<!-- begin::Brand -->
							<div class="m-stack__item m-brand">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="{{route('home')}}" class="m-brand__logo-wrapper">
											<img alt="" src="{{ asset('assets/images/logo.png')}}" />
										</a>
									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">
										
										<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>

										<!-- end::Responsive Header Menu Toggler-->

										<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
											<i class="flaticon-more"></i>
										</a>

										<!--end::Topbar Toggler-->
									</div>
								</div>
							</div>

							<!-- end::Brand -->

							<!-- begin::Topbar -->
							<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
									<div class="m-stack__item m-topbar__nav-wrapper">
										<ul class="m-topbar__nav m-nav m-nav--inline">
											<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
											 m-dropdown-toggle="click">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__welcome">Hello,&nbsp;</span>
													<span class="m-topbar__username">{{ Auth::user()->name }}</span>
													<span class="m-topbar__userpic">
														<img src="{{ asset('assets/images/user.jpg')}}" class="m--img-rounded m--marginless m--img-centered" alt="" />
													</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center" style="background: url({{asset('assets/images/user_profile_bg.jpg')}}); background-size: cover;">
															<div class="m-card-user m-card-user--skin-dark">
																<div class="m-card-user__pic">
																	<img src="{{ asset('assets/images/user.jpg')}}" class="m--img-rounded m--marginless" alt="" />
																</div>
																<div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">{{ Auth::user()->name }}</span>
																	<a href="" class="m-card-user__email m--font-weight-300 m-link">{{ Auth::user()->email }}</a>
																</div>
															</div>
														</div>
														<div class="m-dropdown__body">
															<div class="m-dropdown__content">
																<ul class="m-nav m-nav--skin-light">
																	<li class="m-nav__section m--hide">
																		<span class="m-nav__section-text">Section</span>
																	</li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-profile-1"></i>
																			<span class="m-nav__link-title">
																				<span class="m-nav__link-wrap">
																					<span class="m-nav__link-text">Profil saya</span>
																					{{-- <span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span> --}}
																				</span>
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">{{ __('Keluar') }}</a>
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            @csrf
                                                                        </form>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- end::Topbar -->
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">

							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item  m-menu__item " aria-haspopup="true"><a href="{{route('home')}}" class="m-menu__link "><span class="m-menu__item-here"></span><span class="m-menu__link-text">Dashboard</span></a></li>
										<li class="m-menu__item  m-menu__item " aria-haspopup="true"><a href="{{route('dosen.index')}}" class="m-menu__link "><span class="m-menu__item-here"></span><span class="m-menu__link-text" title="Kelola Dosen">Dosen</span></a></li>
										<li class="m-menu__item  m-menu__item " aria-haspopup="true"><a href="{{route('kurikulum.index')}}" class="m-menu__link "><span class="m-menu__item-here"></span><span class="m-menu__link-text" title="Kelola Dosen">Kurikulum</span></a></li>
										<li class="m-menu__item  m-menu__item" aria-haspopup="true"><a href="{{route('ruangan.index')}}" class="m-menu__link " title="Kelola Ruang Perkuliahan"><span class="m-menu__item-here"></span><span class="m-menu__link-text" title="Kelola Ruang Kuliah">Ruang Perkuliahan</span></a></li>
										<li class="m-menu__item  m-menu__item" aria-haspopup="true"><a href="{{route('kelas.index')}}" class="m-menu__link " title="Kelola Kelas Perkuliahan"><span class="m-menu__item-here"></span><span class="m-menu__link-text" title="Kelola Ruang Kuliah">Kelas Perkuliahan</span></a></li>
										{{-- <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Kelola Kurikulum"><span class="m-menu__item-here"></span><span
												 class="m-menu__link-text">Kurikulum</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="{{route('kurikulum.index',61201)}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-interface-6"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">S1 Manajemen</span></span></span></a></li>
													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="{{route('kurikulum.index',61101)}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-interface-7"></i><span class="m-menu__link-text">S2 Manajemen</span></a></li>
												</ul>
											</div>
										</li> --}}
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Kelola Mata Kuliah"><span
												 class="m-menu__item-here"></span><span class="m-menu__link-text">Mata Kuliah</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<div class="m-menu__subnav">
													<ul class="m-menu__content">
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">S1 Manajemen</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="{{route('matakuliah.prodi', 2)}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Daftar Mata Kuliah S1</span></a></li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">S2 Manajemen</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="{{route('matakuliah.prodi', 1)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Daftar Mata Kuliah S2</span></a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
										{{-- <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Kelola Mata Kuliah"><span
											class="m-menu__item-here"></span><span class="m-menu__link-text">Kelas Perkuliahan</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<div class="m-menu__subnav">
													<ul class="m-menu__content">
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">S1 Manajemen</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="{{route('kelas.prodi', 2)}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Kelas Perkuliahan S1</span></a></li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">S2 Manajemen</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="{{route('kelas.prodi', 1)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Kelas Perkuliahan S2</span></a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li> --}}
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Kelola Jadwal Perkuliahan"><span
											class="m-menu__item-here"></span><span class="m-menu__link-text">Jadwal Kuliah</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
									   <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
										   <div class="m-menu__subnav">
											   <ul class="m-menu__content">
												   <li class="m-menu__item">
													   <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">S1 Manajemen</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
													   <ul class="m-menu__inner">
														   <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="{{route('jadwal.index')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Jadwal Kuliah S1</span></a></li>
													   </ul>
												   </li>
												   <li class="m-menu__item">
													   <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">S2 Manajemen</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
													   <ul class="m-menu__inner">
														   <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="{{route('jadwal.index')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Jadwa Kuliah S2</span></a></li>
													   </ul>
												   </li>
											   </ul>
										   </div>
									   </div>
								   </li>
									</ul>
								</div>
							</div>

							<!-- end::Horizontal Menu -->

							<!--begin::Search-->
							<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch"
							 m-quicksearch-mode="default">

								<!--begin::Search Form -->
								<form class="m-header-search__form">
									<div class="m-header-search__wrapper">
										<span class="m-header-search__icon-search" id="m_quicksearch_search">
											<i class="la la-search"></i>
										</span>
										<span class="m-header-search__input-wrapper">
											<input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
										</span>
										<span class="m-header-search__icon-close" id="m_quicksearch_close">
											<i class="la la-remove"></i>
										</span>
										<span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
											<i class="la la-remove"></i>
										</span>
									</div>
								</form>

								<!--end::Search Form -->

								<!--begin::Search Results -->
								<div class="m-dropdown__wrapper">
									<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__body">
											<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
												<div class="m-dropdown__content m-list-search m-list-search--skin-light">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--end::Search Results -->
							</div>

							<!--end::Search-->
						</div>
					</div>
				</div>
			</header>

			<!-- end::Header -->

			@yield('konten');

			<!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2018 &copy; MyIBMT by <a href="https://ibmt.ac.id" class="m-link">STIE IBMT Surabaya</a>
								</span>
							</div>
							<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
								<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">About</span>
										</a>
									</li>
									<li class="m-nav__item m-nav__item--last">
										<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
											<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
			
		</div>

		<!-- end:: Page -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!--begin::Global Theme Bundle -->
		<script src="{{ asset('assets/js/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="{{ asset('assets/js/fullcalendar.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/datatables.bundle.js')}}" type="text/javascript"></script>
		@stack('kurikulum')
		@stack('dosen')
		@stack('ruangkuliah')
		@stack('matakuliah')
		@stack('kelas')
		{{-- <script src="{{ asset('assets/js/html-table.js')}}" type="text/javascript"></script> --}}
		{{-- <script src="{{ asset('assets/js/advanced-search.js')}}" type="text/javascript"></script> --}}
		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{ asset('assets/js/dashboard.js')}}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/bootstrap-timepicker.js')}}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
		

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>