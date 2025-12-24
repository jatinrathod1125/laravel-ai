<div class="left-side-bar">
    <div class="overlay-mobile-area"></div>
    <div class="inner">
        <div class="single-menu-wrapper">
            <a href="{{ route('dashboard') }}" class="single-menu openuptip" flow="right" tooltip="Search">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/01.png') }}" alt="icons">
                </div>
                <p>Home</p>
            </a>
            <a href="community-feed" class="single-menu openuptip" flow="right" tooltip="Search">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/02.png') }}" alt="icons">
                </div>
                <p>Community Feed</p>
            </a>
            <a href="community-details" class="single-menu openuptip" flow="right" tooltip="Search">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/02.png') }}" alt="icons">
                </div>
                <p>Community Details</p>
            </a>
            <a href="manage-subscription" class="single-menu openuptip" flow="right" tooltip="Search">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/03.png') }}" alt="icons">
                </div>
                <p>Manage Subscription</p>
            </a>
        </div>
        <div class="single-menu-wrapper">
            <a href="chatbot" class="single-menu openuptip" flow="right" tooltip="Search">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/04.png') }}" alt="icons">
                </div>
                <p>AI Chat Bot</p>
            </a>
            <a href="image-generator" class="single-menu openuptip" flow="right" tooltip="Search">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/05.png') }}" alt="icons">
                </div>
                <p>Image Generator</p>
            </a>
            <a href="voicegenerator" class="single-menu openuptip" flow="right" tooltip="Search">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/06.png') }}" alt="icons">
                </div>
                <p>Voice Generate</p>
            </a>
        </div>
        <div class="single-menu-wrapper">
            <a class="collapse-btn collapsed single-menu" data-bs-toggle="collapse" href="#collapseExample"
                role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/08.png') }}" alt="icons">
                </div>
                <p>Settings</p>
            </a>
            <div class="collapse" id="collapseExample">
                <ul class="submenu rts-default-sidebar-list">
                    <li>
                        <a href="faq">
                            <i class="fa-sharp fa-regular fa-user"></i>
                            <span>FAQ's</span>
                        </a>
                    </li>
                    <li>
                        <a href="reset">
                            <i class="fa-sharp fa-regular fa-users"></i>
                            <span>Reset Password</span>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="logout" class="single-menu">
                <div class="icon">
                    <img src="{{ URL::asset('build/images/icons/09.png') }}" alt="icons">
                </div>
                <p>Logout</p>
            </a>
        </div>
    </div>
    <div class="bottom-user">
        <div class="user-wrapper">
            <img src="{{ URL::asset('build/images/avatar/02.png') }}" alt="avatar">
            <div class="info w-100 overflow-hidden">
                @auth
                    <h6 class="title text-truncate">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </h6>
                    <a href="#" class="d-block text-truncate">
                        {{ Auth::user()->email }}
                    </a>
                @endauth

            </div>

            <span>Free</span>
        </div>
        <div class="pro-upgrade">
            <button class="rts-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo">
                <img src="{{ URL::asset('build/images/icons/14.png') }}" alt="icons">
                Upgrade To Pro
            </button>
        </div>
    </div>
</div>

<!-- Optional: Include Bootstrap or other necessary JavaScript libraries -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get current URL path and location
        var path = window.location.pathname;
        var page = path.split("/").pop();

        // Add active class to appropriate menu item
        var menuLinks = document.querySelectorAll('.single-menu');

        menuLinks.forEach(function(menuLink) {
            var link = menuLink.getAttribute('href');

            // Check if the current page URL matches the menu link
            if (page === link || (page === '' && link === '/')) {
                menuLink.classList.add('active');
            }
        });
    });
</script>
