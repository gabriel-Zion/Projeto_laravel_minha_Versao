// 1. Efeito da Navbar no Scroll
(function() {
    const navbar = document.getElementById('navbar');
    function handleScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
    handleScroll();
    window.addEventListener('scroll', handleScroll);
})();

// 2. Lógica do Formulário de Contato (E-mail via AJAX)
document.addEventListener('DOMContentLoaded', function() {
    const reservaForm = document.getElementById('reservaForm');
    if (reservaForm) {
        reservaForm.addEventListener('submit', function(e) {
            e.preventDefault(); 
            const form = this;
            const btn = document.getElementById('btnEnviar');
            const msgDiv = document.getElementById('mensagemSucesso');
            const textoSucesso = document.getElementById('textoSucesso');
            btn.disabled = true;
            btn.innerText = 'Enviando...';
            const formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => {
                if (!response.ok) throw new Error('Erro na resposta do servidor');
                return response.json();
            })
            .then(data => {
                if (data.sucesso) {
                    if(msgDiv) {
                        msgDiv.style.display = 'flex'; 
                        textoSucesso.innerText = data.sucesso;
                    }
                    form.reset();
                    btn.innerText = 'Enviar Solicitação';
                    btn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('Ocorreu um erro ao enviar. Por favor, tente novamente.');
                btn.disabled = false;
                btn.innerText = 'Enviar Solicitação';
            });
        });
    }
});

// 3. Animações de Scroll
const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

document.querySelectorAll('.about, .rooms, .areas, .restaurant, .location, .atracoes, .contact').forEach(section => {
    section.style.opacity = '0';
    section.style.transform = 'translateY(30px)';
    section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    observer.observe(section);
});

// 4. Lógica do Carrossel de Acomodações
(function() {
    const track = document.getElementById('roomsTrack');
    const prevBtn = document.getElementById('roomsPrev');
    const nextBtn = document.getElementById('roomsNext');
    const dotsContainer = document.getElementById('roomsDots');
    const cards = document.querySelectorAll('.room-card');
    if(!track || cards.length === 0) return;
    let currentIndex = 0;

    function createDots() {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = '';
        cards.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('rooms-dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => { currentIndex = index; updateCarousel(); });
            dotsContainer.appendChild(dot);
        });
    }

    function updateCarousel() {
        const isDesktop = window.innerWidth > 992;
        const cardWidth = cards[0].getBoundingClientRect().width;
        const gap = parseInt(window.getComputedStyle(track).gap) || 0;
        const maxIndex = isDesktop ? cards.length - 3 : cards.length - 1;
        if (currentIndex > maxIndex) currentIndex = maxIndex;
        track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
        const dots = document.querySelectorAll('.rooms-dot');
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
            dot.style.display = (isDesktop && i > maxIndex) ? 'none' : 'inline-block';
        });
    }

    nextBtn.addEventListener('click', () => {
        const isDesktop = window.innerWidth > 992;
        const maxIndex = isDesktop ? cards.length - 3 : cards.length - 1;
        currentIndex = (currentIndex < maxIndex) ? currentIndex + 1 : 0;
        updateCarousel();
    });

    prevBtn.addEventListener('click', () => {
        const isDesktop = window.innerWidth > 992;
        const maxIndex = isDesktop ? cards.length - 3 : cards.length - 1;
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : maxIndex;
        updateCarousel();
    });

    createDots(); 
    window.addEventListener('resize', updateCarousel);
    setTimeout(updateCarousel, 200);
})();

// 5. FUNÇÃO DO WHATSAPP (FORA DE QUALQUER BLOCO - ESCOPO GLOBAL)
function enviarReservaWhatsApp() {
    const checkinRaw = document.getElementById('checkin-topo').value;
    const checkoutRaw = document.getElementById('checkout-topo').value;
    const adultos = document.getElementById('adulto-topo').value;
    const criancas = document.getElementById('crianca-topo').value;

    if (!checkinRaw || !checkoutRaw) {
        alert("Por favor, selecione as datas de Check-in e Check-out.");
        return;
    }

    // Formata a data de AAAA-MM-DD para DD/MM/AAAA
    const formatarData = (data) => data.split('-').reverse().join('/');
    const checkin = formatarData(checkinRaw);
    const checkout = formatarData(checkoutRaw);

    const telefone = "5546999406581"; 
    const mensagem = `Olá! Gostaria de consultar a disponibilidade para uma reserva no *Hotel Schneider*:%0A%0A` +
                    ` *Check-in:* ${checkin}%0A` +
                    ` *Check-out:* ${checkout}%0A` +
                    ` *Adultos:* ${adultos}%0A` +
                    ` *Crianças:* ${criancas}%0A%0A` +
                    `Como podemos prosseguir com a reserva?`;

    const url = `https://wa.me/${telefone}?text=${mensagem}`;
    window.open(url, '_blank');
}