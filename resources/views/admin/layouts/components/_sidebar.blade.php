<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="/admin/dist/assets/images/faces/face1.jpg" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('articles.index') }}" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Bài viết</span>
                <i class="fa fa-file-text menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Danh mục</span>
                <i class="fa fa-list menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Tag</span>
                <i class="fa fa-tags menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}" aria-expanded="false" aria-controls="forms">
                <span class="menu-title">Người dùng</span>
                {{-- <i class="mdi mdi-format-list-bulleted menu-icon"></i> --}}
                <i class="fa fa-user-circle menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Bình luận</span>
                <i class="fa fa-comment menu-icon"></i>
            </a>
        </li>

    </ul>
</nav>
