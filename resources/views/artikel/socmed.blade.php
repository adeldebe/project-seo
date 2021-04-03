@extends('home')

@section('judul')
  <div>
    Social Media
  </div>
@endsection
  
@section('main')
<div class="col-lg-11">
                   <nav class="navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" href="connections">Connections</a>
                                <a class="nav-item nav-link" href="sharingbuttons">Sharing Buttons</a>
                            </div>
                        </div>
                    </nav>
</div>
<div class="content mt-1">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-11">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                        <thead>
                            <th>Publicize Post</th>
                            <th></th>
                            <th></th>
                        </thead>
                          <tbody>
                            <tr>
                                <td><button type="button" class="btn btn-lg social twitter" style="margin-bottom: 4px">
                                    <i class="fa fa-twitter"></i>
                                </button>Twitter</td>
                                <td></td>
                                <td><button type="button" class="btn btn-outline-secondary">Connect</button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-lg social facebook" style="margin-bottom: 4px">
                                    <i class="fa fa-facebook"></i>
                                </button>Facebook</td>
                                <td></td>
                                <td><button type="button" class="btn btn-outline-secondary">Connect</button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-lg social tumblr" style="margin-bottom: 4px">
                                    <i class="fa fa-tumblr"></i>
                                </button>Tumblr</td>
                                <td></td>
                                <td><button type="button" class="btn btn-outline-secondary">Connect</button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-lg social linkedin" style="margin-bottom: 4px">
                                    <i class="fa fa-linkedin"></i>
                                </button>Linkedln</td>
                                <td></td>
                                <td><button type="button" class="btn btn-outline-secondary">Connect</button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-lg social instagram" style="margin-bottom: 4px">
                                    <i class="fa fa-instagram"></i>
                                </button>Instagram</td>
                                <td></td>
                                <td><button type="button" class="btn btn-outline-secondary">Connect</button></td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-lg social google photos" style="margin-bottom: 4px">
                                    <i class="fa fa-google photos"></i>
                                </button>Google Photos</td>
                                <td></td>
                                <td><button type="button" class="btn btn-outline-secondary">Connect</button></td>
                            </tr>
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>

@endsection