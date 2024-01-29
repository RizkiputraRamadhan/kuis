<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favicon.png') }}">
    <title>Dashboard</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/dist/css/custom.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
    .scrollable::-webkit-scrollbar {
        width: 2px;
    }

    .scrollable::-webkit-scrollbar-thumb {
        background-color: #888888;
        /* Warna garis scroll */
        border-radius: 5px;
    }

    .scrollable::-webkit-scrollbar-track {
        background: transparent;
        /* Hapus latar belakang bayangan */
    }

    .title-welcome {
        background-color: black;
        justify-content: center;
        width: 100%;
        height: 100px;
        text-align: center;
        color: white;
    }

    .sub-title {
        color: black;
        margin-top: 10px;
        text-align: center;
        justify-content: center
    }

    hr {
        display: block;
        height: 10px;
        border: 0;
        border-top: 1px solid black;
        margin: 1em 0;
        padding: 0;
        width: 100%
    }

    .form-konsumen {
        width: 50%;
        margin-left: 100px;
        color: black;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .title-kuisoner {
        margin-top: 30px;
        margin-bottom: 30px;
        text-align: center
    }

    .footer-title {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-pertanyaan {
        width: 75%;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin-left: auto;
        margin-right: auto;
    }

    .btn {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        float: right;
        margin-bottom: 30px;
    }

    .hidemenu{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 28px;
    }
</style>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div>
                                <form id="keluar-app" action="{{ url('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.getElementById('keluar-app').submit();"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Keluar</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('login') }}"
                                aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Login as Admin</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- isi -->
                @yield('content')
                <!-- isi end -->

                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Prodaction by SIPENTING'S.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('backend/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('backend/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('backend/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('backend/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('backend/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('backend/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('backend/dist/js/custom.min.js') }}"></script>
    <!-- this page js -->
    <script src="{{ asset('backend/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('backend/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('backend/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        /**************
         *       Basic Table                   *
         **************/
        $('#zero_config').DataTable();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tangkap elemen tombol dan formulir
            var btnCreateQuestion = $('#btnCreateQuestion');
            var createQuestionForm = $('#createQuestionForm');

            // Atur event handler saat tombol diklik
            btnCreateQuestion.click(function() {
                // Toggle tampilan formulir
                createQuestionForm.slideToggle();
            });
        });
    </script>
    <!-- tambahan -->
    <!-- sweetalert -->
    <script src="{{ asset('sweetalert/sweetalert2.all.min.js') }}"></script>

    <!-- ckeditor  -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script> -->
    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <!-- sweetalert success-->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}"
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Gagal !!.',
                text: "{{ session('error') }}"
            });
        </script>
    @endif
    @if (session('errorToken'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Ujian Sedang Berlangsung !!.',
                text: "{{ session('errorToken') }}"
            });
        </script>
    @endif
    @if (session('errorStatus'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Ujian Tidak Ditemukan !!.',
                text: "{{ session('errorStatus') }}"
            });
        </script>
    @endif
    @if (session('ExplayedDate'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Ujian Sudah Selesai !!.',
            });
        </script>
    @endif

    <script type="text/javascript">
        //sweetalert delete
        let timerInterval;
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var konfdelete = $(this).data("konf-delete");
            event.preventDefault();
            Swal.fire({
                title: 'Konfirmasi Hapus Data?',
                html: "Data <strong>" + konfdelete + "</strong> yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, dihapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Verifikasi Data!",
                        html: "Kami sedang check akun yang akan dihapus !!.",
                        timer: 4000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading();
                        },
                        willClose: () => {
                            clearInterval(timerInterval);
                        }
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>

    <script>
        //hanya angka
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        // previewImage
        function previewFoto() {
            const imageInput = document.querySelector('input[name="image"]');
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.style.display = 'block';
            const imageReader = new FileReader();

            imageReader.onload = function(event) {
                imagePreview.src = event.target.result;
            }

            if (imageInput.files[0]) {
                imageReader.readAsDataURL(imageInput.files[0]);
            }
        }

        // Tampilkan gambar melayang
        document.addEventListener('DOMContentLoaded', function() {
            var floatingImageLink = document.getElementById('floating-image-link');
            var floatingImageContainer = document.getElementById('floating-image-container');
            var floatingImage = document.getElementById('floating-image');

            floatingImageLink.addEventListener('click', function(event) {
                event.preventDefault();
                var imageSrc = this.getAttribute('data-image-src');
                floatingImage.src = imageSrc;
                floatingImageContainer.style.display = 'block';
            });

            floatingImageContainer.addEventListener('click', function() {
                this.style.display = 'none';
            });
        });
        $(document).ready(function() {
            $("#searchStudent").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                var searchResults = $("#searchResults");

                $("#searchResults li").filter(function() {
                    var isVisible = $(this).text().toLowerCase().indexOf(value) > -1;
                    $(this).toggle(isVisible);

                    if (isVisible == true && value.length <= 0) {
                        searchResults.hide();
                    } else if (isVisible == true && value.length > 0) {
                        searchResults.show();

                    }
                });

            });
        });


        function selectStudent(studentId, studentName) {
            document.getElementById('searchStudent').value = studentName;
            document.getElementById('idStudent').value = studentId.toString();
            document.getElementById('searchResults').style.display = 'none';
        }
    </script>

</body>

</html>
