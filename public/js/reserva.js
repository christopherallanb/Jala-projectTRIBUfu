document.addEventListener('DOMContentLoaded', function() {
    // Inicializa os datepickers
    flatpickr("#pickup-date", {
        dateFormat: "d/m/Y",
        minDate: "today",
        locale: "pt",
        onChange: function(selectedDates, dateStr, instance) {
            if (selectedDates.length > 0) {
                document.getElementById('return-date')._flatpickr.set('minDate', selectedDates[0]);
                calculateTotal();
            }
        }
    });

    flatpickr("#return-date", {
        dateFormat: "d/m/Y",
        locale: "pt",
        onChange: calculateTotal
    });

    // Configura os listeners para os extras
    document.querySelectorAll('.extra-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', calculateTotal);
    });

    // Função para calcular o total
    function calculateTotal() {
        const pickupDate = document.getElementById('pickup-date')._flatpickr.selectedDates[0];
        const returnDate = document.getElementById('return-date')._flatpickr.selectedDates[0];

        if (pickupDate && returnDate) {
            const diffTime = returnDate - pickupDate;
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            // Atualiza a contagem de dias
            document.getElementById('days-count').textContent = diffDays + ' dia' + (diffDays !== 1 ? 's' : '');

            // Preço base do veículo (substitua pelo valor real)
            const dailyRate = 80; // R$ 80/dia (exemplo)
            let total = dailyRate * diffDays;

            // Calcula extras
            let extras = [];
            document.querySelectorAll('.extra-checkbox:checked').forEach(extra => {
                const priceText = extra.parentElement.querySelector('.extra-price').textContent;
                const price = parseFloat(priceText.match(/[\d\.]+/)[0]);
                total += price * diffDays;
                extras.push(extra.parentElement.querySelector('.extra-name').textContent);
            });

            // Atualiza a UI
            document.getElementById('total-price').textContent = 'Total: R$ ' + total.toFixed(2);
            document.getElementById('summary-period').textContent =
                pickupDate.toLocaleDateString('pt-BR') + ' a ' + returnDate.toLocaleDateString('pt-BR');
            document.getElementById('summary-days').textContent = diffDays;
            document.getElementById('summary-extras').textContent =
                extras.length > 0 ? extras.join(', ') : 'Nenhum';
            document.getElementById('summary-total').textContent = 'R$ ' + total.toFixed(2);
        }
    }
});
