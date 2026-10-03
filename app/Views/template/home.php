<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url('/assets/gallery/LOGO-1.png')?>" type="image/x-icon">
    <title>English Skill Lesson</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container">
            <img width="30px" class="navbar-brand" src="<?=base_url('/assets/gallery/LOGO-1.png')?>" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-end">
                    <!-- Added text-end class here -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=base_url()?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#teacher">Teacher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('login')?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
        class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <!-- Content -->
        <?=$this->renderSection('content')?>
        <!-- teacher -->
        <!-- Footer -->
        <div class="container">
            <footer class="mt-4 ">
                <div class="d-flex border-bottom py-2">
                    <div class="col-3 d-flex justify-content-center">
                        <img width="30%" class="navbar-brand" src="<?=base_url('/assets/gallery/LOGO-1.png')?>" />
                    </div>
                    <div class="col-5" id="contact">
                        <div class="contact-info">
                            <p class="m-1"><i class="fas fa-map-marker-alt"></i> Jl. R.A. Kartini KM. 3, Subang,
                                Pasirkareumbi, Kec. Subang,
                                Kabupaten Subang, Jawa Barat 41285, Indonesia.</p>
                            <p class="m-1"><i class="fas fa-phone-alt"></i> +62 123 456 7890</p>
                            <p class="m-1"><i class="fas fa-envelope"></i> info@englishskilllesson.com</p>
                        </div>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-middle align-content-center mt-4">
                    <p class="text-body-secondary">&copy; 2024 English Skill Lesson</p>
                    <ul class="nav justify-content-center pb-3 mb-3">
                        <li><a href="#" class="nav-link px-2 text-body-secondary">Back To Top</a></li>

                    </ul>
                </div>
            </footer>
        </div>
    </div>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>

</html>