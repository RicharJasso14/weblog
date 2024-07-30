<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="icon-user" href="form.html">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    <!-- Social Buttons CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demo.css">
    <title>Blog sobre Jesús</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1em;
            text-align: center;
        }
        nav {
            margin: 0;
            padding: 0;
            background-color: #333;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #111;
        }
        main {
            padding: 20px;
        }
        .post, .section {
            background-color: white;
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .post h2, .section h2 {
            margin-top: 0;
        }
        .post img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .post p, .section p {
            text-align: justify;
        }
        footer {
            text-align: center;
            padding: 1em;
            background-color: #4CAF50;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .social-buttons {
            text-align: center;
            margin: 20px 0;
        }
        .social-buttons__button {
            display: inline-block;
            margin: 0 10px;
            width: 32px;
            height: 32px;
        }
        .social-button__inner {
            width: 100%;
            height: 100%;
        }
        .social-button__inner svg {
            width: 100%;
            height: 100%;
        }
        .jesus-image {
            text-align: center;
            margin: 20px 0;
        }
        .jesus-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Blog sobre Jesús</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Sobre Jesús</a></li>
            <li><a href="#">Contactar</a></li>
        </ul>
    </nav>
    <main>
        <!-- Posts Section -->
        <?php
            $posts = [
                [
                    'title' => 'El nacimiento de Jesús',
                    'content' => 'Jesús de Nazaret nació en Belén, en Judea, durante el reinado de Herodes el Grande. Según la tradición cristiana, su nacimiento fue milagroso, pues fue concebido por la Virgen María por obra del Espíritu Santo.',
                    'image' => 'img/naci.jpg'
                ],
                [
                    'title' => 'Los milagros de Jesús',
                    'content' => 'Jesús realizó numerosos milagros a lo largo de su vida, desde curar a los enfermos hasta resucitar a los muertos. Estos milagros no solo mostraban su divinidad, sino también su compasión y amor por la humanidad.',
                    'image' => 'img/mila.webp'
                ],
                [
                    'title' => 'La crucifixión y resurrección',
                    'content' => 'La crucifixión de Jesús es uno de los eventos más importantes del cristianismo. Fue condenado a muerte y crucificado, pero al tercer día resucitó de entre los muertos, demostrando su victoria sobre el pecado y la muerte.',
                    'image' => 'img/cruci.avif'
                ]
            ];

            foreach ($posts as $post) {
                echo "<div class='post'>";
                echo "<h2>{$post['title']}</h2>";
                echo "<img src='{$post['image']}' alt='{$post['title']}'>";
                echo "<p>{$post['content']}</p>";
                echo "</div>";
            }
        ?>
        <!-- Sections -->
        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>Virtudes Teologales - Ana Montoya</h2>
            <img src="img/ana1.jpg" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <p><strong>Fe:</strong> Creencia firme y confiada en algo o alguien.</p>
            <p><strong>Esperanza:</strong> Actitud o sentimiento de anticipar y desear que ocurra algo bueno en el futuro.</p>
            <p><strong>Caridad:</strong> Acto de mostrar amor y compasión hacia los demás sin esperar nada a cambio.</p>
        </section>
        
        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>Virtudes Cardinales - Ana Montoya</h2>
            <img src="img/ana2.jpg" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <p><strong>Prudencia:</strong> Capacidad de tomar decisiones y actuar con cautela y discernimiento.</p>
            <p><strong>Templanza:</strong> Virtud que implica la moderación y el autocontrol en los deseos y placeres.</p>
            <p><strong>Fortaleza:</strong> Virtud que implica la capacidad de enfrentar y superar desafíos, adversidades y dificultades con valor y determinación.</p>
            <p><strong>Justicia:</strong> Virtud de práctica para dar a cada persona lo que le corresponde, basada en principios de equidad y moralidad.</p>
        </section>

        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>Requisitos para que un acto se considere milagro - Ana Montoya</h2>
            <img src="img/ana3.jpeg" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <p>1. Superar las leyes naturales.</p>
            <p>2. Ser atribuido a una intervención divina.</p>
            <p>3. Confirmar una creencia o propósito espiritual.</p>
        </section>
        
        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>7 Sacramentos y en qué consisten - Jennifer Morales</h2>
            <img src="img/jenny1.webp" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <p><strong>Bautismo:</strong> Es aquello que le da un sentido a la vida cristiana. Se limpia a la persona del pecado original y se vuelve un miembro de la Iglesia.</p>
            <p><strong>Penitencia:</strong> Los fieles consiguen el perdón después del bautismo.</p>
            <p><strong>Eucaristía:</strong> (Descripción de la Eucaristía aquí).</p>
            <p><strong>Confirmación:</strong> (Descripción de la Confirmación aquí).</p>
            <p><strong>Unción de los enfermos:</strong> (Descripción de la Unción de los enfermos aquí).</p>
            <p><strong>Orden sacerdotal:</strong> (Descripción del Orden sacerdotal aquí).</p>
            <p><strong>Matrimonio:</strong> (Descripción del Matrimonio aquí).</p>
        </section>

        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>Libros de la Biblia, Mandamientos y Formas de Concebir a Dios - Terri</h2>
            <img src="img/terri1.webp" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <p><strong>Libros de la Biblia:</strong> En total son 73 libros. 46 de ellos pertenecen al Antiguo Testamento, y los otros 27 son parte del Nuevo Testamento.</p>
        </section>
        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>Mandamientos </h2>
            <img src="img/terri2.jpg" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <ul>
                <li>Amarás a Dios sobre todas las cosas.</li>
                <li>No tomarás el nombre de Dios en vano.</li>
                <li>Santificarás las fiestas.</li>
                <li>Honrarás a tu padre y a tu madre.</li>
                <li>No matarás.</li>
                <li>No cometerás actos impuros.</li>
                <li>No robarás.</li>
                <li>No darás falso testimonio ni mentirás.</li>
                <li>No consentirás pensamientos ni deseos impuros.</li>
                <li>No codiciarás los bienes ajenos.</li>
            </ul>
        </section>
        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>Formas de Concebir a Dios:</h2>
            <img src="img/terri3.webp" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <ul>
                <li>Animismo</li>
                <li>Teísmo</li>
                <li>Politeísmo</li>
                <li>Monoteísmo</li>
                <li>Panteísmo</li>
                <li>Agnosticismo</li>
                <li>Ateísmo</li>
            </ul>
        </section>

        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>5 Mandamientos de la Iglesia Católica - Gustavo Alberto Gómez</h2>
            <img src="img/gus1.jpg" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <ul>
                <li>Oír misa entera los domingos y fiestas de precepto.</li>
                <li>Confesar tus pecados al menos una vez al año.</li>
                <li>Comulgar por Pascua de Resurrección.</li>
                <li>Ayunar y abstenerse de carne los días prescritos.</li>
                <li>Ayudar a la Iglesia en sus necesidades.</li>
            </ul>
        </section>

        <section class="section"style="text-align: center; margin: 20px 0;">
            <h2>Religión que fundó Jesucristo - Gustavo Alberto Gómez</h2>
            <img src="img/gus2.webp" alt="Virtudes" style="max-width: 100%; height: auto; border-radius: 8px;">
            <p>Jesucristo es la figura central del cristianismo, por lo tanto, fundó el cristianismo. Sin embargo, es importante destacar que Jesús de Nazaret nació y creció en el seno del judaísmo, y su enseñanza inicial estaba dirigida principalmente a los judíos.

Jesús se refirió frecuentemente a la Ley de Moisés y a las Escrituras hebreas, y su mensaje inicial se centró en la necesidad de arrepentimiento y en la llegada del Reino de Dios, que era una idea central en el judaísmo.

Fue después de su muerte y resurrección que sus seguidores, liderados por los apóstoles, comenzaron a predicar su mensaje a los gentiles (no judíos) y a establecer las bases del cristianismo como una religión distinta del judaísmo. Sin embargo, las raíces judías de Jesús y su enseñanza inicial son fundamentales para entender el contexto y el significado de su mensaje.
</p>
        </section>
        <!-- Posts Section-------------------------------------------------------------------------------------------------------------------------------------------->
        <section class="jesus-image">
            <h2>JESÚS ES TODO</h2>
            <img src="img/jesus.AVIF" alt="Jesús">
        </section>
        
        <section class="content contact">
            <h2 class="title">Contacto</h2>
            <div class="wrapper">
                <a href="https://x.com/RicharJasso" class="icon twitter">
                    <div class="tooltip">Twitter</div>
                    <span><i class="fab fa-twitter"></i></span>
                </a>
                <a href="https://www.instagram.com/richar_jasso/" class="icon instagram">
                    <div class="tooltip">Instagram</div>
                    <span><i class="fab fa-instagram"></i></span>
                </a>
                <a href="https://github.com/RicharJasso14" class="icon github">
                    <div class="tooltip">Github</div>
                    <span><i class="fab fa-github"></i></span>
                </a>
                <a href="https://www.youtube.com/channel/UC35oXbZ9JQ5yufTUzrozrgA" class="icon youtube">
                    <div class="tooltip">Youtube</div>
                    <span><i class="fab fa-youtube"></i></span>
                </a>
            </div>
        </section>
    </main>
    <footer>
        &copy; 2024 Blog sobre Jesús. Todos los derechos reservados por Ricardo David Jasso Bañuelos.
    </footer>
</body>
</html>

