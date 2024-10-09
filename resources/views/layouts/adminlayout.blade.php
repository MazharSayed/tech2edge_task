<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">


<link href="{{asset('css/main.css')}}" rel="stylesheet"></head>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow" style="background: #fff!important">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                    <img width="40" class="rounded-circle" src="{{asset('svg/logo1.png')}}"
                                                alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8" style="color: #000;"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">

                                            <form method="post" action="{{route('logout')}}">

                                                @csrf
                                                <button type="submit" tabindex="0" class="dropdown-item" >Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar" >
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li>
                                <a href="{{route('home')}}" class="mt-4">
                                        <i class="metismenu-icon  fa fa-home"></i>
                                        Dashboard
                                    </a>
                                </li>

                            <li>
                                <a href="{{ route('pages.index')}}">
                                    <i class="fa fa-tag metismenu-icon" aria-hidden="true"></i>
                                   Pages
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
            @yield('content')
                </div>

            </div>


        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <Script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></Script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable({order:[[0,"desc"]]});
} );
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    const yearPickerInput = document.getElementById('yearPickerInput');

    // Create a dropdown for years
    const startYear = 1900;
    const endYear = new Date().getFullYear();
    let yearOptions = '';

    for (let year = endYear; year >= startYear; year--) {
        yearOptions += `<option value="${year}">${year}</option>`;
    }

    // Create a Bootstrap modal to show year options
    const yearPickerModal = document.createElement('div');
    yearPickerModal.classList.add('modal', 'fade');
    yearPickerModal.id = 'yearPickerModal';
    yearPickerModal.setAttribute('tabindex', '-1');
    yearPickerModal.setAttribute('aria-labelledby', 'yearPickerModalLabel');
    yearPickerModal.setAttribute('aria-hidden', 'true');
    yearPickerModal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="yearPickerModalLabel">Select Year</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <select class="form-select" id="yearSelect" size="10">
                        ${yearOptions}
                    </select>
                </div>
            </div>
        </div>
    `;
    document.body.appendChild(yearPickerModal);

    const yearPickerModalInstance = new bootstrap.Modal(yearPickerModal);

    yearPickerInput.addEventListener('click', function() {
        yearPickerModalInstance.show();
    });

    document.getElementById('yearSelect').addEventListener('change', function() {
        yearPickerInput.value = this.value;
        yearPickerModalInstance.hide();
    });
});

</script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
