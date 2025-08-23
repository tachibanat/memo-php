<!DOCTYPE html>
<html lang="ja">
  <?php 
    session_start();
    include_once "../common/header.php"; //指定されたファイルを一度だけ読み込む
    $title = "ユーザー登録";
    echo getHeader($title); //head.phpに定義されているgrtHeader    
  ?> 
  
<body>
  <div class="d-flex align-items-center justify-content-center h-100"> <!--BootstrapクラスのFlexboxを使って、内容を画面中央に縦横で揃える設定：縦方向に中央寄せ、横方向に中央寄せ、高さを100%に-->
    <form method="post" action="./action/register.php"> <!--データ送信方法はPOST、送信先URL -->
      <div class="card rounded login-card-width shadow"> <!--card:Bootstrapのカードスタイル、角を丸く、CSSで定義されている？幅設定、影を付ける -->
        <div class="card-body"> <!--カードの中身部分 -->
          <?php
          if (isset($_SESSION['errors'])) {
            echo '<div class="alter alert-danger" role="alert">';
            foreach ($_SESSION['errors'] as $error) {
              echo "<div>{$error}</div>";
            }
            echo '</div>';
            unset($_SESSION['errors']);
          }
          ?>

          <div class="rounded-circle mx-auto border-gray border d-flex mt-3 icon-circle"> <!--rounded-circle：円形にする、 mx-auto：水平方向中央 border-gray border：枠線付き d-flex mt-3：上マージン icon-circle：CSSのカスタムスタイル -->
            <img src="../public/images/animal_stand_zou.png" class="w-75 mx-auto p-2" alt="icon"/> <!--imgタグで画像表示、w-75:幅75％、p-2:パディング -->
          </div>
          <div class="d-flex justify-content-center"> <!--d-flex justify-content-center: 中央に寄せる -->
            <div class="mt-3 h2">SimpleMemo</div> <!--margin-top: 1rem -->
          </div>
          <div class="row mt-3"> <!--Bootstrapの行 -->
            <div class="offset-2 col-8 offset-2"> <!--横幅12分割中、左右２列分の余白・中央8列分を使用 -->
              <label class="input-group w-100"> <!--input-group:Bootstrapでアイコンと入力を横並びにする-->
                <span class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-file-signature"></i></span> <!--fa-file-signature:ペンのアイコン -->
                </span>
                <input type="text" name="user_name" class="form-control" placeholder="ユーザー名" autocomplete="off" maxlength="255" /> <!-- name="user_name":サーバー側で受け取る時の名前 -->
              </label>
              <label class="input-group w-100"> <!--メールアドレス入力 -->
                <span class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-envelope"></i></span>
                </span>
                <input type="text" name="user_email" class="form-control" placeholder="メールアドレス" autocomplete="off" maxlength="255" />
              </label>
              <label class="input-group w-100"> <!--パスワード入力 -->
                <span class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </span>
                <input type="password" name="user_password" class="form-control" placeholder="パスワード" autocomplete="off" maxlength="255" /> <!--type="password:入力が隠される -->
              </label>  
              <button type="submit" class="form-control btn btn-success"> <!--btn btn-success: Bootstrapの緑色ボタン -->
                登録する
              </button>
          </div>
        </div>
      </div>
    </div>
   </form>
  </div>  
</body>
</html>