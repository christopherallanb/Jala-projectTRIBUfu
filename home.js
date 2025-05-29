
        document.addEventListener('DOMContentLoaded', function() {
            const reserveButtons = document.querySelectorAll('.btn-sm');
            reserveButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const carCard = this.closest('.car-card');
                    const carName = carCard.querySelector('.car-name').textContent;
                    alert(`Você reservou o ${carName}!`);
                });
            });
            
            const searchButton = document.querySelector('.w-full');
            searchButton.addEventListener('click', function() {
                const location = document.getElementById('local').value;
                const startDate = document.getElementById('data-inicio').value;
                const endDate = document.getElementById('data-fim').value;
                
                if (!location || !startDate || !endDate) {
                    alert('Por favor, preencha todos os campos do formulário.');
                } else {
                    alert(`Buscando carros em ${location} de ${startDate} até ${endDate}`);
                }
            });
        });
