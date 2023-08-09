<div class="sidebar" data-color="azure" data-background-color="black">
  <!--
    {{-- data-image="{{ asset('material') }}/img/sidebar-1.jpg" --}}
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo pr-3 pl-3">
        <div class="simple-text logo-normal" style="text-decoration: none;">
        {{ __('Planning & Control') }}
        <br>
        {{ __('Department') }}
        </div>
    </div>
<div class="sidebar-wrapper">
    @if (auth()->user()->role == 'line')
        <ul class="nav mb-5">

            {{-- Profile --}}
            <li class="nav-item">
                <div class="text-center mb-3 mr-1">
                    @if (auth()->user()->image)
                    <img src="{{ asset('storage/' . auth()->user()->image) }}" class="img-fluid rounded-circle" alt="" width="40%" height="40%">
                    @else
                    <img src="{{ asset('storage/daihatsu.png') }}" class="img-fluid rounded-circle" alt="" width="40%" height="40%">
                    @endif
                </div>
                <a class="nav-link" data-toggle="collapse" href="#userSettings" aria-expanded="false">
                <p class="text-center mr-2">{{ auth()->user()->name }}
                    <b class="caret"></b>
                </p>
                </a>
                <div class="collapse" id="userSettings">
                    <ul class="nav">
                        <li class="nav-item">
                            <div class="logout-button">
                                <a class="btn btn-danger nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <p class="text-white">{{ __('Logout') }} </p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Date --}}
            <li class="nav-item mt-n2 text-center">
                <a class="nav-link" readonly>
                    <p id="date"></p>
                    <p class="font-weight-bold" id="clock" style="font-size:14pt"></p>
                </a>
            </li>

           {{-- Dashboard --}}
            <li class="nav-item mt-n2">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <p class="text-white">{{ __('Logout') }} </p>
                </a>
            </li>

            {{-- Dashboard --}}
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }} mt-n2">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fa-solid fa-table-columns"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>

            {{-- Report Line #1 --}}
            <li class="nav-item {{ ($activePage == 'daily1' || $activePage == 'hourly1') ? ' active' : '' }} mt-n2">
                <a class="nav-link" data-toggle="collapse" href="#report_line1" aria-expanded="false">
                    <i class="fa-solid fa-1"></i>
                <p class="mr-2">Report Line #1
                    <b class="caret"></b>
                </p>
                </a>
                <div class="collapse" id="report_line1">
                    <ul class="nav">
                        <li class="nav-item {{ ($activePage == 'daily1') ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_daily1') }}">
                            <i class="fa-solid fa-calendar-day"></i>
                            <span class="sidebar-normal">{{ __('Daily Prod. Report') }} </span>
                        </a>
                        </li>
                        <li class="nav-item {{ ($activePage == 'hourly1') ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('index_hourly1') }}">
                                <i class="fa-solid fa-hourglass-start"></i>
                                <span class="sidebar-normal">{{ __('Hourly Running Unit (D/N)') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </li>

            {{-- Report Line #2 --}}
            <li class="nav-item {{ ($activePage == 'daily2' || $activePage == 'hourly2') ? ' active' : '' }} mt-n2">
                <a class="nav-link" data-toggle="collapse" href="#report_line2" aria-expanded="false">
                    <i class="fa-solid fa-2"></i>
                <p class="mr-2">Report Line #2
                    <b class="caret"></b>
                </p>
                </a>
                <div class="collapse" id="report_line2">
                    <ul class="nav">
                        <li class="nav-item {{ ($activePage == 'daily2') ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_daily2') }}">
                            <i class="fa-solid fa-calendar-day"></i>
                            <span class="sidebar-normal">{{ __('Daily Prod. Report') }} </span>
                        </a>
                        </li>
                        <li class="nav-item {{ ($activePage == 'hourly2') ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('index_hourly2') }}">
                                <i class="fa-solid fa-hourglass-start"></i>
                                <span class="sidebar-normal">{{ __('Hourly Running Unit (D/N)') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Report Summary --}}
            <li class="nav-item {{ ($activePage == 'report-delay' || $activePage == 'report-asakai' || $activePage == 'report-bod' || $activePage == 'report-1977') ? ' active' : '' }} mt-n2">
                <a class="nav-link" data-toggle="collapse" href="#report_summary" aria-expanded="false">
                    <i class="fa-solid fa-clipboard-list"></i>
                <p class="mr-2">Report Summary
                    <b class="caret"></b>
                </p>
                </a>
                <div class="collapse" id="report_summary">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'report-delay' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('report_delay_index') }}">
                                <i class="fa-solid fa-calendar-day"></i>
                                <span class="sidebar-normal">{{ __('Report Delay Unit') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'report-asakai' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('asakai_index') }}">
                                <i class="fa-solid fa-calendar"></i>
                                <span class="sidebar-normal">{{ __('Report Asakai') }} </span>
                            </a>
                            </li>
                        <li class="nav-item{{ $activePage == 'report-bod' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('bod_index') }}">
                                <i class="fa-solid fa-people-group"></i>
                                <span class="sidebar-normal">{{ __('Report BOD') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'report-1977' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('index_1977') }}">
                                <i class="fa-solid fa-medal"></i>
                                <span class="sidebar-normal">{{ __('Achievement Delivery 1977') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    @else
    <ul class="nav mb-5">

        {{-- Profile --}}
        <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'usermanage' || $activePage == '') ? ' active' : '' }}">
            <div class="text-center mb-3 mr-1">
                @if (auth()->user()->image)
                <img src="{{ asset('storage/' . auth()->user()->image) }}" class="img-fluid rounded-circle" alt="" width="40%" height="40%">
                @else
                <img src="{{ asset('storage/daihatsu.png') }}" class="img-fluid rounded-circle" alt="" width="40%" height="40%">
                @endif
            </div>
            <a class="nav-link" data-toggle="collapse" href="#userSettings" aria-expanded="false">
            <p class="text-center mr-2">{{ auth()->user()->name }}
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="userSettings">
                <ul class="nav">
                    @if (auth()->user()->role == 'admin')
                    <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                        <span class="sidebar-mini"> UP</span>
                        <span class="sidebar-normal">{{ __('User profile') }} </span>
                    </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'usermanage' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('index_user') }}">
                            <span class="sidebar-mini"> UM</span>
                            <span class="sidebar-normal">{{ __('User Management') }} </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="logout-button">
                            <a class="btn btn-danger nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <p class="text-white">{{ __('Logout') }} </p>
                            </a>
                        </div>
                    </li>
                    @elseif (auth()->user()->role == 'PIC CCR' || auth()->user()->role == 'PIC Daily Planning' || auth()->user()->role == 'PIC Vehicle Planning' || auth()->user()->role == 'PIC VAI' || auth()->user()->role == 'Member')
                    <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('profile.edit') }}">
                            <span class="sidebar-mini"> UP</span>
                            <span class="sidebar-normal">{{ __('User profile') }} </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="logout-button">
                            <a class="btn btn-danger nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <p class="text-white">{{ __('Logout') }} </p>
                            </a>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>

        </li>

        {{-- Date --}}
        <li class="nav-item mt-n2 text-center">
            <a class="nav-link" readonly>
                <p id="date"></p>
                <p class="font-weight-bold" id="clock" style="font-size:14pt"></p>
            </a>
        </li>

        <li class="nav-item mt-n2">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i>
                <p class="text-white">{{ __('Logout') }} </p>
            </a>
        </li>

        {{-- Dashboard --}}
        <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }} mt-n2">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fa-solid fa-table-columns"></i>
                <p>{{ __('Dashboard') }}</p>
            </a>
        </li>

        {{-- Organization --}}
        <li class="nav-item{{ $activePage == 'organization' ? ' active' : '' }} mt-n2">
            <a class="nav-link" href="{{ route('org') }}">
                <i class="fa-solid fa-sitemap"></i>
                <p>{{ __('Struktur Organisasi') }}</p>
            </a>
        </li>

        {{-- List Pegawai --}}
        <li class="nav-item{{ $activePage == 'birthday-list' ? ' active' : '' }} mt-n2">
            <a class="nav-link" href="{{ route('index_employee') }}">
                <i class="fa-solid fa-users"></i>
                <p>{{ __('List Karyawan') }} </p>
            </a>
        </li>

        {{-- KPI --}}
        <li class="nav-item{{ $activePage == 'kpi' ? ' active' : '' }} mt-n2">
            <a class="nav-link" href="{{ route('index_kpi') }}">
                <i class="fa-solid fa-key"></i>
                <p>{{ __('KPI') }}</p>
            </a>
        </li>

        {{-- Terbaik Bulan Ini --}}
        <li class="nav-item {{ ($activePage == 'best-attendance' || $activePage == 'best-ss' || $activePage == 'best-qcc') ? ' active' : '' }} mt-n2">
            <a class="nav-link " data-toggle="collapse" href="#monthlyBest" aria-expanded="false">
                <i class="fa-solid fa-star"></i>
                <p class="mr-2">Terbaik Bulan Ini
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="monthlyBest">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'best-attendance' ? ' active' : '' }} mt-n2">
                    <a class="nav-link" href="{{ route('index_att') }}">
                        <i class="fa-solid fa-clipboard"></i>
                        <span class="sidebar-normal">{{ __('Absensi Terbaik') }} </span>
                    </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'best-ss' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_ss') }}">
                            <span class="sidebar-mini"> SS</span>
                            <span class="sidebar-normal">{{ __('SS Terbaik') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'best-qcc' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_qcc') }}">
                            <span class="sidebar-mini"> QCC</span>
                            <span class="sidebar-normal">{{ __('QCC Terbaik') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- Absensi --}}
        <li class="nav-item {{ ($activePage == 'absensi-pcd' || $activePage == 'absensi-p4') ? ' active' : '' }} mt-n2">
            <a class="nav-link" data-toggle="collapse" href="#absensi" aria-expanded="false">
                <i class="fa-solid fa-clipboard"></i>
            <p class="mr-2">Absensi
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="absensi">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'absensi-pcd' ? ' active' : '' }} mt-n2">
                    <a class="nav-link" href="{{ route('pcd-att') }}">
                        <span class="sidebar-mini"> PC</span>
                        <span class="sidebar-normal">{{ __('Absensi PC Dept.') }} </span>
                    </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'absensi-p4' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('p4-att') }}">
                            <span class="sidebar-mini"> P4</span>
                            <span class="sidebar-normal">{{ __('Absensi P4 SAP') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- Production Planning --}}
        <li class="nav-item {{ ($activePage == 'monthly_mdp' || $activePage == 'monthly_l1' || $activePage == 'monthly_l2' || $activePage == 'chart-type' || $activePage == 'table-type') ? ' active' : '' }} mt-n2">
            <a class="nav-link" data-toggle="collapse" href="#prod_plan" aria-expanded="false">
                <i class="fa-solid fa-boxes-stacked"></i>
            <p class="mr-2">Prod. Planning
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="prod_plan">
                <ul class="nav">
                    <a class="nav-link mt-n2" data-toggle="collapse" href="#prod_plan_monthly" aria-expanded="false">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p class="mr-2">Bulanan
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse" id="prod_plan_monthly">
                        <li class="nav-item {{ $activePage == 'monthly_mdp' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('mdp_index') }}">
                                <i class="fa-solid fa-desktop"></i>
                                <span class="sidebar-normal">{{ __('Planning Bulanan MDP') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'monthly_l1' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('monthly_1') }}">
                                <i class="fa-solid fa-1"></i>
                                <span class="sidebar-normal">{{ __('Planning Bulanan L#1') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'monthly_l2' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('monthly_2') }}">
                                <i class="fa-solid fa-2"></i>
                                <span class="sidebar-normal">{{ __('Planning Bulanan L#2') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'chart-type' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('chart_by_type') }}">
                                <i class="fa-solid fa-chart-line"></i>
                                <span class="sidebar-normal">{{ __('Per Type (Chart)') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'table-type' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('table_by_type') }}">
                                <i class="fa-solid fa-table-columns"></i>
                                <span class="sidebar-normal">{{ __('Per Type (Table)') }} </span>
                            </a>
                        </li>
                    </div>

                    {{-- Daily Production Planning --}}
                    <a class="nav-link" data-toggle="collapse" href="#prod_plan_daily" aria-expanded="false">
                        <i class="fa-solid fa-calendar-day"></i>
                        <p class="mr-2">Harian
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="prod_plan_daily">
                        <li class="nav-item{{ $activePage == 'daily_monitor_prodplan' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('index_daily') }}">
                                <i class="fa-solid fa-desktop"></i>
                                <span class="sidebar-normal">{{ __('Monitoring Prod.') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'daily_prodplan_l1' ? ' active' : '' }}">
                            <a class="nav-link" href="http://10.59.8.168/pcd/Planning_Intriming_1.php" target='_blank'>
                                <i class="fa-solid fa-1"></i>
                                <span class="sidebar-normal">{{ __(' Daily Prod. / Shift L#1') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'daily_prodplan_l2' ? ' active' : '' }}">
                            <a class="nav-link" href="http://10.59.8.168/pcd/Planning_Intriming.php" target='_blank'>
                                <i class="fa-solid fa-2"></i>
                                <span class="sidebar-normal">{{ __(' Daily Prod. / Shift L#2') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'planning_delivery' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('index_delivery') }}">
                                <i class="fa-solid fa-truck"></i>
                                <span class="sidebar-normal">{{ __('Planning Delivery') }} </span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </li>

        {{-- Report Line #1 --}}
        <li class="nav-item {{ ($activePage == 'daily1' || $activePage == 'hourly1' || $activePage == 'summary1' || $activePage == 'summary_problem_assy' || $activePage == 'summary_problem_tosso' || $activePage == 'summary_problem_welding') ? ' active' : '' }} mt-n2">
            <a class="nav-link" data-toggle="collapse" href="#report_line1" aria-expanded="false">
                <i class="fa-solid fa-1"></i>
            <p class="mr-2">Report Line #1
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="report_line1">
                <ul class="nav">
                    <li class="nav-item {{ ($activePage == 'daily1') ? ' active' : '' }} mt-n2">
                    <a class="nav-link" href="{{ route('index_daily1') }}">
                        <i class="fa-solid fa-calendar-day"></i>
                        <span class="sidebar-normal">{{ __('Daily Prod. Report') }} </span>
                    </a>
                    </li>
                    <li class="nav-item {{ ($activePage == 'hourly1') ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_hourly1') }}">
                            <i class="fa-solid fa-hourglass-start"></i>
                            <span class="sidebar-normal">{{ __('Hourly Running Unit (D/N)') }} </span>
                        </a>
                    </li>
                    <li class="nav-item {{ ($activePage == 'summary1') ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_summary1') }}">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <span class="sidebar-normal">{{ __('Summary Problem') }} </span>
                        </a>
                    </li>

                </ul>
            </div>

        </li>

        {{-- Report Line #2 --}}
        <li class="nav-item {{ ($activePage == 'daily2' || $activePage == 'hourly2' || $activePage == 'summary2' || $activePage == 'summary_problem_assy2' || $activePage == 'summary_problem_tosso2' || $activePage == 'summary_problem_welding2') ? ' active' : '' }} mt-n2">
            <a class="nav-link" data-toggle="collapse" href="#report_line2" aria-expanded="false">
                <i class="fa-solid fa-2"></i>
            <p class="mr-2">Report Line #2
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="report_line2">
                <ul class="nav">
                    <li class="nav-item {{ ($activePage == 'daily2') ? ' active' : '' }} mt-n2">
                    <a class="nav-link" href="{{ route('index_daily2') }}">
                        <i class="fa-solid fa-calendar-day"></i>
                        <span class="sidebar-normal">{{ __('Daily Prod. Report') }} </span>
                    </a>
                    </li>
                    <li class="nav-item {{ ($activePage == 'hourly2') ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_hourly2') }}">
                            <i class="fa-solid fa-hourglass-start"></i>
                            <span class="sidebar-normal">{{ __('Hourly Running Unit (D/N)') }} </span>
                        </a>
                    </li>
                    <li class="nav-item {{ ($activePage == 'summary2') ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_summary2') }}">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <span class="sidebar-normal">{{ __('Summary Problem') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- Report Summary --}}
        <li class="nav-item {{ ($activePage == 'ontime_delivery' || $activePage == 'report-delay' || $activePage == 'report-eom' || $activePage == 'report-asakai' || $activePage == 'report-bod' || $activePage == 'report-1977') ? ' active' : '' }} mt-n2">
            <a class="nav-link" data-toggle="collapse" href="#report_summary" aria-expanded="false">
                <i class="fa-solid fa-clipboard-list"></i>
            <p class="mr-2">Report Summary
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="report_summary">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'ontime_delivery' ? ' active' : '' }} mt-n2">
                    <a class="nav-link" href="{{ route('otd_index') }}">
                        <i class="fa-solid fa-stopwatch"></i>
                        <span class="sidebar-normal">{{ __('Report OTD Line #1 & #2') }} </span>
                    </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'report-delay' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('report_delay_index') }}">
                            <i class="fa-solid fa-calendar-day"></i>
                            <span class="sidebar-normal">{{ __('Report Delay Unit') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'report-eom' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('eom_index') }}">
                            <i class="fa-solid fa-calendar-xmark"></i>
                            <span class="sidebar-normal">{{ __('Report Akhir Bulan') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'report-asakai' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('asakai_index') }}">
                            <i class="fa-solid fa-calendar"></i>
                            <span class="sidebar-normal">{{ __('Report Asakai') }} </span>
                        </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'report-bod' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('bod_index') }}">
                                <i class="fa-solid fa-people-group"></i>
                                <span class="sidebar-normal">{{ __('Report BOD') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'report-1977' ? ' active' : '' }} mt-n2">
                            <a class="nav-link" href="{{ route('index_1977') }}">
                                <i class="fa-solid fa-medal"></i>
                                <span class="sidebar-normal">{{ __('Achievement Delivery 1977') }} </span>
                            </a>
                        </li>
                </ul>
            </div>
        </li>

        {{-- Andon Production --}}
        <li class="nav-item {{ ($activePage == 'andon-production') ? ' active' : '' }} mt-n2">
            <a class="nav-link" data-toggle="collapse" href="#andon_production" aria-expanded="false">
                <i class="fa-solid fa-gear"></i>
            <p class="mr-2">Andon Production
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="andon_production">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'absensi-pcd' ? ' active' : '' }} mt-n2">
                    <a class="nav-link" href="http://10.59.10.22:8088/data/perspective/client/SAPAndon/line1/global/resultpcd" target='_blank'>
                        <span class="sidebar-mini"> L1</span>
                        <span class="sidebar-normal">{{ __('Line #1') }} </span>
                    </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'absensi-p4' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="http://10.59.10.22:8088/data/perspective/client/SAPAndon/line2/global/resultpcd" target='_blank'>
                            <span class="sidebar-mini"> L2</span>
                            <span class="sidebar-normal">{{ __('Line #2') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- SOP --}}
        <li class="nav-item {{ ($activePage == 'sop_daily_plan' || $activePage == 'sop_vehicle_planning' || $activePage == 'sop_ccr_vai') ? ' active' : '' }} mt-n2">
            <a class="nav-link" data-toggle="collapse" href="#sop_expand" aria-expanded="false">
                <i class="fa-solid fa-user-gear"></i>
            <p class="mr-2">SOP
                <b class="caret"></b>
            </p>
            </a>
            <div class="collapse" id="sop_expand">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'absensi-pcd' ? ' active' : '' }} mt-n2">
                    <a class="nav-link" href="{{ route('index_ccr') }}">
                        <span class="sidebar-mini"> CCR</span>
                        <span class="sidebar-normal">{{ __('Central Control Room') }} </span>
                    </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'absensi-p4' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_dp') }}">
                            <span class="sidebar-mini"> DP</span>
                            <span class="sidebar-normal">{{ __('Daily Planning') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'absensi-p4' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_vp') }}">
                            <span class="sidebar-mini"> VP</span>
                            <span class="sidebar-normal">{{ __('Vehicle Planning') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'absensi-p4' ? ' active' : '' }} mt-n2">
                        <a class="nav-link" href="{{ route('index_vai') }}">
                            <span class="sidebar-mini"> VAI</span>
                            <span class="sidebar-normal">{{ __('VAI') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    @endif

</div>
</div>
