<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('account') ? 'active' : '' }}" href="/account">Biodata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('account/address') ? 'active' : '' }}"
                    href="/account/address">Address</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('account/payment') ? 'active' : '' }}" href="/payment">Payment</a>
            </li>
        </ul>
    </div>
</div>
