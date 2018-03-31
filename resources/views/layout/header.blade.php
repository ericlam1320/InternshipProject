<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">

                    <img src="" />
                </a>

            </div>

            <div class="right-div">
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button href="{{ route('logout') }}" class="btn btn-danger pull-right">ĐĂNG XUẤT</button>
            </form>         

            </div>
        </div>
    </div>