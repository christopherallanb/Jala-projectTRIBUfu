<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Avançada - CarroFácil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/reserva.css">
</head>

<body>
    <main class="container">
        <div class="reservation-container">
            <h1>Reserva Avançada</h1>

            <!-- Seção de Seleção de Datas -->
            <div class="reservation-section">
                <h2><span class="icon">📅</span> Selecione as Datas</h2>
                <div class="date-selection">
                    <div class="date-input">
                        <label for="pickup-date">Data de Retirada:</label>
                        <input type="text" id="pickup-date" class="datepicker" placeholder="Selecione a data"
                            readonly>
                    </div>
                    <div class="date-input">
                        <label for="return-date">Data de Devolução:</label>
                        <input type="text" id="return-date" class="datepicker" placeholder="Selecione a data"
                            readonly>
                    </div>
                </div>
                <div class="duration-display">
                    <span id="days-count">0 dias</span>
                    <span id="total-price">Total: R$ 0,00</span>
                </div>
            </div>

            <!-- Seção de Extras -->
            <div class="reservation-section">
                <h2><span class="icon">➕</span> Adicionar Extras</h2>
                <div class="extras-options">
                    <label class="extra-item">
                        <input type="checkbox" id="extra-gps" class="extra-checkbox">
                        <span class="checkmark"></span>
                        <span class="extra-name">GPS</span>
                        <span class="extra-price">+ R$ 15/dia</span>
                    </label>
                    <label class="extra-item">
                        <input type="checkbox" id="extra-babyseat" class="extra-checkbox">
                        <span class="checkmark"></span>
                        <span class="extra-name">Cadeirinha Infantil</span>
                        <span class="extra-price">+ R$ 20/dia</span>
                    </label>
                </div>
            </div>

            <!-- Resumo da Reserva -->
            <div class="reservation-summary">
                <h2><span class="icon">📋</span> Resumo da Reserva</h2>
                <div class="summary-details">
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
                        <span id="summary-extras">Nenhum</span>
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

    <script src="js/flatpickr.min.js"></script>
    <script src="js/reserva.js"></script>
</body>

</html>
