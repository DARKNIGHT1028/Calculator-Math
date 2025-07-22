<!DOCTYPE html>
<html>
<head>
    <title>Laravel Math Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4272992805905761" crossorigin="anonymous"></script>
    <style>
        .app-header {
            background: linear-gradient(90deg, #f8fafc 0%, #e9ecef 100%);
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 2.5rem 1rem 1.5rem 1rem;
            text-align: center;
            border-bottom: 2px solid #e0e0e0;
        }
        .app-header h1 {
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 1px;
            margin-bottom: 0;
        }
        .app-footer {
            background: #f8fafc;
            border-top: 2px solid #e0e0e0;
            padding: 1.5rem 0 1rem 0;
            font-size: 0.95rem;
            color: #888;
            margin-top: 3rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="app-header position-relative" style="min-height: 3.5rem;">
        <h1 class="mb-0 text-center w-100">Laravel Math Calculator</h1>
        <div class="dropdown" style="position:absolute; top:50%; right:2rem; transform:translateY(-50%);">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="headerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </button>
            <ul class="dropdown-menu" aria-labelledby="headerDropdown">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="#">About</a></li>
                <li><a class="dropdown-item" href="#">Contact</a></li>
            </ul>
        </div>
    </header>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-2 d-flex justify-content-center align-items-start mb-3 mb-md-0">
                <!-- Google AdSense (Left) -->
                <ins class="adsbygoogle"
                     style="display:block; width:160px; min-height:600px; background:#f8fafc; border:1px dashed #ccc;"
                     data-ad-client="ca-pub-4272992805905761"
                     data-ad-slot="YOUR_AD_SLOT_LEFT"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
            <div class="col-12 col-md-8">
                @yield('content')
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-center align-items-start mb-3 mb-md-0">
                <!-- Google AdSense (Right) -->
                <ins class="adsbygoogle"
                     style="display:block; width:160px; min-height:600px; background:#f8fafc; border:1px dashed #ccc;"
                     data-ad-client="ca-pub-4272992805905761"
                     data-ad-slot="YOUR_AD_SLOT_RIGHT"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
        </div>
    </div>
    <footer class="app-footer">
        &copy; {{ date('Y') }} Laravel Math Calculator</span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 