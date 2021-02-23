<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="">SYPP Corporation</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('main/logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{ url('main/successlogin') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Song Lyrics</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                List of Song
                                <div style="float: right;">
                                    <button type="button" class="btn btn-success btn-sm btn-flat" data-toggle="modal" data-trigger="create" id="btn-create" title="Create New Song Lyrics">
                                        <span class="fa fa-plus"></span> Create
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data-list" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Artist</th>                                                
                                                <th>Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Versace on the Floor</td>
                                                <td>Bruno Mars</td>
                                                <td>2021-02-22</td>
                                            </tr>
                                            <tr>
                                                <td>Super Far</td>
                                                <td>Lany</td>
                                                <td>2021-02-22</td>
                                            </tr>
                                            <tr>
                                                <td>At My Worst</td>
                                                <td>Pink Sweats</td>
                                                <td>2021-02-22</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SYPP Corporation    2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Song Lyrics Form -->
        <form role="Create Form">
            <div class="modal fade" id="modal-form-creation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">	
                        <div class="modal-header">
                            <h3 id="form-mode" class="modal-title">Create New Song Lyrics Form</h3>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Type title here...">
                                    </div>
                                    <div class="form-group">
                                        <label for="artist">Artist</label>
                                        <input type="text" class="form-control" name="artist" id="artist" placeholder="Type artist here...">
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lyrics">Lyrics</label>
                                        <textarea class="form-control col-md-12" name="lyrics" id="lyrics" rows="2" cols="200" style="width:100%; height: 100pt;" placeholder="Type song lyrics here..."></textarea>
                                    </div>             
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success"  id="btn-close" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn-save" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/scripts.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        var dataTable;
        
        dataTable = $('#data-list').DataTable({
            order:[[ 0, 'asc' ]],
			paging: true,
			lengthMenu:[ [2, 20, 50, 75, 100, -1], [2, 20, 50, 75, 100, "All"] ],
            language:{
				oPaginate:{
					sPrevious: '<',
					sNext: '>',
				}
			},  
        });

        $('#btn-create').click(function(e){
            e.preventDefault();

            $('#modal-form-creation').modal({
                backdrop: 'static',
                keyboard: false
            });

            $('#btn-create').click(function(e){
                e.preventDefault();

                $('#modal-form-creation').modal({
                    backdrop: 'static',
                    keyboard: false
                });

                $('#modal-form-creation').on('shown.bs.modal', function(){
                    $('#fullName').focus();
                });
            });
        });

        $('#btn-save').click(function(e){
            e.preventDefault();

            alert('save new song lyrics');
        });   

        $('#btn-close').click(function(e){
            e.preventDefault();

            $('#title').val('');
            $('#artist').val('');
            $('#lyrics').val('');
        });   
    });  
</script>