<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="\assets/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    <header>
    
                
            </div>
        <div class="header-container">
        <button class="back-btn">
  <a href="/home"><i class="fas fa-arrow-left"> </i></a>
 
  </button>
       
            
            <div class="user-actions">
            <button type="submit" class="btn btn-danger"><a href="{{ route('logout') }}">logout</a></button>

            <a href="/keranjang"><i class="fas fa-shopping-basket" ></i></a>
</div>
</div>
            
          
    </header>

    <nav class="category-menu">
        <ul>
            <!-- <li><a href="#">makanan manis</a></li>
            <li><a href="#">makanan asin</a></li>
            <li><a href="#">minuman</a></li> -->
            
        </ul>
    </nav>

    <main>

    <section class="product-list">
    
    <h2>Produk Kami</h2>
    <div class="products">
        <div class="product">
            <img src="assets/images/risol.jpe">
            <h3>Risoles</h3>
            <p>Rp 5.000</p>
            <input type="hidden" name="product_id" value="1">
            <button>Tambah ke Keranjang</button>
        </div>
        <div class="product">
            <img src="assets/images/tahu.jpg">
            <h3>Tahu</h3>
            <p>Rp 1.000</p>
            <input type="hidden" name="product_id" value="2">
            <button>Tambah ke Keranjang</button>
        </div>
        <div class="product">
            <img src="assets/images/bakpao.jpe">
            <h3>Bakpao</h3>
            <p>Rp 5.000</p>
            <input type="hidden" name="product_id" value="3">
            <button>Tambah ke Keranjang</button>
        </div>
        
        <div class="product">
            <img src="assets/images/brownies.jpg">
            <h3>Brownies</h3>
            <p>Rp 3.000</p>
            <input type="hidden" name="product_id" value="4">
            <button>Tambah ke Keranjang</button>
        </div>
        
        <div class="product">
            <img src="assets/images/putu.jpg">
            <h3>Putu Ayuu</h3>
            <p>Rp 1.000</p>
            <input type="hidden" name="product_id" value="5">
            <button>Tambah ke Keranjang</button>
        </div>
        
        <div class="product">
            <img src="assets/images/soes.jpg">
            <h3>soes</h3>
            <p>Rp 2.000</p>
            <input type="hidden" name="product_id" value="6">
            <button>Tambah ke Keranjang</button>
        </div>
        <div class="product">
            <img src="assets/images/martabak.jpg">
            <h3>salad buah</h3>
            <p>Rp 10.000</p>
            <input type="hidden" name="product_id" value="7">
            <button>Tambah ke Keranjang</button>
        </div>
        <div class="product">
            <img src="assets/images/bakwan.jpg">
            <h3>Bala bala</h3>
            <p>Rp 1.000</p>
            <input type="hidden" name="product_id" value="8">
            <button>Tambah ke Keranjang</button>
        </div>
    
        
    </div>
    </form>
</section>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Tentang Kami</h4>
                <p>Informasi tentang perusahaan, sejarah, dan misi.</p>
            </div>
            <div class="footer-section">
                <h4>Bantuan</h4>
                <p>Pusat bantuan, layanan pelanggan, dan FAQ.</p>
            </div>
            <div class="footer-section">
                <h4>Ikuti Kami</h4>
                <p>Ikuti kami di media sosial.</p>
            </div>
        </div>
    </footer>
</body>
</html>
