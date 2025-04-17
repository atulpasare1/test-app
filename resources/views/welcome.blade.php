<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exam Portal</title>
                <!-- Styles / Scripts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
            <script src="https://cdn.tailwindcss.com/3.4.16"></script>
            <script>tailwind.config={theme:{extend:{colors:{primary:'#1a237e',secondary:'#4caf50'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
            <style>
                :where([class^="ri-"])::before { content: "\f3c2"; }
                body {
                    font-family: 'Roboto', sans-serif;
                    background-color: #f8f9fa;
                }
                h1, h2, h3, h4, h5, h6 {
                    font-family: 'Montserrat', sans-serif;
                }
                .nav-link {
                    position: relative;
                }
                .nav-link::after {
                    content: '';
                    position: absolute;
                    width: 0;
                    height: 2px;
                    bottom: -2px;
                    left: 0;
                    background-color: #1a237e;
                    transition: width 0.3s;
                }
                .nav-link:hover::after {
                    width: 100%;
                }
                .role-card:hover {
                    transform: translateY(-5px);
                }
                .feature-card:hover {
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                }
            </style>

    </head>


        <body class="bg-white">
            <!-- Navigation Bar -->
            <nav class="fixed w-full top-0 bg-white shadow-md z-50">
                <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
                    <div class="flex items-center">
                        <a href="#" class="text-2xl font-['Pacifico'] text-primary">logo</a>
                    </div>

                    <div class="hidden md:flex items-center space-x-6">
                        <a href="#" class="nav-link text-gray-700 hover:text-primary font-medium">Home</a>
                        <a href="#" class="nav-link text-gray-700 hover:text-primary font-medium">About</a>
                        <a href="#" class="nav-link text-gray-700 hover:text-primary font-medium">Features</a>
                        <a href="#" class="nav-link text-gray-700 hover:text-primary font-medium">Contact</a>
                    </div>

                    <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                     @auth

                        <a href="{{ url('/dashboard') }}"
                            class="hidden md:block bg-white text-primary border border-primary px-4 py-2 rounded-button hover:bg-gray-50 transition cursor-pointer">Sign In</button>
"

                            Dashboard
                        </a>
                    @else
                    <button class="hidden md:block bg-white text-primary border border-primary px-4 py-2 rounded-button hover:bg-gray-50 transition cursor-pointer">Sign In</button>

                        @if (Route::has('register'))
                        <button class="hidden md:block bg-primary text-white px-4 py-2 rounded-button hover:bg-opacity-90 transition cursor-pointer">Register</button>
                        @endif
                    @endauth
                        @endif

                        <div class="md:hidden w-8 h-8 flex items-center justify-center cursor-pointer" id="mobile-menu-button">
                            <i class="ri-menu-line ri-lg"></i>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="md:hidden hidden bg-white w-full absolute top-full left-0 shadow-md" id="mobile-menu">
                    <div class="flex flex-col px-4 py-2">
                        <a href="#" class="py-2 text-gray-700 hover:text-primary">Home</a>
                        <a href="#" class="py-2 text-gray-700 hover:text-primary">About</a>
                        <a href="#" class="py-2 text-gray-700 hover:text-primary">Features</a>
                        <a href="#" class="py-2 text-gray-700 hover:text-primary">Contact</a>
                        <div class="flex space-x-2 py-3">
                            <button class="flex-1 bg-white text-primary border border-primary px-4 py-2 rounded-button hover:bg-gray-50 transition cursor-pointer">Sign In</button>
                            <button class="flex-1 bg-primary text-white px-4 py-2 rounded-button hover:bg-opacity-90 transition cursor-pointer">Register</button>
                        </div>
                    </div>
                </div>
            </nav>

        <!-- Main Content Area -->
    <main class="pt-16">
        <!-- Hero Section -->
        <section class="relative h-[400px] overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-blue-700 opacity-90"></div>
            <img src="https://readdy.ai/api/search-image?query=abstract%20academic%20background%20with%20books%2C%20graduation%20caps%2C%20and%20digital%20elements%2C%20modern%20education%20concept%2C%20blue%20color%20scheme%2C%20high%20quality&width=1280&height=720&seq=1234&orientation=landscape" alt="Education Background" class="w-full h-full object-cover object-top">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Your Digital Examination Platform</h1>
                <p class="text-white text-lg md:text-xl mb-8 max-w-2xl">Secure, efficient, and transparent assessment solution for modern education</p>
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                    <button class="bg-white text-primary px-6 py-3 rounded-button font-medium hover:bg-gray-100 transition cursor-pointer">Student Login</button>
                    <button class="bg-transparent text-white border-2 border-white px-6 py-3 rounded-button font-medium hover:bg-white hover:bg-opacity-10 transition cursor-pointer">Teacher Login</button>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="bg-white py-6">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-gray-50 p-4 rounded shadow text-center">
                        <p class="text-3xl font-bold text-primary">10,000+</p>
                        <p class="text-gray-600">Exams Conducted</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded shadow text-center">
                        <p class="text-3xl font-bold text-primary">5,000+</p>
                        <p class="text-gray-600">Active Students</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded shadow text-center">
                        <p class="text-3xl font-bold text-primary">500+</p>
                        <p class="text-gray-600">Registered Teachers</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded shadow text-center">
                        <p class="text-3xl font-bold text-primary">98%</p>
                        <p class="text-gray-600">Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Access Panel -->
        <section class="py-8 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-center mb-8">Quick Access</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="role-card bg-white rounded-lg shadow p-4 text-center transition duration-300 cursor-pointer hover:shadow-lg">
                        <div class="w-16 h-16 mx-auto mb-3 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="ri-user-line ri-xl text-primary"></i>
                        </div>
                        <h3 class="font-semibold mb-1">Student</h3>
                        <p class="text-sm text-gray-600">Take exams & view results</p>
                    </div>
                    <div class="role-card bg-white rounded-lg shadow p-4 text-center transition duration-300 cursor-pointer hover:shadow-lg">
                        <div class="w-16 h-16 mx-auto mb-3 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="ri-user-star-line ri-xl text-green-600"></i>
                        </div>
                        <h3 class="font-semibold mb-1">Teacher</h3>
                        <p class="text-sm text-gray-600">Create & manage exams</p>
                    </div>
                    <div class="role-card bg-white rounded-lg shadow p-4 text-center transition duration-300 cursor-pointer hover:shadow-lg">
                        <div class="w-16 h-16 mx-auto mb-3 bg-purple-100 rounded-full flex items-center justify-center">
                            <i class="ri-parent-line ri-xl text-purple-600"></i>
                        </div>
                        <h3 class="font-semibold mb-1">Parent</h3>
                        <p class="text-sm text-gray-600">Monitor performance</p>
                    </div>
                    <div class="role-card bg-white rounded-lg shadow p-4 text-center transition duration-300 cursor-pointer hover:shadow-lg">
                        <div class="w-16 h-16 mx-auto mb-3 bg-red-100 rounded-full flex items-center justify-center">
                            <i class="ri-admin-line ri-xl text-red-600"></i>
                        </div>
                        <h3 class="font-semibold mb-1">Admin</h3>
                        <p class="text-sm text-gray-600">System management</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Announcements Section -->
        <section class="py-6 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold">Announcements</h2>
                    <a href="#" class="text-primary hover:underline text-sm">View All</a>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="border-l-4 border-red-500 p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex justify-between items-start">
                            <h3 class="font-medium">Final Exam Schedule Released</h3>
                            <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded">Important</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Spring 2025 final examination schedule is now available. Please check your dashboard for details.</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-xs text-gray-500">April 17, 2025</span>
                            <button class="text-primary text-sm hover:underline">Read more</button>
                        </div>
                    </div>
                    <div class="border-l-4 border-blue-500 p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex justify-between items-start">
                            <h3 class="font-medium">System Maintenance Notice</h3>
                            <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Notice</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">The portal will be unavailable on April 20, 2025 from 2:00 AM to 4:00 AM EDT for scheduled maintenance.</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-xs text-gray-500">April 15, 2025</span>
                            <button class="text-primary text-sm hover:underline">Read more</button>
                        </div>
                    </div>
                    <div class="border-l-4 border-green-500 p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex justify-between items-start">
                            <h3 class="font-medium">New Feature: Practice Tests</h3>
                            <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded">Update</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">We've added a new practice test feature to help students prepare for upcoming exams. Try it now!</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-xs text-gray-500">April 10, 2025</span>
                            <button class="text-primary text-sm hover:underline">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-10 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-center mb-2">Key Features</h2>
                <p class="text-center text-gray-600 mb-8">Designed to make examination processes seamless and efficient</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="feature-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition duration-300">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ri-lock-line ri-lg text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Secure Testing</h3>
                        <p class="text-gray-600">Advanced proctoring features prevent cheating and ensure exam integrity with browser lockdown and AI monitoring.</p>
                    </div>
                    <div class="feature-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition duration-300">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ri-bar-chart-line ri-lg text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Detailed Analytics</h3>
                        <p class="text-gray-600">Comprehensive performance reports with visual charts help identify strengths and areas for improvement.</p>
                    </div>
                    <div class="feature-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition duration-300">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ri-time-line ri-lg text-purple-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Auto Grading</h3>
                        <p class="text-gray-600">Instant results for objective questions with customizable grading schemes for different question types.</p>
                    </div>
                    <div class="feature-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition duration-300">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ri-question-line ri-lg text-yellow-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Question Bank</h3>
                        <p class="text-gray-600">Create and manage a diverse question repository with categorization and difficulty levels.</p>
                    </div>
                    <div class="feature-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition duration-300">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ri-notification-line ri-lg text-red-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Real-time Alerts</h3>
                        <p class="text-gray-600">Automated notifications for exam schedules, results, and important announcements via email and SMS.</p>
                    </div>
                    <div class="feature-card bg-white p-6 rounded-lg shadow-sm border border-gray-100 transition duration-300">
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                            <i class="ri-device-line ri-lg text-indigo-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Multi-device Support</h3>
                        <p class="text-gray-600">Access exams from any device with responsive design that works on desktops, tablets, and smartphones.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-10 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-2xl font-bold text-center mb-2">What Users Say</h2>
                <p class="text-center text-gray-600 mb-8">Feedback from our community of students, teachers, and administrators</p>

                <div class="relative" id="testimonial-container">
                    <div class="flex overflow-x-auto snap-x scrollbar-hide space-x-4 pb-4" id="testimonial-slider">
                        <div class="snap-center shrink-0 w-full md:w-1/3 bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold">JS</div>
                                <div class="ml-4">
                                    <h3 class="font-semibold">Jennifer Smith</h3>
                                    <p class="text-sm text-gray-600">Mathematics Teacher</p>
                                </div>
                            </div>
                            <div class="flex text-yellow-400 mb-2">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p class="text-gray-700">"This portal has revolutionized how I conduct assessments. The automated grading saves me hours of work, and the detailed analytics help me identify concepts my students are struggling with."</p>
                        </div>

                        <div class="snap-center shrink-0 w-full md:w-1/3 bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold">MJ</div>
                                <div class="ml-4">
                                    <h3 class="font-semibold">Michael Johnson</h3>
                                    <p class="text-sm text-gray-600">12th Grade Student</p>
                                </div>
                            </div>
                            <div class="flex text-yellow-400 mb-2">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                            <p class="text-gray-700">"I love the practice test feature! It's helped me prepare for my finals and identify areas where I need more study. The instant feedback is incredibly helpful for improving my performance."</p>
                        </div>

                        <div class="snap-center shrink-0 w-full md:w-1/3 bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold">RP</div>
                                <div class="ml-4">
                                    <h3 class="font-semibold">Rachel Patel</h3>
                                    <p class="text-sm text-gray-600">Parent</p>
                                </div>
                            </div>
                            <div class="flex text-yellow-400 mb-2">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-line"></i>
                            </div>
                            <p class="text-gray-700">"As a parent, I appreciate being able to monitor my child's progress in real-time. The notification system keeps me informed about upcoming exams and results without having to constantly check."</p>
                        </div>

                        <div class="snap-center shrink-0 w-full md:w-1/3 bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white font-bold">DW</div>
                                <div class="ml-4">
                                    <h3 class="font-semibold">David Wilson</h3>
                                    <p class="text-sm text-gray-600">School Administrator</p>
                                </div>
                            </div>
                            <div class="flex text-yellow-400 mb-2">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                            <p class="text-gray-700">"The comprehensive analytics and reporting features have been invaluable for our institution. We can now track performance trends across classes and subjects to inform our curriculum development."</p>
                        </div>
                    </div>

                    <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow hover:bg-gray-100 focus:outline-none hidden md:block" id="prev-testimonial">
                        <i class="ri-arrow-left-s-line ri-lg text-gray-600"></i>
                    </button>

                    <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow hover:bg-gray-100 focus:outline-none hidden md:block" id="next-testimonial">
                        <i class="ri-arrow-right-s-line ri-lg text-gray-600"></i>
                    </button>
                </div>

                <div class="flex justify-center space-x-2 mt-4 md:hidden">
                    <button class="w-3 h-3 rounded-full bg-primary"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300"></button>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-12 bg-primary">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Ready to Transform Your Examination Process?</h2>
                <p class="text-white text-lg mb-8 max-w-2xl mx-auto">Join thousands of educational institutions already using our platform</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4">
                    <button class="bg-white text-primary px-6 py-3 rounded-button font-medium hover:bg-gray-100 transition cursor-pointer">Request Demo</button>
                    <button class="bg-transparent text-white border-2 border-white px-6 py-3 rounded-button font-medium hover:bg-white hover:bg-opacity-10 transition cursor-pointer">Contact Sales</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-10 pb-6">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 font-['Pacifico']">logo</h3>
                    <p class="text-gray-300 mb-4">Empowering education through secure, efficient, and transparent examination processes.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white w-8 h-8 flex items-center justify-center">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white w-8 h-8 flex items-center justify-center">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white w-8 h-8 flex items-center justify-center">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white w-8 h-8 flex items-center justify-center">
                            <i class="ri-instagram-fill"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Features</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Pricing</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Help Center</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Documentation</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">API Reference</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Community</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="ri-map-pin-line mt-1 mr-2"></i>
                            <span>123 Education Ave, Learning City, ED 54321</span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-phone-line mr-2"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="ri-mail-line mr-2"></i>
                            <span>support@examportal.com</span>
                        </li>
                    </ul>
                    <form class="mt-4">
                        <label class="block text-sm mb-2">Subscribe to our newsletter</label>
                        <div class="flex">
                            <input type="email" placeholder="Your email" class="px-3 py-2 bg-gray-700 text-white rounded-l-button focus:outline-none w-full border-none">
                            <button type="submit" class="bg-primary text-white px-4 py-2 rounded-r-button hover:bg-opacity-90 cursor-pointer">
                                <i class="ri-send-plane-line"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2025 Exam Portal. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Tab Bar for Mobile -->
    <div class="md:hidden fixed bottom-0 w-full bg-white shadow-lg border-t border-gray-200 z-50">
        <div class="grid grid-cols-5 h-16">
            <a href="#" class="flex flex-col items-center justify-center text-primary">
                <i class="ri-home-line ri-lg"></i>
                <span class="text-xs mt-1">Home</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center text-gray-600">
                <i class="ri-file-list-line ri-lg"></i>
                <span class="text-xs mt-1">Exams</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center text-gray-600">
                <i class="ri-book-open-line ri-lg"></i>
                <span class="text-xs mt-1">Study</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center text-gray-600">
                <i class="ri-bar-chart-line ri-lg"></i>
                <span class="text-xs mt-1">Results</span>
            </a>
            <a href="#" class="flex flex-col items-center justify-center text-gray-600">
                <i class="ri-user-line ri-lg"></i>
                <span class="text-xs mt-1">Profile</span>
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Testimonial slider
            const slider = document.getElementById('testimonial-slider');
            const prevButton = document.getElementById('prev-testimonial');
            const nextButton = document.getElementById('next-testimonial');

            if (prevButton && nextButton && slider) {
                prevButton.addEventListener('click', function() {
                    slider.scrollBy({ left: -slider.offsetWidth / 3, behavior: 'smooth' });
                });

                nextButton.addEventListener('click', function() {
                    slider.scrollBy({ left: slider.offsetWidth / 3, behavior: 'smooth' });
                });
            }
        });
    </script>
</body>
</html>
