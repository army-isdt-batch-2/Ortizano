<div style="height:88vh;" class="bg-dark d-flex flex-column flex-shrink-0 p-3 bg-light">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4 text-white">Sidebar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                    
                    <li>
                        <a href="/Departments" class=" text-white nav-link link-dark @if($active == 'Departments') active @endif" aria-current="page"" >
                        <i class="fa fa-building"></i>
                        Departments
                        </a>
                    </li>
                    <li>
                    
                        <a href="/Employees" class=" text-white nav-link link-dark @if($active == 'Employees') active @endif" aria-current="page">
                        <i class="fa fa-users"></i>
                        Employees
                        </a>
                    </li>
                    <li>
                        <a href="/Deductions" class=" text-white nav-link link-dark @if($active == 'Deductions') active @endif" aria-current="page">
                        <i class="fa fa-calculator"></i>
                        Deductions
                        </a>
                    </li>
                    <li>
                        <a href="/Leaves" class=" text-white nav-link link-dark @if($active == 'Leaves') active @endif" aria-current="page">
                        <i class="fa fa-user"></i>
                        Leaves
                        </a>
                    </li>
                    <li>
                        <a href="/Loans" class=" text-white nav-link link-dark  @if($active == 'Loans') active @endif" aria-current="page">
                        <i class="fa fa-money"></i>
                        Loans
                        </a>
                    </li>
                    
                    <li>
                        <a href="/Payslips" class=" text-white nav-link link-dark @if($active == 'Payslips') active @endif" aria-current="page">
                        <i class="fa fa-calendar"></i>
                        Payslips
                        </a>
                    </li>
                    <li>
                        <a href="/Timekeeping" class=" text-white nav-link link-dark  @if($active == 'Timekeeping') active @endif" aria-current="page">
                        <i class="fa fa-star"></i>
                        Timekeeping
                        </a>
                    </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                    <a href="#" class=" text-white d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>LWO</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                    </div>
                </div>