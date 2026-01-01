
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Hotel Schneider | Sulina - PR | Tradição desde 1953</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    
    </head>
<body>
    <!-- Navigation -->
    <nav class="nav" id="navbar">
        <a href="#" class="nav-logo"><img src="img/logo.png"></a>
        <ul class="nav-links">
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#acomodacoes">Acomodações</a></li>
            <li><a href="#estrutura">Estrutura</a></li>
            <li><a href="#restaurante">Restaurante</a></li>
            <li><a href="#atracoes">Atrações</a></li>
            <li><a href="#localizacao">Contato</a></li>
        </ul>
        <a href="#contato" class="nav-cta">Reserve Agora</a>
        <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <ul class="mobile-menu-links">
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#acomodacoes">Acomodações</a></li>
                <li><a href="#estrutura">Estrutura</a></li>
                <li><a href="#restaurante">Restaurante</a></li>
                <li><a href="#atracoes">Atrações</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            <a href="#contato" class="mobile-menu-cta">Reserve Agora</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg-pattern"></div>
        <div class="hero-content">
            <span class="hero-badge">Desde 1953 • Sulina, PR</span>
            <h1 class="hero-title">Tradição e <span>acolhimento</span> no coração do Sudoeste</h1>
            <p class="hero-subtitle">Mais de 70 anos recebendo hóspedes com a hospitalidade da família Schneider, próximo às águas termais de Sulina.</p>
            <div class="hero-cta-group">
                <a href="https://wa.me/554632441123" class="btn-primary" target="_blank">Fazer Reserva</a>
                <a href="#sobre" class="btn-secondary">Conhecer o Hotel</a>
            </div>
        </div>
        <div class="hero-scroll">
            <div class="hero-scroll-line"></div>    
            <span>Role para explorar</span>
        </div>
        <div class="hero-image-overlay">
            <img src="img/fachada.png" alt="Fachada Hotel Schneider">
        </div>
    </section>
    

    <section class="booking-bar-container">
        <form action="#" class="booking-form">
            <div class="input-group">
                <label for="checkin">Check-in</label>
                <input type="date" id="checkin-topo" name="checkin" required>
            </div>

            <div class="input-group">
                <label for="checkoute">Check-out</label>
                <input type="date" id="checkout-topo" name="checkout" required>
            </div>

            <div class="input-group">
                <label for="guests">Adultos</label>
                <select id="adulto-topo" name="guests">
                    <option value="1" selected>1 Adulto</option>
                    <option value="2">2 Adultos</option>
                    <option value="3">3 Adultos</option>
                    <option value="4">4 Adultos</option>
                </select>
            </div>

            <div class="input-group">
                <label for="guests">Crianças</label>
                <select id="crianca-topo" name="guests">
                    <option value="1" selected>1 criança</option>
                    <option value="2">2 crianças</option>
                    <option value="3">3 crianças</option>
                    <option value="4">4 crianças</option>
                </select>
            </div>


            <div class="button-group">
                <button type="button" class="btn-booking" onclick="enviarReservaWhatsApp()">
                    Verificar Disponibilidade
                </button>
            </div>
        </form>
    </section>

    <!-- About Section -->
    <section class="about" id="sobre">
        <div class="about-image">
            <div class="about-image-main">
                <div id="carouselInterior" class="carousel slide" 
                    data-bs-ride="carousel" 
                    data-bs-interval="3000">

                    <div id="carouselInterior" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/interior/estacionamento.png" class="img-fluid" class="d-block w-100" style="height: 500px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/interior/corredor.png" class="img-fluid" lass="d-block w-100" style="height: 500px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/interior/area_externa.png" class="img-fluid" class="d-block w-100" style="height: 500px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/interior/mesa.png" class="img-fluid" class="d-block w-100" style="height: 500px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image-accent">
                <span class="about-image-accent-number">70+</span>
                <span class="about-image-accent-text">Anos de história</span>
            </div>
        </div>
        <div class="about-content">
            <span class="section-tag">Nossa História</span>
            <h2 class="section-title">Uma tradição <span>familiar</span> de hospitalidade</h2>
            <p class="about-text">
                Fundado em 1953 por Acelo e Wilma Schneider, imigrantes alemães vindos do Rio Grande do Sul, o Hotel Schneider nasceu da paixão por receber bem. O que começou como um casarão colonial com alpendre acolhedor, hoje é referência em hospedagem na região.
            </p>
            <p class="about-text">
                Em 1963, a família se estabeleceu definitivamente em Sulina, acompanhando o crescimento do turismo local impulsionado pelas famosas Thermas de Sulina. Trabalhamos em família, fazendo tudo com amor, carinho e muita dedicação.
            </p>
            <div class="about-features">
                <div class="about-feature">
                    <div class="about-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            <polyline points="9,22 9,12 15,12 15,22"/>
                        </svg>
                    </div>
                    <div class="about-feature-text">
                        <h4>Conforto</h4>
                        <p>Apartamentos equipados com ar-condicionado, TV e frigobar</p>
                    </div>
                </div>
                <div class="about-feature">
                    <div class="about-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <div class="about-feature-text">
                        <h4>Localização</h4>
                        <p>Próximo às Thermas de Sulina e atrações turísticas</p>
                    </div>
                </div>
                <div class="about-feature">
                    <div class="about-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>
                    <div class="about-feature-text">
                        <h4>Atendimento</h4>
                        <p>Hospitalidade familiar com toque pessoal</p>
                    </div>
                </div>
                <div class="about-feature">
                    <div class="about-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12,6 12,12 16,14"/>
                        </svg>
                    </div>
                    <div class="about-feature-text">
                        <h4>Tradição</h4>
                        <p>Mais de 70 anos de experiência em hospitalidade</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rooms" id="acomodacoes">
        <div class="rooms-grid">
            <section class="rooms" id="acomodacoes">
                <div class="rooms-header">
                    <span class="section-tag">Acomodações</span>
                    <h2 class="section-title">Seu <span>refúgio</span> de conforto</h2>
                    <p class="rooms-subtitle">Apartamentos cuidadosamente preparados para oferecer o descanso que você merece. Todas as diárias incluem café da manhã.</p>
                </div>
                <div class="rooms-grid">
                    <div class="rooms-carousel" id="roomsTrack">
                        <!-- Standard -->
                        <div class="room-card">
                            <div class="room-card-image">
                                <span><img src="img/standard.png " class="img-fluid" style="height: 220px; object-fit: cover;"></span>
                            </div>
                            <div class="room-card-content">
                                <h3 class="room-card-name">Standard</h3>
                                <p class="room-card-desc">Confortável opção com cama de casal box e solteiro box. Ideal para casais ou pequenas famílias.</p>
                                <div class="room-card-amenities">
                                    <span class="room-card-amenity">Cama Casal Box</span>
                                    <span class="room-card-amenity">Cama Solteiro Box</span>
                                    <span class="room-card-amenity">Ar-condicionado</span>
                                    <span class="room-card-amenity">TV</span>
                                    <span class="room-card-amenity">Wi-Fi</span>
                                </div>
                                <div class="room-card-footer">
                                    <span class="room-card-price">Consulte <span>/ diária</span></span>
                                    <a href="https://wa.me/554632441123" class="room-card-link" target="_blank">
                                        Reservar
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Premium -->
                        <div class="room-card">
                            <div class="room-card-image" style="background: linear-gradient(180deg, #B8934A, #96783D);">
                                <span><img src="img/premium.png" class="img-fluid" style="height: 220px; object-fit: cover;"></span>
                            </div>
                            <div class="room-card-content">
                                <h3 class="room-card-name">Premium</h3>
                                <p class="room-card-desc">Aconchegante suíte com cama de casal box, perfeita para momentos especiais a dois.</p>
                                <div class="room-card-amenities">
                                    <span class="room-card-amenity">Cama Casal Box</span>
                                    <span class="room-card-amenity">Ar Split</span>
                                    <span class="room-card-amenity">Frigobar</span>
                                    <span class="room-card-amenity">TV</span>
                                    <span class="room-card-amenity">Wi-Fi</span>
                                </div>
                                <div class="room-card-footer">
                                    <span class="room-card-price">Consulte <span>/ diária</span></span>
                                    <a href="https://wa.me/554632441123" class="room-card-link" target="_blank">
                                        Reservar
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Master I -->
                        <div class="room-card">
                            <div class="room-card-image" style="background: linear-gradient(180deg, #3D6B5A, #2C4A3E);">
                                <span><img src="img/masterI.png" class="img-fluid" style="object-fit: cover;"></span>
                            </div>
                            <div class="room-card-content">
                                <h3 class="room-card-name">Master I</h3>
                                <p class="room-card-desc">Espaçoso apartamento com cama de casal e 1 cama de solteiro box. Perfeito para até 3 pessoas.</p>
                                <div class="room-card-amenities">
                                    <span class="room-card-amenity">Cama Casal</span>
                                    <span class="room-card-amenity">1 Solteiro Box</span>
                                    <span class="room-card-amenity">Ar Split</span>
                                    <span class="room-card-amenity">Frigobar</span>
                                    <span class="room-card-amenity">TV a Cabo</span>
                                    <span class="room-card-amenity">Wi-Fi</span>
                                </div>
                                <div class="room-card-footer">
                                    <span class="room-card-price">Consulte <span>/ diária</span></span>
                                    <a href="https://wa.me/554632441123" class="room-card-link" target="_blank">
                                        Reservar
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Master II -->
                        <div class="room-card">
                            <div class="room-card-image" style="background: linear-gradient(180deg, #4A7A68, #3D6B5A);">
                                <span><img src="img/masterII.png" class="img-fluid" style="height: 220px; object-fit: cover;"></span>
                            </div>
                            <div class="room-card-content">
                                <h3 class="room-card-name">Master II</h3>
                                <p class="room-card-desc">Amplo apartamento com cama de casal e 2 camas de solteiro box. Ideal para famílias de até 4 pessoas.</p>
                                <div class="room-card-amenities">
                                    <span class="room-card-amenity">Cama Casal</span>
                                    <span class="room-card-amenity">2 Solteiro Box</span>
                                    <span class="room-card-amenity">Ar Split</span>
                                    <span class="room-card-amenity">Frigobar</span>
                                    <span class="room-card-amenity">TV</span>
                                    <span class="room-card-amenity">Wi-Fi</span>
                                </div>
                                <div class="room-card-footer">
                                    <span class="room-card-price">Consulte <span>/ diária</span></span>
                                    <a href="https://wa.me/554632441123" class="room-card-link" target="_blank">
                                        Reservar
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Master III -->
                        <div class="room-card">
                            <div class="room-card-image" style="background: linear-gradient(180deg, #C17F59, #A66B48);">
                                <span><img src="img/masterIII.png" class="img-fluid" style="height: 220px; object-fit: cover;"></span>
                            </div>
                            <div class="room-card-content">
                                <h3 class="room-card-name">Master III</h3>
                                <p class="room-card-desc">Nossa melhor opção para famílias grandes. Cama de casal e múltiplas camas de solteiro box com Smart TV.</p>
                                <div class="room-card-amenities">
                                    <span class="room-card-amenity">Cama Casal</span>
                                    <span class="room-card-amenity">Solteiros Box</span>
                                    <span class="room-card-amenity">Ar Split</span>
                                    <span class="room-card-amenity">Frigobar</span>
                                    <span class="room-card-amenity">Smart TV a Cabo</span>
                                    <span class="room-card-amenity">Wi-Fi</span>
                                </div>
                                <div class="room-card-footer">
                                    <span class="room-card-price">Consulte <span>/ diária</span></span>
                                    <a href="https://wa.me/554632441123" class="room-card-link" target="_blank">
                                        Reservar
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Navigation -->
                <div class="rooms-navigation">
                    <button class="rooms-nav-btn" id="roomsPrev" aria-label="Anterior">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 12H5M12 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <div class="rooms-dots" id="roomsDots">
                        <button class="rooms-dot active" data-index="0" aria-label="Slide 1"></button>
                        <button class="rooms-dot" data-index="1" aria-label="Slide 2"></button>
                        <button class="rooms-dot" data-index="2" aria-label="Slide 3"></button>
                    </div>
                    <button class="rooms-nav-btn" id="roomsNext" aria-label="Próximo">
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Areas Section -->
    <section class="areas" id="estrutura">
        <div class="areas-container">
            <div class="areas-header">
                <span class="section-tag">Estrutura</span>
                <h2 class="section-title">Áreas <span>comuns</span> e lazer</h2>
                <p class="areas-subtitle">Espaços pensados para seu conforto e relaxamento durante toda a estadia.</p>
            </div>
            <div class="areas-grid">
                <div class="area-card">
                    <div class="area-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            <polyline points="9,22 9,12 15,12 15,22"/>
                        </svg>
                    </div>
                    <h4>Recepção</h4>
                    <p>Atendimento cordial e acolhedor</p>
                </div>
                <div class="area-card">
                    <div class="area-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/>
                            <line x1="6" y1="1" x2="6" y2="4"/>
                            <line x1="10" y1="1" x2="10" y2="4"/>
                            <line x1="14" y1="1" x2="14" y2="4"/>
                        </svg>
                    </div>
                    <h4>Café da Manhã</h4>
                    <p>Incluso em todas as diárias</p>
                </div>
                <div class="area-card">
                    <div class="area-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                    <h4>Área Externa</h4>
                    <p>Espaço ao ar livre para relaxar</p>
                </div>
                <div class="area-card">
                    <div class="area-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/>
                        </svg>
                    </div>
                    <h4>Estacionamento</h4>
                    <p>Vagas para hóspedes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Restaurant Section -->
    <section class="restaurant-split" id="restaurante">
        <div class="restaurant-images">
            
            <div class="restaurant-image-box pos-top-left">
                <div id="carouselPratos" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/prato_1.png" class="d-block w-100" alt="Prato 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/prato_2.png" class="d-block w-100" alt="Prato 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/prato_3.png" class="d-block w-100" alt="Prato 3">
                        </div>
                    </div>
                </div>
            </div>

            <div class="restaurant-image-box pos-bottom-right">
                <img src="img/mesas.png" class="img-fluid" alt="Nossas Mesas">
            </div>
        </div>

        <div class="restaurant-content-side">
            <div class="content-container">
                <span class="section-tag">Restaurante</span>
                <h2 class="section-title">Sabores da <span>tradição</span> regional</h2>
                <p class="about-text">
                    Nosso restaurante oferece o que há de melhor na comida típica regional, com raízes na culinária alemã e italiana trazida pelos colonizadores do Sudoeste paranaense.
                </p>
                <p class="about-text">
                    Pratos preparados com ingredientes frescos e receitas que passam de geração em geração, servidos com o carinho e dedicação que são marca da família Schneider.
                </p>
                <div class="restaurant-highlights">
                    <div class="restaurant-highlight">
                        <span class="restaurant-highlight-number">100%</span>
                        <span class="restaurant-highlight-text">Caseiro</span>
                    </div>
                    <div class="restaurant-highlight">
                        <span class="restaurant-highlight-number">70+</span>
                        <span class="restaurant-highlight-text">Anos de tradição</span>
                    </div>
                    <div class="restaurant-highlight">
                        <span class="restaurant-highlight-number">∞</span>
                        <span class="restaurant-highlight-text">Amor na receita</span>
                    </div>
                </div>
                </div>
        </div>
    </section>

    <!-- Atrações Section -->
    <section class="atracoes" id="atracoes">
        <div class="atracoes-container">
            <div class="atracoes-header">
                <span class="section-tag">Conheça a Região</span>
                <h2 class="section-title">Atrações <span>Turísticas</span></h2>
                <p class="atracoes-subtitle">Sulina oferece belezas naturais e experiências únicas. Confira os principais pontos turísticos da região.</p>
            </div>
            <div class="atracoes-grid">
                <div class="atracao-card atracao-card-large">
                    <div class="thermas-logo-container" style="background: linear-gradient(135deg, #3D6B5A, #2C4A3E);">
                        <img src="img/termas.png" class="thermas-logo">
                    </div>
                    <div class="atracao-card-content">
                        <h3>Thermas de Sulina</h3>
                        <p>Complexo de águas termais com 7 piscinas aquecidas naturalmente a 32°C. Oferece também tirolesa, arvorismo, escalada e passeios de caiaque pelo Rio Iguaçu.</p>
                        <div class="atracao-card-tag">Atração Principal</div>
                        <a href="https://valesdoiguacu.com.br/atrativo/13/thermas-de-sulina" style="text-decoration: none; color: inherit;" target="_blank">
                            <div class="atracao-card-tag">Visitar Atração</div>
                        </a>
                    </div>
                </div>
                <div class="atracao-card">
                    <div class="atracao-card-image" style="background: linear-gradient(135deg, #4A7A68, #3D6B5A);">
                        <img src="img/cachoeira.png" class="atracao-img" style="object-fit: cover;">
                    </div>
                    <div class="atracao-card-content">
                        <h3>Rota das Cachoeiras</h3>
                        <p>Passeio de barco pelo Rio Iguaçu com paradas em cachoeiras deslumbrantes. São 4 quedas de água no Rio Iguaçu e uma no Rio Capivara.</p>
                    </div>
                </div>
                <div class="atracao-card">
                    <div class="atracao-card-image" style="background: linear-gradient(135deg, #8B8678, #6B6560);">
                        <img src="img/igreja.png" class="atracao-img posicao-igreja" alt="Igreja de Pedra">
                    </div>
                    <div class="atracao-card-content">
                        <h3>Igreja de Pedra</h3>
                        <p>A Igreja Nossa Senhora dos Navegantes, construída inteiramente com pedras e concreto, fica ao lado das Thermas.</p>
                    </div>
                </div>
                <div class="atracao-card">
                    <div class="atracao-card-image" style="background: linear-gradient(135deg, #C17F59, #A66B48);">
                        <img src="img/praca.png" class="atracao-img" style="height: object-fit: cover;">
                    </div>
                    <div class="atracao-card-content">
                        <h3>Praça Municipal</h3>
                        <p>Considerada uma das mais belas da região, com decorações especiais na Páscoa e Natal. Ideal para um chimarrão no fim de tarde.</p>
                    </div>
                </div>
                <div class="atracao-card">
                    <div class="atracao-card-image" style="background: linear-gradient(135deg, #5A8FAD, #3D6B8A);">
                        <img src="img/rio_iguacu.png" class="img-fluid" style="object-fit: cover;">
                    </div>
                    <div class="atracao-card-content">
                        <h3>Rio Iguaçu</h3>
                        <p>Passeios de caiaque, pesca esportiva de lambari e contemplação da natureza às margens do majestoso Rio Iguaçu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location" id="localizacao">
        <div class="location-container">
            <div class="location-content">
                <span class="section-tag">Localização</span>
                <h2 class="section-title">No coração de <span>Sulina</span></h2>
                <p class="about-text">
                    Estrategicamente localizado no centro de Sulina, o Hotel Schneider oferece fácil acesso às principais atrações turísticas da região, incluindo as famosas Thermas de Sulina.
                </p>
                <div class="location-details">
                    <div class="location-item">
                        <div class="location-item-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="location-item-text">
                            <h4>Endereço</h4>
                            <p>Av. XV de Novembro, 596<br>Centro - Sulina, PR<br>CEP: 85565-000</p>
                        </div>
                    </div>
                    <div class="location-item">
                        <div class="location-item-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                            </svg>
                        </div>
                        <div class="location-item-text">
                            <h4>Telefone</h4>
                            <p><a href="tel:+554632441123">(46) 3244-1123</a></p>
                        </div>
                    </div>
                    <div class="location-item">
                        <div class="location-item-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <div class="location-item-text">
                            <h4>Atrações Próximas</h4>
                            <p>Thermas de Sulina • Rota das Cachoeiras<br>Igreja de Pedra • Praça Municipal</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-map">
                <div class="location-map-placeholder">
                    <iframe src="http://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.111624942906!2d-52.72935898821307!3d-25.700727943565795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f02735e64bd3bf%3A0x72f42d6fa44bf3c!2sHotel%20Schneider!5e0!3m2!1spt-BR!2sbr!4v1766164896669!5m2!1spt-BR!2sbr" width="800" height="600" style="border: 10;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contato">
        <span class="section-tag">Reservas</span>
        <h2 class="section-title">Faça sua <span>reserva</span></h2>
        <p class="about-text" style="max-width: 600px; margin: 0 auto;">
            Entre em contato conosco para verificar disponibilidade e garantir sua estadia no Hotel Schneider. Estamos prontos para recebê-lo!
        </p>
        <form action="{{ route('enviar.reserva') }}" method="POST" class="contact-form" id="reservaForm">
            @csrf
            <!-- Datas -->
            <div class="form-group">
                <label for="checkin">Check-in</label>
                <input type="date" id="checkin" name="checkin" required>
            </div>
            <div class="form-group">
                <label for="checkout">Check-out</label>
                <input type="date" id="checkout" name="checkout" required>
            </div>
            
            <!-- Acomodações -->
            <div class="form-group full">
                <label>Acomodações</label>
                <div class="acomodacoes-grid">
                    <div class="acomodacao-item">
                        <select name="qtde_standard" id="qtde_standard">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <div class="acomodacao-info">
                            <div class="acomodacao-nome">Standard</div>
                            <div class="acomodacao-desc">Casal + Solteiro Box</div>
                        </div>
                        <div class="acomodacao-icon">
                            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
                        </div>
                    </div>
                    <div class="acomodacao-item">
                        <select name="qtde_premium" id="qtde_premium">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <div class="acomodacao-info">
                            <div class="acomodacao-nome">Premium</div>
                            <div class="acomodacao-desc">Casal Box + Frigobar</div>
                        </div>
                        <div class="acomodacao-icon">
                            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
                        </div>
                    </div>
                    <div class="acomodacao-item">
                        <select name="qtde_master1" id="qtde_master1">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <div class="acomodacao-info">
                            <div class="acomodacao-nome">Master I</div>
                            <div class="acomodacao-desc">Casal + 1 Solteiro + TV Cabo</div>
                        </div>
                        <div class="acomodacao-icon">
                            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
                        </div>
                    </div>
                    <div class="acomodacao-item">
                        <select name="qtde_master2" id="qtde_master2">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <div class="acomodacao-info">
                            <div class="acomodacao-nome">Master II</div>
                            <div class="acomodacao-desc">Casal + 2 Solteiros Box</div>
                        </div>
                        <div class="acomodacao-icon">
                            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
                        </div>
                    </div>
                    <div class="acomodacao-item">
                        <select name="qtde_master3" id="qtde_master3">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <div class="acomodacao-info">
                            <div class="acomodacao-nome">Master III</div>
                            <div class="acomodacao-desc">Casal + Solteiros + Smart TV</div>
                        </div>
                        <div class="acomodacao-icon">
                            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dados pessoais -->
            <div class="form-group full">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group full">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco">
            </div>
            <div class="form-group">
                <label for="municipio">Município / Estado</label>
                <input type="text" id="municipio" name="municipio">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="form-group full">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group full">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" placeholder="Conte-nos sobre suas necessidades especiais, preferências ou dúvidas..."></textarea>
            </div>

                <button type="submit" class="btn-primary" id="btnEnviar">Enviar Solicitação</button>
            
            </div>
        </form>
        <div id="mensagemSucesso" style="display: none; justify-content: center; width: 100%; margin-top: 20px;">
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 5px; text-align: center; width: 100%;">
                <span id="textoSucesso"></span>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <div class="footer-logo"><img src="img/logo.png"></span></div>
                <p class="footer-desc">
                    Há mais de 70 anos recebendo hóspedes com a hospitalidade e o carinho da família Schneider. Tradição alemã no coração do Sudoeste paranaense.
                </p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                    </a>
                    <a href="#" aria-label="Instagram">
                        <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="https://wa.me/554632441123" aria-label="WhatsApp" target="_blank">
                        <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                </div>
            </div>
            <div class="footer-column">
                <h4>Navegação</h4>
                <ul class="footer-links">
                    <li><a href="#sobre">Sobre nós</a></li>
                    <li><a href="#acomodacoes">Acomodações</a></li>
                    <li><a href="#estrutura">Estrutura</a></li>
                    <li><a href="#restaurante">Restaurante</a></li>
                    <li><a href="#atracoes">Atrações</a></li>
                    <li><a href="#localizacao">Contato</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Atrações</h4>
                <ul class="footer-links">
                    <li><a href="#atracoes">Thermas de Sulina</a></li>
                    <li><a href="#atracoes">Rota das Cachoeiras</a></li>
                    <li><a href="#atracoes">Igreja de Pedra</a></li>
                    <li><a href="#atracoes">Praça Municipal</a></li>
                    <li><a href="#atracoes">Rio Iguaçu</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Contato</h4>
                <ul class="footer-links">
                    <li><a href="tel:+554632441123">(46) 3244-1123</a></li>
                    <li><a href="https://wa.me/554632441123">WhatsApp</a></li>
                    <li><a href="/cdn-cgi/l/email-protection#4d2e2223392c39220d3e2e2523282429283f2522392821632e2220632f3f">E-mail</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Hotel Schneider. Todos os direitos reservados.</p>
            <p>Sulina, PR - Desde 1953</p>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/554632441123" class="whatsapp-float" target="_blank" aria-label="Fale conosco pelo WhatsApp">
        <span class="whatsapp-float-tooltip">Fale conosco!</span>
        <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>