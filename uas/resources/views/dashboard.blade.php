@extends('layout.master')

@section('title', 'Dashboard - Richeese Chicken Order')

@section('content')
  <h2 class="mb-4">Available Richeese Menu</h2>

  <div class="row">
    <!-- Product Card 1 -->
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/4/5/nudesz6jbmdbdsao2myn4a_size_400_webp.webp" class="card-img-top" alt="Fire Chicken">
        <div class="card-body">
          <h5 class="card-title">Fire Chicken</h5>
          <p class="card-text">Spicy grilled chicken with Richeese sauce.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 32.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Card 2 -->
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/4/5/fpzcsjov7ryj3hj8qbdsxh_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Fire Chicken Whole</h5>
          <p class="card-text">Spicy fried chicken with a cheesy float.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 135.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/12/12/hzsp5rrfzack4bqra7bvmg_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Combo Cheese Crackling</h5>
          <p class="card-text"> original fried chicken with a cheesy float.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 35.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/7/24/eaztqc2zwfygtsvu5ldrbv_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Richiken</h5>
          <p class="card-text">Spicy fried chicken and original chicken with a cheesy float.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 23.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>

   <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/12/13/gtbge9mi2oddzzwyltjsqd_size_400_webp.webp" class="card-img-top" alt="Fire Chicken">
        <div class="card-body">
          <h5 class="card-title">Richicken 3 pcs</h5>
          <p class="card-text">Richicken 3 pcs.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 60.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2025/2/19/hqfjgpi6ohsnfwjpcrsklc_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Combo 1 Flying Chicken Personal</h5>
          <p class="card-text">Spicy fried chicken and pink lava with a cheesy float.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 50.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2025/2/19/o74iokekrwn48o3wrpgfxg_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Combo 2 Flying Chicken Personal</h5>
          <p class="card-text">2 Spicy fried chicken and pink lava with a cheesy float.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 65.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/4/5/feqzjanakqwvwyenq7ise9_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Pink Lava</h5>
          <p class="card-text">Pink Lava.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 18.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/4/5/e9xwcivrjtg6zkwqrtqtvf_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Fruitarian</h5>
          <p class="card-text">Fruitarian.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 18.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2025/3/18/urbsapznmyuav4fx2npqci_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Iced Coffee Milk</h5>
          <p class="card-text">Iced Coffee Milk.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 25.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
     <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/7/24/yj4sobrpskbtauj4yzro2w_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Rich Burger Chicken</h5>
          <p class="card-text">Rich Burger Chicken.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 35.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/7/23/bulsxbwxj4mjipdd47rcfx_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Fire Burger Beef</h5>
          <p class="card-text">Fire Burger Beef.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 40.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/4/5/k66msxtdpw2vynqxxkup9j_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Fire Wedges</h5>
          <p class="card-text">Fire Wedges.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 23.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2024/4/5/bawkjcnx5xwfepwgxxr7fk_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Cheesy Cream Soup</h5>
          <p class="card-text">Cheesy Cream Soup.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 17.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card shadow-sm">
        <img src="https://richeesefactory.com/omni-media/thumb/product_photo/2025/2/19/hbjbmufxppulpmt9u5dtv8_size_400_webp.webp" class="card-img-top" alt="Fire Float">
        <div class="card-body">
          <h5 class="card-title">Richoco Dino Ice Cream</h5>
          <p class="card-text">Richoco Dino Ice Cream.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold text-danger">Rp 17.000</span>
            <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
          </div>
        </div>
      </div>
    </div>
    @foreach($menus as $menu)
  <div class="col-md-4 mb-4">
    <div class="card product-card shadow-sm">
      <img src="{{ $menu->image_url }}" class="card-img-top" alt="{{ $menu->name }}">
      <div class="card-body">
        <h5 class="card-title">{{ $menu->name }}</h5>
        <p class="card-text">{{ $menu->description }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <span class="fw-bold text-danger">Rp {{ number_format($menu->price, 0, ',', '.') }}</span>
          <button class="btn btn-sm btn-danger"><i class="fas fa-cart-plus"></i> Order</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
    
  </div>

@endsection