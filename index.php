<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Центр Цифрового Комфорту | Налаштування гаджетів за 15 хвилин</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --royal-blue: #002366;
            --electric-cyan: #00E5FF;
            --graphite: #2C2C2C;
            --cloud-white: #F8F9FA;
            --glass-bg: rgba(255, 255, 255, 0.1);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--cloud-white);
            color: var(--graphite);
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--royal-blue) 0%, #001233 100%);
            min-height: 90vh;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            padding-top: 80px;
        }

        .hero::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to bottom right, transparent 49%, var(--cloud-white) 50%);
        }

        .navbar {
            background: rgba(0, 35, 102, 0.9) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
        }

        .btn-cyan {
            background-color: var(--electric-cyan);
            color: var(--royal-blue);
            font-weight: 700;
            border-radius: 50px;
            padding: 12px 30px;
            transition: 0.3s;
            border: none;
        }

        .btn-cyan:hover {
            background-color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,229,255,0.3);
        }

        /* Cards Style */
        .service-card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 30px;
            transition: 0.4s;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,35,102,0.1);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: rgba(0, 35, 102, 0.05);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: var(--royal-blue);
            margin-bottom: 20px;
        }

        /* Price Section */
        .price-badge {
            background: var(--royal-blue);
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
        }

        /* Map Section */
        .map-container {
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
        }

        footer {
            background: var(--graphite);
            color: white;
            padding: 60px 0 30px;
        }

        .tagline {
            color: var(--electric-cyan);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">ЦЕНТР ЦИФРОВОГО КОМФОРТУ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#services">Послуги</a></li>
                    <li class="nav-item"><a class="nav-link" href="#locations">Локації</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Про нас</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-cyan btn-sm" href="https://t.me/your_bot_link">Консультація Майстра</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <p class="tagline mb-3">Технології, що служать вам</p>
                    <h1 class="display-3 fw-bold mb-4">Повертаємо затишок у ваш цифровий світ</h1>
                    <p class="lead mb-5 opacity-75">Налаштування смартфонів, TV та Wi-Fi за 15 хвилин. Поки ви купуєте продукти — ми робимо вашу техніку комфортною.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#services" class="btn btn-cyan">Переглянути послуги</a>
                        <a href="#locations" class="btn btn-outline-light btn-lg rounded-pill px-4">Знайти найближчу точку</a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <i class="bi bi-shield-check" style="font-size: 15rem; color: var(--electric-cyan); opacity: 0.5;"></i>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Що ми робимо найкраще</h2>
                <p class="text-muted">Професійні рішення для будь-якого віку та пристроїв</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card text-center">
                        <div class="icon-box mx-auto"><i class="bi bi-phone"></i></div>
                        <h4>Смартфони</h4>
                        <p class="small text-muted">Перенос даних, безпека, налаштування Apple ID та Google.</p>
                        <span class="price-badge">від 300 грн</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card text-center">
                        <div class="icon-box mx-auto"><i class="bi bi-tv"></i></div>
                        <h4>Smart TV</h4>
                        <p class="small text-muted">Налаштування каналів, IPTV та YouTube без реклами.</p>
                        <span class="price-badge">від 500 грн</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card text-center">
                        <div class="icon-box mx-auto"><i class="bi bi-wifi"></i></div>
                        <h4>Інтернет</h4>
                        <p class="small text-muted">Оптимізація Wi-Fi та встановлення VPN на роутер.</p>
                        <span class="price-badge">від 400 грн</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card text-center">
                        <div class="icon-box mx-auto"><i class="bi bi-laptop"></i></div>
                        <h4>Ноутбуки</h4>
                        <p class="small text-muted">Встановлення Windows, чистка та прискорення роботи.</p>
                        <span class="price-badge">від 600 грн</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="locations" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Чекаємо на вас у зручних локаціях</h2>
                    <div class="list-group list-group-flush border-0">
                        <div class="list-group-item bg-transparent border-0 ps-0 mb-3">
                            <h5 class="fw-bold"><i class="bi bi-geo-alt-fill text-primary"></i> МегаМаркет (Нивки)</h5>
                            <p class="small mb-1">вул. Данила Щербаківського, 58</p>
                            <span class="badge bg-success">Зараз вільно</span>
                        </div>
                        <div class="list-group-item bg-transparent border-0 ps-0">
                            <h5 class="fw-bold"><i class="bi bi-geo-alt-fill text-primary"></i> ТРЦ Retroville</h5>
                            <p class="small mb-1">просп. Правди, 47 (біля фудкорту)</p>
                            <span class="badge bg-warning text-dark">Черга: 1 людина</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="map-container bg-secondary" style="height: 400px; display: flex; align-items: center; justify-content: center; color: white;">
                        <span>Карта локацій (Тут буде інтеграція Google Maps)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <h3 class="fw-bold mb-4">ЦЕНТР ЦИФРОВОГО КОМФОРТУ</h3>
            <p class="opacity-50 mb-5">Ваша техніка може більше. Ми зробимо це комфортним.</p>
            <div class="d-flex justify-content-center gap-4 mb-5">
                <a href="#" class="text-white fs-4"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white fs-4"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white fs-4"><i class="bi bi-telegram"></i></a>
            </div>
            <hr class="opacity-25">
            <p class="small opacity-50 mb-0">© <?php echo date("Y"); ?> Всі права захищені. Мережа сервісів цифрової допомоги.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
