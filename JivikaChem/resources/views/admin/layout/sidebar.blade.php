@php

    $userRole = auth()->user()->roles->first()->name;

@endphp

<div class="logo-details">
    <img src="{{asset('admin_assets/images/favicon.png')}}" />
    <span class="logo_name"> Jivika Chem</span>
    <p class="mob-menu">
        <i class='bx bx-menu'></i>
    </p>
</div>

<div class="admin-pic">
    <p class="text-center user-pic"><i class="fa-solid fa-user"></i></p>
    <h6 class="text-center mt-2">{{ auth()->user()->name }} User</h6>
    <span><i class="fa-solid fa-circle"></i> {{ auth()->user()->roles->first()->name }}</span>
</div>

<ul class="nav-links">
    <li class="man-user">
        <a href="#">
            <i class="fa-solid fa-user user-icon"></i>
        </a>
        <ul class="sub-menu blank">
            <li>
                <p class="link_name">{{ auth()->user()->name }}</p>
            </li>
        </ul>
    </li>

    <!------------------------------------------------------------- Dashboard -------------------------------------------------------------->

    @if( auth()->user()->roles->first()->name == 'admin' )

    <li>
        <a href="{{ url($userRole.'/dashboard') }}">
            <i class='bx bx-grid-alt'></i>
            <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
            <li>
                <a class="link_name" href="{{ url($userRole.'/dashboard') }}">Dashboard</a>
            </li>
        </ul>
    </li>

    @endif

    <!------------------------------------------------------------- Sale -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-scale-balanced"></i>
                <span class="link_name">Sale</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="{{ url($userRole.'/newsale') }}"><button class="accordion"> New Sale</button></a>

            <a href="{{ url($userRole.'/managesale') }}"><button class="accordion"> Manag Sale</button></a>

            <a href="{{ url($userRole.'/possale') }}"><button class="accordion"> POS Sale</button></a>

            <a href="{{ url($userRole.'/salestermlist') }}"><button class="accordion"> Sales Terms List</button></a>

            <a href="{{ url($userRole.'/addsaleterm') }}"><button class="accordion"> Add Sales Terms</button></a>
        </ul>
    </li>

    @if( auth()->user()->roles->first()->name == 'admin' )

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-user"></i>
                <span class="link_name">Customer</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="{{ url($userRole.'/addcustomer') }}"><button class="accordion"> Add Customer</button></a>

            <a href="{{ url($userRole.'/customerlist') }}"><button class="accordion"> Customer List</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Supplier -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-user-secret"></i>
                <span class="link_name">Supplier</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="add supplier.html"><button class="accordion"> Add Supplier</button></a>

            <a href="supplier list.html"><button class="accordion"> Supplier List</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Product -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-boxes-stacked"></i>
                <span class="link_name">Product</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="add category.html"><button class="accordion"> Add Category</button></a>

            <a href="category list.html"><button class="accordion"> Category List</button></a>

            <a href="add unit.html"><button class="accordion"> Add Unit</button></a>

            <a href="unit list.html"><button class="accordion"> Unit List</button></a>

            <a href="add product-csv.html"><button class="accordion"> Add Product(CSV)</button></a>

            <a href="manage product.html"><button class="accordion"> Manage Product</button></a>
        </ul>
    </li>

    <!------------------------------------------------------------- Purchase -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="link_name">Purchase</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="add purchase.html"><button class="accordion"> Add Purchase</button></a>

            <a href="manage purchase.html"><button class="accordion"> Manage Purchase</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Stock -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="stock-report.html">
                <i class="fa-solid fa-chart-column"></i>
                <span class="link_name">Stock</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="stock-report.html"><button class="accordion"> Stock Report</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Accounts -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-sharp fa-solid fa-file-invoice-dollar"></i>
                <span class="link_name">Accounts</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="sub accout list.html"><button class="accordion"> Sub Account List</button></a>

            <a href="predefined account.html"><button class="accordion"> Predefined Accounts</button></a>

            <a href="financial year.html"><button class="accordion"> financial Year</button></a>

            <a href="opening balance.html"><button class="accordion"> Opening Balance</button></a>

            <a href="debit voucher.html"><button class="accordion"> Debit Voucher</button></a>

            <a href="credit voucher.html"><button class="accordion"> Credit Voucher</button></a>

            <a href="contra voucher.html"><button class="accordion"> Contra Voucher</button></a>

            <a href="journal voucher.html"><button class="accordion"> Journal Voucher</button></a>

            <a href="bank reconciliation.html"><button class="accordion"> Bank Reconciliation</button></a>

            <a href="add payment method.html"><button class="accordion"> Add Payment Method</button></a>

            <a href="payment-method-list.html"><button class="accordion"> Payment Method List</button></a>

            <a href="supplier payment.html"><button class="accordion"> Supplier Payment</button></a>

            <a href="customer receive.html"><button class="accordion"> Customer Receive</button></a>

            <a href="service payment.html"><button class="accordion"> Service Payment</button></a>

            <a href="cash adjustment.html"><button class="accordion"> Cash Adjustment</button></a>

            <a href="voucher approval.html"><button class="accordion"> Vouchar Approval</button></a>

            <button class="down-req accordion"><i class=" "></i> Report</button>

            <div class="panel">
                <ul class="">
                    <li><a href="cash book.html">Cash Book</a></li>

                    <li><a href="bank book.html">Bank book</a></li>

                    <li><a href="day book.html">Day Book</a></li>

                    <li><a href="general ledger.html">General Ledger</a></li>

                    <li><a href="sub ledger.html">Sub Ledger</a></li>

                    <li><a href="trial balance.html">Trial Balance</a></li>

                    <li><a href="income statement.html">Income statement</a></li>

                    <li><a href="Expenditure statement.html">Expenditure statement</a></li>

                    <li><a href="profit loss.html">Profit Loss</a></li>

                </ul>
            </div>
        </ul>
    </li>

    <!------------------------------------------------------------- Report -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-book-open"></i>
                <span class="link_name">Report</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">
            <a href="closing.html"><button class="accordion"> Closing</button></a>

            <a href="closing-report.html"><button class="accordion"> Closing Report</button></a>

            <a href="todays-report.html"><button class="accordion"> Todays Report</button></a>

            <a href="todays-customer-receipt.html"><button class="accordion"> todaysCustomerReceipt</button></a>

            <a href="sales-report.html"><button class="accordion"> Sales Report</button></a>

            <a href="userwise-sales-report.html"><button class="accordion"> User Wise Sales Report</button></a>

            <a href="due-report.html"><button class="accordion"> Due Report</button></a>

            <a href="shipping-cost-report.html"><button class="accordion"> Shipping Cost Report</button></a>

            <a href="purchase-report.html"><button class="accordion"> Purchase Report</button></a>

            <a href="purchase-report-categorywise.html"><button class="accordion"> Purchase Report (Category Wise)</button></a>

            <a href="sales-report-productwise.html"><button class="accordion"> Sales Report (Product Wise)</button></a>

            <a href="sales-report-categorywise.html"><button class="accordion"> Sales Report (Category Wise)</button></a>

            <a href="sales-return.html"><button class="accordion"> Sales Return</button></a>

            <a href="supplier-return.html"><button class="accordion"> Supplier Return</button></a>

            <a href="tax-report-.html"><button class="accordion"> TAX Report</button></a>

            <a href="profit-report(sale-wise).html"><button class="accordion"> Profit Report(sale Wise)</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Human Resource -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-users"></i>
                <span class="link_name">Human Resource</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">

            <button class="accordion"><i class="fa-solid fa-users"></i> HRM</button>
            <div class="panel">
                <ul class="">
                    <li><a href="add designation.html">Add Designation</a></li>

                    <li><a href="manage designation.html">Manage Designation</a></li>

                    <li><a href="add employee.html">Add Employee</a></li>

                    <li><a href="manage employee.html">Manage Employee</a></li>

                </ul>
            </div>

            <button class="accordion"><i class="fa-solid fa-clock"></i> Attendance</button>
            <div class="panel">
                <ul class="">
                    <li><a href="add attendance.html">Attendance</a></li>

                    <li><a href="manage attendence.html">Managae Attendance</a></li>

                    <li><a href="attendence report.html">Attendance Report</a></li>

                </ul>
            </div>

            <button class="accordion"><i class="fa-brands fa-paypal"></i> Payroll</button>
            <div class="panel">
                <ul>

                    <li><a href="salary advance.html">Salary Advance</a></li>

                    <li><a href="salary generate.html">Salary Generate</a></li>

                    <li><a href="manage employee salary.html">Manage Employee salary</a></li>

                </ul>
            </div>
        </ul>
    </li>

    <!------------------------------------------------------------- Bank -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-building-columns"></i>
                <span class="link_name">Bank</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="add-bank.html"><button class="accordion"> Add New Bank</button></a>

            <a href="manage-banklist.html"><button class="accordion"> Manage Bank</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Service -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-hands-asl-interpreting"></i>
                <span class="link_name">Service</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="add services.html"><button class="accordion"> Add Service</button></a>

            <a href="manage services.html"><button class="accordion"> Manage Service</button></a>

            <a href="sevice invoice.html"><button class="accordion"> Service Invoice</button></a>

            <a href="manage service invoice.html"><button class="accordion"> Manage Service Invoice</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Quotation -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-book"></i>
                <span class="link_name">Quotation</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="add quotation.html"><button class="accordion"> Add Quotation</button></a>

            <a href="manage quotation.html"><button class="accordion"> Manage Quotation</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Return -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-retweet"></i>
                <span class="link_name">Return</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu simple">

            <a href="return.html"><button class="accordion"> Return</button></a>

            <a href="stock-return.html"><button class="accordion"> Stock Return List</button></a>

            <a href="supplier-reurn.html"><button class="accordion"> Supplier Return List</button></a>

            <a href="wastage-return.html"><button class="accordion"> Wastage Return List</button></a>

        </ul>
    </li>

    <!------------------------------------------------------------- Settings -------------------------------------------------------------->

    <li>
        <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-gear"></i>
                <span class="link_name">Settings</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">

            <button class="accordion"><i class=" "></i> Software Settings</button>
            <div class="panel">
                <ul class="">
                    <li><a href="manage-compnay.html">Manage Company</a></li>

                    <li><a href="add-user.html">Add User</a></li>

                    <li><a href="manage-user.html">Manage User</a></li>

                    <li><a href="language.html">Language</a></li>

                    <li><a href="currency.html">Currency</a></li>

                    <li><a href="update-setting.html">Settings</a></li>

                    <li><a href="print-settings.html">Print Setting</a></li>

                    <li><a href="mail-settings.html">Mail Setting</a></li>

                    <li><a href="app-settings.html">App Setting</a></li>

                </ul>
            </div>

            <button class="accordion"><i class=" "></i> Role Permission</button>
            <div class="panel">
                <ul class="">

                    <li><a href="add-role.html">Add Role</a></li>

                    <li><a href="role-list.html">Role List</a></li>

                    <li><a href="assign-role.html">User Assign role</a></li>

                </ul>
            </div>

        </ul>
    </li>

    <!------------------------------------------------------------- Add-ons -------------------------------------------------------------->

    <li>
        <a href="addons.html">
            <i class="fa-brands fa-autoprefixer"></i>
            <span class="link_name">Add-ons</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="addons.html">Add-ons</a></li>
        </ul>
    </li>

    @endif

    <!------------------------------------------------------------- Log Out -------------------------------------------------------------->

    <li>
        <a href="{{ url('/logout') }}">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="link_name">Log Out</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="{{ url('/logout') }}">Log Out</a></li>
        </ul>
    </li>

</ul>