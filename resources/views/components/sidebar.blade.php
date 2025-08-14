<div>
    <aside class="app-sidebar" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="index.html" class="header-logo">
                <img src="build/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                <img src="build/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                <img src="build/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                <img src="build/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                <img src="build/assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                <img src="build/assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-col sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                        viewbox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </div>
                <div
                    class="p-4 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl shadow-lg text-white flex flex-col items-center">
                    <!-- Wallet Title (Shown only when expanded) -->
                    <p class="text-lg font-semibold flex items-center">
                        <!-- Wallet Icon (FlatIcon) for collapsed state -->
                        <img src="https://cdn-icons-png.flaticon.com/128/855/855279.png" alt="Wallet Icon"
                            class="w-6 h-6 mr-2 side-menu__icon" />

                        <!-- Text for expanded state -->
                        <span class="side-menu__label text-2xl">Wallet Balance</span>
                    </p>

                    <!-- Wallet Amount (Single element, visible always) -->
                    <p class="text-xl font-bold mt-1">₹ {{ Auth::user()->wallet_balance }}</p>

                    <!-- Add Credit Button -->
                    <button
                        class="mt-3 px-4 py-2 bg-white text-blue-600 gap-0 font-semibold rounded-lg shadow-md hover:bg-gray-200 transition flex items-center justify-center">
                        <!-- Plus icon (Only when collapsed) -->
                        <span style="color: #2196F3;margin-inline-end:0.2rem" class="text-xl side-menu__icon"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828817.png" width="24" alt="Plus Icon"/></span>
                        <!-- Add Credit text (Only when expanded) -->
                        <span style="color: #2196F3" class="side-menu__label text-2xl text-blue-600 font-semibold rounded-lg">Add Credit</span>
                    </button>
                </div>


                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="/dashboard" class="side-menu__item">
                            {{-- <i class="ri-arrow-down-s-line side-menu__angle"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                </path>
                            </svg>
                            <span class="side-menu__label">Overview</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Overview</a>
                            </li>
                            {{-- <li class="slide">
                                <a href="index.html" class="side-menu__item">Sales</a>
                            </li>
                            <li class="slide">
                                <a href="index2.html" class="side-menu__item">Analytics</a>
                            </li>
                            <li class="slide">
                                <a href="index3.html" class="side-menu__item">Ecommerce</a>
                            </li>
                            <li class="slide">
                                <a href="index4.html" class="side-menu__item">CRM</a>
                            </li>
                            <li class="slide">
                                <a href="index5.html" class="side-menu__item">HRM</a>
                            </li>
                            <li class="slide">
                                <a href="index6.html" class="side-menu__item">NFT</a>
                            </li>
                            <li class="slide">
                                <a href="index7.html" class="side-menu__item">Crypto</a>
                            </li>
                            <li class="slide">
                                <a href="index8.html" class="side-menu__item">Jobs</a>
                            </li>
                            <li class="slide">
                                <a href="index9.html" class="side-menu__item">Projects</a>
                            </li>
                            <li class="slide">
                                <a href="index10.html" class="side-menu__item">Courses</a>
                            </li>
                            <li class="slide">
                                <a href="index11.html" class="side-menu__item">Stocks</a>
                            </li>
                            <li class="slide">
                                <a href="index12.html" class="side-menu__item">Medical</a>
                            </li>
                            <li class="slide">
                                <a href="index13.html" class="side-menu__item">POS System</a>
                            </li>
                            <li class="slide">
                                <a href="index14.html" class="side-menu__item">Podcast</a>
                            </li>
                            <li class="slide">
                                <a href="index15.html" class="side-menu__item">School</a>
                            </li>
                            <li class="slide">
                                <a href="index16.html" class="side-menu__item">Social Media</a>
                            </li> --}}
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    {{-- <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"></path>
                            </svg>
                            <span class="side-menu__label">Plan</span>
                            <i class="ri-arrow-down-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0)">Plan</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="add-products.html" class="side-menu__item">Add Products</a>
                                    </li>
                                    <li class="slide">
                                        <a href="cart.html" class="side-menu__item">Cart</a>
                                    </li>
                                    <li class="slide">
                                        <a href="checkout.html" class="side-menu__item">Checkout</a>
                                    </li>
                                    <li class="slide">
                                        <a href="edit-products.html" class="side-menu__item">Edit Products</a>
                                    </li>
                                    <li class="slide">
                                        <a href="order-details.html" class="side-menu__item">Order Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="orders.html" class="side-menu__item">Orders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="products.html" class="side-menu__item">Products</a>
                                    </li>
                                    <li class="slide">
                                        <a href="product-details.html" class="side-menu__item">Product Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="products-list.html" class="side-menu__item">Products List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                            </li>
                            <li class="slide">
                                <a href="gallery.html" class="side-menu__item">Gallery</a>
                            </li>
                            <li class="slide">
                                <a href="sweet-alerts.html" class="side-menu__item">Sweet Alerts</a>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Projects
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="projects-list.html" class="side-menu__item">Projects List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="projects-overview.html" class="side-menu__item">Project Overview</a>
                                    </li>
                                    <li class="slide">
                                        <a href="projects-create.html" class="side-menu__item">Create Project</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Task
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="task-kanban-board.html" class="side-menu__item">Kanban Board</a>
                                    </li>
                                    <li class="slide">
                                        <a href="task-list-view.html" class="side-menu__item">List View</a>
                                    </li>
                                    <li class="slide">
                                        <a href="task-details.html" class="side-menu__item">Task Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Jobs
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="job-details.html" class="side-menu__item">Job Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-company-search.html" class="side-menu__item">Search Company</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-search.html" class="side-menu__item">Search Jobs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-post.html" class="side-menu__item">Job Post</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-list.html" class="side-menu__item">Job List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-candidate-search.html" class="side-menu__item">Search Candidate</a>
                                    </li>
                                    <li class="slide">
                                        <a href="job-candidate-details.html" class="side-menu__item">Candidate Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">NFT
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="nft-marketplace.html" class="side-menu__item">Market Place</a>
                                    </li>
                                    <li class="slide">
                                        <a href="nft-details.html" class="side-menu__item">NFT Details</a>
                                    </li>
                                    <li class="slide">
                                        <a href="nft-create.html" class="side-menu__item">Create NFT</a>
                                    </li>
                                    <li class="slide">
                                        <a href="nft-wallet-integration.html" class="side-menu__item">Wallet Integration</a>
                                    </li>
                                    <li class="slide">
                                        <a href="nft-live-auction.html" class="side-menu__item">Live Auction</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">CRM
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="crm-contacts.html" class="side-menu__item">Contacts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crm-companies.html" class="side-menu__item">Companies</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crm-deals.html" class="side-menu__item">Deals</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crm-leads.html" class="side-menu__item">Leads</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Crypto
                                    <i class="ri-arrow-down-s-line side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="crypto-transactions.html" class="side-menu__item">Transactions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-currency-exchange.html" class="side-menu__item">Currency Exchange</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-buy-sell.html" class="side-menu__item">Buy & Sell</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-marketcap.html" class="side-menu__item">Marketcap</a>
                                    </li>
                                    <li class="slide">
                                        <a href="crypto-wallet.html" class="side-menu__item">Wallet</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="/pricing" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Plan</span>
                        </a>
                    </li>
                    <!-- End::slide -->


                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="/rate-limits" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 side-menu__icon" width="24"
                                height="24" viewBox="0 0 24 24"
                                style="fill: rgba(162, 166, 185, 1);transform: ;msFilter:;">
                                <path
                                    d="M12 4C6.486 4 2 8.486 2 14a9.89 9.89 0 0 0 1.051 4.445c.17.34.516.555.895.555h16.107c.379 0 .726-.215.896-.555A9.89 9.89 0 0 0 22 14c0-5.514-4.486-10-10-10zm7.41 13H4.59A7.875 7.875 0 0 1 4 14c0-4.411 3.589-8 8-8s8 3.589 8 8a7.875 7.875 0 0 1-.59 3z">
                                </path>
                                <path
                                    d="M10.939 12.939a1.53 1.53 0 0 0 0 2.561 1.53 1.53 0 0 0 2.121-.44l3.962-6.038a.034.034 0 0 0 0-.035.033.033 0 0 0-.045-.01l-6.038 3.962z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Rate Limit</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="/developer" class="side-menu__item">
                            <svg class="w-6 h-6 side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24"
                                style="fill: rgba(162, 166, 185, 1);transform: ;msFilter:;">
                                <path
                                    d="m7.375 16.781 1.25-1.562L4.601 12l4.024-3.219-1.25-1.562-5 4a1 1 0 0 0 0 1.562l5 4zm9.25-9.562-1.25 1.562L19.399 12l-4.024 3.219 1.25 1.562 5-4a1 1 0 0 0 0-1.562l-5-4zm-1.649-4.003-4 18-1.953-.434 4-18z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Developer</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <li class="slide">
                        <a href="payment-billings" class="side-menu__item">
                            <svg class="w-6 h-6 side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24"
                                style="fill: rgba(162, 166, 185, 1);transform: ;msFilter:;">
                                <path
                                    d="M20 7V5c0-1.103-.897-2-2-2H5C3.346 3 2 4.346 2 6v12c0 2.201 1.794 3 3 3h15c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zm-2 9h-2v-4h2v4zM5 7a1.001 1.001 0 0 1 0-2h13v2H5z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Payment & Billing</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <li class="slide">
                        <a href="/transactions" class="side-menu__item">
                            <svg class="w-6 h-6 side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" style="fill: rgba(162, 166, 185, 1);">
                                <path
                                    d="M21 7h-6V3H9v4H3a1 1 0 0 0-1 1v10a3 3 0 0 0 3 3h16a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM9 5h6v2H9V5zm10 14H5a1 1 0 0 1-1-1V9h16v9a1 1 0 0 1-1 1zm-7-5h4a1 1 0 0 1 0 2h-4v1a1 1 0 0 1-2 0v-1H6a1 1 0 0 1 0-2h4v-1a1 1 0 0 1 2 0v1z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Transactions</span>
                        </a>
                    </li>


                    <li class="slide">
                        <a href="/alerts" class="side-menu__item">
                            <svg class="w-6 h-6 side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24"
                                style="fill: rgba(162, 166, 185, 1);transform: ;msFilter:;">
                                <path
                                    d="m5.705 3.71-1.41-1.42C1 5.563 1 7.935 1 11h1l1-.063C3 8.009 3 6.396 5.705 3.71zm13.999-1.42-1.408 1.42C21 6.396 21 8.009 21 11l2-.063c0-3.002 0-5.374-3.296-8.647zM12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm7-7.414V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.184 4.073 5 6.783 5 10v4.586l-1.707 1.707A.996.996 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.996.996 0 0 0-.293-.707L19 14.586z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Notifications & Alerts</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <li class="slide">
                        <a href="/settings" class="side-menu__item">
                            <svg class="w-6 h-6 side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24"
                                style="fill: rgba(162, 166, 185, 1);transform: ;msFilter:;">
                                <path
                                    d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Settings</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <li class="slide">
                        <a href="/support-feedback" class="side-menu__item">
                            <svg class="w-6 h-6 side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24"
                                style="fill: rgba(162, 166, 185, 1);transform: ;msFilter:;">
                                <path
                                    d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Support & Feedback</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <li class="slide">
                        <a href="{{ route('logout') }}" class="side-menu__item">
                            <svg class="w-6 h-6 side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24"
                                style="fill: rgba(162, 166, 185, 1);transform: ;msFilter:;">
                                <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                                <path
                                    d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                                </path>
                            </svg>
                            <span class="side-menu__label">Logout</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <br><br><br><br>



                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewbox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->

    </aside>
</div>
