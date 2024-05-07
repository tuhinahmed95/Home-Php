<ul class="menu  bg-[#0e1428]  p-0 ml-0 *:text-[white] *:border-b w-56 min-h-screen">

    <li <?php echo ((($_GET['page'] ?? '')  === 'dashboard') || (!isset($_GET['page'])) ? 'class="bg-[#7f8fa6]"' : ''); ?>><a href="index.php?page=dashboard"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Dashboard</a></li>


    <li <?php echo ($_GET['page'] ?? '') === 'brand' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=brand"><i class="fa-brands fa-shopify fa-xl"></i> Brand</a></li>
    <li>


    <li <?php echo ($_GET['page'] ?? '') === 'category' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=category"><i class="fa-brands fa-shopify fa-xl"></i> Category</a></li>
    <li>

    <li <?php echo ($_GET['page'] ?? '') === 'sub_category' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=sub_category"><i class="fa-brands fa-shopify fa-xl"></i>Sub Category</a></li>
    <li>

    <li <?php echo ($_GET['page'] ?? '') === 'viewproduct' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=viewproduct"><i class="fa-brands fa-shopify fa-xl"></i> Product</a></li>
    <li>

    <li <?php echo ($_GET['page'] ?? '') === 'order' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=order"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
            </svg>
            Orders</a></li>
    <li>

    <li <?php echo ((($_GET['page'] ?? '')  === 'user') ? 'class="bg-[#7f8fa6]"' : ''); ?>><a href="index.php?page=user"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
            User</a></li>






    <li <?php echo ($_GET['page'] ?? '') === 'sales' ? 'class="bg-[#7f8fa6]"' : ''; ?>><a href="index.php?page=sales"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
            </svg>
            Sales</a></li>
    <li>



</ul>