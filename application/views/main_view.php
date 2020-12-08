

  <div class="container">
  <div class="block" style="margin-bottom: 20px;">
    <h2>Загрузите txt файл для чтения </h2>
    <form method="post" action="/" enctype="multipart/form-data">
    <input type="file" id="inputfile" name="inputfile"></br>
    <input type="submit" value="Нажмите что бы загрузить">
    </form>
  </div>
  <?php if($data['file'][0]):?>
  <p><?php echo $data["file"][0]?></p>
  <?php endif?>
  <div class="block">
  <h2>Задать слова</h2>
  <a href="#data" id="inline" class="badge badge-success">Поиск расстаяния между словами</a>



  <?php if($data):?>
  <p>Минимальное значение между словами:<?php echo $data[0]?></p>
  <p>Максимально значение между словами:<?php echo $data[1]?></p>
  <?php else:?>
      <p>Что бы определить расстояние между словами введите значение в инпут</p>
    <?php endif?>
  </div>
</div>
<div id="myModalBox"  class="container" style="width:50%; display:none;">
  <div id="data">

    <form id ="form" method="post" action="/" >
      <div class="form-group">
        <label for="exampleInputEmail1">Перое слово</label>
        <input id="pname" name="first_word" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Первое слово">
        <small id="pnameHelp" class="form-text text-muted" style="display:none">Введи первое слово.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Второе слово</label>
        <input id="pprice" name="second_word" type="string" class="form-control" id="exampleInputPassword1" placeholder="Второе слово">
        <small id="ppriceHelp" class="form-text text-muted" style="display:none">Введи второе слово.</small>
      </div>

      <button id="addProduct" type="submit" class="btn btn-primary" >Найти расстояние</button>
    </form>
  </div>
</div>
