
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Muhammad Alvin Alfaryzi - IT Support and Web Developer Portfolio">

    <title>Alvin | IT Support & Web Developer</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#080B14] text-slate-100 antialiased">

    <!-- NAVBAR -->
    <header class="fixed top-0 left-0 z-50 w-full border-b border-white/5 bg-[#080B14]/80 backdrop-blur-xl">

        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-10">

            <!-- LOGO -->
            <a href="#home"
                class="text-2xl font-extrabold tracking-tight text-white">
                ALVIN<span class="text-blue-500">.</span>
            </a>

            <!-- DESKTOP MENU -->
            <div class="hidden items-center gap-8 md:flex">

                <a href="#home" class="nav-link text-sm text-blue-400">
                    Home
                </a>

                <a href="#about" class="nav-link text-sm text-slate-400 hover:text-white transition">
                    About
                </a>

                <a href="#skills" class="nav-link text-sm text-slate-400 hover:text-white transition">
                    Skills
                </a>

                <a href="#experience" class="nav-link text-sm text-slate-400 hover:text-white transition">
                    Experience
                </a>

                <a href="#projects" class="nav-link text-sm text-slate-400 hover:text-white transition">
                    Projects
                </a>

                <a href="#contact"
                    class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">
                    Contact Me
                </a>

            </div>

            <!-- MOBILE MENU BUTTON -->
            <button id="menu-toggle"
                type="button"
                aria-label="Open navigation menu"
                aria-expanded="false"
                class="rounded-lg border border-white/10 p-2 text-white md:hidden">

                <svg id="menu-open-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24"
                    viewBox="0 0 24 24"
                    fill="none" stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round">
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>

                <svg id="menu-close-icon"
                    class="hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24"
                    viewBox="0 0 24 24"
                    fill="none" stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round">
                    <path d="m18 6-12 12M6 6l12 12"/>
                </svg>

            </button>

        </nav>

        <!-- MOBILE NAVIGATION -->
        <div id="mobile-menu"
            class="hidden border-t border-white/5 bg-[#080B14]/95 px-6 py-5 md:hidden">

            <div class="flex flex-col gap-5">

                <a href="#home" class="mobile-link text-sm text-white">Home</a>
                <a href="#about" class="mobile-link text-sm text-slate-400">About</a>
                <a href="#skills" class="mobile-link text-sm text-slate-400">Skills</a>
                <a href="#experience" class="mobile-link text-sm text-slate-400">Experience</a>
                <a href="#projects" class="mobile-link text-sm text-slate-400">Projects</a>
                <a href="#contact" class="mobile-link text-sm text-blue-400">Contact Me</a>

            </div>

        </div>

    </header>


    <!-- HERO SECTION -->
    <main>

        <section id="home"
            class="relative flex min-h-screen items-center overflow-hidden px-6 pb-16 pt-32 lg:px-10">

            <!-- BACKGROUND DECORATION -->
            <div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-blue-600/10 blur-[120px]"></div>

            <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-indigo-600/10 blur-[120px]"></div>


            <!-- HERO CONTAINER -->
            <div class="relative mx-auto grid w-full max-w-7xl items-center gap-16 lg:grid-cols-2">

                <!-- LEFT CONTENT -->
                <div class="order-2 space-y-7 lg:order-1">

                    <!-- STATUS -->
                    <div class="inline-flex items-center gap-2 rounded-full border border-blue-500/20 bg-blue-500/10 px-4 py-2">

                        <span class="h-2 w-2 animate-pulse rounded-full bg-blue-400"></span>

                        <span class="text-xs font-medium tracking-wide text-blue-300">
                            IT PROFESSIONAL
                        </span>

                    </div>


                    <!-- INTRODUCTION -->
                    <div class="space-y-4">

                        <p class="text-lg font-medium text-slate-400">
                            Hello, I'm
                        </p>

                        <h1 class="text-5xl font-extrabold leading-tight tracking-tight text-white sm:text-6xl xl:text-7xl">
                            Muhammad Alvin
                            <span class="block text-blue-500">
                                Alfaryzi.
                            </span>
                        </h1>

                        <h2 class="text-xl font-semibold text-slate-300 sm:text-2xl">
                            IT Support
                            <span class="text-blue-500">&</span>
                            Web Developer
                        </h2>

                    </div>


                    <!-- DESCRIPTION -->
                    <p class="max-w-xl text-base leading-8 text-slate-400">
                        An Information Systems graduate with experience in
                        IT Support, technical troubleshooting, administration,
                        and warehouse operations. Passionate about technology,
                        web development, and creating practical digital solutions.
                    </p>


                    <!-- BUTTONS -->
                    <div class="flex flex-wrap gap-4 pt-2">

                        <a href="#projects"
                            class="group inline-flex items-center gap-2 rounded-xl bg-blue-600 px-7 py-3.5 text-sm font-semibold text-white shadow-lg shadow-blue-600/20 transition duration-300 hover:-translate-y-1 hover:bg-blue-700">

                            Explore Projects

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="18" height="18"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>

                        </a>


                        <a href="{{ asset('files/CV-Muhammad-Alvin-Alfaryzi.pdf') }}"
                            download
                            class="inline-flex items-center gap-2 rounded-xl border border-slate-700 px-7 py-3.5 text-sm font-semibold text-slate-200 transition duration-300 hover:-translate-y-1 hover:border-blue-500 hover:text-blue-400">

                            Download CV

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="18" height="18"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                <path d="m7 10 5 5 5-5"/>
                                <path d="M12 15V3"/>
                            </svg>

                        </a>

                    </div>


                    <!-- SOCIAL LINKS -->
                    <div class="flex items-center gap-5 pt-5">

                        <span class="text-xs uppercase tracking-widest text-slate-500">
                            Connect with me
                        </span>

                        <a href="mailto:alvinalvaridzi@gmail.com"
                            aria-label="Email"
                            class="text-slate-400 transition hover:text-blue-400">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="21" height="21"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.7">
                                <rect x="3" y="5" width="18" height="14" rx="2"/>
                                <path d="m3 7 9 6 9-6"/>
                            </svg>

                        </a>

                    </div>

                </div>


                <!-- RIGHT PROFILE IMAGE -->
                <div class="order-1 flex justify-center lg:order-2 lg:justify-end">

                    <div class="relative mx-auto w-full max-w-sm lg:max-w-md">

                        <!-- IMAGE GLOW -->
                        <div class="absolute inset-0 scale-90 rounded-[40px] bg-blue-600/20 blur-3xl"></div>

                        
                        <!-- PROFILE IMAGE - TRANSPARENT PNG -->

                        <div class="relative flex items-end justify-center">

                            <!-- BLUE GLOW EFFECT -->
                            <div class="absolute bottom-10 h-72 w-72 rounded-full bg-blue-600/20 blur-[100px]"></div>

                            <!-- PROFILE IMAGE -->
                            <img
                                src="{{ asset('images/profile.png') }}"
                                alt="Muhammad Alvin Alfaryzi"
                                class="relative z-10 block h-auto w-full object-contain object-bottom"
                            />

                        </div>
                      
                        <!-- FLOATING EDUCATION CARD -->
                        <div class="absolute -right-6 top-1/2 z-30 hidden -translate-y-1/2 rounded-2xl border border-blue-400/20 bg-slate-900/80 p-4 shadow-2xl shadow-blue-950/30 backdrop-blur-xl sm:block lg:-right-10">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/15 text-blue-400">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="22" height="22"
                                        viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">

                                        <path d="M22 10v6"/>
                                        <path d="m2 10 10-5 10 5-10 5-10-5Z"/>
                                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>

                                    </svg>

                                </div>

                                <div>
                                    <p class="text-xs text-slate-400">
                                        Education
                                    </p>

                                    <p class="mt-1 text-sm font-bold text-white">
                                        S1 Information Systems
                                    </p>

                                    <p class="mt-1 text-xs text-blue-400">
                                        STMIK Mardira Indonesia
                                    </p>
                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </section>

    <!-- ABOUT SECTION -->
        <section id="about"
            class="relative overflow-hidden border-t border-white/5 px-6 py-24 lg:px-10 lg:py-32">

            <div class="pointer-events-none absolute -right-40 top-20 h-96 w-96 rounded-full bg-blue-600/10 blur-[120px]"></div>

            <div class="relative mx-auto max-w-7xl">

                <!-- SECTION HEADER -->
                <div class="mb-14">

                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
                        Get To Know Me
                    </p>

                    <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                        About <span class="text-blue-500">Me.</span>
                    </h2>

                    <div class="mt-5 h-1 w-16 rounded-full bg-blue-500"></div>

                </div>


                <!-- ABOUT CONTENT -->
                <div class="grid items-start gap-12 lg:grid-cols-2 lg:gap-20">

                    <!-- LEFT: DESCRIPTION -->
                    <div class="space-y-6">

                        <h3 class="text-2xl font-bold leading-relaxed text-white sm:text-3xl">
                            Passionate about technology,
                            <span class="text-blue-400">problem-solving</span>,
                            and continuous learning.
                        </h3>

                        <p class="text-base leading-8 text-slate-400">
                            I am an Information Systems graduate with professional
                            experience in IT Support, administration, warehouse
                            operations, and human resource management.
                        </p>

                        <p class="text-base leading-8 text-slate-400">
                            My interests include technical troubleshooting,
                            computer configuration, and web development.
                            I enjoy exploring new technologies and finding
                            practical solutions to improve work efficiency.
                        </p>

                        <p class="text-base leading-8 text-slate-400">
                            I am a detail-oriented and adaptable individual
                            who values responsibility, teamwork, and continuous
                            professional growth.
                        </p>


                        <!-- PERSONAL VALUES -->
                        <div class="flex flex-wrap gap-3 pt-3">

                            <span class="rounded-full border border-blue-500/20 bg-blue-500/10 px-4 py-2 text-xs font-medium text-blue-300">
                                Problem Solver
                            </span>

                            <span class="rounded-full border border-blue-500/20 bg-blue-500/10 px-4 py-2 text-xs font-medium text-blue-300">
                                Adaptable
                            </span>

                            <span class="rounded-full border border-blue-500/20 bg-blue-500/10 px-4 py-2 text-xs font-medium text-blue-300">
                                Detail-Oriented
                            </span>

                        </div>

                    </div>


                    <!-- RIGHT: INFORMATION CARDS -->
                    <div class="grid gap-5 sm:grid-cols-2">

                        <!-- EDUCATION -->
                        <div class="group rounded-2xl border border-white/5 bg-[#111827] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/40">

                            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25"
                                    viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">

                                    <path d="m22 10-10-5-10 5 10 5 10-5Z"/>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                                    <path d="M22 10v6"/>

                                </svg>

                            </div>

                            <p class="mb-2 text-xs uppercase tracking-widest text-slate-500">
                                Education
                            </p>

                            <h4 class="text-lg font-bold text-white">
                                S.Kom
                            </h4>

                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                Information Systems
                            </p>

                            <p class="mt-3 text-xs text-blue-400">
                                STMIK Mardira Indonesia · 2024
                            </p>

                        </div>


                        <!-- LOCATION -->
                        <div class="group rounded-2xl border border-white/5 bg-[#111827] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/40">

                            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25"
                                    viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">

                                    <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                    <circle cx="12" cy="10" r="2.5"/>

                                </svg>

                            </div>

                            <p class="mb-2 text-xs uppercase tracking-widest text-slate-500">
                                Location
                            </p>

                            <h4 class="text-lg font-bold text-white">
                                Bandung
                            </h4>

                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                West Java, Indonesia
                            </p>

                        </div>


                        <!-- CAREER INTEREST -->
                        <div class="group rounded-2xl border border-white/5 bg-[#111827] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/40">

                            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25"
                                    viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">

                                    <rect x="3" y="7" width="18" height="14" rx="2"/>
                                    <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                    <path d="M3 12h18"/>
                                    <path d="M10 12v2h4v-2"/>

                                </svg>

                            </div>

                            <p class="mb-2 text-xs uppercase tracking-widest text-slate-500">
                                Career Interest
                            </p>

                            <h4 class="text-lg font-bold text-white">
                                IT & Technology
                            </h4>

                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                Technical Support and Web Development
                            </p>

                        </div>


                        <!-- PERSONALITY -->
                        <div class="group rounded-2xl border border-white/5 bg-[#111827] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/40">

                            <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25"
                                    viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="1.7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">

                                    <path d="M12 3 14.5 8.5 20 11l-5.5 2.5L12 19l-2.5-5.5L4 11l5.5-2.5L12 3Z"/>
                                    <path d="m19 14 1.5 3.5L24 19l-3.5 1.5L19 24l-1.5-3.5L14 19l3.5-1.5L19 14Z" transform="translate(-2 -3) scale(.85)"/>

                                </svg>

                            </div>

                            <p class="mb-2 text-xs uppercase tracking-widest text-slate-500">
                                Work Approach
                            </p>

                            <h4 class="text-lg font-bold text-white">
                                Continuous Growth
                            </h4>

                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                Responsible, adaptable, and eager to learn.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    <!-- TECHNICAL SKILLS SECTION -->
        <section id="skills"
            class="relative overflow-hidden border-t border-white/5 px-6 py-24 lg:px-10 lg:py-32">

            <div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-indigo-600/10 blur-[120px]"></div>

            <div class="relative mx-auto max-w-7xl">

                <!-- SECTION HEADER -->
                <div class="mb-14 text-center">

                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
                        What I Can Do
                    </p>

                    <h2 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                        Technical <span class="text-blue-500">Skills.</span>
                    </h2>

                    <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-slate-400">
                        A combination of technical knowledge, practical experience,
                        and professional skills developed through work and continuous learning.
                    </p>

                    <div class="mx-auto mt-6 h-1 w-16 rounded-full bg-blue-500"></div>

                </div>


                <!-- SKILLS GRID -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">


                    <!-- PROGRAMMING -->
                    <div class="group rounded-2xl border border-white/5 bg-[#111827] p-7 transition duration-300 hover:-translate-y-2 hover:border-blue-500/40 hover:shadow-xl hover:shadow-blue-950/20">

                        <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500/10 text-blue-400 transition group-hover:bg-blue-500 group-hover:text-white">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="28" height="28"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <path d="m16 18 6-6-6-6"/>
                                <path d="m8 6-6 6 6 6"/>
                                <path d="m14 4-4 16"/>

                            </svg>

                        </div>

                        <h3 class="mb-3 text-lg font-bold text-white">
                            Programming & Web
                        </h3>

                        <p class="mb-5 text-sm leading-6 text-slate-400">
                            Building and developing web-based applications.
                        </p>

                        <div class="flex flex-wrap gap-2">

                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">Laravel</span>
                            <span class="skill-tag">HTML</span>
                            <span class="skill-tag">CSS</span>
                            <span class="skill-tag">Java</span>
                            <span class="skill-tag">C++</span>

                        </div>

                    </div>


                    <!-- DATABASE -->
                    <div class="group rounded-2xl border border-white/5 bg-[#111827] p-7 transition duration-300 hover:-translate-y-2 hover:border-blue-500/40 hover:shadow-xl hover:shadow-blue-950/20">

                        <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500/10 text-blue-400 transition group-hover:bg-blue-500 group-hover:text-white">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="28" height="28"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <ellipse cx="12" cy="5" rx="9" ry="3"/>
                                <path d="M3 5v14c0 1.66 4.03 3 9 3s9-1.34 9-3V5"/>
                                <path d="M3 12c0 1.66 4.03 3 9 3s9-1.34 9-3"/>

                            </svg>

                        </div>

                        <h3 class="mb-3 text-lg font-bold text-white">
                            Database & Data
                        </h3>

                        <p class="mb-5 text-sm leading-6 text-slate-400">
                            Managing structured data and database operations.
                        </p>

                        <div class="flex flex-wrap gap-2">

                            <span class="skill-tag">SQLite</span>
                            <span class="skill-tag">Data Entry</span>
                            <span class="skill-tag">Data Management</span>
                            <span class="skill-tag">Inventory Data</span>

                        </div>

                    </div>


                    <!-- IT SUPPORT -->
                    <div class="group rounded-2xl border border-white/5 bg-[#111827] p-7 transition duration-300 hover:-translate-y-2 hover:border-blue-500/40 hover:shadow-xl hover:shadow-blue-950/20">

                        <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500/10 text-blue-400 transition group-hover:bg-blue-500 group-hover:text-white">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="28" height="28"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="3" width="18" height="14" rx="2"/>
                                <path d="M8 21h8"/>
                                <path d="M12 17v4"/>
                                <path d="m9 9 2 2 4-4"/>

                            </svg>

                        </div>

                        <h3 class="mb-3 text-lg font-bold text-white">
                            IT Support
                        </h3>

                        <p class="mb-5 text-sm leading-6 text-slate-400">
                            Providing technical assistance and troubleshooting.
                        </p>

                        <div class="flex flex-wrap gap-2">

                            <span class="skill-tag">Troubleshooting</span>
                            <span class="skill-tag">Hardware</span>
                            <span class="skill-tag">Software</span>
                            <span class="skill-tag">Configuration</span>

                        </div>

                    </div>


                    <!-- PROFESSIONAL -->
                    <div class="group rounded-2xl border border-white/5 bg-[#111827] p-7 transition duration-300 hover:-translate-y-2 hover:border-blue-500/40 hover:shadow-xl hover:shadow-blue-950/20">

                        <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500/10 text-blue-400 transition group-hover:bg-blue-500 group-hover:text-white">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="28" height="28"
                                viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect x="3" y="7" width="18" height="14" rx="2"/>
                                <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                <path d="M3 12h18"/>

                            </svg>

                        </div>

                        <h3 class="mb-3 text-lg font-bold text-white">
                            Professional Skills
                        </h3>

                        <p class="mb-5 text-sm leading-6 text-slate-400">
                            Supporting business operations and administrative tasks.
                        </p>

                        <div class="flex flex-wrap gap-2">

                            <span class="skill-tag">MS Office</span>
                            <span class="skill-tag">Administration</span>
                            <span class="skill-tag">Recruitment</span>
                            <span class="skill-tag">Inventory</span>
                            <span class="skill-tag">CorelDRAW</span>

                        </div>

                    </div>


                </div>


                <!-- BOTTOM NOTE -->
                <div class="mt-12 rounded-2xl border border-blue-500/10 bg-blue-500/5 p-6 text-center">

                    <p class="text-sm leading-7 text-slate-300">
                        Always learning, continuously improving, and ready to explore
                        new technologies and professional challenges.
                    </p>

                </div>

            </div>

        </section>

    </main>

</body>
</html>
