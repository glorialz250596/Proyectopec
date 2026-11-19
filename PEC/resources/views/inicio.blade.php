<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuidemos al planeta - Reforestación</title>
    
    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #fbf5f0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #2c2c2c;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
            padding: 25px 40px 60px;
        }

        /* Hojas decorativas en el fondo */
        .bg-leaf {
            position: fixed;
            pointer-events: none;
            z-index: 0;
            opacity: 0.45;
            fill: #f3d5c5;
        }

        .leaf-bottom-left {
            bottom: -20px;
            left: -20px;
            width: 240px;
            transform: rotate(15deg);
        }

        .leaf-middle-center {
            top: 22%;
            left: 41%;
            width: 110px;
            transform: rotate(25deg);
        }

        .leaf-bottom-right {
            bottom: -10px;
            right: -10px;
            width: 110px;
            transform: rotate(-10deg);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        /* Barra de navegación fija y estilizada */
        header {
            display: flex;
            justify-content: center;
            margin-bottom: 45px;
            position: sticky;
            top: 15px;
            z-index: 100;
        }

        nav {
            background-color: rgba(230, 230, 230, 0.92);
            backdrop-filter: blur(8px);
            padding: 15px 45px;
            border-radius: 50px;
            width: 92%;
            max-width: 1050px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-between;
            gap: 20px;
            align-items: center;
            flex-wrap: wrap;
        }

        nav a {
            text-decoration: none;
            color: #1f1f1f;
            font-size: 1.02rem;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            background-color: #9e3b76;
            color: #ffffff;
        }

        /* --- SECCIÓN 1: INICIO (HERO) --- */
        .hero-section {
            display: grid;
            grid-template-columns: 1fr 1.05fr;
            gap: 45px;
            align-items: center;
            margin-bottom: 85px;
            scroll-margin-top: 100px;
        }

        .left-column {
            padding-left: 15px;
        }

        .author-name {
            color: #9e3b76;
            font-size: 1.65rem;
            font-weight: 800;
            line-height: 1.2;
            text-transform: uppercase;
            margin-bottom: 45px;
            letter-spacing: 0.5px;
        }

        .main-title {
            color: #b88b72;
            font-family: 'Nunito', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 14px;
            line-height: 1.1;
        }

        .description {
            font-size: 1.08rem;
            line-height: 1.6;
            color: #222222;
            text-align: justify;
            max-width: 480px;
            margin-bottom: 25px;
        }

        .btn-cta {
            display: inline-block;
            background-color: #9e3b76;
            color: #fff;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.98rem;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn-cta:hover {
            background-color: #822e60;
            transform: translateY(-2px);
        }

        /* Collage de fotos */
        .right-column {
            background-color: #d6f1e1;
            padding: 25px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            gap: 22px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.04);
        }

        .gallery-top {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .gallery-bottom {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 0 10px;
        }

        .gallery-item {
            width: 100%;
            height: 195px;
            overflow: hidden;
            background-color: #c2e2cf;
            border-radius: 8px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.06);
        }

        .arch-shape {
            border-radius: 100px 100px 8px 8px;
        }

        /* --- ESTILOS GENERALES DE SECCIONES --- */
        .section-block {
            margin-bottom: 85px;
            scroll-margin-top: 100px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-tag {
            display: inline-block;
            background-color: #d6f1e1;
            color: #266b46;
            font-weight: 700;
            font-size: 0.85rem;
            padding: 5px 15px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .section-title {
            font-family: 'Nunito', sans-serif;
            font-size: 2.3rem;
            font-weight: 800;
            color: #b88b72;
        }

        /* --- SECCIÓN 2: INTRODUCCIÓN --- */
        .intro-box {
            background-color: #ffffff;
            border-radius: 24px;
            padding: 40px;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 35px;
            align-items: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            border: 1px solid #f0e4dc;
        }

        .intro-text h3 {
            color: #9e3b76;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .intro-text p {
            line-height: 1.7;
            color: #3a3a3a;
            margin-bottom: 15px;
            text-align: justify;
        }

        .intro-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .stat-card {
            background-color: #d6f1e1;
            padding: 22px;
            border-radius: 18px;
            text-align: center;
        }

        .stat-card span {
            display: block;
            font-family: 'Nunito', sans-serif;
            font-size: 2rem;
            font-weight: 800;
            color: #266b46;
        }

        .stat-card small {
            font-size: 0.9rem;
            font-weight: 600;
            color: #2c2c2c;
        }

        /* --- SECCIÓN 3: BENEFICIOS --- */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .benefit-card {
            background-color: #ffffff;
            padding: 28px 22px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.03);
            border-bottom: 4px solid #b88b72;
            transition: transform 0.3s ease;
        }

        .benefit-card:hover {
            transform: translateY(-6px);
        }

        .benefit-icon {
            width: 55px;
            height: 55px;
            background-color: #fbf5f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            font-size: 1.6rem;
        }

        .benefit-card h3 {
            color: #9e3b76;
            font-size: 1.15rem;
            margin-bottom: 10px;
        }

        .benefit-card p {
            font-size: 0.95rem;
            line-height: 1.5;
            color: #4a4a4a;
        }

        /* --- SECCIÓN 4: ESPECIES --- */
        .species-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .species-card {
            background-color: #ffffff;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.04);
            transition: transform 0.3s ease;
        }

        .species-card:hover {
            transform: translateY(-6px);
        }

        .species-img {
            height: 210px;
            width: 100%;
            overflow: hidden;
        }

        .species-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .species-body {
            padding: 24px;
        }

        .species-badge {
            background-color: #fbf5f0;
            color: #b88b72;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 8px;
        }

        .species-body h3 {
            color: #9e3b76;
            font-size: 1.35rem;
            margin-bottom: 4px;
        }

        .species-scientific {
            font-style: italic;
            font-size: 0.88rem;
            color: #777;
            margin-bottom: 12px;
            display: block;
        }

        .species-body p {
            font-size: 0.95rem;
            line-height: 1.55;
            color: #333;
        }

        /* --- SECCIÓN 5: CÓMO PLANTAR --- */
        .plant-container {
            background-color: #d6f1e1;
            border-radius: 26px;
            padding: 45px;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 25px;
        }

        .step-card {
            background-color: #ffffff;
            padding: 25px 20px;
            border-radius: 18px;
            position: relative;
        }

        .step-number {
            background-color: #9e3b76;
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .step-card h4 {
            color: #266b46;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .step-card p {
            font-size: 0.93rem;
            line-height: 1.5;
            color: #333;
        }

        /* --- SECCIÓN 6: ACERCA DE (FOOTER) --- */
        .about-card {
            background-color: #ffffff;
            border-radius: 22px;
            padding: 35px 40px;
            text-align: center;
            border: 2px dashed #d6c3b8;
            scroll-margin-top: 100px;
        }

        .about-card h3 {
            color: #9e3b76;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .about-card p {
            max-width: 700px;
            margin: 0 auto 15px;
            line-height: 1.6;
            color: #444;
        }

        .author-badge {
            display: inline-block;
            background-color: #fbf5f0;
            color: #9e3b76;
            font-weight: 800;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 0.95rem;
        }

        /* --- RESPONSIVO --- */
        @media (max-width: 960px) {
            .hero-section, .intro-box {
                grid-template-columns: 1fr;
            }
            .benefits-grid, .steps-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .species-grid {
                grid-template-columns: 1fr;
            }
            nav ul {
                justify-content: center;
                gap: 10px;
            }
        }

        @media (max-width: 600px) {
            body {
                padding: 15px 20px 40px;
            }
            .benefits-grid, .steps-grid, .gallery-top, .gallery-bottom, .intro-stats {
                grid-template-columns: 1fr;
            }
            .main-title {
                font-size: 2.3rem;
            }
            .plant-container, .intro-box {
                padding: 25px;
            }
        }
    </style>
</head>
<body>

    <!-- Hojas decorativas del fondo -->
    <svg class="bg-leaf leaf-bottom-left" viewBox="0 0 100 160">
        <path d="M50,155 Q50,80 50,10 M50,130 Q20,120 15,95 Q35,105 50,125 M50,130 Q80,120 85,95 Q65,105 50,125 M50,100 Q20,90 15,65 Q35,75 50,95 M50,100 Q80,90 85,65 Q65,75 50,95 M50,70 Q25,60 20,35 Q38,45 50,65 M50,70 Q75,60 80,35 Q62,45 50,65 M50,40 Q35,25 50,5 Q65,25 50,40" stroke="#f3d5c5" stroke-width="3" stroke-linecap="round"/>
    </svg>

    <svg class="bg-leaf leaf-middle-center" viewBox="0 0 100 160">
        <path d="M50,155 Q50,80 50,10 M50,130 Q20,120 15,95 Q35,105 50,125 M50,130 Q80,120 85,95 Q65,105 50,125 M50,100 Q20,90 15,65 Q35,75 50,95 M50,100 Q80,90 85,65 Q65,75 50,95 M50,70 Q25,60 20,35 Q38,45 50,65 M50,70 Q75,60 80,35 Q62,45 50,65 M50,40 Q35,25 50,5 Q65,25 50,40" stroke="#f3d5c5" stroke-width="3" stroke-linecap="round"/>
    </svg>

    <svg class="bg-leaf leaf-bottom-right" viewBox="0 0 100 160">
        <path d="M50,155 Q50,80 50,10 M50,130 Q20,120 15,95 Q35,105 50,125 M50,130 Q80,120 85,95 Q65,105 50,125 M50,100 Q20,90 15,65 Q35,75 50,95 M50,100 Q80,90 85,65 Q65,75 50,95 M50,70 Q25,60 20,35 Q38,45 50,65 M50,70 Q75,60 80,35 Q62,45 50,65 M50,40 Q35,25 50,5 Q65,25 50,40" stroke="#f3d5c5" stroke-width="3" stroke-linecap="round"/>
    </svg>

    <div class="container">
        <!-- Barra de navegación con enlaces a cada sección -->
        <header>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#introduccion">Introducción</a></li>
                    <li><a href="#beneficios">Beneficios</a></li>
                    <li><a href="#especies">Especies</a></li>
                    <li><a href="#plantar">Plantar</a></li>
                    <li><a href="#acerca-de">Acerca de</a></li>
                </ul>
            </nav>
        </header>

        <!-- 1. SECCIÓN INICIO -->
        <section id="inicio" class="hero-section">
            <div class="left-column">
                <h2 class="author-name">LUNA GONZÁLEZ GLORIA<br>SARAHI</h2>
                
                <h1 class="main-title">Cuidemos al planeta</h1>
                <p class="description">
                    La reforestación o siembra de árboles, es un conjunto de actividades que comprende la planeación, la operación, el control y la supervisión de todos los procesos involucrados en la plantación de árboles.
                </p>
                <a href="#introduccion" class="btn-cta">Explorar información ↓</a>
            </div>

            <div class="right-column">
                <div class="gallery-top">
                    <div class="gallery-item arch-shape">
                        <img src="https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&w=500&q=80" alt="Planta creciendo en tierra">
                    </div>
                    <div class="gallery-item arch-shape">
                        <img src="https://images.unsplash.com/photo-1591857177580-dc82b9ac4e1e?auto=format&fit=crop&w=500&q=80" alt="Persona sosteniendo plántulas">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=500&q=80" alt="Vivero de árboles jóvenes">
                    </div>
                </div>

                <div class="gallery-bottom">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1511497584788-876760111969?auto=format&fit=crop&w=600&q=80" alt="Bosque reforestado">
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=600&q=80" alt="Manos sembrando un árbol en la tierra">
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. SECCIÓN INTRODUCCIÓN -->
        <section id="introduccion" class="section-block">
            <div class="section-header">
                <span class="section-tag">Contexto Ambiental</span>
                <h2 class="section-title">Introducción a la Reforestación</h2>
            </div>

            <div class="intro-box">
                <div class="intro-text">
                    <h3>¿Por qué es urgente reforestar?</h3>
                    <p>
                        La pérdida acelerada de bosques y selvas a causa de la tala inmoderada, los incendios forestales y el crecimiento urbano ha puesto en riesgo el equilibrio ecológico de nuestro planeta.
                    </p>
                    <p>
                        Reforestar no significa simplemente sembrar cualquier árbol; implica <strong>restaurar ecosistemas completos</strong> utilizando especies nativas adecuadas para el clima y tipo de suelo, asegurando su supervivencia y el regreso de la fauna local.
                    </p>
                </div>

                <div class="intro-stats">
                    <div class="stat-card">
                        <span>22 kg</span>
                        <small>de CO₂ absorbe un árbol adulto al año</small>
                    </div>
                    <div class="stat-card">
                        <span>80%</span>
                        <small>de la biodiversidad terrestre vive en bosques</small>
                    </div>
                    <div class="stat-card">
                        <span>-4 °C</span>
                        <small>reduce la temperatura en zonas arboladas</small>
                    </div>
                    <div class="stat-card">
                        <span>100%</span>
                        <small>vital para la recarga de mantos acuíferos</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SECCIÓN BENEFICIOS -->
        <section id="beneficios" class="section-block">
            <div class="section-header">
                <span class="section-tag">Impacto Positivo</span>
                <h2 class="section-title">Beneficios de Plantar Árboles</h2>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">🌬️</div>
                    <h3>Aire más limpio</h3>
                    <p>Filtran partículas contaminantes, producen oxígeno y capturan gases de efecto invernadero.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">💧</div>
                    <h3>Ciclo del agua</h3>
                    <p>Sus raíces evitan la erosión del suelo y permiten que el agua de lluvia se filtre al subsuelo.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">🦜</div>
                    <h3>Refugio de fauna</h3>
                    <p>Brindan hogar, alimento y protección a aves, insectos polinizadores y pequeños mamíferos.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">🌡️</div>
                    <h3>Regulación térmica</h3>
                    <p>Generan sombra natural y humedad ambiental, combatiendo las islas de calor en las ciudades.</p>
                </div>
            </div>
        </section>

        <!-- 4. SECCIÓN ESPECIES -->
        <section id="especies" class="section-block">
            <div class="section-header">
                <span class="section-tag">Flora Recomendada</span>
                <h2 class="section-title">Especies Ideales para Reforestar</h2>
            </div>

            <div class="species-grid">
                <!-- Especie 1 -->
                <article class="species-card">
                    <div class="species-img">
                        <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=600&q=80" alt="Encino">
                    </div>
                    <div class="species-body">
                        <span class="species-badge">Clima Templado</span>
                        <h3>Encino / Roble</h3>
                        <span class="species-scientific">Quercus rugosa</span>
                        <p>Árbol muy resistente y longevo. Sus raíces profundas protegen los suelos de montaña y sus bellotas alimentan a diversas especies silvestres.</p>
                    </div>
                </article>

                <!-- Especie 2 -->
                <article class="species-card">
                    <div class="species-img">
                        <img src="https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?auto=format&fit=crop&w=600&q=80" alt="Pino">
                    </div>
                    <div class="species-body">
                        <span class="species-badge">Zonas Altas</span>
                        <h3>Pino</h3>
                        <span class="species-scientific">Pinus montezumae</span>
                        <p>De rápido crecimiento y gran capacidad de adaptación. Es fundamental en proyectos de recuperación forestal y captura de carbono.</p>
                    </div>
                </article>

                <!-- Especie 3 -->
                <article class="species-card">
                    <div class="species-img">
                        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=600&q=80" alt="Ahuehuete">
                    </div>
                    <div class="species-body">
                        <span class="species-badge">Cerca de Ríos</span>
                        <h3>Ahuehuete</h3>
                        <span class="species-scientific">Taxodium mucronatum</span>
                        <p>Árbol nacional de México. Ideal para restaurar riberas de ríos y zonas húmedas gracias a su extraordinaria resistencia y tamaño.</p>
                    </div>
                </article>
            </div>
        </section>

        <!-- 5. SECCIÓN PLANTAR -->
        <section id="plantar" class="section-block">
            <div class="plant-container">
                <div class="section-header" style="margin-bottom: 10px;">
                    <span class="section-tag" style="background-color: #ffffff;">Guía Práctica</span>
                    <h2 class="section-title">¿Cómo plantar un árbol correctamente?</h2>
                </div>

                <div class="steps-grid">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <h4>Prepara la cepa</h4>
                        <p>Cava un hoyo de aproximadamente 40 cm de ancho por 40 cm de profundidad en un lugar con buena luz solar.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-number">2</div>
                        <h4>Retira la bolsa</h4>
                        <p>Con cuidado, corta y retira la bolsa de vivero sin deshacer el cepellón de tierra que protege las raíces.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-number">3</div>
                        <h4>Coloca y rellena</h4>
                        <p>Pon el árbol derecho al centro del hoyo, rellena con tierra fértil y presiona suavemente para sacar el aire.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-number">4</div>
                        <h4>Cajete y riego</h4>
                        <p>Forma un borde circular de tierra alrededor para retener el agua y riégalo abundantemente.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. SECCIÓN ACERCA DE -->
        <footer id="acerca-de" class="about-card">
            <h3>Acerca de este Proyecto</h3>
            <p>
                Sitio web informativo dedicado a fomentar la conciencia ecológica, dar a conocer la importancia de la reforestación y brindar herramientas prácticas para el cuidado de nuestros bosques.
            </p>
            <div class="author-badge">
                Desarrollado por: LUNA GONZÁLEZ GLORIA SARAHI
            </div>
        </footer>
    </div>

</body>
</html>