<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Static - Web Developer')</title>

    <!-- Bootstrap (optional, mainly for responsive grid) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="/css/portfolio.css">



</head>
<body>



   <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <!-- Brand / Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('portfolio.home') }}">
            <img 
                src="https://tse2.mm.bing.net/th/id/OIP.7aVd3iQa7niIEH19CHpYBwHaFS?rs=1&pid=ImgDetMain&o=7&rm=3" 
                alt="Gels Coffee Logo" 
                style="height: 40px; width: auto; border-radius: 6px; margin-right: 8px;"
            >
            Gels Coffee
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>



    <!-- Main Content -->

    @yield('content')

    <!-- Footer -->

    <footer>

        <div class="container">

            <p>© {{ date('Y') }} Portfolio. Built with Laravel {{ app()->version() }}</p>

        </div>

    </footer>
    <script>
document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
  const sections = document.querySelectorAll('section[id]');

  function hideAll() {
    sections.forEach(s => {
      s.style.display = 'none';
    });
  }

  function showSection(id) {
    const el = document.getElementById(id);
    if (!el) return;
    el.style.display = 'flex';
    el.style.flexDirection = 'column';
    el.style.alignItems = 'center';
    el.style.justifyContent = 'center';
    el.style.minHeight = '100vh';
  }

  hideAll();
  if (document.getElementById('hero')) {
    showSection('hero');
  } else if (sections[0]) {
    showSection(sections[0].id);
  }

  navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const href = e.currentTarget.getAttribute('href');
      if (!href || !href.startsWith('#')) return;
      const id = href.slice(1);
      hideAll();
      showSection(id);
      const navCollapse = document.querySelector('.navbar-collapse.show');
      if (navCollapse) {
        try {
          const bsCollapse = bootstrap.Collapse.getInstance(navCollapse) || new bootstrap.Collapse(navCollapse);
          bsCollapse.hide();
        } catch (err) {}
      }
    });
  });
});
</script>



</body>

</html>
 