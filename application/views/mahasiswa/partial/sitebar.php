    <!-- Sidebar Start -->
    <aside class="left-sidebar">
    	<!-- Sidebar scroll-->
    	<div>
    		<div class="brand-logo d-flex align-items-center justify-content-between">
    			<a href="<?=base_url('cmahasiswa/dashboard')?>" class="text-nowrap logo-img">
				<table>
					<tbody>
						<tr>
							<td><img src="<?=base_url()?>assets/images/logos/ukm.png" heigth="60" width="60"></td>
							<td class="text-dark fs-3"><b>Unit Kegiatan Mahasiswa</b></td>
						</tr>
					</tbody>
				</table>    			</a>
    			<div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
    				<i class="ti ti-x fs-8"></i>
    			</div>
    		</div>
    		<!-- Sidebar navigation-->
    		<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    			<ul id="sidebarnav">
    				<li class="nav-small-cap">
    					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
    					<span class="hide-menu">Home</span>
    				</li>
    				<li class="sidebar-item">
    					<a class="sidebar-link" href="<?=base_url('cmahasiswa/dashboard')?>" aria-expanded="false">
    						<span>
    							<i class="ti ti-layout-dashboard"></i>
    						</span>
    						<span class="hide-menu">Dashboard</span>
    					</a>
    				</li>
           			<li class="nav-small-cap">
    					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
    					<span class="hide-menu">UKM</span>
    				</li>
    				<li class="sidebar-item">
    					<a class="sidebar-link" href="<?=base_url('cmahasiswa/ukm')?>" aria-expanded="false">
    						<span>
    							<i class="ti ti-home"></i>
    						</span>
    						<span class="hide-menu">UKM</span>
    					</a>
    				</li>
					<li class="sidebar-item">
    					<a class="sidebar-link" href="<?=base_url('cmahasiswa/card')?>" aria-expanded="false">
    						<span>
    							<i class="ti ti-credit-card"></i>
    						</span>
    						<span class="hide-menu">Kartu UKM</span>
    					</a>
    				</li>
        
    			</ul>

    		</nav>
    		<!-- End Sidebar navigation -->
    	</div>
    	<!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
