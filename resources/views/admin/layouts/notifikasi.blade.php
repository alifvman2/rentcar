@if(auth()->user()->nama_lengkap)
    
    <style type="text/css">
        
       .badge {
            position: relative;
            top: -10px;
            left: -13px;
            border: 0px solid black;
            border-radius: 50%;
            color: white!important;
            background-color: red!important;
       }

    </style>

    <ul class="nav ace-nav pull-right">
        <li></li>
        <li class="light-blue">
            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                @if(auth()->user()->foto)
                    @if(auth()->user()->role == 4)
                        <img class="nav-user-photo" src="{{ asset('public/foto_mhs/'.auth()->user()->foto) }}" alt="" />
                    @elseif(auth()->user()->role == 3)
                        <img class="nav-user-photo" src="{{ asset('public/foto_dosen/'.auth()->user()->foto) }}" alt="" />
                    @elseif(auth()->user()->role == 2)
                        <img class="nav-user-photo" src="{{ asset('public/foto_admin/'.auth()->user()->foto) }}" alt="" />
                    @else
                        <img class="nav-user-photo" src="{{ asset('public/avatars/avatar2.png') }}" alt="" />
                    @endif
                @else
                    <img class="nav-user-photo" src="{{ asset('public/avatars/avatar2.png') }}" alt="" />
                @endif
                <span class="user-info">
                    <small>Welcome,</small>
                    {{ auth()->user()->name }}
                </span>

                <i class="icon-caret-down"></i>
            </a>
            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                <li>
                    <a href="{{ route('Home.profil') }}">
                        <i class="icon-user"></i>
                        Profile
                    </a>
                </li>

                <li class="divider"></li>

                <li>
                    <a href="{{ route('Home.logout') }}">
                        <i class="icon-off"></i>
                        Keluar
                    </a>
                </li>
            </ul>
        </li>
    </ul><!--/.ace-nav-->

    <script type="text/javascript">
        
        function update(val, url) {
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route("Log.notifikasi_read") }}',
                data: {
                    id: val,
                },
                success: function(responses) {
                    location.href = url;
                }
            });
        }

    </script>

@endif