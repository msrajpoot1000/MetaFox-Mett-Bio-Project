<style>
    .header-profile-user {
    width: 36px;
    height: 36px;
    font-weight: bold;
    font-size: 16px;
    text-transform: uppercase;
}

</style>




<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-light-sm.png" alt="" height="26">
                    </span>
                </a>
            </div>

            <button type="button"
                class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <!-- start page title -->
            <div class="page-title-box align-self-center d-none d-md-block">
                <h4 class="page-title mb-0 text-capitalize">Hi, Welcome {{ Auth()->user()->name }}</h4>
            </div>
            <!-- end page title -->

        </div>

        <div class="d-flex">
            @php
                $user = Auth()->user();
                $userName = $user->name;
                $userImage = $user->profile_image ?? null; // adjust the field name if different
            @endphp

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    
                    @if ($userImage && file_exists(public_path('assets/images/users/' . $userImage)))
                        <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/' . $userImage) }}" alt="Header Avatar">
                    @else
                        <div class="rounded-circle header-profile-user bg-primary text-white d-flex justify-content-center align-items-center"
                            style="width: 36px; height: 36px; font-size: 16px;">
                            {{ strtoupper(substr($userName, 0, 1)) }}
                        </div>
                    @endif
                    
                    <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15 text-capitalize">{{ $userName }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0 text-capitalize">{{ $userName }}</h6>
                        <p class="mb-0 font-size-11 text-muted">{{ $user->email }}</p>
                    </div>
                    <a class="dropdown-item" href="/profile">
                        <i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle">Profile</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i>
                            <span class="align-middle">Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
