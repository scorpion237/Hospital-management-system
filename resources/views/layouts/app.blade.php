
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: Montserrat Regular; }
        .bg-sidebar { background: #212f7a; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #6da7ee; }
        .upgrade-btn:hover { background: #6da7ee; }
        .active-nav-link { color: #fff; font-weight: bold; }
        .nav-item:hover { border-bottom-width:1; border-bottom-color:  #6da7ee; font-weight: bold; color: #fff }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 border border-gray-200">
        <div class="p-2">
           <div class="flex justify-between">
            <a href="#" class="text-white text-sm font-semibold uppercase hover:text-white">MO-Hospital </a>
            <i class="fa fa-bars text-white"></i> 
           </div>
            <a href="{{ route('patients.create') }}" class="w-full bg-white cta-btn font-semibold py-1 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-sm flex items-center justify-center hover:animate-bounce">
                <i class="fas fa-plus mr-3"></i> Nouveau Patient
            </a>
        </div>
        <nav class="text-gray-500 text-sm font-semibold pt-2">
            <a href="index.html" class="flex items-center active-nav-link text-gray-500 py-4 pl-6 nav-item hover:border-b-2 hover:text-white">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="{{ route('patient') }}" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-4 pl-6 nav-item hover:border-b-2 hover:text-white">
                <i class="fas fa-user mr-3"></i>
                Patients
            </a>
            <a href="{{ route('employer') }}" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-4 pl-6 nav-item hover:border-b-2 hover:text-white  ">
                <i class="fas fa-users mr-3"></i>
                Employers
            </a>
            <a href="{{ route('appointements') }}" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-4 pl-6 nav-item hover:border-b-2 hover:text-white">
                <i class="fas fa-calendar mr-3"></i>
                Rendez-Vous
            </a>
            <a href="tabs.html" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-4 pl-6 nav-item hover:border-b-2 hover:text-white">
                <i class="fas fa-tablet-alt mr-3"></i>
                Tabbed Content
            </a>
            <a href="calendar.html" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-4 pl-6 nav-item hover:border-b-2 hover:text-white">
                <i class="fas fa-calendar mr-3"></i>
                Calendar
            </a>
        </nav>
        
    </aside>
   
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex shadow-md">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <div>Admin</div>
                 <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-gray-500">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-gray-500">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-gray-500">Sign Out</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-gray-500 text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-gray-500 text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="index.html" class="flex items-center active-nav-link text-gray-500 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="blank.html" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Blank Page
                </a>
                <a href="tables.html" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-table mr-3"></i>
                    Tables
                </a>
                <a href="forms.html" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-align-left mr-3"></i>
                    Forms
                </a>
                <a href="tabs.html" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-tablet-alt mr-3"></i>
                    Tabbed Content
                </a>
                <a href="calendar.html" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-calendar mr-3"></i>
                    Calendar
                </a>
                <a href="#" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center text-gray-500 opacity-75 hover:opacity-100 py-2 pl-4 nav-item hover:border-b-2 hover:text-white">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
             
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
    
        @yield('content')
        
        
    </div>

    @livewireScripts
    <!-- AlpineJS -->
    <script src="{{ asset('js/alpine.min.js ') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
