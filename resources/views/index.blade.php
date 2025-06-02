<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarroFácil - Aluguel de Carros</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/home.js') }}"></script>
</head>

<body>
    <!-- Header  -->
    <header>
        <div class="container header-content">
            <div class="logo-wrapper">
                <svg class="header-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                        d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                    <circle cx="7" cy="17" r="2" />
                    <path d="M9 17h6" />
                    <circle cx="17" cy="17" r="2" />
                </svg>
                <h1 class="header-title">CarroFácil</h1>
            </div>

            <!-- Botões de navegação -->
            <nav class="main-nav">
                <a href="/alugar" class="nav-button primary">Alugar um carro</a>
                <a href="/empresas" class="nav-button">Para empresas</a>
                <a href="/solucoes" class="nav-button">Soluções</a>
                <a href="/unidas" class="nav-button">A Unidas</a>
                <a href="/atendimento" class="nav-button">Atendimento</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container">
        <!-- Hero Section -->
        <div class="hero">
            <h2>Alugue seu carro ideal</h2>
            <p>Os melhores carros com os melhores preços</p>
        </div>

        <!-- Booking Form -->
        <div class="booking-form">
            <h3>Reserve agora</h3>
            <div class="space-y-4">
                <div class="form-group">
                    <label for="local">Local de retirada</label>
                    <div class="input-container">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <input id="local" placeholder="Digite o local">
                    </div>
                </div>

                <div class="grid-cols-2">
                    <div class="form-group">
                        <label for="data-inicio">Data início</label>
                        <div class="input-container">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                            </svg>
                            <input id="data-inicio" type="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data-fim">Data fim</label>
                        <div class="input-container">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                            </svg>
                            <input id="data-fim" type="date">
                        </div>
                    </div>
                </div>

                <button class="w-full">Buscar carros</button>
            </div>
        </div>

        <!-- Cars Grid -->
        <div class="cars-grid">
            <div class="car-card">
                <div class="car-image">
                    <svg class="car-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                        <circle cx="7" cy="17" r="2" />
                        <path d="M9 17h6" />
                        <circle cx="17" cy="17" r="2" />
                    </svg>
                </div>
                <h4 class="car-name">Chevrolet Onix</h4>
                <p class="car-details">Econômico • 5 lugares</p>
                <div class="car-footer">
                    <span class="car-price">R$ 80/dia</span>
                    <button class="btn-sm">Reservar</button>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <svg class="car-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                        <circle cx="7" cy="17" r="2" />
                        <path d="M9 17h6" />
                        <circle cx="17" cy="17" r="2" />
                    </svg>
                </div>
                <h4 class="car-name">Honda Civic</h4>
                <p class="car-details">Intermediário • 5 lugares</p>
                <div class="car-footer">
                    <span class="car-price">R$ 120/dia</span>
                    <button class="btn-sm">Reservar</button>
                </div>
            </div>

            <div class="car-card">
                <div class="car-image">
                    <svg class="car-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                        <circle cx="7" cy="17" r="2" />
                        <path d="M9 17h6" />
                        <circle cx="17" cy="17" r="2" />
                    </svg>
                </div>
                <h4 class="car-name">Toyota Corolla</h4>
                <p class="car-details">Executivo • 5 lugares</p>
                <div class="car-footer">
                    <span class="car-price">R$ 150/dia</span>
                    <button class="btn-sm">Reservar</button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <p>&copy; 2025 CarroFácil - Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>
