<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tecno Compu - Productos</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include './inc/navbar.php';?>

  <main>
  
<?php include './inc/barraiz.php';?>

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

        <div class="product-card">
          <img src="images/watch.png" alt="Reloj" />
          <h4>Reloj Inteligente</h4>
          <p>Q1,000.00</p>
        </div>

        <div class="product-card">
          <img src="images/watch.png" alt="Reloj" />
          <h4>Reloj Inteligente</h4>
          <p>Q1,000.00</p>
        </div>

        <div class="product-card">
          <img src="images/watch.png" alt="Reloj" />
          <h4>Reloj Inteligente</h4>
          <p>Q1,000.00</p>
        </div>
        <div class="product-card">
          <img src="images/watch.png" alt="Reloj" />
          <h4>Reloj Inteligente</h4>
          <p>Q1,000.00</p>
        </div>
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
<?php include './inc/footer.php';?>

  <script src="script.js"></script>
</body>
</html>
