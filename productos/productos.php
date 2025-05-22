<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tecno Compu - Productos</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <header>
    <div class="logo">TECNO COMPU</div>
    <nav>
      <a href="#">Inicio</a>
      <a href="#">Productos</a>
      <a href="#">Novedades</a>
      <a href="#">Contacto</a>
    </nav>
    <div class="search-cart">
      <input type="text" placeholder="Buscar..." />
      <span>🛒</span>
    </div>
  </header>

  <main>
    <aside class="filters">
      <h3>Categorías</h3>
      <label><input type="checkbox" /> Categoría 1</label>
      <label><input type="checkbox" /> Categoría 2</label>
      <label><input type="checkbox" /> Categoría 3</label>
      <label><input type="checkbox" /> Categoría 4</label>
    </aside>

    <section class="products-section">
      <div class="products-header">
        <h2>Todos los productos</h2>
        <select>
          <option>Relevancia</option>
          <option>Precio: menor a mayor</option>
          <option>Precio: mayor a menor</option>
          <option>A-Z</option>
          <option>Z-A</option>
        </select>
      </div>

      <div class="product-grid">
        <!-- Producto -->
        <div class="product-card">
          <img src="images/watch.png" alt="Reloj" />
          <h4>Reloj Inteligente</h4>
          <p>Q1,000.00</p>
        </div>
        <!-- Repite el bloque anterior con diferentes productos -->
      </div>
    </section>
  </main>

  <section class="help">
    <h3>¿Necesitas ayuda?</h3>
    <p>Haz clic para obtener respuestas rápidas y soporte en tiempo real.</p>
    <button>Contáctanos</button>
  </section>

  <footer>
    <div class="info">
      <h4>Información</h4>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Atención</a></li>
        <li><a href="#">Garantía</a></li>
      </ul>
    </div>
    <div class="contact">
      <h4>TecnoCompu</h4>
      <p>2a. Finca A, zona 10</p>
      <p>Mixco, Guatemala</p>
      <p>info@tecnocompu.com</p>
      <p>502 5844-4241</p>
    </div>
    <div class="social">
      <p>© 2025 TecnoCompu</p>
      <div class="icons">🔵 🟣 ⚫ 🔗</div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
