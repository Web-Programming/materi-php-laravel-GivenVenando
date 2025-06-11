<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
  <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="nav-icon bi bi-speedometer"></i>
      <p>
        Dashboard
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('fakultas.index') }}" class="nav-link {{ request()->is('prodi*') ? 'active' : '' }}">
          <i class="nav-icon bi bi-circle"></i>
          <p>Fakultas</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('prodi.index') }}" class="nav-link {{ request()->is('prodi*') ? 'active' : '' }}">
          <i class="nav-icon bi bi-circle"></i>
          <p>Program Studi</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('dosen.index') }}" class="nav-link {{ request()->is('prodi*') ? 'active' : '' }}">
          <i class="nav-icon bi bi-circle"></i>
          <p>Dosen</p>
        </a>
      </li>
      <li class="nav-item">
         <a href="{{ route('mhs.index') }}" class="nav-link {{ request()->is('prodi*') ? 'active' : '' }}">
          <i class="nav-icon bi bi-circle"></i>
          <p>Mahasiswa</p>
        </a>
      </li>
      <li class="nav-item">
         <a href="{{ route('materi.index') }}" class="nav-link {{ request()->is('prodi*') ? 'active' : '' }}">
          <i class="nav-icon bi bi-circle"></i>
          <p>Materi</p>
        </a>
      </li>
    </ul>
  </li>
</ul>