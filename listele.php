<div class="site-section site-section-sm pb-0">
  <div class="container">
    <div class="row">
      <form method="post" action="arama" class="form-search col-md-12" style="margin-top: -100px;">
        <div class="row  align-items-end">
          <div class="col-md-3">
            <label style="color: white" for="list-types">EMLAK TİPİ</label>
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="emlaktip" id="list-types" class="form-control d-block rounded-0">
                <option value="satilik">Satılık</option>
                <option value="kiralik">Kiralık</option>
                <option value="arsa">Arsa</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label style="color: white" for="offer-types">DÜşÜk Fİyat</label>
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="dusukfiyat" id="offer-types" class="form-control d-block rounded-0">
                <option value="1000">1000</option>
                <option value="6000">6000</option>
                <option value="7000">7000</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <label style="color: white" for="select-city">Yüksek Fİyat</label>
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="yuksekfiyat" id="select-city" class="form-control d-block rounded-0">
                <option value="10000">10000 </option>
                <option value="15000">15000</option>
                <option value="750000">750000</option>

              </select>
            </div>
          </div>
          <div class="col-md-3">
            <input name="aramayap" type="submit" class="btn btn-success text-white btn-block rounded-0" value="Arama">
          </div>
        </div>
      </form>
    </div>  
<form action="listearama.php" method="POST">
    <div class="row">
      <div class="col-md-12">
        <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
          <div class="mr-auto">


          </div>
          <div class="ml-auto d-flex align-items-center">
            <div>
             <select name="listeleme" class="form-control form-control-sm d-block rounded-0">
              <option value="">Sırala</option>
              <option value="artanfiyat">Artan Fiyat</option>
              <option value="azalanfiyat">Azalan Fiyat</option>
              <option value="soneklenen">Son Eklelen</option>
              <option value="ilkeklenen">İlk Yüklenen</option>
            </select>
          </div>


          <div class="select-wrap">


            <button style="margin-left: 10px; height: 33px"  class="btn btn-info" type="submit" name="listelemekaydet">Listele</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
</div>