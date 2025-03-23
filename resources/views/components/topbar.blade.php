<div>
    <header class="app-header sticky" id="header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <div class="header-element">
                    <div class="horizontal-logo">
                        <a href="index.html" class="header-logo">
                            <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                            {{-- <img src="build/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark"> --}}
                            {{-- <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark"> --}}
                            <img src="build/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo" width="28">
                            {{-- <img src="build/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white"> --}}
                        </a>
                    </div>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element mx-lg-0">
                    <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element header-search md:!block !hidden my-auto auto-complete-search">
                    <!-- Start::header-link -->
                    <input type="text" class="header-search-bar form-control" id="header-search" placeholder="Search anything here ..." spellcheck="false" autocomplete="off" autocapitalize="off">
                    <a href="javascript:void(0);" class="header-search-icon border-0">
                        <i class="ri-search-line"></i>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <ul class="header-content-right">

                <!-- Start::header-element -->
                <li class="header-element md:!hidden block">
                    <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-hs-overlay="#header-responsive-search">
                        <!-- Start::header-link-icon -->
                        <i class="bi bi-search header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </a>
                </li>
                <!-- End::header-element -->



                <!-- Start::header-element -->
                <!-- light and dark theme -->
                <li class="header-element header-theme-mode hidden !items-center sm:block md:!px-[0.5rem] px-2">
                    <a aria-label="anchor" class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 text-textmuted dark:text-textmuted/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10" href="javascript:void(0);" data-hs-theme-click-value="dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"></path>
                        </svg>
                    </a>
                    <a aria-label="anchor" class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium text-defaulttextcolor  transition-all text-xs dark:bg-bodybg dark:bg-bgdark dark:hover:bg-black/20  dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10" href="javascript:void(0);" data-hs-theme-click-value="light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                        </svg>
                    </a>
                </li>
                <!-- End light and dark theme -->

                <!-- End::header-element -->



                <!-- Start::header-element -->
                <li class="header-element notifications-dropdown !hidden xl:!block hs-dropdown ti-dropdown [--auto-close:inside]">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link hs-dropdown-toggle ti-dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5"></path>
                        </svg>
                        <span class="header-icon-pulse bg-primarytint2color rounded pulse pulse-secondary"></span>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <!-- Start::main-header-dropdown -->
                    <div class="main-header-dropdown hs-dropdown-menu ti-dropdown-menu hidden" data-popper-placement="none">
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <p class="mb-0 text-[15px] font-medium">Notifications</p>
                                <span class="badge bg-secondary text-white rounded-sm" id="notifiation-data">5 Unread</span>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-none mb-0" id="header-notification-scroll">
                            <li class="ti-dropdown-item block">
                                <div class="flex items-center">
                                    <div class="pe-2 leading-none">
                                        <span class="avatar avatar-md avatar-rounded bg-primary">
                                            <img src="build/assets/images/faces/1.jpg" alt="user1">
                                        </span>
                                    </div>
                                    <div class="grow flex items-center justify-between">
                                        <div>
                                            <p class="mb-0 font-medium"><a href="chat.html">New Messages</a></p>
                                            <div class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate">
                                                Jane Sam sent you a message.</div>
                                            <div class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8">
                                                Now</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ti-dropdown-item block">
                                <div class="flex items-center">
                                    <div class="pe-2 leading-none">
                                        <span class="avatar avatar-md bg-primary avatar-rounded text-xl">
                                            <i class="fe fe-shopping-cart leading-none "></i>
                                        </span>
                                    </div>
                                    <div class="grow flex items-center justify-between">
                                        <div>
                                            <p class="mb-0 font-medium"><a href="chat.html">Order Updates</a></p>
                                            <div class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate">
                                                Order <span class="text-primarytint1color">#54321</span> has been shipped.
                                            </div>
                                            <div class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8">
                                                2 hours ago</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ti-dropdown-item block">
                                <div class="flex items-center">
                                    <div class="pe-2 leading-none">
                                        <span class="avatar avatar-md bg-orange avatar-rounded">
                                            <img src="build/assets/images/faces/10.jpg" alt="user1">
                                        </span>
                                    </div>
                                    <div class="grow flex items-center justify-between">
                                        <div>
                                            <p class="mb-0 font-medium"><a href="chat.html">Comment on Post</a></p>
                                            <div class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate">
                                                Reacted: <span class="text-primary3">John Richard</span> on your next
                                                purchase!</div>
                                            <div class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8">
                                                2 hours ago</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ti-dropdown-item block">
                                <div class="flex items-center">
                                    <div class="pe-2 leading-none">
                                        <span class="avatar avatar-md bg-success avatar-rounded">
                                            <img src="build/assets/images/faces/11.jpg" alt="user1">
                                        </span>
                                    </div>
                                    <div class="grow flex items-center justify-between">
                                        <div>
                                            <p class="mb-0 font-medium"><a href="chat.html">Follow Request</a></p>
                                            <div class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate">
                                                <span class="text-info">Kelin Brown</span> has sent you the request.</div>
                                            <div class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8">
                                                1 Day ago</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ti-dropdown-item block">
                                <div class="flex items-center">
                                    <div class="pe-2 leading-none">
                                        <span class="avatar avatar-md bg-primarytint2color avatar-rounded">
                                            <i class="ri-gift-line leading-none text-[1rem]"></i>
                                        </span>
                                    </div>
                                    <div class="grow flex items-center justify-between">
                                        <div>
                                            <p class="mb-0 font-medium"><a href="chat.html">Exclusive Offers</a></p>
                                            <div class="text-textmuted dark:text-textmuted/50 font-normal text-xs header-notification-text truncate">
                                                Enjoy<span class="text-success">20% off</span> on your next purchase!</div>
                                            <div class="font-normal text-[10px] text-textmuted dark:text-textmuted/50 op-8">
                                                5 hours ago</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="min-w-fit-content dropdown-item-close1">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="p-4 empty-header-item1 border-t">
                            <div class="grid">
                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">View All</a>
                            </div>
                        </div>
                        <div class="p-[3rem] empty-item1 hidden">
                            <div class="text-center">
                                <span class="avatar avatar-xl avatar-rounded bg-secondary/10 !text-secondary">
                                    <i class="ri-notification-off-line fs-2"></i>
                                </span>
                                <h6 class="font-medium mt-3">No New Notifications</h6>
                            </div>
                        </div>
                    </div>
                    <!-- End::main-header-dropdown -->
                </li>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                {{-- <li class="header-element header-fullscreen"> --}}
                    <!-- Start::header-link -->
                    {{-- <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-open header-link-icon" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 full-screen-close header-link-icon hidden" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25"></path>
                        </svg>
                    </a> --}}
                    <!-- End::header-link -->
                {{-- </li> --}}
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <li class="header-element ti-dropdown hs-dropdown">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link hs-dropdown-toggle ti-dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <div class="flex items-center">
                            <div>
                                <img src="build/assets/images/faces/15.jpg" alt="img" class="avatar avatar-sm mb-0">
                            </div>
                        </div>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="main-header-dropdown hs-dropdown-menu ti-dropdown-menu pt-0 overflow-hidden header-profile-dropdown hidden" aria-labelledby="mainHeaderProfile">
                        <li>
                            <div class="ti-dropdown-item text-center border-b border-defaultborder dark:border-defaultborder/10 block">
                                <span>
                                    Mr.Henry
                                </span>
                                <span class="block text-xs text-textmuted dark:text-textmuted/50">UI/UX Designer</span>
                            </div>
                        </li>
                        <li><a class="ti-dropdown-item flex items-center" href="profile.html"><i class="fe fe-user p-1 rounded-full bg-primary/10 text-primary me-2 text-[1rem]"></i>Profile</a>
                        </li>
                        <li><a class="ti-dropdown-item flex items-center" href="mail.html"><i class="fe fe-mail p-1 rounded-full bg-primary/10 text-primary me-2 text-[1rem]"></i>Mail
                                Inbox</a></li>
                        <li><a class="ti-dropdown-item flex items-center" href="filemanager.html"><i class="fe fe-database p-1 rounded-full bg-primary/10 text-primary klist me-2 text-[1rem]"></i>File
                                Manger<span class="badge bg-primarytint1color text-white ms-auto text-[0.5625rem]">2</span></a></li>
                        <li><a class="ti-dropdown-item flex items-center" href="mail-settings.html"><i class="fe fe-settings p-1 rounded-full bg-primary/10 text-primary ings me-2 text-[1rem]"></i>Settings</a>
                        </li>
                        <li class="border-t border-defaultborder dark:border-defaultborder/10 bg-light"><a class="ti-dropdown-item flex items-center" href="chat.html"><i class="fe fe-help-circle p-1 rounded-full bg-primary/10 text-primary set me-2 text-[1rem]"></i>Help</a>
                        </li>
                        <li><a class="ti-dropdown-item flex items-center" href="signin-cover.html"><i class="fe fe-lock p-1 rounded-full bg-primary/10 text-primary ut me-2 text-[1rem]"></i>Log
                                Out</a></li>
                    </ul>
                </li>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                {{-- <li class="header-element"> --}}
                    <!-- Start::header-link|switcher-icon -->
                    {{-- <a href="javascript:void(0);" class="header-link switcher-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 header-link-icon" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                        </svg>
                    </a> --}}
                    <!-- End::header-link|switcher-icon -->
                {{-- </li> --}}
                <!-- End::header-element -->

            </ul>
            <!-- End::header-content-right -->

        </div>
        <!-- End::main-header-container -->

    </header>
</div>