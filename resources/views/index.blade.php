<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Avançada - CarroFácil</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="{{ asset('js/home.js') }}"></script>
</head>

<body>
    <!-- Header -->
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

    <main class="container">
        <div class="reservation-container">
            <h1>Reserva Avançada</h1>

            <!-- Seção de Seleção de Datas -->
            <div class="reservation-section">
                <h2><i class="icon-calendar"></i> Selecione as Datas</h2>
                <div class="date-selection">
                    <div class="date-input">
                        <label for="pickup-date">Data de Retirada:</label>
                        <input type="text" id="pickup-date" class="datepicker" placeholder="Selecione a data">
                    </div>
                    <div class="date-input">
                        <label for="return-date">Data de Devolução:</label>
                        <input type="text" id="return-date" class="datepicker" placeholder="Selecione a data">
                    </div>
                </div>
                <div class="duration-display">
                    <span id="days-count">0 dias</span>
                    <span id="total-price">Total: R$ 0,00</span>
                </div>
            </div>

            <!-- Seção de Seleção de Veículo -->
            <div class="reservation-section">
                <h2><i class="icon-car"></i> Escolha seu Veículo</h2>
                <div class="vehicle-options">
                    <div class="vehicle-card selected">
                        <img src="https://via.placeholder.com/200x120" alt="Chevrolet Onix">
                        <h3>Chevrolet Onix</h3>
                        <p class="price">R$ 80/dia</p>
                        <p class="details">Econômico • 5 lugares</p>
                    </div>
                    <div class="vehicle-card">
                        <img src="https://via.placeholder.com/200x120" alt="Honda Civic">
                        <h3>Honda Civic</h3>
                        <p class="price">R$ 120/dia</p>
                        <p class="details">Intermediário • 5 lugares</p>
                    </div>
                    <div class="vehicle-card">
                        <img src="https://via.placeholder.com/200x120" alt="Toyota Corolla">
                        <h3>Toyota Corolla</h3>
                        <p class="price">R$ 150/dia</p>
                        <p class="details">Executivo • 5 lugares</p>
                    </div>
                </div>
            </div>

            <!-- Seção de Extras -->
            <div class="reservation-section">
                <h2><i class="icon-extra"></i> Adicionar Extras</h2>
                <div class="extras-options">
                    <div class="extra-item">
                        <input type="checkbox" id="extra-gps" class="extra-checkbox">
                        <label for="extra-gps">
                            <span class="extra-name">GPS</span>
                            <span class="extra-price">+ R$ 15/dia</span>
                        </label>
                    </div>
                    <div class="extra-item">
                        <input type="checkbox" id="extra-babyseat" class="extra-checkbox">
                        <label for="extra-babyseat">
                            <span class="extra-name">Cadeirinha Infantil</span>
                            <span class="extra-price">+ R$ 20/dia</span>
                        </label>
                    </div>
                    <div class="extra-item">
                        <input type="checkbox" id="extra-insurance" class="extra-checkbox">
                        <label for="extra-insurance">
                            <span class="extra-name">Seguro Completo</span>
                            <span class="extra-price">+ R$ 30/dia</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Resumo da Reserva -->
            <div class="reservation-summary">
                <h2><i class="icon-summary"></i> Resumo da Reserva</h2>
                <div class="summary-details">
                    <div class="summary-row">
                        <span>Veículo:</span>
                        <span id="summary-vehicle">Chevrolet Onix</span>
                    </div>
                    <div class="summary-row">
                        <span>Período:</span>
                        <span id="summary-period">-</span>
                    </div>
                    <div class="summary-row">
                        <span>Dias:</span>
                        <span id="summary-days">0</span>
                    </div>
                    <div class="summary-row extras-list">
                        <span>Extras:</span>
                        <span id="summary-extras">Nenhum extra selecionado</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total:</span>
                        <span id="summary-total">R$ 0,00</span>
                    </div>
                </div>
                <button class="reservation-button">Confirmar Reserva</button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <p>&copy; 2025 CarroFácil - Todos os direitos reservados</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>
    <script>
        // Inicialização do calendário
        flatpickr(".datepicker", {
            locale: "pt",
            dateFormat: "d/m/Y",
            minDate: "today",
            onChange: calculateTotal
        });

        // Seleção de veículo
        document.querySelectorAll('.vehicle-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.vehicle-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                calculateTotal();
            });
        });

        // Seleção de extras
        document.querySelectorAll('.extra-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', calculateTotal);
        });

        // Cálculo do valor total
        function calculateTotal() {
            const pickupDate = document.getElementById('pickup-date')._flatpickr.selectedDates[0];
            const returnDate = document.getElementById('return-date')._flatpickr.selectedDates[0];

            if (pickupDate && returnDate) {
                const diffTime = Math.abs(returnDate - pickupDate);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                document.getElementById('days-count').textContent = diffDays + ' dias';

                // Preço do veículo selecionado
                const selectedVehicle = document.querySelector('.vehicle-card.selected');
                const vehiclePrice = parseFloat(selectedVehicle.querySelector('.price').textContent.replace('R$ ', ''));

                // Cálculo dos extras
                let extrasPrice = 0;
                let extrasList = [];

                document.querySelectorAll('.extra-checkbox:checked').forEach(extra => {
                    const priceText = extra.nextElementSibling.querySelector('.extra-price').textContent;
                    const price = parseFloat(priceText.match(/[\d\.]+/)[0]);
                    extrasPrice += price * diffDays;
                    extrasList.push(extra.nextElementSibling.querySelector('.extra-name').textContent);
                });

                // Cálculo do total
                const totalPrice = (vehiclePrice * diffDays) + extrasPrice;

                // Atualização da UI
                document.getElementById('total-price').textContent = 'Total: R$ ' + totalPrice.toFixed(2);
                document.getElementById('summary-vehicle').textContent = selectedVehicle.querySelector('h3').textContent;
                document.getElementById('summary-period').textContent =
                    pickupDate.toLocaleDateString('pt-BR') + ' a ' + returnDate.toLocaleDateString('pt-BR');
                document.getElementById('summary-days').textContent = diffDays;
                document.getElementById('summary-extras').textContent =
                    extrasList.length > 0 ? extrasList.join(', ') : 'Nenhum extra selecionado';
                document.getElementById('summary-total').textContent = 'R$ ' + totalPrice.toFixed(2);
            }
        }
    </script>
</body>

</html>
