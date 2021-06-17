<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('dashboard') }}" class="@if($active == 'dashboard') active @endif"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
                <li><a href="{{ route('buku') }}" class="@if($active == 'books') active @endif"><i class="lnr lnr-book"></i> <span>Buku</span></a></li>
                <li><a href="{{ route('distributor') }}" class="@if($active == 'distributor') active @endif"><i class="lnr lnr-tag"></i> <span>Pasok</span></a></li>
                <li><a href="{{ route('penjualan') }}" class="@if($active == 'penjualan') active @endif"><i class="lnr lnr-store"></i> <span>penjualan</span></a></li>
            </ul>
        </nav>
    </div>
</div>