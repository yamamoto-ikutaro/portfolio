<!DOCTYPE html>
<html lang="ja">
<head>

  <!-- Basic Page Needs
  -------------------------------------------------- -->
  <meta charset="utf-8">
  <title>Portfolio</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  -------------------------------------------------- -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  -------------------------------------------------- -->
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/b6083e34a0.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  
  

</head>
<body>
  @if (count($errors) > 0)
      <ul id="validation">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif
  @if(session('message'))
    <div id="session">
        {{ session('message') }}
    </div>
  @endif
  <header>
    <div id="site-title">
      <h1>Portfolio</h1>
    </div>
    <div id="sp-menu">
      <div>
        <i class="fas fa-bars" id="open"></i>
      </div>
      <div id="category">
        <ul>
          <li><a href=#profile_content>TOP</a></li>
          <li><a href=#skills>SKILLS</a></li>
          <li><a href=#works>ORIGINAL SITES</a></li>
          <li><a href=#contact>CONTACT</a></li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div id="profile_content">
      <img src="images/梅の画像.jpg" alt="プロフィール写真" width="200px" height="200px" id="profile_image">
      <div id="intro">
        <p id="description">
          社会人3年目で、翻訳の仕事をしています。<br>約半年間プログラミング学習を続けており、<br>2か月間のオンラインスクールと独学を通して学んだHTML/CSS、PHP/Laravelでオリジナルサイトを作成しました。<br>
          現在では、JavaScriptの学習をしています。
        </p>
        <div id="circle"></div>
      </div>
    </div>
    <section id="skills">
      <div class="text-center title">SKILLS</div>
      <div class="content">
        <div id="html_css" class="text-center">
          <div class="skill-circle">
            <h3 class="text-center" id="title_html_css">HTML/CSS</h3>
            <i class="fas fa-code" id="coding-icon"></i>
          </div>
          <div class="skill-description">
            <p>基本的なHTML/CSSのコーディングが可能です。<br>
            CSSに関してはメディアクエリを使ったレスポンシブデザインの実装まで学習しました。
            </p>
          </div>
        </div>
        <div id="php_laravel" class="text-center">
          <div class="skill-circle">
            <h3 class="text-center" id="title_php_laravel">PHP/Laravel</h3>
            <i class="fab fa-php" id="php-icon"></i>
          </div>
          <div class="skill-description">
            <p>PHP/Laravelを2か月間オンラインスクールで学習し、2つのオリジナルサイトを作成しました。<br>
            受講終了後もReaDoubleやQiitaを参考に、新機能を追加するなどして学習を続けています。</p>
          </div>
        </div>
        <div id="english" class="text-center">
          <div class="skill-circle">
            <h3 class="text-center" id="title_english">English</h3>
            <i class="fas fa-pen" id="pen-icon"></i>
          </div>
          <div class="skill-description">
            <p>大学では英米語を専攻し、ゼミで環境問題について学習しました。<br>
            現在では、大学で身に着けた英語力を活かし翻訳の仕事をしています。</p>
          </div>
        </div>
      </div>
    </section>
    <section id="works">
      <div class="background">
        <div class="text-center title">ORIGINAL SITES</div>
        <div class="content">
          <div id="ecsite">
            <div class="site-image-box">
              <div class="box-content">
                <img src="images/ecsiteイメージ.png" alt="通販サイトイメージ" width="500px" height="500px" id="ecsite_image">
                <div class="box-inner">
                  <h3>ECSITE</h3>
                  <a target="_blank" href="https://ecsite-yamamoto.herokuapp.com/">
                    <span class="site-button">サイトを開く</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="site-description">
              <h3>通販サイト</h3>
              <h4>作成理由</h4>
              <p>学習したプログラミングの知識を活かし、まずは日常生活でよく利用する通販サイトを作成してみようと考えました。実家が農家なので、家で採れた野菜や果物などを通販サイトで販売することを想定して作成しています。</p>
              <h4>サイト概要</h4>
              <p>会員登録/ログイン機能を実装しており、ログイン後カートへの商品追加～注文までが可能になります。(決済機能は実装していません)<br>
              オンラインスクールでは、在庫切れ商品をカート内から自動で削除、注文時のトランザクション処理など独学では気付くことができていなかったところまでご指摘いただき、実装に至りました。<br>
              管理者機能も追加しており、注文情報の確認や商品の追加/編集/削除が可能です。商品画像のアップロードにはS3バケットを使用しています。<br>
              オンラインスクール受講後も学習を続け、商品検索機能やユーザーへの注文情報メール送信機能、商品削除時にS3バケット内から当該商品の画像が自動で削除される機能などを追加しています。<br>
              ※詳細なサイト概要は<a target="_blank" href="https://docs.google.com/presentation/d/1uN6fkOI1-LVHViN_rUJL0ukGiWQ9ssZP7Nua4_VjhMM/edit?usp=sharing">こちら</a>
              </p>
              <div class="site_intro_icon">
                <a target="_blank" href="https://github.com/yamamoto-ikutaro/ecsite.git"><i class="fab fa-github"></i>コード</a>
                <a target="_blank" href="https://cacoo.com/diagrams/4WsRI9FLFUqkGhGT/F2301"><i class="far fa-map"></i>サイト設計</a>
              </div>
            </div>
          </div>
          <div id="task_management">
            <div class="site-description">
              <h3>業務管理サイト</h3>
              <h4>作成理由</h4>
              <p>社内で利用されるスケジュール管理ツールでは業務の登録が行えないため、予定・業務の両方を一つのサイトで確認できるようなサイトを作ってみようと考えました。</p>
              <h4>サイト概要</h4>
              <p>ログイン後、自身の予定と業務の確認/登録/編集/削除に加え、予定登録については資料のアップロード/ダウンロードを行うことができます。<br>
              また、伝達事項やToDoリストの追加が可能です。ToDoリストについては、メールでのリマインド機能を実装しており開発環境のcloud9では指定時間にリマインドメールが届きましたがHerokuへのデプロイ後使用不可になっています。(未解決の状態)<br>
              ナビゲーションバーの「メンバースケジュール」では、予定を確認したいメンバーを検索し追加することができます。
              <br>
              ※詳細なサイト概要は<a target="_blank" href="https://docs.google.com/presentation/d/1KtvR9xzLwvU1iw5qVs04_VOPpsbPasTHOOe1_1u3VDE/edit?usp=sharing">こちら</a>
              </p>
              <div class="site_intro_icon">
                <a target="_blank" href="https://github.com/yamamoto-ikutaro/task_management.git"><i class="fab fa-github"></i>コード</a>
                <a target="_blank" href="https://cacoo.com/diagrams/JtGklNewEnd730V3/EFBF8"><i class="far fa-map"></i>サイト設計</a>
              </div>
            </div>
            <div class="site-image-box">
              <div class="box-content">
                <img src="images/業務管理イメージ.png" alt="業務管理サイトイメージ" width="500px" height="380px" id="task_app_image">
                <div class="box-inner">
                  <h3>TASK MANAGEMENT</h3>
                  <a target="_blank" href="https://task-management-yamamoto.herokuapp.com/">
                    <span class="site-button">サイトを開く</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="contact">
        <div class="content">
          <div class="text-center title">CONTACT</div>
          {!! Form::open(['route' => 'contact']) !!}
              {!! Form::text('name', null, ["class" => "form", 'placeholder' => '氏名']) !!}
              {!! Form::email('email', null, ["class" => "form", 'placeholder' => 'メールアドレス']) !!}
              {!! Form::text('subject', null, ["class" => "form", 'placeholder' => '件名']) !!}
              {!! Form::textarea('content', null, ['id' => 'form-message', 'placeholder' => 'メッセージ']) !!}
            {!! Form::submit('送信', ["id" => "submit"]) !!}
          {!! Form::close() !!}
        </div>
      </section>
    </div>
  </main>
  <script src="/js/main.js"></script>
</body>
</html>