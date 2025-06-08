<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Louis Vuitton')</title>
    <style>
        /* Root colors for default light elegant theme */
        :root {
            --color-bg: #ffffff;
            --color-text: #6b7280;
            --color-headline: #111827;
            --color-primary: #111827;
            --color-primary-hover: #374151;
            --color-card-bg: #f9fafb;
            --color-shadow: rgba(0, 0, 0, 0.05);
            --border-radius: 0.75rem;
            --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI',
                Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji',
                'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
        }

        /* Reset and base */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: var(--font-sans);
            background-color: var(--color-bg);
            color: var(--color-text);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 18px;
        }

        a {
            color: var(--color-primary);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover,
        a:focus {
            color: var(--color-primary-hover);
            outline: none;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: var(--color-bg);
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px var(--color-shadow);
        }
        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--color-primary);
            letter-spacing: 0.1em;
        }
        .nav-links {
            display: flex;
            gap: 2rem;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.875rem;
        }
        .nav-links a {
            color: var(--color-text);
            padding: 0.5rem 0;
            position: relative;
        }
        .nav-links a::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -4px;
            width: 0;
            height: 2px;
            background: var(--color-primary);
            transition: width 0.3s ease, left 0.3s ease;
            border-radius: 2px;
        }
        .nav-links a:hover::after,
        .nav-links a:focus::after {
            width: 100%;
            left: 0;
        }

        main {
            max-width: 1200px;
            margin: 4rem auto 6rem;
            padding: 0 1rem;
        }

        /* Hero Section */
        .hero-section {
            text-align: center;
            padding-top: 4rem;
            padding-bottom: 5rem;
        }
        .hero-section h1 {
            font-weight: 700;
            font-size: 4rem;
            color: var(--color-headline);
            margin-bottom: 1rem;
            line-height: 1.1;
        }
        .hero-section p {
            font-weight: 400;
            font-size: 1.25rem;
            max-width: 600px;
            margin: 0 auto 2.5rem;
            color: var(--color-text);
        }
        .btn-primary {
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 1.125rem;
            font-weight: 700;
            background-color: var(--color-primary);
            color: #fff;
            border-radius: var(--border-radius);
            box-shadow: 0 8px 20px rgba(17, 24, 39, 0.15);
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            user-select: none;
            text-decoration: none;
        }
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: var(--color-primary-hover);
            box-shadow: 0 12px 35px rgba(17, 24, 39, 0.25);
            outline: none;
        }
        .btn-primary i {
            margin-right: 0.75rem;
        }

        /* Section titles */
        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            color: var(--color-headline);
            text-align: center;
            margin-bottom: 3rem;
        }

        /* Cards */
        .card {
            background: var(--color-card-bg);
            border-radius: var(--border-radius);
            box-shadow: 0 4px 8px var(--color-shadow);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            flex-shrink: 0;
        }
        .card .card-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .card .card-title {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--color-headline);
            margin-bottom: 0.75rem;
        }
        .card .card-text {
            flex-grow: 1;
            color: var(--color-text);
            font-size: 1rem;
            line-height: 1.4;
            margin-bottom: 1rem;
        }
        .card .btn-sm {
            align-self: start;
            padding: 0.5rem 1.25rem;
            font-weight: 600;
            font-size: 0.875rem;
            background-color: var(--color-primary);
            color: white;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(17, 24, 39, 0.15);
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .card .btn-sm:hover,
        .card .btn-sm:focus {
            background-color: var(--color-primary-hover);
            outline: none;
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill,minmax(280px,1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        .gallery-item {
            position: relative;
            border-radius: var(--border-radius);
            box-shadow: 0 6px 12px var(--color-shadow);
            overflow: hidden;
            cursor: pointer;
        }
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.4s ease;
            display: block;
        }
        .gallery-item:hover img,
        .gallery-item:focus-within img {
            transform: scale(1.05);
        }
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            background: rgba(17, 24, 39, 0.7);
            color: white;
            font-weight: 600;
            font-size: 1.125rem;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-bottom-left-radius: var(--border-radius);
            border-bottom-right-radius: var(--border-radius);
        }
        .gallery-item:hover .gallery-overlay,
        .gallery-item:focus-within .gallery-overlay {
            opacity: 1;
        }

        /* Utilities */
        .container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .text-center {
            text-align: center;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .mb-5 {
            margin-bottom: 1.25rem;
        }
        .mb-3 {
            margin-bottom: 0.75rem;
        }
        .mt-4 {
            margin-top: 1rem;
        }
        .mt-5 {
            margin-top: 1.25rem;
        }
        .pt-16 {
            padding-top: 4rem;
        }
        .pb-20 {
            padding-bottom: 5rem;
        }
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            .nav-links {
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav role="navigation" aria-label="Primary Navigation" class="container">
            <a href="{{ route('home') }}" class="logo" aria-label="Louis Vuitton Home">LOUIS VUITTON</a>
            <div class="nav-links" role="menubar" aria-label="Main Menu">
                <a href="{{ route('home') }}" role="menuitem">Home</a>
                <a href="{{ route('about') }}" role="menuitem">About</a>
                <a href="{{ route('gallery') }}" role="menuitem">Gallery</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>

